@extends('frontend.app')
@section('pageTitle', 'Donation')
@section('content')

<section class="page-title divider layer-overlay section-typo-light" data-tm-bg-img="{{asset('uploads/images/'.$settings->banner)}}">
    <div class="container pt-90 pb-90">
    
        <div class="section-content">
        <div class="row">
        <div class="col-md-12 text-center">
        <h2 class="title text-white">Donation</h2>
        <nav role="navigation" class="breadcrumb-trail breadcrumbs">
        <div class="breadcrumbs">
        <span class="trail-item trail-begin">
        <a href="{{url('/')}}"><span>Home</span></a>
        </span>
        <span><i class="fa fa-angle-right"></i></span>
        <span itemscope itemtype="http://schema.org/ListItem" class="trail-item trail-end active"><span>Donation</span></span>
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
            <div class="col-md-6">
                <h2 class="title text-uppercase mt-0"><span class="">Make Your Donation</span> <span class="text-theme-colored1">
                Count</span></h2>
                {{-- <p>Your generosity can change lives. Make a donation and support our mission to empower communities and create lasting change.</p>
                <p>Join us in our mission to empower lives and build better futures!</p> --}}
                </div>
                </div>
            </div>
            <div class="section-content">
            <div class="row">
            <div class="col-sm-12 content-justify text-center">
            <div class="tm-sc tm-sc-works-categories tm-sc-works-categories-grid  style-floating">
                <p>Your generosity can change lives. Make a donation and support our mission to empower communities and create lasting change.</p>
                <p>Join us in our mission to empower lives and build better futures!</p>
        
            </div>
            </div>
            </div>
            </div>
            </div>
    </section>

    <section class="bg-silver-light">
        <div class="container pb-60">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="line-bottom line-bottom-theme-colored1">
                            <h3 class="text-uppercase mt-0">Make a Donation <span class="text-theme-colored1">Now</span></h3>
                        </div>            
                        <form id="paypal_donate_form_onetime_recurring-427267">
                            <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
                            <h5>Payment Type</h5>
                            <label class="radio-inline"><input type="radio" checked="" value="one_time" name="payment_type">One Time</label>
                            <label class="radio-inline"><input type="radio" value="recurring" name="payment_type">Recurring</label>
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group mb-20">
                            <h5>Donate for</h5>
                            <select name="item_name" class="form-control">
                            <option value="Child Camp for Education">Child Camp for Education</option>
                            <option value="Clean Water Program">Clean Water Program</option>
                            <option value="The Accessibility Fund">The Accessibility Fund</option>
                            </select>
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group mb-20">
                            <h5>Currency</h5>
                            <select name="currency_code" class="form-control">
                            <option value="">Select Currency</option>
                            <option value="USD">USD - U.S. Dollars</option>
                            <option value="AUD">AUD - Australian Dollars</option>
                            <option value="BRL">BRL - Brazilian Reais</option>
                            <option value="GBP">GBP - British Pounds</option>
                            <option value="HKD">HKD - Hong Kong Dollars</option>
                            <option value="HUF">HUF - Hungarian Forints</option>
                            <option value="INR">INR - Indian Rupee</option>
                            <option value="ILS">ILS - Israeli New Shekels</option>
                            <option value="JPY">JPY - Japanese Yen</option>
                            <option value="MYR">MYR - Malaysian Ringgit</option>
                            <option value="MXN">MXN - Mexican Pesos</option>
                            <option value="TWD">TWD - New Taiwan Dollars</option>
                            <option value="NZD">NZD - New Zealand Dollars</option>
                            <option value="NOK">NOK - Norwegian Kroner</option>
                            <option value="PHP">PHP - Philippine Pesos</option>
                            <option value="PLN">PLN - Polish Zlotys</option>
                            <option value="RUB">RUB - Russian Rubles</option>
                            <option value="SGD">SGD - Singapore Dollars</option>
                            <option value="SEK">SEK - Swedish Kronor</option>
                            <option value="CHF">CHF - Swiss Francs</option>
                            <option value="THB">THB - Thai Baht</option>
                            <option value="TRY">TRY - Turkish Liras</option>
                            </select>
                            </div>
                            </div>
                            <div class="col-sm-12">
                            <div class="form-group mb-20">
                            <h5>Donation Amount</h5>
                            <select id="amount-427267" name="amount" class="form-control">
                            <option value="10">10</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="200">200</option>
                            <option value="500">500</option>
                            <option value="1000">1000</option>
                            <option value="other">Other Amount</option>
                            </select>
                            </div>
                            </div>
                            <div class="col-sm-12">
                            <div class="form-group">
                            <button type="submit" class="btn btn-theme-colored1" data-loading-text="Please wait...">Donate Now</button>
                            </div>
                            </div>
                            </div>
                            </form>
                            
                            
                            <form id="paypal_donate_form-onetime-427267" class="d-none" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_donations">
                            <input type="hidden" name="business" value="accounts@thememascot.com">
                            <input type="hidden" name="item_name" value=""> 
                            <input type="hidden" name="currency_code" value="USD"> 
                            <input type="hidden" name="amount" value="20"> 
                            <input type="hidden" name="no_shipping" value="1">
                            <input type="hidden" name="cn" value="Comments...">
                            <input type="hidden" name="tax" value="0">
                            <input type="hidden" name="lc" value="US">
                            <input type="hidden" name="bn" value="PP-DonationsBF">
                            <input type="hidden" name="return" value="">
                            <input type="hidden" name="cancel_return" value="">
                            <input type="hidden" name="notify_url" value="">
                            <input type="submit" name="submit">
                            </form>
                            
                            <form id="paypal_donate_form-recurring-427267" class="d-none" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_xclick-subscriptions">
                            <input type="hidden" name="business" value="accounts@thememascot.com">
                            <input type="hidden" name="item_name" value=""> 
                            <input type="hidden" name="currency_code" value="USD"> 
                            <input type="hidden" name="a3" value="20"> 
                            <input type="hidden" name="t3" value="D"> 
                            <input type="hidden" name="p3" value="1">
                            <input type="hidden" name="rm" value="2">
                            <input type="hidden" name="src" value="1">
                            <input type="hidden" name="sra" value="1">
                            <input type="hidden" name="no_shipping" value="0">
                            <input type="hidden" name="no_note" value="1">
                            <input type="hidden" name="lc" value="US">
                            <input type="hidden" name="bn" value="PP-DonationsBF">
                            <input type="hidden" name="return" value="">
                            <input type="hidden" name="cancel_return" value="">
                            <input type="hidden" name="notify_url" value="">
                            <input type="submit" name="submit">
                        </form>            
                    </div>
                    <div class="col-md-2"></div>
                    {{-- <div class="col-md-6">
                                <div class="vc_column-inner vc_custom_1518705459711">
                                    <div class="wpb_wrapper">
                                        <div class="line-bottom line-bottom-theme-colored1">
                                            <h3 class="text-uppercase mt-0">Client <span class="text-theme-colored1">Testimonials</span></h3>
                                        </div>
                                            <div class="tm-sc tm-sc-testimonials tm-sc-testimonials-carousel testimonial-style1-simple owl-dots-light-skin owl-dots-left testimonial-has-quote-icon text-left">
                                
                                                <div class="owl-carousel owl-theme tm-owl-carousel-1col owl-loaded owl-drag" data-dots="true" data-autoplay="true" data-loop="true" data-duration="2000" data-margin="30">          
                                
                                                    <div class="owl-stage-outer owl-height" style="height: 253px;"><div class="owl-stage" style="transition: all 0.25s ease 0s; width: 3297px; transform: translate3d(-1413px, 0px, 0px);"><div class="owl-item cloned" style="width: 471px;"><div class="tm-carousel-item">
                                                            <div class="tm-testimonial testimonials type-testimonials status-publish">
                                                                <div class="testimonial-inner">
                                                                    <div class="testimonial-text-holder">
                                                                        <div class="author-text">
                                                                            Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.
                                                                        </div>
                                                                        <div class="star-rating">
                                                                            <span data-tm-width="90%" style="width: 90%;"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="testimonial-author-details">
                                                                        <div class="testimonial-image-holder">
                                                                            <div class="author-thumb">
                                                                                <img width="100" height="100" src="images/testimonials/2.jpg" class="img-thumbnail rounded-circle wp-post-image" alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="testimonial-author-info-holder">
                                                                            <span class="name">Ismo Duo</span>
                                                                            <span class="job-position">C.E.O</span>
                                                                                <a class="company-url" href="http://www.kodesolution.com/">kodesolution</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                </div></div><div class="owl-item cloned" style="width: 471px;"><div class="tm-carousel-item">
                                        <div class="tm-testimonial testimonials type-testimonials status-publish">
                                    <div class="testimonial-inner">
                                <div class="testimonial-text-holder">
                            <div class="author-text">
                            Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.
                            </div>
                            <div class="star-rating">
                            <span data-tm-width="100%" style="width: 100%;"></span>
                            </div>
                            </div>
                            <div class="testimonial-author-details">
                            <div class="testimonial-image-holder">
                            <div class="author-thumb">
                            <img width="100" height="100" src="images/testimonials/3.jpg" class="img-thumbnail rounded-circle wp-post-image" alt="">
                            </div>
                            </div>
                            <div class="testimonial-author-info-holder">
                            <span class="name">Zakaria jacon</span>
                            <span class="job-position">Employee</span>
                            <a class="company-url" href="http://www.kodesolution.com/">kodesolution</a>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div></div><div class="owl-item" style="width: 471px;"><div class="tm-carousel-item">
                            <div class="tm-testimonial post-15583 testimonials type-testimonials status-publish has-post-thumbnail hentry">
                            <div class="testimonial-inner">
                            <div class="testimonial-text-holder">
                            <div class="author-text">
                            Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.
                            </div>
                            <div class="star-rating">
                            <span data-tm-width="80%" style="width: 80%;"></span>
                            </div>
                            </div>
                            <div class="testimonial-author-details">
                            <div class="testimonial-image-holder">
                            <div class="author-thumb">
                            <img width="100" height="100" src="images/testimonials/3.jpg" class="img-thumbnail rounded-circle wp-post-image" alt="">
                            </div>
                            </div>
                            <div class="testimonial-author-info-holder">
                            <span class="name">Masa Daw</span>
                            <span class="job-position">Employee</span>
                            <a class="company-url" href="http://www.kodesolution.com/">kodesolution</a>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div></div><div class="owl-item active center" style="width: 471px;"><div class="tm-carousel-item">
                            <div class="tm-testimonial testimonials type-testimonials status-publish">
                            <div class="testimonial-inner">
                            <div class="testimonial-text-holder">
                            <div class="author-text">
                            Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.
                            </div>
                            <div class="star-rating">
                            <span data-tm-width="90%" style="width: 90%;"></span>
                            </div>
                            </div>
                            <div class="testimonial-author-details">
                            <div class="testimonial-image-holder">
                            <div class="author-thumb">
                            <img width="100" height="100" src="images/testimonials/2.jpg" class="img-thumbnail rounded-circle wp-post-image" alt="">
                            </div>
                            </div>
                            <div class="testimonial-author-info-holder">
                            <span class="name">Ismo Duo</span>
                            <span class="job-position">C.E.O</span>
                            <a class="company-url" href="http://www.kodesolution.com/">kodesolution</a>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div></div><div class="owl-item" style="width: 471px;"><div class="tm-carousel-item">
                            <div class="tm-testimonial testimonials type-testimonials status-publish">
                            <div class="testimonial-inner">
                            <div class="testimonial-text-holder">
                            <div class="author-text">
                            Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.
                            </div>
                            <div class="star-rating">
                            <span data-tm-width="100%" style="width: 100%;"></span>
                            </div>
                            </div>
                            <div class="testimonial-author-details">
                            <div class="testimonial-image-holder">
                            <div class="author-thumb">
                            <img width="100" height="100" src="images/testimonials/3.jpg" class="img-thumbnail rounded-circle wp-post-image" alt="">
                            </div>
                            </div>            
                            <div class="testimonial-author-info-holder">
                            <span class="name">Zakaria jacon</span>
                            <span class="job-position">Employee</span>
                            <a class="company-url" href="http://www.kodesolution.com/">kodesolution</a>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div></div><div class="owl-item cloned" style="width: 471px;"><div class="tm-carousel-item">
                            <div class="tm-testimonial post-15583 testimonials type-testimonials status-publish has-post-thumbnail hentry">
                            <div class="testimonial-inner">
                            <div class="testimonial-text-holder">
                            <div class="author-text">
                            Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.
                            </div>
                            <div class="star-rating">
                            <span data-tm-width="80%" style="width: 80%;"></span>
                            </div>
                            </div>
                            <div class="testimonial-author-details">
                            <div class="testimonial-image-holder">
                            <div class="author-thumb">
                            <img width="100" height="100" src="images/testimonials/3.jpg" class="img-thumbnail rounded-circle wp-post-image" alt="">
                            </div>
                            </div>
                            <div class="testimonial-author-info-holder">
                            <span class="name">Masa Daw</span>
                            <span class="job-position">Employee</span>
                            <a class="company-url" href="http://www.kodesolution.com/">kodesolution</a>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div></div><div class="owl-item cloned" style="width: 471px;"><div class="tm-carousel-item">
                            <div class="tm-testimonial testimonials type-testimonials status-publish">
                            <div class="testimonial-inner">
                            <div class="testimonial-text-holder">
                            <div class="author-text">
                            Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.
                            </div>
                            <div class="star-rating">
                            <span data-tm-width="90%" style="width: 90%;"></span>
                            </div>
                            </div>
                            <div class="testimonial-author-details">
                            <div class="testimonial-image-holder">
                            <div class="author-thumb">
                            <img width="100" height="100" src="images/testimonials/2.jpg" class="img-thumbnail rounded-circle wp-post-image" alt="">
                            </div>
                            </div>
                            <div class="testimonial-author-info-holder">
                            <span class="name">Ismo Duo</span>
                            <span class="job-position">C.E.O</span>
                            <a class="company-url" href="http://www.kodesolution.com/">kodesolution</a>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div></div></div></div><div class="owl-nav disabled"><button role="presentation" class="owl-prev"><i class="fa fa-chevron-left"></i></button><button role="presentation" class="owl-next"><i class="fa fa-chevron-right"></i></button></div><div class="owl-dots"><button class="owl-dot"><span></span></button><button class="owl-dot active"><span></span></button><button class="owl-dot"><span></span></button></div></div>
                            </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div> --}}
        </div>
    </section>

@endsection