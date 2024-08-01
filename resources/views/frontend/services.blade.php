@extends('frontend.app')
@section('pageTitle', 'All Services')
@section('content')

 <!-- ======= Breadcrumbs ======= --> 
   <section class="page-title divider layer-overlay section-typo-light" data-tm-bg-img="{{asset('uploads/images/'.$settings->banner)}}">
  <div class="container pt-90 pb-90">
  
  <div class="section-content">
  <div class="row">
  <div class="col-md-12 text-center">
  <h2 class="title text-white">Services</h2>
  <nav role="navigation" class="breadcrumb-trail breadcrumbs">
  <div class="breadcrumbs">
  <span class="trail-item trail-begin">
  <a href="{{url('/')}}"><span>Home</span></a>
  </span>
  <span><i class="fa fa-angle-right"></i></span>
  <span itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end active"><span>Services</span></span>
  </div>
  </nav>
  </div>
  </div>
  </div>
  </div>
  </section>
  
  <section class="bg-no-repeat bg-img-right-bottom" data-tm-bg-img="images/causes/semi-circle.png">
   <div class="container pb-60">
   <div class="section-title text-center mb-40">
   <div class="row justify-content-md-center">
   <div class="col-md-9">
   <h2 class="title text-uppercase mt-0"><span class>Our</span> <span class="text-theme-colored1">Services</span></h2>
   <p>At Pristine Life Enhancement Foundation, we are committed to creating positive change through a diverse range of services tailored to meet the unique needs of the communities we serve. Our programs focus on providing sustainable solutions and fostering growth in various aspects of life.</p>
   </div>
   </div>
   </div>
   <div class="section-content">
   <div class="row">
   <div class="col-sm-12">
   <div class="tm-sc tm-sc-services tm-sc-services-grid services-style2-classic border-radius-around-box">
   
   <div class="isotope-layout grid-3 clearfix">
         @foreach($services as $service)
         <div class="isotope-item">
               <div class="tm-service services type-services status-publish">
                     <div class="box-hover-effect">
                           <div class="effect-wrapper">
                                 <div class="thumb">
                                    {{-- <div class="thumb"> --}}
                                       {{-- <img width="100" height="70" class="img-thumbnail" src="{{asset('uploads/services/'.$service->image)}}" alt /> --}}
                                       <img class="rounded" src="{{asset('uploads/services/'.$service->image)}}" alt />
                                       
                                 </div>
                            </div>
                           <div class="details">
                                 <h4 class="title"><a href="#">{{$service->name}}</a></h4>
                                 <div class="paragraph mb-15">
                                       {!! strip_tags(Str::limit($service->description, 400)) !!}
                                       {{-- {!! strip_tags(Str::limit($settings->about, 1000, 0)) !!} --}}
                                 </div>
                                 <div class="btn-view-details">
                                 <a href="{{route('service.details', ['slug' => $service->slug])}}" class="btn btn-outline-theme-colored1 btn-outline btn-sm">
                                 View Details</a>
                                 </div>
                           </div>
                     </div>
               </div>
         </div>
         @endforeach           
   
   </div>
   </div>
   </div>
   </div>
   </div>
   </div>
   </section>

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