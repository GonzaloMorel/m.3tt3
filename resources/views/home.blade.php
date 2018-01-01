@extends('layouts.main')


@section('slidetop')

		<!-- SLIDE TOP -->
		<div id="slidetop">

			<div class="container">
				
				<div class="row">

					<div class="col-md-4">
						<h6><i class="icon-heart"></i> WHY SMARTY?</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. </p>
					</div>

					<div class="col-md-4">
						<h6><i class="icon-attachment"></i> RECENTLY VISITED</h6>
						<ul class="list-unstyled">
							<li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> This is a very long text, very very very very very very very very very very very very </a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Dolor sit amet,consectetur adipiscing elit amet</a></li>
							<li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet,consectetur adipiscing elit</a></li>
						</ul>
					</div>

					<div class="col-md-4">
						<h6><i class="icon-envelope"></i> CONTACT INFO</h6>
						<ul class="list-unstyled">
							<li><b>Address:</b> PO Box 21132, Here Weare St, <br /> Melbourne, Vivas 2355 Australia</li>
							<li><b>Phone:</b> 1-800-565-2390</li>
							<li><b>Email:</b> <a href="mailto:support@yourname.com">support@yourname.com</a></li>
						</ul>
					</div>

				</div>

			</div>

			<a class="slidetop-toggle" href="#"><!-- toggle button --></a>

		</div>
		<!-- /SLIDE TOP -->
@endsection


@section('header')
			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
			<div id="header" class="sticky  header-md transparent clearfix">

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container"><!-- add .full-container for fullwidth -->

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- BUTTONS -->
						<ul class="pull-right nav nav-pills nav-second-main">

							<!-- SEARCH -->
							<li class="search">
								<a href="javascript:;">
									<i class="fa fa-search"></i>
								</a>
								<div class="search-box">
									<form action="page-search-result-1.html" method="get">
										<div class="input-group">
											<input type="text" name="src" placeholder="Search" class="form-control" />
											<span class="input-group-btn">
												<button class="btn btn-primary" type="submit">Search</button>
											</span>
										</div>
									</form>
								</div> 
							</li>
							<!-- /SEARCH -->

							<!-- QUICK SHOP CART -->
							<li class="quick-cart">
								<a href="#">
									<span class="badge badge-aqua btn-xs badge-corner">2</span>
									<i class="fa fa-shopping-cart"></i> 
								</a>
								<div class="quick-cart-box">
									<h4>Shop Cart</h4>

									<div class="quick-cart-wrapper">

										<a href="#"><!-- cart item -->
											<img src="assets/images/demo/people/300x300/4-min.jpg" width="45" height="45" alt="" />
											<h6><span>2x</span> RED BAG WITH HUGE POCKETS</h6>
											<small>$37.21</small>
										</a><!-- /cart item -->

										<a href="#"><!-- cart item -->
											<img src="assets/images/demo/people/300x300/5-min.jpg" width="45" height="45" alt="" />
											<h6><span>2x</span> THIS IS A VERY LONG TEXT AND WILL BE TRUNCATED</h6>
											<small>$17.18</small>
										</a><!-- /cart item -->

										<!-- cart no items example -->
										<!--
										<a class="text-center" href="#">
											<h6>0 ITEMS ON YOUR CART</h6>
										</a>
										-->

									</div>

									<!-- quick cart footer -->
									<div class="quick-cart-footer clearfix">
										<a href="shop-cart.html" class="btn btn-primary btn-xs pull-right">VIEW CART</a>
										<span class="pull-left"><strong>TOTAL:</strong> $54.39</span>
									</div>
									<!-- /quick cart footer -->

								</div>
							</li>
							<!-- /QUICK SHOP CART -->

						</ul>
						<!-- /BUTTONS -->

						<!-- Logo -->
						<a class="logo pull-left" href="index.html">
							<img src="assets/images/miette/logo_web.png" alt="" />
						</a>

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
							<nav class="nav-main">

								<!--
									NOTE
									
									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example: 

									<li>
										<a href="#">HOME</a>
									</li>
								-->
								<ul id="topMain" class="nav nav-pills nav-main">
									<li class="dropdown"><!-- HOME -->
										<a class="dropdown-toggle" href="#">
											HOME
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													HOME CORPORATE
												</a>
												<ul class="dropdown-menu">
													<li><a href="index-corporate-1.html">CORPORATE LAYOUT 1</a></li>
													<li><a href="index-corporate-2.html">CORPORATE LAYOUT 2</a></li>
													<li><a href="index-corporate-3.html">CORPORATE LAYOUT 3</a></li>
													<li><a href="index-corporate-4.html">CORPORATE LAYOUT 4</a></li>
													<li><a href="index-corporate-5.html">CORPORATE LAYOUT 5</a></li>
													<li><a href="index-corporate-6.html">CORPORATE LAYOUT 6</a></li>
													<li><a href="index-corporate-7.html">CORPORATE LAYOUT 7</a></li>
												</ul>
											</li>
											<li class="divider"></li>
											<li><a href="start.html#newrevslider" data-toggle="tooltip" data-placement="top" title="39 More Revolution Slider V5"><span class="label label-danger pull-right">new</span> 39 MORE LAYOUTS</a></li>
											<li class="divider"></li>
											<li><a href="index-simple-revolution.html">HOME SIMPLE - REVOLUTION</a></li>
											<li><a href="index-simple-layerslider.html">HOME SIMPLE - LAYERSLIDER</a></li>
											<li><a href="index-simple-parallax.html">HOME SIMPLE - PARALLAX</a></li>
											<li><a href="index-simple-youtube.html">HOME SIMPLE - YOUTUBE</a></li>
										</ul>
									</li>
									<li class="dropdown"><!-- PAGES -->
										<a class="dropdown-toggle" href="#">
											PAGES
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													ABOUT
												</a>
												<ul class="dropdown-menu">
													<li><a href="page-about-us-1.html">ABOUT US - LAYOUT 1</a></li>
													<li><a href="page-about-us-2.html">ABOUT US - LAYOUT 2</a></li>
													<li><a href="page-about-us-3.html">ABOUT US - LAYOUT 3</a></li>
													<li><a href="page-about-us-4.html">ABOUT US - LAYOUT 4</a></li>
													<li><a href="page-about-us-5.html">ABOUT US - LAYOUT 5</a></li>
													<li><a href="page-about-me-1.html">ABOUT ME - LAYOUT 1</a></li>
													<li><a href="page-about-me-2.html">ABOUT ME - LAYOUT 2</a></li>
												</ul>
											</li>
											<li><a href="page-careers.html">CAREERS</a></li>
											<li><a href="page-sitemap.html">SITEMAP</a></li>
											<li><a href="page-blank.html">BLANK PAGE</a></li>
										</ul>
									</li>
									<li class="dropdown active"><!-- FEATURES -->
										<a class="dropdown-toggle" href="#">
											FEATURES
										</a>
										<ul class="dropdown-menu">
											<li class="dropdown">
												<a class="dropdown-toggle" href="#">
													<i class="et-browser"></i> SLIDERS
												</a>
												<ul class="dropdown-menu">
													<li>
														<a class="dropdown-toggle" href="#">REVOLUTION SLIDER 4.x</a>
														<ul class="dropdown-menu">
															<li><a href="feature-slider-revolution-fullscreen.html">FULLSCREEN</a></li>
															<li><a href="feature-slider-revolution-fullwidth.html">FULL WIDTH</a></li>
															<li><a href="feature-slider-revolution-fixedwidth.html">FIXED WIDTH</a></li>
															<li><a href="feature-slider-revolution-kenburns.html">KENBURNS EFFECT</a></li>
															<li><a href="feature-slider-revolution-videobg.html">HTML5 VIDEO</a></li>
															<li><a href="feature-slider-revolution-captions.html">CAPTIONS</a></li>
															<li><a href="feature-slider-revolution-smthumb.html">THUMB SMALL</a></li>
															<li><a href="feature-slider-revolution-lgthumb.html">THUMB LARGE</a></li>
															<li class="divider"></li>
															<li><a href="feature-slider-revolution-prev1.html">NAV PREVIEW 1</a></li>
															<li><a href="feature-slider-revolution-prev2.html">NAV PREVIEW 2</a></li>
															<li><a href="feature-slider-revolution-prev3.html">NAV PREVIEW 3</a></li>
															<li><a href="feature-slider-revolution-prev4.html">NAV PREVIEW 4</a></li>
															<li><a href="feature-slider-revolution-prev0.html">NAV THEME DEFAULT</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-toggle" href="#">LAYER SLIDER</a>
														<ul class="dropdown-menu">
															<li><a href="feature-slider-layer-fullwidth.html">FULLWIDTH</a></li>
															<li><a href="feature-slider-layer-fixed.html">FIXED WIDTH</a></li>
															<li><a href="feature-slider-layer-captions.html">CAPTIONS</a></li>
															<li><a href="feature-slider-layer-carousel.html">CAROUSEL</a></li>
															<li><a href="feature-slider-layer-2d3d.html">2D &amp; 3D TRANSITIONS</a></li>
															<li><a href="feature-slider-layer-thumb.html">THUMB NAV</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-toggle" href="#">FLEX SLIDER</a>
														<ul class="dropdown-menu">
															<li><a href="feature-slider-flexslider-fullwidth.html">FULL WIDTH</a></li>
															<li><a href="feature-slider-flexslider-content.html">CONTENT</a></li>
															<li><a href="feature-slider-flexslider-thumbs.html">WITH THUMBS</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-toggle" href="#">OWL SLIDER</a>
														<ul class="dropdown-menu">
															<li><a href="feature-slider-owl-fullwidth.html">FULL WIDTH</a></li>
															<li><a href="feature-slider-owl-fixed.html">FIXED WIDTH</a></li>
															<li><a href="feature-slider-owl-fixed+progress.html">FIXED + PROGRESS</a></li>
															<li><a href="feature-slider-owl-carousel.html">BASIC CAROUSEL</a></li>
															<li><a href="feature-slider-owl-fade.html">EFFECT - FADE</a></li>
															<li><a href="feature-slider-owl-backslide.html">EFFECT - BACKSLIDE</a></li>
															<li><a href="feature-slider-owl-godown.html">EFFECT - GODOWN</a></li>
															<li><a href="feature-slider-owl-fadeup.html">EFFECT - FADE UP</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-toggle" href="#">SWIPE SLIDER</a>
														<ul class="dropdown-menu">
															<li><a href="feature-slider-swipe-full.html">FULLSCREEN</a></li>
															<li><a href="feature-slider-swipe-fixed-height.html">FIXED HEIGHT</a></li>
															<li><a href="feature-slider-swipe-autoplay.html">AUTOPLAY</a></li>
															<li><a href="feature-slider-swipe-fade.html">FADE TRANSITION</a></li>
															<li><a href="feature-slider-swipe-slide.html">SLIDE TRANSITION</a></li>
															<li><a href="feature-slider-swipe-coverflow.html">COVERFLOW TRANSITION</a></li>
															<li><a href="feature-slider-swipe-html5-video.html">HTML5 VIDEO</a></li>
															<li><a href="feature-slider-swipe-3columns.html">3 COLUMNS</a></li>
															<li><a href="feature-slider-swipe-4columns.html">4 COLUMNS</a></li>
														</ul>
													</li>
													<li><a href="feature-slider-nivo.html">NIVO SLIDER</a></li>
													<li><a href="feature-slider-camera.html">CAMERA SLIDER</a></li>
													<li><a href="feature-slider-elastic.html">ELASTIC SLIDER</a></li>
												</ul>
											</li>
											<li class="dropdown active">
												<a class="dropdown-toggle" href="#">
													<i class="et-hotairballoon"></i> HEADERS
												</a>
												<ul class="dropdown-menu active">
													<li><a href="feature-header-light.html">HEADER - LIGHT</a></li>
													<li><a href="feature-header-dark.html">HEADER - DARK</a></li>
													<li>
														<a class="dropdown-toggle" href="#">HEADER - HEIGHT</a>
														<ul class="dropdown-menu">
														<li><a href="feature-header-large.html">LARGE (96px)</a></li>
														<li><a href="feature-header-medium.html">MEDIUM (70px)</a></li>
														<li><a href="feature-header-small.html">SMALL (60px)</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-toggle" href="#">HEADER - SHADOW</a>
														<ul class="dropdown-menu">
															<li><a href="feature-header-shadow-after-1.html">SHADOW 1 - AFTER</a></li>
															<li><a href="feature-header-shadow-before-1.html">SHADOW 1 - BEFORE</a></li>
															<li class="divider"></li>
															<li><a href="feature-header-shadow-after-2.html">SHADOW 2 - AFTER</a></li>
															<li><a href="feature-header-shadow-before-2.html">SHADOW 2 - BEFORE</a></li>
															<li class="divider"></li>
															<li><a href="feature-header-shadow-after-3.html">SHADOW 3 - AFTER</a></li>
															<li><a href="feature-header-shadow-before-3.html">SHADOW 3 - BEFORE</a></li>
															<li class="divider"></li>
															<li><a href="feature-header-shadow-dark-1.html">SHADOW - DARK PAGE EXAMPLE</a></li>
														</ul>
													</li>
													<li><a href="feature-header-transparent.html">HEADER - TRANSPARENT</a></li>
													<li class="active"><a href="feature-header-transparent-line.html">HEADER - TRANSP+LINE</a></li>
													<li><a href="feature-header-translucent.html">HEADER - TRANSLUCENT</a></li>
													<li>
														<a class="dropdown-toggle" href="#">HEADER - BOTTOM</a>
														<ul class="dropdown-menu">
															<li><a href="feature-header-bottom-light.html">BOTTOM LIGHT</a></li>
															<li><a href="feature-header-bottom-dark.html">BOTTOM DARK</a></li>
															<li><a href="feature-header-bottom-transp.html">BOTTOM TRANSPARENT</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-toggle" href="#">HEADER - LEFT SIDE</a>
														<ul class="dropdown-menu">
															<li><a href="feature-header-side-left-1.html">FIXED</a></li>
															<li><a href="feature-header-side-left-2.html">OPEN ON CLICK</a></li>
															<li><a href="feature-header-side-left-3.html">DARK</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-toggle" href="#">HEADER - RIGHT SIDE</a>
														<ul class="dropdown-menu">
															<li><a href="feature-header-side-right-1.html">FIXED</a></li>
															<li><a href="feature-header-side-right-2.html">OPEN ON CLICK</a></li>
															<li><a href="feature-header-side-right-3.html">DARK</a></li>
														</ul>
													</li>													<li>
														<a class="dropdown-toggle" href="#">HEADER - STATIC</a>
														<ul class="dropdown-menu">
															<li><a href="feature-header-static-top-light.html">STATIC TOP - LIGHT</a></li>
															<li><a href="feature-header-static-top-dark.html">STATIC TOP - DARK</a></li>
															<li class="divider"></li>
															<li><a href="feature-header-static-bottom-light.html">STATIC BOTTOM - LIGHT</a></li>
															<li><a href="feature-header-static-bottom-dark.html">STATIC BOTTOM - DARK</a></li>
														</ul>
													</li>
													<li><a href="feature-header-nosticky.html">HEADER - NO STICKY</a></li>
												</ul>
											</li>											
											<li><a href="shortcode-animations.html"><i class="et-expand"></i> ANIMATIONS</a></li>
											<li><a href="feature-grid.html"><i class="et-grid"></i> GRID</a></li>
											<li><a href="feature-essentials.html"><i class="et-heart"></i> ESSENTIALS</a></li>
											<li><a href="page-changelog.html"><i class="et-alarmclock"></i> CHANGELOG</a></li>
											
										</ul>
									</li>
									<li class="dropdown mega-menu"><!-- PORTFOLIO -->
										<a class="dropdown-toggle" href="#">
											PORTFOLIO
										</a>
										<ul class="dropdown-menu">
											<li>
												<div class="row">

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><span>GRID</span></li>
															<li><a href="portfolio-grid-1-columns.html">1 COLUMN</a></li>
															<li><a href="portfolio-grid-2-columns.html">2 COLUMNS</a></li>
															<li><a href="portfolio-grid-3-columns.html">3 COLUMNS</a></li>
															<li><a href="portfolio-grid-4-columns.html">4 COLUMNS</a></li>
															<li><a href="portfolio-grid-5-columns.html">5 COLUMNS</a></li>
															<li><a href="portfolio-grid-6-columns.html">6 COLUMNS</a></li>
														</ul>
													</div>

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><span>MASONRY</span></li>
															<li><a href="portfolio-masonry-2-columns.html">2 COLUMNS</a></li>
															<li><a href="portfolio-masonry-3-columns.html">3 COLUMNS</a></li>
															<li><a href="portfolio-masonry-4-columns.html">4 COLUMNS</a></li>
															<li><a href="portfolio-masonry-5-columns.html">5 COLUMNS</a></li>
															<li><a href="portfolio-masonry-6-columns.html">6 COLUMNS</a></li>
															
														</ul>
													</div>

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><span>SINGLE</span></li>
															<li><a href="portfolio-single-extended.html">EXTENDED ITEM</a></li>
															<li><a href="portfolio-single-parallax.html">PARALLAX IMAGE</a></li>
															<li><a href="portfolio-single-slider.html">SLIDER GALLERY</a></li>
															<li><a href="portfolio-single-html5-video.html">HTML5 VIDEO</a></li>
															<li><a href="portfolio-single-masonry-thumbs.html">MASONRY THUMBS</a></li>
															<li><a href="portfolio-single-embed-video.html">EMBED VIDEO</a></li>
														</ul>
													</div>

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><span>LAYOUT</span></li>
															<li><a href="portfolio-layout-default.html">DEFAULT</a></li>
															<li><a href="portfolio-layout-aside-left.html">LEFT SIDEBAR</a></li>
															<li><a href="portfolio-layout-aside-right.html">RIGHT SIDEBAR</a></li>
															<li><a href="portfolio-layout-aside-both.html">BOTH SIDEBAR</a></li>
															<li><a href="portfolio-layout-fullwidth.html">FULL WIDTH (100%)</a></li>
															<li><a href="portfolio-layout-tabfilter.html">TAB FILTER &amp; PAGINATION</a></li>

														</ul>
													</div>

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><span>LOADING</span></li>
															<li><a href="portfolio-loading-pagination.html">PAGINATION</a></li>
															<li><a href="portfolio-loading-jpagination.html">JQUERY PAGINATION</a></li>
															<li><a href="portfolio-loading-infinite-scroll.html">INFINITE SCROLL</a></li>
															<li><a href="portfolio-loading-ajax-page.html">AJAX IN PAGE</a></li>
															<li><a href="portfolio-loading-ajax-modal.html">AJAX IN MODAL</a></li>
														</ul>
													</div>

												</div>
											</li>
										</ul>
									</li>
									<li class="dropdown mega-menu"><!-- SHORTCODES -->
										<a class="dropdown-toggle" href="#">
											SHORTCODES
										</a>
										<ul class="dropdown-menu">
											<li>
												<div class="row">

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><a href="shortcode-animations.html">ANIMATIONS</a></li>
															<li><a href="shortcode-buttons.html">BUTTONS</a></li>
															<li><a href="shortcode-carousel.html">CAROUSEL</a></li>
															<li><a href="shortcode-charts.html">GRAPHS</a></li>
															<li><a href="shortcode-clients.html">CLIENTS</a></li>
															<li><a href="shortcode-columns.html">GRID &amp; COLUMNS</a></li>
															<li><a href="shortcode-counters.html">COUNTERS</a></li>
															<li><a href="shortcode-forms.html">FORM ELEMENTS</a></li>
														</ul>
													</div>

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><a href="shortcode-dividers.html">DIVIDERS</a></li>
															<li><a href="shortcode-icon-boxes.html">BOXES &amp; ICONS</a></li>
															<li><a href="shortcode-galleries.html">GALLERIES</a></li>
															<li><a href="shortcode-headings.html">HEADING STYLES</a></li>
															<li><a href="shortcode-icon-lists.html">ICON LISTS</a></li>
															<li><a href="shortcode-labels.html">LABELS &amp; BADGES</a></li>
															<li><a href="shortcode-lightbox.html">LIGHTBOX</a></li>
															<li><a href="shortcode-forms-editors.html">HTML EDITORS</a></li>
														</ul>
													</div>

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><a href="shortcode-list-pannels.html">LIST &amp; PANNELS</a></li>
															<li><a href="shortcode-maps.html"><span class="label label-success pull-right">new</span> MAPS</a></li>
															<li><a href="shortcode-media-embeds.html">MEDIA EMBEDS</a></li>
															<li><a href="shortcode-modals.html">MODAL / POPOVER / NOTIF</a></li>
															<li><a href="shortcode-navigations.html">NAVIGATIONS</a></li>
															<li><a href="shortcode-paginations.html">PAGINATIONS</a></li>
															<li><a href="shortcode-progress-bar.html">PROGRESS BARS</a></li>
															<li><a href="shortcode-widgets.html">WIDGETS</a></li>
														</ul>
													</div>

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><a href="shortcode-pricing.html">PRICING BOXES</a></li>
															<li><a href="shortcode-process-steps.html">PROCESS STEPS</a></li>
															<li><a href="shortcode-callouts.html">CALLOUTS</a></li>
															<li><a href="shortcode-info-bars.html">INFO BARS</a></li>
															<li><a href="shortcode-blockquotes.html">BLOCKQUOTES</a></li>
															<li><a href="shortcode-responsive.html">RESPONSIVE</a></li>
															<li><a href="shortcode-sections.html">SECTIONS</a></li>
															<li><a href="shortcode-social-icons.html">SOCIAL ICONS</a></li>
														</ul>
													</div>

													<div class="col-md-5th">
														<ul class="list-unstyled">
															<li><a href="shortcode-alerts.html">ALERTS</a></li>
															<li><a href="shortcode-styled-icons.html">STYLED ICONS</a></li>
															<li><a href="shortcode-tables.html">TABLES</a></li>
															<li><a href="shortcode-tabs.html">TABS</a></li>
															<li><a href="shortcode-testimonials.html">TESTIMONIALS</a></li>
															<li><a href="shortcode-thumbnails.html">THUMBNAILS</a></li>
															<li><a href="shortcode-toggles.html">TOGGLES</a></li>
														</ul>
													</div>

												</div>
											</li>
										</ul>
									</li>

								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>

@endsection


@section('sliderHead')

<!-- 
				SLIDER

				Classes:
					.fullheight = full height slider
			-->
			<section id="slider" class="fullheight">

				<!--
					SWIPPER SLIDER PARAMS
					
					data-effect="slide|fade|coverflow"
					data-autoplay="2500|false" 						(remove to disable autoplay)
				-->
				<div class="swiper-container" data-effect="fade" data-autoplay="5000|false">
					<div class="swiper-wrapper">

						<!-- SLIDE 1 -->
						<div class="swiper-slide" style="background-image: url('{{ asset('assets/images/miette/original/105.jpg') }}');">
							<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>
							
							<div class="display-table">
								<div class="display-table-cell vertical-align-middle">
									<div class="container">

										<div class="row">
											<div class="text-center col-md-8 col-xs-12 col-md-offset-2">

												<h1 class="bold font-raleway wow fadeInUp menta_miette_letra" data-wow-delay="0.4s"><img class="made_with_love" src="{{ asset('assets/images/miette/made_with_love-01.png') }}"/></h1>
												<p class="lead font-lato weight-300 hidden-xs wow fadeInUp" data-wow-delay="0.6s">Sus deliciosos productos, elaborados a mano por su propia dueña, tienen el mágico don de despertar el apetito a cualquiera... </p>
												<!--<a class="btn btn-default btn-lg wow fadeIn" data-wow-delay="1.5s" href="#">PURCHASE NOW</a>-->

											</div>
										</div>
							
									</div>
								</div>
							</div>
							
						</div>
						<!-- /SLIDE 1 -->

						<!-- SLIDE 3 -->
						<div class="swiper-slide" style="background-image: url('{{ asset('assets/images/miette/original/mc-32.jpg') }}');">
							<div class="overlay dark-6"><!-- dark overlay [1 to 9 opacity] --></div>
							
							<div class="display-table">
								<div class="display-table-cell vertical-align-middle">
									<div class="container">

										<div class="row">
											<div class="text-center col-md-8 col-xs-12 col-md-offset-2">

												<h1 class="bold font-raleway wow fadeInUp menta_miette_letra" data-wow-delay="0.4s"><img class="made_with_love" src="{{ asset('assets/images/miette/made_with_love-01.png') }}"/></h1>
												<p class="lead font-lato weight-300 hidden-xs wow fadeInUp" data-wow-delay="0.6s">Se trata de Miette, un salón de té ubicado a pasos de Escuela Militar que recientemente abrió sus puertas al público para ofrecer una exquisita repostería artesanal.... </p>
												<!--<a class="btn btn-default btn-lg wow fadeIn" data-wow-delay="1.5s" href="#">PURCHASE NOW</a>-->

											</div>
										</div>
							
									</div>
								</div>
							</div>
							
						</div>
						<!-- /SLIDE 3 -->


						<!-- SLIDE 4 -->
						<div class="swiper-slide" style="background-image: url('{{ asset('assets/images/miette/original/98.jpg') }}');">
							<div class="overlay dark-4"><!-- dark overlay [1 to 9 opacity] --></div>
							
							<div class="display-table">
								<div class="display-table-cell vertical-align-middle">
									<div class="container">

										<div class="row">
											<div class="text-center col-md-8 col-xs-12 col-md-offset-2">

												<h1 class="bold font-raleway wow fadeInUp menta_miette_letra" data-wow-delay="0.4s"><img class="made_with_love" src="{{ asset('assets/images/miette/made_with_love-01.png') }}"/></h1>
												<p class="lead font-lato weight-300 hidden-xs wow fadeInUp" data-wow-delay="0.6s">Con sus tortas, cheescakes, brownies, blondies, galletas y cinammon rolls.... </p>
												<!--<a class="btn btn-default btn-lg wow fadeIn" data-wow-delay="1.5s" href="#">PURCHASE NOW</a>-->

											</div>
										</div>
							
									</div>
								</div>
							</div>
							
						</div>
						<!-- /SLIDE 4 -->

						<!-- SLIDE 4 -->
						<div class="swiper-slide" style="background-image: url('{{ asset('assets/images/miette/original/102.jpg') }}');">
							<div class="overlay dark-4"><!-- dark overlay [1 to 9 opacity] --></div>
							
							<div class="display-table">
								<div class="display-table-cell vertical-align-middle">
									<div class="container">

										<div class="row">
											<div class="text-center col-md-8 col-xs-12 col-md-offset-2">

												<h1 class="bold font-raleway wow fadeInUp menta_miette_letra" data-wow-delay="0.4s"><img class="made_with_love" src="{{ asset('assets/images/miette/made_with_love-01.png') }}"/></h1>
												<p class="lead font-lato weight-300 hidden-xs wow fadeInUp" data-wow-delay="0.6s">Miette busca rescatar la cocina de las abuelas, esa que se hace a mano, paso a paso, cuidando cada detalle, utilizando ingredientes naturales y frescos, logrando así sabores, texturas y aromas caseros como los de antaño. </p>
												<a class="btn btn-default btn-lg wow fadeIn" data-wow-delay="1.5s" href="#">Conocenos Mas</a>

											</div>
										</div>
							
									</div>
								</div>
							</div>
							
						</div>
						<!-- /SLIDE 4 -->
					</div>

					<!-- Swiper Pagination -->
					<div class="swiper-pagination"></div>

					<!-- Swiper Arrows -->
					<div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
					<div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
				</div>
					
			</section>
			<!-- /SLIDER -->

@endsection

@section('section')

			<!-- -->
			<section>
				<div class="container">
					<div class="row">
					
						<div class="col-md-4">
							
							<div class="heading-title heading-border-bottom heading-color">
								<h3>Passion</h3>
							</div>
							
							<p>Fabulas definitiones ei pri per recteque hendrerit scriptorem in errem scribentur mel fastidii propriae philosophia cu mea. Utinam ipsum everti necessitatibus at fuisset splendide.</p>
							
							<a href="#">
								Read
								<!-- /word rotator -->
								<span class="word-rotator" data-delay="2000">
									<span class="items">
										<span>more</span>
										<span>now</span>
									</span>
								</span><!-- /word rotator -->
								<i class="glyphicon glyphicon-menu-right size-12"></i>
							</a>

						</div>

						<div class="col-md-4">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>Precision</h3>
							</div>
							<p>Fabulas definitiones ei pri per recteque hendrerit scriptorem in errem scribentur mel fastidii propriae philosophia cu mea. Utinam ipsum everti necessitatibus at fuisset splendide.</p>

							<a href="#">
								Read
								<!-- /word rotator -->
								<span class="word-rotator" data-delay="2000">
									<span class="items">
										<span>more</span>
										<span>now</span>
									</span>
								</span><!-- /word rotator -->
								<i class="glyphicon glyphicon-menu-right size-12"></i>
							</a>

						</div>

						<div class="col-md-4">
							<div class="heading-title heading-border-bottom heading-color">
								<h3>Simplicity</h3>
							</div>
							<p>Fabulas definitiones ei pri per recteque hendrerit scriptorem in errem scribentur mel fastidii propriae philosophia cu mea. Utinam ipsum everti necessitatibus at fuisset splendide.</p>

							<a href="#">
								Read
								<!-- /word rotator -->
								<span class="word-rotator" data-delay="2000">
									<span class="items">
										<span>more</span>
										<span>now</span>
									</span>
								</span><!-- /word rotator -->
								<i class="glyphicon glyphicon-menu-right size-12"></i>
							</a>

						</div>

					</div>
					
				</div>
			</section>
			<!-- / -->
@endsection

@section('paralax_productos')

<!-- 
	PAGE HEADER 
	
	CLASSES:
		.page-header-xs	= 20px margins
		.page-header-md	= 50px margins
		.page-header-lg	= 80px margins
					.page-header-xlg= 130px margins
		.dark		= dark page header
		.light		= light page header
-->
<section class="page-header page-header-lg parallax parallax-3" style="background-image:url('assets/images/miette/paralax/productos.jpg')">
	<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

	<div class="container">

		<h1>Productos</h1>
		<!--<span class="font-lato size-18 weight-300">We believe in Simple & Creative</span>-->

		<!-- breadcrumbs -->
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li><a href="#">Features</a></li>
			<li class="active">Page Title</li>
		</ol><!-- /breadcrumbs -->

	</div>
</section>
<!-- /PAGE HEADER -->
@endsection

@section("productos")

			<!-- OWL SLIDER -->
			<section>
				<div class="container">

					<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"items": 1, "autoHeight": false, "navigation": true, "pagination": true, "transitionStyle":"fadeUp"}'>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/blondie_frambuesa.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/brownie_nuez.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/brownie_tradicional.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/carrot_cake.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/cinnamon_rolls.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/galletas.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/galletones.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/torta_amapolas.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/torta_avellana_nutela.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/torta_chocolate_beileys.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/torta_meme.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/torta_pompadour.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="assets/images/miette/productos/torta_zanahoria.jpg" alt="">
						</div>
					</div>

				</div>
			</section>
			<!-- /OWL SLIDER -->
@endsection

@section("titulo_produtos")

<!-- 
	PAGE HEADER 
	
	CLASSES:
		.page-header-xs	= 20px margins
		.page-header-md	= 50px margins
		.page-header-lg	= 80px margins
					.page-header-xlg= 130px margins
		.dark		= dark page header
		.light		= light page header
-->
<section class="page-header miette_menta_claro">
	<div class="container">

		<h1><strong>Productos</strong></h1>
		<span class="font-lato size-18 weight-300">We believe in Simple & Creative</span>

		<!-- breadcrumbs -->
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li><a href="#">Features</a></li>
			<li class="active">Page Title</li>
		</ol><!-- /breadcrumbs -->

	</div>
</section>
<!-- /PAGE HEADER -->
@endsection



@section('footer')

<footer id="footer">
	<div class="container">

		<div class="row">
			
			<div class="col-md-8">

				<!-- Footer Logo -->
				<img class="footer-logo footer-2" src="assets/images/miette/logo_web.png" alt="" />

				<!-- Small Description -->
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.</p>

				<hr />

				<div class="row">
					<div class="col-md-6 col-sm-6">

						<!-- Newsletter Form -->
						<p class="margin-bottom-10">Subscribe to Our <strong>Newsletter</strong></p>

						<form id="newsletterForm" action="php/newsletter.php" role="form" method="post">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="email" id="email" name="email" class="form-control" placeholder="Enter your Email" required="required">
								<span class="input-group-btn">
									<button class="btn btn-success" type="submit">Subscribe</button>
								</span>
							</div>
						</form>
						<!-- /Newsletter Form -->
					</div>

					<div class="col-md-6 col-sm-6 hidden-xs">

						<!-- Social Icons -->
						<div class="margin-left-50 clearfix">

							<p class="margin-bottom-10">Follow Us</p>
							<a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>

							<a href="#" class="social-icon social-icon-sm social-icon-transparent social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
								<i class="icon-rss"></i>
								<i class="icon-rss"></i>
							</a>

						</div>
						<!-- /Social Icons -->

					</div>
					
				</div>



			</div>

			<div class="col-md-4">

				<h4 class="letter-spacing-1">CONTACT US</h4>

				<!-- CONTACT MESSAGES -->
				<p id="alert_success" class="alert alert-success alert-mini">Message sent! Thank You!</p>
				<p id="alert_failed" class="alert alert-danger alert-mini">Message not sent!</p>
				<p id="alert_mandatory" class="alert alert-danger alert-mini">Please, complete all mandatory fields</p>

				<!-- CONTACT FORM -->
				<form class="validate" method="post" action="php/contact.php">
					
					<input type="text" value="" placeholder="Name*" maxlength="100" class="form-control required" name="contact[name]" />
					<input type="email" value="" placeholder="Email*" data-msg-email="Please enter a valid email address." class="form-control required" name="contact[email]" />
					<textarea maxlength="5000" placeholder="Message*" rows="3" class="form-control required" name="contact[message]"></textarea>
					<input type="submit" value="SUBMIT MESSAGE" class="btn btn-success" />

				</form>
				<!-- /CONTACT FORM -->

			</div>

		</div>

	</div>

	<div class="copyright">
		<div class="container">
			<ul class="list-inline inline-links mobile-block pull-right nomargin">
				<li><a href="#">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Portfolio</a></li>
				<li><a href="#">Pricing</a></li>
				<li><a href="#">Contact</a></li>
			</ul>

			&copy; All Rights Reserved, Company LTD
		</div>
	</div>
</footer>

@endsection