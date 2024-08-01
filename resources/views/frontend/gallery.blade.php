@extends('frontend.app')
@section('pageTitle', 'Gallery')
@section('content')

<section class="page-title divider layer-overlay section-typo-light" data-tm-bg-img="{{asset('uploads/images/'.$settings->banner)}}">
    <div class="container pt-90 pb-90">    
        <div class="section-content">
        <div class="row">
        <div class="col-md-12 text-center">
        <h2 class="title text-white">Photo Gallery</h2>
        <nav role="navigation" class="breadcrumb-trail breadcrumbs">
        <div class="breadcrumbs">
        <span class="trail-item trail-begin">
        <a href="{{route('home')}}"><span>Home</span></a>
        </span>
        <span><i class="fa fa-angle-right"></i></span>
        <span class="trail-item"><a href="#"></a></span>
        <span itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end active"><span>About</span></span>
        </div>
        </nav>
        </div>
        </div>
        </div>
    </div>
</section>
    
    <section class="layer-overlay overlay-white-5" data-tm-bg-img="{{asset('frontend/images/bg/bg.png')}}" data-tm-bg-color="#f7f6f5">
    <div class="container pb-70">
    <div class="section-content">
    <div class="row">
    <div class="col-sm-12">
    <div class="tm-sc tm-sc-gallery tm-sc-gallery-masonry gallery-style1-current-theme">
    
    <div class="isotope-layout-filter filter-style-2 text-center cat-filter-default" data-link-with="gallery-holder-1">
        @foreach($gallerys as $key => $gallery)
        <a href="#" class="active" data-filter="*{{$key}}" {{($key == 0 ? 'active' : '')}}>{{$gallery->name}}</a>
        {{-- <a href="#festival" class data-filter=".festival">Festival</a>
        <a href="#picnic" class data-filter=".picnic">Picnic</a>
        <a href="#meeting" class data-filter=".meeting">Meeting</a> --}}
        @endforeach
    </div>
    
    
        <div id="gallery-holder-1" class="isotope-layout masonry grid-3 gutter-15 clearfix lightgallery-lightbox">
            <div class="isotope-layout-inner">
                <div class="isotope-item isotope-item-sizer"></div>
                @foreach($gallerys as $key => $gallery)
                    <div class="isotope-item  festival picnic">
                        <div class="isotope-item-inner tm-gallery">
                            <div class="tm-gallery-inner">
                                    <div class="thumb ">
                                        <a href="#"><img src="{{asset('uploads/gallerys/'.$gallery->image)}}" alt></a>
                                    </div>
                                    <div class="tm-gallery-content-wrapper">
                                        <div class="tm-gallery-content">
                                            <div class="tm-gallery-content-inner">
                                                <div class="icons-holder-inner">
                                                    <div class="styled-icons icon-dark icon-circled icon-theme-colored1"> <a class="lightgallery-trigger styled-icons-item" data-exthumbimage="{{asset('uploads/gallerys/'.$gallery->image)}}" title="Project Title Here" href="{{asset('uploads/gallerys/'.$gallery->image)}}"><i class="fa fa-plus"></i></a> <a class="styled-icons-item" title="Project Title Here" href="#"><i class="fa fa-link"></i></a> </div>
                                                </div>
                                                {{-- <div class="title-holder">
                                                    <h5 class="title"><a href="#">Project Title Here</a></h5>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>    
                @endforeach
                    {{-- <div class="isotope-item festival picnic">
                        <div class="isotope-item-inner tm-gallery">
                            <div class="tm-gallery-inner">
                                <div class="thumb ">
                                    <a href="#"><img src="{{asset('frontend/images/gallery/2.jpg')}}" alt></a>
                                </div>
                                <div class="tm-gallery-content-wrapper">
                                    <div class="tm-gallery-content">
                                        <div class="tm-gallery-content-inner">
                                            <div class="icons-holder-inner">
                                                <div class="styled-icons icon-dark icon-circled icon-theme-colored1"> <a class="lightgallery-trigger styled-icons-item" data-exthumbimage="{{asset('frontend/images/gallery/2.jpg')}}" data-src="{{asset('frontend/images/gallery/1.jpg')}}" title="Project Title Here" href="{{asset('frontend/images/gallery/2.jpg')}}"><i class="fa fa-plus"></i></a> <a class="styled-icons-item" title="Project Title Here" href="#"><i class="fa fa-link"></i></a> </div>
                                            </div>
                                            <div class="title-holder">
                                                <h5 class="title"><a href="#">Project Title Here</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   --}}
            
                
                </div>
            </div>
        
        </div>

    </div>
    </div>
    </div>
    </div>
    </section>
    </div>
    

@endsection