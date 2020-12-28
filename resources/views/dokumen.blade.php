@extends('layouts1.master')
@section('name', 'dokumen')
@section('content')
    <!-- ======= Our Team Section ======= -->
    <main id="main">
      <!-- ======= Team Section ======= -->
      <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">
            <div class="row">
                <table class="table table-striped table-hover table-sm table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Dokumen</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($berkas as $item)                            
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->title}}</td>
                            <td><a href="/files/{{$data->id}}">Download</a></td>
                            <td>
                                <a href="{{$item->id}}"  class="btn btn-prymary">Download</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$berkas->links()}}
            </div>  
        </div>
        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,32L60,26.7C120,21,240,11,360,37.3C480,64,600,128,720,160C840,192,960,192,1080,170.7C1200,149,1320,107,1380,85.3L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>    --}}
    </section><!-- End Team Section -->    
</main>
@endsection