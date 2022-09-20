<title>إضافة دورة</title>
@extends('Layout')
@section('content')
    <style>
        .custom-radio .custom-control-label::before {
            border-radius: 50%;
            background: #e9edf4;
            border: 1px solid #4d5875;
        }

        .custom-radio .custom-control-input:checked~.custom-control-label::after {
            background-image: url(data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23fff'/%3E%3C/svg%3E);
        }
    </style>
    <div class="row mt-5">
        <div class="col-12">
            <form class="card" method="POST" action="{{ route('StoreCourse') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h3 class="card-title">اضافة الدورة</h3>
                </div>
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
                @if (session()->has('success'))
                    <div class="alert alert-success"
                        style="height: 50px;display:flex;justify-content:center;align-items:center;width:30%">
                        {{ session()->get('success') }}
                    </div>
                @endif
                {{-- @if (session()->has('error'))
            <div class="alert alert-success" style="height: 50px;display:flex;justify-content:center;align-items:center;width:30%">
                {{ session()->get('error')}}
            </div>
        @endif --}}
                {{-- <div class="alert alert-success" role="alert"
                style="display: flex;
                        justify-content: center;
                        height: 58px;
                        align-items: center;">
                <p>@lang('Translate.AddedSuccessfully')</p>
            </div> --}}

                {{-- alert for  OperationFailed --}}
                {{-- <div class="alert alert-danger" role="alert"
                style=" display: flex;
                        justify-content: center;
                        height: 58px;
                        align-items: center;">
                <p>@lang('Translate.OperationFailed')</p>
            </div> --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6 col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label class="form-label">اسم الدورة بالعربي</label>
                                <div class="validate-input input-group">
                                    <input class="form-control" type="text" name="course_name_ar"
                                        placeholder="ادخل اسم الدورة بالعربي">
                                        @error('course_name_ar')
                                    <p>{{$message}}</p>
                                        @enderror

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">اسم الدورة بالانكليزي</label>
                                <div class="validate-input input-group">
                                    <input class="form-control" type="text" name="course_name"
                                        placeholder="ادخل اسم الدورة بالانكليزي">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-12 col-lg-6">
                            <div class="d-flex mt-1">
                                <input id='uploadImage' onchange="readURL(this);" type='file' hidden
                                    accept="image/x-png,image/gif,image/jpeg" name="imageCourse"
                                    onchange="PreviewImage();" />
                                <img id="UserImage" class="img-fluid m-auto mt-1"
                                    style="width: 126px !important; height: 126px !important; border:1px solid #6F7072; border-radius:4px"
                                    src="../assets/images/logo.jpg" />
                            </div>
                            <div class="d-flex mt-2">
                                <button type="button" id='buttonid' class="btn btn-primary m-auto">
                                    اختيار صورة الدورة
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label class="form-label">اسم المدرس</label>
                                <div class="validate-input input-group">
                                    <input class="form-control" type="text" name="coachName"
                                        placeholder="ادخل اسم المدرس">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label class="form-label">نوع الدورة</label>
                                <div class="validate-input input-group">
                                    <select class="form-control">
                                        <option value="Free" selected>مجانية</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label class="form-label">تفاصيل الدورة بالعربي</label>
                                <div class="validate-input input-group">
                                    <textarea class="form-control" name="course_details_ar" rows="3" placeholder="تفاصيل الدورة بالعربي"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label class="form-label">تفاصيل الدورة بالانكليزي</label>
                                <div class="validate-input input-group">
                                    <textarea class="form-control" name="course_details" rows="3" placeholder="تفاصيل الدورة بالانكليزي"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label class="form-label">نسبة النجاح بالاختبار</label>
                                <div class="validate-input input-group">
                                    <select class="form-control" name="successRate">
                                        <option value="50" selected="selected">50</option>
                                        <option value="60">60</option>
                                        <option value="65">65</option>
                                        <option value="70">70</option>
                                        <option value="75">75</option>
                                        <option value="80">80</option>
                                        <option value="85">85</option>
                                        <option value="90">90</option>
                                        <option value="95">95</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-header">
                    <h3 class="card-title">الدروس والاختبارات</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6 col-sm-12 col-lg-6">
                            <div class="form-group">

                            </div>
                            <div class="repeater">
                                <div data-repeater-list="quizzeList">
                                    <div data-repeater-item class="example mb-1">
                                        <div class="row mb-2">
                                            <div class="form-group">
                                                <label class="form-label">السؤال</label>
                                                <input type="text" class="form-control" name="question">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label"> السؤا ل باللعربي</label>
                                                <input type="text" class="form-control" name="question_ar">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-xl-6 col-sm-6 col-lg-6">
                                                <label class="form-label">الخيار 1</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value="صح">
                                                    <label class="custom-control custom-radio m-auto ms-2">
                                                        <input type="radio" class="custom-control-input"
                                                            name="correct_answer" value="1">
                                                        <span class="custom-control-label">&nbsp;</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6 col-sm-6 col-lg-6">
                                                <label class="form-label">الخيار 2</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value="خطأ">
                                                    <label class="custom-control custom-radio m-auto ms-2">
                                                        <input type="radio" class="custom-control-input"
                                                            name="correct_answer" value="0">
                                                        <span class="custom-control-label">&nbsp;</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 d-flex">
                                                <button data-repeater-delete class="btn btn-danger m-auto"
                                                    type="button">حذف
                                                    السؤال</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex mt-3">
                                        <button data-repeater-create type="button" class="btn btn-success m-auto">إضافة
                                            سؤال</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-12 col-lg-6">
                            <div class="repeater">
                                <div data-repeater-list="LessionList">
                                    <div data-repeater-item class="example mb-1" style="margin-top:35px;">
                                        <div class="row mb-2">
                                            <div class="col-xs-12 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label">اسم الدرس بالعربي</label>
                                                    <input type="text" class="form-control" name="lession_name_ar">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label">اسم الدرس بالانكليزي</label>
                                                    <input type="text" class="form-control" name="lession_name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="form-group">
                                                <label class="form-label">رابط فيديو الدرس</label>
                                                <input type="text" class="form-control" name="srcVideo">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="form-group">
                                                <label class="form-label">ملف الدرس</label>
                                                <input type="file" class="form-control" name="srcPdf">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 d-flex">
                                                <button data-repeater-delete class="btn btn-danger m-auto"
                                                    type="button">حذف
                                                    الدرس</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex mt-3">
                                        <button data-repeater-create type="button" class="btn btn-success m-auto">إضافة
                                            درس</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-success my-1">حفظ</button>
                </div>
            </form>
        </div>
    </div>
@endsection
