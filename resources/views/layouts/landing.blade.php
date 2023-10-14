<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STIKES</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('template-landing/assets/img/favicon.ico')}}" type="image/x-icon">

    <!-- Font awesome -->
    <link href="{{ asset('template-landing/assets/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('template-landing/assets/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template-landing/assets/css/slick.css')}}">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{ asset('template-landing/assets/css/jquery.fancybox.css')}}" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('template-landing/assets/css/theme-color/green-theme.css')}}" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="{{ asset('template-landing/assets/css/style.css')}}" rel="stylesheet">


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- END SCROLL TOP BUTTON -->

    <!-- Start header  -->
    <header id="mu-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mu-header-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="mu-header-top-left">
                                    <div class="mu-top-email">
                                        <i class="fa fa-envelope"></i>
                                        <span>info@markups.io</span>
                                    </div>
                                    <div class="mu-top-phone">
                                        <i class="fa fa-phone"></i>
                                        <span>(568) 986 652</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="mu-header-top-right">
                                    <nav>
                                        <ul class="mu-top-social-nav">
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                            <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header  -->
    <!-- Start menu -->
    <section id="mu-menu">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO -->
                    <!-- TEXT BASED LOGO -->
                    <a class="navbar-brand" href="index.html"><i><img src="{{ asset('template-landing/assets/img/favicon.png')}}" alt="" srcset=""></i><span>STIKES Karya Putra Bangsa</span></a>
                    <!-- IMG BASED LOGO  -->
                    <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                        <li class="active"><a href="index.html">Beranda</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/vis-misi">Visi dan Misi</a></li>
                                <li><a href="course-detail.html">Prodi</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Akademik</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="course.html">Kalender Akademik</a></li>
                                <li><a href="course-detail.html">Jadwal Perkuliahan</a></li>
                                <li><a href="http://siakad.stikes-kartrasa.ac.id/pmb">Penerimaan Mahasiswa Baru</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sistem Informasi</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="http://siakad.stikes-kartrasa.ac.id/">Siakad</a></li>
                                <li><a href="http://siakad.stikes-kartrasa.ac.id/siam/login.html">Sistem Informasi Akademik Mahasiswa</a></li>
                                <li><a href="http://siakad.stikes-kartrasa.ac.id/tracer/">Tracer Study</a></li>
                            </ul>
                        </li>
                        <li><a href="gallery.html">Dosen</a></li>
                        <li><a href="{{route('login')}}">Login</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </section>
    <!-- End menu -->
    <!-- Start search box -->
    <div id="mu-search">
        <div class="mu-search-area">
            <button class="mu-search-close"><span class="fa fa-close"></span></button>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="mu-search-form">
                            <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End search box -->
    @yield('content')
    <!-- Start footer -->
    <footer id="mu-footer">
        <!-- start footer top -->
        <div class="mu-footer-top">
            <div class="container">
                <div class="mu-footer-top-area">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-footer-widget">
                                <h4>Information</h4>
                                <ul>
                                    <li><a href="#">Profil</a></li>
                                    <li><a href="">Fasilitas</a></li>
                                    <li><a href="">Prodi</a></li>
                                    <li><a href="">Pendaftaran</a></li>
                                    <li><a href="">Map</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-footer-widget">
                                <h4>Student Help</h4>
                                <ul>
                                   
                                    <li><a href="#">Siakad</a></li>
                                    <li><a href="">Kalender Akademik</a></li>
                                    <li><a href="">Karir</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-footer-widget">
                                <h4>Berita Terbaru</h4>
                                <p>Untuk Mendapatakan Berita Terbaru Tentang Kami</p>
                                <form class="mu-subscribe-form">
                                    <input type="email" placeholder="Type your Email">
                                    <button class="mu-subscribe-btn" type="submit">Subscribe!</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-footer-widget">
                                <h4>Contact</h4>
                                <address>
                                    <p>Jalan Raya Tulungagung-Blitar,Kec. Sumbergempol, Kabupaten Tulungagung, Jawa Timur 66291</p>
                                    <p>Phone: (415) 453-1568 </p>
                                    <p>Email: info@markups.io</p>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer top -->
        <!-- start footer bottom -->
        <div class="mu-footer-bottom">
            <div class="container">
                <div class="mu-footer-bottom-area">
                    <p>&copy; All Right Reserved. Designed by <a href="http://www.markups.io/" rel="nofollow">MarkUps.io</a></p>
                </div>
            </div>
        </div>
        <!-- end footer bottom -->
    </footer>
    <!-- End footer -->

    <!-- jQuery library -->
    <script src="{{ asset('template-landing/assets/js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('template-landing/assets/js/bootstrap.js') }}"></script>
    <!-- Slick slider -->
    <script type="text/javascript" src="{{ asset('template-landing/assets/js/slick.js') }}"></script>
    <!-- Counter -->
    <script type="text/javascript" src="{{ asset('template-landing/assets/js/waypoints.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template-landing/assets/js/jquery.counterup.js') }}"></script>
    <!-- Mixit slider -->
    <script type="text/javascript" src="{{ asset('template-landing/assets/js/jquery.mixitup.js') }}"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="{{ asset('template-landing/assets/js/jquery.fancybox.pack.js') }}"></script>


    <!-- Custom js -->
    <script src="{{ asset('template-landing/assets/js/custom.js') }}"></script>

</body>

</html>