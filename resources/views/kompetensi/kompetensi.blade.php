@extends('layouts.template')
@section('content')
<style>
    body {
      background-image: url("{{ asset('images/patern2.gif') }}");
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    h5{
      font-family:Verdana;
      color:black;
     }
     h4{
      font-family:Verdana;
     }
    h2{
      font-family:Helvetica;
    }
</style>
<div id="services" class="our-services section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <h2 style="color:black;">KOMPETENSI</h2>
          <p></p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" >
    <div class="row" >
      <div class="service-item wow bounceInUp bg-light" data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="row">
          <h4>Kompetensi Inti</h4>
          <div class="row">
            <div class="col-lg-1">
              <h4>03</h4>
            </div>
            <div class="col-lg-8">
              <h5>Memahami dan menerapkan pengetahuan (faktual, konseptual, dan prosedural) berdasarkan rasa ingin tahunya tentang ilmu pengetahuan, teknologi, seni, budaya terkait fenomena dan kejadian tampak mata.</h5><br>
            </div>
            <div class="row">
              <div class="col-lg-1">
                <h4>04</h4>
              </div>
              <div class="col-lg-8">
                <h5>Mengolah, menyaji, dan menalar dalam ranah konkret (menggunakan, mengurai, merangkai, memodifikasi, dan membuat) dan ranah abstrak (menulis, mendokumentasikan, dan mengarang) sesuai dengan yang dipelajari di sekolah dan sumber lain yang sama dalam sudut pandang/teori.</h5>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div><br>

    <div class="row">
      <div class="service-item wow bounceInUp bg-light" data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="row">
          <h4>Kompetensi Dasar</h4>
          <div class="row">
            <div class="col-lg-1">
              <h4>3.4</h4>
            </div>
            <div class="col-lg-8">
              <h5>Memahami berpikir kronologi, perubahan dan kesinambungan dalam kehidupan bangsa Indonesia pada aspek sosial, budaya, geografis, dan pendidikan pada masa Hindu-Buddha dan Islam.</h5><br>
            </div>
            <div class="row">
              <div class="col-lg-1">
                <h4>4.4</h4>
              </div>
              <div class="col-lg-8">
                <h5>Menyajikan hasil analisis kronologi, perubahan, dan kesinambungan dalam kehidupan bangsa Indonesia pada aspek politik, sosial, budaya, geografis, dan pendidikan masa Hindu- Buddha dan Islam.</h5><br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><br>

    <div class="row">
      <div class="service-item wow bounceInUp bg-light" data-wow-duration="1s" data-wow-delay="0.3s">
        <div class="row">
          <h4>Tujuan Pembelajaran</h4>
          <div class="row">
            <div class="col-lg-1">
              <h4>01</h4>
            </div>
            <div class="col-lg-8">
              <h5>Melalui aplikasi Si Calang, siswa mampu menjelaskan situs-situs candi di Malang dengan benar.</h5><br>
            </div>
            <div class="row">
              <div class="col-lg-1">
                <h4>02</h4>
              </div>
              <div class="col-lg-8">
                <h5>Melalui aplikasi Si Calang, siswa mampu membandingkan tujuan dibangunnya situs-situs candi di Malang dengan benar.</h5><br>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-1">
                <h4>03</h4>
              </div>
              <div class="col-lg-8">
                <h5>Melalui aplikasi Si Calang, siswa mampu menganalisis langgam arsitektur situs-situs candi di Malang dengan benar.</h5><br>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-1">
                <h4>04</h4>
              </div>
              <div class="col-lg-8">
                <h5>Melalui aplikasi Si Calang, siswa mampu mempresentasikan hasil analisis situs-situs candi di Malang benar.</h5><br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  @endsection