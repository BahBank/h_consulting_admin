<!--Header section start-->
<header class="header-absolute sb-border header-sticky d-none d-lg-block">
    <div class="main-header">
        <div class="container-fluid pl-50 pl-lg-15 pl-md-15 pr-0">
            <div class="row align-items-center g-0">

                <!--Logo start-->
                <div class="col-xl-2 col-lg-2 col-12">
                    <div class="logo">
                        <a href="#"><img src="{{ asset('assets/front/images/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <!--Logo end-->

                <!--Menu start-->
                <div class="col-xl-6 col-lg-6 col-12">
                    <nav class="main-menu">
                        <ul>
                            <li class="menu-item"><a href="{{ url('/') }}">Accueil</a></li>
                            <li class="menu-item"><a href="{{ url('liste-offres-emplois') }}">Emploi</a></li>
                            <li><a href="#">Heuristic <small class="icon-arrow"></small></a>
                                <ul class="sub-menu">
                                    <li><a href="#">Nous-connaitre</a></li>
                                    <li><a href="#">Nos services</a></li>
                                    <li><a href="#">Notre équipe</a></li>
                                    <li><a href="#">Carrière</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="#">Formations</a></li>
                            <li class="menu-item"><a href="#">Actualités</a></li>
                        </ul>
                    </nav>
                </div>
                <!--Menu end-->

                <!-- Cart & Search Area Start -->
                <div class="col-xl-4 col-lg-4 col-12">
                    <div class="header-btn-action d-flex justify-content-end">
                        <div class="btn-action-wrap d-flex">
                            <div class="jp-author item">
                                <a href="login-register.html">
                                    <i class="lnr lnr-user"></i>
                                    <span>Connexion</span>
                                </a>
                            </div>
                            <div class="jp-author-action item">
                                <a href="#quick-view-modal-container" data-toggle="modal"> <span>Vous êtes employeur ?</span> <span class="fw-400">Poster une offre</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cart & Search Area End -->
            </div>

        </div>
    </div>
</header>
<!--Header section end-->

<!--Header Mobile section start-->
<header class="header-mobile bg_color--2 d-block d-lg-none">
    <div class="header-bottom menu-right">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-mobile-navigation d-block d-lg-none">
                        <div class="row align-items-center">
                            <div class="col-3 col-md-3">
                                <div class="mobile-navigation text-right">
                                    <div class="header-icon-wrapper">
                                        <ul class="icon-list justify-content-start">
                                            <li class="popup-mobile-click">
                                                <a href="javascript:void(0)"><i class="lnr lnr-menu"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="header-logo text-center">
                                    <a href="index.html">
                                        <img src="assets/images/logo-mobile.png" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-3 col-md-3">
                                <div class="mobile-navigation text-right">
                                    <div class="header-icon-wrapper">
                                        <ul class="icon-list justify-content-end">
                                            <li>
                                                <div class="header-cart-icon">
                                                    <a href="#" class="header-search-toggle"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <div class="header-search-form">
                                                    <form action="#">
                                                        <input type="text" placeholder="Type and hit enter">
                                                        <button><i class="lnr lnr-magnifier"></i></button>
                                                    </form>
                                                </div>
                                            </li>
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
</header>
<!--Header Mobile section end-->

<!-- Start Popup Menu -->
<div class="popup-mobile-manu popup-mobile-visiable">
    <div class="inner">
        <div class="mobileheader">
            <div class="logo">
                <a href="index.html">
                    <img src="assets/images/logo-mobile.png" alt="Multipurpose">
                </a>
            </div>
            <a class="mobile-close" href="#"></a>
        </div>
        <div class="menu-content">
            <ul class="menulist object-custom-menu">
                <li class="has-mega-menu"><a href="#"><span>Home</span></a>
                    <!-- Start Dropdown Menu -->
                    <ul class="object-submenu">
                        <li><a href="index.html"><span>Home V1</span></a></li>
                        <li><a href="index-2.html"><span>Home V2</span></a></li>
                        <li><a href="index-3.html"><span>Home V3</span></a></li>
                        <li><a href="index-4.html"><span>Home V4</span></a></li>
                    </ul>
                    <!-- End Dropdown Menu -->
                </li>

                <li class="has-mega-menu"><a href="#"><span>Jobs</span></a>
                    <!-- Start Dropdown Menu -->
                    <ul class="object-submenu">
                        <li><a href="job-listing.html"><span>Jobs Listing</span></a></li>
                        <li><a href="job-with-map.html"><span>Jobs With Map</span></a></li>
                        <li><a href="job-details.html"><span>Job Detail V1</span></a></li>
                        <li><a href="job-details-two.html"><span>Job Detail V2</span></a></li>
                    </ul>
                    <!-- End Dropdown Menu -->
                </li>

                <li class="has-mega-menu"><a href="#"><span>Candidates</span></a>
                    <!-- Start Dropdown Menu -->
                    <ul class="object-submenu">
                        <li><a href="candidates-listing.html"><span>Candidates Listing</span></a></li>
                        <li><a href="candidate-details.html"><span>Candidate Details V1</span></a></li>
                        <li><a href="candidate-details-two.html"><span>Candidate Details V2</span></a></li>
                    </ul>
                    <!-- End Dropdown Menu -->
                </li>

                <li class="has-mega-menu"><a href="#"><span>Employers</span></a>
                    <!-- Start Dropdown Menu -->
                    <ul class="object-submenu">
                        <li><a href="employer-listing.html"><span>Employers Listing</span></a></li>
                        <li><a href="employer-details.html"><span>Employer Detail V1</span></a></li>
                        <li><a href="employer-details-two.html"><span>Employer Detail V2</span></a></li>
                    </ul>
                    <!-- End Dropdown Menu -->
                </li>

                <li class="has-mega-menu"><a href="#"><span>Blog</span></a>
                    <!-- Start Dropdown Menu -->
                    <ul class="object-submenu">
                        <li><a href="blog.html"><span>Blog</span></a></li>
                        <li><a href="blog-details.html"><span>Blog Details</span></a></li>
                    </ul>
                    <!-- End Dropdown Menu -->
                </li>

                <li class="has-mega-menu"><a href="#"><span>Pages</span></a>
                    <!-- Start Dropdown Menu -->
                    <ul class="object-submenu">
                        <li><a href="about.html"><span>About Us</span></a></li>
                        <li><a href="contact.html"><span>Contact Us</span></a></li>
                        <li><a href="faq.html"><span>FAQS</span></a></li>
                        <li><a href="pricing.html"><span>Pricing & Plan</span></a></li>
                        <li><a href="login-register.html"><span>Login / Register</span></a></li>
                        <li><a href="dashboard.html"><span>Dashboard</span></a></li>
                        <li><a href="shop.html"><span>Shop</span></a></li>
                        <li><a href="product-details.html"><span>Product Details</span></a></li>
                        <li><a href="cart.html"><span>Cart</span></a></li>
                        <li><a href="checkout.html"><span>Checkout</span></a></li>
                        <li><a href="wishlist.html"><span>Wishlist</span></a></li>
                        <li><a href="404.html"><span>404 Error</span></a></li>
                    </ul>
                    <!-- End Dropdown Menu -->
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Popup Menu -->

<!-- Bottom Navbar Mobile Start -->
<div class="bottom-navbar-mobile section d-block d-lg-none">
    <nav>
        <ul class="list-actions">
            <li>
                <a class="toggle-btn active" href="index.html">
                    <span><i class="lnr lnr-home"></i></span>
                    <span class="text">Home</span>
                </a>
            </li>
            <li>
                <a class="toggle-btn toggle-btn-js" data-target="#job-list-mobile-id" href="#">
                    <span><i class="lnr lnr-list"></i></span>
                    <span class="text">Jobs list</span>
                </a>
            </li>
            <li>
                <a href="login-register.html">
                    <span><i class="lnr lnr-heart"></i></span>
                    <span class="text">Save</span>
                </a>
            </li>
            <li>
                <a class="toggle-btn-two toggle-btn-js" data-target="#notifications-mobile-id" href="#">
                    <span><i class="lnr lnr-alarm"></i></span>
                    <span class="text">Notifications</span>
                </a>
            </li>
            <li>
                <a href="login-register.html">
                    <span><i class="lnr lnr-user"></i></span>
                    <span class="text">Account</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
<!-- Bottom Navbar Mobile End -->

<!-- Bottom Navbar Mobile Popup Start -->
<div class="mobile-popup">
    <div class="job-list-mobile" id="job-list-mobile-id">
        <div class="heading">
            <div class="title">
                <i class="lnr lnr-list"></i>
                <h3>All Jobs list</h3>
            </div>
            <a class="view-all" href="#">See all jobs</a>
        </div>
        <div class="content-popup-scroll">
            <ul class="list-item">
                <li><a href="job-listing.html"><i class="lnr lnr-printer"></i>Accounting </a></li>
                <li><a href="job-listing.html"><i class="lnr lnr-film-play"></i>Broadcasting </a></li>
                <li><a href="job-listing.html"><i class="lnr lnr-phone"></i>Customer Service </a></li>
                <li><a href="job-listing.html"><i class="lnr lnr-bullhorn"></i>Digital Marketing </a></li>
                <li><a href="job-listing.html"><i class="lnr lnr-chart-bars"></i>Finance & Accounting </a></li>
                <li><a href="job-listing.html"><i class="lnr lnr-smartphone"></i>Game Mobile </a></li>
                <li><a href="job-listing.html"><i class="lnr lnr-picture"></i>Graphics & Design </a></li>
                <li><a href="job-listing.html"><i class="lnr lnr-home"></i>Graphics & Design </a></li>
                <li><a href="job-listing.html"><i class="lnr lnr-database"></i>Medical Doctor </a></li>
                <li><a href="job-listing.html"><i class="lnr lnr-dinner"></i>Restaurant </a></li>
            </ul>
        </div>
    </div>
    <div class="notifications-mobile" id="notifications-mobile-id">
        <div class="heading">
            <div class="title">
                <i class="lnr lnr-list"></i>
                <h3>All Notifications</h3>
            </div>
            <a class="view-all" href="#">See all jobs</a>
        </div>
        <div class="content-popup-scroll">
            <ul class="list-item">
                <li><a href="login-register.html"><i class="lnr lnr-book"></i><span><b class="highlight">Register now</b> to reach dream jobs easier.</span> </a></li>
                <li><a href="job-with-map.html"><i class="lnr lnr-book"></i><span><b class="highlight">Job suggestion</b> you might be interested based on your profile.</span> </a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Bottom Navbar Mobile Popup End -->

<!--slider section start-->
<div class="hero-section section position-relative">
    <!--Hero Item start-->
    <div class="hero-item bg_image--1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!--Hero Content start-->
                    <div class="hero-content-2 left">
                        <h2 class="title">Top Recruiting Website</h2>
                        <h3 class="sub-title">For Professionals</h3>
                        <p>Jobs & Job search. Find jobs in global. Executive jobs & work. Employment</p>

                        <div class="job-search-wrap mt-90 mt-md-70 mt-sm-50 mt-xs-30">
                            <div class="job-search-form">
                                <form action="#">
                                    <div class="row row-5">
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <!-- Single Field Item Start  -->
                                            <div class="single-field-item">
                                                <i class="lnr lnr-magnifier"></i>
                                                <input placeholder="What jobs you want?" name="keyword" type="text">
                                            </div>
                                            <!-- Single Field Item End  -->
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                            <!-- Single Field Item Start  -->
                                            <div class="single-field-item">
                                                <i class="lnr lnr-list"></i>
                                                <select class="nice-select wide">
                                                    <option value="1">All categories</option>
                                                    <option value="2">Accounting</option>
                                                    <option value="3">Broadcasting</option>
                                                    <option value="4">Customer Service</option>
                                                    <option value="5">Digital Marketing</option>
                                                    <option value="6">Finance & Accounting</option>
                                                    <option value="7">Game Mobile</option>
                                                    <option value="8">Graphics & Design</option>
                                                    <option value="9">Human Resources</option>
                                                    <option value="10">Medical Doctor</option>
                                                    <option value="11">Restaurant</option>
                                                    <option value="12">Sale & Marketing</option>
                                                    <option value="13">Sale Assistance</option>
                                                    <option value="14">Science & Analitycs</option>
                                                    <option value="15">Teachers</option>
                                                    <option value="16">Web & Software Dev</option>
                                                    <option value="17">Writing & Translations</option>
                                                </select>
                                            </div>
                                            <!-- Single Field Item End  -->
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                            <!-- Single Field Item Start  -->
                                            <div class="single-field-item">
                                                <i class="lnr lnr-map-marker"></i>
                                                <input class="input-field input-field-location" placeholder="Location" name="location" type="text">
                                                <span class="btn-action-location">
                                                <i class="far fa-dot-circle"></i>
                                            </span>
                                            </div>
                                            <!-- Single Field Item End  -->
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                                            <div class="submit-btn">
                                                <button class="ht-btn" type="submit"> Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="trending-keywords">
                                <div class="keywords">
                                    <span class="title">Trending Keywords</span>
                                    <ul>
                                        <li><a href="#">Account Manager</a></li>
                                        <li><a href="#">Administrative</a></li>
                                        <li><a href="#">Android</a></li>
                                        <li><a href="#">Angular</a></li>
                                        <li><a href="#">app</a></li>
                                        <li><a href="#">ASP.NET</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--Hero Content end-->

                </div>
            </div>
        </div>
    </div>
    <!--Hero Item end-->
</div>
<!--slider section end-->