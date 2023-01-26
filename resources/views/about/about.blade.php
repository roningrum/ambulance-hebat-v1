@extends('layouts.main')
@section('content')
@if (session()->has('error')){
 <div>
    <strong>{{@message}}</strong>
 </div>
}
    
@endif
<section id="hero-about">
    <div class="container" data-aos="fade-up">
        <div class="row align-items-starts justify-content-start mx-0">
            <div class="col-lg-6">
                <h1 class="mb-4">Tentang</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Beranda</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Halaman</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="about.html">About</a>
                        </li>
                    </ol>
                </nav> 
            </div>
        </div>
    </div>
</section>
<section id="info-about" class="py-5">
    <div class="container" data-aos="fade-right">
        <div class="row gx-5">
            <div class="col-md-6">
                <h2>Ambulance Hebat<br>Si Cepat</h2>
                <p>Layanan emergenci untuk penangan kasus kegawatdaruratan di Kota Semarang.Ambulan hebat adalah
                    salah satu layanan gratis yang disediakan oleh Pemerintah Kota Semarang, dibawah asuhan
                    Dinas Kesehatan Kota Semarang.<br>Berbeda dengan ambulance pada umumnya, Ambulance Hebat
                    menyediakan layanan gawat darurat yang dilengkapi alat dan obat emergensi. Ditangani
                    langsung oleh dokter, serta tenaga medis bidan, perawat serta driver terlatih</p>
                <div class=" watch-video d-flex align-items-center pt-2">
                    <i class="bi bi-play-circle"></i>
                    <a href="https://www.youtube.com/watch?v=cI7Szxz-JL4" class="glightbox">
                        Video Kegiatan
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="assets/img/foto-aha1.png" width="100%" alt="">
            </div>

        </div>
    </div>
</section>
<section id="service">
    <div class="container">
        <div class="service-title" data-aos="fade-up">
            <h2 class="service text-center">Layanan Ambulance Hebat</h2>
            <p class="text-center">Ambulance Hebat melayani berbagai kebutuhan kegawatdaruratan</p>
        </div>
        <div class="row mt-5 d-flex flex-wrap" data-aos="fade-right">
            <div class="col-md-4">
                <div class="box align-items-center">
                    <div class="circle-box position-relative">
                        <img src="assets/img/maternal.png" class="position-absolute top-50 start-50 translate-middle" alt="" srcset="">
                      </div>
                      <h5>Maternal<br>Non maternal</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box align-items-center">
                    <div class="circle-box position-relative">
                        <img src="assets/img/medis.png" class="position-absolute top-50 start-50 translate-middle" alt="" srcset="">
                      </div>
                      <h5>kegawatdaruratan<br>Medis</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box align-items-center">
                    <div class="circle-box position-relative">
                        <img src="assets/img/kecelakaan.png" class="position-absolute top-50 start-50 translate-middle" alt="" srcset="">
                      </div>
                      <h5>Kecelakaan<br>Lalu Lintas</h5>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="box align-items-center">
                    <div class="circle-box position-relative">
                        <img src="assets/img/bencana.png" class="position-absolute top-50 start-50 translate-middle" alt="" srcset="">
                      </div>
                      <h5>Bencana</h5>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="box align-items-center">
                    <div class="circle-box position-relative">
                        <img src="assets/img/non-darurat.png" class="position-absolute top-50 start-50 translate-middle" alt="" srcset="">
                      </div>
                      <h5>Non Darurat<br>Dan Lainnya</h5>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section id="team">
    <div class="container">
        <h2 class="text-center" data-aos="fade-up">Tim Kami</h2>
        <div class="row mt-5">
            <div class="col-lg-12">
              <div class="owl-carousel owl-theme">
                <div class="item ms-2 me-2">
                  <div class="icon">
                    <img data-src="assets/img/kegiatan-4.png" class="owl-lazy" alt="">
                  </div>
                  <div class="down-content text-center">
                    <h4>Tim Rusa</h4>
                  </div>
                </div>
                
                <div class="item">
                    <div class="icon">
                        <img data-src="assets/img/kegiatan-4.png" class="owl-lazy" alt="">
                      </div>
                      <div class="down-content text-center">
                        <h4>Tim Singa</h4>
                      </div>
                </div>
                
                <div class="item ms-2 me-2">
                    <div class="icon">
                        <img data-src="assets/img/kegiatan-4.png" class="owl-lazy" alt="">
                      </div>
                      <div class="down-content text-center">
                        <h4>Tim Kuda</h4>
                      </div>
                </div>
                
                <div class="item ms-2 me-2">
                    <div class="icon">
                        <img data-src="assets/img/kegiatan-4.png" class="owl-lazy" alt="">
                      </div>
                      <div class="down-content text-center">
                        <h4>Tim Harimau</h4>
                      </div>
                </div>
                
                <div class="item ms-2 me-2">
                    <div class="icon">
                        <img data-src="assets/img/kegiatan-4.png" class="owl-lazy" alt="">
                      </div>
                      <div class="down-content text-center">
                        <h4>Tim Elang</h4>
                      </div>
                </div>

                <div class="item ms-2 me-2">
                    <div class="icon">
                        <img data-src="assets/img/kegiatan-4.png" class="owl-lazy" alt="">
                      </div>
                      <div class="down-content text-center">
                        <h4>Tim Call Center</h4>
                      </div>
                </div>

                <div class="item ms-2 me-2">
                    <div class="icon">
                        <img data-src="assets/img/kegiatan-4.png" class="owl-lazy" alt="">
                      </div>
                      <div class="down-content text-center">
                        <h4>Tim Admin</h4>
                      </div>
                </div>
                
              </div>
            </div>

    </div>
</section> --}}
<section id="peta">
    <div class="container" data-aos="fade-up">
        <h2>Peta Aktivitas Ambulance Hebat</h2>
        <p class="text-center">Sebaran Kegiatan kami yang dapat dipantau</p>
        <div id='map' class="mt-4" style='width: 100%; height: 500px;'></div>
    </div>
</section>
<section id="gallery">
    <div class="container" data-aos="fade-up">
        <h2>Galeri Kegiatan Ambulance Hebat</h2>
        <div class="row g-4 my-4" data-aos="flip-left">
            <div class="col-lg-4 col-md-6 d-flex">
                <img src="assets/img/kegiatan-4.png" width="100%" alt="" srcset="">
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <img src="assets/img/kegiatan-4.png" width="100%" alt="" srcset="">
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <img src="assets/img/kegiatan-4.png" width= "100%" alt="" srcset="">
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <img src="assets/img/kegiatan-4.png" width="100%" alt="" srcset="">
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <img src="assets/img/kegiatan-4.png" width="100%" alt="" srcset="">
            </div>
            <div class="col-lg-4 col-md-6 d-flex">
                <img src="assets/img/kegiatan-4.png" width= "100%" alt="" srcset="">
            </div>
        </div>
    </div>
</section>

<section id="call-service">
    <div class="py-5 bg-ambulance-hebat">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 text-center mb-lg-0 mb-4 text-lg-start">
                    <h3 class="text-white m-0">Panggil Ambulance Hebat <br> Sicepat</h3>
                </div>		
                <div class="col-lg-5 text-center text-lg-end">
                    <a href="tel://1500132" class="btn btn-outline-white"><i class="bi bi-telephone-fill"></i> 1500-132</a>
                </div>
            </div>
        </div>		
    </div>
</section>
<script src='https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js'></script>
<script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoicm9uaW5ncnVtIiwiYSI6ImNsODlwdGd1ZjAzYmgzb2xmc2phd2hvdWMifQ.DPSlo2KGxIkxeh9JThpSlw';
    const map = new mapboxgl.Map({
    container: 'map', // container ID
    style: 'mapbox://styles/mapbox/streets-v11', // style URL
    center:[110.4146236, -6.9870703], // starting position [lng, lat]
    zoom: 10, // starting zoom// starting zoom
    projection: 'globe' // display the map as a 3D globe
    });
    map.on('style.load', () => {
    map.setFog({}); // Set the default atmosphere style
    });

    var locations ={!! $location !!};
    console.log(locations);

    for (let i = 0; i < locations.length; i++) {
        $lng = parseFloat(locations[i]['longitude'])
        $lat = parseFloat(locations[i]['latitude'])
        const media = locations[i]['profile_picture']
        const name = locations[i]['nama_tim']
        const status = locations[i]['status']
    
        const el = document.createElement('div')
        el.style.backgroundImage = `url(http://119.2.50.173:6006/media/${media})`
        el.style.width = `80px`;
        el.style.height = `80px`;
        el.style.backgroundSize = '100%';
    
        const popup = new mapboxgl.Popup({offset: 25}).setText("Tim Ambulance Hebat " +name);

        if($lat && $lng != null){
            new mapboxgl.Marker(el).setLngLat([$lng, $lat]).setPopup(popup).addTo(map);
        }
        else{
            new mapboxgl.Marker().setLngLat([110.4146236, -6.9870703]).setPopup(popup).addTo(map);
        }
    
        // new mapboxgl.Marker().setLngLat([$lng, $lat]).setPopup(popup).addTo(map);
       
    }
</script>
@endsection