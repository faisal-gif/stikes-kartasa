@extends('layouts.landing')
<!-- Start Slider -->
@section('content')
<section id="mu-slider">
    <!-- Start single slider item -->
    <div class="mu-slider-single">
        <div class="mu-slider-img">
            <figure>
                <img src="{{asset('asset-kampus/IMG-20230926-WA0021.jpg')}}" alt="img">
            </figure>
        </div>
        <div class="mu-slider-content">
            <h4>STIKES Karya Putra Bangsa Tulungagung</h4>
            <span></span>
            <p>“Menghasilkan tenaga kesehatan berkualitas baik, berjiwa entrerpreneur di bidang teknologi kesehatan serta mampu bersaing dalam skala nasional”</p>
            <a href="#" class="mu-read-more-btn">Read More</a>
        </div>
    </div>
    <!-- Start single slider item -->
    <div class="mu-slider-single">
        <div class="mu-slider-img">
            <figure>
                <img src="{{asset('asset-kampus/IMG-20230926-WA0025.jpg')}}" alt="img">
            </figure>
        </div>
        <div class="mu-slider-content">

        </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
        <div class="mu-slider-img">
            <figure>
                <img src="{{asset('asset-kampus/IMG-20230926-WA0026.jpg')}}" alt="img">
            </figure>
        </div>
        <div class="mu-slider-content">

        </div>
    </div>
    <!-- Start single slider item -->

</section>
<!-- End Slider -->
<!-- Start service  -->
<section id="mu-service">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="mu-service-area">
                    <!-- Start single service -->
                    <div class="mu-service-single">
                        <span class="fa fa-book"></span>
                        <h3>Learn Online</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
                    </div>
                    <!-- Start single service -->
                    <!-- Start single service -->
                    <div class="mu-service-single">
                        <span class="fa fa-users"></span>
                        <h3>Expert Teachers</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
                    </div>
                    <!-- Start single service -->
                    <!-- Start single service -->
                    <div class="mu-service-single">
                        <span class="fa fa-table"></span>
                        <h3>Best Classrooms</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima officiis, deleniti dolorem exercitationem praesentium, est!</p>
                    </div>
                    <!-- Start single service -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service  -->

<!-- Start about us -->
<section id="mu-about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-about-us-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mu-about-us-left">
                                <!-- Start Title -->
                                <div class="mu-title">
                                    <h2>VISI MISI Kami</h2>
                                </div>
                                <!-- End Title -->
                                <h4>VISI</h4>
                                <p>STIKes Karya Putra Bangsa adalah“Menghasilkan tenaga kesehatan berkualitas baik, berjiwa entrerpreneur di bidang teknologi kesehatan serta mampu bersaing dalam skala nasional”</p>
                                <h4>MISI</h4>
                                <ul>
                                    <li>Menyelenggarakan pendidikan sesuai dengan standar nasional pendidikan tinggi.yang dinamis dansensitive terhadap dinamika pembangunan kesehatan di Indonesia.</li>
                                    <li>Melaksanakan penelitian bidang kesehatan yang memberi kontribusi positif pada pembangunan kesehatan masyarakat Indonesia </li>
                                    <li>Berkomitmen terhadap pembangunan kesehatan secara keilmuan maupun aplikatif melaluipengabdian masyarakat baik dalam bentuk penyuluhan, stimulasi, maupun pemberdayaanmasyarakat</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mu-about-us-right">
                                <a id="mu-abtus-video" href="#" target="mutube-video">
                                    <img src="{{ asset('template-landing/assets/img/counter-bg.jpg') }}" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End about us -->

<!-- Start about us counter -->
<section id="mu-abtus-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-abtus-counter-area">
                    <div class="row">
                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-abtus-counter-single">
                                <span class="fa fa-book"></span>
                                <h4 class="counter">3</h4>
                                <p>Prodi</p>
                            </div>
                        </div>
                        <!-- End counter item -->
                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-abtus-counter-single">
                                <span class="fa fa-users"></span>
                                <h4 class="counter">3500</h4>
                                <p>Mahasiswa</p>
                            </div>
                        </div>
                        <!-- End counter item -->
                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-abtus-counter-single">
                                <span class="fa fa-flask"></span>
                                <h4 class="counter">65</h4>
                                <p>Lab</p>
                            </div>
                        </div>
                        <!-- End counter item -->
                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-abtus-counter-single no-border">
                                <span class="fa fa-user-secret"></span>
                                <h4 class="counter">250</h4>
                                <p>Dosen</p>
                            </div>
                        </div>
                        <!-- End counter item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End about us counter -->

<!-- Start features section -->
<section id="mu-features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="mu-features-area">
                    <!-- Start Title -->
                    <div class="mu-title">
                        <h2>Fasilitas</h2>
                    </div>
                    <!-- End Title -->
                    <!-- Start features content -->
                    <div class="mu-features-content">
                        <div class="row">
                            <div class="col-lg-4 col-md-4  col-sm-6">
                                <div class="mu-single-feature">
                                    <span class="fa fa-book"></span>
                                    <h4>Professional Courses</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="mu-single-feature">
                                    <span class="fa fa-users"></span>
                                    <h4>Expert Teachers</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="mu-single-feature">
                                    <span class="fa fa-certificate"></span>
                                    <h4>Professional Certificate</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End features content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End features section -->

<!-- Start latest course section -->
<section id="mu-latest-courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="mu-latest-courses-area">
                    <!-- Start Title -->
                    <div class="mu-title">
                        <h2>Prodi Kami</h2>
                    </div>
                    <!-- End Title -->
                    <!-- Start latest course content -->
                    <div id="mu-latest-course-slide" class="mu-latest-courses-content">
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="mu-latest-course-single">
                                <figure class="mu-latest-course-img">
                                    <a href="#"><img src="{{ asset('template-landing/assets/img/courses/1.jpg') }}" alt="img"></a>
                                    <figcaption class="mu-latest-course-imgcaption">
                                        <a href="#">Farmasi</a>

                                    </figcaption>
                                </figure>
                                <div class="mu-latest-course-single-content">
                                    <h4><a href="#">S1 Farmasi</a></h4>
                                    <p>ilmu yang mempelajari segala seluk-beluk mengenai obat. Ilmu farmasi adalah terapan dari (sedikitnya) tiga bidang ilmu yaitu kedokteran, kimia, dan biologi. Ruang lingkup ilmu farmasi tak hanya berfokus pada bidang ilmu eksakta, melainkan juga pada bidang ilmu sosial seperti Manajemen Farmasi dan Farmakoekonomi.</p>
                                    <div class="mu-latest-course-single-contbottom">
                                        <a class="mu-course-details" href="#">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="mu-latest-course-single">
                                <figure class="mu-latest-course-img">
                                    <a href="#"><img src="{{ asset('template-landing/assets/img/courses/2.jpg') }}" alt="img"></a>
                                    <figcaption class="mu-latest-course-imgcaption">
                                        <a href="#">Teknologi Laboratorium Medis</a>
                                    </figcaption>
                                </figure>
                                <div class="mu-latest-course-single-content">
                                    <h4><a href="#">D3 Teknologi Laboratorium Medis</a></h4>
                                    <p>Teknologi Laboratorium Medis (TLM) adalah pelayanan laboratorium kesehatan untuk mengetahui keadaan tubuh seseorang terhadap kondisi suatu penyakit dengan cara melakukan analisis terhadap cairan dan jaringan tubuh manusia. </p>
                                    <div class="mu-latest-course-single-contbottom">
                                        <a class="mu-course-details" href="#">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="mu-latest-course-single">
                                <figure class="mu-latest-course-img">
                                    <a href="#"><img src="{{ asset('template-landing/assets/img/courses/2.jpg') }}" alt="img"></a>
                                    <figcaption class="mu-latest-course-imgcaption">
                                        <a href="#">Kebidanan</a>
                                    </figcaption>
                                </figure>
                                <div class="mu-latest-course-single-content">
                                    <h4><a href="#">D3 Kebidanan</a></h4>
                                    <p>Jurusan KEBIDANAN adalah satu bidang ilmu yang mernpelajari keilmuan dan- seni yang mempersiapkan kehamilan, menolong persalinan. nifas dan menyusui, masa interval dan pengaturan kesuburan, klimakterium dan menopause, bayi baru lahir dan balita, fungsi-fungsi reproduksi manusia serta memberikan bantuan/dukungan pada perempuan, keluarga dan komunitasnya. </p>
                                    <div class="mu-latest-course-single-contbottom">
                                        <a class="mu-course-details" href="#">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                    <!-- End latest course content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End latest course section -->

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
                            <div class="col-lg-3 col-md-3  col-sm-6">
                                <div class="mu-our-teacher-single">
                                    <figure class="mu-our-teacher-img">
                                        <img src="{{ asset('template-landing/assets/img/teachers/teacher-01.png') }}" alt="teacher img">
                                        <div class="mu-our-teacher-social">
                                            <a href="#"><span class="fa fa-facebook"></span></a>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                            <a href="#"><span class="fa fa-linkedin"></span></a>
                                            <a href="#"><span class="fa fa-google-plus"></span></a>
                                        </div>
                                    </figure>
                                    <div class="mu-ourteacher-single-content">
                                        <h4>Brian Dean</h4>
                                        <span>Math Teacher</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="mu-our-teacher-single">
                                    <figure class="mu-our-teacher-img">
                                        <img src="{{ asset('template-landing/assets/img/teachers/teacher-02.png') }}" alt="teacher img">
                                        <div class="mu-our-teacher-social">
                                            <a href="#"><span class="fa fa-facebook"></span></a>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                            <a href="#"><span class="fa fa-linkedin"></span></a>
                                            <a href="#"><span class="fa fa-google-plus"></span></a>
                                        </div>
                                    </figure>
                                    <div class="mu-ourteacher-single-content">
                                        <h4>James Hein</h4>
                                        <span>Physics Teacher</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="mu-our-teacher-single">
                                    <figure class="mu-our-teacher-img">
                                        <img src="{{ asset('template-landing/assets/img/teachers/teacher-03.png') }}" alt="teacher img">
                                        <div class="mu-our-teacher-social">
                                            <a href="#"><span class="fa fa-facebook"></span></a>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                            <a href="#"><span class="fa fa-linkedin"></span></a>
                                            <a href="#"><span class="fa fa-google-plus"></span></a>
                                        </div>
                                    </figure>
                                    <div class="mu-ourteacher-single-content">
                                        <h4>Rebeca Michel</h4>
                                        <span>English Teacher</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="mu-our-teacher-single">
                                    <figure class="mu-our-teacher-img">
                                        <img src="{{ asset('template-landing/assets/img/teachers/teacher-04.png') }}" alt="teacher img">
                                        <div class="mu-our-teacher-social">
                                            <a href="#"><span class="fa fa-facebook"></span></a>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                            <a href="#"><span class="fa fa-linkedin"></span></a>
                                            <a href="#"><span class="fa fa-google-plus"></span></a>
                                        </div>
                                    </figure>
                                    <div class="mu-ourteacher-single-content">
                                        <h4>John Doe</h4>
                                        <span>Biology Teacher</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quod pariatur recusandae odio dignissimos. Eligendi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End our teacher content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End our teacher -->

<!-- Start testimonial -->
<section id="mu-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-testimonial-area">
                    <div id="mu-testimonial-slide" class="mu-testimonial-content">
                        <!-- start testimonial single item -->
                        <div class="mu-testimonial-item">
                            <div class="mu-testimonial-quote">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
                                </blockquote>
                            </div>
                            <div class="mu-testimonial-img">
                                <img src="{{ asset('template-landing/assets/img/testimonial-1.png') }}" alt="img">
                            </div>
                            <div class="mu-testimonial-info">
                                <h4>John Doe</h4>
                                <span>Happy Student</span>
                            </div>
                        </div>
                        <!-- end testimonial single item -->
                        <!-- start testimonial single item -->
                        <div class="mu-testimonial-item">
                            <div class="mu-testimonial-quote">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
                                </blockquote>
                            </div>
                            <div class="mu-testimonial-img">
                                <img src="{{ asset('template-landing/assets/img/testimonial-3.png') }}" alt="img">
                            </div>
                            <div class="mu-testimonial-info">
                                <h4>Rebaca Michel</h4>
                                <span>Happy Parent</span>
                            </div>
                        </div>
                        <!-- end testimonial single item -->
                        <!-- start testimonial single item -->
                        <div class="mu-testimonial-item">
                            <div class="mu-testimonial-quote">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem rerum soluta aperiam blanditiis obcaecati eveniet aliquam consequatur nobis eaque id.</p>
                                </blockquote>
                            </div>
                            <div class="mu-testimonial-img">
                                <img src="{{ asset('template-landing/assets/img/testimonial-2.png') }}" alt="img">
                            </div>
                            <div class="mu-testimonial-info">
                                <h4>Stev Smith</h4>
                                <span>Happy Student</span>
                            </div>
                        </div>
                        <!-- end testimonial single item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End testimonial -->

<!-- Start from blog -->
<section id="mu-from-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-from-blog-area">
                    <!-- start title -->
                    <div class="mu-title">
                        <h2>Berita Terbaru</h2>
                    </div>
                    <!-- end title -->
                    <!-- start from blog content   -->
                    <div class="mu-from-blog-content">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <article class="mu-blog-single-item">
                                    <figure class="mu-blog-single-img">
                                        <a href="#"><img src="{{ asset('template-landing/assets/img/blog/blog-1.jpg') }}" alt="img"></a>
                                        <figcaption class="mu-blog-caption">
                                            <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
                                        </figcaption>
                                    </figure>
                                    <div class="mu-blog-meta">
                                        <a href="#">By Admin</a>
                                        <a href="#">02 June 2016</a>
                                        <span><i class="fa fa-comments-o"></i>87</span>
                                    </div>
                                    <div class="mu-blog-description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
                                        <a class="mu-read-more-btn" href="#">Read More</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <article class="mu-blog-single-item">
                                    <figure class="mu-blog-single-img">
                                        <a href="#"><img src="{{ asset('template-landing/assets/img/blog/blog-2.jpg') }}" alt="img"></a>
                                        <figcaption class="mu-blog-caption">
                                            <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
                                        </figcaption>
                                    </figure>
                                    <div class="mu-blog-meta">
                                        <a href="#">By Admin</a>
                                        <a href="#">02 June 2016</a>
                                        <span><i class="fa fa-comments-o"></i>87</span>
                                    </div>
                                    <div class="mu-blog-description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
                                        <a class="mu-read-more-btn" href="#">Read More</a>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <article class="mu-blog-single-item">
                                    <figure class="mu-blog-single-img">
                                        <a href="#"><img src="{{ asset('template-landing/assets/img/blog/blog-3.jpg') }}" alt="img"></a>
                                        <figcaption class="mu-blog-caption">
                                            <h3><a href="#">Lorem ipsum dolor sit amet.</a></h3>
                                        </figcaption>
                                    </figure>
                                    <div class="mu-blog-meta">
                                        <a href="#">By Admin</a>
                                        <a href="#">02 June 2016</a>
                                        <span><i class="fa fa-comments-o"></i>87</span>
                                    </div>
                                    <div class="mu-blog-description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ipsum non voluptatum eum repellendus quod aliquid. Vitae, dolorum voluptate quis repudiandae eos molestiae dolores enim.</p>
                                        <a class="mu-read-more-btn" href="#">Read More</a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <!-- end from blog content   -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End from blog -->
@endsection