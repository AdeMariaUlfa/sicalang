@extends('layouts.template')
@section('content')
<style>
  body {
    background-image: url("{{ asset('images/patern2.gif') }}");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }
</style>
<div class="container">
  <div class="col-lg-12 wow fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="0.25s" style="visibility: visible;-webkit-animation-duration: 0.5s; -moz-animation-duration: 0.5s; animation-duration: 0.5s;-webkit-animation-delay: 0.25s; -moz-animation-delay: 0.25s; animation-delay: 0.25s;">

    <div class="row">
      <div class="col-lg-6 offset-lg-3 d-flex justify-content-center">
        <div class="section-heading">
          <h2>Candi {{$candi}}</h2>

        </div>
      </div>



      <div class="row d-flex justify-content-center">
        <div class="col-lg-3">
          <a href="/virtual/{{$candi}}">
            <div class="features-item second-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
              <i class="fa fa-map fa-8x" style="color:#14524f;"></i>
              <h4>Virtual Tour</h4>
              <div class="line-dec"></div>

            </div>
          </a>
        </div>
        
        <div class="col-lg-3">
          <a href="/materi/{{$candi}}">
            <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
              <div class="fa fa-file-text fa-8x" style="color:#14524f;"></div>
              <h4 style="color:black;">Materi</h4>
              <div class="line-dec"></div>
            </div>
          </a>
        </div>
        <div class="col-lg-3">
          <a href="">
            <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
              <div class="fa fa-video fa-8x" style="color:#14524f;"></div>
              <h4 style="color:black;">Video Candi {{$candi}}</h4>
              <div class="line-dec"></div>
            </div>
          </a>
        </div>


      </div>
    </div>

  </div>
</div>
@endsection