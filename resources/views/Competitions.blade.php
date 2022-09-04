<title>المسابقات</title>
@extends('Layout')
@section('content')
    <link rel="stylesheet" href="../assets/Edits/Courses.css">
    <div class="row row-sm mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title m-auto">قائمة المسابقات</h3>
                </div>
                <div class="card-body">
                    <button class="btn btn-success mb-3 mr-auto" data-bs-target="#Add" data-bs-toggle="modal">
                        إضافة مسابقة
                        <i class="fe fe-plus"></i>
                    </button>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">اسم المسابقة</th>
                                    <th class="wd-15p border-bottom-0">صورة المسابقة</th>
                                    <th class="wd-10p border-bottom-0">التفاصيل</th>
                                    <th class="wd-10p border-bottom-0">عدد المتسابقين</th>
                                    <th class="wd-25p border-bottom-0">المتسابقين</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($compatiton as $item)
                                    <tr>
                                        <td class="FixDetails">
                                            <div class="Details">
                                                <h6 class="mb-0 fs-14 fw-semibold m-auto">
                                                    {{ $item->name_ar }}
                                                </h6>
                                            </div>
                                        </td>
                                        <td>
                                            <img src="/storage/{{ $item->prize_files[0]->src }}"
                                                class="avatar avatar-xxl  brround" />
                                        </td>
                                        <td class="FixDetails">
                                            <div class="Details">
                                                {{ $item->details_ar }}
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge bg-success badge-sm  me-1 mb-1 mt-1">

                                                <p>{{ count($item->members) }}</p>

                                            </span>
                                        </td>
                                        <td>
                                            <button data-id="{{ $item->id }}"
                                                class="postCompatition  btn btn-lg btn-info-light"
                                                data-bs-target="#Contestants" data-bs-toggle="modal" data-bs-placement="top"
                                                data-bs-toggle="tooltip" title="عرض المتسابقين"><span
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


    {{-- Popups --}}

    <div class="modal fade " id="Add">
        <div class="modal-dialog" role="document">
            <form method="POST" action="{{route('createCompatition')}}" class="modal-content modal-content-demo" enctype="multipart/form-data">
              @csrf
                <div class="modal-header">
                    <h6 class="modal-title">إضافة مسابقة</h6><button aria-label="Close" type="button" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="form-group mb-0">
                            <div class="d-flex mt-1">
                                <input id='uploadImage' onchange="readURL(this);" type='file' hidden
                                    accept="image/x-png,image/gif,image/jpeg" name="image" onchange="PreviewImage();" />
                                <img id="UserImage" class="img-fluid rounded m-auto mt-1"
                                    style="width: 126px !important; height: 126px !important; border:1px solid #6F7072"
                                    src="../assets/images/logo.jpg" />
                            </div>
                            <div class="d-flex mt-2">
                                <button type="button" id='buttonid' name="files" class="btn btn-primary m-auto">
                                    صورة المسابقة
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">اسم المسابقة:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" required />
                        </div>
                    </div>

                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">اسم المسابقة:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name_ar" placeholder="اسم المسابقة باللغة العربية" required />
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">تفاصيل الجائزة:</label>
                        <div class="col-md-9">
                            <textarea type="text" class="form-control" name="prize" rows="6" required></textarea>
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">تفاصيل الجائزة:</label>
                        <div class="col-md-9">
                            <textarea type="text" class="form-control" name="prize_ar" placeholder="تفاصيل  باللغة العربية" rows="6" required></textarea>
                        </div>
                    </div>

                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">تفاصيل المسابقة:</label>
                        <div class="col-md-9">
                            <textarea type="text" class="form-control" name="details" rows="6" required></textarea>
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">تفاصيل المسابقة:</label>
                        <div class="col-md-9">
                            <textarea type="text" class="form-control" name="details_ar" placeholder="تفاصيل  باللغة العربية" rows="6" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">حفظ</button>
                    <button class="btn btn-light" data-bs-dismiss="modal" type="button">رجوع</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade " id="Contestants">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <form method="" Action="" class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">المتسابقين</h6><button aria-label="Close" type="button" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">اسم المتسابق</th>
                                    <th class="wd-15p border-bottom-0">صورة المتسابق</th>
                                    <th class="wd-15p border-bottom-0">الفيديو</th>
                                    <th class="wd-10p border-bottom-0">الوصف</th>
                                    <th class="wd-10p border-bottom-0">عدد الإعجابات</th>
                                    <th class="wd-25p border-bottom-0">عدد إلغاء الإعجابات</th>
                                </tr>
                            </thead>
                            <tbody id="tableData">
                                <tr>
                                    <td class="FixDetails">
                                        <div class="Details">
                                            <h6 class="mb-0 fs-14 fw-semibold m-auto">
                                               
                                            </h6>
                                        </div>
                                    </td>
                                    <td>
                                      
                                    </td>
                                    <td>
                                       
                                    </td>
                                    <td class="FixDetails">
                                        <div class="Details">
                                           
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-success badge-sm me-1 mb-1 mt-1"></span>
                                    </td>
                                    <td>
                                        <span class="badge rounded-pill bg-danger badge-sm me-1 mb-1 mt-1"></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    {{-- <button class="btn btn-danger" type="submit">حذف المسابقة</button> --}}
                    <button class="btn btn-light" data-bs-dismiss="modal" type="button">رجوع</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.postCompatition').on('click', function(e) {
                console.log('click');
                let id = $(this).attr('data-id');
                console.log(id);
                $.ajax({
                    type: "GET",
                    url: "PostCompetitions/" + id,
                    success: function(response) {

                        fetch("http://127.0.0.1:8000/api/getCompetitonById/ar/" + id).then(
                            res => {
                                res.json().then(
                                    data => {
                                      
                                        if (data.data.posts.length > 0) {

                                            var temp = "";
                                            data.data.posts.forEach((itemData) => {
                                                temp += "<tr>";
                                                temp += "<td>" + itemData.user
                                                    .user_name +
                                                    "</td>";

                                                temp += "<td>" +
                                                    '<img class="avatar avatar-xxl  brround" src="/storage/' +
                                                    itemData.user.image + '">'

                                                    +
                                                    "</td>";
                                                temp += "<td>" +
                                                    '<a href="' + itemData
                                                    .video +
                                                    '" target="_blank" class=" fa fa-chain btn btn-primary"></a>' +
                                                    "</td>";

                                                    

                                                    temp += "<td>" +
                                                    ' <div class="Details">' + itemData
                                                    .body +
                                                    '</div>' +
                                                    "</td>";

                                                    temp += "<td>" +
                                                    ' <span class="badge rounded-pill bg-success badge-sm me-1 mb-1 mt-1">' + itemData
                                                    .likes +
                                                    '</span>' +
                                                    "</td> ";

                                                    temp += "<td>" +
                                                    ' <span class="badge rounded-pill bg-danger badge-sm me-1 mb-1 mt-1">' + itemData
                                                    .desLike +
                                                    '</span>' +
                                                    "</td></tr> ";
                                               
                                            });
                                            document.getElementById('tableData')
                                                .innerHTML =
                                                temp;
                                        }
                                    }
                                )
                            }
                        )
                    }
                });

            });
        });
    </script>
@endsection
