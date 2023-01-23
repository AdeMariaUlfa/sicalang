@extends('layouts.template')
@section('content')
<div class="container">
  <div class="col-lg-12 wow fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="0.25s" style="visibility: visible;-webkit-animation-duration: 0.5s; -moz-animation-duration: 0.5s; animation-duration: 0.5s;-webkit-animation-delay: 0.25s; -moz-animation-delay: 0.25s; animation-delay: 0.25s;">

    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading">
          <h2>Selamat Datang di Sicalang Virtual Tour!</h2>
          <h2> <span>{{$nama}}</span> <em>{{$kelas}}</em></h2>
        </div>
      </div>

      <div class="row">

        <div class="col-lg-3">
          <a href="/petunjuk">
            <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
              <div class="fa fa-file-text fa-8x" style="color:black;"></div>
              <h4>PETUNJUK PENGGUNAAN</h4>
              <div class="line-dec"></div>
              <p>Runtutan Penggunaan Website</p>
            </div>
          </a>
        </div>

        <div class="col-lg-3">
          <a href="/kompetensi">
            <div class="features-item second-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
              <i class="fa fa-cubes fa-8x" style="color:black;"></i>
              <h4>KOMPETENSI<br><br></h4>
              <div class="line-dec"></div>
              <p>KI, KD, & Tujuan</p>
            </div>
          </a>
        </div>
        <div class="col-lg-3">
          <a href="/materi">
            <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
              <i class="fa fa-file-video-o fa-8x" style="color:black;"></i>
              <h4>MATERI SITUS CANDI</h4>
              <div class="line-dec"></div>
              <p>Virtual Tour 7 Situs Candi di Malang</p>
            </div>
          </a>
        </div>
        <div class="col-lg-3">
          <a href="/quiz/1/salah/0">
            <div class="features-item second-feature last-features-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
              <i class="fa fa-lightbulb-o fa-8x" style="color:black;"></i>
              <h4>QUIZ<br><br></h4>
              <div class="line-dec"></div>
              <p>Setelah Melakukan Virtual Tour, Lakukan QUIZ di Menu Ini!</p>
            </div>
          </a>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection