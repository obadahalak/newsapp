<title>الدردشات</title>
@extends('Layout')
@section('content')
    <style>
        .product-grid6 .icons li a {
            padding-top: 8px;
        }

        .ClubImage {
            height: 250px !important;
            width: auto !important;
        }

        .colorinput {
            cursor: default;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <div class="row mt-5">
        @foreach ($rooms as $item)
            <div class="col-sm-6 col-lg-6 col-md-12 col-xl-3">
                <div class="card">
                    <div class="product-grid6">
                        <div class="product-image6 p-5">
                            <ul class="icons">
                                <li style="cursor:pointer"><a data-id="{{ $item->id }}"
                                        class="EditRoom bg-warning text-white border-warning border" data-bs-target="#Edit"
                                        data-bs-toggle="modal"><i class="fe fe-edit">
                                        </i>
                                    </a>
                                </li>
                            </ul>
                            <a class="bg-light">
                                <img class="img-fluid ClubImage br-7 w-100" src="/storage/{{ $item->image }}">
                            </a>
                        </div>
                        <div class="card-body pt-0">
                            <div class="product-content text-center">
                                <h1 class="title fw-bold fs-20">{{ $item->name_ar }}</h1>
                                <label class="colorinput">
                                    <span class="custom-switch-description">لون الغرفة:</span>
                                    <input name="color" type="checkbox" value="indigo" class="colorinput-input"
                                        style="cursor: default;" disabled />
                                    <span
                                        class="colorinput-color"style="cursor: default; background-color:#{{ $item->color }}"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    </div>
    <div class="modal fade" id="Edit">
        <div class="modal-dialog" role="document">
            <form method="POST" id="EditRoomForm" action="edit-Room"  enctype="multipart/form-data" class="modal-content modal-content-demo">
               {{-- @method('POST') --}}
                @csrf
                <input type="hidden" name="id" id="idData">
                <div class="modal-header">
                    <h6 class="modal-title">تعديل الغرفة</h6><button aria-label="Close" type="button" class="btn-close"
                        required data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">اسم الغرفة:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name_ar" />
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">اسم الغرفة : </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name"
                                placeholder=" اسم الغرفة باللغة الأنكليزية" />
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">عدد الأعضاء : </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="maxNumberOfMembers" />
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">لون الغرفة:</label>
                        <div class="col-md-9">
                            <select type="color" class="form-control" name="color">
                                <option value="0028F0" selected>أزرق</option>
                                <option value="fef201">أصفر</option>
                                <option value="ffffff">أبيض</option>
                                <option value="135833">أخضر</option>
                                <option value="FD0000">احمر</option>
                                <option value="7F0504">خمري</option>
                                <option value="6CCEF5">سماوي</option>
                                <option value="ACACAC">رمادي</option>
                                <option value="000000">اسود</option>
                            </select>
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <div class="d-flex mt-1">
                            <input id='uploadImage' onchange="readURL(this);" type='file' hidden
                                accept="image/x-png,image/gif,image/jpeg" name="image" onchange="PreviewImage();" />
                            <img id="UserImage" class="img-fluid m-auto mt-1"
                                style="width: 126px !important; height: 126px !important; border:1px solid #6F7072"
                                src="https://ittihadclub.sa/assets/img/logo.png" />
                        </div>
                        <div class="d-flex mt-2">
                            <button type="button" id='buttonid' name="files" class="btn btn-primary m-auto">
                                اختيار الصورة
                            </button>
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
            $('.EditRoom').on('click', function() {
                console.log('click');
                let id = $(this).attr('data-id');
                
                $('#idData').val(id);
               
            });
        });
    </script>
@endsection
