@extends('layouts1.master')
@section('name', 'dashboard')
@section('content')

<main id="main">
      <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Kabupaten Demak</span></h2>
          <p class="animate__animated animate__fadeInUp"> adalah salah satu kabupaten di provinsi Jawa Tengah. Ibu kotanya adalah Demak. Kabupaten ini berbatasan dengan Laut Jawa di barat, Kabupaten Jepara di utara, Kabupaten Kudus di timur, Kabupaten Grobogan di tenggara, serta Kota Semarang dan Kabupaten Semarang di sebelah barat. Kabupaten Demak memiliki luas 897,43 km² dan berpenduduk 1.158.772 jiwa (2019)</p>
         </div>
      </div>
    </div>
  </section><!-- End Hero -->
 
    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">
        <div class="section-title">
          <h2>Demak</h2>
        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="{{asset('moderna')}}/assets/img/kantor.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>Kantor Bupati Kabupaten Demak</h3>
            <p class="font-italic">
                Kabupaten Demak adalah salah satu Kabupaten di Jawa Tengah yang terletak pada 6°43'26" - 7°09'43" LS dan 110°27'58" - 110°48'47" BT dan terletak sekitar 25 km di sebelah timur Kota Semarang. Demak dilalui Jalan Nasional Rute 1 (pantura) yang menghubungkan Jakarta-Semarang-Surabaya-Banyuwangi. Kabupaten Demak memiliki luas wilayah seluas ± 1.149,07 km², yang terdiri dari daratan seluas ± 897,43 km², dan lautan seluas ± 252,34 km². Kabupaten Demak mempunyai pantai sepanjang 34,1 Km, terbentang di 13 desa yaitu desa Sriwulan, Bedono, Timbulsloko dan Surodadi (Kecamatan Sayung), kemudian Desa Tambakbulusan Kecamatan Karangtengah, Desa Morodemak, Purworejo dan Desa Betahwalang (Kecamatan Bonang) selanjutnya Desa Wedung, Berahankulon, Berahanwetan, Wedung dan Babalan (Kecamatan Wedung). Sepanjang pantai Demak ditumbuhi vegetasi mangrove seluas sekitar 476 Ha..
            </p>
          </div>
        </div>
      </div>
      {{-- <iframe src="{{asset('/moderna/Review.pdf')}}/your file path here" width="100%" height="600"></iframe>   --}}
      <section class="why-us" data-aos="fade-up" date-aos-delay="200">
        <div class="section-title">
          <h2>Video</h2>
          <div class="container">
            <div class="row"  >
              <div class="col-lg-6 video-box embed-responsive embed-responsive-4by3">
                <img src="assets/img/why-us.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=YT2_obIGLZc&pbjreload=101" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
              </div>
              <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
                <h3>
                  MARI BERSATU LAWAN COVID19
                </h3> 
              </div>
            </div>      
          </div>

          <div class="container">
            <div class="row"  >
              <div class="col-lg-6 video-box embed-responsive embed-responsive-4by3">
                <img src="assets/img/why-us.jpg" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=4cG8gxwur00" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
              </div>
              <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
                <h3>
                  PRODUK KERAJINAN UMKM DEMAK - INEWS SEMARANG
                </h3> 
              </div>
            </div>      
          </div>
        </div>
      </section>
      <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">
        <div class="section-title">
          <h2>Alamat</h2>
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-md-12">
                  <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Lokasi Kabupaten Demak</h3>
                    <p>Ibu Kota : Kota Demak | Kode telepon: 0291</p>
                    <p>Zona waktu: WIB (‎UTC+07:00‎)‎ | Kode Kemendagri: 33.21</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </section><!-- End Contact Section -->
  
      <!-- ======= Map Section ======= -->
      <section class="map mt-2">
        <div class="section-title">
          <h2>Peta Area Demak</h2>
        <div class="container-fluid p-0">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31687.976405542642!2d110.62214868919031!3d-6.890954875488308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70ebe094d9814f%3A0x830a53c709938c5a!2sDemak%2C%20Kec.%20Demak%2C%20Kabupaten%20Demak%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1608090541739!5m2!1sid!2sid" width="800" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>  
        </div>
      </div>
      </section><!-- End Map Section -->

  </main><!-- End #main -->
@endsection
