@extends('frontend.app')
@section('pageTitle', $serviceDetail->name)
@section('content')

  <!-- ======= Breadcrumbs ======= -->
  <section class="page-title divider layer-overlay section-typo-light" data-tm-bg-img="{{asset('uploads/images/'.$settings->banner)}}">
    <div class="container pt-90 pb-90">
    
    <div class="section-content">
    <div class="row">
    <div class="col-md-12 text-center">
    <h2 class="title text-white">{{$serviceDetail->name}}</h2>
    <nav role="navigation" class="breadcrumb-trail breadcrumbs">
    <div class="breadcrumbs">
    <span class="trail-item trail-begin">
    <a href="{{url('/')}}"><span>Home</span></a>
    </span>
    <span><i class="fa fa-angle-right"></i></span>
    <span class="trail-item"><a href="{{route('services')}}"><span>Services</span></a></span>
    <span><i class="fa fa-angle-right"></i></span>
    <span itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end active"><span>Service Details</span></span>
    </div>
    </nav>
    </div>
    </div>
    </div>
    </div>
  </section>
  
  <!-- End Breadcrumbs -->

  <!-- ======= Service Details Section ======= -->
  <section>
    <div class="container pb-70">
    <div class="section-content">
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 pull-left flip">
    <div class="row">
    <div class="col-md-12">
    <img alt src="{{asset('uploads/services/'.$serviceDetail->image)}}" />
    
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <h3 class="mt-20 mb-10">{{$serviceDetail->name}}</h3>
    {{-- <p class="lead">Lorem ipsum dolor sit amet <span class="text-theme-colored1 font-weight-600">Education</span> adipiscing elit. Etiam aliquet odio non porta laoreet. Vestibulum in dui euismod, molestie quam <span class="text-theme-colored1 font-weight-600">porta</span>, sagittis arcu. Pellentesque vitae pulvinar urna.</p> --}}
     <p>{!!($serviceDetail->description)!!}</p><br><br>


    
      
    
    {{-- <h5>Tincidunt wisi euismod iaculis nunc vita</h5>
    <p>Nostra dapibus varius et semper semper rutrum ad risus felis eros. Cursus libero viverra tempus netus diam vestibulum lorem tincidunt congue porta. Non ligula egestas commodo massa. Lorem non sit vivamus convallis elit mollis. Viverra sodales feugiat natoque sem morbi hac nunc ultricies nibh netus facilisis blandit. Felis purus et iaculis. Semper orci duis montes curabitur potenti a varius quis diam, vel litora et? Quis ridiculus pharetra luctus augue duis.</p>
    <blockquote class="tm-sc tm-sc-blockquote blockquote-style6  quote-icon-theme-colored">
    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution.</p>
    <footer><cite>Someone famous</cite></footer>
    </blockquote> --}}

   </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
  <!-- End Service Details Section -->
  <section class="divider layer-overlay overlay-theme-colored1-8" data-tm-bg-img="images/bg/bg4.jpg">
    <div class="container">
    <div class="row">
    <div class="col-sm-12 text-center font-72">
    <h2 class="text-white font-weight-600">Make an Impact Today </h2>
    <p class="text-white font-size-18">Supporting Pristine Life Enhancement Foundation with your <span> Donation </span> helps us empower and uplift communities in need.</p>
    <div class="tm-sc tm-sc-button text-center mt-20">
    <a href="{{route('donation')}}" class="btn btn-light btn-round">
    Donate Us Now</a>
    </div>
    </div>
    </div>
    </div>
    </section>
    <br>
   

@endsection