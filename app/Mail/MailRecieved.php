<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail;

class MailRecieved extends Mailable
{
    use Queueable, SerializesModels;
    
    public $mail;

    public function __construct(Mail $mail)
    {
        $this->mail = $mail;
    }

    public function build()
    {
        return $this->view('emails.email-recieved');
    }
}
