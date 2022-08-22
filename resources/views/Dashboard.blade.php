<title>لوحة التحكم</title>
@extends('Layout')
@section('content')
    <style>
        .table> :not(:last-child)> :last-child>* {
            text-align: center;
        }
    </style>
    <div class="row mt-5">
        <!-- COL END -->
        <div class="col-sm-6 col-lg-6 col-md-12 col-xl-3">
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
                            <h2 class="mb-2 fw-normal mt-2">9,678</h2>
                            <h5 class="fw-normal mb-0">المستخدمين</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COL END -->
        <div class="col-sm-6 col-lg-6 col-md-12 col-xl-3">
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
                            <h2 class="mb-2 fw-normal mt-2">10,257</h2>
                            <h5 class="fw-normal mb-0">الدورات</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COL END -->
        <div class="col-sm-6 col-lg-6 col-md-12 col-xl-3">
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
                            <h2 class="mb-2 fw-normal mt-2">$67,953</h2>
                            <h5 class="fw-normal mb-0">المسابقات</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COL END -->
        <div class="col-sm-6 col-lg-6 col-md-12 col-xl-3">
            <div class="card">
                <div class="row">
                    <div class="col-4">
                        <div
                            class="card-img-absolute circle-icon bg-danger align-items-center text-center box-danger-shadow bradius">
                            <img src="../assets/images/circle.svg" alt="img" class="card-img-absolute"
                                style="border-radius: 27px;">
                            <i class=" lnr fe fe-shopping-bag fs-30 text-white mt-4"></i>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                            <h2 class="mb-2 fw-normal mt-2">7,632</h2>
                            <h5 class="fw-normal mb-0">المتاجر</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COL END -->
        <div class="col-sm-6 col-lg-6 col-md-12 col-xl-3">
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
                            <h2 class="mb-2 fw-normal mt-2">7,632</h2>
                            <h5 class="fw-normal mb-0">المنتديات</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COL END -->
        <div class="col-sm-6 col-lg-6 col-md-12 col-xl-3">
            <div class="card">
                <div class="row">
                    <div class="col-4">
                        <div
                            class="card-img-absolute circle-icon bg-info align-items-center text-center box-info-shadow bradius">
                            <img src="../assets/images/circle.svg" alt="img" class="card-img-absolute"
                                style="border-radius: 27px;">
                            <i class=" lnr ti-files fs-30 text-white mt-4"></i>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-4">
                            <h2 class="mb-2 fw-normal mt-2">7,632</h2>
                            <h5 class="fw-normal mb-0">المقالات</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COL END -->
        <div class="col-sm-6 col-lg-6 col-md-12 col-xl-3">
            <div class="card">
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
                            <h2 class="mb-2 fw-normal mt-2">7,632</h2>
                            <h5 class="fw-normal mb-0">الأبحاث العلمية</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- COL END -->
        <div class="col-sm-6 col-lg-6 col-md-12 col-xl-3">
            <div class="card">
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
                            <h2 class="mb-2 fw-normal mt-2">7,632</h2>
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
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/Saudi.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">السعودية</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/syria.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">سوريا</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/Emirates.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">الإمارات</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/Qatar.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">قطر</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/Bahrain.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">البحرين</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/Iraq.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">العراق</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/Jordan.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">الأردن</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/Lebanon.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">لبنان</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/Palestine.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">فلسطين</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/Somalia.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">الصومال</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/Yemen.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">اليمن</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/Kwait.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">الكويت</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/Libya.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">ليبيا</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/Egypt.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">مصر</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/Morocco.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">المغرب</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/Mauritania.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">موريتانيا</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/Tunisia.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">تونس</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/Djibouti.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">جيبوتي</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/Comoros.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">جزر القمر</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/Oman.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">سلطنة عمان</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/Algeria.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">الجزائر</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/Sudan.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">السودان</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
                    <div class="media mb-5 mt-0">
                        <div class="d-flex me-3">
                            <a href="javascript:void(0)"> <img class="media-object thumb-sm" alt="64x64"
                                    src="../assets/images/Countries/Others.svg"> </a>
                        </div>
                        <div class="media-body">
                            <div class="text-dark pt-2">بلدان أخرى</div>
                        </div>
                        <div class="pt-3 fw-bolder text-dark">24500</div>
                    </div>
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
                                    <th class="bg-transparent border-bottom-0" style="width: 20%;">اسم صاحب البحث</th>
                                    <th class="bg-transparent border-bottom-0" style="width: 20%;">القسم الذي يتبع له
                                        البحث</th>
                                    <th class="bg-transparent border-bottom-0" style="width: 5%;">اجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-bottom">
                                    <td>
                                        منهاج البحث الرياضي
                                    </td>
                                    <td>
                                        طارق طارق
                                    </td>
                                    <td>
                                        الأبحاث الرياضية
                                    </td>
                                    <td>
                                        <a href="{{ url('/ResearchDetails ') }}" class="btn btn-lg btn-info-light"
                                            data-bs-placement="top" data-bs-toggle="tooltip"
                                            title="عرض تفاصيل البحث"><span class="fe fe-eye fs-18"></span></a>
                                        <a href="javascript:void(0)" data-bs-target="#Unactivate" data-bs-toggle="modal"
                                            class="btn btn-lg btn-warning-light" data-bs-placement="top"
                                            data-bs-toggle="tooltip" title="إلغاء تفعيل البحث"><span
                                                class="icon icon-close fs-18" tooltip></span></a>
                                        <a href="javascript:void(0)" class="btn btn-lg btn-danger-light"
                                            data-bs-target="#Delete" data-bs-toggle="modal" data-bs-placement="top"
                                            data-bs-toggle="tooltip" title="حذف البحث"><span
                                                class="fe fe-trash fs-18"></span></a>
                                    </td>
                                </tr>
                                <tr class="border-bottom">
                                    <td>
                                        منهاج البحث الرياضي
                                    </td>
                                    <td>
                                        طارق طارق
                                    </td>
                                    <td>
                                        الأبحاث الرياضية
                                    </td>
                                    <td>
                                        <a href="{{ url('/ResearchDetails ') }}" class="btn btn-lg btn-info-light"
                                            data-bs-placement="top" data-bs-toggle="tooltip"
                                            title="عرض تفاصيل البحث"><span class="fe fe-eye fs-18"></span></a>
                                        <a href="javascript:void(0)" data-bs-target="#Unactivate" data-bs-toggle="modal"
                                            class="btn btn-lg btn-warning-light" data-bs-placement="top"
                                            data-bs-toggle="tooltip" title="إلغاء تفعيل البحث"><span
                                                class="icon icon-close fs-18" tooltip></span></a>
                                        <a href="javascript:void(0)" class="btn btn-lg btn-danger-light"
                                            data-bs-target="#Delete" data-bs-toggle="modal" data-bs-placement="top"
                                            data-bs-toggle="tooltip" title="حذف البحث"><span
                                                class="fe fe-trash fs-18"></span></a>
                                    </td>
                                </tr>
                                <tr class="border-bottom">
                                    <td>
                                        منهاج البحث الرياضي
                                    </td>
                                    <td>
                                        طارق طارق
                                    </td>
                                    <td>
                                        الأبحاث الرياضية
                                    </td>
                                    <td>
                                        <a href="{{ url('/ResearchDetails ') }}" class="btn btn-lg btn-info-light"
                                            data-bs-placement="top" data-bs-toggle="tooltip"
                                            title="عرض تفاصيل البحث"><span class="fe fe-eye fs-18"></span></a>
                                        <a href="javascript:void(0)" data-bs-target="#Unactivate" data-bs-toggle="modal"
                                            class="btn btn-lg btn-warning-light" data-bs-placement="top"
                                            data-bs-toggle="tooltip" title="إلغاء تفعيل البحث"><span
                                                class="icon icon-close fs-18" tooltip></span></a>
                                        <a href="javascript:void(0)" class="btn btn-lg btn-danger-light"
                                            data-bs-target="#Delete" data-bs-toggle="modal" data-bs-placement="top"
                                            data-bs-toggle="tooltip" title="حذف البحث"><span
                                                class="fe fe-trash fs-18"></span></a>
                                    </td>
                                </tr>
                                <tr class="border-bottom">
                                    <td>
                                        منهاج البحث الرياضي
                                    </td>
                                    <td>
                                        طارق طارق
                                    </td>
                                    <td>
                                        الأبحاث الرياضية
                                    </td>
                                    <td>
                                        <a href="{{ url('/ResearchDetails ') }}" class="btn btn-lg btn-info-light"
                                            data-bs-placement="top" data-bs-toggle="tooltip"
                                            title="عرض تفاصيل البحث"><span class="fe fe-eye fs-18"></span></a>
                                        <a href="javascript:void(0)" data-bs-target="#Unactivate" data-bs-toggle="modal"
                                            class="btn btn-lg btn-warning-light" data-bs-placement="top"
                                            data-bs-toggle="tooltip" title="إلغاء تفعيل البحث"><span
                                                class="icon icon-close fs-18" tooltip></span></a>
                                        <a href="javascript:void(0)" class="btn btn-lg btn-danger-light"
                                            data-bs-target="#Delete" data-bs-toggle="modal" data-bs-placement="top"
                                            data-bs-toggle="tooltip" title="حذف البحث"><span
                                                class="fe fe-trash fs-18"></span></a>
                                    </td>
                                </tr>
                                <tr class="border-bottom">
                                    <td>
                                        منهاج البحث الرياضي
                                    </td>
                                    <td>
                                        طارق طارق
                                    </td>
                                    <td>
                                        الأبحاث الرياضية
                                    </td>
                                    <td>
                                        <a href="{{ url('/ResearchDetails ') }}" class="btn btn-lg btn-info-light"
                                            data-bs-placement="top" data-bs-toggle="tooltip"
                                            title="عرض تفاصيل البحث"><span class="fe fe-eye fs-18"></span></a>
                                        <a href="javascript:void(0)" data-bs-target="#Unactivate" data-bs-toggle="modal"
                                            class="btn btn-lg btn-warning-light" data-bs-placement="top"
                                            data-bs-toggle="tooltip" title="إلغاء تفعيل البحث"><span
                                                class="icon icon-close fs-18" tooltip></span></a>
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


    {{-- Popups --}}

    <div class="modal fade" id="Unactivate" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">إلغاء تفعيل البحث</h6><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning" role="alert">
                        هل أنت متأكد من أنك تريد إلغاء تفعيل هذا البحث؟
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning">إلغاء تفعيل البحث</button>
                    <button class="btn btn-light" data-bs-dismiss="modal">رجوع</button>
                </div>
            </div>
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
@endsection
