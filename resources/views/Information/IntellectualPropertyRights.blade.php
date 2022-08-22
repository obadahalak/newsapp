<title>حقوق الملكية الفكرية</title>
@extends('Layout')
@section('content')
    <div class="row mt-3">
        <div class="col-xl-9 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title m-auto">
                        حقوق الملكية الفكرية
                    </h3>
                </div>
                <div class="card-body">
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
                    <button class="btn btn-warning" data-bs-effect="effect-scale" data-bs-toggle="modal"
                        href="#Edit">تعديل</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Edit">
        <div class="modal-dialog modal-dialog-centered text-center modal-lg" role="document">
            <form method="" Action="" class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حقوق الملكية الفكرية</h6><button type="button" aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <textarea rows="20" class="form-control" name="Details"></textarea>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">حفظ</button>
                    <button class="btn btn-light" type="button" data-bs-dismiss="modal">إغلاق</button>
                </div>
            </form>
        </div>
    </div>
@endsection
