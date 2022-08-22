<?php

namespace App\Http\Controllers\ControlPanel;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Lession;

class AdminCourseController extends Controller
{
    public function CreateCourse()
    {
        return view(''); /// view page for Create Course
    }
    public function StoreCourse(CourseRequest $request)
    {
        $course = Course::create([
            'name' => $request->name,
            'details' => $request->details,
        ]);

        if ($request->file('image')->count() > 0) {
            foreach ($request->image as $photo) {
                $course->images->insert([
                    'src' => $photo,
                ]);
            }
        }
    }

    /**
          يمكن عدل هاد التابع ل يصير اول شي
        بيعمل كريييت لل ليسسون
         بعدين بيرفع الملفات تبعاتو على كل ليسون  لحال


     */
    public function CreateLession(Course $course_id, Request $request)
    {

        $listLession = $request->list_lession;
        foreach ($listLession as  $lessions) {
            $lession = new Lession();
            $lession->course_id = $course_id;
            $lession->name = $lessions['name'];
            $lession->save();
            foreach ($request->files as $UploadFiles)
                $lession->files->create([
                    'src' => $UploadFiles,
                    'type' => $UploadFiles->getMimeType(),
                ]);
        }
    }
}
