@extends('layouts.main')
@section('content')
<section id="read">
    <div class="container d-flex align-items-center justify-content-center">
        <div class="row read-blog">
            <!-- Blog entries-->
            <div class="col-lg-12" data-aos="fade-right">
                <!-- Featured blog post-->
                <img class="py-5"src="{{ url('assets/img/404.png') }}" width="100%"alt="" srcset="">
                <h3 class="text-center" style="color:#1A1819">Halaman Tidak Ditemukan</h3>
                <p class="text-center">Silakan akses ke halaman tersedia</p>
                <!-- Nested row for non-featured blog posts-->
            </div>
        </div>
    </div>
</section>

@endsection