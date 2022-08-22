<title>الأبحاث العلمية</title>
@extends('Layout')
@section('content')
  <div class="row row-sm mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title m-auto">قائمة الابحاث</h3>
                </div>
                <div class="card-body">
                    <button class="btn btn-success mb-3 mr-auto">
                        إضافة بحث
                        <i class="fe fe-plus"></i>
                    </button>

                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0" width="45%">عنوان البحث</th>                                    
                                    <th class="wd-10p border-bottom-0" width="45%">ناشر البحث</th>
                                    <th class="wd-25p border-bottom-0" width="10%">اجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h6 class="mb-0 fs-14 fw-semibold m-auto">
                                            الاتحاد الرياضي العام في المنظمات العالمية والمحلية
                                        </h6>
                                    </td>                                    
                                    <td>
                                        tareq alloji
                                    </td>
                                    <td>
                                        <a href="{{ url('/ResearchDetails ') }}" class="btn btn-lg btn-info-light"
                                            data-bs-placement="top" data-bs-toggle="tooltip" title="عرض تفاصيل البحث"><span
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

    <div class="modal fade" id="Delete">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف البحث</h6><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" role="alert">
                        هل أنت متأكد من أنك تريد حذف هذا البحث؟
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger">حذف البحث</button>
                    <button class="btn btn-light" data-bs-dismiss="modal">رجوع</button>
                </div>
            </div>
        </div>
    </div>

@endsection
