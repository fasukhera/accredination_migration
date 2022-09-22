<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accredination</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('bcs_logo.ico')}}">
    <!-- Dependency Styles -->
    <link rel="stylesheet" href="{{asset('dependencies/bootstrap/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/fontawesome/css/all.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/select2/css/select2.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/flaticon/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/wow/css/animate.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/page-piling/css/jquery.pagepiling.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/nivo-slider/css/nivo-slider.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/meanmenu/css/meanmenu.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/magnific-popup/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/owl.carousel/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/owl.carousel/css/owl.theme.default.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('dependencies/slick/css/slick.css" type="text/css')}}">
    <link rel="stylesheet" href="{{asset('dependencies/slick/css/slick-theme.css" type="text/css')}}">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="assets/css/app.css" type="text/css">
    <!-- Animation Stylesheet -->
    <link rel="stylesheet" href="{{asset('dependencies/animation-css/animation-css.css')}}" type="text/css">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

</head>

<style>
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

</style>
<header class="sticky-on">
    <div id="sticky-placeholder"></div>
    <div id="navbar-wrap" class="navbar-wrap">
        <div class="navbar-layout1">
            <div class="container">
                <div class="row no-gutters d-flex align-items-center position-relative">
                    <div class="col-lg-2 d-flex justify-content-top">
                        <div class="temp-logo text-center">
                            <a href="{{route('landing')}}" class="default-logo">
                                <img src="{{asset('bcs_logo_white.png')}}" alt="logo" class="img-fluid">
                            </a>
                            <a href="{{route('landing')}}" class="sticky-logo">
                                <img src="{{asset('bcs_logo.png')}}" alt="logo" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 d-flex justify-content-top">
                        <div class="temp-logo text-center">
                        <a href="{{route('landing')}}" class="default-logo">
                            <img src="{{asset('logo.png')}}" alt="logo" class="img-fluid">
                        </a>
                        <a href="{{route('landing')}}" class="sticky-logo">
                            <img src="{{asset('logo-black.png')}}" alt="logo" class="img-fluid">
                        </a>
                        </div>
                    </div>

                    <div class="col-lg-7 d-flex justify-content-end possition-static">
                        <nav id="dropdown" class="template-main-menu">
                            <ul>

                                <li>
                                    <a href="#">Certifications</a>
                                    <ul class="dropdown-menu-col-1">
                                        @if(isset($certificates))
                                            @foreach($certificates as $certificate)

                                                <li>
                                                    <a
                                                        href="{{route('certificate',$certificate->name)}}"><span>{{$certificate->name}}</span></a>
                                                </li>
                                            @endforeach
                                        @else
                                            @foreach($data['certificates'] as $certificate)

                                                <li>
                                                    <a
                                                        href="{{route('certificate',$certificate->name)}}"><span>{{$certificate->name}}</span></a>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Higher Education Qualifications</a>
                                    <ul class="dropdown-menu-col-1">
                                        @if(isset($membership))
                                            @foreach($membership as $memberships)

                                                <li>
                                                    <a
                                                        href="{{route('page',$memberships->name)}}"><span>{{$memberships->name}}</span></a>
                                                </li>
                                            @endforeach
                                        @else
                                            @foreach($data['membership'] as $memberships)

                                                <li>
                                                    <a
                                                        href="{{route('send_email',$memberships->name)}}"><span>{{$memberships->name}}</span></a>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{route('send_email')}}">Consulting</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-1 d-flex justify-content-end">
                        <ul class="header-action-items">
                            <li class="single-item d-none">
                                <a href="#template-search" title="Search" class="header-search">
                                    <i class="flaticon-search"></i>
                                </a>
                            </li>
                            <li class="single-item mr-2 d-none">
                                <a href="#" class="item-btn btn-ghost btn-light">Get a Quote</a>
                            </li>
                            <li class="single-item">
                                <button type="button" class="offcanvas-menu-btn menu-status-open">
                                    <span class="menu-btn-icon">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>
</header>
<!--=====================================-->
<!--=              Navbar End           =-->
<!--=====================================-->
