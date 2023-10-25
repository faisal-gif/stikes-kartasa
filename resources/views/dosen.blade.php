@extends('layouts.landing')
<!-- Start Slider -->
@section('css')
<style>
    #foto {
        width: 260px;
        height: 260px;
        object-fit: cover;
    }
</style>
@endsection

@section('content')


    <!-- Start our teacher -->
    <section id="mu-our-teacher">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-our-teacher-area">
                        <!-- begain title -->
                        <div class="mu-title">
                            <h2>Dosen Pengajar</h2>
                        </div>
                        <!-- end title -->
                        <!-- begain our teacher content -->
                        <div class="mu-our-teacher-content">
                            <div class="row">

                            @foreach($data as $dosen)
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="mu-our-teacher-single">
                                        <figure class="mu-our-teacher-img">
                                            <img src="{{ asset('image_dosen/'.$dosen->img) }}" id="foto" alt="img dosen">
                                            <div class="mu-our-teacher-social">
                                                <a href="{{$dosen->facebook}}"><span class="fa fa-facebook"></span></a>
                                                <a href="{{$dosen->twitter}}"><span class="fa fa-twitter"></span></a>
                                                <a href="{{$dosen->linkedln}}"><span class="fa fa-linkedin"></span></a>
                                            </div>
                                        </figure>
                                        <div class="mu-ourteacher-single-content">
                                            <h5>{{$dosen->nama}}</h5>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                                
                               
                            </div>
                        </div>
                        <!-- End our teacher content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End our teacher -->

@endsection