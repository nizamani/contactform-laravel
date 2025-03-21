<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class FreelancerRequestMail extends Mailable
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('New Freelancer Request')
                    ->view('emails.freelancer-request')
                    ->with('data', $this->data);
    }
}
