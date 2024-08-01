@extends('frontend.app')
@section('pageTitle', 'Contact')
@section('content')

 <!-- ======= Breadcrumbs ======= -->
 <section class="page-title divider layer-overlay section-typo-light" data-tm-bg-img="{{asset('uploads/images/'.$settings->banner)}}">
  <div class="container pt-90 pb-90">
  
  <div class="section-content">
  <div class="row">
  <div class="col-md-12 text-center">
  <h2 class="title">Contact Us</h2>
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
  <div class="container pb-0">
  <div class="section-content">
  <div class="row">
  <div class="col-md-6 col-lg-4 mb-md-30">
  <div class="tm-sc tm-sc-icon-box icon-box icon-top text-center iconbox-box-shadow iconbox-default-padding iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-top feature-box bg-white p-20">
  <div class="icon-wrapper">
  <a class="icon icon-type-font-icon icon-md icon-dark icon-circled mb-15">
  <i class="icomoon-global"></i>
  </a>
  </div>
  <div class="icon-text">
  <h3 class="icon-box-title ">
  Office Location
  </h3>
  <div class="content">
  <p>{{$settings->address}}</p>
  </div>
  </div>
  <div class="clearfix"></div>
  </div>
  </div>
  <div class="col-md-6 col-lg-4 mb-md-30">
  <div class="tm-sc tm-sc-icon-box icon-box icon-top text-center iconbox-box-shadow iconbox-default-padding iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-top feature-box bg-white p-20">
  <div class="icon-wrapper">
  <a class="icon icon-type-font-icon icon-md icon-dark icon-circled mb-15">
  <i class="icomoon-Phone2"></i>
  </a>
  </div>
  <div class="icon-text">
  <h3 class="icon-box-title ">
  Phone No
  </h3>
  <div class="content">
  <p>{{$settings->phone}}</p>
  </div>
  </div>
  <div class="clearfix"></div>
  </div>
  </div>
  <div class="col-md-6 col-lg-4">
  <div class="tm-sc tm-sc-icon-box icon-box icon-top text-center iconbox-box-shadow iconbox-default-padding iconbox-centered-in-responsive iconbox-theme-colored1 icon-position-icon-top feature-box bg-white p-20">
  <div class="icon-wrapper">
  <a class="icon icon-type-font-icon icon-md icon-dark icon-circled mb-15">
  <i class="icomoon-Mail"></i>
  </a>
  </div>
  <div class="icon-text">
  <h3 class="icon-box-title ">
  Email Us
  </h3>
  <div class="content">
  <p>{{$settings->email}}</p>
  </div>
  </div>
  <div class="clearfix"></div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  
  <section id="contact">
  <div class="container pb-sm-10">
  <div class="row">
  <div class="col-md-5">
    <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Plot+12+Timothy+Lane,+Rumuola.+Port+Harcourt&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>

  {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7496.556775569473!2d144.95479118909844!3d-37.81548660764023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sbd!4v1562002563953!5m2!1sen!2sbd" width="600" height="650" allowfullscreen></iframe> --}}
  </div>
  <div class="col-md-7">
  <h3 class="line-bottom mt-sm-30 mt-0 mb-30">Donate Today!</h3>
  <p class="lead">Your Donation will help to empower and uplift challenge individuals</p>
  
  <form id="contact_form" class action="{{route('add.contact')}}" method="post">
    @csrf
  <div class="row">
  <div class="col-sm-6">
  <div class="form-group">
  <label>Name <small>*</small></label>
  <input name="name" class="form-control" type="text" placeholder="Enter Name" required>
  </div>
  </div>
  <div class="col-sm-6">
  <div class="form-group">
  <label>Email <small>*</small></label>
  <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
  </div>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-6">
  <div class="form-group">
  <label>Subject <small>*</small></label>
  <input name="subject" class="form-control required" type="text" placeholder="Enter Subject">
  </div>
  </div>
  <div class="col-sm-6">
  <div class="form-group">
  <label>Phone</label>
  <input name="phone" class="form-control" type="text" placeholder="Enter Phone">
  </div>
  </div>
  </div>
  <div class="form-group">
  <label>Message</label>
  <textarea name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
  </div>
  <div class="form-group">
  {{-- <input name="form_botcheck" class="form-control" type="hidden" value /> --}}
  <button type="submit" class="btn btn-dark btn-theme-colored1 btn-flat" data-loading-text="Please wait...">Send your message</button>
  </div>
  </form>
  
    {{-- <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
                (function($) {
                  $("#contact_form").validate({
                    submitHandler: function(form) {
                      var form_btn = $(form).find('button[type="submit"]');
                      var form_result_div = '#form-result';
                      $(form_result_div).remove();
                      form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                      var form_btn_old_msg = form_btn.html();
                      form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                      $(form).ajaxSubmit({
                        dataType:  'json',
                        success: function(data) {
                          if( data.status === 'true' ) {
                            $(form).find('.form-control').val('');
                          }
                          form_btn.prop('disabled', false).html(form_btn_old_msg);
                          $(form_result_div).html(data.message).fadeIn('slow');
                          setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                        }
                      });
                    }
                  });
                })(jQuery);
    </script> --}}

  </div>
  </div>
  </div>
  </section>
  </div>

 @endsection