



<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="footer-widget-area">
  <div class="container pt-90 pb-60">
  <div class="row">
  <div class="col-sm-6 col-md-6 col-lg-3">
  <div class=" split-nav-menu clearfix widget widget-contact-info clearfix">
  <div class="tm-widget tm-widget-contact-info contact-info contact-info-style1  contact-icon-theme-colored1">
  <div class="thumb">
  <img alt="Logo" src="{{asset('uploads/images/'.$settings->logo)}}">
  </div>
  <div class="description">{{$settings->address}}</div>
  <ul>
  <li class="contact-email">
  <div class="icon"><i class="icon-globe"></i></div>
  <div class="text"><a href="#">{{$settings->email}}</a></div>
  </li>
  </ul>
  </div>
  </div>
  <div class=" split-nav-menu clearfix widget widget-social-list-custom clearfix">
  <h4 class="widget-title ">Social List</h4>
  <ul class="tm-widget tm-widget-social-list tm-widget-social-list-custom styled-icons  icon-dark  icon-rounded icon-theme-colored1 ">
  <li><a class="social-link" href="https://web.facebook.com/pristinelifeenhancementfoundation" target="_blank"><i class="fa fa-facebook"></i></a></li>
  <li><a class="social-link" href="#"><i class="fa fa-twitter"></i></a></li>
  <li><a class="social-link" href="#"><i class="fa fa-youtube"></i></a></li>
  <li><a class="social-link" href="#"><i class="fa fa-instagram"></i></a></li>
  </ul>
  </div>
  </div>
  <div class="col-sm-6 col-md-6 col-lg-3">
  <div class="widget widget_nav_menu">
  <h4 class="widget-title ">Useful Links</h4>
  <div class="menu-quick-links-container">
  <ul class="menu">
  <li id="menu-item-16307" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16307"><a href="{{route('about.us')}}">About Us</a></li>
  <li id="menu-item-16308" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16308"><a href="{{route('services')}}">Services</a></li>
  <li id="menu-item-16310" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16310"><a href="{{route('blog')}}">Blog</a></li>
  <li id="menu-item-16311" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16311"><a href="{{route('donation')}}">Donate</a></li>
  <li id="menu-item-16309" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16309"><a href="{{route('contact')}}">Contact us</a></li>
  </ul>
  </div>
  </div>
  </div>
  <div class="col-sm-6 col-md-6 col-lg-3">
  <div class=" split-nav-menu clearfix widget widget-blog-list clearfix">
  <h4 class="widget-title ">Latest Events</h4>
  <div class="tm-widget tm-widget-blog-list ">

    @foreach($blogposts as $item)
      <article class="post media-post clearfix"> <a class="post-thumb" href="{{route('blog.details', ['slug' => $item->slug])}}"><img width="100" height="70" src="{{asset('uploads/blogs/'.$item->image)}}" class alt /></a>
          <div class="post-right">
              <h5 class="post-title"> <a href="{{route('blog.details', ['slug' => $item->slug])}}">{{$item->name}} </a> </h5>
            <span class="post-date">
            <time class="entry-date" datetime="2019-05-15T06:10:26+00:00">{{ $item->updated_at->diffForHumans() }}</time>
            </span> 
          </div>
      </article>
  @endforeach
  
  </div>
  </div>
  </div>
  <div class="col-sm-6 col-md-6 col-lg-3">
  <div class=" split-nav-menu clearfix widget widget-opening-hours-compressed clearfix">
  <h4 class="widget-title ">Opening Hours</h4>
  <ul class="tm-widget tm-widget-opening-hours tm-widget-opening-hours-compressed opening-hours border-dark">
  <li class="clearfix"> <span>Monday - Tuesday</span>
  <div class="value">9.00 - 17.00</div>
  </li>
  <li class="clearfix"> <span>Wednesday</span>
  <div class="value">9.00 - 16.00</div>
  </li>
  <li class="clearfix"> <span>Thursday - Friday</span>
  <div class="value">9.00 - 16.00</div>
  </li>
  <li class="clearfix"> <span>Saturday</span>
  <div class="value">9.00 - 16.00</div>
  </li>
  <li class="clearfix"> <span>Sunday</span>
  <div class="value">Closed</div>
  </li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  <div class="footer-bottom" data-tm-bg-color="#2A2A2A">
  <div class="container">
  <div class="row pt-20 pb-20">
  <div class="col-sm-8">
  <div class="footer-paragraph">
  © 2024 Pristine Life Enhancement Foundation. All Rights Reserved.
  </div>
  </div>
  <div class="col-sm-4">
  <div class="footer-paragraph text-right">
  Powered by Arecent Solutions
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </footer>
  <!-- End Footer -->