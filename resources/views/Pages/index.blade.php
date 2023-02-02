
@extends('layout.app')


@section('content')
<body class="dark-layout">

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

	<!-- Main Header / Header Style Two -->
    @include('inc.header')

    <!-- Main Slider -->
	<section class="main-slider style-two">
		<div class="slider-box">

			<!-- Banner Carousel -->
			<div class="banner-carousel owl-theme owl-carousel">

				<!-- Slide -->
				<div class="slide">
                	<div class="image-layer" style="background-image:url({{ url('assets/images/main-slider/4.jpg') }})"></div>
					<div class="auto-container">
						<div class="content">
							<h2>We Make Dream Home <br> in a Reality</h2>
							<div class="text">Since 1989, We inspired fragmeants of your life stories with the finest kitchens, wardrobes, bedroom sets and living & dining .</div>
							<div class="btns-box">
								<a href="#" class="theme-btn btn-style-one"><span class="txt">Know more</span></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="slide">
                	<div class="image-layer" style="background-image:url({{ url('assets/images/main-slider/5.jpg') }})"></div>
					<div class="auto-container">
						<div class="content">
							<h2>Designs Benefitting <br> Your Persona</h2>
							<div class="text">Since 1989, We inspired fragmeants of your life stories with the finest kitchens, wardrobes, bedroom sets and living & dining .</div>
							<div class="btns-box">
								<a href="#" class="theme-btn btn-style-one"><span class="txt">Know more</span></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="slide">
                	<div class="image-layer" style="background-image:url({{ url('assets/images/main-slider/6.jpg') }})"></div>
					<div class="auto-container">
						<div class="content">
							<h2>Solution for <br> Modern Furniture</h2>
							<div class="text">Since 1989, We inspired fragments of your life stories with the finest kitchens, wardrobes, bedroom sets and living & dining.</div>
							<div class="btns-box">
								<a href="#" class="theme-btn btn-style-one"><span class="txt">Know more</span></a>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Social Icons -->
			<ul class="social-icons">
				<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
				<li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
				<li><a href="#"><span class="fab fa-twitter"></span></a></li>
				<li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
			</ul>

		</div>
	</section>
	<!-- End Banner Section -->

	<!-- Services Section Three -->
	<section class="services-section-three">
		<div class="auto-container">

			<!-- Sec Title -->
			<div class="sec-title light centered">
				<h2>One stop for home interiors</h2>
				<div class="text">To give you a home that lasts, we bring you only the best in everything — quality raw materials, state-of-the-art manufacturing, rigorous quality checks, professional installations and transparent prices.</div>
			</div>

			<div class="row clearfix">

				<!-- Service Block -->
				<div class="service-block-three col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="residental-interior.html"><img src="{{ asset('assets/images/resource/service-4.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="residental-interior.html">25 + Interior Designers</a></h3>
							<div class="text">Override the digital divide with additional clickthroughs from DevOps. Nanotechnology imme rsion along the information highway will close the loop.</div>
							<a href="residental-interior.html" class="read-more">Read more</a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-three col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="office-interior.html"><img src="{{ asset('assets/images/resource/service-5.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="office-interior.html">Furtiniture, Decor & More</a></h3>
							<div class="text">Override the digital divide with additional clickthroughs from DevOps. Nanotechnology imme rsion along the information ...</div>
							<a href="office-interior.html" class="read-more">Read more</a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-three col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="commercial-interior.html"><img src="{{ asset('assets/images/resource/service-6.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="commercial-interior.html">Modular Solutions</a></h3>
							<div class="text">Override the digital divide with additional clickthroughs from DevOps. Nanotechnology imme rsion along the information highway will close the loop.</div>
							<a href="commercial-interior.html" class="read-more">Read more</a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-three col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="750ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="commercial-interior.html"><img src="{{ asset('assets/images/resource/service-7.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="commercial-interior.html">On Site Expertise</a></h3>
							<div class="text">Override the digital divide with additional clickthroughs from DevOps. Nanotechnology imme rsion along the information highway will close the loop.</div>
							<a href="commercial-interior.html" class="read-more">Read more</a>
						</div>
					</div>
				</div>

			</div>

			<!-- Button Box -->
			<div class="btn-box text-center">
				<a href="residental-interior.html" class="theme-btn btn-style-three"><span class="txt">View all Services</span></a>
			</div>

		</div>
	</section>
	<!-- End Services Section -->

	<!-- Project Section Two -->
	<section class="project-section-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light centered">
				<h2>Interior For All Design & Budget</h2>
				<div class="text">Choose from thousands of designs. Heart your favorites to shortlist.</div>
			</div>
		</div>

		<div class="outer-container">

			<div class="masonry-items-container row clearfix">

				<!-- Gallery Item -->
				<div class="gallery-item  masonry-item col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<figure class="image-box">
							<img src="{{ asset('assets/images/gallery/8.jpg') }}" alt="">
							<!--Overlay Box-->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
										<a href="{{ asset('assets/images/gallery/8.jpg') }}" data-fancybox="gallery-2" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
										<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>

				<!-- Gallery Item -->
				<div class="gallery-item  masonry-item col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<figure class="image-box">
							<img src="{{ asset('assets/images/gallery/9.jpg') }}" alt="">
							<!--Overlay Box-->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
										<a href="{{ asset('assets/images/gallery/9.jpg') }}" data-fancybox="gallery-2" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
										<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>

				<!-- Gallery Item -->
				<div class="gallery-item  masonry-item col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<figure class="image-box">
							<img src="{{ asset('assets/images/gallery/11.jpg') }}" alt="">
							<!--Overlay Box-->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
										<a href="{{ asset('assets/images/gallery/11.jpg') }}" data-fancybox="gallery-2" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
										<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>

				<!-- Gallery Item -->
				<div class="gallery-item  masonry-item col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<figure class="image-box">
							<img src="{{ asset('assets/images/gallery/10.jpg') }}" alt="">
							<!--Overlay Box-->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
										<a href="{{ asset('assets/images/gallery/10.jpg') }}" data-fancybox="gallery-2" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
										<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>

				<!-- Gallery Item -->
				<div class="gallery-item  masonry-item col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<figure class="image-box">
							<img src="{{ asset('assets/images/gallery/12.jpg') }}" alt="">
							<!--Overlay Box-->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
										<a href="{{ asset('assets/images/gallery/12.jpg') }}" data-fancybox="gallery-2" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
										<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>

			</div>

		</div>

	</section>
	<!-- End Project Section Two -->

	<!-- Interior Section -->
	<section class="interior-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="row clearfix">

					<!-- Image Column -->
					<div class="image-column col-lg-4 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image">
								<img src="{{ asset('assets/images/resource/interior.jpg') }}" alt="" />
							</div>
						</div>
					</div>

					<!-- Content Column -->
					<div class="content-column col-lg-8 col-md-12 col-sm-12">
						<div class="inner-column">
							<h2>Why Choose Us for Interior Work</h2>
							<div class="text">To give you a home that lasts, we bring you only the best in everything — quality raw materials, state-of-the-art manufacturing, rigorous quality checks, professional installations and transparent prices.</div>
							<div class="row clearfix">

								<!-- Interior Block -->
								<div class="interior-block col-lg-4 col-md-4 col-sm-12">
									<div class="block-inner">
										<div class="icon-box">
											<span class="icon flaticon-award-1"></span>
										</div>
										<h3>Superior Quality</h3>
									</div>
								</div>

								<!-- Interior Block -->
								<div class="interior-block col-lg-4 col-md-4 col-sm-12">
									<div class="block-inner">
										<div class="icon-box">
											<span class="icon flaticon-answer"></span>
										</div>
										<h3>Professional Team</h3>
									</div>
								</div>

								<!-- Interior Block -->
								<div class="interior-block col-lg-4 col-md-4 col-sm-12">
									<div class="block-inner">
										<div class="icon-box">
											<span class="icon flaticon-hand"></span>
										</div>
										<h3>Unmatched Warranty</h3>
									</div>
								</div>

							</div>

							<div class="bold-text">Get in touch with us to design your dream home</div>
							<div class="column-text">Talk to our design expert and get your designs</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End Interior Section -->

	<!-- Counter Section -->
	<section class="counter-section">
		<div class="auto-container">

			<!-- Fact Counter -->
			<div class="fact-counter">
				<div class="row clearfix">

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="2500" data-stop="8">0</span> Year
								</div>
								<h4 class="counter-title">Material Warranty</h4>
							</div>
						</div>
					</div>

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box alternate">
									<span class="count-text" data-speed="3000" data-stop="2500">0</span>+
								</div>
								<h4 class="counter-title">Homes Completed</h4>
							</div>
						</div>
					</div>

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="3000" data-stop="200">0</span>+
								</div>
								<h4 class="counter-title">Interior Designer</h4>
							</div>
						</div>
					</div>

					<!--Column-->
					<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
						<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="count-outer count-box">
									<span class="count-text" data-speed="2500" data-stop="45">0</span> Days
								</div>
								<h4 class="counter-title">Project Delivery</h4>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
	</section>
	<!-- End Counter Section -->

	<!-- Featured Section -->
	<section class="featured-section" style="background-image: url({{ url('assets/images/background/2.jpg') }})">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<h2>Our Work Process</h2>
			</div>

			<div class="row clearfix">

				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-outer">
							<div class="icon-box">
								<span class="icon flaticon-hand-shake"></span>
							</div>
							<div class="feature-number">1</div>
						</div>
						<div class="lower-content">
							<h3><a href="residental-interior.html">Meet Customers</a></h3>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one volu ptatem sequi nesciunt.</div>
						</div>
					</div>
				</div>

				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="250ms" data-wow-duration="1500ms">
						<div class="icon-outer">
							<div class="icon-box">
								<span class="icon flaticon-answer"></span>
							</div>
							<div class="feature-number">2</div>
						</div>
						<div class="lower-content">
							<h3><a href="residental-interior.html">Design Discussion</a></h3>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one volu ptatem sequi nesciunt.</div>
						</div>
					</div>
				</div>

				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="500ms" data-wow-duration="1500ms">
						<div class="icon-outer">
							<div class="icon-box">
								<span class="icon flaticon-sketch"></span>
							</div>
							<div class="feature-number">3</div>
						</div>
						<div class="lower-content">
							<h3><a href="residental-interior.html">Drafting Design</a></h3>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one volu ptatem sequi nesciunt.</div>
						</div>
					</div>
				</div>

				<!-- Feature Block -->
				<div class="feature-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="750ms" data-wow-duration="1500ms">
						<div class="icon-outer">
							<div class="icon-box">
								<span class="icon flaticon-house-1"></span>
							</div>
							<div class="feature-number">4</div>
						</div>
						<div class="lower-content">
							<h3><a href="residental-interior.html">Implimentation</a></h3>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one volu ptatem sequi nesciunt.</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End Featured Section -->

	<!-- News Section -->
	<section class="news-section style-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title light">
				<h2>Need a design fix? Read our magazine</h2>
				<div class="text">Stay updated with latest trends, inspiration, expert tips, DIYs and more</div>
			</div>

			<div class="row clearfix">

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-detail.html"><img src="{{ asset('assets/images/resource/news-1.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li>By <span>Michale</span></li>
								<li>Modular Kitchen</li>
							</ul>
							<h3><a href="blog-detail.html">15 Vastu ideas for the main door emphasizes on every par ...</a></h3>
							<a href="blog-detail.html" class="read-more">Read more <span class="icon flaticon-right-arrow-1"></span></a>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="250ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-detail.html"><img src="{{ asset('assets/images/resource/news-2.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li>By <span>Michale</span></li>
								<li>Interior, awesome</li>
							</ul>
							<h3><a href="blog-detail.html">Storage ideas for the bedroom by interior designers ...</a></h3>
							<a href="blog-detail.html" class="read-more">Read more <span class="icon flaticon-right-arrow-1"></span></a>
						</div>
					</div>
				</div>

				<!-- News Block -->
				<div class="news-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="500ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="blog-detail.html"><img src="{{ asset('assets/images/resource/news-3.jpg') }}" alt="" /></a>
						</div>
						<div class="lower-content">
							<ul class="post-meta">
								<li>By <span>Michale</span></li>
								<li>Interior, awesome</li>
							</ul>
							<h3><a href="blog-detail.html">Kids bedroom design ideas by interior designers in NY</a></h3>
							<a href="blog-detail.html" class="read-more">Read more <span class="icon flaticon-right-arrow-1"></span></a>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>
	@endsection
	<!-- End News Section -->

