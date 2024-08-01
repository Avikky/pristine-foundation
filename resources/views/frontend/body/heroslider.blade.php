<!-- ======= Hero Section ======= -->
<section id="home" class>
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col">
          <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34">  
            <div id="rev_slider_home" class="rev_slider fullwidthabanner" data-version="5.0.7">
              <ul>  
                @foreach($sliders as $key => $slider)
                  
                    <li data-index="rs-{{$key}}" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{asset('uploads/slider/'.$slider->image)}}" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Slide One">  
                      <img src="{{asset('uploads/slider/'.$slider->image)}}" alt data-bgposition="center 20%" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>  
 
                         {{-- <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-1" data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['215','130','110','120']" data-fontsize="['20','18','16','13']" data-lineheight="['30','30','28','25']" data-fontweight="['700','700','700','700']" data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Making Best Future </div> --}}
             
                         <div class="tp-caption tp-resizeme text-white text-uppercase font-montserrat rs-parallaxlevel-0" id="slide-1-layer-2" data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['250','160','140','150']" data-fontsize="['52','46','40','28']" data-lineheight="['68','60','54','42']" data-fontweight="['800','800','800','800']" data-width="['700','650','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">{{$slider->title}}</div>
                         <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-3" data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['325','220','195','195']" data-fontsize="['16','16','14','13']" data-lineheight="['30','26','24','20']" data-fontweight="['400','400','400','400']" data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">{{$slider->description}}</div>
                         
                         <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-1-layer-4" data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']" data-y="['top','top','top','top']" data-voffset="['410','290','260','250']" data-fontsize="['18','18','16','16']" data-lineheight="['30','30','30','30']" data-fontweight="['600','600','600','600']" data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"><a href="{{route('donation')}}" class="btn btn-dark btn-circled btn-round btn-theme-colored1 mr-10 pr-30 pl-30">Donate Now</a> <a href="{{route('about.us')}}" class="btn btn-light btn-round pr-30 pl-30">Read More</a>  </div>
                   </li>
                  
                   @endforeach
                    {{--<li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg12.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Slide Two">
                              
                              <img src="{{asset('frontend/images/bg/bg12.jpg')}}" alt data-bgposition="center 20%" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                              
                              
                              <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-2-layer-1" data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['215','130','110','120']" data-fontsize="['20','18','16','13']" data-lineheight="['30','30','28','25']" data-fontweight="['700','700','700','700']" data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Start Learning For</div>
                              
                              <div class="tp-caption tp-resizeme text-white text-uppercase font-montserrat rs-parallaxlevel-0" id="slide-2-layer-2" data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['250','160','140','150']" data-fontsize="['52','46','40','28']" data-lineheight="['68','60','54','42']" data-fontweight="['800','800','800','800']" data-width="['700','650','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">Successful Future </div>
                              
                              <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-2-layer-3" data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['325','220','195','195']" data-fontsize="['16','16','14','13']" data-lineheight="['30','26','24','20']" data-fontweight="['400','400','400','400']" data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">We provides always our best services for our students and always<br> try to achieve making a bright successful future.</div>
                              
                              <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-2-layer-4" data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']" data-y="['top','top','top','top']" data-voffset="['410','290','260','250']" data-fontsize="['18','18','16','16']" data-lineheight="['30','30','30','30']" data-fontweight="['600','600','600','600']" data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"><a href="#" class="btn btn-light btn-circled btn-xl mr-10 pr-30 pl-30">Donate Now</a> <a href="#" class="btn btn-theme-colored1 btn-border btn-circled btn-xl pr-30 pl-30">Register Now</a> </div>
                          </li>
                    
                    <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/bg/bg13.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Slide Three">
                      
                      <img src="{{asset('frontend/images/bg/bg13.jpg')}}" alt data-bgposition="center 20%" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                      
                      
                      <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-3-layer-1" data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['215','130','110','120']" data-fontsize="['20','18','16','13']" data-lineheight="['30','30','28','25']" data-fontweight="['700','700','700','700']" data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">Join Today for Start
                      </div>
                      
                      <div class="tp-caption tp-resizeme text-white text-uppercase font-montserrat rs-parallaxlevel-0" id="slide-3-layer-2" data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['250','160','140','150']" data-fontsize="['52','46','40','28']" data-lineheight="['68','60','54','42']" data-fontweight="['800','800','800','800']" data-width="['700','650','600','420']" data-height="none" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;">Help Poor People
                      </div>
                      
                      <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-3-layer-3" data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" data-y="['top','top','top','top']" data-voffset="['325','220','195','195']" data-fontsize="['16','16','14','13']" data-lineheight="['30','26','24','20']" data-fontweight="['400','400','400','400']" data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">We provides always our best services for our students and always<br> try to achieve making a bright successful future.
                        </div>
                        
                        <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" id="slide-3-layer-4" data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']" data-y="['top','top','top','top']" data-voffset="['410','290','260','250']" data-fontsize="['18','18','16','16']" data-lineheight="['30','30','30','30']" data-fontweight="['600','600','600','600']" data-width="['700','650','600','420']" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1000;e:Power3.easeInOut;" data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;"><a href="#" class="btn btn-dark btn-circled btn-theme-colored1 btn-xl mr-10 pr-30 pl-30">Start Now</a> <a href="#" class="btn btn-light btn-border btn-circled btn-xl pr-30 pl-30">Donate Now</a>
                        </div>
                    </li> --}}
              </ul>
              
              
          
                          <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(255, 255, 255, 0.4);"></div>
            </div>
      </div>
                          
            <script data-cfasync="false" src="{{asset('frontend/../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script>
                    var tpj=jQuery;         
                    var revapi34;
                    tpj(document).ready(function() {
                      if(tpj("#rev_slider_home").revolution == undefined){
                        revslider_showDoubleJqueryError("#rev_slider_home");
                      }else{
                        revapi34 = tpj("#rev_slider_home").show().revolution({
                          sliderType:"standard",
                          jsFileLocation:"js/revolution-slider/js/",
                          sliderLayout:"fullwidth",
                          dottedOverlay:"none",
                          delay:9000,
                          navigation: {
                            keyboardNavigation:"on",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation:"off",
                            onHoverStop:"on",
                            touch:{
                              touchenabled:"on",
                              swipe_threshold: 75,
                              swipe_min_touches: 1,
                              swipe_direction: "horizontal",
                              drag_block_vertical: false
                            }
                            ,
                            arrows: {
                              enable: true,
                              style: 'gyges',
                              left: {
                                  h_align: "left",
                                  v_align: "center",
                                  h_offset: 0,
                                  v_offset: 0
                              },
                              right: {
                                  h_align: "right",
                                  v_align: "center",
                                  h_offset: 0,
                                  v_offset: 0
                              }
                            },
                            bullets: {
                              enable: true,
                              style: 'hebe',
                              tmp: '<span class="tp-bullet-image"></span>',
                              hide_onmobile:true,
                              hide_under:600,
                              hide_onleave:true,
                              hide_delay:200,
                              hide_delay_mobile:1200,
                              direction:"horizontal",
                              h_align:"center",
                              v_align:"bottom",
                              h_offset:0,
                              v_offset:30,
                              space:5
                            }
                          },
                          viewPort: {
                            enable:true,
                            outof:"pause",
                            visible_area:"80%"
                          },
                          responsiveLevels:[1240,1024,778,480],
                          gridwidth:[1240,1024,778,480],
                          gridheight:[660,550,500,450],
                          lazyType:"none",
                          parallax: {
                            type:"scroll",
                            origo:"enterpoint",
                            speed:400,
                            levels:[5,10,15,20,25,30,35,40,45,50],
                          },
                          shadow:0,
                          spinner:"off",
                          stopLoop:"off",
                          stopAfterLoops:-1,
                          stopAtSlide:1,
                          shuffle:"off",
                          autoHeight:"off",
                          hideThumbsOnMobile:"off",
                          hideSliderAtLimit:0,
                          hideCaptionAtLimit:0,
                          hideAllCaptionAtLilmit:0,
                          debugMode:false,
                          fallbacks: {
                            simplifyAll:"off",
                            nextSlideOnWindowFocus:"off",
                            disableFocusListener:false,
                          }
                        });
                      }
                    }); /*ready*/
            </script>
  
        </div>
       </div>
    </div>
</section>
  <!-- End Hero Section -->