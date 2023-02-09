@extends('layouts.template')
@section('content')
<style>
  p {
    font-family: monospace;
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
        <div class="service-item" style="background-color: #f08080;">
          <div class="row">
            <h4 style="color:white;">01</h4>
            <p style="color:white;">Pastikan perangkat dalam keadaan online</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="service-item" style="background-color: #ddb9db;">
          <div class="row">
            <h4 style="color:white;">02</h4>
            <p style="color:white;">Pilih menu yang telah disajikan dalam aplikasi.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="service-item" style="background-color: #ffa4cf;">
          <div class="row">
            <h4 style="color:white;">03</h4>
            <p style="color:white;">Ketika pengguna mengalami loading yang lama saat mengakses virtual tour silahkan menyegarkan kembali halaman anda.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="service-item" style="background-color: #aaa4ff;">
          <div class="row">
            <h4 style="color:white;">04</h4>
            <p style="color:white;">Pilihlah materi situs candi yang akan anda pelajari dengan cara menekan menu situs candi yang ingin anda pilih. Pada menu materi situs candi disajikan tujuh pilhan menu situs candi yang ada di Malang.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="service-item" style="background-color: #faa6fd;">
          <div class="row">
            <h4 style="color:white;">05</h4>
            <p style="color:white;">Pada setiap menu situs candi disajikan menu virtual tour, materi dan video tentang situs candi yang anda pilih.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="service-item" style="background-color: #b6aff4;">
          <div class="row">
            <h4 style="color:white;">06</h4>
            <p style="color:white;">Ketika anda mengakses menu virtual tour candi disajikan beberapa icon petunjuk.Agar anda dapat menemukan icon tersebut silahkan mengusap layar ponsel pintar (smartphone) anda agar dapat menemukan icon yang telah disediakan dan mengelilingi situs candi yang sedang anda akses.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="service-item" style="background-color: #c9dbcc;">
          <div class="row">
            <h4 style="color:white;">07</h4>
            <p style="color:white;"> Jika anda menggunakan laptop atau PC anda dapat menggeser kursor anda untuk mengelilingi situs candi secara virtual dan mengakses icon atau tombol navigasi yang telah disajikan.</p>
          </div>
        </div>
      </div>

      <div class="service-item" style="background-color: #c6ded8;">
        <div class="row">
          <h4>Petunjuk Icon Virtual</h4>
          <div class="row">
            <div class="col-lg-2">
              <div class="icon">
                <img src="{{asset('icon/Info.png')}}" alt="">
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
               
                <img src="{{asset('icon/chevron-up-solid.svg')}}" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-content">
                <h4>Panah</h4>
                <p>Akan mengarahkan anda pada titik tertentu pada situs candi yang anda telusuri</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-2">
              <div class="icon">
              <img src="{{asset('icon/circle.svg')}}" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-content">
                <h4>Lingkaran</h4>
                <p>Akan mengarahkan anda untuk berpindah pada sisi candi berikutnya</p>
              </div>
            </div>
          </div>

       


        </div>
      </div>

    </div>
  </div>
</div>

@endsection