<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<style>
    {{--  Accordian Styling  --}}
    .panel-default{
        background: rgba(110, 156, 225, 0.1); 
        padding-top: 1rem;
        padding-bottom: 0.5rem;
        padding-left: 1rem;
    }

    .panel-body-links{
        padding-left: 20px;
        padding-top:10px;
        padding-bottom: 10px;
    }

    .panel-body-p1{
        margin: 0px;
        padding-bottom: 0px;
    }
    .panel-body-p2{
        margin: 0px;
        padding-top: 10px;
    }

    .panel-body-sub{
        padding-left: 20px;
        padding-top: 25px;
        padding-bottom: 10px;
    }

    .panel-body-link-icon{
        margin: 0px;
        padding-left: 10px;
    }

    .panel-body-certificate{
        padding-top: 20px;
    }

    .anchor-link{
    color: green;
    }

    .panel-title {
        padding-bottom: 10px;

    }

    .feature-check-icon{
        padding-right: 10px;
        padding-bottom: 20px;
        
    }

    .panel .panel-heading .panel-title a,
    .panel .panel-body p {
        color: #000 !important;
    }


</style>
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
        <div class="sticky-on sticky">
            <div id="sticky-placeholder"></div>
            <div id="navbar-wrap" class="navbar-wrap">
                <div class="navbar-layout1">
                    <div class="container">
                        <div class="row no-gutters d-flex align-items-center position-relative">
                            <div class="col-lg-2 d-flex justify-content-start">
                                <div class="temp-logo text-center">
                                    <a href="index.html" class="default-logo">
                                        <img src="{{asset('logo.png')}}" alt="logo" class="img-fluid">
                                    </a>
                                    <a href="index.html" class="sticky-logo">
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
                                                @if($data['certificates']!= '' || $data['certificates']!= null)
                                                    @foreach($data['certificates'] as $certificate)
                                                        <li>
                                                            <a href="{{route('certificate',$certificate->name)}}"><span>{{$certificate->name}}</span></a>
                                                        </li>
                                                    @endforeach
                                                @endif
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
        </div>
        <section class="feature-wrap-layout1">
            <div class="container">
                <div class="row gutters-50">
                    
                    <div
                        class="col-lg-6 col-12 d-flex align-items-center justify-content-center has-animation active-animation">
                        <div class="feature-box-layout1">
                            <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                                <h1 class="item-title">{{(isset($data['certificate']->page_details->h1))?$data['certificate']->page_details->h1:''}}</h1>
                            </div>
                            <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <p>{{(isset($data['certificate']->page_certificate_details->p1))?$data['certificate']->page_certificate_details->p1:''}}</p>
                            </div>
                            <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <ul>
                                    @if(isset($data['li']))
                                        @foreach($data['li'] as $li)
                                            <li class="row">

                                                <span class=" fa fa-check" style="margin-top: 10px;"></span>
                                                <p class="col-sm"> {{$li}} </p>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                        <h3 class="item-title">{{(isset($data['certificate']->certificate_details->h2))?$data['certificate']->certificate_details->h2:''}}</h3>
                    </div>
                    <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                        <p>
                            {{(isset($data['certificate']->certificate_details->p2))?$data['certificate']->certificate_details->p2:''}}
                        </p>
                    </div>
                   
                </div>
                @php
                    $i = 1
                @endphp
              
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
