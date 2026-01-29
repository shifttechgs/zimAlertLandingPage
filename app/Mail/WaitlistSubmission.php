<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WaitlistSubmission extends Mailable
{
    use Queueable, SerializesModels;

    public $userEmail;
    public $betaTesting;

    /**
     * Create a new message instance.
     *
     * @param string $email
     * @param bool $betaTesting
     */
    public function __construct($email, $betaTesting = false)
    {
        $this->userEmail = $email;
        $this->betaTesting = $betaTesting;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New ZimAlert Waitlist Submission')
                    ->view('emails.waitlist');
    }
}
