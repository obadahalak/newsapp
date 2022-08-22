<title>أعضاء الاتحاد</title>
@extends('Layout')
@section('content')
    <link rel="stylesheet" href="../assets/Edits/Courses.css">
    <div class="row row-sm mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title m-auto">أعضاء الاتحاد</h3>
                </div>
                <div class="card-body">
                    <button class="btn btn-success mb-3 mr-auto" data-bs-effect="effect-scale" data-bs-toggle="modal"
                        href="#Add">
                        إضافة عضو جديد
                        <i class="fe fe-plus"></i>
                    </button>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0" width="20%">صورة العضو</th>
                                    <th class="wd-10p border-bottom-0" width="20%">اسم العضو</th>
                                    <th class="wd-10p border-bottom-0" width="40%">نبذة عن العضو</th>
                                    <th class="wd-25p border-bottom-0" width="10%">البلد</th>
                                    <th class="wd-25p border-bottom-0" width="10%">إجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="row">
                                            <div class="col">
                                                <img src="https://ddrg.farmasi.unej.ac.id/wp-content/uploads/sites/6/2017/10/unknown-person-icon-Image-from.png"
                                                    class="avatar avatar-xxl  brround" />
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span>
                                            محمد محمد
                                        </span>
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
                                        <span class="badge bg-success badge-sm  me-1 mb-1 mt-1">السعودية</span>
                                    </td>
                                    <td>
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
    <div class="modal fade" id="Add">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <form method="" Action="" class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">إضافة عضو جديد</h6><button aria-label="Close" type="button" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="d-flex mt-1">
                            <input id='uploadImage' onchange="readURL(this);" type='file' hidden
                                accept="image/x-png,image/gif,image/jpeg" name="upload" onchange="PreviewImage();" />
                            <img id="UserImage" class="img-fluid rounded m-auto mt-1"
                                style="width: 126px !important; height: 126px !important; border:1px solid #6F7072"
                                src="https://ddrg.farmasi.unej.ac.id/wp-content/uploads/sites/6/2017/10/unknown-person-icon-Image-from.png" />
                        </div>
                        <div class="d-flex mt-2">
                            <button type="button" id='buttonid' name="files" class="btn btn-primary m-auto">
                                اختيار الصورة
                            </button>
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">اسم العضو:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">البلد:</label>
                        <div class="col-md-9">
                            <select name="country" class="form-control form-select" data-bs-placeholder="Select Country">
                                <option value="Saudi" selected>السعودية</option>
                                <option value="Syira">سوريا</option>
                                <option value="UAE">الإمارات</option>
                                <option value="Qatar">قطر</option>
                                <option value="Bahrain">البحرين</option>
                                <option value="Iraq">العراق</option>
                                <option value="Jordan">الأردن</option>
                                <option value="Libanon">لبنان</option>
                                <option value="Palestain">فلسطين</option>
                                <option value="Egypt">مصر</option>
                                <option value="Libya">ليبيا</option>
                                <option value="Kuwait">الكويت</option>
                                <option value="Yamen">اليمن</option>
                                <option value="Somalia">الصومال</option>
                                <option value="Morocco">المغرب</option>
                                <option value="Mauritania">موريتانيا</option>
                                <option value="Tunisia">تونس</option>
                                <option value="Djibouti">جيبوتي</option>
                                <option value="Comoros">جزر القمر</option>
                                <option value="Oman">سلطنة عمان</option>
                                <option value="Algeria">الجزائر</option>
                                <option value="Sudan">السودان</option>
                                <option value="Others">بلد اخرى</option>
                            </select>
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label" for="example-email">نبذة عن العضو:</label>
                        <div class="col-md-9">
                            <textarea name="example-email" class="form-control" rows="4"></textarea>
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

    <div class="modal fade" id="Delete">
        <div class="modal-dialog" role="document">
            <form method="" Action="" class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف العضو</h6><button aria-label="Close" type="button" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" role="alert">
                        هل أنت متأكد من أنك تريد حذف هذا العضو؟
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="submit">حذف العضو</button>
                    <button class="btn btn-light" type="button" data-dismiss="modal" data-bs-dismiss="modal">رجوع</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#UserImage')
                        .attr('src', e.target.result)
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function PreviewImage() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

            oFReader.onload = function(oFREvent) {
                document.getElementById("uploadPreview").src = oFREvent.target.result;
            };
        };

        document.getElementById('buttonid').addEventListener('click', openDialog);

        function openDialog() {
            document.getElementById('uploadImage').click();
        }
    </script>
@endsection
