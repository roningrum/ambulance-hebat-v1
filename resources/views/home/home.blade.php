@extends('layouts.main')
@section('content')
<section id="hero" class="py-5">
  <div class="container px-5">
    <div class="row gx-5 align-items-center justify-content-center">
      <div class="col-lg-8 col-xl-6 col-xxl-6">
        <div class="my-5 text-center text-xl-start" data-aos="fade-up">
          <h1 class="text-white mb-4">
            Layanan Ambulance Hebat Andalan Masyarakat Kota Semarang
          </h1>
          <p class="text-white mb-4">
            Ambulance Hebat siap melayani penanganan gawat darurat 24 Jam di Kota
            Semarang 
          </p>
          <div class="d-sm-flex align-items-center gap-3">
            <a href="tel://1500132" class="btn btn-outline-white" style="font-size:1.35em"><i class="bi bi-telephone-fill"></i> 1500-132</a>
            <a href="tel://1500132" class="btn btn-outline-red" style="font-size:1.35em"><i class='bx bxs-ambulance'></i></i> Pantau Lokasi</a>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-xxl-6  col-lg-4  d-none d-xl-block text-center" data-aos="fade-right">
        <img
          class="my-5"
          src="{{ url('assets/img/aha-gif.gif') }}"
          style="object-fit: cover;"
        />
      </div>
    </div>
  </div>
  </section>
  <section id="information" class="outer-box">
  <div class="container px-4 px-lg-4 my-4">
    <div class="row gx-4 gx-lg-5 px-4">
      <div class="col-md-6" data-aos="fade-up">
        <img src="assets/img/foto-aha1.png" width="100%">
      </div>
      <div class="col-md-6" data-aos="fade-up">
      <h2>Ambulance Hebat SiCepat</h2>
      <p>Layanan emergenci untuk penangan kasus kegawatdaruratan di Kota Semarang. Ambulance Hebat adalah salah satu layanan gratis yang disediakan oleh Pemerintah Kota Semarang, dibawah asuhan Dinas Kesehatan Kota Semarang</p>
      <a class="btn btn-primary btn-lg me-sm-3 mt-4 text-center" href="#information">selengkapnya</a>
      </div>
    </div>
  </div>
  </section>
  <section id="benefit" class="outer-box">
    <div class="container">
      <div class="title-benefit" data-aos="fade-left">
        <h2 class="text-center">Keunggulan Layanan Ambulance Hebat</h2>
        <p class="text-center">Ambulance Hebat siap melayani kegawat darutan</p>
      </div>
      <div class="row d-flex text-center py-5">
        <div class="col-xl-4 d-flex align-items-stretch" data-aos="flip-left">
          <div class="icon-box mt-4 mt-xl-0">
            <div class="circle-box position-relative mx-auto mt-2">
              <img src="assets/img/24jam.png" class="position-absolute top-50 start-50 translate-middle" alt="24 jam">
            </div>
            <h4>Siaga 24 Jam</h4>
            <p>Ambulan Hebat siap melayani
              gawat darurat 24 jam</p>
          </div>
        </div>
        <div class="col-xl-4 d-flex align-items-stretch" data-aos="flip-left">
          <div class="icon-box mt-4 mt-xl-0">
            <div class="circle-box position-relative mx-auto mt-2">
              <img src="assets/img/profesional.png" class="position-absolute top-50 start-50 translate-middle" alt="profesional">
            </div>
          
            <h4>Tenaga Profesional</h4>
            <p>Ditangani langsung oleh dokter,
              tenaga medis, 
              perawat dan driver terlatih</p>
          </div>
        </div>
        <div class="col-xl-4 d-flex align-items-stretch"  data-aos="flip-left">
          <div class="icon-box mt-4 mt-xl-0">
            <div class="circle-box position-relative mx-auto mt-2">
              <img src="assets/img/free.png" class="position-absolute top-50 start-50 translate-middle" alt="profesional">
            </div>

            <h4>Gratis</h4>
            <p>Layanan Ambulan Hebat 
              tidak dipungut 
              biaya</p>
          </div>
        </div>
      </div>
    </div> 
  </section>
  <section id="statistic" class="counts outer-box">
    <div class="container content">
      <div class="row">
        <div class="col-xl-4">
          <h3>Kasus Yang Telah Ditangani</h2>
          <h2>Tim Ambulance Hebat</h2>
        </div>
        <div class="col-xl-8 align-items-center">
          <div class="row counters">
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Gawat Darurat</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
              <p>Maternal Neonatal</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
              <p>Bencana</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Laka Lantas</p>
            </div>
          </div>
          <div class="row counters">
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Non Gawat Darurat</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
              <p>Kasus Lainnya</p>
            </div>
          </div>
        </div>
      </div>
  
    </div>
  </section>
  <section id="news" class="py-5">
    <div class="container my-5">
      <div class="newest-title" data-aos="fade-left">
        <h2 class="text-center">Berita Ambulance Hebat</h2>
        <p class="text-center">Kabar terbaru kegiatan Ambulance Hebat</p>
      </div>
      <div class="row g-4 my-4">
        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up">
          <div class="card">
            <img class="card-img-top" src="assets/img/kegiatan-4.png">
            <div class="card-body">
              <span class="badge text-bg-primary p-2 mb-2">News</span>
              <h5 class="card-title">Kriteria kegawatdaruratan</h5>
              <p class="card-text">Antusiasme masyarakat dengan hadirnya ambulan hebat ini dapat dilihat dari banyaknya telfon masuk yang menanyakan informasi mengenai ambulan hebat kota semarang</p>
              <a href="#">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up">
          <div class="card border-0">
            <img class="card-img-top" src="assets/img/kegiatan-4.png">
            <div class="card-body">
              <span class="badge text-bg-primary p-2 mb-2">News</span>
              <h5 class="card-title">Kriteria kegawatdaruratan</h5>
              <p class="card-text">Antusiasme masyarakat dengan hadirnya ambulan hebat ini dapat dilihat dari banyaknya telfon masuk yang menanyakan informasi mengenai ambulan hebat kota semarang</p>
              <a href="#">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up">
          <div class="card border-0">
            <img class="card-img-top" src="assets/img/kegiatan-4.png">
            <div class="card-body">
              <span class="badge text-bg-primary p-2 mb-2">News</span>
              <h5 class="card-title">Kriteria kegawatdaruratan</h5>
              <p class="card-text">Antusiasme masyarakat dengan hadirnya ambulan hebat ini dapat dilihat dari banyaknya telfon masuk yang menanyakan informasi mengenai ambulan hebat kota semarang</p>
              <a href="#">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection