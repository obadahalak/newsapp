<?php

namespace App\Http\Controllers\Api\sections;

use Error;
use App\Models\Quiz;
use App\Models\Course;
use App\Models\Lession;
use App\Models\MarkUser;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\services\LikeService;
use App\Http\Traits\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;

use App\Http\Resources\QuizeResource;
use App\Http\services\CommentService;
use App\Http\Resources\CourseResource;
use App\Http\services\SendCertificate;
use App\Http\Resources\LessionResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ResultQuzieRequest;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    use ResponseTrait;
    use  SendCertificate;

    public function listCourse($lan)
    {

        if ($lan == 'ar') {

            return  CourseResource::collection(Course::select('id', 'name_ar', 'details_ar','successRate')->lazy());
        } else {
            return  CourseResource::collection(Course::select('id', 'name', 'details','successRate')->lazy());
        }
    }

    public function ListLessionForCourse($lan, $course_id)
    {

        if ($lan == 'ar') {

            return  LessionResource::collection(Lession::select('id', 'name_ar')->where('course_id', $course_id)->lazy());
        } else {
            return  LessionResource::collection(Lession::select('id', 'name')->where('course_id', $course_id)->lazy());
        }
    }

    public function downloadFiles()
    {
        $src = request('src');
        return Storage::download('public/' . $src);
    }

    public function downloadCertificate()
    {
        $src = request('src');
        return Storage::download('public/' . $src);
    }

    public function downloadCertificateEmail(Request $request)
    {
        return Storage::download('public/' .$request->src);
    }

    public function ListQuzie($lan, $course_id)
    {
        if ($lan == 'ar')
            return QuizeResource::collection(Quiz::select('id', 'course_id','question_ar',  'correct_answer')->where('course_id', $course_id)->get());

        else
        return QuizeResource::collection(Quiz::select('id', 'course_id','question',  'correct_answer')->where('course_id', $course_id)->get());
    }

    public function  ResultQuzie(ResultQuzieRequest $request)
    {



            MarkUser::create(
                $request->validated()
                    +
                    ['user_id' => auth()->id()]
            );

            return response()->success('', 'data Insered');
        }


    public function sendCertificate($course_id)
    {

        $validate = Validator::make(['course_id' => $course_id], [
            'course_id' => 'exists:mark_users,course_id',
        ]);
        if ($validate->fails()) {
            return response()->json(['error' => 'Not registered on the course'], 422);
        }
        return $this->createCertificate($course_id);
    }
}
