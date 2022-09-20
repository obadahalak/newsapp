<title>البنرات الإعلانية</title>
@extends('Layout')
@section('content')
    <div class="row mt-5">
        <div class="col-xl-12">
            <button class="btn btn-success" data-bs-target="#Add" data-bs-toggle="modal">
                إضافة صورة
                <i class="fe fe-upload me-2" style="font-size: 15px"></i>
            </button>
        </div>
    </div>
    <div class="row mt-3">
        @foreach ($bannerImage as $listOfImages)

        <div class="col-xl-4 col-md-6 col-sm-6">

            <form method="POST" action="{{route('deleteBannerImage',$listOfImages->id)}}" class="card overflow-hidden">
                @csrf
                <img name="banner" name="banner"
                        src="{{asset('public/storage/'.$listOfImages->image)}}"
                        class="card-img-top">
                    <div class="card-body m-auto">
                        <button class="btn btn-danger text-white" type="submit">حذف الصورة</button>
                    </div>
                </form>
            </div>
            @endforeach
        </div>

    <div class="modal fade" id="Add">
        <div class="modal-dialog" role="document">
            <form method="POST" Action="{{route('createBannerImage')}}" class="modal-content modal-content-demo" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h6 class="modal-title">إضافة صورة</h6><button aria-label="Close" type="button" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="d-flex mt-1">
                            <input id='uploadImage' onchange="readURL(this);" type='file' hidden
                                accept="image/x-png,image/gif,image/jpeg" name="upload" onchange="PreviewImage();" />
                            <img id="UserImage" name="userImage" class="img-fluid m-auto mt-1"
                                src="https://cdn.pixabay.com/photo/2021/09/12/07/58/banner-6617550_1280.png" />
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
