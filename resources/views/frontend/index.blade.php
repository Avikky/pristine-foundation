@extends('frontend.app')
@section('pageTitle', 'Home')
@section('content')


    <!-- ======= Hero Section ======= -->
    @include('frontend.body.heroslider')
    <!-- End Hero Section -->



    <section class="bg-theme-colored1">
        <div class="container pt-50">
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        {{-- <h2 class="text-white">Welcome To {{$settings->sitename}} &amp; NGO Ogranization</h2> --}}
                        {{-- <h2 class="text-white">Welcome To Pristine Life &amp; NGO Ogranization</h2> --}}
                        <h2 class="text-white">Welcome To {{ $settings->sitename }}</h2>
                        <p class="lead text-white">We are dedicated to transforming lives through accessible and
                            compassionate healthcare</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="section-content">
                <div class="row mb-80" data-tm-margin-top="-150px">
                    <div class="col-md-6 col-lg-4 mb-md-30">
                        <div
                            class="tm-sc tm-sc-icon-box icon-box icon-top text-center iconbox-box-shadow iconbox-default-padding iconbox-centered-in-responsive icon-position-icon-top feature-box bg-white p-20">
                            <div class="icon-wrapper">
                                <a class="icon icon-type-image icon-default">
                                    <img src="{{ asset('frontend/images/icon/charity1.png') }}" alt="Image"></a>
                            </div>
                            <div class="icon-text">
                                <h3 class="icon-box-title ">
                                    Mission
                                </h3>
                                <div class="content text-justify">
                                    <p>{!! strip_tags(Str::limit($settings->mission, 140)) !!}</p>

                                </div>
                            </div>
                            <div class="pt-4">
                                <a href="#" class="btn btn-outline-theme-colored1 btn-outline btn-sm"
                                    data-toggle="modal" data-target="#missionModal">
                                    View Details</a>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-md-30">
                        <div
                            class="tm-sc tm-sc-icon-box icon-box icon-top text-center iconbox-box-shadow iconbox-default-padding iconbox-centered-in-responsive icon-position-icon-top feature-box bg-white p-20">
                            <div class="icon-wrapper">
                                <a class="icon icon-type-image  icon-default">
                                    <img src="{{ asset('frontend/images/icon/charity2.png') }}" alt="Image"></a>
                            </div>
                            <div class="icon-text">
                                <h3 class="icon-box-title ">
                                    Vision
                                </h3>
                                <div class="content text-justify">

                                    <p>{!! strip_tags(Str::limit($settings->vision, 200)) !!}</p>
                                </div>
                            </div>
                            <div class="pt-5">
                                <a href="#" class="btn btn-outline-theme-colored1 btn-outline btn-sm"
                                    data-toggle="modal" data-target="#visionModal">
                                    View Details</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" style="height: 200px;">
                        <div
                            class="tm-sc tm-sc-icon-box icon-box icon-top text-center iconbox-box-shadow iconbox-default-padding iconbox-centered-in-responsive icon-position-icon-top feature-box bg-white p-20">

                            <div class="icon-wrapper">
                                <a class="icon icon-type-image  icon-default">
                                    <img src="{{ asset('frontend/images/icon/charity3.png') }}" alt="Image"></a>
                            </div>
                            <div class="icon-text">
                                <h3 class="icon-box-title ">
                                    Core Values
                                </h3>
                                <div class="content text-justify">
                                    <p>{!! strip_tags(Str::limit($settings->core_value, 200)) !!}</p>
                                </div>
                            </div>
                            <div class="pt-4">
                                <a href="#" class="btn btn-outline-theme-colored1 btn-outline btn-sm"
                                    data-toggle="modal" data-target="#corevalueModal">
                                    View Details</a>
                            </div>
                            <div class="clearfix"></div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- start modal sections  --}}
    <div class="modal fade" id="missionModal" tabindex="-1" role="dialog" aria-labelledby="MissionModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Mission</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="icon-wrapper ma-auto text-center">
                        <a class="icon icon-type-image icon-default">
                            <img src="{{ asset('frontend/images/icon/charity1.png') }}" alt="Image"></a>
                    </div>
                    <div class="icon-text text-center">
                        <h3 class="icon-box-title ">
                            Mission
                        </h3>
                        <div class="content text-justify">
                            {!! $settings->mission !!}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-theme-colored1 btn-outline btn-sm"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="visionModal" tabindex="-1" role="dialog" aria-labelledby="visionModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Vision</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="icon-wrapper ma-auto text-center">
                        <a class="icon icon-type-image  icon-default">
                            <img src="{{ asset('frontend/images/icon/charity2.png') }}" alt="Image"></a>
                    </div>
                    <div class="icon-text text-center">
                        <h3 class="icon-box-title ">
                            Vision
                        </h3>
                        <div class="content text-justify">

                            <p>{!! $settings->vision !!}</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-theme-colored1 btn-outline btn-sm"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="corevalueModal" tabindex="-1" role="dialog" aria-labelledby="corevalueModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Core Values</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="icon-wrapper ma-auto text-center">
                        <a class="icon icon-type-image  icon-default">
                            <img src="{{ asset('frontend/images/icon/charity3.png') }}" alt="Image"></a>
                    </div>
                    <div class="icon-text text-center">
                        <h3 class="icon-box-title ">
                            Core Values
                        </h3>
                        <div class="content text-justify">
                            <p>{!! $settings->core_value !!}</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-theme-colored1 btn-outline btn-sm"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    {{-- end modal sections  --}}


    <section class="mt-10">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-lg-6 mb-md-30">
                        <h3 class="text-uppercase mt-0">Welcome To <span class="text-theme-colored1">Pristine Life</span>
                            Enhancement Foundation</h3>
                        {{-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Quos dolo rem consequ untur, natus laudantium commodie&nbsp;adipisi cing</p> --}}
                        {{-- <p class="lead">{!! ($settings->about) !!}</p> --}}
                        <div class="wpb_wrapper">
                            {{-- <p>{!! strip_tags(Str::limit($settings->about, 1000, 0)) !!}</p> --}}
                            <p>Welcome to Pristine Life Enhancement Foundation, where we are dedicated to transforming lives
                                through accessible and compassionate healthcare.
                                Our comprehensive programs focus on eye care, health education, malaria control, and the
                                provision of essential medical supplies. We believe everyone deserves quality healthcare and
                                are committed to making this a reality for underserved communities.
                                <br> Join us in our mission to enhance health and well-being, and together, let's build a
                                healthier future.
                            </p>
                        </div>
                        <div class="tm-sc tm-sc-button">
                            <a href="{{ route('about.us') }}" class="btn btn-theme-colored1 btn-sm">Read More</a>
                            {{-- <a href target="_self" class="btn btn-theme-colored1 btn-sm">Read More</a> --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div
                            class="box-hover-effect play-video-button tm-sc tm-sc-video-popup tm-sc-video-popup-button-over-image">
                            <div class="effect-wrapper">
                                <div class="thumb">
                                    <img class="img-fullwidth"
                                        src="{{ asset('uploads/images/' . $settings->about_image) }}" alt="Image">
                                </div>
                                <div class="image"></div>
                                <a class="hover-link" data-lightbox-gallery="youtube-video" href="#"></a><span><a
                                        href="#"></a></span>
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
                    <p class="text-white font-size-18">Supporting Pristine Life Enhancement Foundation with your <span>
                            Donation </span> helps us empower and uplift communities in need.</p>
                    <div class="tm-sc tm-sc-button text-center mt-20">
                        <a href="#" class="btn btn-danger btn-round" data-toggle="modal" data-target="#donationModal">
                            Donate Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-no-repeat bg-img-right-bottom" data-tm-bg-img="images/causes/semi-circle.png">
        <div class="container pb-60">
            <div class="section-title text-center mb-40">
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <h2 class="title text-uppercase mt-0"><span class>Our</span> <span
                                class="text-theme-colored1">Services</span></h2>
                        <p>Pristine Life Enhancement Foundation offers a range of services designed to empower individuals
                            and improve community well-being:</p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div
                            class="tm-sc tm-sc-services tm-sc-services-grid services-style2-classic border-radius-around-box">

                            <div class="isotope-layout grid-3 clearfix">
                                @foreach ($services->take(3) as $service)
                                    <div class="isotope-item">
                                        <div class="tm-service services type-services status-publish">
                                            <div class="box-hover-effect">
                                                <div class="effect-wrapper">
                                                    <div class="thumb">
                                                        <img width="50%" height="50%"
                                                            src="{{ asset('uploads/services/' . $service->image) }}"
                                                            class="img-fullwidth wp-post-image" alt />
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <h4 class="title"><a href="#">{{ $service->name }}</a></h4>
                                                    <div class="paragraph mb-15">
                                                        {{-- {!! Str::limit($service->description, strlen($service->description)/8) !!} --}}
                                                        {{-- {!! Str::limit($service->description, 100) !!} --}}
                                                        {!! strip_tags(Str::limit($service->description, 200)) !!}
                                                    </div>
                                                    <div class="btn-view-details">
                                                        <a href="{{ route('service.details', ['slug' => $service->slug]) }}"
                                                            class="btn btn-outline-theme-colored1 btn-outline btn-sm">
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

    <section data-tm-bg-img="{{ asset('backend/images/pristine4.jpg') }}">
        {{-- <section data-tm-bg-img="{{asset('backend/images/plef_health_service.jpg')}}"> --}}
        <div class="container-fluid p-0">
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div
                            class="tm-sc tm-sc-custom-columns-holder tm-cc-two-columns tm-cc-responsive-mode-1280 tm-cc-items-float">
                            <div class="tm-sc tm-sc-custom-columns-holder-item  section-typo-light bg-theme-colored1 "
                                data-item-class="tm-custom-columns-520715" data-991-down="100px" data-767-down="60px">
                                <div class="item-inner">
                                    <div class="item-content tm-custom-columns-520715 pt-150 pb-150 pr-150 pl-150">
                                        <div class="tm-sc tm-sc-section-title section-title section-title-style1 mb-30">
                                            <div class="title-wrapper mb-20">
                                                <h2 class="title font-size-40">Join Forces with PLEF NGO to Drive
                                                    Meaningful Change
                                                    <span class="title-shadow-text font-size-200">PLEF NGO</span>
                                                </h2>
                                                <div class="title-seperator-line"></div>
                                            </div>
                                        </div>
                                        <div class="paragraph lead mb-30 mt-0">
                                            <p>At PLEF NGO, we believe in the power of collaboration to bring about
                                                sustainable and transformative change in our communities. By partnering with
                                                us, you can play a pivotal role in our mission to empower individuals,
                                                improve health outcomes, foster social development, and promote sustainable
                                                agricultural practices. Together, we can create a brighter future for all
                                            </p>
                                        </div>
                                        <div class="tm-sc tm-sc-button  btn-circle">
                                            <a href="{{ route('donation') }}" class="btn btn-outline-light btn-outline">
                                                Join Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tm-sc tm-sc-custom-columns-holder-item" data-item-class="tm-custom-columns-924903"
                                data-991-down="100px" data-767-down="60px">
                                <div class="item-inner">
                                    <div class="item-content tm-custom-columns-924903 p-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="layer-overlay overlay-white-4" data-tm-bg-color="#f8f4f0"
        data-tm-bg-img="images/testimonials/bg.png">
        <div class="container pb-70">
            <div class="section-title text-center mb-40">
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <h2 class="title text-uppercase mt-0"><span class>Clients</span> <span
                                class="text-theme-colored1">Testimonials</span></h2>
                        <p>See What People Say About Us</p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div
                            class="tm-sc tm-sc-testimonials tm-sc-testimonials-masonry testimonial-style4-modern testimonial-has-quote-icon">

                            <div class="isotope-layout masonry grid-3 clearfix">
                                <div class="isotope-item isotope-item-sizer"></div>

                                @foreach ($testimonials->take(3) as $testimonial)
                                    <div class="isotope-item mb-0 mb-sm-30">
                                        <div class="tm-testimonial testimonials type-testimonials">
                                            <div class="testimonial-inner" style="height: 300px;">
                                                <div class="text-center">
                                                    <i class="fas fa-user-circle fa-3x"></i>
                                                </div>
                                                <div class="testimonial-text-holder bg-white">
                                                    <div class="author-text">{!! strip_tags(Str::limit($testimonial->testimony, 200, 0)) !!}</div>
                                                    <div class="star-rating">
                                                        <span data-tm-width="80%"></span>
                                                    </div>
                                                </div>
                                                <div class="testimonial-author-details">
                                                    <div class="testimonial-image-holder">
                                                        <div class="author-thumb">
                                                            <img src="{{ asset('uploads/testimonials/' . $testimonial->image) }}"
                                                                class="img-thumbnail rounded-circle wp-post-image" alt>
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-author-info-holder">
                                                        <span class="name">{{ $testimonial->name }}</span>
                                                        <span class="job-position">{{ $testimonial->designation }}</span>
                                                   
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

    <section>
        <div class="container">
            <div class="section-content">
                <div class="text-center">
                    <h2 class="title text-uppercase mt-0"><span class>Events</span> And <span
                        class="text-theme-colored1">Activities</span></h2>
                        <p>See our most exciting events</p>
                </div>
                <div class="row mb-80" data-tm-margin-top="50px">
                    @foreach($events as $event)
                        <div class="col-md-6 col-lg-4 mb-md-30">
                            <div
                                class="tm-sc tm-sc-icon-box icon-box icon-top text-center iconbox-box-shadow iconbox-default-padding iconbox-centered-in-responsive icon-position-icon-top feature-box bg-white p-20">
                                <div class="icon-wrapper">
                                    <a class="icon icon-type-image icon-default">
                                        <img src="{{ $event->image_url }}" alt="Image"></a>
                                </div>
                                <div class="icon-text">
                                    <h6 class="icon-box-title ">
                                        {{$event->title}}
                                    </h6>
                                    <div class="content text-justify">
                                        <p>{!! strip_tags(Str::limit($event->description, 140)) !!}</p>

                                    </div>
                                </div>
                                <div class="pt-4">
                                    <a href="#" class="btn btn-outline-theme-colored1 btn-outline btn-sm"
                                        data-toggle="modal" data-target="#eventModal{{$event->id}}">
                                        View Details</a>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>

                        {{-- start modal sections  --}}
                            <div class="modal fade" id="eventModal{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="eventModal"
                            aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{$event->title}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="icon-wrapper ma-auto text-center">
                                                <a class="icon icon-type-image icon-default">
                                                    <img src="{{ $event->image_url }}" alt="Image"></a>
                                            </div>
                                            <div class="icon-text text-center">
                                                <h3 class="icon-box-title ">
                                                    {{$event->title}}
                                                </h3>
                                                <div class="content text-justify">
                                                    {!! $event->description !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-theme-colored1 btn-outline btn-sm"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        {{-- end modal sections  --}}
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container pb-60">
            <div class="section-title text-center mb-40">
                <div class="row justify-content-md-center">
                    <div class="col-md-9">
                        <h2 class="title text-uppercase mt-0"><span class>Life Enhancement</span> <span
                                class="text-theme-colored1">Insight</span></h2>
                        <p>Whether you're looking for tips on maintaining good health, updates on our latest initiatives, or
                            heartwarming stories from the field, our blog is your go-to resource.</p>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="tm-sc tm-sc-blog tm-sc-blog-grid blog-style2-standard">
                            <div class="isotope-layout grid-3 clearfix">
                                @foreach ($blogposts->take(3) as $blog)
                                    <div class="isotope-item home">
                                        <article class="post type-post status-publish format-standard">
                                            <div class="entry-header">
                                                <div class="post-thumb thumb lightgallery-lightbox">
                                                    <div class="box-hover-effect">
                                                        <div class="effect-wrapper">
                                                            <div class="thumb">
                                                                <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}"
                                                                    title="{{ $blog->name }}"><img width="360"
                                                                        height="240"
                                                                        src="{{ asset('uploads/blogs/' . $blog->image) }}"
                                                                        alt></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="entry-content">
                                                <h4 class="entry-title"><a
                                                        href="{{ route('blog.details', ['slug' => $blog->slug]) }}"
                                                        rel="bookmark">{{ $blog->name }}</a></h4>
                                                {{-- <ul class="entry-meta list-inline">
                                                                        <li class="list-inline-item author"><i class="fa fa-user-o"></i> <span class="byline">By <span class="author vcard"><a class="url fn n" href="#" rel="author">jakaria</a></span></span></li>
                                                                        <li class="list-inline-item posted-date"><i class="fa fa-calendar-o"></i> <a href="#" rel="bookmark">February 21, 2019</a></li>
                                                                  </ul> --}}
                                                <div class="post-excerpt">
                                                    <div class="mascot-post-excerpt">{!! strip_tags(Str::limit($blog->description, 200, 0)) !!}</div>
                                                </div>
                                                <div class="post-btn-readmore mt-20">
                                                    <a href="{{ route('blog.details', ['slug' => $blog->slug]) }}"
                                                        class="btn btn-theme-colored1 btn-sm">View Details</a>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </article>
                                    </div>
                                    {{-- <div class="isotope-item medicine">
                                                      <article class="post type-post status-publish format-standard">
                                                            <div class="entry-header">
                                                            <div class="post-thumb thumb lightgallery-lightbox">
                                                            <div class="box-hover-effect">
                                                            <div class="effect-wrapper">
                                                            <div class="thumb">
                                                            <a href="news-details.html" title="Provide Healthy Food"><img width="360" height="240" src="images/blog/2.jpg" alt></a>
                                                            </div>
                                                            </div>
                                                            </div>
                                                            </div>
                                                            </div>
                                                            <div class="entry-content">
                                                            
                                                            <h4 class="entry-title"><a href="news-details.html" rel="bookmark">Provide Healthy Food</a></h4>
                                                            <ul class="entry-meta list-inline">
                                                            <li class="list-inline-item author"><i class="fa fa-user-o"></i> <span class="byline">By <span class="author vcard"><a class="url fn n" href="#" rel="author">jakaria</a></span></span></li>
                                                            <li class="list-inline-item posted-date"><i class="fa fa-calendar-o"></i> <a href="#" rel="bookmark">February 21, 2019</a></li>
                                                            </ul>
                                                            <div class="post-excerpt">
                                                            <div class="mascot-post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tortor ipsum, suscipit vitae lacus ac, sagittis pretium sem. Nulla placerat sollicitudin tempor....</div>
                                                            </div>
                                                            <div class="post-btn-readmore mt-20">
                                                            <a href="news-details.html" class="btn btn-theme-colored1 btn-sm">
                                                            View Details</a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            </div>
                                                      </article>
                                                </div>
                                                <div class="isotope-item home">
                                                      <article class="post type-post status-publish format-standard">
                                                            <div class="entry-header">
                                                            <div class="post-thumb thumb lightgallery-lightbox">
                                                            <div class="box-hover-effect">
                                                            <div class="effect-wrapper">
                                                            <div class="thumb">
                                                            <a href="news-details.html" title="School For Poor"><img width="360" height="240" src="images/blog/3.jpg" alt></a>
                                                            </div>
                                                            </div>
                                                            </div>
                                                            </div>
                                                            </div>
                                                            <div class="entry-content">
                                                            
                                                            <h4 class="entry-title"><a href="news-details.html" rel="bookmark">School For Poor</a></h4>
                                                            <ul class="entry-meta list-inline">
                                                            <li class="list-inline-item author"><i class="fa fa-user-o"></i> <span class="byline">By <span class="author vcard"><a class="url fn n" href="#" rel="author">jakaria</a></span></span></li>
                                                            <li class="list-inline-item posted-date"><i class="fa fa-calendar-o"></i> <a href="#" rel="bookmark">February 20, 2019</a></li>
                                                            </ul>
                                                            <div class="post-excerpt">
                                                            <div class="mascot-post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tortor ipsum, suscipit vitae lacus ac, sagittis pretium sem. Nulla placerat sollicitudin tempor....</div>
                                                            </div>
                                                            <div class="post-btn-readmore mt-20">
                                                            <a href="news-details.html" class="btn btn-theme-colored1 btn-sm">
                                                            View Details</a>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            </div>
                                                      </article>
                                                </div> --}}
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







@endsection
