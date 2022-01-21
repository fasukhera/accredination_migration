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

                            <!-- Main Header <-->
                            <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                                <h1 class="item-title">{{(isset($data['certificate']->page_details->h1))?$data['certificate']->page_details->h1:''}}</h1>
                            </div>

                            <!-- First Paragraph <-->
                            <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <p>{{(isset($data['certificate']->page_details->p1))?$data['certificate']->page_details->p1:''}}</p>
                            </div>

                            <!-- Second Paragraph <-->
                            <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <p>{{(isset($data['certificate']->page_details->p2))?$data['certificate']->page_details->p2:''}}</p>
                            </div>


                            <!-- 4 split BOX [ Who, Entry, Learn, Resource ] <-->

                              <!-- Who Header <-->
                            <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                                <h3 class="item-title">{{(isset($data['certificate']->page_details->wh))?$data['certificate']->page_details->wh:''}}</h3>
                            </div>

                              <!-- Who Paragraph <-->
                            <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <p>{{(isset($data['certificate']->page_details->wp))?$data['certificate']->page_details->wp:''}}</p>
                            </div>

                              <!-- Who Tags Paragraph <-->
                            <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <ul>
                                    @if(isset($data['li1']))
                                        @foreach($data['li1'] as $li)
                                            <li class="row">

                                                <span class=" fa fa-check" style="margin-top: 10px;"></span>
                                                <p class="col-sm"> {{$li}} </p>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>


                              <!-- Entry Header <-->
                            <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                                <h3 class="item-title">{{(isset($data['certificate']->page_details->eh))?$data['certificate']->page_details->eh:''}}</h3>
                            </div>

                              <!-- Entry Paragraph <-->
                            <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <p>{{(isset($data['certificate']->page_details->ep))?$data['certificate']->page_details->ep:''}}</p>
                            </div>

                              <!-- Entry Tags Paragraph <-->
                            <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <ul>
                                    @if(isset($data['li2']))
                                        @foreach($data['li2'] as $li)
                                            <li class="row">

                                                <span class=" fa fa-check" style="margin-top: 10px;"></span>
                                                <p class="col-sm"> {{$li}} </p>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>


                              <!-- Learn Header <-->
                              <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                                <h3 class="item-title">{{(isset($data['certificate']->page_details->lh))?$data['certificate']->page_details->lh:''}}</h3>
                            </div>

                              <!-- Learn Paragraph <-->
                            <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <p>{{(isset($data['certificate']->page_details->lp))?$data['certificate']->page_details->lp:''}}</p>
                            </div>

                              <!-- Learn Tags Paragraph <-->
                            <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <ul>
                                    @if(isset($data['li3']))
                                        @foreach($data['li3'] as $li)
                                            <li class="row">

                                                <span class=" fa fa-check" style="margin-top: 10px;"></span>
                                                <p class="col-sm"> {{$li}} </p>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>

                              <!-- Resource Header <-->
                              <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                                <h3 class="item-title">{{(isset($data['certificate']->page_details->rh))?$data['certificate']->page_details->rh:''}}</h3>
                            </div>

                              <!-- Resource Paragraph <-->
                            <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <p>{{(isset($data['certificate']->page_details->rp))?$data['certificate']->page_details->rp:''}}</p>
                            </div>

                              <!-- Resource Tags Paragraph <-->
                            <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <ul>
                                    @if(isset($data['li4']))
                                        @foreach($data['li4'] as $li)
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

                    <!-- Outside Box Header <-->
                    <div class="col-md-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
                        <h2 class="item-title">{{(isset($data['certificate']->page_details->bh))?$data['certificate']->page_details->bh:''}}</h2>
                    </div>

                    <!-- LEFT BOX <-->

                       <!-- Inside Box Header = 1 <-->
                    <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                        <h3>
                            {{(isset($data['certificate']->page_details->l_bh1))?$data['certificate']->page_details->l_bh1:''}}
                        </h3>
                    </div>
                        <!-- Box Paragraph = 1 <-->
                    <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <p>{{(isset($data['certificate']->page_details->l_bp1))?$data['certificate']->page_details->l_bp1:''}}</p>
                            </div>

                      <!-- Inside Box Header = 2 <-->
                      <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                        <h3>
                            {{(isset($data['certificate']->page_details->l_bh2))?$data['certificate']->page_details->l_bh2:''}}
                        </h3>
                    </div>
                        <!-- Box Paragraph = 2 <-->
                    <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <p>{{(isset($data['certificate']->page_details->l_bp2))?$data['certificate']->page_details->l_bp2:''}}</p>
                            </div>

                       <!-- Inside Box Header = 3 <-->
                       <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                        <h3>
                            {{(isset($data['certificate']->page_details->l_bh3))?$data['certificate']->page_details->l_bh3:''}}
                        </h3>
                    </div>
                        <!-- Box Paragraph = 3 <-->
                    <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <p>{{(isset($data['certificate']->page_details->l_bp3))?$data['certificate']->page_details->l_bp3:''}}</p>
                            </div>

                      <!-- Inside Box Header = 4 <-->
                      <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                        <h3>
                            {{(isset($data['certificate']->page_details->l_bh4))?$data['certificate']->page_details->l_bh4:''}}
                        </h3>
                    </div>
                        <!-- Box Paragraph = 4 <-->
                    <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <p>{{(isset($data['certificate']->page_details->l_bp4))?$data['certificate']->page_details->l_bp4:''}}</p>
                            </div>


                 <!-- RIGHT BOX <-->


                 <!-- Inside Box Header = 1 <-->
                 <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                        <h3>
                            {{(isset($data['certificate']->page_details->r_bh1))?$data['certificate']->page_details->r_bh1:''}}
                        </h3>
                    </div>
                        <!-- Box Paragraph = 1 <-->
                    <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <p>{{(isset($data['certificate']->page_details->r_bp1))?$data['certificate']->page_details->r_bp1:''}}</p>
                            </div>


                      <!-- Inside Box Header = 2 <-->
                      <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                        <h3>
                            {{(isset($data['certificate']->page_details->r_bh2))?$data['certificate']->page_details->r_bh2:''}}
                        </h3>
                    </div>
                        <!-- Box Paragraph = 2 <-->
                    <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <p>{{(isset($data['certificate']->page_details->r_bp2))?$data['certificate']->page_details->r_bp2:''}}</p>
                            </div>

                       <!-- Inside Box Header = 3 <-->
                       <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                        <h3>
                            {{(isset($data['certificate']->page_details->r_bh3))?$data['certificate']->page_details->r_bh3:''}}
                        </h3>
                    </div>
                        <!-- Box Paragraph = 3 <-->
                    <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <p>{{(isset($data['certificate']->page_details->l_bp3))?$data['certificate']->page_details->l_bp3:''}}</p>
                            </div>


                      <!-- Inside Box Header = 4 <-->
                      <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                        <h3>
                            {{(isset($data['certificate']->page_details->r_bh4))?$data['certificate']->page_details->r_bh4:''}}
                        </h3>
                    </div>
                        <!-- Box Paragraph = 4 <-->
                    <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <p>{{(isset($data['certificate']->page_details->r_bp4))?$data['certificate']->page_details->r_bp4:''}}</p>
                            </div>

                 <!-- Last Header <-->
                 <div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                        <h3>
                            {{(isset($data['certificate']->page_details->last_h))?$data['certificate']->page_details->last_h:''}}
                        </h3>
                    </div>

                 <!-- Last Tags <-->
                 <div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
                                <ul>
                                    @if(isset($data['last_li']))
                                        @foreach($data['last_li'] as $li)
                                            <li class="row">

                                                <span class=" fa fa-check" style="margin-top: 10px;"></span>
                                                <p class="col-sm"> {{$li}} </p>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
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
