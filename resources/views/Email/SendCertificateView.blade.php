<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>

    <form action="{{ route('downloadCertificateEmail') }}">
        <div class="card">
            <div class="card-body">
                <div class="row img-gallery" id="lightgallery">
                    <div class="col-xl-4 col-sm-6 m-auto">
                        <a href="javascript:void(0)" class="d-block link-overlay">
                            {{-- <img class="d-block img-fluid br-5" src="/assets/images/logo.jpg"> --}}
                        </a>
                    </div>
                </div>
                <input type="hidden" name="src" value="{{ $getCertificate->certificate }}">
                <button class="btn btn-success" type="submit">Download Certificate</button>
            </div>
        </div>

    </form>




</body>

</html>
