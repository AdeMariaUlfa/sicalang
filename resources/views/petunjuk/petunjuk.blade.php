@extends('layouts.template')
@section('content')
<style>
     p{
      font-family:monospace;
     }
</style>
<div id="services" class="our-services section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <h2>Petunjuk Singkat Penggunaan Website</h2>
          <p></p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 ">
        <div class="service-item wow bounceInUp bg-warning" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="row">
            <h4 style="color:white;">01</h4>
            <p style="color:white;">Pastikan perangkat dalam keadaan online</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="service-item wow bounceInUp bg-primary" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="row">
            <h4 style="color:white;">02</h4>
            <p style="color:white;">Pilih menu yang telah disajikan dalam aplikasi.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="service-item wow bounceInUp bg-danger" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="row">
            <h4 style="color:white;">03</h4>
            <p style="color:white;">Ketika pengguna mengalami loading yang lama saat mengakses virtual tour silahkan menyegarkan kembali halaman anda.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="service-item wow bounceInUp bg-success" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="row">
            <h4 style="color:white;">04</h4>
            <p style="color:white;">Ketika mengakses padlet yang tersedia dalam virtual tour pastikan perangkat anda dalam keadaan portrait.</p>
          </div>
        </div>
      </div>

      <div class="service-item wow bounceInUp bg-light"  data-wow-duration="1s" data-wow-delay="0.3s" >
        <div class="row">
          <h4>Petunjuk Icon Virtual</h4>
          <div class="row">
            <div class="col-lg-2">
              <div class="icon">
                <img src="{{asset('icon/introduction.png')}}" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-content">
                <h4>Materi Pengenalan</h4>
                <p>Berisi tentang Pengenalan tentang candi yang ditampilkan</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-2">
              <div class="icon">
                <img src="{{asset('icon/info.png')}}" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-content">
                <h4>Informasi</h4>
                <p>Berisi tentang Informasi situs yang ditampilkan</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-2">
              <div class="icon">
                <img src="{{asset('icon/image.png')}}" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-content">
                <h4>Foto</h4>
                <p>Berisi tentang Foto situs yang ditampilkan</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-2">
              <div class="icon">
                <img src="{{asset('icon/lokasi.png')}}" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-content">
                <h4>Lokasi</h4>
                <p>Berisi tentang Lokasi Candi</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-2">
              <div class="icon">
                <img src="{{asset('icon/video.png')}}" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-content">
                <h4>Video</h4>
                <p>Berisi tentang Video Candi</p>
              </div>
            </div>
          </div>


        </div>
      </div>

    </div>
  </div>
</div>

@endsection