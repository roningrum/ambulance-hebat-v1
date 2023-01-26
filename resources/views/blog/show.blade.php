@extends('layouts.main')
@section('content')
<section id="read">
    <div class="container">
        <div class="row read-blog justify-content-center">
            <!-- Blog entries-->
            <div class="col-lg-8" data-aos="fade-right">
                <!-- Featured blog post-->
                <div class="card mb-4">
                   
                    <div class="card-body">
                        <span class="badge text-bg-primary p-2 mb-2">{{ $post->category->name }}</span>
                        <h2 class="card-title mb-2">{{ $post->title }}</h2>
                        <div class="small text-muted mb-2"> <span style="color:#D21D26; font-size:1.25em;">{{ $post->user->name }} </span> {{ Carbon\Carbon::parse($post->published_at)->locale('id')->translatedFormat('d F Y') }} </div>
                        <img class="card-img-top mb-4" src="{{ url('assets/img/kegiatan-4.png') }}" width="100%"
                        height="350px"/></a>
                        <div class="card-text">
                            {!! $post->body !!}
                        </div>
                    </div>
                </div>
                <!-- Nested row for non-featured blog posts-->
            </div>
        </div>
    </div>
</section>

@endsection