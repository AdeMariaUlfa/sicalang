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
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-3">
            <div class="portfolio-item">
                <div class="thumb">
                    <img src="{{ asset('images/badut.jpg') }}" alt="">
                    <div class="hover-content">
                        <div class="inner-content">
                            <a href="/page-candi/Badut">
                                <h4>Candi Badut</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="portfolio-item">
                <div class="thumb">
                    <img src="{{ asset('images/karangbesuki.jpg') }}" alt="">
                    <div class="hover-content">
                        <div class="inner-content">
                            <a href="/page-candi/Karangbesuki">
                                <h4>Candi KarangBesuki</h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="portfolio-item">
                <div class="thumb">
                    <img src="{{ asset('images/songgoriti.jpg') }}" alt="">
                    <div class="hover-content">
                        <div class="inner-content">
                            <a href="/page-candi/Songgoriti">
                                <h4>Candi Songgoriti</h4>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-3">
            <div class="portfolio-item">
                <div class="thumb">
                    <img src="{{ asset('images/kidal.jpg') }}" alt="">
                    <div class="hover-content">
                        <div class="inner-content">
                            <a href="/page-candi/Kidal">
                                <h4>Candi Kidal</h4>
                            </a>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="portfolio-item">
                <div class="thumb">
                    <img src="{{ asset('images/jago.jpg') }}" alt="">
                    <div class="hover-content">
                        <div class="inner-content">
                            <a href="/page-candi/Jago">
                                <h4>Candi Jago</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="portfolio-item">
                <div class="thumb">
                    <img src="{{ asset('images/singasari.png') }}" alt="">
                    <div class="hover-content">
                        <div class="inner-content">
                            <a href="/page-candi/Singasari">
                                <h4>Candi Singasari</h4>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-3">
            <div class="portfolio-item">
                <div class="thumb">
                    <img src="{{ asset('images/sumberawan.jpg') }}" alt="">
                    <div class="hover-content">
                        <div class="inner-content">
                            <a href="/page-candi/Sumberawan">
                                <h4>Candi Sumberawan</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection