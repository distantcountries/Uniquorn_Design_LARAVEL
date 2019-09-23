<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Newsletter;

class NewsletterSubscribed extends Mailable
{
    use Queueable, SerializesModels;
    
    public $newsletter;

    public function __construct(Newsletter $newsletter)
    {
        $this->newsletter = $newsletter;
    }

    public function build()
    {
        return $this->view('emails.email-newsletter-subscribed');
    }
}
