@extends('layouts.template')
@section('content')
<style>
  p {
    font-family: monospace;
  }
</style>

<div class="container">
  <div class="row">
    <div class="col-lg-6 offset-lg-3">
      <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
        <h2 class="text-center">PETUNJUK SINGKAT PENGGUNAAN SICALANG</h2>
        <p></p>
      </div>
    </div>
  </div>
</div>
<div id="features" class="features section" style=" background: -webkit-linear-gradient(to right, #a3e2df 50%, #effffe 100%);  background-color: rgba(51,204,197,255); background: -moz-linear-gradient(to right, #a3e2df 0%, #effffe 100%);  background: linear-gradient(to right, #a3e2df 0%, #effffe 100%);">

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="features-content">
          <div class="row">
            <div class="col-lg-4">
              <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">

                <i class="fa fa-desktop fa-4x" style="color: black;" aria-hidden="true"></i>
                <div class="line-dec"></div>
                <p>Pastikan perangkat dalam keadaan online</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="features-item second-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">

                <i class="fa fa-window-restore fa-4x" style="color:black;" aria-hidden="true"></i>
                <div class="line-dec"></div>
                <p>Pilih menu yang telah disajikan dalam aplikasi.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">

                <div class="spinner-border" style="width: 4rem; height: 4rem; color:black;" role="status">
                  <span class="sr-only">Loading...</span>
                </div>
                <div class="line-dec"></div>
                <p>Refresh ketika mengalami loading/kendala </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<div id="features" class="features section" style=" background: -webkit-linear-gradient(to right, #a3e2df 50%, #effffe 100%);  background-color: rgba(51,204,197,255); background: -moz-linear-gradient(to right, #a3e2df 0%, #effffe 100%);  background: linear-gradient(to right, #a3e2df 0%, #effffe 100%);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="features-content">
          <div class="row">

            <div class="col-lg-4">
              <div class="features-item second-feature last-features-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">

                <i class="fa fa-file-text fa-4x" style="color:black;"></i>
                <div class="line-dec"></div>
                <p>Ketika membuka menu materi, pilih situs candi yang ingin dikunjungi</p>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">

                <i class="fa fa-list-ol fa-4x" style="color:black;" aria-hidden="true"></i>
                <div class="line-dec"></div>
                <p>Terdapat icon dalam virtual tour."<img src="{{asset('icon/Info.png')}}" style="width: 20px;height: 20px;">" menunjukan informasi, "<img src="{{asset('icon/circle.svg')}}" style="width: 20px;height: 20px;">" berpindah pada sisi candi berikutnya, "<img src="{{asset('icon/chevron-up-solid.svg')}}" style="width: 20px;height: 20px;">" menuju pada titik tertentu. </p>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="features-item second-feature last-features-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                <i class="fa fa-map fa-4x" style="color:black;" aria-hidden="true"></i>
                <div class="line-dec"></div>
                <p>Usap layar smarthphone anda atau kursor agar menemukan icon pada virtual tour </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection