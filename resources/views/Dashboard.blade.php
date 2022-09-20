<title>لوحة التحكم</title>
@extends('Layout')
@section('content')
    <style>
        .table> :not(:last-child)> :last-child>* {
            text-align: center;
        }
    </style>

<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"
/>
    <div class="row mt-5">
        <!-- COL END -->
        <div class="col-sm-6 col-lg-6 col-md-12 col-xl-4">
            <div class="card">
                <div class="row">
                    <div class="col-4">
                        <div class="circle-icon bg-primary text-center align-self-center box-primary-shadow bradius">
                            <img src="../assets/images/circle.svg" alt="img" class="card-img-absolute"
                                style="border-radius: 27px;">
                            <i class="lnr fe fe-users fs-30  text-white mt-4"></i>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                            <h2 class="mb-2 fw-normal mt-2">{{$usersCount}}</h2>
                            <h5 class="fw-normal mb-0">المستخدمين</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COL END -->
        <div class="col-sm-6 col-lg-6 col-md-12 col-xl-4">
            <div class="card">
                <div class="row">
                    <div class="col-4">
                        <div
                            class="card-img-absolute circle-icon bg-secondary align-items-center text-center box-secondary-shadow bradius">
                            <img src="../assets/images/circle.svg" alt="img" class="card-img-absolute"
                                style="border-radius: 27px;">
                            <i class="lnr icon icon-graduation fs-30 text-white mt-4"></i>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                            <h2 class="mb-2 fw-normal mt-2">{{$courseCount}}</h2>
                            <h5 class="fw-normal mb-0">الدورات</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COL END -->
        <div class="col-sm-6 col-lg-6 col-md-12 col-xl-4">
            <div class="card">
                <div class="row">
                    <div class="col-4">
                        <div
                            class="card-img-absolute  circle-icon bg-success align-items-center text-center box-success-shadow bradius">
                            <img src="../assets/images/circle.svg" alt="img" class="card-img-absolute"
                                style="border-radius: 27px;">
                            <i class="lnr icon-trophy fs-30 text-white mt-4"></i>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                            <h2 class="mb-2 fw-normal mt-2">{{$competitionsCount}}</h2>
                            <h5 class="fw-normal mb-0">المسابقات</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-6 col-md-12 col-xl-4">
            <div class="card">
                <div class="row">
                    <div class="col-4">
                        <div
                            class="card-img-absolute circle-icon bg-orange align-items-center text-center box-orange-shadow bradius">
                            <img src="../assets/images/circle.svg" alt="img" class="card-img-absolute"
                                style="border-radius: 27px;">
                            <i class=" lnr fe fe-edit fs-30 text-white mt-4"></i>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                            <h2 class="mb-2 fw-normal mt-2">{{$Rooms}}</h2>
                            <h5 class="fw-normal mb-0">غرف الدردشة الرياضية</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COL END -->

        <!-- COL END -->
        <div class="col-sm-6 col-lg-6 col-md-12 col-xl-4">
            <div class="card" style="height: 84%;">
                <div class="row">
                    <div class="col-4">
                        <div
                            class="card-img-absolute circle-icon bg-warning align-items-center text-center box-warning-shadow bradius">
                            <img src="../assets/images/circle.svg" alt="img" class="card-img-absolute"
                                style="border-radius: 27px;">
                            <i class=" lnr ti-zoom-in fs-30 text-white mt-4"></i>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                            <h2 class="mb-2 fw-normal mt-2">{{$reSearchCount}}</h2>
                            <h5 class="fw-normal mb-0">الأبحاث العلمية</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COL END -->
        <div class="col-sm-6 col-lg-6 col-md-12 col-xl-4">
            <div class="card" style="height: 84%;">
                <div class="row">
                    <div class="col-4">
                        <div
                            class="card-img-absolute circle-icon bg-Cyan align-items-center text-center box-Cyan-shadow bradius">
                            <img src="../assets/images/circle.svg" alt="img" class="card-img-absolute"
                                style="border-radius: 27px;">
                            <i class=" lnr icon-login fs-30 text-white mt-4"></i>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                            <h2 class="mb-2 fw-normal mt-2">{{$globalVisis}}</h2>
                            <h5 class="fw-normal mb-0">زوار التطبيق</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COL END -->
    </div>
    <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">عدد الزوار من كل بلد</h5>
                </div>

                <div class="card-body" style="max-height: 350px; overflow-y: auto;">
                    @forelse ($visitsCountry as $listOfVisitsCountry)
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                                <a href="javascript:void(0)"> <span style="    width: 42px;
                                    font-size: 32px;" class="fi fi-{{$listOfVisitsCountry->countryCode}}"></span>   </a>
                        </div>
                        <div class="media-body">

                            <div class="text-dark pt-2">{{$listOfVisitsCountry->country}}</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">{{$listOfVisitsCountry->countVisits}}</div>
                    </div>


                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-0">طلبات نشر بحث علمي</h3>
                </div>
                <div class="card-body pt-4">
                    <div class="table-responsive">
                        <table id="data-table" class="table table-bordered text-nowrap mb-0">
                            <thead class="border-top">
                                <tr>
                                    <th class="bg-transparent border-bottom-0" style="width: 20%;">عنوان البحث</th>
                                    <th class="bg-transparent border-bottom-0" style="width: 20%;">ناشر البحث	 </th>
                                    <th class="bg-transparent border-bottom-0" style="width: 20%;">  رابط اليوتيوب</th>
                                    <th class="bg-transparent border-bottom-0" style="width: 5%;">اجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($researchPainding as $List_Of_Research)



                                <tr class="border-bottom">
                                    <td>
                                        {{$List_Of_Research->title_ar}}
                                    </td>
                                    <td>
                                        {{$List_Of_Research->auther->user_name}}
                                    </td>
                                    <td>
                                        {{$List_Of_Research->link}}
                                    </td>
                                    <td>
                                        <a href="{{ route('ResearchDetails',['ar',$List_Of_Research->id]) }}" class="btn btn-lg btn-info-light"
                                            data-bs-placement="top" data-bs-toggle="tooltip"
                                            title="عرض تفاصيل البحث"><span class="fe fe-eye fs-18"></span></a>
                                        <a  data-id="{{$List_Of_Research->id}}"href="javascript:void(0)" data-bs-target="#Unactivate" data-bs-toggle="modal"
                                        class="activeResearch btn btn-lg btn-success-light" data-bs-placement="top"
                                        data-bs-toggle="tooltip" title=" تفعيل البحث"><span
                                        class="icon icon-check fs-18" tooltip></span></a>

                                    </td>
                                    @empty
                                    <p>لا يوجد طلبات قيد الأنتظار</p>
                                    @endforelse
                                </tr>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Popups --}}

    <div class="modal fade" id="Unactivate" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form  id="formActive" method="POST">
                @csrf

                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                    <h6 class="modal-title"> تفعيل البحث</h6><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-success " role="alert">
                        هل أنت متأكد من أنك تريد  تفعيل هذا البحث؟
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success"> تفعيل البحث</button>
                    <button class="btn btn-light" data-bs-dismiss="modal">رجوع</button>
                </div>
            </div>
        </form>
        </div>
    </div>

    <div class="modal fade" id="Delete">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف البحث</h6><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" role="alert">
                        هل أنت متأكد من أنك تريد حذف هذا البحث؟
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger">حذف البحث</button>
                    <button class="btn btn-light" data-bs-dismiss="modal">رجوع</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('.activeResearch').on('click',function () {
             let id = $(this).attr('data-id');
            $('#formActive').attr('action','toggleResearch/'+ id +'/'+'1');
            });
        });
    </script>
@endsection
