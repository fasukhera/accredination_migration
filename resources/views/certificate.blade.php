<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<style>
    {{--  Accordian Styling  --}}
    .panel {
        background-image: linear-gradient(to bottom right, #e7e7e7, #cdecf8, #e7e7e7, #cdecf8);
        padding: 0.5rem 1rem;
    }

    .panel.panel {
        background-color: white;
    }

    .panel .panel-heading .panel-title {
        margin: unset;

    }

    .panel .panel-heading .panel-title a,
    .panel .panel-body p {
        color: #000 !important;
    }

    .panel .panel-body a {
        color: green;
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
                    <div class="col-lg-6 col-12 has-animation active-animation">
                        <div class="feature-box-layout1">
                            <div class="translate-left-75 opacity-animation transition-150 transition-delay-10">
                                <video width="320" height="240" controls>
                                    <source
                                        src="{{(isset($data['certificate']->certificate_details->v1))?$data['certificate']->certificate_details->v1:''}}"
                                        type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-6 col-12 d-flex align-items-center justify-content-center has-animation active-animation">
                        <div class="feature-box-layout1">
                            <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                                <h3 class="item-title">{{(isset($data['certificate']->certificate_details->h1))?$data['certificate']->certificate_details->h1:''}}</h3>
                            </div>
                            <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <p>{{(isset($data['certificate']->certificate_details->p1))?$data['certificate']->certificate_details->p1:''}}</p>
                            </div>
                            <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <ul>
                                    @if(isset($data['li']))
                                        @foreach($data['li'] as $li)
                                            <li>
                                                <span class="fa fa-check"></span>
                                                {{$li}}
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                        <h3 class="item-title">{{(isset($data['certificate']->certificate_details->h2))?$data['certificate']->certificate_details->h2:''}}</h3>
                    </div>
                    <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                        <p>
                            {{(isset($data['certificate']->certificate_details->p2))?$data['certificate']->certificate_details->p2:''}}
                        </p>
                    </div>
                    <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                        <h3 class="item-title">
                            {{(isset($data['certificate']->certificate_details->certificate_details_accordian->main_h))?$data['certificate']->certificate_details->certificate_details_accordian->main_h:''}}
                        </h3>
                    </div>
                </div>
                @foreach($data['certificate']->certificate_details->certificate_details_accordian as $key=>$accordion)
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel-group" id="accordion1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion1"
                                               href="#collapseTwo"><span
                                                    class="fa fa-plus"></span> {{(isset($accordion->h1))?$accordion->h1:''}}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="panel-body">
                                                <div class="panel-group" id="accordion21">
                                                    <div class="panel">
                                                        <div class="panel-body">
                                                            <p class="offset-1">
                                                                {{(isset($accordion->p1))?$accordion->p1:''}}
                                                            </p>
                                                            <ul>
                                                                @if(isset($data['a']))
                                                                    @foreach($data['a'] as $anchor)
                                                                        <li>
                                                                            <span class="fa fa-link"></span>
                                                                            <a class="offset-1"
                                                                               href="{{$anchor}}">{{$anchor}}</a>
                                                                        </li>
                                                                    @endforeach
                                                                @endif
                                                            </ul>
                                                            <div>
                                                                <ul>
                                                                    @if(isset($data['certificationx']))
                                                                        @foreach($data['certificationx'] as $certificationx)
                                                                            <li>
                                                                                <span
                                                                                    class="fa fa-link offset-2"></span>
                                                                                <a class=""
                                                                                   href="{{$certificationx}}">{{$certificationx}}</a>
                                                                            </li>
                                                                        @endforeach
                                                                    @endif
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <a data-toggle="collapse" data-parent="#accordion21"
                                                           href="#collapseTwoOne" style="color: #000 !important;"><span
                                                                class="fa fa-plus"
                                                                style="color: #000 !important;"></span>
                                                            {{(isset($accordion->h2))?$accordion->h2:''}}
                                                        </a>
                                                        <div id="collapseTwoOne" class="panel-collapse collapse">
                                                            <div class="panel-body offset-1"><p>
                                                                    {{(isset($accordion->p2))?$accordion->p2:''}}
                                                                </p></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
