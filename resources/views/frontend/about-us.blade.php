@extends('frontend.app')
@section('pageTitle', 'About Us')
@section('content')


<section class="page-title divider layer-overlay overlay-dark-8 section-typo-light" data-tm-bg-img="{{asset('uploads/images/'.$settings->banner)}}">
  <div class="container pt-90 pb-90">
  
  <div class="section-content">
  <div class="row">
  <div class="col-md-12 text-center">
  <h2 class="title text-white">About Us</h2>
  <nav role="navigation" class="breadcrumb-trail breadcrumbs">
  <div class="breadcrumbs">
  <span class="trail-item trail-begin">
  <a href="{{url('/')}}"><span>Home</span></a>
  </span>
  <span><i class="fa fa-angle-right"></i></span>
  <span itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end active"><span>About</span></span>
  </div>
  </nav>
  </div>
  </div>
  </div>
  </div>
  </section>
  <section>
      <div class="container">
          <div class="section-content">
            <div class="row g-0">
                {{-- <div class="col-lg mb-md-30"> --}}
              <div class="col-lg-12 over-flow">
                <h4 class="text-uppercase mt-0">WHO <span class="text-theme-colored1">WE ARE</span></h4>
                <p class="lead">{!! ($settings->about) !!}</p>
                {{-- <p class="column-lg-2 dropcap">{!! ($settings->about) !!}</p> --}}
              </div>
            </div>

            <div class="row">
              <div class="box-hover-effect play-video-button tm-sc  tm-sc-video-popup-button-over-image">
                <div class="effect-wrapper">
                    <div class="thumb">
                      <img class="img-fluid" src="{{asset('uploads/images/'.$settings->about_image)}}" alt="Image">
                  </div>
                    <div class="video-button"></div>
                      <a class="hover-link" data-lightbox-gallery="youtube-video" href="#"></a><span><a href="#"></a></span>
                    </div>
                </div>
              </div>
            </div>

            <div class="row gx-5">
              <div class="col-me-12">
                <p class="lead">{!! $settings->about_descript !!}</p>
              </div>
            </div>

          </div>   
  </section>

  
  
   
  <section class="divider layer-overlay overlay-theme-colored1-8" data-tm-bg-img="images/bg/bg4.jpg">
  <div class="container">
  <div class="row">
  <div class="col-sm-12 text-center font-72">
  <h2 class="text-white font-weight-600">We Need Your Help For Rescue Child</h2>
  <p class="text-white font-size-18">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to<br> corporate strategy foster collaborative thinking to further the overall value proposition.</p>
  <div class="tm-sc tm-sc-button text-center mt-20">
  <a href="{{route('donation')}}" target="_self" class="btn btn-light btn-round">
  Donate Us Now</a>
  </div>
  </div>
  </div>
  </div>
  </section>
  
  
  
 
<br>

@endsection