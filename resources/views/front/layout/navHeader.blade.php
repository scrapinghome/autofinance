<?php
/**
 * created by: tushar Khan
 * email : tushar.khan0122@gmail.com
 * date : 3/14/2023
 */
?>

<header class="header">
    <div class="container">
        <div class="row">
            <!-- Logo Starts -->
            <div class="main-logo col-xs-12 col-md-3 col-md-2 col-lg-2 hidden-xs">
                <a href="{{ route('home') }}">
                    <img class="img-responsive" src="{{ asset('frontAsset/images/logo.png') }}" alt="logo">
                </a>
            </div>
            <!-- Logo Ends -->
            <!-- Statistics Starts -->
            <div class="col-md-7 col-lg-7">
                <ul class="unstyled bitcoin-stats text-center">
                    <li>
                        <h6>9,450 USD</h6><span>Last trade price</span></li>
                    <li>
                        <h6>+5.26%</h6><span>24 hour price</span></li>
                    <li>
                        <h6>12.820 BTC</h6><span>24 hour volume</span></li>
                    <li>
                        <h6>2,231,775</h6><span>active traders</span></li>
                    <li>
                        <div class="btcwdgt-price" data-bw-theme="light" data-bw-cur="usd"></div>
                        <span>Live Bitcoin price</span>
                    </li>
                </ul>
            </div>
            <!-- Statistics Ends -->
            <!-- User Sign In/Sign Up Starts -->
            <div class="col-md-3 col-lg-3">
                <ul class="unstyled user">
                    <li class="sign-in"><a href="login.html" class="btn btn-primary"><i class="fa fa-user"></i> sign in</a></li>
                    <li class="sign-up"><a href="register.html" class="btn btn-primary"><i class="fa fa-user-plus"></i> register</a></li>
                </ul>
            </div>
            <!-- User Sign In/Sign Up Ends -->
        </div>
    </div>
    <!-- Navigation Menu Starts -->
    <nav class="site-navigation navigation" id="site-navigation">
        <div class="container">
            <div class="site-nav-inner">
                <!-- Logo For ONLY Mobile display Starts -->
                <a class="logo-mobile" href="{{ route('home') }}">
                    <img class="img-responsive" src="{{ asset('frontAsset/images/logo.png') }}" alt="">
                </a>
                <!-- Logo For ONLY Mobile display Ends -->
                <!-- Toggle Icon for Mobile Starts -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Toggle Icon for Mobile Ends -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <!-- Main Menu Starts -->
                    <ul class="nav navbar-nav">
                        <li @if( currentRouteName() == 'home' ) class="active" @endif><a
                                href="{{ route('home') }}">Home</a></li>
                        <li @if( currentRouteName() == 'about' ) class="active" @endif><a href="{{ route('about') }}">About
                                Us</a></li>
                        <li @if( currentRouteName() == 'services' ) class="active" @endif><a
                                href="{{ route('services') }}">Services</a></li>
                        <li @if( currentRouteName() == 'pricing' ) class="active" @endif><a
                                href="{{ route('pricing') }}">Pricing</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">pages <i
                                    class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li @if( currentRouteName() == 'cart' ) class="active" @endif><a
                                        href="{{ asset('cart') }}">Shopping cart</a></li>
                                <li @if( currentRouteName() == 'checkout' ) class="active" @endif><a
                                        href="{{ route('checkout') }}">shopping checkout</a></li>
                                <li @if( currentRouteName() == 'faq' ) class="active" @endif><a
                                        href="{{ route('faq') }}">FAQ page</a></li>
                                <li @if( currentRouteName() == 'terms' ) class="active" @endif><a
                                        href="{{ route('terms') }}">Terms of Services</a></li>
                            </ul>
                        </li>
                        <li @if( currentRouteName() == 'contact' ) class="active" @endif><a
                                href="{{ route('contact') }}">Contact</a></li>
                        <!-- Cart Icon Starts -->
                        <li class="cart @if( currentRouteName() == 'cart' ) active @endif "><a
                                href="{{ route('cart') }}"><i class="fa fa-shopping-cart"></i></a></li>
                        <!-- Cart Icon Starts -->
                        <!-- Search Icon Starts -->
                        <li class="search">
                            <button class="fa fa-search"></button>
                        </li>
                        <!-- Search Icon Ends -->
                    </ul>
                    <!-- Main Menu Ends -->
                </div>
            </div>
        </div>
        <!-- Search Input Starts -->
        <div class="site-search">
            <div class="container">
                <input type="text" placeholder="type your keyword and hit enter ...">
                <span class="close">×</span>
            </div>
        </div>
        <!-- Search Input Ends -->
    </nav>
    <!-- Navigation Menu Ends -->
</header>
