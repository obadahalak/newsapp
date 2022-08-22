<?php

namespace App\Http\services;

use Carbon\Carbon;
use App\Models\Course;
use App\Mail\SendCertificateUser;
use Illuminate\Support\Facades\Mail;
use App\Http\services\I18N\I18N_Arabic;
use App\Models\UserCertificate;

trait SendCertificate
{

    public $token , $userName, $time, $fullNameImage, $fontFile, $fontSize, $angle, $posCourseX, $posCourse, $postTimeX, $postTimeY , $postCoachNameX ,$postCoachNameY;

    public function __construct()
    {

        $this->token = auth('sanctum')->user()->id;

        $this->time = Carbon::now()->format('Y-m-d');

        $this->userName = auth('sanctum')->user()->user_name;

        $this->fullNameImage = $this->userName . time() . '.jpg';

        $this->fontFile = "C:\Windows\Fonts\arial.ttf";

        $this->fontSize = 20;

        $this->angle = 0;

        $this->posCourseX = 640;

        $this->posCourseY = 445;

        $this->postTimeX = 500;

        $this->postTimeY = 722;

        $this->postCoachNameX = 250;

        $this->postCoachNameY = 772;

    }

    public function isSuccess($courseId)
    {

        try {
            $RateCourse = Course::find($courseId)->successRate;
            $markuser = auth('sanctum')->user()->getMarkUser($courseId);
            //code...
        } catch (\Throwable $th) {
            return false;
        }

        if ($markuser >= $RateCourse)
            return True;
        else
            return false;
    }

    public function  is_sendedCertificate($courseId): bool
    {

            $isExsist=UserCertificate::where('course_id', $courseId)
                ->where('user_id', $this->token)
                ->first();
            if($isExsist){
                return false;
            }
            return true;
       }


    public function createCertificate($courseId) {

        if ($this->isSuccess($courseId)) {

            if(!$this->is_sendedCertificate($courseId)){
                return response()->json(['Message'=>'تم ارساال الشهادة من قبل'],403);
            }

            $courseName = Course::find($courseId)->name_ar;

            $coachName = Course::find($courseId)->coachName;

            $posStudantX = 590;

            $posStudantY = 526;

            if (preg_match("/\p{Arabic}/u", $this->userName)) {
                $posStudantX = 760;
                $posStudantY = 526;
            }

            $Arabic = new  I18N_Arabic('Glyphs');

            $studantName = $Arabic->utf8Glyphs($this->userName);

            $CourseName = $Arabic->utf8Glyphs($courseName);

            $img = imagecreatefromjpeg(public_path('certificate.jpg'));

            $fontColor = imagecolorallocate($img, 0, 0, 0);

            $this->addTextStudantName($img ,$posStudantX, $posStudantY,$fontColor, $studantName);

            $this->addTextCoursehName($img, $fontColor,  $CourseName);

            $this->addTextTime($img , $fontColor);

            $this->addTextCoachName($img,  $fontColor , $coachName);

            imagejpeg($img, 'storage/CertificateImages/' . $this->fullNameImage);

            imagedestroy($img);

            $this->saveCertificateUser($courseId , $this->fullNameImage);

            $this->sendCertificateToEmailUser($courseId, $this->fullNameImage);

        }
        else {
            return response()->json('Fail', 401);
        }
    }


    public function addTextStudantName($img ,$posStudantX, $posStudantY,$fontColor, $studantName){
        imagettftext($img, $this->fontSize, $this->angle, $posStudantX, $posStudantY, $fontColor, $this->fontFile, $studantName);
    }
    public function addTextTime($img, $fontColor){
        imagettftext($img, $this->fontSize, $this->angle, $this->postTimeX, $this->postTimeY, $fontColor, $this->fontFile, $this->time);
    }
    public function addTextCoachName($img, $fontColor , $coachName){
            imagettftext($img, $this->fontSize, $this->angle, $this->postCoachNameX, $this->postCoachNameY, $fontColor, $this->fontFile, $coachName);
    }
    public function addTextCoursehName($img,   $fontColor,  $CourseName){
        imagettftext($img, $this->fontSize, $this->angle, $this->posCourseX, $this->posCourseY, $fontColor, $this->fontFile, $CourseName);
    }

    public function saveCertificateUser($courseId , $fullNameImage){

        auth()->user()->userCertificate()->create([

            'certificate' => 'CertificateImages/' . $fullNameImage,

            'course_id' => $courseId,

        ]);
    }
    public function sendCertificateToEmailUser($courseId, $certificate)
    {

        Mail::to(auth('sanctum')->user()->email)->send(new SendCertificateUser($courseId, 'CertificateImages/' . $certificate));
    }
}
