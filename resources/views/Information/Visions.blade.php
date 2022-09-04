<title>الرؤية والرسالة والهدف</title>
@extends('Layout')
@section('content')
    <div class="row mt-3">
        <div class="col-xl-9 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title m-auto">
                        الرؤية والرسالة والهدف
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row img-gallery" id="lightgallery">
                        <div class="col-xl-4 col-sm-6 m-auto">
                            <a href="javascript:void(0)" class="d-block link-overlay">
                                <img class="d-block img-fluid br-5" src="/assets/images/logo.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="eamil-body mt-5">
                        <p>{{$vison->value_ar}}</p>
                        <br><br>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-warning" data-bs-effect="effect-scale" data-bs-toggle="modal"
                        href="#Edit">تعديل</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Edit">
        <div class="modal-dialog modal-dialog-centered text-center modal-lg" role="document">
            <form method="POST" Action="{{route('visinEdit')}}" class="modal-content modal-content-demo">
              @csrf
                <div class="modal-header">
                    <h6 class="modal-title">الرؤية والرسالة والهدف</h6><button type="button" aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <textarea rows="10" class="form-control" name="value_ar" placeholder=" تعديل باللغة العربية"></textarea>
                </div>
                <div class="modal-body">
                    <textarea rows="10" class="form-control" name="value" placeholder="تعديل باللغة الأنكليزية"></textarea>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">حفظ</button>
                    <button class="btn btn-light" type="button" data-bs-dismiss="modal">إغلاق</button>
                </div>
            </form>
        </div>
    </div>
@endsection
