<title>الرحلات والأعمال</title>
@extends('Layout')
@section('content')
    <div class="row mt-5">
        <div class="col-xl-12">
            <button class="btn btn-success mb-3 mr-auto" data-bs-target="#Add" data-bs-toggle="modal">
                إضافة منشور
                <i class="fe fe-plus"></i>
            </button>

        </div>
    </div>
    <div class="row mt-5">
        <form method="" action="" class="col-md-6 col-sm-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title m-auto">عنوان الرحلة</h3>
                </div>
                <div class="card-body p-2">
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
                    </div>
                    <div class="mt-2 mb-5 text-center">
                        <a class=" fw-bolder link-primary"
                            href="https://www.youtube.com/watch?v=atjqrB1yoZU&ab_channel=ArtoGaming" target="_blank">
                            رابط الفيديو
                        </a>
                    </div>
                    <div>
                        <div class="row img-gallery" id="lightgallery">
                            <div class="col-4" data-responsive="/assets/images/logo.jpg"
                                data-src="/assets/images/logo.jpg">
                                <a href="javascript:void(0)" class="d-block link-overlay">
                                    <img class="d-block img-fluid br-5" src="/assets/images/logo.jpg" alt="">
                                    <span class="link-overlay-bg">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="col-4" data-responsive="/assets/images/logo.jpg"
                                data-src="/assets/images/logo.jpg">
                                <a href="javascript:void(0)" class="d-block link-overlay">
                                    <img class="d-block img-fluid br-5" src="/assets/images/logo.jpg" alt="">
                                    <span class="link-overlay-bg">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="col-4" data-responsive="/assets/images/logo.jpg"
                                data-src="/assets/images/logo.jpg">
                                <a href="javascript:void(0)" class="d-block link-overlay">
                                    <img class="d-block img-fluid br-5" src="/assets/images/logo.jpg" alt="">
                                    <span class="link-overlay-bg">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="col-4" data-responsive="/assets/images/logo.jpg"
                                data-src="/assets/images/logo.jpg">
                                <a href="javascript:void(0)" class="d-block link-overlay">
                                    <img class="d-block img-fluid br-5" src="/assets/images/logo.jpg" alt="">
                                    <span class="link-overlay-bg">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="col-4" data-responsive="/assets/images/logo.jpg"
                                data-src="/assets/images/logo.jpg">
                                <a href="javascript:void(0)" class="d-block link-overlay">
                                    <img class="d-block img-fluid br-5" src="/assets/images/logo.jpg" alt="">
                                    <span class="link-overlay-bg">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="col-4" data-responsive="/assets/images/logo.jpg"
                                data-src="/assets/images/logo.jpg">
                                <a href="javascript:void(0)" class="d-block link-overlay">
                                    <img class="d-block img-fluid br-5" src="/assets/images/logo.jpg" alt="">
                                    <span class="link-overlay-bg">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-danger">حذف المنشور</button>
                </div>
            </div>
        </form>
    </div>
    <div class="modal fade" id="Add">
        <div class="modal-dialog" role="document">
            <form method="" Action="" class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">إضافة منشور</h6><button aria-label="Close" type="button" class="btn-close"
                        required data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">عنوان المنشور:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="Title" required />
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">رابط الفيديو:</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="link"
                                placeholder="https://example.com" />
                        </div>
                    </div>
                    <div class=" row mb-4">
                        <label class="col-md-3 form-label">المنشور:</label>
                        <div class="col-md-9">
                            <textarea type="text" class="form-control" name="description" rows="11" required></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="form-group mb-0">
                            <input id="demo" type="file" name="files"
                                accept=".jpg, .png, image/jpeg, image/png" multiple required>
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
