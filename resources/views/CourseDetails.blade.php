<title>تفاصيل الدورة</title>
@extends('Layout')
@section('content')
    <div class="row mt-5">
        <div class="col-xl-4 col-sm-12 col-md-12">
            <div class="card border p-0">
                <div class="card-header">
                    <h3 class="card-title m-auto">تفاصيل الدورة</h3>
                </div>
                <div class="card-body text-center">
                    <img class="avatar avatar-xxl brround cover-image" style="border:1px solid #848894"
                        src="{{asset('public/storage/'.$data['course']->images[0]->src)}}" />
                    <h5 class="h5 mb-0 mt-3 mb-2">{{ $data['course']->name_ar }}</h5>
                    <span class="badge bg-success   me-1 mb-1 mt-1">دورة مجانية</span>
                    <br>
                    <span class="me-1 mb-1 mt-1"> المدرس :{{ $data['course']->coachName }}</span>
                </div>
                <div class="card-footer text-center">
                    <h5 class="h4 mb-0 mt-3 mb-2">دورة مجانية</h5>
                    <span class="badge bg-warning badge-sm mb-3">نسبة النجاح : {{ $data['course']->successRate }}%</span>
                    <div class="row user-social-detail">
                        <div>
                            <h5>تفاصيل الدورة <i class="fe fe-edit-3 text-primary mx-2"></i></h5>
                            <p>{{ $data['course']->details_ar }}
                            </p>
                        </div>

                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('EditCourse',$data['course']->id) }}" class="btn btn-warning">تعديل الدورة</a>
                </div>
            </div>
        </div>

        <div class="col-xl-8 col-sm-12 col-md-12">
            <div class="panel panel-primary">
                <div class="card">
                    <div class="card-header">
                        <div class="tab-menu-heading tab-menu-heading-boxed m-auto">
                            <div class="tabs-menu tabs-menu-border">
                                <ul class="nav panel-tabs">
                                    <li><a href="#tab1" class="card-title active" data-bs-toggle="tab">الدروس</a></li>
                                    <li><a href="#tab2" class="card-title" data-bs-toggle="tab">الاختبارات</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                    {{--  --}}

                                    @foreach ($data['files'][0] as $itemLession)
                                        {{-- {{$itemLession}} --}}

                                        <div class="panel panel-default mt-2">
                                            <div class="panel-heading" role="tab" id="heading3">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-bs-toggle="collapse"
                                                        data-bs-parent="#accordion" href="#collapse" aria-expanded="false"
                                                        aria-controls="collapse01">
                                                        {{ $itemLession->name_ar }}
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse" class="panel-collapse collapse " role="tabpanel"
                                                aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                @foreach ($itemLession->images as $files)
                                                                    <tr>

                                                                        <td colspan="2">
                                                                            <div class="d-flex">

                                                                                <a href="{{asset('public/storage/'.$files->src)}}"
                                                                                    class="bg-success-transparent border border-success brround m-auto">
                                                                                    <svg style="width:16px;height:16px"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#09ad95"
                                                                                            d="M10,4L12,6H20A2,2 0 0,1 22,8V18A2,2 0 0,1 20,20H4C2.89,20 2,19.1 2,18V6C2,4.89 2.89,4 4,4H10M12.46,10.88L14.59,13L12.46,15.12L13.88,16.54L16,14.41L18.12,16.54L19.54,15.12L17.41,13L19.54,10.88L18.12,9.46L16,11.59L13.88,9.46L12.46,10.88Z" />
                                                                                    </svg>
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </table>
                                                        </div>
                                                        @foreach ($data['files'][1] as $itemLession)
                                                            @foreach ($itemLession->images as $videos)
                                                                <div class="col-xl-12">
                                                                    <a href="{{asset('public/storage/'$videos->src)}}">انفر هنا للأنتقال الى
                                                                        الرابط </a>
                                                                </div>
                                                                <br>
                                                            @endforeach
                                                        @endforeach


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{-- s --}}
                                </div>
                            </div>
                            <div class="tab-pane" id="tab2">
                                <div class=" row panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    {{-- ?asd --}}
                                    @foreach ($data['quize'] as $quizeList)
                                        <div class="col-xl-6 col-sm-12">
                                            <div class="panel panel-default mt-2">
                                                <div class="panel-heading " role="tab" id="headingOne1">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-bs-toggle="collapse"
                                                            data-bs-parent="#accordion" href="#collapse1"
                                                            aria-expanded="true" aria-controls="collapse1">
                                                            {{ $quizeList->question_ar }}
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse1" class="panel-collapse collapse " role="tabpane"
                                                    aria-labelledby="headingOne1">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="expanel expanel-success">
                                                                    <div class="expanel-heading">
                                                                        <h3 class="expanel-title"> الأجابة الصحيحة</h3>
                                                                    </div>
                                                                    <div class="expanel-body">
                                                                        @php
                                                                            if ($quizeList->correct_answer == 1) {
                                                                                $answer = 'صح';
                                                                            } else {
                                                                                $answer = 'خطأ';
                                                                            }
                                                                        @endphp
                                                                        {{ $answer }}
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                {{-- asdasd --}}
                            </div>
                        </div>
                    </div>

                </div>


                {{-- new --}}
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th colspan="3" style="margin:auto">
                                    <center>
                                        <h2>نتائج الأختبار</h2>
                                    </center>
                                </th>
                            </tr>

                            <tr>
                                <th class="wd-15p border-bottom-0">اسم المستخدم </th>
                                <th class="wd-10p border-bottom-0">نتيجة الأختبار </th>
                                <th class="wd-10p border-bottom-0">ناجح / راسب </th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data['markUsers'] as $marks)
                                <tr>
                                    <td class="FixDetails">
                                        <div class="Details">
                                            <h6 class="mb-0 fs-14 fw-semibold m-auto">
                                                {{ $marks->user->user_name }}
                                            </h6>
                                        </div>
                                    </td>
                                    <td class="FixDetails">
                                        <div class="Details">
                                            {{ $marks->mark }}
                                        </div>
                                    </td>
                                    <td>
                                        {{ $marks->isSuccess() }}
                                    </td>


                                </tr>
                            @empty
                                <center><b>لا يوجد نتائج اختبار </b></center>
                            @endforelse
                        </tbody>
                    </table>
                </div>



            </div>
        </div>
    </div>
@endsection
