<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Models\UserCertificate;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendCertificateUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $courseId;
    public $certificate;
    public function __construct($courseId , $certificate)
    {
        $this->courseId=$courseId;
        $this->certificate=$certificate;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $getCertificate=UserCertificate::where('course_id',$this->courseId)
        ->where('certificate',$this->certificate)
        ->first();

        return $this->view('Email.SendCertificateView',compact('getCertificate'));
    }
}
