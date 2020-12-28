@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="clearfix">

            <span>All Posts</span>
            <a href="{{'/files/create'}}" class="btn btn-info float-right">Add Post</a>
        </div>
        <table class="table">
            <tr>
                <th>S1</th>
                <th>Title</th>
                <th>Discription</th>
                <th>Download</th>
            </tr>
            @foreach ($file as $key=>$data)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$data->title}}</td>
                    <td>{{$data->description}}</td>
                    <td><a href="/files/{{$data->id}}">Download</a></td>
                </tr>
            @endforeach
        </table>
        
        </div>
    </div>

        
    @endsection


