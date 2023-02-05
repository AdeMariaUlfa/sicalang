@extends('layouts.template')
@section('content')
<div id="services" class="our-services section">
    <div class="container-fluid">
        <div class="row">
            <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <h2>QUIZ SICALANG</h2>
            </div>
            <div class="service-item wow bounceInUp bg-primary" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="row bg-primary">
                    <h4><b>Petunjuk Mengerjakan Kuis</b></h4>
                    <div class="row bg-primary">
                        <div class="col-lg-12">
                              <p>
                                - Pilihlah salah satu jawaban yang menurut kamu benar<br>
                                - Ketika kamu memilih salah satu jawaban otomatis akan langsung berganti ke soal selanjutnya<br>
                                - Di akhir kuis akan langsung tampil SKOR kamu, selamat mengerjakan!
                              </p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="row">
                    <h4>No {{$search['no']}}</h4>
                    <div class="row">
                        <div class="col-lg-12">
                                @isset($search['img'])
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img src="{{asset('quizImage/'.$search['img']['img'])}}">
                                        <p>{!! $search['img']['ket'] !!}</p>
                                        <p>{{$search['img']['sumber']}}</p>
                                    </div>
                                    @endif
                                    @isset($search['img2'])
                                    <div class="col-lg-4">
                                        <img src="{{asset('quizImage/'.$search['img2']['img'])}}">
                                        <p>{!! $search['img2']['ket'] !!}</p>
                                        <p>{{$search['img2']['sumber']}}</p>
                                    </div>
                                </div>
                                @endif

                                <h5 style="color: black; padding-top: 20px;">{!! $search['soal'] !!}</h6>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            @foreach($search['jawaban'] as $k => $j)


            <div class="col-lg-6">
                @if($k == $search['benar'])
                <a href="/quiz/{{$search['next']}}/benar/{{$hasil}}">
                    @else
                    <a href="/quiz/{{$search['next']}}/salah/{{$hasil}}">
                        @endif
                        {!! $search['warna'][$k] !!}
                        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="row ">
                                <div class="col-lg-8">
                                    <div class="right-content">
                                        <h5 class="text-white">{{$j}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            </a>
        </div>




        @endforeach
    </div>
</div>
</div>



@endsection