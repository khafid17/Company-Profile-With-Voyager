<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('home.download',$berkas->id)}}" method="GET">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$berkas->id}}">
        <input type="hidden" name="name" value="{{$berkas->name}}">
        <button type="submit" class="cart-button card-game-btn align-self-end position-absolute"><i class="fas fa-download">&nbsp;</i>Download</button>
      </form>
</body>
</html>