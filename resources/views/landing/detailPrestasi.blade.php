@extends('layouts.landing')
<!-- Start Slider -->
@section('content')
<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-page-breadcrumb-area">
                    <h2>Prestasi</h2>
                    <ol class="breadcrumb">
                        <li><a href="/">Beranda</a></li>
                        <li class="active">Prestasi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumb -->
<section id="mu-course-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-course-content-area">
                    <div class="row">
                        <div class="col-md-9">
                            <!-- start course content container -->
                            <div class="mu-course-container mu-blog-single">
                                <div class="row">
                                    <div class="col-md-12">
                                        <article class="mu-blog-single-item">
                                            <figure class="mu-blog-single-img">
                                                <a href="#"><img alt="img" src="{{asset('lampiran/'.$data->lampiran)}}"></a>
                                                <figcaption class="mu-blog-caption">
                                                    <h3><a href="#">{{$data->nama}}</a></h3>
                                                </figcaption>
                                            </figure>
                                            <div class="mu-blog-meta">
                                                <a href="#">By Admin</a>
                                                <a href="#">{{date('d mm Y', strtotime($data->created_at))}}</a>
                                                
                                            </div>
                                            <div class="mu-blog-description">
                                            {{ $data->keterangan }}
                                            </div>
                                            <!-- start blog social share -->
                                            <div class="mu-blog-social">
                                                <ul class="mu-news-social-nav">
                                                    <li>SOCIAL SHARE :</li>
                                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                                </ul>
                                            </div>
                                            <!-- End blog social share -->
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <!-- end course content container -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection