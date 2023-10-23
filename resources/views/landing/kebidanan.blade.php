@extends('layouts.landing')
<!-- Start Slider -->
@section('content')
<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-page-breadcrumb-area">
                    <h2>Kebidanan</h2>
                    <ol class="breadcrumb">
                        <li><a href="/">Beranda</a></li>
                        <li class="active">Kebidanan</li>
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
                                                <a href="#"><img alt="img" src="{{ asset('img-landing/kebidanan.jpeg') }}"></a>
                                                <figcaption class="mu-blog-caption">
                                                    <h3><a href="#">Kebidanan</a></h3>
                                                </figcaption>
                                            </figure>
                                            <div class="mu-blog-meta">
                                                <a href="#">By Admin</a>
                                                <a href="#"></a>

                                            </div>
                                            <div class="mu-blog-description">
                                                <h4>Apa itu Jurusan Kebidanan?</h4>
                                                Jurusan Kebidanan (Midwifery) mempelajari tentang cara menangani ibu hamil dan bayi, mulai dari melakukan pemeriksaan kehamilan, memantau perkembangan janin di tiap fase, membantu dan memimpin persalinan, hingga memberikan asuhan dan merawat pasien pasca melahirkan. Di Jurusan Kebidanan, kamu juga akan diajarkan tentang bagaimana mensosialisasikan cara menjaga kesehatan sistem reproduksi, agar para calon ibu dapat mempersiapkan dan menjaga kondisi fisiknya saat hamil.
                                                <br>
                                                Semua ilmu tentang kebidanan akan kamu dalami di jurusan ini. Sebab dalam praktiknya, seorang Bidan memiliki peran penting dalam menjaga keselamatan dan kesehatan ibu dan bayi. Bahkan pasca melahirkan pun, Bidan bertugas untuk memberi pengetahuan tentang cara merawat bayi pasca lahir, proses menyusui, mengawasi tumbuh kembang anak, hingga mensosialisasikan program Keluarga Berencana (KB) kepada pasien.
                                                <br>
                                                <h4>Mata Kuliah Jurusan Kebidanan</h4>
                                                Setelah membaca penjelasan tentang Jurusan Kebidanan di atas, sudah ada bayangan dong tentang apa saja yang akan dipelajari saat kuliah nanti?
                                                <br>
                                                Seorang bidan diharapkan dapat menjadi pemrakarsa dalam menyelesaikan masalah kesehatan ibu dan anak di masyarakat. Maka ketika menempuh pendidikan, mahasiswa akan bertemu dengan mata kuliah yang akan mengajarkan tentang peran bidan, lingkup praktik, prosedur persalinan, hingga penanganan kasus kompleks yang akan ditemukan saat berada di lapangan. Pada semester akhir, mahasiswa juga akan diberi kesempatan untuk mengaplikasikan ilmunya dengan Kuliah Kerja Nyata (KKN).

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