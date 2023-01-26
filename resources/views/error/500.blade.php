@extends('layouts.main')
@section('content')
<section id="read">
    <div class="container d-flex align-items-center justify-content-center ">
        <div class="row read-blog">
            <!-- Blog entries-->
            <div class="col-lg-12" data-aos="fade-right">
                <!-- Featured blog post-->
                <img src="{{ url('assets/img/505-error.png') }}"  width="calc(100%-560px)" height ="400px"alt="" srcset="">
                <h2 class="text-center">Server Sedang bermasalah</h2>
                <p class="text-center">Sabar ya, lagi dibenerin. silakan akses laman lain</p>
                <!-- Nested row for non-featured blog posts-->
            </div>
        </div>
    </div>
</section>

@endsection