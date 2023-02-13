<header class="main-header header-style-two">
     <!--Header Top-->
     {{-- <div class="header-top">
        <div class="auto-container clearfix">
            <div class="top-left clearfix">
                <div class="text"><span class="icon flaticon-call-answer"></span> Need help? Call Us Now : <a href="tel:1800-456-7890" class="number">1800 456 7890</a></div>

            </div>
            <div class="top-right clearfix">
                <!-- Info List -->
                <ul class="info-list">
                    <li><a href="about.html">Our Story</a></li>
                    <li><a href="blog.html">Inspiration</a></li>
                    <li class="quote"><a href="contact.html">Get Free Quote</a></li>
                </ul>
            </div>
        </div>
    </div> --}}
    <!-- End Header Top -->
    <!-- Header Upper -->
    <div class="header-upper">
        <div class="outer-container clearfix">
            <!--Info-->
            <div class="logo-outer">
                <div class="logo"><a href="index-2.html"><img src="{{ asset('assets/images/logo.png') }}" alt="" title=""></a></div>
            </div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="navbar-header">
                        <!-- Togg le Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon flaticon-menu-1"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">

                            <li class="{{ Request::routeIs('/.index')? 'current dropdown' : '' }}"><a href="{{ route('/.index') }}">Home</a></li>

                            @guest
                            <li class="dropdown"><a href="about.html">About us</a>
                                <ul>
                                    <li><a href="about.html">Our Introduction</a></li>
                                    <li><a href="team.html">Our Team</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                </ul>
                            </li>

                            <li class="dropdown"><a href="services-dark.html">Services</a>
                                <ul>
                                    <li><a href="services-dark.html">Services Layout 01</a></li>
                                    <li><a href="services-light.html">Services Layout 02</a></li>
                                    <li><a href="residental-interior.html">Residential Interior</a></li>
                                    <li><a href="commercial-interior.html">Commercial Interior</a></li>
                                    <li><a href="office-interior.html">Office Design</a></li>
                                    <li><a href="hospitality-design.html">Hospitality Design</a></li>
                                    <li><a href="modern-furniture.html">Modern Furniture</a></li>
                                    <li><a href="modular-kitchen.html">Modular Kitchen</a></li>
                                    <li><a href="wardrobe.html">Wardrobe</a></li>
                                    <li><a href="false-celling-design.html">False Celling Design</a></li>
                                </ul>
                            </li>



                            <li class="dropdown"><a href="projects-classic.html">Projects</a>
                                <ul>
                                    <li><a href="projects-classic.html">Projects Classic</a></li>
                                    <li><a href="projects-masonry.html">Project Masonry</a></li>
                                    <li><a href="projects-fullwidth.html">Project Full Screen</a></li>
                                </ul>
                            </li>
                            @endguest
                            <li class="{{ Request::routeIs('blog.index')? 'current dropdown' : '' }}"><a href="{{ route('blog.index') }}">Blog</a> </li>

                            @guest



                            <li class="dropdown"><a href="shop.html">Shop</a>
                                <ul>
                                    <li><a href="shop.html">Main shop page</a></li>
                                    <li><a href="product-detail.html">Product Detail Page</a></li>
                                    <li><a href="cart-page.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </li>



                            <li class="{{ Request::routeIs('contact.index')? 'current dropdown' : '' }}"><a href="{{ route('contact.index') }}">Contact</a></li>

                            <li class="dropdown"><a href="#"><span> Join Us</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li class="{{ Request::routeIs('registeredUser.login')? 'current dropdown' : '' }}"><a href="{{ route('login') }}">Login</a></li>
                                    <li class="{{ Request::routeIs('registeredUser.register')? 'current dropdown' : '' }}"><a href="{{ route('register') }}">Register</a></li>
                                </ul>
                              </li>


                            @endguest



                            @auth
                            @role('admin')
                            <li class="{{ Request::routeIs('admin.index')? 'current dropdown' : '' }}"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                            <li class="{{ Request::routeIs('blog.create')? 'current dropdown' : '' }}"><a href="{{ route('admin blog.create') }}">Create Post</a></li>
                            <li class="{{ Request::routeIs('category.create')? 'current dropdown' : ''}}"><a href="{{ route('admin category.create') }}">Create Category</a></li>
                            <li class="{{ Request::routeIs('category.index') ? 'current dropdown' : '' }}"><a href="{{ route('admin category.index') }}">Category List</a></li>
                              @endrole

                            <li class="dropdown"><a href="#"><span> Action</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li value="disabled">{{ Auth::user()->name }}</li>
                                    <li class="{{ Request::routeIs('profile.edit')? 'current dropdown' : '' }}"><a href="{{ route('profile.edit') }}">Profile</a></li>
                                    <li class="{{ Request::routeIs('logout')? 'current dropdown' : '' }}">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}"

                                            onclick="event.preventDefault();
                                                            this.closest('form').submit();">Logout</a></li>

                                    </form>

                                </ul>
                              </li>

                            @endauth


                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End-->

                <!-- Outer Box -->
                <div class="outer-box clearfix">
                    <div class="search-box-btn"><span class="icon flaticon-magnifying-glass-1"></span></div>
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
            <div class="nav-logo"><a href="index-2.html"><img src="{{asset('assets/images/logo.png')}}" alt="" title=""></a></div>
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
