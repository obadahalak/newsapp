<title>البنر الإخباري</title>
@extends('Layout')
@section('content')
    <div class="row row-sm mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title m-auto">قائمة البنر الإخباري</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-12">
                            <button class="btn btn-success" data-bs-target="#Add" data-bs-toggle="modal">
                                إضافة خبر
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p text-center  border-bottom-0">الخبر</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ListAds as $ListOfitem)

                                <tr>
                                    <td>{{$ListOfitem->body}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="Add">
        <div class="modal-dialog" role="document">
            <form method="POST" Action="{{route('createAdsNews')}}" class="modal-content modal-content-demo">
            @csrf
                <div class="modal-header">
                    <h6 class="modal-title">إضافة خبر</h6><button aria-label="Close" type="button" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <label class="col-md-1 form-label">الخبر:</label>
                    <div class="repeater">
                        <div data-repeater-list="ListNewsAds">
                            <div class="row mb-4" data-repeater-item>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="body" />
                                </div>
                                <div class="col-md-3">
                                    <button data-repeater-delete type="button" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                        <button data-repeater-create type="button" class="btn btn-success">Add</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">حفظ</button>
                    <button aria-label="Close" type="button" data-bs-dismiss="modal" class="btn btn-light">رجوع</button>
                </div>
            </form>
        </div>
    </div>
@endsection
