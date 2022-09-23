<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MarkDownContactEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $data = [];
    public $first_name = "Asdf";
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $user)
    {
        $this->data = $user;
        //$this->first_name = $user['first_name'];
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->data['email'])
        ->subject($this->data['subject'])
        ->markdown('emails.markdown-contactemail');
    }
}
