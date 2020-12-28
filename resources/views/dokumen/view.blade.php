<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <table border="1">
        <tr>
            <th>name</th>
            <th>view</th>
            <th>download</th>
        </tr>
        @foreach ($berkas as $data)
        <tr>
            <td>{{$data->name}}</td>
            {{-- <td><a href="/files/{{$data->id}}"></a>view</td> --}}
            <td><a href="/files/{{$data->id}}">view</a></td>
            <td><a href="/file/download/{!!$data->dokumen!!}">unduh</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>