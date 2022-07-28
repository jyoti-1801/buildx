<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $title; 
    public $user_details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title, $user_details)
    {
         $this->title = $title; 
        $this->user_details= $user_details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
         return $this->subject($this->title) ->view('user_mail');
    }
}
