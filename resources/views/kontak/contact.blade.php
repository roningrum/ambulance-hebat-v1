@extends('layouts.main')
@section('content')

<section id="hero-about">
    <div class="container" data-aos="fade-up">
        <div class="row align-items-starts justify-content-start">
            <div class="col-lg-6">
                <h1 class="mb-4">Kontak</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Beranda</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Halaman</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="contacts.html">Kontak</a>
                        </li>
                    </ol>
                </nav> 
            </div>
        </div>
    </div>
</section>
<section id="kontak">
    <div class="container py-5">
        <div class="contacts" data-aos="fade-left">
            <h2>Kontak Kami</h2>
            <p>Jika memiliki pertanyaan soal kami, bisa isi form ke sini</p>
        </div>
        <div class="row" data-aos="fade-right" data-aos-delay="100">
            <div class="col-lg-4 mb-5 mb-lg-0" >
                <div class="contact-info">
                    <div class="address mt-4">
                        <i class="bi bi-geo-alt-fill"></i>
                        <h4 class="mb-2">Lokasi</h4>
                        <p>Jl. Pandanaran No.79, Mugassari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50249</p>
                    </div>

                    <div class="twitter mt-4">
                        <i class="bi bi-twitter"></i>
                        <h4 class="mb-2">Twitter</h4>
                        <p>ambulancehebat</p>
                    </div>

                    <div class="instagram mt-4">
                        <i class="bi bi-instagram"></i>
                        <h4 class="mb-2">Instagram</h4>
                        <p>ambulancehebat_pemkotsmg</p>
                    </div>

                    <div class="phone mt-4">
                        <i class="bi bi-telephone-fill"></i>
                        <h4 class="mb-2">Call:</h4>
                        <p>112 / 1500-132</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-8 mt-4" data-aos="fade-up" data-aos-delay="200">
                <form action="/kontak-kami" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6 mb-3">
                            <input type="text" class="form-control" placeholder="Nama" id="name" name="name" required value="{{ old('name') }}">
                        </div>
                        <div class="col-6 mb-3">
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email" required value="{{ old('email') }}">
                        </div>
                        <div class="col-12 mb-3">
                            <input type="text" class="form-control" placeholder="Subjek" id="subjek" name="subjek" required value="{{ old('subjek') }}">
                        </div>
                        <div class="col-12 mb-3">
                            <textarea cols="30" rows="7" class="form-control" placeholder="Pesan" id="pesan" name="pesan" required value="{{ old('pesan') }}"></textarea>
                        </div>

                        <div class="col-12">
                            <input type="submit" value="Kirim Pesan" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   

</section>

@endsection