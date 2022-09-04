<title>الاقتراحات</title>
@extends('Layout')
@section('content')
    <link rel="stylesheet" href="../assets/Edits/Courses.css">
    <div class="row mt-3">
        <div class="col-xl-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title m-auto">
                        الاقتراحات
                    </h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">الاسم</th>
                                    <th class="wd-15p border-bottom-0">العمر</th>
                                    <th class="wd-20p border-bottom-0">رقم الهاتف</th>
                                    <th class="wd-15p border-bottom-0">البريد الالكتروني</th>
                                    <th class="wd-10p border-bottom-0">الدولة</th>
                                    <th class="wd-25p border-bottom-0">نوع المشاركة</th>
                                    <th class="wd-25p border-bottom-0">العمل</th>
                                    <th class="wd-25p border-bottom-0">تفاصيل العمل</th>
                                    <th class="wd-25p border-bottom-0">الملحقات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    
                                <tr>
                                    <td> {{$item->name}}</td>
                                    <td>{{$item->age    }}</td>
                                    <td>{{$item->phoneNumber}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>
                                       {{$item->country}}
                                    </td>
                                    <td>{{$item->typeOfJob}}</td>
                                    <td> {{$item->job}}</td>
                                    <td class="FixDetails">
                                        <div class="Details">
                                            {{$item->sectionName}}
                                        </div>
                                    </td>
                                    <td>
                                        <a href="/storage/{{$item->file}}">
                                            <img src="https://www.svgrepo.com/show/48933/file.svg" />
                                        </a>
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

    <div class="modal fade" id="Edit">
        <div class="modal-dialog modal-dialog-centered text-center modal-lg" role="document">
            <form method="" Action="" class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">تعديل سياسة الخصوصية</h6><button aria-label="Close" type="button"
                        class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <textarea rows="20" class="form-control" name="Details"></textarea>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">حفظ</button>
                    <button class="btn btn-light" type="button" data-bs-dismiss="modal">إغلاق</button>
                </div>
            </form>
        </div>
    </div>
@endsection
