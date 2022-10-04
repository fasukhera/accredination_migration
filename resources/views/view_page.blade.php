<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    @include('includes.head')

</head>

<style>
    {
            {
            -- Accordian Styling --
        }
    }

    h1,
    h2 {
        text-align: center !important;
    }

    .page-intro-text {
        font-size: 15pt;
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

    .bullet-points {
        padding-right: 10px;
    }

    .learn-list {
        columns: 2;
        -webkit-columns: 2;
        -moz-columns: 2;

    }

    .feature-check-icon {
        padding-right: 10px;
        padding-bottom: 20px;

    }

    .panel .panel-heading .panel-title a,
    .panel .panel-body p {
        color: #000 !important;
    }

    .section-grey {
        background-color: #c9c9c9;
        padding: 10px;
    }

    .shadow {
        justify-content: space-between;
        background: white;
        padding: 30px;
        box-shadow: 6px 7px 20px 6px #ccc;
        margin: 0 0 30px 0;
        min-height: 100%;
    }

    .certificate-shadow {
        justify-content: space-between;
        background: white;
        padding: 30px;
        box-shadow: 6px 7px 20px 6px #ccc;
        margin: 0 0 30px 0;
        border-left: 5px solid #5a49f8;
        border-right: 5px solid #5a49f8;
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

    .dragon {
        float: left;
    }

</style>

<body>
    <div id="preloader" class="tlp-preloader">
        <div class="animation-preloader">
            <div class="tlp-spinner"></div>
            <img src="{{asset('logo-black.png')}}" alt="Preloader">
        </div>
    </div>
    <div class="wrapper" id="wrapper">
        <a class="return-to-top" data-type="section-switch" href="#main_content"><i
                class="fas fa-angle-double-up"></i></a>
        <div id="main_content">
            <div class="sticky-on sticky">
                <div id="sticky-placeholder"></div>
                <div class="navbar-wrap" id="navbar-wrap">
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
                                    <nav class="template-main-menu" id="dropdown">
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
                                                            href="{{route('page',$memberships->name)}}"><span>{{$memberships->name}}</span></a>
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
                                            <a class="header-search" href="#template-search" title="Search"><i
                                                    class="flaticon-search"></i>
                                            </a>
                                        </li>
                                        <li class="single-item mr-2 d-none">
                                            <a class="item-btn btn-ghost btn-light" href="#">Get a Quote</a>
                                        </li>
                                        <li class="single-item"><button class="offcanvas-menu-btn menu-status-open"
                                                type="button"><span class="menu-btn-icon"><span></span> <span></span>
                                                    <span></span></span></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="feature-wrap-layout1" style="padding-bottom: 0px;">
                <div class="container">
                    <div class="row gutters-50">
                        <div class="col-lg-12 col-12 d-flex align-items-center justify-content-center has-animation active-animation"
                            style="margin-top: 50px;">
                            <div class="feature-box-layout1">
                                <!-- Main Header <-->
                                <div
                                    class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                                    <h1 class="">
                                        {{(isset($data['certificate']->page_details->h1))?$data['certificate']->page_details->h1:''}}
                                    </h1>
                                </div><!-- First Paragraph <-->
                                <div
                                    class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                    <h3>{{(isset($data['certificate']->page_details->p1))?$data['certificate']->page_details->p1:''}}
                                    </h3>
                                </div><!-- Second Paragraph <-->
                                <div
                                    class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                    <p class="page-intro-text">
                                        {{(isset($data['certificate']->page_details->p2))?$data['certificate']->page_details->p2:''}}
                                    </p>
                                </div>
                                <div
                                    class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                    <ul>
                                        <li style="list-style: none">
                                            @if(isset($data['first_li']))
                                            @foreach($data['first_li'] as $li)</li>
                                        <li class="row">
                                            <span class=" fa fa-check" style="margin-top: 10px;"></span>
                                            <p class="col-sm">{{$li}}</p>
                                        </li>
                                        <li style="list-style: none">@endforeach @endif</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 col-12 d-flex has-animation active-animation">
                            <div class="feature-box-layout1">
                                <!-- 4 split BOX [ Who, Entry, Learn, Resource ] <-->
                                <!-- Who Header <-->
                                <div class="shadow">
                                    <div
                                        class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">

                                        <h3 class="item-title"><span class=" fa fa-user"
                                                style="margin-top: 10px;"></span>
                                            <span> </span>
                                            {{(isset($data['certificate']->page_details->wh))?$data['certificate']->page_details->wh:''}}
                                        </h3>
                                    </div><!-- Who Paragraph <-->
                                    <div
                                        class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                        <p>{{(isset($data['certificate']->page_details->wp))?$data['certificate']->page_details->wp:''}}
                                        </p>
                                    </div><!-- Who Tags Paragraph <-->
                                    <div
                                        class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                        <ul>
                                            <li style="list-style: none">@if(isset($data['li1']))
                                                @foreach($data['li1']
                                                as
                                                $li)</li>
                                            <li class="row">
                                                <span class=" fa fa-check" style="margin-top: 10px;"></span>
                                                <p class="col-sm">{{$li}}</p>
                                            </li>
                                            <li style="list-style: none">@endforeach @endif</li>
                                        </ul>
                                    </div>

                                    @php
                                    $i = 1
                                    @endphp
                                    @foreach($data['certificate']->page_details->higher_page as
                                    $key=>$accordion2)

                                    <div
                                        class="col-md-12 panel-body  translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                        <div class="panel-body">
                                            <div class="panel-group" id="accordion1{{$i+2}}">
                                                <div class="panel-body-links">
                                                    <ul class="">
                                                        @if(isset($data['a1'][$key]))
                                                        @foreach($data['a1'][$key] as $anchor)
                                                        <li>
                                                            <span class="fas fa-circle fa-xs bullet-points"></span>
                                                            <a class="anchor-link panel-body-link-icon offset-1"
                                                                href="{{$anchor[0]}}">{{$anchor[1]}}</a>
                                                        </li>
                                                        @endforeach
                                                        @endif
                                                    </ul>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 d-flex has-animation active-animation">
                            <div class="feature-box-layout1">
                                @if(empty($data['li2']))
                                <div>
                                    @else
                                    <div class="shadow">
                                        <div class="col-lg-12 col-12 d-flex has-animation active-animation">
                                            <div class="feature-box-layout1">
                                                <!-- Entry Header <-->
                                                <div
                                                    class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                                                    <h3 class="item-title"> <span class=" fa fa-info-circle"
                                                            style="margin-top: 10px;"></span>
                                                        <span> </span>
                                                        {{(isset($data['certificate']->page_details->eh))?$data['certificate']->page_details->eh:''}}
                                                    </h3>
                                                </div><!-- Entry Paragraph <-->
                                                <div
                                                    class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                                    <p>{{(isset($data['certificate']->page_details->ep))?$data['certificate']->page_details->ep:''}}
                                                    </p>
                                                </div><!-- Entry Tags Paragraph <-->
                                                <div
                                                    class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                                    <ul>
                                                        <li style="list-style: none">@if(isset($data['li2']))
                                                            @foreach($data['li2'] as $li)</li>
                                                        <li class="row">
                                                            <span class=" fa fa-check"></span>
                                                            <p class="col-sm">{{$li}}</p>
                                                        </li>
                                                        <li style="list-style: none">@endforeach @endif</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                        @php
                                        $i = 1
                                        @endphp
                                        @foreach($data['certificate']->page_details->higher_page as
                                        $key=>$accordion2)

                                        <div
                                            class="col-md-12 panel-body  translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                            <div class="panel-body">
                                                <div class="panel-group" id="accordion1{{$i+2}}">
                                                    <div class="panel-body-links">
                                                        <ul class="">
                                                            @if(isset($data['a2'][$key]))
                                                            @foreach($data['a2'][$key] as $anchor)
                                                            <li>
                                                                <span class="fas fa-circle fa-xs bullet-points"></span>
                                                                <a class="anchor-link panel-body-link-icon offset-1"
                                                                    href="{{$anchor[0]}}">{{$anchor[1]}}</a>
                                                            </li>
                                                            @endforeach
                                                            @endif
                                                        </ul>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12  has-animation active-animation">
                                <div class="feature-box-layout1">
                                    <!-- Learn Header <-->
                                    @if(empty($data['certificate']->page_details->lh))
                                    <div>
                                        @else
                                        <div class="shadow">
                                            <div
                                                class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                                                <h3 class="item-title"> <span class=" fa fa-pencil-alt"
                                                        style="margin-top: 10px;"></span>
                                                    <span> </span>
                                                    {{(isset($data['certificate']->page_details->lh))?$data['certificate']->page_details->lh:''}}
                                                </h3>
                                            </div><!-- Learn Paragraph <-->
                                            <div
                                                class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                                <p>{{(isset($data['certificate']->page_details->lp))?$data['certificate']->page_details->lp:''}}
                                                </p>
                                            </div><!-- Learn Tags Paragraph <-->
                                            <div
                                                class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900 ">
                                                <ul>
                                                    <li style="list-style: none">@if(isset($data['li3']))
                                                        @foreach($data['li3']
                                                        as
                                                        $li)</li>
                                                    <li>
                                                        <p class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900"
                                                            style="position: absolute; padding-left: 30px; margin: 0px; ">
                                                            {{$li}}
                                                        </p>
                                                        <span class="fas fa-circle fa-xs bullet-points"
                                                            style="padding-bottom: 100px;"></span>
                                                    </li>
                                                    <li style="list-style: none">@endforeach @endif</li>
                                                </ul>
                                            </div>


                                            @endif

                                            @php
                                            $i = 1
                                            @endphp
                                            @foreach($data['certificate']->page_details->higher_page as
                                            $key=>$accordion2)

                                            <div
                                                class="col-md-12 panel-body  translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                                <div class="panel-body">
                                                    <div class="panel-group" id="accordion1{{$i+2}}">
                                                        <div class="panel-body-links">
                                                            <ul class="">
                                                                @if(isset($data['a3'][$key]))
                                                                @foreach($data['a3'][$key] as $anchor)
                                                                <li>
                                                                    <span
                                                                        class="fas fa-circle fa-xs bullet-points"></span>
                                                                    <a class="anchor-link panel-body-link-icon offset-1"
                                                                        href="{{$anchor[0]}}">{{$anchor[1]}}</a>
                                                                </li>
                                                                @endforeach
                                                                @endif
                                                            </ul>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-6 col-12 d-flex has-animation active-animation">
                                    <div class="feature-box-layout1">
                                        <!-- Resource Header <-->
                                        @if(empty($data['li4']))
                                        <div>
                                            @else
                                            <div class="shadow">
                                                <div
                                                    class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                                                    <h3 class="item-title"> <span class=" fa fa-pencil-alt"
                                                            style="margin-top: 10px;"></span>
                                                        <span> </span>
                                                        {{(isset($data['certificate']->page_details->rh))?$data['certificate']->page_details->rh:''}}
                                                    </h3>
                                                </div><!-- Resource Paragraph <-->
                                                <div
                                                    class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                                    <p>{{(isset($data['certificate']->page_details->rp))?$data['certificate']->page_details->rp:''}}
                                                    </p>
                                                </div><!-- Resource Tags Paragraph <-->
                                                <div
                                                    class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                                    <ul>
                                                        <li style="list-style: none">
                                                            @if(isset($data['li4']))
                                                            @foreach($data['li4'] as $li)</li>
                                                        <li class="row">
                                                            <span class=" fa fa-check" style="margin-top: 10px;"></span>
                                                            <p class="col-sm">{{$li}}</p>
                                                        </li>
                                                        <li style="list-style: none">@endforeach @endif</li>
                                                    </ul>
                                                </div>
                                                @endif

                                                @php
                                                $i = 1
                                                @endphp
                                                @foreach($data['certificate']->page_details->higher_page as
                                                $key=>$accordion2)

                                                <div
                                                    class="col-md-12 panel-body  translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                                    <div class="panel-body">
                                                        <div class="panel-group" id="accordion1{{$i+2}}">
                                                            <div class="panel-body-links">
                                                                <ul class="">
                                                                    @if(isset($data['a4'][$key]))
                                                                    @foreach($data['a4'][$key] as $anchor)
                                                                    <li>
                                                                        <span
                                                                            class="fas fa-circle fa-xs bullet-points"></span>
                                                                        <a class="anchor-link panel-body-link-icon offset-1"
                                                                            href="{{$anchor[0]}}">{{$anchor[1]}}</a>
                                                                    </li>
                                                                    @endforeach
                                                                    @endif
                                                                </ul>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>


                                    @php
                                    $i = 1
                                    @endphp
                                    @foreach($data['certificate']->page_details->higher_page as $key=>$accordion3)
                                    @if(empty($accordion3->exh))

                                    @else
                                    <div class="col-lg-12 has-animation active-animation">
                                        <div class="feature-box-layout1">
                                            <!-- Extra Header <-->



                                            <div class="shadow">
                                                <div
                                                    class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                                                    <h3 class="item-title"> <span class="fa fa-medal fa-w-16 "
                                                            style="margin-top: 10px;"></span>
                                                        <span> </span>
                                                        {{(isset($accordion3->exh))?$accordion3->exh:''}}
                                                    </h3>
                                                </div><!-- Extra Paragraph <-->
                                                <div
                                                    class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                                    <p>{{(isset($accordion3->exp))?$accordion3->exp:''}}
                                                    </p>
                                                </div><!-- Extra Tags Paragraph <-->
                                                <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900 learn-list"
                                                    data-columns="2">
                                                    <ul>
                                                        <li style="list-style: none">@if(isset($data['exli']))
                                                            @foreach($data['exli']
                                                            as
                                                            $li)</li>
                                                        <li>
                                                            <p class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900"
                                                                style="position: absolute; padding-left: 30px; margin: 0px; ">
                                                                {{$li}}
                                                            </p>
                                                            <span class="fas fa-circle fa-xs bullet-points"
                                                                style="padding-bottom: 100px;"></span>
                                                        </li>
                                                        <li style="list-style: none">@endforeach @endif</li>
                                                    </ul>
                                                </div>



                                                <div class="row">

                                                    @php
                                                    $i = 1
                                                    @endphp
                                                    @foreach($data['certificate']->page_details->higher_page as
                                                    $key=>$accordion2)

                                                    <div class="col-lg-6">

                                                        <div
                                                            class="  translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                                            <div class="panel-body">
                                                                <div class="panel-group" id="accordion1{{$i+2}}">
                                                                    <div class="panel-body-links">
                                                                        <ul class="">
                                                                            @if(isset($data['a5'][$key]))
                                                                            @foreach($data['a5'][$key] as $anchor)
                                                                            <li>
                                                                                <span
                                                                                    class="fas fa-circle fa-xs bullet-points"></span>
                                                                                <a class="anchor-link panel-body-link-icon offset-1"
                                                                                    href="{{$anchor[0]}}">{{$anchor[1]}}</a>
                                                                            </li>
                                                                            @endforeach
                                                                            @endif
                                                                        </ul>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach


                                                    </div>
                                                    @php
                                                    $i = 1
                                                    @endphp
                                                    @foreach($data['certificate']->page_details->higher_page as
                                                    $key=>$accordion2)

                                                    @if(empty($accordion3->exh))

                                                    @else
                                                    <div class="col-lg-6">

                                                        <div
                                                            class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                                            <div class="panel-body">
                                                                <div class="panel-group" id="accordion1{{$i+2}}">
                                                                    <div class="panel-body-links">
                                                                        <ul class="">
                                                                            @if(isset($data['a6'][$key]))
                                                                            @foreach($data['a6'][$key] as $anchor)
                                                                            <li>
                                                                                <span
                                                                                    class="fas fa-circle fa-xs bullet-points"></span>
                                                                                <a class="anchor-link panel-body-link-icon offset-1"
                                                                                    href="{{$anchor[0]}}">{{$anchor[1]}}</a>
                                                                            </li>
                                                                            @endforeach
                                                                            @endif
                                                                        </ul>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>


                                                        @endif
                                                        @endforeach
                                                    </div>



                                                </div>




                                            </div>
                                            @endif
                                            @endforeach


                                        </div>

                                    </div>
                                </div>
                            </div>
            </section>

            @php
            $i = 1
            @endphp
            @foreach($data['certificate']->page_details->link_details as $key=>$accordion1)
            <div class="">
                <div class="col-lg-12 d-flex align-items-center justify-content-center">
                    <div class="panel-group" id="accordion1{{$i}}">
                        <div class="panel panel-default shadow">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion1{{$i}}" href="#collapse{{$i}}">
                                        {{(isset($accordion1->main_h))?$accordion1->main_h:''}}
                                    </a>
                                </h4>
                            </div>

                            <div class="col-lg-12 ">
                                <div class="row">
                                    <div class="panel-group" id="accordion1{{$i+2}}">
                                        <div class="col-lg-4 dragon">
                                            <p class="panel-body-p1 offset-1">
                                                {{(isset($accordion1->p1))?$accordion1->p1:''}}
                                            </p>
                                            <div class="panel-body-links">
                                                <ul class="">
                                                    @if(isset($data['a1'][$key]))
                                                    @foreach($data['a1'][$key] as $anchor)
                                                    <li>
                                                        <span class="fa fa-link"></span>
                                                        <a class="anchor-link panel-body-link-icon offset-1"
                                                            href="{{$anchor[0]}}">{{$anchor[1]}}</a>
                                                    </li>
                                                    @endforeach
                                                    @endif
                                                </ul>

                                            </div>

                                        </div>

                                        <div class="col-lg-4 dragon">
                                            <p class="panel-body-p1 offset-1">
                                                {{(isset($accordion1->p2))?$accordion1->p2:''}}
                                            </p>
                                            <div class="panel-body-links">
                                                <ul class="">
                                                    @if(isset($data['a2'][$key]))
                                                    @foreach($data['a2'][$key] as $anchor)
                                                    <li>
                                                        <span class="fa fa-link"></span>
                                                        <a class="anchor-link panel-body-link-icon offset-1"
                                                            href="{{$anchor[0]}}">{{$anchor[1]}}</a>
                                                    </li>
                                                    @endforeach
                                                    @endif
                                                </ul>

                                            </div>

                                        </div>

                                        <div class="col-lg-4 dragon">
                                            <p class="panel-body-p1 offset-1">
                                                {{(isset($accordion1->p3))?$accordion1->p3:''}}
                                            </p>
                                            <div class="panel-body-links">
                                                <ul class="">
                                                    @if(isset($data['a3'][$key]))
                                                    @foreach($data['a3'][$key] as $anchor)
                                                    <li>
                                                        <span class="fa fa-link"></span>
                                                        <a class="anchor-link panel-body-link-icon offset-1"
                                                            href="{{$anchor[0]}}">{{$anchor[1]}}</a>
                                                    </li>
                                                    @endforeach
                                                    @endif
                                                </ul>

                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            &nbsp;
            @php
            $i++
            @endphp
            @endforeach
            <section class="feature-wrap-layout1">


                @if(empty($data['certificate']->page_details->bh || $data['certificate']->page_details->r_bh1 ))
                @else
                <div class="container">
                    <div class="row gutters-50">
                        <!-- Outside Box Header <-->

                            <div
                                class="col-md-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                                <h2 class="">
                                    {{(isset($data['certificate']->page_details->bh))?$data['certificate']->page_details->bh:''}}
                                </h2>
                            </div>
                        <div class="row col-lg-12">
                            @if(empty($data['certificate']->page_details->l_bh1))
                            @else
                            <div class="col-lg-6">

                                <div class="shadow">
                                    <!-- LEFT BOX <-->
                                    <!-- Inside Box Header = 1 <-->
                                    <div
                                        class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                        <h3>{{(isset($data['certificate']->page_details->l_bh1))?$data['certificate']->page_details->l_bh1:''}}
                                        </h3>
                                    </div><!-- Box Paragraph = 1 <-->
                                    <div
                                        class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                        <p>{{(isset($data['certificate']->page_details->l_bp1))?$data['certificate']->page_details->l_bp1:''}}
                                        </p>
                                    </div><!-- Inside Box Header = 2 <-->
                                    <div
                                        class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                        <h3>{{(isset($data['certificate']->page_details->l_bh2))?$data['certificate']->page_details->l_bh2:''}}
                                        </h3>
                                    </div><!-- Box Paragraph = 2 <-->
                                    <div
                                        class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                        <p>{{(isset($data['certificate']->page_details->l_bp2))?$data['certificate']->page_details->l_bp2:''}}
                                        </p>
                                    </div><!-- Inside Box Header = 3 <-->
                                    <div
                                        class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                        <h3>{{(isset($data['certificate']->page_details->l_bh3))?$data['certificate']->page_details->l_bh3:''}}
                                        </h3>
                                    </div><!-- Box Paragraph = 3 <-->
                                    <div
                                        class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                        <p>{{(isset($data['certificate']->page_details->l_bp3))?$data['certificate']->page_details->l_bp3:''}}
                                        </p>
                                    </div><!-- Inside Box Header = 4 <-->
                                    <div
                                        class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                        <h3>{{(isset($data['certificate']->page_details->l_bh4))?$data['certificate']->page_details->l_bh4:''}}
                                        </h3>
                                    </div><!-- Box Paragraph = 4 <-->
                                    <div
                                        class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                        <p>{{(isset($data['certificate']->page_details->l_bp4))?$data['certificate']->page_details->l_bp4:''}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if(empty($data['certificate']->page_details->r_bh1))
                            @else
                            <div class="col-lg-6">




                                    <div class="shadow">
                                        <!-- RIGHT BOX <-->
                                        <!-- Inside Box Header = 1 <-->

                                        <div
                                            class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                            <h3>{{(isset($data['certificate']->page_details->r_bh1))?$data['certificate']->page_details->r_bh1:''}}
                                            </h3>
                                        </div><!-- Box Paragraph = 1 <-->
                                        <div
                                            class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                            <p>{{(isset($data['certificate']->page_details->r_bp1))?$data['certificate']->page_details->r_bp1:''}}
                                            </p>
                                        </div><!-- Inside Box Header = 2 <-->
                                        <div
                                            class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                            <h3>{{(isset($data['certificate']->page_details->r_bh2))?$data['certificate']->page_details->r_bh2:''}}
                                            </h3>
                                        </div><!-- Box Paragraph = 2 <-->
                                        <div
                                            class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                            <p>{{(isset($data['certificate']->page_details->r_bp2))?$data['certificate']->page_details->r_bp2:''}}
                                            </p>
                                        </div><!-- Inside Box Header = 3 <-->
                                        <div
                                            class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                            <h3>{{(isset($data['certificate']->page_details->r_bh3))?$data['certificate']->page_details->r_bh3:''}}
                                            </h3>
                                        </div><!-- Box Paragraph = 3 <-->
                                        <div
                                            class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                            <p>{{(isset($data['certificate']->page_details->l_bp3))?$data['certificate']->page_details->l_bp3:''}}
                                            </p>
                                        </div><!-- Inside Box Header = 4 <-->
                                        <div
                                            class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                            <h3>{{(isset($data['certificate']->page_details->r_bh4))?$data['certificate']->page_details->r_bh4:''}}
                                            </h3>
                                        </div><!-- Box Paragraph = 4 <-->
                                        <div
                                            class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                            <p>{{(isset($data['certificate']->page_details->r_bp4))?$data['certificate']->page_details->r_bp4:''}}
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>


                    </div>
                </div>
            </section>
            @endif

        </div><!-- Last Header <-->
        <div class="col-lg-12 d-flex align-items-center justify-content-center">
            @if(empty($data['last_li']))
            <div>
                @else

                <div class="col-lg-6 shadow " style="margin-top: 50px;">
                    <div
                        class="d-flex align-items-center justify-content-center translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                        <h3>{{(isset($data['certificate']->page_details->last_h))?$data['certificate']->page_details->last_h:''}}
                        </h3>
                    </div><!-- Last Tags <-->
                    <div
                        class="col-lg-12 d-flex align-items-center justify-content-center translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                        <ul>
                            <li style="list-style: none">
                                @if(isset($data['last_li']))
                                @foreach($data['last_li'] as $li)</li>
                            <li class="row">
                                <span class=" fa fa-check" style="margin-top: 10px;"></span>
                                <p class="col-sm">{{$li}}</p>
                            </li>
                            <li style="list-style: none">@endforeach @endif</li>
                        </ul>
                    </div>




                </div>
            </div>
            @endif
        </div>

        </div>





        @php
        $i = 1
        @endphp
        @foreach($data['certificate']->page_details->page_details_accordian as $key=>$accordion)
        <div class="container translate-bottom-75 opacity-animation transition-150 transition-delay-900">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-group" id="accordion{{$i}}">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <h4 data-toggle="collapse" data-parent="#accordion{{$i}}" href="#collapse{{$i}}">
                                        <span class="fa fa-plus"></span> {{(isset($accordion->h1))?$accordion->h1:''}}
                                    </h4>
                                </h4>
                            </div>


                            <div id="collapse{{$i}}" class="panel-collapse collapse">
                                <div class="col-md-12 panel-body">
                                    <div class="panel-body">
                                        <div class="panel-group" id="accordion{{$i+2}}">
                                            <div class="panel">

                                                <p class="panel-body-p1 offset-1">
                                                    {{(isset($accordion->p1))?$accordion->p1:''}}
                                                </p>
                                                <div class="panel-body-p1 offset-1">
                                                    <ul>
                                                        <li style="list-style: none">
                                                            @if(isset($data['acc_li'][$key]))
                                                            @foreach($data['acc_li'][$key] as $li)</li>
                                                        <li class="row">
                                                            <span class=" fa fa-check" style="margin-top: 10px;"></span>
                                                            <p class="col-sm">{{$li}}</p>
                                                        </li>
                                                        <li style="list-style: none">@endforeach @endif</li>
                                                    </ul>
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
        </div>
    </div>
    &nbsp;
    @php
    $i++
    @endphp
    @endforeach

    @if(empty($data['certificate']->page_details->i1))



    @else
    <div class="d-flex justify-content-center">
        <div class="translate-left-75 opacity-animation transition-150 transition-delay-10">
            <img src="{{(isset($data['certificate']->page_details->i1))?$data['certificate']->page_details->i1:''}}"
                alt="">
        </div>
    </div>
    @endif


    </div>

    </section>@include('includes.footer') @include('includes.offcanvas')
    </div>
    </div><!-- Dependency Scripts -->
    @include('includes.dependencies')
    <script src="assets/js/app.js">
    </script>


</body>

</html>
