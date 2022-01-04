<!DOCTYPE html>
<html lang="en">

@include('includes.head')
<body>

<div id="preloader" class="tlp-preloader">
    <div class="animation-preloader">
        <div class="tlp-spinner"></div>
        <img src="{{asset('logo-black.png')}}" alt="Preloader">
    </div>
</div>

<div id="wrapper" class="wrapper">
    <a href="#main_content" data-type="section-switch" class="return-to-top">
        <i class="fas fa-angle-double-up"></i>
    </a>

    <div id="main_content">

    @include('includes.header')
    <!--=====================================-->
        <!--=         Main Banner Start         =-->
        <!--=====================================-->
        <section class="main-banner-wrap-layout1 bg-gradient-layout1 has-animation">
            <ul class="animated-figure">
                <li>
                    <div class="translate-left-75 opacity-animation transition-200 transition-delay-10">
                        <svg width="678px" height="575px">
                            <defs>
                                <linearGradient id="shape-gradient1" x1="0%" x2="50%" y1="86.603%" y2="0%">
                                    <stop offset="0%" stop-color="rgb(82,63,255)" stop-opacity="0.21"/>
                                    <stop offset="100%" stop-color="rgb(104,2,198)" stop-opacity="0.21"/>
                                </linearGradient>
                            </defs>
                            <path fill="url(#shape-gradient1)"
                                  d="M8.774,72.637 C24.335,32.328 64.598,1.818 107.846,0.977 C153.529,0.088 193.846,29.308 228.367,59.201 C262.888,89.095 297.864,122.295 342.435,132.337 C395.990,144.404 451.255,120.277 506.077,123.221 C581.185,127.255 647.967,185.940 669.010,258.060 C690.054,330.177 668.236,411.294 619.856,468.811 C571.474,526.325 499.170,561.071 424.701,571.631 C341.448,583.438 251.586,564.649 188.145,509.531 C153.304,479.260 128.229,437.550 117.609,392.681 C109.183,357.083 116.362,318.069 105.755,283.272 C94.490,246.320 59.108,232.772 35.167,205.579 C3.816,169.968 -8.566,117.557 8.774,72.637 Z"/>
                        </svg>
                    </div>
                </li>
                <li>
                    <div class="translate-right-75 opacity-animation transition-200 transition-delay-500">
                        <svg width="478px" height="406px">
                            <defs>
                                <linearGradient id="shape-gradient2" x1="0%" x2="50%" y1="86.603%" y2="0%">
                                    <stop offset="0%" stop-color="rgb(82,63,255)" stop-opacity="0.21"/>
                                    <stop offset="100%" stop-color="rgb(141,34,240)" stop-opacity="0.21"/>
                                </linearGradient>
                            </defs>
                            <path fill="url(#shape-gradient2)"
                                  d="M57.512,28.844 C41.937,43.215 29.659,61.585 21.596,80.726 C10.238,107.690 5.415,136.934 2.113,166.013 C-8.559,260.013 20.528,368.419 121.400,397.331 C189.062,416.723 262.433,396.867 324.343,368.126 C415.304,325.900 543.497,194.454 436.347,96.738 C378.745,44.207 285.697,64.026 217.602,35.418 C185.699,22.011 155.662,-2.674 119.276,0.267 C95.545,2.187 74.555,13.118 57.512,28.844 Z"/>
                        </svg>
                    </div>
                </li>
            </ul>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 order-lg-2 d-flex align-items-center justify-content-center">
                        <div class="translate-right-75 opacity-animation transition-150 transition-delay-2600">
                            <div class="main-banner-box-layout1">
                                <div class="item-figure">
                                    <img src="{{asset('img\main.jpg')}}" alt="Illustration">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 order-lg-1 compress-left-side d-flex align-items-center">
                        <div class="main-banner-box-layout1">
                            <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1500">
                                {{--                                <div class="item-sub-title">IT Design &amp; Consulting</div>--}}
                            </div>
                            <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1800">
                                <h1 class="item-main-title">Building Quality and Integrity One Nation at a Time</h1>
                            </div>
                            {{--                            <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-2100">--}}
                            {{--                                <p>Grursus mal suada faci lisis Lorem ipsum dolarorit mor ametion the consectetur nec odio aea the dumm text.</p>--}}
                            {{--                            </div>--}}
                            <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-2400">
                                <div class="banner-btns">
                                    <button type="button" class="item-btn btn-ghost btn-light" data-toggle="modal"
                                            data-target="#exampleModal">
                                        Enquire Now
                                    </button>
                                    {{--                                    <a class="play-btn popup-youtube" href="http://www.youtube.com/watch?v=1iIZeIy7TqM">--}}
                                    {{--                                        <div class="item-icon"><i class="fas fa-play"></i></div>--}}
                                    {{--                                        <span>Watch Video</span>--}}
                                    {{--                                    </a>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Enquire Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Enquire Now</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="contact-form-box" id="contact-form" novalidate="true" action="#"
                              onsubmit="if(document.getElementById('agree').checked) { return true; }
                                                      else { alert('Please indicate that you have read and agree to the Conditions and Privacy Policy');
                                                      return false; }">
                            <div class="row gutters-20">
                                <div class="col-xl-6 form-group has-error has-danger">
                                    <div
                                        class="translate-bottom-75 opacity-animation transition-150 transition-delay-400">
                                        <input type="text" placeholder="Full name *" class="form-control" name="name"
                                               data-error="Full name is required" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 form-group">
                                    <div
                                        class="translate-bottom-75 opacity-animation transition-150 transition-delay-700">
                                        <input type="email" placeholder="Email *" class="form-control" name="email"
                                               data-error="Email is required" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters-20">
                                <div class="col-xl-6 form-group has-error has-danger">
                                    <div
                                        class="translate-bottom-75 opacity-animation transition-150 transition-delay-400">
                                        <input type="text" placeholder="Contact Number *" class="form-control"
                                               name="contact" data-error="Contact Number is required" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters-20">
                                <div class="col-xl-1 form-group">
                                    <input class="form-control" type="checkbox" name="checkbox" value="check"
                                           id="agree"/>
                                </div>
                                <div class="col-xl-11 form-group">
                                    <p>I have read and agree to the Terms and Conditions and Privacy Policy</p>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" value="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
        <!--=====================================-->
        <!--=           Main Banner End         =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=     About Section Area Start      =-->
        <!--=====================================-->
        <section class="section-padding-md about-wrap-layout1">
            <ul class="animated-shape has-animation">
                <li>
                    <div class="translate-right-75 opacity-animation transition-200 transition-delay-10">
                        <img src="{{asset('media/element/element17.png')}}" alt="Animated Figure">
                    </div>
                </li>
            </ul>
            <div class="container-fluid">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 pl-0 pr-0">
                        <div class="about-box-layout1">
                            <ul class="figure-holder has-animation">
                                <li class="animated-bg">
                                    <div class="translate-left-75 opacity-animation transition-200 transition-delay-10">
                                        <svg width="638px" height="514px">
                                            <path fill-rule="evenodd" opacity="0.031" fill="rgb(2, 86, 225)"
                                                  d="M256.191,-0.005 C397.682,-0.005 406.513,181.938 525.597,258.322 C824.664,450.157 454.262,521.729 256.191,512.196 C114.864,505.394 -0.000,397.536 -0.000,256.097 C-0.000,114.655 114.701,-0.005 256.191,-0.005 Z"/>
                                        </svg>
                                    </div>
                                </li>
                                <li class="animated-figure">
                                    <div
                                        class="translate-left-75 opacity-animation transition-150 transition-delay-1000">
                                        <div class="fa-pull-right">
                                            <img src="{{asset('img/ice.png')}}" alt="ice">
                                        </div>
                                        <div class="" style="width: 40%;">
                                            <img src="{{asset('img/ecmcc.png')}}" height="20%" alt="ecmcc">
                                        </div>
                                        <div style="text-align: center !important;">
                                            <img src="{{asset('img/nicon.png')}}" alt="nicon">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 compress-right-side">
                        <div class="about-box-layout1">
                            <div class="content-holder has-animation">
                                <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1000">
                                    <h2 class="item-title">Our Partners</h2>
                                </div>
                                <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1300">
                                    <p>AccrediNation have over a decade of experience in IT Services, Training,
                                        Transformation, Consulting , Outsourcing and collaborating with different
                                        Partners.</p>
                                </div>
                                <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1600">
                                    <ul class="list-item">
                                        <li>International Center of Excellence</li>
                                        <li>Ecmcc Business School</li>
                                        <li>NICON</li>
                                    </ul>
                                </div>
                                {{--                                <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1900">--}}
                                {{--                                    <a href="about.html" class="btn-fill btn-gradient">Read More<i class="flaticon-next"></i></a>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=      About Section Area End       =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=    Service Section Area Start     =-->
        <!--=====================================-->
        <section class="service-wrap-layout1 section-padding-md bg-color-accent2 position-relative">
            <div class="animated-shape">
                <ul>
                    <li>
                        <svg data-parallax='{"x" : 150, "y" : -300}' xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="638px" height="514px">
                            <path opacity="0.051" fill="rgb(255, 197, 4)"
                                  d="M256.191,-0.004 C397.682,-0.004 406.514,181.938 525.597,258.321 C824.664,450.156 454.262,521.730 256.191,512.195 C114.864,505.394 -0.000,397.537 -0.000,256.095 C-0.000,114.655 114.701,-0.004 256.191,-0.004 Z"/>
                        </svg>
                    </li>
                    <li>
                        <svg data-parallax='{"x" : -200, "y" : 400}' xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" width="567px" height="492px">
                            <path opacity="0.031" fill="rgb(122, 100, 242)"
                                  d="M546.544,185.562 C513.626,116.380 454.941,60.016 385.431,26.835 C152.316,-84.442 -53.840,176.649 12.833,396.877 C24.369,434.980 46.437,474.094 84.066,487.084 C126.302,501.662 172.028,478.324 207.184,450.761 C242.341,423.198 275.543,389.558 318.953,379.003 C391.625,361.333 463.113,408.069 526.986,349.876 C577.576,303.789 573.685,242.605 546.544,185.562 Z"/>
                        </svg>
                    </li>
                </ul>
            </div>
            <div class="container">
                <div class="section-heading heading-dark heading-layout1 has-animation">
                    <h2 class="heading-main-title">What do we offer?</h2>
                    <div class="heading-icon">
                        <svg class="dash-left" width="100" height="20">
                            <g fill="none" stroke-width="4">
                                <path class="dashed1" stroke="rgba(90, 73, 248, 0.5)" stroke-dasharray="5, 5"
                                      d="M5 20 l215 0"/>
                                <path class="dashed2" stroke="white" stroke-dasharray="5, 5" d="M5 20 l215 0"/>
                            </g>
                        </svg>
                        <i class="flaticon-rocket"></i>
                        <svg class="dash-right" width="100" height="20">
                            <g fill="none" stroke-width="4">
                                <path class="dashed1" stroke="rgba(90, 73, 248, 0.5)" stroke-dasharray="5, 5"
                                      d="M5 20 l215 0"/>
                                <path class="dashed2" stroke="white" stroke-dasharray="5, 5" d="M5 20 l215 0"/>
                            </g>
                        </svg>


                    </div>
                    <p class="heading-paragraph">AccrediNation have over a decade of experience in IT Services,
                        Training, Transformation, Consulting and Outsourcing</p>
                </div>
                <div class="row masonry-items">
                    <div class="col-lg-4 col-sm-6 col-12 masonry-item has-animation">
                        <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                            <div class="service-box-layout1">
                                <div class="icon-holder icon-bg-california">
                                    <div class="item-icon icon-color-california">
                                        <i class="flaticon-work"></i>
                                    </div>
                                    <svg class="icon-bg-shape" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="100px" height="80px">
                                        <path
                                            d="M95.798,66.493 C95.402,67.238 94.989,67.934 94.568,68.608 C92.140,72.492 89.322,75.200 86.228,76.996 C75.718,83.098 62.044,78.694 49.794,74.183 C30.107,66.931 13.369,52.019 4.629,32.917 C0.428,23.737 -1.365,11.491 6.138,4.714 C11.356,0.001 19.072,-0.185 26.172,0.068 C26.493,0.079 26.814,0.090 27.132,0.103 C31.363,0.275 35.595,0.448 39.826,0.620 C45.043,0.833 50.261,1.045 55.479,1.256 C57.205,1.327 58.931,1.397 60.658,1.467 C67.392,1.740 74.374,2.077 80.361,5.160 C89.583,9.908 94.528,20.156 97.310,30.121 C97.438,30.578 97.561,31.039 97.682,31.500 C100.721,43.123 101.423,55.927 95.798,66.493 Z"/>
                                    </svg>
                                </div>
                                <h3 class="item-title"><a href="service-details.html">Certification</a></h3>
                                <p>We certify practical, relevant IT skills from foundation to expert level - with over
                                    90 certificates all aligned with SFIAplus. This means that wherever your field of
                                    IT, you can learn something new and plot your development on the industry
                                    framework.</p>
                                {{--                                <a href="service-details.html" class="btn-text">Discover Now<i--}}
                                {{--                                        class="flaticon-next"></i></a>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 masonry-item has-animation">
                        <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-300">
                            <div class="service-box-layout1">
                                <div class="icon-holder icon-bg-emerald">
                                    <div class="item-icon icon-color-emerald">
                                        <i class="flaticon-pen-1"></i>
                                    </div>
                                    <svg class="icon-bg-shape" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="105px" height="80px">
                                        <path
                                            d="M104.768,46.596 C103.512,53.499 97.269,58.301 91.117,61.679 C77.841,68.967 63.002,72.833 48.310,76.516 C40.421,78.492 32.367,80.451 24.252,79.893 C23.977,79.874 23.702,79.851 23.426,79.826 C15.577,79.094 7.660,75.615 3.385,69.025 C0.518,64.605 -0.391,59.254 0.154,53.978 C0.481,50.815 1.330,47.677 2.594,44.784 C4.373,40.709 6.870,37.034 9.730,33.620 C12.289,30.568 15.138,27.725 18.038,25.002 C24.140,19.273 30.567,13.891 37.279,8.890 C41.647,5.637 46.299,2.342 51.494,0.551 C56.951,-1.331 61.008,1.926 65.771,4.608 C72.267,8.264 78.490,12.408 84.374,16.984 C86.832,18.895 89.229,20.884 91.564,22.945 C92.385,23.670 93.201,24.402 94.006,25.145 C96.362,27.319 98.710,29.770 100.630,32.428 C103.718,36.705 105.691,41.522 104.768,46.596 Z"/>
                                    </svg>
                                </div>
                                <h3 class="item-title"><a href="service-details.html">Higher Education</a></h3>
                                <p>Flexible, modular study courses developed by the UK's leading university academics
                                    and employers, allowing participants to gain international certification and
                                    industry-relevant skills for careers that can be taken worldwide.</p>
                                {{--                                <a href="service-details.html" class="btn-text">Discover Now<i--}}
                                {{--                                        class="flaticon-next"></i></a>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12 masonry-item has-animation">
                        <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-500">
                            <div class="service-box-layout1">
                                <div class="icon-holder icon-bg-royal-blue">
                                    <div class="item-icon icon-color-royal-blue">
                                        <i class="flaticon-portfolio"></i>
                                    </div>
                                    <svg class="icon-bg-shape" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="119px" height="80px">
                                        <path
                                            d="M118.988,32.868 C118.954,33.798 118.867,34.713 118.740,35.616 C117.289,45.963 109.998,54.513 102.246,60.696 C100.672,61.950 99.062,63.147 97.419,64.283 C85.885,72.259 72.742,77.274 59.279,78.981 C53.104,79.765 44.685,81.169 38.854,78.104 C32.784,74.915 27.054,69.136 21.255,65.231 C15.037,61.044 8.845,56.391 4.621,49.782 C0.397,43.173 -1.534,34.183 1.434,26.764 C2.652,23.719 4.595,21.166 6.927,19.084 C9.080,17.161 11.562,15.641 14.122,14.520 C16.812,13.341 19.604,12.537 22.432,11.873 C25.211,11.221 28.024,10.704 30.810,10.101 C32.737,9.685 34.655,9.223 36.569,8.737 C45.702,6.418 54.720,3.489 63.942,1.669 C75.098,-0.533 86.824,-1.043 97.533,3.095 C103.301,5.324 108.727,8.943 112.734,14.101 C114.004,15.737 115.121,17.535 116.049,19.444 C118.047,23.560 119.159,28.199 118.988,32.868 Z"/>
                                    </svg>
                                </div>
                                <h3 class="item-title"><a href="service-details.html">Consulting</a></h3>
                                <p>We curate partnerships with world class and respected AccrediNation bodies. We help
                                    build credible human resources by identifying appropriate AccrediNation solutions
                                    for their institutions and public bodies, to support them in strengthening their
                                    value and reputation.</p>
                                {{--                                <a href="service-details.html" class="btn-text">Discover Now<i--}}
                                {{--                                        class="flaticon-next"></i></a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=     Service Section Area End      =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=   Process Section Area Start      =-->
        <!--=====================================-->
        <section class="process-wrap-layout1 section-padding-md bg-color-light position-relative">
            <div class="container">
                <div class="section-heading heading-dark heading-layout1 has-animation">
                    <h2 class="heading-main-title">Developed by Leading Employers</h2>
                    <div class="heading-icon">
                        <svg class="dash-left" width="100" height="20">
                            <g fill="none" stroke-width="4">
                                <path class="dashed1" stroke="rgba(90, 73, 248, 0.5)" stroke-dasharray="5, 5"
                                      d="M5 20 l215 0"/>
                                <path class="dashed2" stroke="white" stroke-dasharray="5, 5" d="M5 20 l215 0"/>
                            </g>
                        </svg>
                        <i class="flaticon-rocket"></i>
                        <svg class="dash-right" width="100" height="20">
                            <g fill="none" stroke-width="4">
                                <path class="dashed1" stroke="rgba(90, 73, 248, 0.5)" stroke-dasharray="5, 5"
                                      d="M5 20 l215 0"/>
                                <path class="dashed2" stroke="white" stroke-dasharray="5, 5" d="M5 20 l215 0"/>
                            </g>
                        </svg>


                    </div>
                    <p class="heading-paragraph">Take your IT career to the next level with BCS professional
                        certification. Developed in collaboration with leading employers, our training programmes help
                        you sharpen your business focus and understand how you can use technology to make a real
                        difference in a progressive organisation.</p>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-12 col-12 order-xl-1 padding-leading has-animation">
                        <div class="process-box-layout1">
                            <ul class="content-holder">
                                <li>
                                    <div
                                        class="translate-right-75 transition-150 opacity-animation transition-delay-100">
                                        <div class="d-flex align-items-sm-center">
                                            <div class="item-icon dodger-blue">
                                                <h1 class="counting-text counter pt-3" data-num="60">60+</h1>
                                            </div>
                                            <div class="item-content">
                                                <h3 class="item-title">Certifications </h3>
                                                <p> in 11 core subject areas</p>
                                            </div>
                                        </div>
                                    </div>
                                    <svg x="0px" y="0px" width="312px" height="130px">
                                        <path class="dashed1" fill="none" stroke="rgb(95, 93, 93)" stroke-width="1"
                                              stroke-dasharray="1300" stroke-dashoffset="0"
                                              d="M3.121,2.028 C3.121,2.028 1.003,124.928 99.352,81.226 C99.352,81.226 272.319,21.200 310.000,127.338"/>
                                        <path class="dashed2" fill="none" stroke="#ffffff" stroke-width="2"
                                              stroke-dasharray="6" stroke-dashoffset="1300"
                                              d="M3.121,2.028 C3.121,2.028 1.003,124.928 99.352,81.226 C99.352,81.226 272.319,21.200 310.000,127.338 "/>
                                    </svg>
                                </li>
                                <li>
                                    <div
                                        class="translate-left-75 transition-150 opacity-animation transition-delay-1000">
                                        <div class="d-flex align-items-sm-center flex-xl-row-reverse">
                                            <div class="item-icon sunset-orange">
                                                <h2 class="counting-text counter pt-3" data-num="700000">700,000</h2>
                                            </div>
                                            <div class="item-content">
                                                <h3 class="item-title">Exams </h3>
                                                <p> delivered in the last 10 years</p>
                                            </div>
                                        </div>
                                    </div>
                                    <svg x="0px" y="0px" width="312px" height="130px">
                                        <path class="dashed1" fill="none" stroke="rgb(95, 93, 93)" stroke-width="1"
                                              stroke-dasharray="1300" stroke-dashoffset="0"
                                              d="M311.000,0.997 C311.000,0.997 313.123,123.592 214.535,79.996 C214.535,79.996 41.149,20.122 3.377,125.996"/>
                                        <path class="dashed2" fill="none" stroke="#ffffff" stroke-width="2"
                                              stroke-dasharray="6" stroke-dashoffset="1300"
                                              d="M311.000,0.997 C311.000,0.997 313.123,123.592 214.535,79.996 C214.535,79.996 41.149,20.122 3.377,125.996"/>
                                    </svg>
                                </li>
                                <li>
                                    <div
                                        class="translate-right-75 transition-150 opacity-animation transition-delay-2000">
                                        <div class="d-flex align-items-sm-center">
                                            <div class="item-icon california">
                                                <h2 class="counting-text counter" data-num="76">76+</h2>
                                            </div>
                                            <div class="item-content">
                                                <h3 class="item-title">Training</h3>
                                                <p> providers accredited by BCS</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=    Process Section Area End       =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=   Progress Section Area Start     =-->
        <!--=====================================-->
        <section class="d-none progress-wrap-layout1 bg-gradient-layout2">
            <div
                class="progress-inner-wrap bg-position-center bg-no-repeat bg-size-cover parallaxie bg-size-cover bg-no-repeat bg-position-center"
                data-bg-image="media/element/element1.png">
                <div class="container zindex-level-2">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="progress-box-layout1">
                                <h2 class="counting-text counter" data-num="845">60+</h2>
                                <div class="item-label">certifications in 11 core subject areas</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="progress-box-layout1">
                                <h2 class="counting-text counter" data-num="1240">700,000</h2>
                                <div class="item-label">exams delivered in the last 10 years</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="progress-box-layout1">
                                <h2 class="counting-text counter" data-num="15420">76+</h2>
                                <div class="item-label">training providers accredited by BCS</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="progress-box-layout1">
                                <h2 class="counting-text counter" data-num="67">67</h2>
                                <div class="item-label">Award Winner</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=    Progress Section Area End      =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=   Feature Section Area Start      =-->
        <!--=====================================-->
        <section class="d-none feature-wrap-layout1">
            <div class="container">
                <div class="row gutters-50">
                    <div class="col-lg-6 col-12 has-animation">
                        <div class="feature-box-layout1">
                            <div class="translate-left-75 opacity-animation transition-150 transition-delay-10">
                                <img src="media/feature/feature1.png" alt="Feature">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 d-flex align-items-center justify-content-center has-animation">
                        <div class="feature-box-layout1">
                            <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                                <h3 class="item-title">We Consultant to Get Business Plan</h3>
                            </div>
                            <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-500">
                                <div class="sub-title">Grursus mal suada faci lisis Lorem ipsum dolarorit the more as
                                    ametion consectetur than elit.
                                </div>
                            </div>
                            <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <p>Rsus mal suada and fadolorit to the consectetur elit. All the at Lorem to Ipsum
                                    generators on the Internet tend to repeat on predefined that and chunks as the
                                    Internet more then have that. The the Lorem to IInternet more dummy text tend.</p>
                            </div>
                            <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-1300">
                                <a href="about.html" class="mt-4 btn-fill btn-gradient">Read More <i
                                        class="flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-12 order-lg-1 d-lg-flex align-items-center justify-content-center has-animation d-none">
                        <div class="indicator-wrap">
                            <svg class="dash-left" width="675" height="206">
                                <g fill="none" stroke-width="2">
                                    <path class="dashed1" stroke="rgba(17, 17, 17, 0.3)" stroke-dasharray="6, 6"
                                          stroke-linecap="butt" stroke-linejoin="miter"
                                          d="M3.000,0.995 L3.000,100.997 L673.000,101.994 L673.000,207.995"/>
                                    <path class="dashed2" stroke="white" stroke-dasharray="6, 6" stroke-linecap="butt"
                                          stroke-linejoin="miter"
                                          d="M3.000,0.995 L3.000,100.997 L673.000,101.994 L673.000,207.995"/>
                                </g>
                            </svg>
                            <div class="indicator-img-right">
                                <div class="translate-top-50 opacity-animation transition-100 transition-delay-2500">
                                    <img src="media/element/element2.png" alt="element">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-3 col-12 has-animation">
                        <div class="feature-box-layout1">
                            <div class="translate-right-75 opacity-animation transition-150 transition-delay-50">
                                <img src="media/feature/feature2.png" alt="Feature">
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-6 order-lg-2 col-12 d-flex align-items-center justify-content-center has-animation">
                        <div class="feature-box-layout1">
                            <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                                <h3 class="item-title">Brainstorming, Researching, Planning and Strategizing Work</h3>
                            </div>
                            <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-500">
                                <p>Grursus mal suada faci lisis Lorem ipsum dolarorit more a ametion at that and more
                                    consectetur elit. Vesti at bulum nec odio aea the dumm the more ipsumm ipsum to that
                                    that many our rsus.</p>
                            </div>
                            <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <ul class="list-layout1">
                                    <li>
                                        <h4 class="inner-item-title">Reporting & Analysis</h4>
                                        <p>Grursus mal suada faci lisis Lorem ipsum dolarorit more that ametion that at
                                            consectetur elit.</p>
                                    </li>
                                    <li>
                                        <h4 class="inner-item-title">Reporting & Analysis</h4>
                                        <p>Grursus mal suada faci lisis Lorem ipsum dolarorit more that ametion that at
                                            consectetur elit.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-lg-flex align-items-center justify-content-center has-animation d-none">
                        <div class="indicator-wrap">
                            <svg class="dash-right" width="675" height="206">
                                <g fill="none" stroke-width="2">
                                    <path class="dashed1" stroke="rgba(17, 17, 17, 0.3)" stroke-dasharray="6, 6"
                                          stroke-linecap="butt" stroke-linejoin="miter"
                                          d="M673.000,0.995 L673.000,100.996 L3.000,101.996 L3.000,207.996"/>
                                    <path class="dashed2" stroke="white" stroke-dasharray="6, 6" stroke-linecap="butt"
                                          stroke-linejoin="miter"
                                          d="M673.000,0.995 L673.000,100.996 L3.000,101.996 L3.000,207.996"/>
                                </g>
                            </svg>
                            <div class="indicator-img-left">
                                <div class="translate-top-75 opacity-animation transition-100 transition-delay-2500">
                                    <img src="media/element/element2.png" alt="element">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 has-animation">
                        <div class="feature-box-layout1">
                            <div class="translate-left-75 opacity-animation transition-150 transition-delay-100">
                                <img src="media/feature/feature3.png" alt="Feature">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 d-flex align-items-center justify-content-center has-animation">
                        <div class="feature-box-layout1">
                            <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                                <h3 class="item-title">Our Strength is Cross Boundary Teamwork Done.</h3>
                            </div>
                            <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-500">
                                <p>Grursus mal suada faci lisis Lorem ipsum dolarorit more that ametion that at
                                    consectetur elit. Vesti at bulum nec odio aea dumm more this ipsumm to that
                                    dolocons.</p>
                            </div>
                            <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <ul class="list-layout2">
                                    <li>Grursus mal suada Lorem ipsum dolarorit more ametion.</li>
                                    <li>Vesti at bulum nec odio aea the dumm ipsumm.</li>
                                    <li>Ipsum that dolocons rsus mal suada and fadolorit.</li>
                                    <li>Dolocons rsus mal suada and fadolorit to the consectetur elit.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=    Feature Section Area End       =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=  Testimonial Section Area Start   =-->
        <!--=====================================-->
        <section class="testimonial-wrap-layout2 section-padding-md bg-color-accent2">
            <div class="container">
                <div class="section-heading heading-dark heading-layout1 has-animation">
                    <h2 class="heading-main-title">Clients Testimonials</h2>
                    <div class="heading-icon">
                        <svg class="dash-left" width="100" height="20">
                            <g fill="none" stroke-width="4">
                                <path class="dashed1" stroke="rgba(90, 73, 248, 0.5)" stroke-dasharray="5, 5"
                                      d="M5 20 l215 0"/>
                                <path class="dashed2" stroke="white" stroke-dasharray="5, 5" d="M5 20 l215 0"/>
                            </g>
                        </svg>
                        <i class="flaticon-rocket"></i>
                        <svg class="dash-right" width="100" height="20">
                            <g fill="none" stroke-width="4">
                                <path class="dashed1" stroke="rgba(90, 73, 248, 0.5)" stroke-dasharray="5, 5"
                                      d="M5 20 l215 0"/>
                                <path class="dashed2" stroke="white" stroke-dasharray="5, 5" d="M5 20 l215 0"/>
                            </g>
                        </svg>


                    </div>

                </div>
                <div class="rc-carousel nav-control-layout1" data-loop="true" data-items="3" data-margin="10"
                     data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false"
                     data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                     data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true"
                     data-r-x-medium-dots="false" data-r-small="1" data-r-small-nav="true" data-r-small-dots="false"
                     data-r-medium="2" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="2"
                     data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="2"
                     data-r-extra-large-nav="true" data-r-extra-large-dots="false">
                    <div class="testimonial-box-layout1">
                        <div class="top-box">
                            <div class="item-icon">
                                <i class="flaticon-quote"></i>
                            </div>
                            <p>Forever indebted to Asad and the team for catapulting my Business Analyst career. Can
                                honestly say without their help I would not be where I am. The team is extremely
                                knowledgable, well connected and solution oriented. They'll be with you every step of
                                the way, I could not recommend them highly enough</p>
                        </div>
                        <div class="bottom-box">
                            <div class="media">
                                <img src="media/testimonial/Testimonial-Img-1.png" alt="Testimonial">
                                <div class="media-body space-sm">
                                    <h3 class="item-title">Rizwan Dookanwala</h3>
                                    {{--                                    <div class="item-designation">Apps Developer</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-box-layout1">
                        <div class="top-box">
                            <div class="item-icon">
                                <i class="flaticon-quote"></i>
                            </div>
                            <p>As i prepared to take my Business Analyst career the next level. I knew a professional
                                certificate to my name would make me stand apart from others.My BCS
                                certificate has definitely helped in my career progression and also provided me with the
                                knowledge and skills required to conduct analysis in my job.</p>
                        </div>
                        <div class="bottom-box">
                            <div class="media">
                                <img src="media/testimonial/Testimonial-Img-2.png" alt="Testimonial">
                                <div class="media-body space-sm">
                                    <h3 class="item-title">Patrick Giwa</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-box-layout1">
                        <div class="top-box">
                            <div class="item-icon">
                                <i class="flaticon-quote"></i>
                            </div>
                            <p>i was looking for a qualification that was suitable for the IT market in the UK.
                                 I soon found out the BSC was globally recognised. This was to my advantage due 
                                 to the pandemic and working from home i could apply for jobs all over the world.</p>
                        </div>
                        <div class="bottom-box">
                            <div class="media">
                                <img src="media/testimonial/Testimonial-Img-3.png" alt="Testimonial">
                                <div class="media-body space-sm">
                                    <h3 class="item-title">Kashif Khan</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=   Testimonial Section Area End    =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=   Contact Section Area Start      =-->
        <!--=====================================-->
        <section class="d-none contact-wrap-layout1 section-padding-md bg-color-light">
            <div class="container">
                <div class="row gutters-50">
                    <div class="col-xl-5 col-lg-6 col-12">
                        <div class="contact-box-layout1 has-animation">
                            <div class="translate-bottom-50 opacity-animation transition-100 transition-delay-100">
                                <h2 class="item-title">How May We Help You!</h2>
                            </div>
                            <div class="translate-bottom-50 opacity-animation transition-100 transition-delay-400">
                                <p>Grursus mal suada faci lisis Lorem ipsum consectetur elit.</p>
                            </div>
                            <form class="contact-form-box" id="contact-form">
                                <div class="row gutters-20">
                                    <div class="col-xl-6 form-group">
                                        <div
                                            class="translate-bottom-75 opacity-animation transition-150 transition-delay-400">
                                            <input type="text" placeholder="Name *" class="form-control"
                                                   name="first_name" data-error="Name is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 form-group">
                                        <div
                                            class="translate-bottom-75 opacity-animation transition-150 transition-delay-700">
                                            <input type="email" placeholder="Email *" class="form-control" name="email"
                                                   data-error="Email is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div
                                            class="translate-bottom-75 opacity-animation transition-150 transition-delay-1000">
                                            <select class="select2" name="subject">
                                                <option value="0">Software Licencing</option>
                                                <option value="1">Single-user license</option>
                                                <option value="2">Multi-user license</option>
                                                <option value="3">Site license</option>
                                                <option value="4">Intellectual property</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div
                                            class="translate-bottom-75 opacity-animation transition-150 transition-delay-1300">
                                            <textarea placeholder="Let us know what you need"
                                                      class="textarea form-control" name="message" id="form-message"
                                                      rows="7" cols="20" data-error="Message field is required"
                                                      required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group mb-0">
                                        <div
                                            class="translate-bottom-75 opacity-animation transition-150 transition-delay-1700">
                                            <button type="submit" class="btn-fill btn-gradient">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-response"></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-12 d-flex align-items-center">
                        <div class="contact-box-layout1 has-animation">
                            <div class="translate-right-75 transition-150 opacity-animation transition-delay-10">
                                <div class="item-figure">
                                    <img src="media/illustration/illustration21.png" alt="Illustration">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=    Contact Section Area End       =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--= Call To Action Section Area Start =-->
        <section id=" call-to-action-wrap-layout1"
                 class="d-none call-to-action-wrap-layout1 bg-gradient-layout2 section-padding-sm-equal">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-12">
                        <div class="call-to-action-box-layout1">
                            <h2 class="item-title">Great Things In Business Are Never Done By One Person.</h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-12">
                        <div class="call-to-action-box-layout1 d-flex justify-content-xl-end justify-content-center">
                            <a href="pricing-layout1.html" class="item-btn btn-fill btn-light">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=====================================-->
        <!--=  Call To Action Section Area End  =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=     Blog Section Area Start       =-->
        <!--=====================================-->
        <section class="d-none section-padding-md bg-color-light position-relative">
            <div class="container">
                <div class="section-heading heading-dark heading-layout1 has-animation">
                    <h2 class="heading-main-title">Latest News</h2>
                    <div class="heading-icon">
                        <svg class="dash-left" width="100" height="20">
                            <g fill="none" stroke-width="4">
                                <path class="dashed1" stroke="rgba(90, 73, 248, 0.5)" stroke-dasharray="5, 5"
                                      d="M5 20 l215 0"/>
                                <path class="dashed2" stroke="white" stroke-dasharray="5, 5" d="M5 20 l215 0"/>
                            </g>
                        </svg>
                        <i class="flaticon-rocket"></i>
                        <svg class="dash-right" width="100" height="20">
                            <g fill="none" stroke-width="4">
                                <path class="dashed1" stroke="rgba(90, 73, 248, 0.5)" stroke-dasharray="5, 5"
                                      d="M5 20 l215 0"/>
                                <path class="dashed2" stroke="white" stroke-dasharray="5, 5" d="M5 20 l215 0"/>
                            </g>
                        </svg>


                    </div>
                    <p class="heading-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting has
                        been the industry's standard dummy text ever since</p>
                </div>
                <div class="row has-animation">
                    <div class="col-lg-4 col-12">
                        <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                            <div class="blog-box-layout1">
                                <div class="item-figure">
                                    <a href="blog-details.html"><img src="media/blog/blog1.jpg" alt="Blog Figure"></a>
                                </div>
                                <div class="item-content">
                                    <ul class="mb--5 entry-meta meta-color-accent justify-content-between">
                                        <li><a href="#"><i class="far fa-calendar-alt"></i>Feb 18, 2019</a></li>
                                    </ul>
                                    <h3 class="entry-title title-color-dark"><a href="blog-details.html">5 Ways
                                            Technology Today Improved Business</a></h3>
                                    <ul class="entry-meta meta-color-accent justify-content-between meta-divider-center meta-wrap-border-top">
                                        <li><a href="#"><i class="far fa-user"></i>By David Benio</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i>09 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-300">
                            <div class="blog-box-layout1">
                                <div class="item-figure">
                                    <a href="blog-details.html"><img src="media/blog/blog2.jpg" alt="Blog Figure"></a>
                                </div>
                                <div class="item-content">
                                    <ul class="mb--5 entry-meta meta-color-accent justify-content-between">
                                        <li><a href="#"><i class="far fa-calendar-alt"></i>Feb 18, 2019</a></li>
                                    </ul>
                                    <h3 class="entry-title title-color-dark"><a href="blog-details.html">How Wireless
                                            Technology is the Changing Business</a></h3>
                                    <ul class="entry-meta meta-color-accent justify-content-between meta-divider-center meta-wrap-border-top">
                                        <li><a href="#"><i class="far fa-user"></i>By David Benio</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i>09 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-500">
                            <div class="blog-box-layout1">
                                <div class="item-figure">
                                    <a href="blog-details.html"><img src="media/blog/blog3.jpg" alt="Blog Figure"></a>
                                </div>
                                <div class="item-content">
                                    <ul class="mb--5 entry-meta meta-color-accent justify-content-between">
                                        <li><a href="#"><i class="far fa-calendar-alt"></i>Feb 18, 2019</a></li>
                                    </ul>
                                    <h3 class="entry-title title-color-dark"><a href="blog-details.html">Thirty two
                                            Surrogate Your of Charged.</a></h3>
                                    <ul class="entry-meta meta-color-accent justify-content-between meta-divider-center meta-wrap-border-top">
                                        <li><a href="#"><i class="far fa-user"></i>By David Benio</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i>09 Comments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=      Blog Section Area End        =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=     Brand Section Area Start      =-->
        <!--=====================================-->
        <section class="testimonial-wrap-layout2 section-padding-md bg-color-accent2">
            <div class="container">
                <div class="section-heading heading-dark heading-layout1 has-animation">
                    <h2 class="heading-main-title">Previous Clients</h2>
                    <div class="heading-icon">
                        <svg class="dash-right" width="100" height="20">
                            <g fill="none" stroke-width="4">
                                <path class="dashed1" stroke="rgba(90, 73, 248, 0.5)" stroke-dasharray="5, 5"
                                      d="M5 20 l215 0"/>
                                <path class="dashed2" stroke="white" stroke-dasharray="5, 5" d="M5 20 l215 0"/>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="rc-carousel nav-control-layout1" data-loop="true" data-items="3" data-margin="10"
                     data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false"
                     data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                     data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true"
                     data-r-x-medium-dots="false" data-r-small="1" data-r-small-nav="true" data-r-small-dots="false"
                     data-r-medium="2" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="2"
                     data-r-large-nav="true" data-r-large-dots="false" data-r-extra-large="2"
                     data-r-extra-large-nav="true" data-r-extra-large-dots="false">
                    <div class="testimonial-box-layout1" style="width:60%; height:40%; padding-left: 150px">
                        <img src="{{asset('img/accenture.png')}}" alt="Brand-thumb" class="">
                    </div>
                    <div class="testimonial-box-layout1" style="width:60%; height:40%; padding-left: 150px">
                        <img src="{{asset('img/accenture.png')}}" alt="Brand-thumb" class="">
                    </div>
                    <div class="testimonial-box-layout1" style="width:60%; height:40%; padding-left: 150px">
                        <img src="{{asset('img/accenture.png')}}" alt="Brand-thumb" class="">
                    </div>

                </div>
            </div>
        </section>
        <section id="brand-wrap-layout1" class=" d-none brand-wrap-layout1 bg-color-accent2">
            <div class="container">
                <div class="rc-carousel" data-loop="true" data-items="8" data-margin="30" data-autoplay="false"
                     data-autoplay-timeout="5000" data-smart-speed="700" data-dots="false" data-nav="false"
                     data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="false"
                     data-r-x-small-dots="false" data-r-x-medium="3" data-r-x-medium-nav="false"
                     data-r-x-medium-dots="false" data-r-small="4" data-r-small-nav="false" data-r-small-dots="false"
                     data-r-medium="4" data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="5"
                     data-r-large-nav="false" data-r-large-dots="false" data-r-extra-large="6"
                     data-r-extra-large-nav="false" data-r-extra-large-dots="false">
                    <div class="brand-box-layout1"><img src="{{asset('img/accenture.png')}}" alt="Brand-thumb"></div>
                    <div class="brand-box-layout1"><img src="{{asset('img/astrazeneca.png')}}" alt="Brand-thumb"></div>
                    <div class="brand-box-layout1"><img src="{{asset('img/aviva.png')}}" alt="Brand-thumb"></div>
                    <div class="brand-box-layout1"><img src="{{asset('img/bank.png')}}" alt="Brand-thumb"></div>
                    <div class="brand-box-layout1"><img src="{{asset('img/barclyas.png')}}" alt="Brand-thumb"></div>
                    <div class="brand-box-layout1"><img src="{{asset('img/bt.jfif')}}" alt="Brand-thumb"></div>
                    <div class="brand-box-layout1"><img src="{{asset('img/delolite.png')}}" alt="Brand-thumb"></div>
                    <div class="brand-box-layout1"><img src="{{asset('img/llyods.png')}}" alt="Brand-thumb"></div>
                    <div class="brand-box-layout1"><img src="{{asset('img/RSA.png')}}" alt="Brand-thumb"></div>
                    <div class="brand-box-layout1"><img src="{{asset('img/sopra.png')}}" alt="Brand-thumb"></div>
                    <div class="brand-box-layout1"><img src="{{asset('img/telefonica.png')}}" alt="Brand-thumb"></div>
                    <div class="brand-box-layout1"><img src="{{asset('img/veritas.png')}}" alt="Brand-thumb"></div>
                    <div class="brand-box-layout1"><img src="{{asset('img/world pay.png')}}" alt="Brand-thumb"></div>

                </div>
            </div>
        </section>
        @include('includes.footer')
        @include('includes.offcanvas')
    </div>
</div>

<!-- Dependency Scripts -->
@include('includes.dependencies')
<script src="assets/js/app.js"></script>
</body>

</html>
