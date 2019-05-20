<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Reservation;

class SendReferenceCode extends Mailable
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
    public function __construct(Reservation $book, $tour,$code)
    {
        $this->book = $book;
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
        return $this->view('emails.referenceCode')->subject('Buy Notification');
    }
}
