<title>تفاصيل البحث</title>
@extends('Layout')
@section('content')
 <div class="row mt-3">
        <div class="col-xl-9 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title m-auto">
                        عنوان البحث
                    </h3>
                </div>
                <div class="card-body">
                    <div class="email-media">
                        <div class="mt-0 d-sm-flex">
                            <img class="me-2 rounded-circle avatar avatar-lg" src="assets/images/logo.svg">
                            <div class="media-body pt-0">
                                <div class="float-end d-none d-md-flex fs-15">
                                    <small class="me-3 mt-3 text-muted">Sep 13 , 2021 12:45 pm</small>
                                </div>
                                <div class="media-title text-dark font-weight-semibold mt-1">اسم الناشر<span
                                        class="text-muted font-weight-semibold">( cherryblosso@gmail.com )</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row img-gallery" id="lightgallery">
                        <div class="col-xl-4 col-sm-6 m-auto">
                            <a href="javascript:void(0)" class="d-block link-overlay">
                                <img class="d-block img-fluid br-5" src="/assets/images/logo.jpg">                                
                            </a>
                        </div>
                    </div>
                    <div class="eamil-body mt-5">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                            dicta sunt explicabo.
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
                        Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it
                            is pain, but because occasionally circumstances occur in which toil and pain can procure him
                            some great pleasure. To
                            take a trivial example, which of us ever undertakes laborious physical exercise, except to
                            obtain some advantage from it?</p>
                        <br><br>
                    </div>
                </div>
                <div class="card-footer">
                <button class="btn btn-danger">حذف البحث</button>
                </div>
            </div>
        </div>
    </div>
@endsection