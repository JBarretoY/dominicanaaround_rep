<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Reservation;

class SendMailAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $book;
    public $tour;
    public $code;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Reservation $reser,$tour,$code)
    {
        $this->book =  $reser;
        $this->tour = $tour;
        $this->code = $code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.eadmin')->subject('Buy Notification');
    }
}
