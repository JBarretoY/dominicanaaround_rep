<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Coupon;
use App\Reservation;
use App\Tour;
use App\Transfer;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailBuyer;
use App\Mail\SendMailAdmin;
use App\Mail\SendReferenceCode;

class CashHand extends Controller
{
    public function makeCashHand(Request $request){
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

        $reservation->estado = 1;
        $reservation->type = 'CashHand';
        $reservation->id_pago = " ";
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

        if(isset($tourS) && strlen($reservation->code) > 0){
            $coupon = Coupon::whereCode($reservation->code)->first();
            Mail::to($coupon->refers)->send(new SendReferenceCode($reservation,$reservation->purcharse,$reservation->code));
        }

        Mail::to('info@dominicanaaround.com')->send(new SendMailAdmin($reservation,$reservation->purcharse,$reservation->code));
        Mail::to($reservation->correo)->send(new SendMailBuyer($reservation,$reservation->purcharse,$reservation->code));

        if(is_null($reservation)) {
            Session::put('error',"Fail to make Book");
            return \Redirect::to('paypal');
        }else{
            Session::put('success','Book make Successfully');
           return \Redirect::to('paypal');
        }
    }
}
