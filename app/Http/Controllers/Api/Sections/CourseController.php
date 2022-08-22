<?php

namespace App\Http\Controllers\Api\sections;

use Error;
use App\Models\Quiz;
use App\Models\Course;
use App\Models\Lession;
use App\Models\MarkUser;
use Illuminate\Http\Request;
use App\Http\services\LikeService;
use App\Http\Traits\ResponseTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Http\services\CommentService;

use App\Http\Resources\CourseResource;
use App\Http\services\SendCertificate;
use App\Http\Resources\LessionResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ResultQuzieRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CourseController extends Controller
{
    use ResponseTrait;
    use  SendCertificate;

    public function listCourse($lan)
    {

        if ($lan == 'ar') {

            return  CourseResource::collection(Course::select('id', 'name_ar', 'details_ar')->lazy());
        } else {
            return  CourseResource::collection(Course::select('id', 'name', 'details')->lazy());
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

    public function ListQuzie($lan, $course_id)
    {
        if ($lan == 'ar')
            return Quiz::where('course_id', $course_id)->get(['id', 'question_ar',  'correct_answer']);

        else
            return Quiz::where('course_id', $course_id)->get(['id', 'question', 'correct_answer']);
    }

    public function  ResultQuzie(ResultQuzieRequest $request)
    {
        $user = auth('sanctum')->id();
        $course_id = $request->course_id;
        $data = MarkUser::where('user_id', $user)->where('course_id', $course_id)->first();

        if ($data) {

            return response()->error('User Mark\'s  has Been found ');
        } else {

            MarkUser::create(
                $request->validated()
                    +
                    ['user_id' => auth()->id()]
            );

            return response()->success('', 'data Insered');
        }
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
