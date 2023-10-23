@extends('layouts.landing')
<!-- Start Slider -->
@section('content')
<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-page-breadcrumb-area">
                    <h2>Berita</h2>
                    <ol class="breadcrumb">
                        <li><a href="/">Beranda</a></li>
                        <li class="active">Berita</li>
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
                                                <figcaption class="mu-blog-caption">
                                                    <h3><a href="#">Kalender Akademik</a></h3>
                                                </figcaption>
                                            </figure>
                                            <div class="mu-blog-meta">
                                                <a href="#">By Admin</a>
                                                <a href="#">23 Okt 2023</a>
                                                
                                            </div>
                                            <div class="mu-blog-description">
                                            <a href="{{asset('kalender/JADWAL.xlsx')}}" class="btn btn-primary" style="color: white;">Download Jadwal</a>
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