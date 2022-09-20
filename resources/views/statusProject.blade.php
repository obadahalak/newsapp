<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aurora</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<form action="{{route('changeStatus')}}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <input type="text" value="{{$p->status}}" name="status" id="">
            <button type="submit" class="btn btn-success"> Save</button>
        </div>
    </div>
</form>
</body>
</html>
