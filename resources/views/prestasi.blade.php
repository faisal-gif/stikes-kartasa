@extends('layouts.landing')
<!-- Start Slider -->
@section('css')
<style>
  #foto {
    width: 260px;
    height: 265px;
    object-fit: cover;
  }
</style>
@endsection

@section('content')

<!-- End breadcrumb -->
<section id="mu-course-content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mu-course-content-area">
          <div class="mu-title">
            <h2>Prestasi</h2>
          </div>
          <div class="row">
            <div class="col-md-12">
              <!-- start course content container -->
              <div class="mu-course-container mu-blog-archive">
                <div class="row">
                  @foreach($data as $prestasi)
                  <div class="col-md-4 col-sm-4">
                    <article class="mu-blog-single-item">
                      <figure class="mu-blog-single-img">
                        <a href="#"><img src="{{asset('lampiran/'.$prestasi->lampiran)}}" alt="img"></a>
                        <figcaption class="mu-blog-caption">
                          <h3><a href="#">{{$prestasi->nama}}</a></h3>
                        </figcaption>
                      </figure>
                      <div class="mu-blog-meta">
                        <a href="#">By Admin</a>
                        <a href="#">{{date('d M Y', strtotime($prestasi->created_at))}}</a>
                      </div>
                      <div class="mu-blog-description">
                        <a class="mu-read-more-btn" href="{{route('landing.detailPrestasi',$prestasi->id)}}">Read More</a>
                      </div>
                    </article>
                  </div>
                  @endforeach
                </div>
              </div>
              <!-- end course content container -->

            </div>
          </div>
        </div>
      </div>
    </div>
</section>

@endsection