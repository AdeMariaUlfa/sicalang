@extends('layouts.template')
@section('content')
<div class="container">
    <div id="services" class="our-services section">
        <div class="service-item wow bounceInUp bg-light" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="row">
                <iframe width="900" height="500" src="https://www.youtube.com/embed/{{$link}}?autoplay=1&mute=1">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection