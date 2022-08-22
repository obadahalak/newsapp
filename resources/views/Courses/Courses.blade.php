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
                    <button class="btn btn-success mb-3 mr-auto">
                        إضافة دورة
                        <i class="fe fe-plus"></i>
                    </button>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0" width="45%">الدورة</th>
                                    <th class="wd-10p border-bottom-0" width="45%">تفاصيل الدورة</th>
                                    <th class="wd-10p border-bottom-0" width="45%">عدد المشتركين</th>
                                    <th class="wd-25p border-bottom-0" width="10%">اجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col">
                                                <img src="https://prod-discovery.edx-cdn.org/media/course/image/156313d6-f892-4b08-9cee-43ea582f4dfb-7b98c686abcc.small.png"
                                                    class="avatar avatar-xxl  bradius" />

                                            </div>
                                            <div class="col d-flex">
                                                <h6 class="mb-0 fs-14 fw-semibold m-auto">
                                                    الاتحاد الرياضي العام في المنظمات العالمية والمحلية
                                                </h6>
                                            </div>
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
                                        <span class="badge bg-success badge-sm  me-1 mb-1 mt-1">55</span>
                                    </td>
                                    <td>
                                        <a href="http://127.0.0.1:8000/ResearchDetails " class="btn btn-lg btn-info-light"
                                            data-bs-placement="top" data-bs-toggle="tooltip" title="عرض تفاصيل البحث"><span
                                                class="fe fe-eye fs-18"></span></a>
                                        <a href="javascript:void(0)" data-bs-target="#Unactivate" data-bs-toggle="modal"
                                            class="btn btn-lg btn-warning-light" data-bs-placement="top"
                                            data-bs-toggle="tooltip" title="إلغاء تفعيل البحث"><span
                                                class="icon icon-close fs-18" tooltip></span></a>
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

    {{-- <div class="modal fade" id="Unactivate" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">إلغاء تفعيل البحث</h6><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning" role="alert">
                        هل أنت متأكد من أنك تريد إلغاء تفعيل هذا البحث؟
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning">إلغاء تفعيل البحث</button>
                    <button class="btn btn-light" data-bs-dismiss="modal">رجوع</button>
                </div>
            </div>
        </div>
    </div> --}}

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
