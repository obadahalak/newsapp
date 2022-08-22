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
                                <th class="wd-10p border-bottom-0" width="50%">نبذة عن الشخص</th>
                                <th class="wd-25p border-bottom-0" width="5%">البلد</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bella</td>
                                <td>Chloe</td>
                                <td>tarq.alloji@gmail.com</td>
                                <td>00963945201283</td>
                                <td>
                                    <div class="bio">
                                        Welcome! This site allows you to generate text fonts that you can copy and paste
                                        into your Instagram bio. It's useful for generating Instagram bio symbols to
                                        make
                                        your profile stand out and have a little bit of individuality. After typing some
                                        text into the input box, you can keep clicking the "show more fonts" button and
                                        it'll keep generating an infinite number of different Instagram font variations,
                                        or
                                        you can use one of the "tried and true" fonts like the cursive text, or the
                                        other
                                        stylish text fonts - i.e. the ones that are a bit "neater" than the others
                                        because
                                        they use a set of symbols that are closer to the normal alphabet, and are more
                                        consistent in their style.
                                    </div>
                                </td>
                                <td>
                                    <img src="../assets/images/Countries/syria.svg">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
