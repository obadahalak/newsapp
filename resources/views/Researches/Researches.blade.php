<title>الأبحاث العلمية</title>
@extends('Layout')
@section('content')
    <div class="row row-sm mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title m-auto">قائمة الابحاث</h3>
                </div>
                <div class="card-body">
                    <button class="btn btn-success mb-3 mr-auto" data-bs-target="#Add" data-bs-toggle="modal">
                        إضافة بحث
                        <i class="fe fe-plus"></i>
                    </button>

                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0" width="45%">عنوان البحث</th>
                                    <th class="wd-10p border-bottom-0" width="45%">ناشر البحث</th>
                                    <th class="wd-10p border-bottom-0" width="45%">رابط اليوتيوب </th>
                                    <th class="wd-25p border-bottom-0" width="10%">اجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Researchs as $ResearchsItems)
                                    @if ($lan == 'en')
                                        <tr>
                                            <td>
                                                <h6 class="mb-0 fs-14 fw-semibold m-auto">
                                                    {{ $ResearchsItems->title }}
                                                </h6>
                                            </td>

                                            <td>
                                                {{ $ResearchsItems->auther ? $ResearchsItems->auther->user_name : 'Admin' }}
                                            </td>

                                            <td>
                                                <a
                                                    href="{{ $ResearchsItems->link }}">....{{ Str::substr($ResearchsItems->link, 0, 20) }}</a>
                                            </td>
                                            <td>
                                            @else
                                        <tr>
                                            <td>
                                                <h6 class="mb-0 fs-14 fw-semibold m-auto">
                                                    {{ $ResearchsItems->title_ar }}
                                                </h6>
                                            </td>
                                            <td>
                                                {{ $ResearchsItems->auther ? $ResearchsItems->auther->user_name : 'Admin' }}
                                            </td>
                                            <td>
                                                <a
                                                    href="{{ $ResearchsItems->link }}">.....{{ Str::substr($ResearchsItems->link, 0, 20) }}</a>
                                            </td>
                                            <td>
                                    @endif
                                    <a href="{{ route('ResearchDetails', [$lan, $ResearchsItems->id]) }}"
                                        class="btn btn-lg btn-info-light" data-bs-placement="top" data-bs-toggle="tooltip"
                                        title="عرض تفاصيل البحث"><span class="fe fe-eye fs-18"></span></a>
                                    @php
                                        $status = $ResearchsItems->status;
                                        if ($status == 0) {
                                            $status = 'تفعيل';
                                            $route = ['toggleResearch', '1'];
                                        } elseif ($status == 1) {
                                            $status = 'الغاء التفعيل';
                                            $route = ['toggleResearch', '0'];
                                        } else {
                                            $status = 'الغاء تفعيل';
                                            $route = ['toggleResearch', '0'];
                                        }
                                    @endphp

                                    <form action="{{ route('toggleResearch', [$ResearchsItems->id, $route[1]]) }}"
                                        method="POST">
                                        @csrf

                                        <button type="submit" class="btn btn-lg btn-warning-light"
                                            title="حذف البحث">{{ $status }}</button>
                                    </form>

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

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert"
            style="display: flex;
        justify-content: center;
        height: 58px;
        align-items: center;">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="modal fade" id="Add">
        <div class="modal-dialog" role="document">
            <form method="POST" action="{{route('researchCreate')}}" enctype="multipart/form-data" class="modal-content modal-content-demo">
                @csrf
                <div class="modal-header">
                    <h6 class="modal-title">إضافة بحث</h6><button aria-label="Close" type="button" class="btn-close"
                        required data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">عنوان بحث:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="title" required />
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">عنوان بحث </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="title_ar" placeholder="عنوان البحث باللغة العربية" required />
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">رابط الفيديو:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="link" placeholder="https://example.com" />
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">البحث:</label>
                        <div class="col-md-9">
                            <textarea type="text" class="form-control" name="body" rows="11" required></textarea>
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">البحث باللعربي</label>
                        <div class="col-md-9">
                            <textarea type="text" class="form-control" name="body_ar" rows="11" required></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="form-group mb-0">
                            <input  class="form-control" id="demo" type="file" name="images[]" accept=".jpg, .png, image/jpeg, image/png"
                                multiple required>
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
@endsection
