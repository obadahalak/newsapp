<title>تواصل معنا</title>
@extends('Layout')
@section('content')
    <div class="row mt-3">
        <div class="col-xl-9 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title m-auto">
                        تواصل معنا
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row img-gallery" id="lightgallery">
                        <div class="col-xl-4 col-sm-6 m-auto">
                            <a href="javascript:void(0)" class="d-block link-overlay">
                                <img class="d-block img-fluid br-5" src=" {{ asset('assets/images/logo.jpg') }}">
                            </a>

                        </div>
                    </div>
                    <div class="eamil-body mt-5">
                        <div class=" row mb-4">
                            <label class="col-md-6 form-label m-auto"
                                style=" display: flex; justify-content: center;">البريد الالكتروني:</label>
                            <div class="col-md-6 m-auto" style=" display: flex; justify-content: center;">
                                <label class="col-md-6 form-label"> {{$contact->email}}</label>
                            </div>
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-6 form-label" style=" display: flex; justify-content: center;">رقم
                            الواتساب:</label>
                        <div class="col-md-6" style=" display: flex; justify-content: center;">
                            <label class="col-md-6 form-label" style="direction: ltr; ">{{$contact->phone}}</label>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-warning" data-bs-effect="effect-scale" data-bs-toggle="modal"
                        href="#Edit">تعديل</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="Edit">
        <div class="modal-dialog modal-dialog-centered text-center modal-md" role="document">
            <form method="POST" Action="{{route('ContactUsEdit')}}" class="modal-content modal-content-demo">
               @csrf
                <div class="modal-header">
                    <h6 class="modal-title">تواصل معنا</h6><button type="button" aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">البريد الالكتروني:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="email" />
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">رقم الواتساب:</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="phone" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">حفظ</button>
                    <button class="btn btn-light" type="button" data-bs-dismiss="modal">إغلاق</button>
                </div>
            </form>
        </div>
    </div>
@endsection
