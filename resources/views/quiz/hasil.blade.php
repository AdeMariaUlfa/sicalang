@extends('layouts.template')
@section('content')
<div id="services" class="our-services section">
    <div class="container-fluid">
        <div class="row" >
        <img style="width:250px;  position: relative;  top: 30%; buttom: 50%; left: 50%; margin-buttom: 300px; margin-top: -50px;  margin-left: -100px;" src="{{ asset('images/score2.gif') }}" alt="">  
            <div class="service-item wow bounceInUp bg-warning" data-wow-duration="1s" data-wow-delay="0.3s" >
                <div class="row ">
                    <div class="row">
                        <div class="col-lg-12">
                       
                            <div class="right-content ">
                                <div class="row">
                                
                                <div class="col-lg-4 ">
                                    <h4 class="text-center">Selamat nilai anda adalah </h4>
                                    </div>
                                    <div class="col-lg-4">
                                    <h4 class="text-center">{{ $jumlah }} / 100<h4>
                                    </div>
                                </div>
                                                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</div>

@endsection