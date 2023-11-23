<?php
include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once '../../configuration/header2.php'; ?>
    <title>MAGRENT | Find Home</title>
</head>
<!-- page wrapper -->

<body>
    <div class="boxed_wrapper">
        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="M" class="letters-loading">
                                M
                            </span>
                            <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>
                            <span data-text-preloader="G" class="letters-loading">
                                G
                            </span>
                            <span data-text-preloader="R" class="letters-loading">
                                R
                            </span>
                            <span data-text-preloader="E" class="letters-loading">
                                E
                            </span>
                            <span data-text-preloader="N" class="letters-loading">
                                N
                            </span>
                            <span data-text-preloader="T" class="letters-loading">
                                T
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->
        <!-- main header -->
        <header class="main-header">
            <!-- header-top -->
            <div class="header-top">
                <div class="top-inner clearfix">
                    <div class="left-column pull-left">
                        <ul class="info clearfix">
                            <li><i class="far fa-clock"></i>Mon - Sat 9.00 - 18.00</li>
                            <li><i class="far fa-phone"></i><a href="tel:2512353256"><?php echo $config->getSystemNumber() ?></a></li>
                        </ul>
                    </div>
                    <div class="right-column pull-right">
                        <ul class="social-links clearfix">
                            <li><a href="profile"><i class="fas fa-user"></i>&nbsp;&nbsp;<?php echo $user_email ?></a></li>
                        </ul>
                        <div class="sign-box">
                        <a href="authentication/user-signout" class="btn-signout"><i class="fa fa-sign-out"></i>Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="./"><img src="../../src/images/main_logo/<?php echo $config->getSystemLogo() ?>" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class=""><a href="./"><span>Home</span></a></li>
                                        <li class="current"><a href="find-home"><span>Find A Home</span></a></li>
                                        <li class=""><a href="about-us"><span>About Us</span></a></li>
                                        <li class=""><a href="settings"><span>Settings</span></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="./"><img src="../../src/images/main_logo/<?php echo $config->getSystemLogo() ?>" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href=""><img src="../../src/images/main_logo/<?php echo $config->getSystemLogo() ?>" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li><a href=""><?php echo $config->getSystemName() ?></a></li>
                        <li><a href="">/<?php echo $config->getSystemEmail() ?></a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href=""><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href=""><span class="fab fa-instagram"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->



        <!--Page Title-->
        <section class="page-title-two bg-color-1 centred">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(../../src/images/shape/shape-9.png);"></div>
                <div class="pattern-2" style="background-image: url(../../src/images/shape/shape-10.png);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Find Home</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="./">Home</a></li>
                        <li>Find Home</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->

        <div class="page-content clearfix">
            <div class="right-column pull-right">
                <!-- search-field-section -->
                <section class="search-field-section style-two">
                    <div class="auto-container">
                        <div class="inner-container">
                            <div class="search-field">
                                <div class="tabs-box">
                                    <div class="tabs-content info-group">

                                        <div class="tab active-tab" id="tab-1">
                                            <div class="inner-box">
                                                <div class="top-search">
                                                    <form action="index.html" method="post" class="search-form">
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                                <div class="form-group">
                                                                    <label>Search Property</label>
                                                                    <div class="field-input">
                                                                        <i class="fas fa-search"></i>
                                                                        <input type="search" name="search-field" placeholder="Search by Property, Location or Landmark..." required="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                                <div class="form-group">
                                                                    <label>Location</label>
                                                                    <div class="select-box">
                                                                        <i class="far fa-compass"></i>
                                                                        <select class="wide">
                                                                            <option data-display="Input location">Input location</option>
                                                                            <option value="1">New York</option>
                                                                            <option value="2">California</option>
                                                                            <option value="3">London</option>
                                                                            <option value="4">Maxico</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                                <div class="form-group">
                                                                    <label>Property Type</label>
                                                                    <div class="select-box">
                                                                        <select class="wide">
                                                                            <option data-display="All Type">All Type</option>
                                                                            <option value="1">Laxury</option>
                                                                            <option value="2">Classic</option>
                                                                            <option value="3">Modern</option>
                                                                            <option value="4">New</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="search-btn">
                                                            <button type="submit"><i class="fas fa-search"></i>Search</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="switch_btn_one ">
                                                    <div class="advanced-search">
                                                        <div class="close-btn">
                                                            <a href="#" class="close-side-widget"><i class="far fa-times"></i></a>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                                <div class="form-group">
                                                                    <label>Distance from Location</label>
                                                                    <div class="select-box">
                                                                        <select class="wide">
                                                                            <option data-display="Distance from Location">Distance from Location</option>
                                                                            <option value="1">Max Bath</option>
                                                                            <option value="2">Within 1 Mile</option>
                                                                            <option value="3">Within 2 Mile</option>
                                                                            <option value="4">Within 3 Mile</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                                <div class="form-group">
                                                                    <label>Bedrooms</label>
                                                                    <div class="select-box">
                                                                        <select class="wide">
                                                                            <option data-display="Max Rooms">Max Rooms</option>
                                                                            <option value="1">One Rooms</option>
                                                                            <option value="2">Two Rooms</option>
                                                                            <option value="3">Three Rooms</option>
                                                                            <option value="4">Four Rooms</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                                <div class="form-group">
                                                                    <label>Sort by</label>
                                                                    <div class="select-box">
                                                                        <select class="wide">
                                                                            <option data-display="Most Popular">Most Popular</option>
                                                                            <option value="1">Top Rating</option>
                                                                            <option value="2">New Rooms</option>
                                                                            <option value="3">Classic Rooms</option>
                                                                            <option value="4">Luxry Rooms</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                                <div class="form-group">
                                                                    <label>Floor</label>
                                                                    <div class="select-box">
                                                                        <select class="wide">
                                                                            <option data-display="Select Floor">Select Floor</option>
                                                                            <option value="1">One Floor</option>
                                                                            <option value="2">Two Floor</option>
                                                                            <option value="3">Three Floor</option>
                                                                            <option value="4">Four Floor</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                                <div class="form-group">
                                                                    <label>Bath</label>
                                                                    <div class="select-box">
                                                                        <select class="wide">
                                                                            <option data-display="Max Bath">Max Bath</option>
                                                                            <option value="1">Max Bath</option>
                                                                            <option value="2">Max Bath</option>
                                                                            <option value="3">Max Bath</option>
                                                                            <option value="4">Max Bath</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                                <div class="form-group">
                                                                    <label>Agencies</label>
                                                                    <div class="select-box">
                                                                        <select class="wide">
                                                                            <option data-display="Any Agency">Any Agency</option>
                                                                            <option value="1">Any Agency</option>
                                                                            <option value="2">Agency 01</option>
                                                                            <option value="3">Agency 02</option>
                                                                            <option value="4">Agency 03</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="range-box">
                                                            <div class="row clearfix">
                                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                                    <div class="price-range">
                                                                        <h6>Select Price Range</h6>
                                                                        <div class="range-input">
                                                                            <div class="input"><input type="text" class="property-amount" name="field-name" readonly=""></div>
                                                                        </div>
                                                                        <div class="price-range-slider"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                                    <div class="area-range">
                                                                        <h6>Select Area</h6>
                                                                        <div class="range-input">
                                                                            <div class="input"><input type="text" class="area-range" name="field-name" readonly=""></div>
                                                                        </div>
                                                                        <div class="area-range-slider"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab" id="tab-2">
                                            <div class="inner-box">
                                                <div class="top-search">
                                                    <form action="index.html" method="post" class="search-form">
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                                <div class="form-group">
                                                                    <label>Search Property</label>
                                                                    <div class="field-input">
                                                                        <i class="fas fa-search"></i>
                                                                        <input type="search" name="search-field" placeholder="Search by Property, Location or Landmark..." required="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                                <div class="form-group">
                                                                    <label>Location</label>
                                                                    <div class="select-box">
                                                                        <i class="far fa-compass"></i>
                                                                        <select class="wide">
                                                                            <option data-display="Input location">Input location</option>
                                                                            <option value="1">New York</option>
                                                                            <option value="2">California</option>
                                                                            <option value="3">London</option>
                                                                            <option value="4">Maxico</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                                <div class="form-group">
                                                                    <label>Property Type</label>
                                                                    <div class="select-box">
                                                                        <select class="wide">
                                                                            <option data-display="All Type">All Type</option>
                                                                            <option value="1">Laxury</option>
                                                                            <option value="2">Classic</option>
                                                                            <option value="3">Modern</option>
                                                                            <option value="4">New</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="search-btn">
                                                            <button type="submit"><i class="fas fa-search"></i>Search</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="switch_btn_one ">
                                                    <button class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">Advanced Search<i class="fas fa-angle-down"></i></button>
                                                    <div class="advanced-search">
                                                        <div class="close-btn">
                                                            <a href="#" class="close-side-widget"><i class="far fa-times"></i></a>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                                <div class="form-group">
                                                                    <label>Distance from Location</label>
                                                                    <div class="select-box">
                                                                        <select class="wide">
                                                                            <option data-display="Distance from Location">Distance from Location</option>
                                                                            <option value="1">Max Bath</option>
                                                                            <option value="2">Within 1 Mile</option>
                                                                            <option value="3">Within 2 Mile</option>
                                                                            <option value="4">Within 3 Mile</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                                <div class="form-group">
                                                                    <label>Bedrooms</label>
                                                                    <div class="select-box">
                                                                        <select class="wide">
                                                                            <option data-display="Max Rooms">Max Rooms</option>
                                                                            <option value="1">One Rooms</option>
                                                                            <option value="2">Two Rooms</option>
                                                                            <option value="3">Three Rooms</option>
                                                                            <option value="4">Four Rooms</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                                <div class="form-group">
                                                                    <label>Sort by</label>
                                                                    <div class="select-box">
                                                                        <select class="wide">
                                                                            <option data-display="Most Popular">Most Popular</option>
                                                                            <option value="1">Top Rating</option>
                                                                            <option value="2">New Rooms</option>
                                                                            <option value="3">Classic Rooms</option>
                                                                            <option value="4">Luxry Rooms</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                                <div class="form-group">
                                                                    <label>Floor</label>
                                                                    <div class="select-box">
                                                                        <select class="wide">
                                                                            <option data-display="Select Floor">Select Floor</option>
                                                                            <option value="1">One Floor</option>
                                                                            <option value="2">Two Floor</option>
                                                                            <option value="3">Three Floor</option>
                                                                            <option value="4">Four Floor</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                                <div class="form-group">
                                                                    <label>Bath</label>
                                                                    <div class="select-box">
                                                                        <select class="wide">
                                                                            <option data-display="Max Bath">Max Bath</option>
                                                                            <option value="1">Max Bath</option>
                                                                            <option value="2">Max Bath</option>
                                                                            <option value="3">Max Bath</option>
                                                                            <option value="4">Max Bath</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                                <div class="form-group">
                                                                    <label>Agencies</label>
                                                                    <div class="select-box">
                                                                        <select class="wide">
                                                                            <option data-display="Any Agency">Any Agency</option>
                                                                            <option value="1">Any Agency</option>
                                                                            <option value="2">Agency 01</option>
                                                                            <option value="3">Agency 02</option>
                                                                            <option value="4">Agency 03</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="range-box">
                                                            <div class="row clearfix">
                                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                                    <div class="price-range">
                                                                        <h6>Select Price Range</h6>
                                                                        <div class="range-input">
                                                                            <div class="input"><input type="text" class="property-amount" name="field-name" readonly=""></div>
                                                                        </div>
                                                                        <div class="price-range-slider"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                                    <div class="area-range">
                                                                        <h6>Select Area</h6>
                                                                        <div class="range-input">
                                                                            <div class="input"><input type="text" class="area-range" name="field-name" readonly=""></div>
                                                                        </div>
                                                                        <div class="area-range-slider"></div>
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
                    </div>
                </section>
                <!-- search-field-section end -->

                <!-- deals-style-two -->
                <section class="deals-style-two">
                    <div class="auto-container">
                        <div class="item-shorting clearfix">
                            <div class="left-column pull-left">
                                <h5>Search Reasults: <span>Showing 1-5 of 20 Listings</span></h5>
                            </div>
                            <div class="right-column pull-right clearfix">
                                <div class="short-box clearfix">
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="Sort by: Newest">Sort by: Newest</option>
                                            <option value="1">New Arrival</option>
                                            <option value="2">Top Rated</option>
                                            <option value="3">Offer Place</option>
                                            <option value="4">Most Place</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="short-menu clearfix">
                                    <button class="list-view on"><i class="icon-35"></i></button>
                                    <button class="grid-view"><i class="icon-36"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper list">
                            <div class="deals-list-content list-item">
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="../../src/images/resource/deals-3.jpg" alt=""></figure>
                                            <div class="batch"><i class="icon-11"></i></div>
                                            <span class="category">Featured</span>
                                            <div class="buy-btn"><a href="property-details.html">For Buy</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="title-text">
                                                <h4><a href="property-details.html">Villa on Grand Avenue</a></h4>
                                            </div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$30,000.00</h4>
                                                </div>
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb">
                                                        <img src="../../src/images/feature/author-1.jpg" alt="">
                                                        <span>Michael Bean</span>
                                                    </figure>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="../../src/images/resource/deals-4.jpg" alt=""></figure>
                                            <div class="batch"><i class="icon-11"></i></div>
                                            <span class="category">Featured</span>
                                            <div class="buy-btn"><a href="property-details.html">For Buy</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="title-text">
                                                <h4><a href="property-details.html">Contemporary Apartment</a></h4>
                                            </div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$20,000.00</h4>
                                                </div>
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb">
                                                        <img src="../../src/images/feature/author-1.jpg" alt="">
                                                        <span>Michael Bean</span>
                                                    </figure>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="../../src/images/resource/deals-5.jpg" alt=""></figure>
                                            <div class="batch"><i class="icon-11"></i></div>
                                            <span class="category">Featured</span>
                                            <div class="buy-btn"><a href="property-details.html">For Buy</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="title-text">
                                                <h4><a href="property-details.html">Luxury Villa With Pool</a></h4>
                                            </div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$35,000.00</h4>
                                                </div>
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb">
                                                        <img src="../../src/images/feature/author-1.jpg" alt="">
                                                        <span>Michael Bean</span>
                                                    </figure>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="../../src/images/resource/deals-6.jpg" alt=""></figure>
                                            <div class="batch"><i class="icon-11"></i></div>
                                            <span class="category">Featured</span>
                                            <div class="buy-btn"><a href="property-details.html">For Buy</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="title-text">
                                                <h4><a href="property-details.html">Home in Merrick Way</a></h4>
                                            </div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$45,000.00</h4>
                                                </div>
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb">
                                                        <img src="../../src/images/feature/author-1.jpg" alt="">
                                                        <span>Michael Bean</span>
                                                    </figure>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="../../src/images/resource/deals-7.jpg" alt=""></figure>
                                            <div class="batch"><i class="icon-11"></i></div>
                                            <span class="category">Featured</span>
                                            <div class="buy-btn"><a href="property-details.html">For Buy</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="title-text">
                                                <h4><a href="property-details.html">Apartment in Glasgow</a></h4>
                                            </div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$40,000.00</h4>
                                                </div>
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb">
                                                        <img src="../../src/images/feature/author-1.jpg" alt="">
                                                        <span>Michael Bean</span>
                                                    </figure>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="deals-grid-content">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img src="../../src/images/feature/feature-1.jpg" alt=""></figure>
                                                    <div class="batch"><i class="icon-11"></i></div>
                                                    <span class="category">Featured</span>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="author-info clearfix">
                                                        <div class="author pull-left">
                                                            <figure class="author-thumb"><img src="../../src/images/feature/author-1.jpg" alt=""></figure>
                                                            <h6>Michael Bean</h6>
                                                        </div>
                                                        <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a></div>
                                                    </div>
                                                    <div class="title-text">
                                                        <h4><a href="property-details.html">Villa on Grand Avenue</a></h4>
                                                    </div>
                                                    <div class="price-box clearfix">
                                                        <div class="price-info pull-left">
                                                            <h6>Start From</h6>
                                                            <h4>$30,000.00</h4>
                                                        </div>
                                                        <ul class="other-option pull-right clearfix">
                                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                    <ul class="more-details clearfix">
                                                        <li><i class="icon-14"></i>3 Beds</li>
                                                        <li><i class="icon-15"></i>2 Baths</li>
                                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                                    </ul>
                                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img src="../../src/images/feature/feature-2.jpg" alt=""></figure>
                                                    <div class="batch"><i class="icon-11"></i></div>
                                                    <span class="category">Featured</span>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="author-info clearfix">
                                                        <div class="author pull-left">
                                                            <figure class="author-thumb"><img src="../../src/images/feature/author-2.jpg" alt=""></figure>
                                                            <h6>Robert Niro</h6>
                                                        </div>
                                                        <div class="buy-btn pull-right"><a href="property-details.html">For Rent</a></div>
                                                    </div>
                                                    <div class="title-text">
                                                        <h4><a href="property-details.html">Contemporary Apartment</a></h4>
                                                    </div>
                                                    <div class="price-box clearfix">
                                                        <div class="price-info pull-left">
                                                            <h6>Start From</h6>
                                                            <h4>$45,000.00</h4>
                                                        </div>
                                                        <ul class="other-option pull-right clearfix">
                                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                    <ul class="more-details clearfix">
                                                        <li><i class="icon-14"></i>3 Beds</li>
                                                        <li><i class="icon-15"></i>2 Baths</li>
                                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                                    </ul>
                                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img src="../../src/images/feature/feature-3.jpg" alt=""></figure>
                                                    <div class="batch"><i class="icon-11"></i></div>
                                                    <span class="category">Featured</span>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="author-info clearfix">
                                                        <div class="author pull-left">
                                                            <figure class="author-thumb"><img src="../../src/images/feature/author-3.jpg" alt=""></figure>
                                                            <h6>Keira Mel</h6>
                                                        </div>
                                                        <div class="buy-btn pull-right"><a href="property-details.html">Sold Out</a></div>
                                                    </div>
                                                    <div class="title-text">
                                                        <h4><a href="property-details.html">Luxury Villa With Pool</a></h4>
                                                    </div>
                                                    <div class="price-box clearfix">
                                                        <div class="price-info pull-left">
                                                            <h6>Start From</h6>
                                                            <h4>$63,000.00</h4>
                                                        </div>
                                                        <ul class="other-option pull-right clearfix">
                                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                    <ul class="more-details clearfix">
                                                        <li><i class="icon-14"></i>3 Beds</li>
                                                        <li><i class="icon-15"></i>2 Baths</li>
                                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                                    </ul>
                                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img src="../../src/images/feature/feature-4.jpg" alt=""></figure>
                                                    <div class="batch"><i class="icon-11"></i></div>
                                                    <span class="category">Featured</span>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="author-info clearfix">
                                                        <div class="author pull-left">
                                                            <figure class="author-thumb"><img src="../../src/images/feature/author-1.jpg" alt=""></figure>
                                                            <h6>Michael Bean</h6>
                                                        </div>
                                                        <div class="buy-btn pull-right"><a href="property-details.html">For Buy</a></div>
                                                    </div>
                                                    <div class="title-text">
                                                        <h4><a href="property-details.html">Home in Merrick Way</a></h4>
                                                    </div>
                                                    <div class="price-box clearfix">
                                                        <div class="price-info pull-left">
                                                            <h6>Start From</h6>
                                                            <h4>$30,000.00</h4>
                                                        </div>
                                                        <ul class="other-option pull-right clearfix">
                                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                    <ul class="more-details clearfix">
                                                        <li><i class="icon-14"></i>3 Beds</li>
                                                        <li><i class="icon-15"></i>2 Baths</li>
                                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                                    </ul>
                                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img src="../../src/images/feature/feature-5.jpg" alt=""></figure>
                                                    <div class="batch"><i class="icon-11"></i></div>
                                                    <span class="category">Featured</span>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="author-info clearfix">
                                                        <div class="author pull-left">
                                                            <figure class="author-thumb"><img src="../../src/images/feature/author-2.jpg" alt=""></figure>
                                                            <h6>Robert Niro</h6>
                                                        </div>
                                                        <div class="buy-btn pull-right"><a href="property-details.html">For Rent</a></div>
                                                    </div>
                                                    <div class="title-text">
                                                        <h4><a href="property-details.html">Apartment in Glasgow</a></h4>
                                                    </div>
                                                    <div class="price-box clearfix">
                                                        <div class="price-info pull-left">
                                                            <h6>Start From</h6>
                                                            <h4>$45,000.00</h4>
                                                        </div>
                                                        <ul class="other-option pull-right clearfix">
                                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                    <ul class="more-details clearfix">
                                                        <li><i class="icon-14"></i>3 Beds</li>
                                                        <li><i class="icon-15"></i>2 Baths</li>
                                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                                    </ul>
                                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img src="../../src/images/feature/feature-6.jpg" alt=""></figure>
                                                    <div class="batch"><i class="icon-11"></i></div>
                                                    <span class="category">Featured</span>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="author-info clearfix">
                                                        <div class="author pull-left">
                                                            <figure class="author-thumb"><img src="../../src/images/feature/author-3.jpg" alt=""></figure>
                                                            <h6>Keira Mel</h6>
                                                        </div>
                                                        <div class="buy-btn pull-right"><a href="property-details.html">Sold Out</a></div>
                                                    </div>
                                                    <div class="title-text">
                                                        <h4><a href="property-details.html">Family Home For Sale</a></h4>
                                                    </div>
                                                    <div class="price-box clearfix">
                                                        <div class="price-info pull-left">
                                                            <h6>Start From</h6>
                                                            <h4>$63,000.00</h4>
                                                        </div>
                                                        <ul class="other-option pull-right clearfix">
                                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                    <ul class="more-details clearfix">
                                                        <li><i class="icon-14"></i>3 Beds</li>
                                                        <li><i class="icon-15"></i>2 Baths</li>
                                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                                    </ul>
                                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-wrapper">
                            <ul class="pagination clearfix">
                                <li><a href="property-list-3.html" class="current">1</a></li>
                                <li><a href="property-list-3.html">2</a></li>
                                <li><a href="property-list-3.html">3</a></li>
                                <li><a href="property-list-3.html"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <!-- deals-style-two end -->
            </div>
        </div>
        <!-- page-content end -->

        <!-- main-footer -->
        <footer class="main-footer">
            <div class="footer-top bg-color-2">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column mx-auto">
                            <div class="footer-widget about-widget">
                                <div class="widget-title">
                                    <h3>About</h3>
                                </div>
                                <div class="text">
                                    <p>Welcome to Magrent! Discover the perfect living space with our easy-to-use room rental finder.</p>
                                    <p>Find your next home is now a seamless experience – just a few clicks away.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column mx-auto">
                            <div class="footer-widget links-widget ml-70">
                                <div class="widget-title">
                                    <h3>Services</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list class">
                                        <li><a href="about-us">About Us</a></li>
                                        <li><a href="find-home">Find Home</a></li>
                                        <li><a href="contact-us">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column mx-auto">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h3>Contacts</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">
                                        <li><i class="fas fa-map-marker-alt"></i><?php echo $config->getSystemAddress() ?></li>
                                        <li><i class="fas fa-phone"></i><a href=""><?php echo $config->getSystemNumber() ?></a></li>
                                        <li><i class="fas fa-envelope"></i><a href=""><?php echo $config->getSystemEmail() ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-box clearfix">
                        <div class="copyright pull-left">
                            <p><?php echo $config->getSystemCopyright() ?></p>
                        </div>
                        <ul class="footer-nav pull-right clearfix">
                            <li><a href="terms">Terms of Service</a></li>
                            <li><a href="privacy_policy">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->

        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>

    <!-- script -->
    <?php include_once '../../configuration/footer2.php'; ?>
    <?php include_once '../../configuration/sweetalert.php'; ?>

</body><!-- End of .page_wrapper -->

</html>