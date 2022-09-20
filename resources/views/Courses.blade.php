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
                    <a class="btn btn-success mb-3 mr-auto" href="{{ route('AddCourse') }}">
                        إضافة دورة
                        <i class="fe fe-plus"></i>
                    </a>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0" width="20%">اسم الدورة</th>
                                    <th class="wd-10p border-bottom-0" width="50%">تفاصيل الدورة</th>
                                    <th class="wd-10p border-bottom-0" width="10%">عدد الأعجابات </th>
                                    <th class="wd-10p border-bottom-0" width="10%">عدم الأعجابات</th>
                                    <th class="wd-10p border-bottom-0" width="10%">التعليقات </th>
                                    <th class="wd-25p border-bottom-0" width="10%">اجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $listCouses)
                                    <tr>
                                        <td class="FixDetails">
                                            <div class="Details">
                                                <h6 class="mb-0 fs-14 fw-semibold m-auto">
                                                    {{$listCouses->name_ar}}
                                                </h6>
                                            </div>
                                        </td>
                                        <td class="FixDetails">
                                            <div class="Details">
                                               {{$listCouses->details_ar}}
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-info badge-sm  me-1 mb-1 mt-1">
                                                {{$listCouses->likes->count()}}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-success badge-sm  me-1 mb-1 mt-1">
                                                {{$listCouses->disLikes->count()}}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-success badge-sm  me-1 mb-1 mt-1">
                                                {{$listCouses->comments->count()}}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('CourseDetails',$listCouses->id) }}" class="btn btn-lg btn-info-light"
                                                data-bs-placement="top" data-bs-toggle="tooltip"
                                                title="عرض تفاصيل الدورة"><span class="fe fe-eye fs-18"></span></a>
                                            <a href="{{ route('EditCourse',$listCouses->id) }}" class="btn btn-lg btn-warning-light"
                                                data-bs-placement="top" data-bs-toggle="tooltip" title="تعديل الدورة"><span
                                                    class="fe fe-edit fs-18"></span></a>
                                            <a  data-id={{$listCouses->id}} href="javascript:void(0)" class=" deleteCourseId btn btn-lg btn-danger-light"
                                                data-bs-target="#Delete" data-bs-toggle="modal" data-bs-placement="top"
                                                data-bs-toggle="tooltip" title="حذف الدورة"><span
                                                    class="fe fe-trash fs-18"></span></a>
                                        </td>
                                    </tr>
                                @endforeach
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
            <form  id="formDeleteCourse"method="POST" class="modal-content modal-content-demo">
                @csrf
                <div class="modal-header">
                    <h6 class="modal-title">حذف الدورة</h6><button aria-label="Close" type="button" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" role="alert">
                        هل أنت متأكد من أنك تريد حذف هذه الدورة؟
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="submit">حذف الدورة</button>
                    <button class="btn btn-light" data-bs-dismiss="modal" type="button">رجوع</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.deleteCourseId').on('click', function(e) {

                let id = $(this).attr('data-id');

                $('#formDeleteCourse').attr('action', 'DeleteCourse/' + id);
            });
        });
    </script>
@endsection
