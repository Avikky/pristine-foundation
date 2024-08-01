<!-- ======= Header ======= -->
<header id="header" class="header header-layout-type-header-2rows">
  <div class="header-top ">
  <div class="container">
  <div class="row">
  <div class="col-xl-auto header-top-left align-self-center text-center text-xl-left">
  <ul class="element contact-info">
  <li class="contact-phone"><i class="fa fa-phone font-icon sm-display-block"></i> {{$settings->phone}}</li>
  <li class="contact-email"><i class="fa fa-envelope-o font-icon sm-display-block"></i> {{$settings->email}}</li>
  <li class="contact-address"><i class="fa fa-map-o font-icon sm-display-block"></i> {{$settings->address}}</li>
  </ul>
  </div>
  <div class="col-xl-auto ml-xl-auto header-top-right align-self-center text-center text-xl-right">
  <div class="element">
  <ul class="header-top-nav list-inline">  
  <li class="menu-item"><a title="Home" class="menu-item-link" href="{{route('donation')}}"><strong>Donate</strong></a></li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="header-nav">
  <div class="header-nav-wrapper navbar-scrolltofixed green">
  <div class="menuzord-container header-nav-container green ">
  <div class="container position-relative">
  <div class="row">
  <div class="col">
  <div class="row header-nav-col-row">
  <div class="col-sm-auto align-self-center">
  <a class="menuzord-brand site-brand" href="index-mp-layout1.html">
  <img class="logo-default logo-1x" src="{{asset('uploads/images/'.$settings->logo)}}" alt="Logo">
  <img class="logo-default logo-2x retina" src="{{asset('uploads/images/'.$settings->logo)}}" alt="Logo">
  </a>
  </div>
  <div class="col-sm-auto ml-auto pr-0 align-self-center">
  <nav id="top-primary-nav" class="menuzord red" data-effect="fade" data-animation="none" data-align="right">
  <ul id="main-nav" class="menuzord-menu">
    {{-- <li class="active"><a href="{{url('/')}}">Home</a></li> --}}
    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
      <a class="nav-link" href="{{ url('/') }}">Home</a>
  </li>
    {{-- <li><a href="{{route('about.us')}}">About</a></li> --}}
    <li class="nav-item {{ Request::routeIs('about.us') ? 'active' : '' }}">
      <a class="nav-link" href="{{ route('about.us') }}">About</a>
  </li>
    <li class="nav-link {{ Request::routeIs('services') ? 'active' : '' }} ">
      <a href="{{route('services')}}">Services</a>
    </li>
 
  <li class="nav-link {{ Request::routeIs('gallery') ? 'active' : ''}} ">
    <a href="{{route('gallery')}}">Gallery</a>
  </li>  
  <li class="nav-link {{ Request::routeIs('blog') ? 'active' : ''}} ">
    <a href="{{route('blog')}}">Blog</a>
  </li>  
  <li class="nav-link {{ Request::routeIs('contact') ? 'active' : ''}} ">
    <a href="{{route('contact')}}">Contact</a>
  </li>
  </ul>
  </nav>
  </div>
  </div>
  <div class="row d-block d-xl-none">
  <div class="col-12">
  <nav id="top-primary-nav-clone" class="menuzord d-block d-xl-none default menuzord-color-default menuzord-border-boxed menuzord-responsive" data-effect="slide" data-animation="none" data-align="right" style>
  <ul id="main-nav-clone" class="menuzord-menu menuzord-right menuzord-indented scrollable">
  </ul>
  </nav>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </header>
<!-- End Header -->

 