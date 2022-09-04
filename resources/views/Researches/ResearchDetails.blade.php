<title>تفاصيل البحث</title>
@extends('Layout')
@section('content')
 <div class="row mt-3">
        <div class="col-xl-9 m-auto">
            <form method="POST" action="{{route('deleteResearch',$getResearch->id)}}" class="card">
          @csrf
                <div class="card-header">
                    <h3 class="card-title m-auto">
                       {{$getResearch->title}}
                    </h3>
                </div>

                <div class="card-body">
                    <div class="email-media">
                        <div class="mt-0 d-sm-flex">
                            <img class="me-2 rounded-circle avatar avatar-lg" src="/assets/images/logo.svg">
                            <div class="media-body pt-0">
                                <div class="float-end d-none d-md-flex fs-15">
                                    <small class="me-3 mt-3 text-muted">{{$getResearch->created_at->diffForHumans()}}</small>
                                </div>
                                <div class="media-title text-dark font-weight-semibold mt-1">اسم الناشر<span
                                        class="text-muted font-weight-semibold">( {{$getResearch->auther ? $getResearch->auther->user_name :'Admin'  }} )</span></div>
                            </div>
                        </div>

                        عدد الزيارات
                        {{$getResearch->visitors ? $getResearch->visitors->counter : 'لم تشاهد بعد '}}
                    </div>

                    <div class="row  img-gallery" id="lightgallery">
                        @foreach ($getResearch->images as $listOfImages)
                        <div class="col-xl-4 col-sm-6 m-auto">
                            <a href="javascript:void(0)" class="d-block link-overlay">
                                <img class="d-block img-fluid br-5" src="/storage/{{$listOfImages->src}}">
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="eamil-body mt-5">
                        <p>{{$getResearch->body}}</p>
                        <br><br>
                    </div>
                </div>
                <div class="card-footer">
                <button class="btn btn-danger" type="submit">حذف البحث</button>
                </div>
            </form>
        </div>
    </div>
@endsection
