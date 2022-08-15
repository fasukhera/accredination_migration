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

    .benefits-background {
        background-color: #f7f7d8;
    }

    @media only screen and (min-width: 1000px) {
        .temp-logo {
            position: relative !important;
        }

    }

    #ven {
        display: none;

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
                                <div class="col-lg-2 d-flex justify-content-start">
                                    <div class="temp-logo text-center">
                                        <a class="default-logo" href="{{route('landing')}}"><img alt="logo"
                                                class="img-fluid" src="{{asset('logo.png')}}"></a> <a
                                            class="sticky-logo" href="{{route('landing')}}"><img alt="logo"
                                                class="img-fluid" src="{{asset('logo-black.png')}}"></a>
                                    </div>
                                </div>
                                <div class="col-lg-9 d-flex justify-content-end possition-static">
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
                                                    @endif

                                                    @if(isset($data['certificates']))
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
                                                    @endif

                                                    @if(isset($data['membership']))
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
            <section class="feature-wrap-layout1">
                <div class="container">
                    <div class="row gutters-50">
                        <div
                            class="col-lg-12 col-12 d-flex align-items-center justify-content-center has-animation active-animation">
                            <div class="feature-box-layout1">
                                <!-- Main Header <-->
                                <div
                                    class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                                    <h1 class="">
                                        {{(isset($data['certificate']->membership_details->main_h))?$data['certificate']->membership_details->main_h:''}}
                                    </h1>
                                </div><!-- First Paragraph <-->
                                <div
                                    class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                    <h3>{{(isset($data['certificate']->membership_details->p1))?$data['certificate']->membership_details->p1:''}}
                                    </h3>
                                </div><!-- Second Paragraph <-->
                                <div
                                    class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                    <p class="page-intro-text">
                                        {{(isset($data['certificate']->membership_details->li))?$data['certificate']->membership_details->li:''}}
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

                                        <h3 class="item-title"><span class="" style="margin-top: 10px;"></span>
                                            <span> </span>
                                            {{(isset($data['certificate']->membership_details->h1))?$data['certificate']->membership_details->h1:''}}
                                        </h3>
                                    </div><!-- Who Paragraph <-->
                                    <div
                                        class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                        <p>{{(isset($data['certificate']->membership_details->p1_1))?$data['certificate']->membership_details->p1_1:''}}
                                        </p>
                                    </div>
                                    <div
                                        class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                        <p>{{(isset($data['certificate']->membership_details->p1_2))?$data['certificate']->membership_details->p1_2:''}}
                                        </p>
                                    </div>
                                    <div
                                        class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                        <p>{{(isset($data['certificate']->membership_details->p1_3))?$data['certificate']->membership_details->p1_3:''}}
                                        </p>
                                    </div><!-- Who Tags Paragraph <-->
                                    <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900"
                                        id="ven">
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
                                    @foreach($data['certificate']->membership_details->higher_page as
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
                        <div class="col-lg-6 col-12  has-animation active-animation">
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
                                                    <h3 class="item-title"> <span class=""
                                                            style="margin-top: 10px;"></span>
                                                        <span> </span>
                                                        {{(isset($data['certificate']->membership_details->h2))?$data['certificate']->membership_details->h2:''}}
                                                    </h3>
                                                </div>

                                                <!-- Entry Header <-->
                                                <div
                                                    class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                                                    <h4 class="item-title"> <span class=""
                                                            style="margin-top: 10px;"></span>
                                                        <span> </span>
                                                        {{(isset($data['certificate']->membership_details->h2_1))?$data['certificate']->membership_details->h2_1:''}}
                                                    </h4>
                                                </div>
                                                <!-- Entry Tags Paragraph <-->
                                                <div
                                                    class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                                    <ul>
                                                        <li style="list-style: none">@if(isset($data['li1']))
                                                            @foreach($data['li1'] as $li)</li>
                                                        <li class="row">
                                                            <span class=" fa fa-check" style="margin-top: 10px;"></span>
                                                            <p class="col-sm">{{$li}}</p>
                                                        </li>
                                                        <li style="list-style: none">@endforeach @endif</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Entry Paragraph <-->
                                        <div
                                            class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                            <p>{{(isset($data['certificate']->membership_details->p2))?$data['certificate']->membership_details->p2:''}}
                                            </p>
                                        </div>
                                        @endif

                                        @php
                                        $i = 1
                                        @endphp
                                        @foreach($data['certificate']->membership_details->higher_page as
                                        $key=>$accordion2)

                                        <div
                                            class="col-md-12 panel-body  translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                            <div class="panel-body">
                                                <div class="panel-group" id="accordion1{{$i+2}}">
                                                    <div class="panel-body-links">
                                                        <ul class="">
                                                            @if(isset($data['a7'][$key]))
                                                            @foreach($data['a7'][$key] as $anchor)
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
                            <div class="col-lg-6 col-12 has-animation active-animation">
                                <div class="feature-box-layout1">
                                    <!-- Learn Header <-->
                                    @if(empty($data['certificate']->membership_details->li2))
                                    <div>
                                        @else
                                        <div class="shadow">
                                            <div
                                                class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                                                <h3 class="item-title"> <span class=" fa fa-pencil-alt"
                                                        style="margin-top: 10px;"></span>
                                                    <span> </span>
                                                    {{(isset($data['certificate']->membership_details->h3))?$data['certificate']->membership_details->h3:''}}
                                                </h3>
                                            </div>

                                            <!-- Learn Tags Paragraph <-->
                                            <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900 learn-list"
                                                data-columns="2">
                                                <ul>
                                                    <li style="list-style: none">@if(isset($data['li2']))
                                                        @foreach($data['li2']
                                                        as
                                                        $li)</li>
                                                    <li>
                                                        <p class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900"
                                                            style="position: absolute; padding-left: 30px; margin: 0px; ">
                                                            {{$li}}
                                                        </p>
                                                        <span class="fas fa-circle fa-xs bullet-points"
                                                            style="padding-bottom: 10px;"></span>
                                                    </li>
                                                    <li style="list-style: none">@endforeach @endif</li>
                                                </ul>
                                            </div><!-- Learn Paragraph <-->
                                            <div
                                                class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                                <p>{{(isset($data['certificate']->membership_details->p3))?$data['certificate']->membership_details->p3:''}}
                                                </p>
                                            </div>


                                            @endif

                                            @php
                                            $i = 1
                                            @endphp
                                            @foreach($data['certificate']->membership_details->higher_page as
                                            $key=>$accordion2)

                                            <div
                                                class="col-md-12 panel-body  translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                                <div class="panel-body">
                                                    <div class="panel-group" id="accordion1{{$i+2}}">
                                                        <div class="panel-body-links">
                                                            <ul class="">
                                                                @if(isset($data['a7'][$key]))
                                                                @foreach($data['a7'][$key] as $anchor)
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
                                                        {{(isset($data['certificate']->membership_details->rh))?$data['certificate']->membership_details->rh:''}}
                                                    </h3>
                                                </div><!-- Resource Paragraph <-->
                                                <div
                                                    class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                                    <p>{{(isset($data['certificate']->membership_details->rp))?$data['certificate']->membership_details->rp:''}}
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
                                                @foreach($data['certificate']->membership_details->higher_page as
                                                $key=>$accordion2)

                                                <div
                                                    class="col-md-12 panel-body  translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                                    <div class="panel-body">
                                                        <div class="panel-group" id="accordion2{{$i+2}}">
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
                                    @foreach($data['certificate']->membership_details->higher_page as $key=>$accordion3)
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
                                                    @foreach($data['certificate']->membership_details->higher_page as
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
                                                    @foreach($data['certificate']->membership_details->higher_page as
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


            </section>


            @php
            $i++
            @endphp






        </div><!-- Last Header <-->

        <div
            class="col-lg-12 feature-wrap-layout29 container translate-bottom-75 opacity-animation transition-150 transition-delay-900">
            <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                <h3>{{(isset($data['certificate']->membership_details->last_h))?$data['certificate']->membership_details->last_h:''}}
                </h3>
            </div><!-- Last Tags <-->
            <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
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



        @if(empty($data['certificate']->membership_details->i1))



        @else
        <div class="d-flex justify-content-center benefits-background">
            <div class="translate-left-75 opacity-animation transition-150 transition-delay-10">
                <img src="{{(isset($data['certificate']->membership_details->i1))?$data['certificate']->membership_details->i1:''}}"
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
