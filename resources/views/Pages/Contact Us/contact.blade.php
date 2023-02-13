@extends('layout.app')


@section('content')
<body>

    {{-- <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div> --}}

 @include('inc.header')
 
<body>


						
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

    	<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index-2.html"><img src="{{ asset('assets/images/logo.png') }}" alt="" title=""></a></div>
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    <!--Page Title-->
    <section class="page-title"  style="background-image:url({{ url('assets/images/background/5.jpg') }})">
        
    	<div class="auto-container">
        	<h2>Contact Us</h2>
            <ul class="page-breadcrumb">
            	<li><a href="index-2.html">home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Contact Form Section -->
	<section class="contact-form-section" style="background-image:url({{ url('assets/images/background/contact.png') }})">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<h2>Get In Touch</h2>
				<div class="text">Do you have anything in your mind to let us know?  Kindly don't delay to connect to us by means of our contact form.</div>
			</div>

			<div class="row clearfix">

				<!-- Form Column -->
				<div class="form-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
                        @if(Session::has('success'))
                            <p style="color: green">{{ Session::get('success') }}</p>
                        @endif
						<!-- Contact Form -->
						<div class="contact-form">

							<!--Contact Form-->
							<form method="post" action="{{ route('contact.store') }}" id="contact-form">
                                @csrf
								<div class="row clearfix">
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="name" placeholder="Your name">
									</div>
                                    @error('name')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror

									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="email" placeholder="Email address">
									</div>
                                    @error('email')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<input type="text" name="subject" placeholder="Subject">
									</div>
                                    @error('subject')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<textarea name="message" placeholder="Message"></textarea>
									</div>
                                    @error('message')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Submit now</span></button>
									</div>
								</div>
							</form>
						</div>

					</div>
				</div>

				<!-- Info Column -->
				<div class="info-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">

						<!-- Contact Info List -->
						<ul class="contact-info-list">
							<li><strong>Address :</strong><br>256, Stella Orr'e,, New York 24</li>
						</ul>
						<!-- Contact Info List -->
						<ul class="contact-info-list">
							<li><strong>Phone : </strong><a href="tel:1800-456-7890">1800 456 7890</a></li>
							<li><strong>Email : </strong><a href="mailto:info@stellaorre.com">info@stellaorre.com</a></li>
						</ul>
						<!-- Contact Info List -->
						<ul class="contact-info-list">
							<li><strong>Opening Hours :</strong><br>8:00 AM – 10:00 PM <br> Monday – Sunday</li>
						</ul>

					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End Contact Form Section -->

	<!-- Map Section -->
    <section class="map-section">
        <div class="outer-container">
            <div class="map-outer">
                <div class="map-canvas"
                    data-zoom="12"
                    data-lat="-37.817085"
                    data-lng="144.955631"
                    data-type="roadmap"
                    data-hue="#ffc400"
                    data-title="Melbourne Australia"
                    data-icon-path="{{ asset('assets/images/icons/map-marker.png') }}"
                    data-content="(1800) 456 7890 <br> Mon-Sat: 7.00an - 9.00pm">
                </div>
            </div>
        </div>
    </section>
    <!-- End Map Section -->

	<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>

@endsection