@extends('frontend.app')
@section('pageTitle', 'Blogs')
@section('content')

<section class="page-title divider layer-overlay section-typo-light" data-tm-bg-img="{{asset('uploads/images/'.$settings->banner)}}">
        <div class="container pt-90 pb-90">              
        <div class="section-content">
        <div class="row">
        <div class="col-md-12 text-center">
        <h2 class="title text-white">Blog</h2>
        <nav role="navigation" class="breadcrumb-trail breadcrumbs">
        <div class="breadcrumbs">
        <span class="trail-item trail-begin">
        <a href="{{url('/')}}"><span>Home</span></a>
        </span>
        <span><i class="fa fa-angle-right"></i></span>
        <span itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end active"><span>Blog</span></span>
        </div>
        </nav>
        </div>
        </div>
        </div>
        </div>
    </section>

    <section>
        <div class="container pb-60">
            <div class="section-title text-center mb-40">
                <div class="row justify-content-md-center">
                    <div class="col-md-10">
                        <h2 class="title text-uppercase mt-0"><span class>Our Health</span> <span class="text-theme-colored1">Wellness Insight</span></h2>
                        <p>Welcome to the Health and Wellness Insights blog! Here, you'll find valuable information, inspiring stories, and expert advice related to our core programs: Eye Institute Hospital, Health Education, Malaria Control, and Medical Supply. Whether you're looking for tips on maintaining good health, updates on our latest initiatives, or heartwarming stories from the field, our blog is your go-to resource.</p>
                    </div>
                </div>
            </div>    
        <div class="section-content">
        <div class="row">
        <div class="col-sm-12">
        <div class="tm-sc tm-sc-blog tm-sc-blog-grid blog-style2-standard">
        
        <div class="isotope-layout grid-3 clearfix">
            @foreach($blogposts as $item)
            <div class="isotope-item home">
                <article class="post type-post status-publish format-standard">
                    <div class="entry-header">
                    <div class="post-thumb thumb lightgallery-lightbox">
                    <div class="box-hover-effect">
                    <div class="effect-wrapper">
                    <div class="thumb">
                    <a href="news-details.html" title="Adopt Orphan Child"><img width="360" height="240" src="{{asset('uploads/blogs/'.$item->image)}}" alt></a>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="entry-content">
                    
                    <h4 class="entry-title"><a href="{{route('blog.details', ['slug' => $item->slug])}}" rel="bookmark">{{$item->name}}</a></h4>
                    {{-- <ul class="entry-meta list-inline">
                    <li class="list-inline-item author"><i class="fa fa-user-o"></i> <span class="byline">By <span class="author vcard"><a class="url fn n" href="#" rel="author">jakaria</a></span></span></li>
                    <li class="list-inline-item posted-date"><i class="fa fa-calendar-o"></i> <a href="#" rel="bookmark">February 21, 2019</a></li>
                    </ul> --}}
                    <div class="post-excerpt">
                    <div class="mascot-post-excerpt">{!!strip_tags(Str::limit($item->description, 200, 0)) !!}</div>
                    </div>
                    <div class="post-btn-readmore mt-20">
                    <a href="{{route('blog.details', ['slug' => $item->slug])}}" class="btn btn-theme-colored1 btn-sm">
                    View Details</a>
                    </div>
                    <div class="clearfix"></div>
                    </div>
                </article>
            </div>
            @endforeach

            {{-- <div class="isotope-item medicine">
                <article class="post type-post status-publish format-standard">
                <div class="entry-header">
                <div class="post-thumb thumb lightgallery-lightbox">
                <div class="box-hover-effect">
                <div class="effect-wrapper">
                <div class="thumb">
                <a href="news-details.html" title="Provide Healthy Food"><img width="360" height="240" src="{{asset('frontend/images/blog/2.jpg')}}" alt></a>
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
                                        <a href="news-details.html" title="School For Poor"><img width="360" height="240" src="{{asset('frontend/images/blog/3.jpg')}}" alt></a>
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
            </div>

            <div class="isotope-item medicine">
                <article class="post type-post status-publish format-standard">
                    <div class="entry-header">
                    <div class="post-thumb thumb lightgallery-lightbox">
                    <div class="box-hover-effect">
                    <div class="effect-wrapper">
                    <div class="thumb">
                    <a href="news-details.html" title="Provide Healthy Food"><img width="360" height="240" src="{{asset('frontend/images/blog/2.jpg')}}" alt></a>
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
                    <a href="news-details.html" title="School For Poor"><img width="360" height="240" src="{{asset('frontend/images/blog/3.jpg')}}" alt></a>
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
            </div>


            <div class="isotope-item home">
                <article class="post type-post status-publish format-standard">
                        <div class="entry-header">
                        <div class="post-thumb thumb lightgallery-lightbox">
                        <div class="box-hover-effect">
                        <div class="effect-wrapper">
                        <div class="thumb">
                        <a href="news-details.html" title="Adopt Orphan Child"><img width="360" height="240" src="{{asset('frontend/images/blog/1.jpg')}}" alt></a>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        <div class="entry-content">
                        
                        <h4 class="entry-title"><a href="news-details.html" rel="bookmark">Adopt Orphan Child</a></h4>
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
            </div> --}}
        
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>


@endsection