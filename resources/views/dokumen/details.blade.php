<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>{{$berkas->name}}</h2>
    <p>
        <iframe src="{{url('storage/berkas/December2020/'.$berkas->dokumen)}}" frameborder="0"></iframe>
    </p>
</body>
</html>