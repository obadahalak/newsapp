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
        <div class="col-xl-4 col-md-6 col-sm-6">
            <div class="card overflow-hidden">
                <img src="data:image/jpeg;base64,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"
                    class="card-img-top">
                <div class="card-body m-auto">
                    <a href="javascript:void(0)" class="btn btn-warning">تفعيل الصورة</a>
                    <a href="javascript:void(0)" class="btn btn-danger">حذف الصورة</a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-6">
            <div class="card overflow-hidden">
                <img src="data:image/jpeg;base64,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"
                    class="card-img-top">
                <div class="card-body m-auto">
                    <a href="javascript:void(0)" class="btn btn-warning">إلغاء تفعيل الصورة</a>
                    <a href="javascript:void(0)" class="btn btn-danger">حذف الصورة</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Add">
        <div class="modal-dialog" role="document">
            <form method="" Action="" class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">إضافة صورة</h6><button aria-label="Close" type="button"  class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="d-flex mt-1">
                            <input id='uploadImage' onchange="readURL(this);" type='file' hidden
                                accept="image/x-png,image/gif,image/jpeg" name="upload" onchange="PreviewImage();" />
                            <img id="UserImage" class="img-fluid m-auto mt-1"                                
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
                        <button aria-label="Close" type="button" data-bs-dismiss="modal" class="btn btn-light">رجوع</button>
                    </div>
                </div>
            </form>
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
