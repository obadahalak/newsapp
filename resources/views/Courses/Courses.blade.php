
<title>الدورات</title>
@extends('Layout')
@section('content')
    <link rel="stylesheet" href="../assets/Edits/Courses.css">
    <div class="row row-sm mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title m-auto">قائمة الدورات</h3>
                </div>
                <div class="card-body">
                    <a class="btn btn-success mb-3 mr-auto" href="{{route('AddCourse')}}">
                        إضافة دورة
                        <i class="fe fe-plus"></i>
                    </a>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0" width="20%">اسم الدورة</th>
                                    <th class="wd-10p border-bottom-0" width="50%">تفاصيل الدورة</th>
                                    <th class="wd-10p border-bottom-0" width="10%">نوع الدورة</th>
                                    <th class="wd-10p border-bottom-0" width="10%">عدد المشتركين</th>
                                    <th class="wd-25p border-bottom-0" width="10%">اجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="FixDetails">
                                        <div class="Details">
                                            <h6 class="mb-0 fs-14 fw-semibold m-auto">
                                                الاتحاد الرياضي العام في المنظمات العالمية والمحلية
                                            </h6>
                                        </div>
                                    </td>
                                    <td class="FixDetails">
                                        <div class="Details">
                                            ------------------

                                            4- List For Courses => name Details and image (table) Button for Delete Course
                                            __ Lession For Every Course => name , files : pdf and video
                                            And Modal for Create Course
                                            And Modal Create Lession For Course
                                            ___ quize-users CourseName , UserName , AnswerUser
                                            __Mark-Users => UserName , CourseName , Mark
                                            --------------

                                            5-quizzes List (table) Fields :dropDown For (select Course) , question ,
                                            answer_1 ,answer_2 , answer_3 ,answer_4 , correct_answer
                                            Modal For Create Quiz
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-info badge-sm  me-1 mb-1 mt-1">
                                            مجانية
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge bg-success badge-sm  me-1 mb-1 mt-1">
                                            55
                                        </span>
                                    </td>
                                    <td>
                                        <a href="{{ route('CourseDetails') }}" class="btn btn-lg btn-info-light"
                                            data-bs-placement="top" data-bs-toggle="tooltip" title="عرض تفاصيل الدورة"><span
                                                class="fe fe-eye fs-18"></span></a>
                                        <a href="javascript:void(0)" class="btn btn-lg btn-danger-light"
                                            data-bs-target="#Delete" data-bs-toggle="modal" data-bs-placement="top"
                                            data-bs-toggle="tooltip" title="حذف البحث"><span
                                                class="fe fe-trash fs-18"></span></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Popups --}}

    <div class="modal fade" id="Delete">
        <div class="modal-dialog" role="document">
            <form method="" Action="" class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف الدورة</h6><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" role="alert">
                        هل أنت متأكد من أنك تريد حذف هذه الدورة؟
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="submit">حذف الدورة</button>
                    <button class="btn btn-light" data-bs-dismiss="modal">رجوع</button>
                </div>
            </form>
        </div>
    </div>
@endsection
