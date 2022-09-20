<title>تعديل دورة</title>
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

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert"
            style="display: flex;
        justify-content: center;
        height: 58px;
        align-items: center;">
            {{ session()->get('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-success" role="alert"
            style="display: flex;
    justify-content: center;
    height: 58px;
    align-items: center;">
            {{ session()->get('error') }}
        </div>
    @endif
    <input type="hidden" id="dataLession"value="{{ $data }}">
    <div class="row mt-5">
        <div class="col-12">
            <form method="POST" action="{{ route('UpdateCourse', $data->id) }}" enctype="multipart/form-data"
                class="card">
                @csrf
                <div class="card-header">
                    <h3 class="card-title">تفاصيل الدورة</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6 col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label class="form-label">اسم الدورة بالعربي</label>
                                <div class="validate-input input-group">
                                    <input value="{{ $data->name_ar }}"class="form-control" type="text" name="name_ar"
                                        placeholder="ادخل اسم الدورة بالعربي">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">اسم الدورة بالانكليزي</label>
                                <div class="validate-input input-group">
                                    <input value="{{ $data->name }}"class="form-control" type="text" name="name"
                                        placeholder="ادخل اسم الدورة بالانكليزي">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-12 col-lg-6">
                            <div class="d-flex mt-1">
                                <input id='uploadImage' onchange="readURL(this);" type='file' hidden
                                    accept="image/x-png,image/gif,image/jpeg" name="courseImage"
                                    onchange="PreviewImage();" />
                                <img id="UserImage" class="img-fluid m-auto mt-1"
                                    style="width: 126px !important; height: 126px !important; border:1px solid #6F7072; border-radius:4px"
                                    src="../assets/images/logo.jpg" />
                            </div>
                            <div class="d-flex mt-2">
                                <button type="button" id='buttonid' name="files" class="btn btn-primary m-auto">
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
                                    <input value="{{ $data->coachName }}"class="form-control" type="text"
                                        name="coachName" placeholder="ادخل اسم المدرس">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label class="form-label">تفاصيل الدورة بالعربي</label>
                                <div class="validate-input input-group">
                                    <input value="{{ $data->details_ar }}" class="form-control" name="details_ar"
                                        rows="3" placeholder="تفاصيل الدورة بالعربي"></input>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label class="form-label">تفاصيل الدورة بالانكليزي</label>
                                <div class="validate-input input-group">
                                    <input value="{{ $data->details }}" class="form-control" name="details" rows="3"
                                        placeholder="تفاصيل الدورة بالانكليزي"></input>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-sm-12 col-lg-6">
                            <div class="form-group">
                                <label class="form-label">نسبة النجاح بالاختبار</label>
                                <select class="form-control" name="successRate">
                                    <option value="50" selected="selected">{{ $data->successRate }}</option>
                                    <option value="55">55</option>
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

                {{-- <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6 col-sm-12 col-lg-6">

                            <div class="repeater">
                                <div data-repeater-list="group-b">
                                    <div data-repeater-item class="example mb-1">
                                        <div class="row mb-2">
                                            <div class="form-group">
                                                <label class="form-label">السؤال</label>
                                                <input type="text" class="form-control" name="Question">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-xl-6 col-sm-6 col-lg-6">
                                                <label class="form-label">الخيار 1</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="Answer1">
                                                    <label class="custom-control custom-radio m-auto ms-2">
                                                        <input type="radio" class="custom-control-input"
                                                            name="example-radios" value="Correct1">
                                                        <span class="custom-control-label">&nbsp;</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-xl-6 col-sm-6 col-lg-6">
                                                <label class="form-label">الخيار 2</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="Answer2">
                                                    <label class="custom-control custom-radio m-auto ms-2">
                                                        <input type="radio" class="custom-control-input"
                                                            name="example-radios" value="Correct2">
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
                                <div data-repeater-list="group-b">
                                    <div data-repeater-item class="example mb-1" style="margin-top:35px;">
                                        <div class="row mb-2">
                                            <div class="col-xs-12 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label">اسم الدرس بالعربي</label>
                                                    <input type="text" class="form-control" name="LessionNameAr">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-xl-6">
                                                <div class="form-group">
                                                    <label class="form-label">اسم الدرس بالانكليزي</label>
                                                    <input type="text" class="form-control" name="LessionNameEn">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="form-group">
                                                <label class="form-label">رابط فيديو الدرس</label>
                                                <input type="text" class="form-control" name="LessionLink">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="form-group">
                                                <label class="form-label">ملف الدرس</label>
                                                <input type="file" class="form-control" name="LessionFile">
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
                                            سؤال</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="card-footer">
                    <button class="btn btn-success my-1">حفظ</button>
                </div>
            </form>
        </div>
        <div class="card-header">
            <h3 class="card-title"> تعديل الدروس </h3>

        </div>
        @foreach ($data->get_Lessions as $lessions)
            <div class="card">
                <div class="card-body">
                    <div data-id="{{ $lessions->id }}" class="lessionId" data-bs-target="#Addnew"
                        data-bs-toggle="modal">

                        {{ $lessions->name_ar }}
                    </div>
                </div>
            </div>
            <div class="modal fade" id="Addnew">
                <div class="modal-dialog  modal-lg" role="document">
                    <form id="LessionUpdate" method="POST" class="modal-content modal-content-demo"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h6 class="modal-title">تعديل الدروس </h6><button aria-label="Close" type="button"
                                class="btn-close" data-bs-dismiss="modal"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">

                                <div class="col-6 col-sm-12 ">
                                    <div class="row mb-2">
                                        <div class="col-xs-12 col-xl-6">
                                            <div class="form-group">
                                                <label class="form-label">اسم الدرس بالعربي</label>
                                                <input type="text" class="form-control" id="LessionNameAr"
                                                    name="LessionNameAr">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-xl-6">
                                            <div class="form-group">
                                                <label class="form-label">اسم الدرس بالانكليزي</label>
                                                <input type="text" class="form-control"
                                                    id="LessionNameEn"name="LessionNameEn">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="form-group">
                                            <label class="form-label">رابط فيديو الدرس</label>
                                            <input type="text" class="form-control" id="LessionLink"
                                                name="LessionLink">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="form-group">
                                            <label class="form-label">ملف الدرس</label>
                                            <input type="file" class="form-control" name="LessionFile">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success" type="submit">حفظ</button>
                                <button aria-label="Close" type="button" data-bs-dismiss="modal"
                                    class="btn btn-light">رجوع</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach

        <div class="card-header">
            <h3 class="card-title"> تعديل الأختبارات </h3>
        </div>
        @foreach ($data->quizze as $quzzieList)
            <div class="card">
                <div class="card-body">
                    <div data-id="{{ $quzzieList->id }}" class="quzueId" data-bs-target="#AddQuzie"
                        data-bs-toggle="modal">

                        {{ $quzzieList->question_ar }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>

    <div class="modal fade" id="AddQuzie">
        <div class="modal-dialog  modal-lg" role="document">
            <form id="quzzieUpdate" method="POST"
                class="modal-content modal-content-demo" >
                @csrf
                <div class="modal-header">
                    <h6 class="modal-title"> تعديل الأختبارات</h6><button aria-label="Close" type="button"
                        class="btn-close" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6 col-sm-6 ">
                            <div class="col-l-6 col-sm-12 col-l-6">

                                <div class="row mb-2">
                                    <div class="form-group">
                                        <label class="form-label">السؤال</label>
                                        <input type="text" class="form-control" id="question" name="question">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label"> السؤا ل باللعربي</label>
                                        <input type="text" class="form-control" id="question_ar" name="question_ar">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-xl-6 col-sm-6 col-lg-6">
                                        <label class="form-label">الخيار 1</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="صح">
                                            <label class="custom-control custom-radio m-auto ms-2">
                                                <input type="radio" class="custom-control-input"
                                                    id="correct_answer_true" name="correct_answer" value="1">
                                                <span class="custom-control-label">&nbsp;</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-6 col-sm-6 col-lg-6">
                                        <label class="form-label">الخيار 1</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="خطا">
                                            <label class="custom-control custom-radio m-auto ms-2">
                                                <input type="radio" class="custom-control-input"
                                                    id="correct_answer_false" name="correct_answer" value="0">
                                                <span class="custom-control-label">&nbsp;</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success" type="submit">حفظ</button>
                                <button aria-label="Close" type="button" data-bs-dismiss="modal"
                                    class="btn btn-light">رجوع</button>
                            </div>
                        </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.lessionId').on('click', function(e) {

                let id = $(this).attr('data-id');
                console.log(id);
                let data = $('#dataLession').val();
                const dataLession = JSON.parse(data);

                dataLession.get__lessions.forEach(function(item) {
                    if (item.id == id) {

                        document.getElementById("LessionNameAr").setAttribute("value", item
                            .name_ar);
                        document.getElementById("LessionNameEn").setAttribute("value", item.name);
                    }
                    item.images.forEach(function(lessionImages) {
                        // LessionLink
                        if (lessionImages.photoable_id == id && lessionImages.type ==
                            'mp4') {

                            document.getElementById("LessionLink").setAttribute("value",
                                lessionImages.src);
                        }
                    });


                });
                console.log('dd');
                $('#LessionUpdate').attr('action', '/LessionUpdate/' + id);
            });


            $('.quzueId').on('click', function(e) {
                let id = $(this).attr('data-id');
                let data = $('#dataLession').val();
                const dataQuzzie = JSON.parse(data);
                dataQuzzie.quizze.forEach(function(item) {
                    if (item.id == id) {
                        document.getElementById("question").setAttribute("value", item
                            .question);

                        document.getElementById("question_ar").setAttribute("value", item
                            .question_ar);

                        let correct_answer_true = document.getElementById("correct_answer_true");
                        let correct_answer_false = document.getElementById("correct_answer_false");
                        if (item.correct_answer == true) {

                            correct_answer_true.checked = true;
                            correct_answer_false.checked = false;
                        } else {

                            correct_answer_true.checked = false;
                            correct_answer_false.checked = true;
                        }
                    }
                });
                $('#quzzieUpdate').attr('action','/QuizzeUpdate/'+id);
            });

        });
    </script>
@endsection
