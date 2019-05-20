<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Mail\SendMailRefer;
use App\Reservation;
use App\Tour;
use App\Transfer;
use Illuminate\Support\Facades\Input;
use PayPal\Api\Amount;
use Illuminate\Http\Request;
use PayPal\Api\Item;
/** All Paypal Details class **/
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailBuyer;
use App\Mail\SendMailAdmin;
use URL;
use App\Mail\SendReferenceCode;

class PaymenPayPalController extends Controller
{
    private $_api_context;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /** PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
                $paypal_conf['client_id'],
                $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function index()
    {
        return view('sitio.paywithpaypal');
    }

    public function payWithpaypal(Request $request){
        dd($request->all(),Session::all());
        $reservation = Reservation::create([
            "nombre"   => $request->input('nombre'),
            "apellido" => $request->input('apellido'),
            "correo"   => $request->input("correo"),
            "telefono" => $request->input("telefono"),
            "comentarios" => $request->input('comentarios'),
            "precio" => !is_null($request->input('finalPrice')) ? (float)$request->input('finalPrice') : (float)$request->input('precio'),
            "hotel"  => $request->input('hotel')
        ]);

        foreach (session('carrito')['traslados'] as $traslado) {
            $traslado["reservation_id"] = $reservation->id;
            $trans = Transfer::create($traslado);
            $reservation->purchase = $trans->para;
            $reservation->save();
        }

        foreach (session('carrito')['tours'] as $tour) {
            $tour["reservation_id"] = $reservation->id;
            $tourS = Tour::create($tour);

            if(strlen($reservation->purchase) > 0)
                $reservation->purchase = $reservation->purchase .' / '. $tourS->tour;
            else
                $reservation->purchase = $tourS->tour;

            $reservation->code = $tour['coderefe'];
            $reservation->save();
        }

        $reservation->id_pago = "fvr";
        $reservation->estado = 1;
        $reservation->save();

        session([
            "reservation" => array(),
            "carrito" => array(
                "traslados" => array(),
                "tours" => array(),
                "vip" => array(),
                "wifi" => array(),
            )
        ]);

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $item_1 = new Item();
        $item_1->setName('Item 1') /** item name **/
        ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($reservation->precio); /** unit price **/

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($reservation->precio);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Payment in dominicana around');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::to('status')) /** Specify return URL **/
        ->setCancelUrl(URL::to('status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));

        /** dd($payment->create($this->_api_context));exit; **/
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PayPalConnectionException $ex) {
            if (\Config::get('app.debug')) {
                \Session::put('error', 'Connection timeout');
                return Redirect::to('paypal');
            } else {
                \Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::to('paypal');
            }
        }

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());
        $reservation->id_pago = $payment->getId();
        $reservation->save();

        if (isset($redirect_url)) {
            /** redirect to paypal **/
            if(isset($tourS)){
                $coupon = Coupon::whereCode($reservation->code)->first();
                Mail::to($coupon->refers)->send(new SendReferenceCode($reservation,$reservation->purcharse,$reservation->code));
            }

            Mail::to('juanchoss084@gmail.com')->send(new SendMailAdmin($reservation,$reservation->purcharse,$reservation->code));
            Mail::to($reservation->correo)->send(new SendMailBuyer($reservation,$reservation->purcharse,$reservation->code));
            return Redirect::away($redirect_url);
        }
        \Session::put('error', 'Unknown error occurred');
        return Redirect::to('paypal');
    }

    public function getPaymentStatus(){
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');

        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
            \Session::put('error', 'Payment failed');
            return Redirect::to('paypal');
        }

        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));


        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);
        if ($result->getState() == 'approved') {
            //$this->sendMAil();
            \Session::put('success', 'Payment success');
            return Redirect::to('paypal');
        }

        \Session::put('error', 'Payment failed');
        return Redirect::to('paypal');
    }
}
