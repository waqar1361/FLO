<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InquiryAnswer extends Mailable
{
    use Queueable, SerializesModels;

    public $question;
    public $answer;
    
    public function __construct($question,$answer)
    {
        $this->question = $question;
        $this->answer = $answer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.answerQuery');
    }
}
