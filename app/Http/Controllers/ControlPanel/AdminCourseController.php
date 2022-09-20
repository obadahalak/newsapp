<?php

namespace App\Http\Controllers\ControlPanel;

use Cache;
use App\Models\Quiz;
use App\Models\Course;
use App\Models\Lession;
use App\Models\MarkUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Http\Requests\LessionValition;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AdminCourseController extends Controller
{

    public function courses()
    {
        $courses = Course::withCount(['likes', 'disLikes', 'comments'])->latest()->paginate(10);
        return view('Courses', compact('courses'));
    }

    public function CourseDetails($id)
    {
        $data = cache()->get('courses' . $id);
        if (!$data) {

            $data['course'] = Course::find($id)->with('images')->first();

            $data['quize'] = Quiz::where('course_id', $id)->get();

            $data['files'] = [
                $lessionpdf = Lession::where('course_id', $id)->with(['images' => function ($q) {
                    $q->where('type', 'pdf');
                }])->get(),

                $lessionVideo = Lession::where('course_id', $id)->with(['images' => function ($q) {
                    $q->where('type', 'mp4');
                }])->get()
            ];

            $data['markUsers'] = MarkUser::with(['user', 'course'])->where('course_id', $id)->get();
            Cache::put('courses' . $id, $data, 120);
        }

        return view('CourseDetails', compact('data'));
    }
    public function AddCourse()
    {
        return view('AddCourse');
    }
    public function StoreCourse(Request $request)
    {
        //////Create course////////
        $courserules = [
            'course_name' => 'required|max:35',
            'course_name_ar' => 'required|max:35',
            'course_details' => 'required',
            'course_details_ar' => 'required',
            'coachName' => 'required',
            'successRate' => 'required|numeric',
            'imageCourse' => 'required|image',

            'LessionList' => 'array',
            'LessionList.*.lession_name_ar' => 'required',
            'LessionList.*.lession_name' => 'required',
            'LessionList.*.srcVideo' => 'required|url',
            'LessionList.*.srcPdf' => 'required|mimes:pdf',

            'quizzeList' => 'array',
            'quizzeList.*.question' => 'required',
            'quizzeList.*.question_ar' => 'required',
            'quizzeList.*.correct_answer' => 'required',
        ];

        $message = [
            'course_name.*' => 'يرجى ملئ اسم الكورس ب 35 حرف كحد اقصى',
            'course_details.*' => 'حقل التفاصيل الكورس مطلوب',
            'course_name_ar.*' => 'يرجى ملئ اسم الكورس ب 35 حرف كحد اقصى',
            'course_details_ar.*' => 'حقل التفاصيل الكورس مطلوب',
            'coachName.*' => 'يرجى ادخال اسم المدرب',
            'successRate.*' => 'يرجى ادخل معدل النجاح',
            'imageCourse.*' => 'يرجى ادخل صورة للكورس',
            'quizzeList.*.*.required' => ' يرجى املاء جميع حقول الأختبار',
            'LessionList.*.lession_name.required' => 'يرجى ادخال اسم الدرس  ',
            'LessionList.*.lession_name_ar.required' => 'يرجى  ادخال اسم الدرس  ',
            'LessionList.*.srcVideo.required' => 'يرجى ادخال رابط الفيديو  ',
            'LessionList.*.*.srcVideo.mimes' => 'يجب ان يكون رابط صحيح',
            'LessionList.*.srcPdf.required' => 'يرجى ادخال ملف pdf ',
            'LessionList.*.srcPdf.mimes' => 'يجب ان يكون ملف pdf',
        ];

        $validation = Validator::make($request->all(), $courserules, $message);

        if (!$validation->fails()) {
            $course = Course::create([
                'name' => $request->course_name,
                'name_ar' =>    $request->course_name_ar,
                'details' => $request->course_details,
                'details_ar' => $request->course_details_ar,
                'coachName' => $request->coachName,
                'successRate' => $request->successRate,
            ]);
            $course->images()->create([
                'src' => '/' . $request->imageCourse->store('CourseImages', 'public'),
                'type' => 'image'
            ]);

            $LessionList = $request->LessionList;

            foreach ($LessionList as $lessions) {
                $lession = Lession::create([
                    'name' => $lessions['lession_name'],
                    'name_ar' => $lessions['lession_name_ar'],
                    'course_id' => $course->id,
                ]);
                $lession->images()->create([
                    'src' => $lessions['srcVideo'],
                    'type' => 'mp4'
                ]);
                $lession->images()->create([
                    'src' => '/' . $lessions['srcPdf']->store('LessionFiles', 'public'),
                    'type' => 'pdf'
                ]);
            }
            $listOfQuizze = $request->quizzeList;

            foreach ($listOfQuizze as $quizze) {

                Quiz::create([
                    'course_id' => $course->id,
                    'question' => $quizze['question'],
                    'question_ar' => $quizze['question_ar'],
                    'correct_answer' => $quizze['correct_answer'],
                ]);
            }

            return  to_route('Courses')->with('success', 'تم اضافة البيانات بنجاح');
        } else {
            return redirect()->back()->with('error', $validation->errors()->all());
        }
    }


    public function DeleteCourse($course_id)
    {
        $course = Course::findOrFail($course_id);

        DB::transaction(function () use ($course) {

            foreach ($course->images as $images) {
                if (File::exists('public/storage/'. $images->src)) {
                    unlink('public/storage/' . $images->src);
                }
                $course->images()->delete();
            }

            foreach ($course->Lessions as $lessions) {
                foreach ($lessions->images as $sourceImage) {
                    if (File::exists('public/storage/'. $sourceImage->src)) {
                        unlink('public/storage/' . $sourceImage->src);
                    }
                    $sourceImage->delete();
                }
            }
            $course->Lessions()->delete();
            $course->delete();
            return redirect()->back()->with('success', 'تم الحذف بنجاح');
        });
    }

    public function edit($id)
    {
        $data = Course::find($id)->with(['images', 'get_Lessions', 'Quizze'])->first();
        //return $data;
        return view('EditCourse', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'required|max:35',
            'name_ar' => 'required|max:35',
            'details' => 'required',
            'details_ar' => 'required',
            'coachName' => 'required',
            'successRate' => 'required',
            'imageCourse' => 'image',
        ];
        $validate = Validator::make($request->all(), $rules);
        if (!$validate->fails()) {

            $course = Course::find($id);
            $course->update([
                'name' => $request->name,
                'name_ar' => $request->name_ar,
                'details' => $request->details,
                'details_ar' => $request->details_ar,
                'coachName' => $request->coachName,
                'successRate' => $request->successRate,
            ]);
            if ($request->courseImage) {

                foreach ($course->images as $images) {
                    if (File::exists('public/storage/'. $images->src)) {
                        unlink('public/storage/' . $images->src);
                    }
                }
                // dd($request->courseImage);
                $course->images()->create([
                    'src' => '/' . request('courseImage')->store('CourseImages', 'public'),
                    'type' => 'image'
                ]);
            }
            return to_route('EditCourse', $id)->with('success', 'تم تعديل معلومات الكورس');
        } else {
            return  $validate->errors()->all();
        }
    }
    public function updateLession(Request $request,  $id)
    {
        $rules = [
            'LessionNameEn' => 'required',
            'LessionNameAr' => 'required',
            'LessionLink' => 'required|url',
            'LessionFile' => 'nullable|mimes:pdf',
        ];

        $validate = Validator::make($request->all(), $rules);

        if (!$validate->fails()) {

            $lession = Lession::find($id);

            DB::transaction(function () use ($request, $lession) {

                $lession->update([
                    'name' => $request->LessionNameEn,
                    'name_ar' => $request->LessionNameAr,
                ]);

                $updateLink = $lession->images->where('type', 'mp4')->first();

                $updateLink->update([
                    'src' => $request->LessionLink,
                ]);

                if ($request->LessionFile) {

                    $updatePdf = $lession->images->where('type', 'pdf')->first();

                    if (File::exists('public/storage/' . $updatePdf->src)) {

                        unlink('public/storage/' . $updatePdf->src);
                    }
                    $updatePdf->update([
                        'src' => $request->LessionFile->store('LessionFiles', 'public'),
                    ]);
                }
            });
            return redirect()->back()->with('success', 'تم تعديل المعلومات ');
        } else {
            return redirect()->back()->with('error', $validate->errors()->all());
        }
    }

    public function QuizzeUpdate(Request $request, $id)
    {
        $quizze = Quiz::find($id);

        $rules = [
            'question' => 'required',
            'question_ar' => 'required',
            'correct_answer' => 'required|boolean',
        ];

        $validation = Validator::make($request->all(), $rules);
        if (!$validation->fails()) {
            $quizze->update([
                'question' => $request->question,
                'question_ar' => $request->question_ar,
                'correct_answer' => $request->correct_answer,
            ]);
            return redirect()->back()->with('success', 'تم تعديل البيانات بنجاح');
        } else
            return   redirect()->back()->with('error', $validation->errors()->all());

    }
}
