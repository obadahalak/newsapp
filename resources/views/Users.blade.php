<title>المستخدمين</title>
@extends('Layout')
@section('content')

<link rel="stylesheet" href="../assets/Edits/Users.css">
<div class="row row-sm mt-5">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title m-auto">قائمة المستخدمين</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0">الاسم الاول</th>
                                <th class="wd-15p border-bottom-0">الاسم الاخير</th>
                                <th class="wd-20p border-bottom-0">البريد الالكتروني</th>
                                <th class="wd-15p border-bottom-0">رقم الهاتف</th>
                                <th class="wd-25p border-bottom-0" width="5%">البلد</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $listUsers)


                            <tr>
                                <td>{{$listUsers->fname}}</td>
                                <td>{{$listUsers->lname}}</td>
                                <td>{{$listUsers->email}}</td>
                                <td>{{$listUsers->phone ?? '_'}}</td>

                                <td>
                                    {{$listUsers->userCountry->country}}

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{$users->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
