<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<style>
    {
            {
            -- Accordian Styling --
        }
    }

    .panel-default {
        background: rgba(110, 156, 225, 0.1);
        padding-top: 1rem;
        padding-bottom: 0.5rem;
        padding-left: 1rem;
    }

    .panel-body-links {
        padding-left: 20px;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .panel-body-p1 {
        margin: 0px;
        padding-bottom: 0px;
    }

    .panel-body-p2 {
        margin: 0px;
        padding-top: 10px;
    }

    .panel-body-sub {
        padding-left: 20px;
        padding-top: 25px;
        padding-bottom: 10px;
    }

    .panel-body-link-icon {
        margin: 0px;
        padding-left: 10px;
    }

    .panel-body-certificate {
        padding-top: 20px;
    }

    .anchor-link {
        color: green;
    }

    .panel-title {
        padding-bottom: 10px;

    }

    .feature-check-icon {
        padding-right: 10px;
        padding-bottom: 20px;

    }

    .panel .panel-heading .panel-title a,
    .panel .panel-body p {
        color: #000 !important;
    }

    @media only screen and (max-width: 1000px) {
        .template-main-menu {
            display: none !important;
        }

        .temp-logo {
            width: 200px !important;
            height: 40px !important;
            padding-top: 10px !important;
        }

        .single-item {
            padding-top: 10px !important;
        }

    }

    @media only screen and (min-width: 1000px) {
        .temp-logo {
            position: relative !important;
        }

    }

    .box-header {
        text-align: center;
    }

    .bg-page-layout1 {
        background-size: cover;
        background-image: url("./img/gradient-background.png");
    }

    .Consulting {
        margin-top: 150px;
    }

    .left-group-blobs {
        position: absolute;
        left: -300px;
        bottom: -250px;
        height: 1000px;
        width: 1300px;
    }

    .right-group-blobs {
        position: absolute;
        top: -450px;
        right: -200px;
        height: 1200px;
        width: 1400px;

    }

    .contact-box-white {
        background-color: white;
        border-radius: 25px;

    }

    label, .box-header {
        color: black;
    }

    h3,
    p,
    li {
        color: white;
    }

</style>

<body>


    <div id="preloader" class="tlp-preloader">
        <div class="animation-preloader">
            <div class="tlp-spinner"></div>
            <img src="{{asset('logo-black.png')}}" alt="Preloader">
        </div>
    </div>
@include('includes.header')
    <div class="bg-page-layout1">
        <img class="right-group-blobs" src="./img/right-group-blobs.png">
        <img class="left-group-blobs" src="./img/left-group-blobs.png">
        <div id="wrapper" class="wrapper">
            <a href="#main_content" data-type="section-switch" class="return-to-top">
                <i class="fas fa-angle-double-up"></i>
            </a>
            <div id="main_content">
                

                <section class="feature-wrap-layout1">
                    <div class="col-lg-12 d-flex align-items-center justify-content-center">
                        <div
                            class="col-lg-4 contact-box-white shadow  Consulting">
                            <div class="container" style="padding: 30px;">
                                <h3 class="box-header">Get in touch with us for consulting enquires</h3><br />
                                                                @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                                @endif
                                <form method="post" action="{{url('sendemail/send')}}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Enter Full Name</label>
                                        <input type="text" name="name" class="form-control" value="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Your Email</label>
                                        <input type="text" name="email" class="form-control" value="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Your Message</label>
                                        <textarea name="message" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="send" class="btn btn-info" value="Send" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--=====================================-->
                    <!--=     Footer Section Area Start     =-->
                    <!--=====================================-->
                    <footer id="footer-wrap-layout1" class="footer-wrap-layout1">
                        <div class="footer-top-layout1 ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-12">
                                        <div class="footer-widgets">
                                            <div class="footer-logo">
                                                <a href="{{route('landing')}}"><img src="{{asset('logo.png')}}"
                                                        alt="Logo"></a>
                                            </div>
                                            <p class="about-paragraph">Building Quality and Integrity One Nation at a
                                                Time
                                            </p>
                                            <ul class="footer-social">
                                                <li><a target="_blank" href="https://www.facebook.com/accredination/"><i
                                                            class="fab fa-facebook-f"></i></a></li>
                                                <li><a target="_blank" href="https://twitter.com/accredination/"><i
                                                            class="fab fa-twitter"></i></a></li>
                                                <li><a target="_blank"
                                                        href="https://www.instagram.com/accredination/"><i
                                                            class="fab fa-instagram"></i></a></li>
                                                <li><a target="_blank"
                                                        href="https://www.linkedin.com/company/accredination/"><i
                                                            class="fab fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-none col-xl-3 d-xl-block" style="display: none !important;">
                                        <div class="footer-widgets">
                                            <h3 class="footer-widget-heading">Certifications</h3>
                                            {{--                                <ul class="footer-menu">--}}
                                            {{--                                    <li><a href="#">Management</a></li>--}}
                                            {{--                                    <li><a href="#">Reporting</a></li>--}}
                                            {{--                                    <li><a href="#">Support</a></li>--}}
                                            {{--                                    <li><a href="#">Community</a></li>--}}
                                            {{--                                    <li><a href="#">Customers</a></li>--}}
                                            {{--                                </ul>--}}
                                        </div>
                                    </div>
                                    <div class="d-none col-xl-3 col-lg-4 col-md-7 col-12">
                                        <div class="footer-widgets">
                                            <h3 class="footer-widget-heading">Higher Education Qualifications</h3>
                                            {{--                                <ul class="footer-menu">--}}
                                            {{--                                    <li><a href="about.html">About Us</a></li>--}}
                                            {{--                                    <li><a href="#">How to work</a></li>--}}
                                            {{--                                    <li><a href="contact.html">Contact Us</a></li>--}}
                                            {{--                                    <li><a href="#">Our Media</a></li>--}}
                                            {{--                                    <li><a href="#">Privacy</a></li>--}}
                                            {{--                                </ul>--}}
                                        </div>
                                    </div>
                                    <div class="d-none col-xl-3 col-lg-4 col-md-7 col-12">
                                        <div class="footer-widgets">
                                            <h3 class="footer-widget-heading">Consulting</h3>
                                            {{--                                <ul class="footer-menu">--}}
                                            {{--                                    <li><a href="service-details.html">Web Design</a></li>--}}
                                            {{--                                    <li><a href="service-details.html">Development</a></li>--}}
                                            {{--                                    <li><a href="service-details.html">Graphic Design</a></li>--}}
                                            {{--                                    <li><a href="service-details.html">Branding</a></li>--}}
                                            {{--                                    <li><a href="service-details.html">Creative Solution</a></li>--}}
                                            {{--                                </ul>--}}
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-6"></div>
                                    <div class="col-xl-3 col-lg-4 col-md-7 col-12">
                                        <div class="footer-widgets">
                                            <h3 class="footer-widget-heading">Contact Info</h3>
                                            <p></p>
                                            <ul class="footer-contact">
                                                <li><i class="flaticon-placeholder"></i><strong>UK</strong>: 115 Sutton
                                                    New
                                                    Road, Birmingham, B23 6RP
                                                </li>
                                                <li><i class="flaticon-placeholder"></i><strong>Pakistan</strong>: 18
                                                    F/1,
                                                    Block 6, PECHS, Karachi, 75400
                                                </li>
                                                <li><i class="flaticon-plane"></i>info@accredination.co.uk</li>
                                                <li><i class="flaticon-telephone"></i>+44 (0) 800 058 2509</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-bottom-layout1 ">
                            <div class="container">
                                <div class="copy-right-wrap">
                                    <p class="copy-right-text">© {{Date('Y')}} Accredination. All Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!--=====================================-->
                    <!--=      Footer Section Area End      =-->
                    <!--=====================================-->



                </section>

                @include('includes.offcanvas')
            </div>
        </div>
    </div>


    <!-- Dependency Scripts -->
    @include('includes.dependencies')
    <script src="assets/js/app.js"></script>

</body>

</html>
