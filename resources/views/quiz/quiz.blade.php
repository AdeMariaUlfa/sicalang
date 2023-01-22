@extends('layouts.template')
@section('content')
<div id="services" class="our-services section">
    <div class="container-fluid">
        <div class="row">
            <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="row">
                    <h4>Soal</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="right-content">
                                @isset($search['img'])
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="{{asset('quizImage/'.$search['img'])}}">
                                    </div>
                                    @endif
                                    @isset($search['img2'])
                                    <div class="col-lg-4">
                                        <img src="{{asset('quizImage/'.$search['img2'])}}">
                                    </div>
                                </div>
                                @endif
                                <p>{!! $search['soal'] !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            @foreach($search['jawaban'] as $k => $j)
            @if($k == $search['benar'])
            <div class="col-lg-6">
                <a href="/quiz/{{$search['next']}}/benar/{{$hasil}}">
                    <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="right-content">
                                    <p>{{$j}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @else
            <div class="col-lg-6">
                <a href="/quiz/{{$search['next']}}/salah/{{$hasil}}">
                    <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="right-content">

                                    <p>{{$j}}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @endforeach
        </div>
    </div>


</div>

@endsection