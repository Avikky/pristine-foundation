<!-- ======= Header ======= -->
<header id="header" class="header header-layout-type-header-2rows">
    <div class="header-top ">
        <div class="container">
            <div class="row">
                <div class="col-xl-auto header-top-left align-self-center text-center text-xl-left">
                    <ul class="element contact-info">
                        <li class="contact-phone"><i class="fa fa-phone font-icon sm-display-block"></i>
                            {{ $settings->phone }}</li>
                        <li class="contact-email"><i class="fa fa-envelope-o font-icon sm-display-block"></i>
                            {{ $settings->email }}</li>
                        <li class="contact-address"><i class="fa fa-map-o font-icon sm-display-block"></i>
                            {{ $settings->address }}</li>
                    </ul>
                </div>
                <div class="col-xl-auto ml-xl-auto header-top-right align-self-center text-center text-xl-right">
                    <div class="element">
                        <ul class="header-top-nav list-inline">
                            <li class="menu-item">
                              <a title="Home" class="menu-item-link" href="#" data-toggle="modal" data-target="#donationModal">
                                    <strong>Donate</strong>
                              </a>
                            </li>
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
                                        <img class="logo-default logo-1x"
                                            src="{{ asset('uploads/images/' . $settings->logo) }}" alt="Logo">
                                        <img class="logo-default logo-2x retina"
                                            src="{{ asset('uploads/images/' . $settings->logo) }}" alt="Logo">
                                    </a>
                                </div>
                                <div class="col-sm-auto ml-auto pr-0 align-self-center">
                                    <nav id="top-primary-nav" class="menuzord red" data-effect="fade"
                                        data-animation="none" data-align="right">
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
                                                <a href="{{ route('services') }}">Services</a>
                                            </li>

                                            <li class="nav-link {{ Request::routeIs('gallery') ? 'active' : '' }} ">
                                                <a href="{{ route('gallery') }}">Gallery</a>
                                            </li>
                                            <li class="nav-link {{ Request::routeIs('blog') ? 'active' : '' }} ">
                                                <a href="{{ route('blog') }}">Blog</a>
                                            </li>
                                            <li class="nav-link {{ Request::routeIs('contact') ? 'active' : '' }} ">
                                                <a href="{{ route('contact') }}">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="row d-block d-xl-none">
                                <div class="col-12">
                                    <nav id="top-primary-nav-clone"
                                        class="menuzord d-block d-xl-none default menuzord-color-default menuzord-border-boxed menuzord-responsive"
                                        data-effect="slide" data-animation="none" data-align="right" style>
                                        <ul id="main-nav-clone"
                                            class="menuzord-menu menuzord-right menuzord-indented scrollable">
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

<div class="modal fade" id="donationModal" tabindex="-1" role="dialog" aria-labelledby="donationModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Make an Impact Today</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="icon-wrapper text-center">
                  <a class="icon icon-type-image  icon-default">
                      <img src="{{ asset('frontend/images/icon/charity3.png') }}" alt="Image"></a>
              </div>
                <div class="icon-text text-center">
                    <h3 class="icon-box-title ">
                      Make an Impact Today
                    </h3>
                    <div class="content text-justify">
                      <p>Supporting Pristine Life Enhancement Foundation with your Donation helps us empower and uplift communities in need.</p>
                      <p>Every donation you make goes a long way in helping us achieve our mission of transforming lives and communities.</p>

                      <div class="text-center pa-5 mb-3" style="border: 2px dotted red;">
                        <h4>Bank Details</h4>
                        <p><strong>Bank Name:</strong> {{ $settings->bank }}</p>
                        <p><strong>Account Name:</strong> {{ $settings->acct_name }}</p>
                        <p><strong>Account Number: </strong>{{ $settings->acct_no }}</p>
                      </div>
                      
                      <p>
                        <strong><i>Please Ensure to contact us via our whatsapp livechat or email before or after donation</i></strong>
                      </p>
                      <p>Thank you for your support</p>
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
