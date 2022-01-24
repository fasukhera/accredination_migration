<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
</head>
<body>
	@include('includes.head')
	<style>
	   {
	           {
	           -- Accordian Styling --
	       }
	   }

	   h1, h2 {
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

	   .feature-check-icon {
	       padding-right: 10px;
	       padding-bottom: 20px;

	   }

	   .panel .panel-heading .panel-title a,
	   .panel .panel-body p {
	       color: #000 !important;
	   }
	   .section-grey{
		   background-color:#c9c9c9;
		   padding: 10px;
	   }

	</style>
	<div class="tlp-preloader" id="preloader">
		<div class="animation-preloader">
		<div class="tlp-spinner"></div><img alt="Preloader" src="{{asset('logo-black.png')}}"></div>
	</div>
	<div class="wrapper" id="wrapper">
		<a class="return-to-top" data-type="section-switch" href="#main_content"><i class="fas fa-angle-double-up"></i></a>
		<div id="main_content">
			<div class="sticky-on sticky">
				<div id="sticky-placeholder"></div>
				<div class="navbar-wrap" id="navbar-wrap">
					<div class="navbar-layout1">
						<div class="container">
							<div class="row no-gutters d-flex align-items-center position-relative">
								<div class="col-lg-2 d-flex justify-content-start">
									<div class="temp-logo text-center">
										<a class="default-logo" href="index.html"><img alt="logo" class="img-fluid" src="{{asset('logo.png')}}"></a> <a class="sticky-logo" href="index.html"><img alt="logo" class="img-fluid" src="{{asset('logo-black.png')}}"></a>
									</div>
								</div>
								<div class="col-lg-9 d-flex justify-content-end possition-static">
									<nav class="template-main-menu" id="dropdown">
										<ul>
											<li>
												<a href="#">Certifications</a>
												<ul class="dropdown-menu-col-1">
													<li style="list-style: none">@if($data['certificates']!= '' || $data['certificates']!= null) @foreach($data['certificates'] as $certificate)</li>
													<li>
														<a href="{{route('certificate',$certificate->name)}}"><span>{{$certificate->name}}</span></a>
													</li>
													<li style="list-style: none">@endforeach @endif</li>
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
											<a class="header-search" href="#template-search" title="Search"><i class="flaticon-search"></i></a>
										</li>
										<li class="single-item mr-2 d-none">
											<a class="item-btn btn-ghost btn-light" href="#">Get a Quote</a>
										</li>
										<li class="single-item"><button class="offcanvas-menu-btn menu-status-open" type="button"><span class="menu-btn-icon"><span></span> <span></span> <span></span></span></button></li>
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
						<div class="col-lg-12 col-12 d-flex align-items-center justify-content-center has-animation active-animation">
							<div class="feature-box-layout1">
								<!-- Main Header <-->
								<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
									<h1 class="">{{(isset($data['certificate']->page_details->h1))?$data['certificate']->page_details->h1:''}}</h1>
								</div><!-- First Paragraph <-->
								<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
									<h3>{{(isset($data['certificate']->page_details->p1))?$data['certificate']->page_details->p1:''}}</h3>
								</div><!-- Second Paragraph <-->
								<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
									<p class="page-intro-text">{{(isset($data['certificate']->page_details->p2))?$data['certificate']->page_details->p2:''}}</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-12 d-flex has-animation active-animation">
							<div class="feature-box-layout1">
								<!-- 4 split BOX [ Who, Entry, Learn, Resource ] <-->
								<!-- Who Header <-->
								<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
									<h3 class="item-title">{{(isset($data['certificate']->page_details->wh))?$data['certificate']->page_details->wh:''}}</h3>
								</div><!-- Who Paragraph <-->
								<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
									<p>{{(isset($data['certificate']->page_details->wp))?$data['certificate']->page_details->wp:''}}</p>
								</div><!-- Who Tags Paragraph <-->
								<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
									<ul>
										<li style="list-style: none">@if(isset($data['li'])) @foreach($data['li'] as $li)</li>
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
								<div class="col-lg-12 col-12 d-flex has-animation active-animation">
									<div class="feature-box-layout1">
										<!-- Entry Header <-->
										<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
											<h3 class="item-title">{{(isset($data['certificate']->page_details->eh))?$data['certificate']->page_details->eh:''}}</h3>
										</div><!-- Entry Paragraph <-->
										<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
											<p>{{(isset($data['certificate']->page_details->ep))?$data['certificate']->page_details->ep:''}}</p>
										</div><!-- Entry Tags Paragraph <-->
										<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
											<ul>
												<li style="list-style: none">@if(isset($data['li'])) @foreach($data['li'] as $li)</li>
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
								<div class="col-lg-6 col-12 d-flex has-animation active-animation">
									<div class="feature-box-layout1">
										<!-- Learn Header <-->
										<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
											<h3 class="item-title">{{(isset($data['certificate']->page_details->lh))?$data['certificate']->page_details->lh:''}}</h3>
										</div><!-- Learn Paragraph <-->
										<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
											<p>{{(isset($data['certificate']->page_details->lp))?$data['certificate']->page_details->lp:''}}</p>
										</div><!-- Learn Tags Paragraph <-->
										<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
											<ul>
												<li style="list-style: none">@if(isset($data['li'])) @foreach($data['li'] as $li)</li>
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
										<!-- Resource Header <-->
										<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
											<h3 class="item-title">{{(isset($data['certificate']->page_details->rh))?$data['certificate']->page_details->rh:''}}</h3>
										</div><!-- Resource Paragraph <-->
										<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
											<p>{{(isset($data['certificate']->page_details->rp))?$data['certificate']->page_details->rp:''}}</p>
										</div><!-- Resource Tags Paragraph <-->
										<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
											<ul>
												<li style="list-style: none">@if(isset($data['li'])) @foreach($data['li'] as $li)</li>
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
					</section>
					<section class="feature-wrap-layout1 section-grey">
						<div class=container>									
								<!-- Outside Box Header <-->
							<div class="col-md-12 translate-bottom-75 opacity-animation transition-150 transition-delay-100">
								<h2 class="">{{(isset($data['certificate']->page_details->bh))?$data['certificate']->page_details->bh:''}}</h2>
							</div>
							
							<!-- LEFT BOX <-->
							<!-- Inside Box Header = 1 <-->
							<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
								<h3>{{(isset($data['certificate']->page_details->l_bh1))?$data['certificate']->page_details->l_bh1:''}}</h3>
							</div><!-- Box Paragraph = 1 <-->
							<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
								<p>{{(isset($data['certificate']->page_details->l_bp1))?$data['certificate']->page_details->l_bp1:''}}</p>
							</div><!-- Inside Box Header = 2 <-->
							<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
								<h3>{{(isset($data['certificate']->page_details->l_bh2))?$data['certificate']->page_details->l_bh2:''}}</h3>
							</div><!-- Box Paragraph = 2 <-->
							<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
								<p>{{(isset($data['certificate']->page_details->l_bp2))?$data['certificate']->page_details->l_bp2:''}}</p>
							</div><!-- Inside Box Header = 3 <-->
							<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
								<h3>{{(isset($data['certificate']->page_details->l_bh3))?$data['certificate']->page_details->l_bh3:''}}</h3>
							</div><!-- Box Paragraph = 3 <-->
							<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
								<p>{{(isset($data['certificate']->page_details->l_bp3))?$data['certificate']->page_details->l_bp3:''}}</p>
							</div><!-- Inside Box Header = 4 <-->
							<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
								<h3>{{(isset($data['certificate']->page_details->l_bh4))?$data['certificate']->page_details->l_bh4:''}}</h3>
							</div><!-- Box Paragraph = 4 <-->
							<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
								<p>{{(isset($data['certificate']->page_details->l_bp4))?$data['certificate']->page_details->l_bp4:''}}</p>
							</div><!-- RIGHT BOX <-->
							<!-- Inside Box Header = 1 <-->
							<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
								<h3>{{(isset($data['certificate']->page_details->r_bh1))?$data['certificate']->page_details->r_bh1:''}}</h3>
							</div><!-- Box Paragraph = 1 <-->
							<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
								<p>{{(isset($data['certificate']->page_details->r_bp1))?$data['certificate']->page_details->r_bp1:''}}</p>
							</div><!-- Inside Box Header = 2 <-->
							<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
								<h3>{{(isset($data['certificate']->page_details->r_bh2))?$data['certificate']->page_details->r_bh2:''}}</h3>
							</div><!-- Box Paragraph = 2 <-->
							<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
								<p>{{(isset($data['certificate']->page_details->r_bp2))?$data['certificate']->page_details->r_bp2:''}}</p>
							</div><!-- Inside Box Header = 3 <-->
							<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
								<h3>{{(isset($data['certificate']->page_details->r_bh3))?$data['certificate']->page_details->r_bh3:''}}</h3>
							</div><!-- Box Paragraph = 3 <-->
							<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
								<p>{{(isset($data['certificate']->page_details->l_bp3))?$data['certificate']->page_details->l_bp3:''}}</p>
							</div><!-- Inside Box Header = 4 <-->
							<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
								<h3>{{(isset($data['certificate']->page_details->r_bh4))?$data['certificate']->page_details->r_bh4:''}}</h3>
							</div><!-- Box Paragraph = 4 <-->
							<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
								<p>{{(isset($data['certificate']->page_details->r_bp4))?$data['certificate']->page_details->r_bp4:''}}</p>
							</div><!-- Last Header <-->
							<div class="translate-bottom-75 opacity-animation transition-150 transition-delay-900">
								<h3>{{(isset($data['certificate']->page_details->last_h))?$data['certificate']->page_details->last_h:''}}</h3>
							</div><!-- Last Tags <-->
							<div class="col-lg-12 translate-bottom-75 opacity-animation transition-150 transition-delay-900">
								<ul>
									<li style="list-style: none">@if(isset($data['li'])) @foreach($data['li'] as $li)</li>
									<li class="row">
										<span class=" fa fa-check" style="margin-top: 10px;"></span>
										<p class="col-sm">{{$li}}</p>
									</li>
									<li style="list-style: none">@endforeach @endif</li>
								</ul>
							</div>
						</div>	
						@php $i = 1 @endphp
					</div>					
				</section>@include('includes.footer') @include('includes.offcanvas')
		</div>
	</div><!-- Dependency Scripts -->
	@include('includes.dependencies') 
	<script src="assets/js/app.js">
	</script>
</body>
</html>