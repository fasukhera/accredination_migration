<!--=====================================-->
<!--=            Navbar Start           =-->
<!--=====================================-->
<header class="sticky-on">
    <div id="sticky-placeholder"></div>
    <div id="navbar-wrap" class="navbar-wrap">
        <div class="navbar-layout1">
            <div class="container">
                <div class="row no-gutters d-flex align-items-center position-relative">
                    <div class="col-lg-2 d-flex justify-content-start">
                        <div class="temp-logo text-center">
                            <a href="" class="default-logo">
                                <img src="{{asset('logo.png')}}" alt="logo" class="img-fluid">
                            </a>
                            <a href="" class="sticky-logo">
                                <img src="{{asset('logo-black.png')}}" alt="logo" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 d-flex justify-content-end possition-static">
                        <nav id="dropdown" class="template-main-menu">
                            <ul>

                                <li>
                                    <a href="#">Certifications</a>
                                    <ul class="dropdown-menu-col-1">
                                        @foreach($certificates as $certificate)
                                            <li>
                                                <a href="{{route('certificate',$certificate->name)}}"><span>{{$certificate->name}}</span></a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Higher Education Qualifications</a>
                                </li>
                                <li>
                                    <a href="#">Consulting</a>
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
