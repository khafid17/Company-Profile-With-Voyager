@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="card">
        <div class="card-header">
          Download
          <a href="/files/create" class="btn btn-info float-right">Add Post</a>

        </div>
        <div class="card-body">

                <table class="table">
                    <thead>
                      <tr>
                        <th>S1</th>
                        <th>Title</th>
                        <th>Discription</th>
                        <th>View</th>
                        <th>Download</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                  </table>
            </table>
        </div>
      </div>
      

    {{-- <div class="card">
        <div class="card-header">
            <div class="clearfix">
                <span>All Posts</span>
            </div>
    <form action="/files" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
    <input type="text" name="title" placeholder="title"> <br>
    <input type="text" name="description" placeholder="description">
    <input type="file" name="file" >
    <input type="submit" name="submit" >
    </form>
    </div>
</div> --}}
</body>
</html>

    
@endsection