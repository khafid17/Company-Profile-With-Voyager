@extends('layouts1.master')
@section('name', 'corona')
@section('content')

<main id="main">
    
    <div class="container section-title">
        <h2>Data Infografi Covid-19</h2>
        @include('charts.charts1')
    </div>
    <div class="container">
        @include('charts.charts2')
    </div>
    <div class="container">
        @include('charts.charts3')
    </div>
</main><!-- End #main -->
    
@endsection