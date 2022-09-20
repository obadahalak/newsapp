<title>الأبلاغلات </title>
@extends('Layout')
@section('content')
    <div class="row row-sm mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title m-auto">قائمة الأبلاغات</h3>
                </div>
                <div class="card-body">


                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0" width="45%"> اسم المستخدم</th>
                                    <th class="wd-10p border-bottom-0" width="45%"> ايميل </th>
                                    <th class="wd-10p border-bottom-0" width="45%">رقم الهاتف </th>
                                    <th class="wd-25p border-bottom-0" width="10%">حذف المستخدم</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reports as $reportList)
                                    <tr>
                                        <td>
                                            <h6 class="mb-0 fs-14 fw-semibold m-auto">
                                                {{ $reportList->user->user_name }}
                                            </h6>
                                        </td>

                                        <td>
                                            {{ $reportList->user->email }}
                                        </td>

                                        <td>
                                            {{ $reportList->user->phone ?? 'ليس لديه رقم هاتف' }}
                                        </td>
                                        <td>
                                            <button data-id="{{ $reportList->user->id }}"
                                                class="deleteUserId  btn btn-lg btn-danger-light"
                                                data-bs-target="#exampleModal" data-bs-toggle="modal"
                                                data-bs-placement="top" data-bs-toggle="tooltip" title="حذف المستخدم "><span
                                                    class="fe fe-users fs-18"></span></button>

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


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">هل تريد حذف المستخدم</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <form id="formDeleteUser" method="POST">
                        @csrf

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">رجوع</button>
                        <button type="submit" class="btn btn-primary">تأكيد الحذف</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.deleteUserId').on('click', function(e) {

                let id = $(this).attr('data-id');

                $('#formDeleteUser').attr('action', 'blockUser/' + id);
            });
        });
    </script>
@endsection
