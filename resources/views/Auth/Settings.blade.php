<title>إعدادات الحساب</title>
@extends('Layout')
@section('content')
    <div class="row mt-5">
        <div class="col-xl-6 m-auto">
            <form action="{{route('EditProfile')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">إعدادات الحساب</h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex mt-1">
                            <input id='uploadImage' onchange="readURL(this);" type='file' hidden
                                accept="image/x-png,image/gif,image/jpeg" name="upload" onchange="PreviewImage();" />
                            <img id="UserImage" class="img-fluid rounded m-auto mt-1" style="width: 126px !important; height: 126px !important; border:1px solid #6F7072"
                                src="{{ asset('public/storage/'.auth('admin')->user()->image) }}" />
                        </div>
                        <div class="d-flex mt-2">
                            <button type="button" id='buttonid' name="files" class="btn btn-primary m-auto">
                                اختيار الصورة
                            </button>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="form-label">كلمة المرور الحالية</label>
                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                </a>
                                <input class="input100 form-control" name="password" type="password" placeholder="ادخل كلمة المرور الحالية">
                            </div>
                            <!-- <input type="password" class="form-control" value="password"> -->
                        </div>
                        <div class="form-group">
                            <label class="form-label">كلمة المرور الجديدة</label>
                            <div class="wrap-input100 validate-input input-group" id="Password-toggle1">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                </a>
                                <input class="input100 form-control" name="newPassword" type="password" placeholder="ادخل كلمة المرور الجديدة">
                            </div>
                            <!-- <input type="password" class="form-control" value="password"> -->
                        </div>
                        <div class="form-group">
                            @error('newPassword')

                            <strong style="color: rgb(215, 42, 42)">{{ $message }}</strong>

                    @enderror
                            <label class="form-label">تأكيد كلمة المرور</label>
                            <div class="wrap-input100 validate-input input-group" id="Password-toggle2">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                </a>
                                <input class="input100 form-control" name="newPassword_confirmation"  type="password"
                                    placeholder="تأكيد كلمة المرور الجديدة">
                            </div>
                            <!-- <input type="password" class="form-control" value="password"> -->
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button  type="submit" class="btn btn-success my-1">حفظ</button>
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
