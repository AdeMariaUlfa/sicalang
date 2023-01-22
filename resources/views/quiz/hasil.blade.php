@extends('layouts.template')
@section('content')
<div id="services" class="our-services section">
    <div class="container-fluid">
        <div class="row">
            <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="row">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="right-content">
                                <div class="row">
                                    <div class="col-lg-4">
                                    <h4>Hasil</h4>
                                    </div>
                                    <div class="col-lg-4">
                                    <h4>{{ $hasil }} <h4>
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