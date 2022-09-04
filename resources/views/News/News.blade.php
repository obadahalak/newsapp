<title>الأخبار</title>
@extends('Layout')
@section('content')
<div class="row mt-5">
        <div class="col-xl-12">
            <button class="btn btn-success mb-3 mr-auto" data-bs-target="#Add" data-bs-toggle="modal">
                إضافة خبر
                <i class="fe fe-plus"></i>
            </button>

        </div>
    </div>
    <div class="row mt-5">
        @if($lan=='ar')
        @foreach ($News as $getNews)

        <form  method="POST" action="{{route('deleteNews',$getNews->id)}}"class="col-md-6 col-sm-12 col-lg-6">
            @csrf
            <div class="card">
                <div class="card-header">

                    <h3 class="card-title m-auto">{{$getNews->title_ar}}</h3>
                </div>
                <div class="card-body p-2">
                    <div class="eamil-body mt-5">
                        <p>
                            {{$getNews->body_ar}}
                        </p>
                    </div>
                    <div class="mt-2 mb-5 text-center">
                        <a class=" fw-bolder link-primary"
                        href="{{$getNews->link}}" target="_blank">
                        رابط الفيديو

                    </a>
                    </div>
                    @foreach ($getNews->images as $images)


                    <div>
                        <div class="col-4" data-responsive=""
                        data-src=" /storage/{{$images->src}}">
                        <a href="javascript:void(0)" class="d-block link-overlay">
                            <img class="d-block img-fluid br-5" src=" /storage/{{$images->src}}" alt="">
                            <span class="link-overlay-bg">
                                <i class="fa fa-search"></i>
                            </span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-danger">حذف الخبر</button>
                </div>

            </div>
        </form>

        @endforeach
        {{$News->links()}}

        @elseif($lan=='en')



        @foreach ($News as $getNews)

        <form  method="POST" action="{{route('deleteNews',$getNews->id)}}"class="col-md-6 col-sm-12 col-lg-6">
            @csrf
            <div class="card">
                <div class="card-header">

                    <h3 class="card-title m-auto">{{$getNews->title}}</h3>
                </div>
                <div class="card-body p-2">
                    <div class="eamil-body mt-5">
                        <p>
                            {{$getNews->body}}
                        </p>
                    </div>
                    <div class="mt-2 mb-5 text-center">
                        <a class=" fw-bolder link-primary"
                        href="{{$getNews->link}}" target="_blank">
                        رابط الفيديو

                    </a>
                    </div>
                    @foreach ($getNews->images as $images)


                    <div>
                        <div class="col-4" data-responsive=""
                        data-src=" /storage/{{$images->src}}">
                        <a href="javascript:void(0)" class="d-block link-overlay">
                            <img class="d-block img-fluid br-5" src=" /storage/{{$images->src}}" alt="">
                            <span class="link-overlay-bg">
                                <i class="fa fa-search"></i>
                            </span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-danger">حذف الخبر</button>
                </div>



            </div>
        </form>

        @endforeach
        {{$News->links()}}

        @endif
    </div>
<div class="modal fade" id="Add">
        <div class="modal-dialog" role="document">
            <form  method="POST" action="{{route('CreateResearch')}}" enctype="multipart/form-data"  class="modal-content modal-content-demo">
            @csrf
                <div class="modal-header">
                    <h6 class="modal-title">إضافة خبر</h6><button aria-label="Close" type="submit" class="btn-close"
                        required data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">عنوان الخبر:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="title_ar" required />
                        </div>
                    </div>

                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">عنوان الخبر باللعةالأنلكيزية:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="title" required />
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">رابط الفيديو:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="link"
                                placeholder="https://example.com" />
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">الخبر:</label>
                        <div class="col-md-9">
                            <textarea type="text" class="form-control" name="body" rows="11" required></textarea>
                        </div>
                    </div>

                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">الخبر باللغة العربية</label>
                        <div class="col-md-9">
                            <textarea type="text" class="form-control" name="body_ar" rows="11" required></textarea>
                        </div>
                    </div>
                    <input type="file" name="image[]" multiple>
                    {{-- <div class="row mb-4">
                        <div class="form-group mb-0">
                            <input  type="file" name="files"
                                 multiple >
                        </div>
                    </div> --}}
                    <div class="modal-footer">

                        <button class="btn btn-success" type="submit">حفظ</button>
                        <button aria-label="Close" type="button" data-bs-dismiss="modal"
                            class="btn btn-light">رجوع</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
