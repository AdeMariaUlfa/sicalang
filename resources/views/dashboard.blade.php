@extends('layouts.template')
@section('content')
<div class="container" >
  <div class="col-lg-12 wow fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="0.25s" style="visibility: visible;-webkit-animation-duration: 0.5s; -moz-animation-duration: 0.5s; animation-duration: 0.5s;-webkit-animation-delay: 0.25s; -moz-animation-delay: 0.25s; animation-delay: 0.25s;">

    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
        <h1 width="500" height="40"> <p style="color:#14524f; font-family: lucida; font-size: 30px;"><b><i>SELAMAT DATANG DI SI CALANG</i></b></p></h1>
          <?php 
          
          ?>
          <h2 style="font-family: lucida;"> <span>{{Session::get('nama')}}</span> <em>{{Session::get('kelas')}}</em></h2>
        </div>
      </div>

      <div class="row">

        <div class="col-lg-3">
          <a href="/petunjuk">
            <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
              <div class="fa fa-file-text fa-4x" style="color:#14524f;"></div>
              <h4>Pentunjuk Penggunaan</h4>
              <div class="line-dec"></div>
              <p>Petunjuk Singkat Penggunaan Si Calang</p>
            </div>
          </a>
        </div>

        <div class="col-lg-3">
          <a href="/kompetensi">
            <div class="features-item second-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
              <i class="fa fa-cubes fa-4x" style="color:#14524f;"></i>
              <h4>Kompetensi<br><br></h4>
              <div class="line-dec"></div>
              <p>KI, KD, IPK, & Tujuan Pembelajaran</p>
            </div>
          </a>
        </div>
        <div class="col-lg-3">
          <a href="/materi">
            <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
              <i class="fa fa-file-video-o fa-4x" style="color:#14524f;"></i>
              <h4>Virtual Tour Situs Candi</h4>
              <div class="line-dec"></div>
              <p>7 Situs Candi di Malang</p>
            </div>
          </a>
        </div>
        <div class="col-lg-3">
          <a href="/quiz/1/salah/0">
            <div class="features-item second-feature last-features-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
              <i class="fa fa-lightbulb-o fa-4x" style="color:#14524f;"></i>
              <h4>Kuis</h4>
              <div class="line-dec"></div>
              <p>Latihan Soal</p>
            </div>
          </a>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection