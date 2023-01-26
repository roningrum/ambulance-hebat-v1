@extends('layouts.main')
@section('content')
    <section id="hero-about" class="mb-5">
        <div class="container" data-aos="fade-up">
            <div class="row align-items-starts justify-content-start">
                <div class="col-lg-6">
                    <h1 class="mb-4">Berita</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Beranda</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Halaman</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="blog.html">Berita</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section id="blog">
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8" data-aos="fade-right">
                    <!-- Featured blog post-->
                    {{-- <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="assets/img/kegiatan-4.png" width="100%"
                                height="350px" alt="..." /></a>
                        <div class="card-body">
                            <span class="badge text-bg-primary p-2 mb-2">News</span>
                            <h2 class="card-title">Featured Post Title</h2>
                            <div class="small text-muted">January 1, 2022</div>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis
                                aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi
                                vero voluptate voluptatibus possimus, veniam magni quis!</p>
                            <a href="#">Baca Selengkapnya →</a>
                        </div>
                    </div> --}}
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row" data-aos="fade-right">
                        <h5 class="mb-4">Semua Berita Terbaru</h5>
                        
                            <!-- Blog post-->
                            @forelse ($posts as $post )
                            <div class="col-lg-6">
                            <div class="card mb-4">
                                <img class="card-img-top" src="http://127.0.0.1:8000/admin-aha/{{ $post->img_blog }}" onerror="this.onerror=null;this.src='{{ url('assets/img/no-image.png') }}';">
                                <div class="card-body">
                                    <span class="badge text-bg-primary p-2 mb-2">{{ $post->category->name }}</span>
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <div class="small text-muted">{{ Carbon\Carbon::parse($post->published_at)->format('d/m/Y') }}</div>
                                    <p class="card-text">{{ $post->excerpt }}</p>
                                    <a href="/blog-ahha/{{$post->slug}}">Baca Selengkapnya →</a>
                                </div>
                            </div>
                            </div>
                            @empty
                            <p class="card-text text-muted">Blog yang anda cari tidak ada</p>
                            @endforelse
                    </div>
                    <!-- Pagination-->
                    {{-- <nav aria-label="Pagination">
                        <ul class="pagination justify-content-center my-5">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"
                                    aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav> --}}
                    {{-- {{ $posts->total() }} --}}
                    {{-- <div class="d-flex justify-content-start">
                        {{ $posts->links() }}
                    </div> --}}
                  
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4" data-aos="fade-left">
                    <!-- Search widget-->
                    <div class="card border-0 mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <form action="/blog-ahha">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Cari Blog Ambulance Hebat" name="search" value="{{ request('search')}}"/>
                                    <button class="btn btn-primary" id="button-search" type="submit">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card border-0 mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class=" categories col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!"> <span
                                                    class="badge text-bg-primary p-2 mb-2">Berita</span></a></li>
                                        <li><a href="#!"> <span
                                                    class="badge text-bg-primary p-2 mb-2">Tutorial</span></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4 border-0">
                        <div class="card-header">Sosial Media</div>
                        <div class="card-body">
                            <h5>Twitter Dinas Kesehatan Kota Semarang</h5>
                            <a class="twitter-timeline" data-width="300" data-height="500" href="https://twitter.com/dkksemarang?ref_src=twsrc%5Etfw">Tweets by dkksemarang</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
