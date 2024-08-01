@extends('frontend.app')
@section('pageTitle', 'Blog Details')
@section('content')

<section class="page-title divider layer-overlay section-typo-light" data-tm-bg-img="{{asset('uploads/images/'.$settings->banner)}}">
    <div class="container pt-90 pb-90">
    
    <div class="section-content">
    <div class="row">
    <div class="col-md-12 text-center">
    <h2 class="title text-white">{{Str::upper($blogDetail->name)}}</h2>
    <nav role="navigation" class="breadcrumb-trail breadcrumbs">
    <div class="breadcrumbs">
    <span class="trail-item trail-begin">
    <a href="{{url('/')}}"><span>Home</span></a>
    </span>
    <span><i class="fa fa-angle-right"></i></span>
    <span class="trail-item"><a href="{{route('blog')}}"><span>Blog</span></a></span>
    <span><i class="fa fa-angle-right"></i></span>
    <span itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end active"><span>News Details</span></span>
    </div>
    </nav>
    </div>
    </div>
    </div>
    </div>
</section>

<section>
    <div class="container pb-60">
        <div class="section-content">
                <div class="row">
                    <div class="col-sm-9">
                        <article class="post-single">
                            <div class="entry-header mb-30">
                                <div class="post-thumb thumb"> <img class="img-fullwidth" src="{{asset('uploads/blogs/'.$blogDetail->image)}}" alt></div>
                            </div>
                            <div class="entry-content">
                              
                                <h5>{{Str::upper($blogDetail->name)}}</h5>
                                <p>{!! $blogDetail->description !!}</p>
                                <blockquote class="tm-sc tm-sc-blockquote blockquote-style6  quote-icon-theme-colored  vc_custom_1549372952705">
                                <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution.</p>
                                <footer><cite>Someone famous</cite></footer>
                                </blockquote>
                                </div>
                        </article>
                    </div>
                    <div class="col-lg-3 sidebar-area sidebar-right">
                        <div class=" split-nav-menu clearfix widget widget_search">
                            <form role="search" method="get" class="search-form" action="#">
                            <input type="search" class="form-control search-field" placeholder="Search …" value name="s">
                            <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="split-nav-menu clearfix widget widget-blog-list clearfix">
                            <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Latest News</h4>
                            <div class="tm-widget tm-widget-blog-list ">
                                @foreach($blogposts as $item)
                                <article class="post media-post clearfix">
                                    <a class="post-thumb" href="{{route('blog.details', ['slug' => $item->slug])}}">
                                    <img width="100" height="70" src="{{asset('uploads/blogs/'.$item->image)}}" class alt>
                                    </a>
                                    <div class="post-right">
                                    <h6 class="post-title"> <a href="{{route('blog.details', ['slug' => $item->slug])}}">{{$item->name}}</a></h6>
                                    <span class="post-date">
                                    <span class="entry-date">{{ $item->updated_at->diffForHumans() }}</span>
                                    </span>
                                    </div>
                                </article>
                                @endforeach
                                
                                {{-- <article class="post media-post clearfix">
                                    <a class="post-thumb" href="#">
                                    <img width="100" height="70" src="images/blog/2.jpg" class alt>
                                    </a>
                                    <div class="post-right">
                                    <h6 class="post-title"> <a href="#"> A Cluster Randomized Trial </a></h6>
                                    <span class="post-date">
                                    <span class="entry-date">February 2, 2019</span>
                                    </span>
                                    </div>
                                </article>
                                <article class="post media-post clearfix">
                                    <a class="post-thumb" href="#">
                                    <img width="100" height="70" src="images/blog/3.jpg" class alt>
                                    </a>
                                    <div class="post-right">
                                    <h6 class="post-title"> <a href="#"> A Multilevel Examination of </a></h6>
                                    <span class="post-date">
                                    <span class="entry-date">February 2, 2019</span>
                                    </span>
                                    </div>
                                </article>
                                <article class="post media-post clearfix">
                                    <a class="post-thumb" href="#">
                                    <img width="100" height="70" src="images/blog/4.jpg" class alt>
                                    </a>
                                    <div class="post-right">
                                    <h6 class="post-title"> <a href="#"> Having studied war poetry </a></h6>
                                    <span class="post-date">
                                    <span class="entry-date">February 2, 2019</span>
                                    </span>
                                    </div>
                                </article> --}}
                            </div>
                        </div>
                        <div class="widget widget_categories">
                            <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Categories</h4>
                            <ul>
                                @foreach($serviceCategorys->take(4) as $item)
                                <li class="cat-item cat-item-16"><a href="{{route('services')}}"> {{Str::upper($item->name)}} </a></li>
                                   
                                @endforeach
                                {{-- <li class="cat-item cat-item-16"><a href="http://wp.kodesolution.live/business/educacion/v2/category/admission/">Admission</a></li>
                                <li class="cat-item cat-item-17"><a href="http://wp.kodesolution.live/business/educacion/v2/category/cultural-program/">Cultural Program</a></li>
                                <li class="cat-item cat-item-18"><a href="http://wp.kodesolution.live/business/educacion/v2/category/result/">Result</a></li> --}}
                            </ul>
                        </div>
                        {{-- <div class=" split-nav-menu clearfix widget widget_text">
                            <div class="textwidget">
                            <div class="section-typo-light text-center bg-theme-colored2 mb-md-40 p-30 pt-40 pb-40">
                            <p><img class="size-full wp-image-800 aligncenter" src="../../../../wp.kodesolution.live/business/finansico/demo/wp-content/uploads/sites/2/2018/12/headphone-128.html" alt width="128" height="128"></p>
                            <h4>Online Help!</h4>
                            <h5>+(123) 456-7890</h5>
                        </div> --}}
                    </div>
                    </div>
                    {{-- <div class=" split-nav-menu clearfix widget widget_text">
                        <div class="textwidget">
                            <div class="section-typo-light bg-theme-colored1 mb-md-40 p-30 pt-40 pb-40">
                                <p>Competently parallel task fully researched data and enterprise process improvements.</p>
                            <div class="tm-sc tm-sc-button"> <a href target="_self" class="btn btn-dark btn-sm btn-xs btn-round" rel="noopener noreferrer">Download PDF <i class="fa fa-file-pdf-o"></i></a></div>
                        </div>
                    </div> --}}
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</section>


@endsection