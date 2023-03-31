<?php
/**
 * created by: tushar Khan
 * email : tushar.khan0122@gmail.com
 * date : 3/14/2023
 */
?>

@extends('front.layout.app')

@section('frontContent')

    <!-- Slider Starts -->
    <div id="main-slide" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Indicators Starts -->
        <ol class="carousel-indicators visible-lg visible-md">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!-- Indicators Ends -->
        <!-- Carousel Inner Starts -->
        <div class="carousel-inner">
            <!-- Carousel Item Starts -->
            <div class="item active" style="background-image: url({{ asset('frontAsset/images/slider/bg1.png') }})">
                <!--<div class="slider-content">
                    <div class="container">
                        <div class="slider-text text-center">
                            <h3 class="slide-title"><span>Secure</span> and <span>Easy Way</span><br/> To Bitcoin</h3>
                            <p>
                                <a href="about.html" class="slider btn btn-primary">Learn more</a>
                            </p>
                        </div>
                    </div>
                </div>-->
            </div>
            <!-- Carousel Item Ends -->
            <!-- Carousel Item Starts -->
            <div class="item bg-parallax" style="background-image: url({{ asset('frontAsset/images/slider/bg2.png') }})">
                <!-- <div class="slider-content">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="slider-text text-center">
                                <h3 class="slide-title"><span>Bitcoin</span> Exchange <br/>You can <span>Trust</span> </h3>
                                <p>
                                    <a href="pricing.html" class="slider btn btn-primary">our prices</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- Carousel Item Ends -->
             <!-- Carousel Item Starts -->
            <div class="item bg-parallax" style="background-image: url({{ asset('frontAsset/images/slider/bg3.png') }})">
                <!-- <div class="slider-content">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="slider-text text-center">
                                <h3 class="slide-title"><span>Bitcoin</span> Exchange <br/>You can <span>Trust</span> </h3>
                                <p>
                                    <a href="pricing.html" class="slider btn btn-primary">our prices</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- Carousel Item Ends -->
             <!-- Carousel Item Starts -->
            <div class="item bg-parallax" style="background-image: url({{ asset('frontAsset/images/slider/bg4.png') }})">
                <!-- <div class="slider-content">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="slider-text text-center">
                                <h3 class="slide-title"><span>Bitcoin</span> Exchange <br/>You can <span>Trust</span> </h3>
                                <p>
                                    <a href="pricing.html" class="slider btn btn-primary">our prices</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- Carousel Item Ends -->
            <div class="item bg-parallax" style="background-image: url({{ asset('frontAsset/images/slider/bg5.png') }})">
                <!-- <div class="slider-content">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="slider-text text-center">
                                <h3 class="slide-title"><span>Bitcoin</span> Exchange <br/>You can <span>Trust</span> </h3>
                                <p>
                                    <a href="pricing.html" class="slider btn btn-primary">our prices</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="item bg-parallax" style="background-image: url({{ asset('frontAsset/images/slider/bg6.png') }})">
                <!-- <div class="slider-content">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="slider-text text-center">
                                <h3 class="slide-title"><span>Bitcoin</span> Exchange <br/>You can <span>Trust</span> </h3>
                                <p>
                                    <a href="pricing.html" class="slider btn btn-primary">our prices</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- Carousel Inner Ends -->
        <!-- Carousel Controlers Starts -->
        <a class="left carousel-control" href="index.html#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="index.html#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
        </a>
        <!-- Carousel Controlers Ends -->
    </div>
    <!-- Slider Ends -->
    <!-- Features Section Starts -->

    <!-- Features Section Ends -->
    <!-- About Section Starts -->
    <section class="about-us">
        <div class="container">
            <!-- Section Title Starts -->
            <div class="row text-center">
                <h2 class="title-head">About <span>Us</span></h2>
                <div class="title-head-subtitle">
                    <p>Our completely automated trading solution makes you sit and watch your capital growing in your own account.</p>
                </div>
            </div>
            <!-- Section Title Ends -->
            <!-- Section Content Starts -->
            <div class="row about-content">
                <!-- Image Starts -->
                <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                    <img class="img-responsive img-about-us" src="{{ asset('frontAsset/images/about-us.png') }}" alt="about us">
                </div>
                <!-- Image Ends -->
                <!-- Content Starts -->
                <div class="col-sm-12 col-md-7 col-lg-6">
                    <h3 class="title-about">WHO WE ARE ?</h3>
                    <p class="about-text">We are a team of data analysts, computer programmers, staticians, mathematicians, economists, artificial intellegence professionals and experienced trades, so we analyze better.</p>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#menu1">Our Mission</a></li>
                        <li><a data-toggle="tab" href="#menu2">Our advantages</a></li>
                        <li><a data-toggle="tab" href="#menu3">Our guarantees</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="menu1" class="tab-pane fade in active">
                            <p>To provide completely automated solution to our clients and grow their finance consistently and with confidence.</p>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <p>100% backtested strategies. No regular human effort, 24/7 trading with our Bot. Zero subscription fee, No hidden charges.</p>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <p>We share pre-decided part of your net profit after 30 days as our fee, because we are confident about gains of professionaly tested strategies we developed for our clients. </p>
                        </div>
                    </div>
                    <a class="btn btn-primary" href="about.html">Read More</a>
                </div>
                <!-- Content Ends -->
            </div>
            <!-- Section Content Ends -->
        </div>
    </section>
    <!-- About Section Ends -->
    <!-- Features and Video Section Starts -->
    <section class="image-block">
        <div class="container-fluid">
            <div class="row">
                <!-- Features Starts -->
                <div class="col-md-8 ts-padding img-block-left">
                    <div class="gap-20"></div>
                    <div class="row">
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
										<img src="{{ asset('frontAsset/images/icons/orange/strong-security.png') }}" alt="strong security"/>
									</span>
                                <h3 class="feature-title">Strong Security</h3>
                                <p>Protection against DDoS attacks, <br>full data encryption</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                        <div class="gap-20-mobile"></div>
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
										<img src="{{ asset('frontAsset/images/icons/orange/world-coverage.png') }}" alt="world coverage"/>
									</span>
                                <h3 class="feature-title">World Coverage</h3>
                                <p>Providing services in 99% countries<br> around all the globe</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                    </div>
                    <div class="gap-20"></div>
                    <div class="row">
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
										<img src="{{ asset('frontAsset/images/icons/orange/payment-options.png') }}" alt="payment options"/>
									</span>
                                <h3 class="feature-title">Payment Options</h3>
                                <p>Popular methods:  <br>Bank transfer, Cryptocurrency</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                        <div class="gap-20-mobile"></div>
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
										<img src="{{ asset('frontAsset/images/icons/orange/mobile-app.png') }}" alt="mobile app"/>
									</span>
                                <h3 class="feature-title">Auto trading Bot</h3>
                                <p>Keep your account growing 24/7 with<br> our trading solutions.</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                    </div>
                    <div class="gap-20"></div>
                    <div class="row">
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
										<img src="{{ asset('frontAsset/images/icons/orange/cost-efficiency.png') }}" alt="cost efficiency"/>
									</span>
                                <h3 class="feature-title">Cost efficiency</h3>
                                <p>Reasonable trading fees for takers<br> and all market makers</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                        <div class="gap-20-mobile"></div>
                        <!-- Feature Starts -->
                        <div class="col-sm-6 col-md-6 col-xs-12">
                            <div class="feature text-center">
                                    <span class="feature-icon">
										<img src="{{ asset('frontAsset/images/icons/orange/high-liquidity.png') }}" alt="high liquidity"/>
									</span>
                                <h3 class="feature-title">High Liquidity</h3>
                                <p>Fast access to high liquidity orderbook<br> for top currency pairs</p>
                            </div>
                        </div>
                        <!-- Feature Ends -->
                    </div>
                </div>
                <!-- Features Ends -->
                <!-- Video Starts -->
                <div class="col-md-4 ts-padding bg-image-1">
                    <div>
                        <div class="text-center">
                            <a class="button-video mfp-youtube" href="https://www.youtube.com/watch?v=0gv7OC9L2s8"></a>
                        </div>
                    </div>
                </div>
                <!-- Video Ends -->
            </div>
        </div>
    </section>
    <!-- Features and Video Section Ends -->
    <!-- Pricing Starts -->
    <section class="pricing">
        <div class="container">
            <!-- Section Title Starts -->
            <div class="row text-center">
                <h2 class="title-head">Automtaed Trading<span> Packages</span></h2>
                <div class="title-head-subtitle">
                    <p>Choose the suitable strategy for your account according to your affoardable risk, We always encourage you to start with low risk one but still choce is yours.</p>
                </div>
            </div>
            <!-- Section Title Ends -->
            <!-- Section Content Starts -->
            <div class="row pricing-tables-content">
                <div class="pricing-container">
                    <!-- Pricing Switcher Starts -->
                    <div class="pricing-switcher">
                        <p>
                            <input type="radio" name="switch" value="buy" id="buy-1" checked>
                            <label for="buy-1">BUY</label>
                            <input type="radio" name="switch" value="sell" id="sell-1">
                            <label for="sell-1">SELL</label>
                            <span class="switch"></span>
                        </p>
                    </div>
                    <!-- Pricing Switcher Ends -->
                    <!-- Pricing Tables Starts -->
                    <ul class="pricing-list bounce-invert">
                        <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <ul class="pricing-wrapper">
                                <!-- Buy Pricing Table #1 Starts -->
                                <li data-type="buy" class="is-visible">
                                    <header class="pricing-header">
                                        <h2>GET 0.007 BTC <span>For </span></h2>
                                        <div class="price">
                                            <span class="currency"><i class="fa fa-dollar"></i></span>
                                            <span class="value">100</span>
                                        </div>
                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="#" class="btn btn-primary">Slow & Stable</a>
                                    </footer>
                                </li>
                                <!-- Buy Pricing Table #1 Ends -->
                                <!-- Sell Pricing Table #1 Starts -->
                                <li data-type="sell" class="is-hidden">
                                    <header class="pricing-header">
                                        <h2>GET 100 USD <span>For </span></h2>

                                        <div class="price">
                                            <span class="currency"><i class="fa fa-bitcoin"></i></span>
                                            <span class="value">0.2</span>
                                        </div>
                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="#" class="btn btn-primary">Slow & Stable</a>
                                    </footer>
                                </li>
                                <!-- Sell Pricing Table #1 Ends -->
                            </ul>
                        </li>
                        <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <ul class="pricing-wrapper">
                                <!-- Buy Pricing Table #2 Starts -->
                                <li data-type="buy" class="is-visible">
                                    <header class="pricing-header">
                                        <h2>GET 0.015 BTC <span>For </span></h2>
                                        <div class="price">
                                            <span class="currency"><i class="fa fa-dollar"></i></span>
                                            <span class="value">300</span>
                                        </div>
                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="#" class="btn btn-primary">Moderate</a>
                                    </footer>
                                </li>
                                <!-- Buy Pricing Table #2 Ends -->
                                <!-- Sell Pricing Table #2 Starts -->
                                <li data-type="sell" class="is-hidden">
                                    <header class="pricing-header">
                                        <h2>GET 1000 USD <span>For </span></h2>
                                        <div class="price">
                                            <span class="currency"><i class="fa fa-bitcoin"></i></span>
                                            <span class="value">0.5</span>
                                        </div>
                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="#" class="btn btn-primary">Moderate</a>
                                    </footer>
                                </li>
                                <!-- Sell Pricing Table #2 Ends -->
                            </ul>
                        </li>
                        <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <ul class="pricing-wrapper">
                                <!-- Buy Pricing Table #3 Starts -->
                                <li data-type="buy" class="is-visible">
                                    <header class="pricing-header">
                                        <h2>GET 0.031 BTC <span>For </span></h2>
                                        <div class="price">
                                            <span class="currency"><i class="fa fa-dollar"></i></span>
                                            <span class="value">500</span>
                                        </div>
                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="#" class="btn btn-primary">Agressive</a>
                                    </footer>
                                </li>
                                <!-- Buy Pricing Table #3 Ends -->
                                <!-- Yearlt Pricing Table #3 Starts -->
                                <li data-type="sell" class="is-hidden">
                                    <header class="pricing-header">
                                        <h2>GET 3000 USD <span>For </span></h2>

                                        <div class="price">
                                            <span class="currency"><i class="fa fa-bitcoin"></i></span>
                                            <span class="value">1</span>
                                        </div>
                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="#" class="btn btn-primary">Moderate</a>
                                    </footer>
                                </li>
                                <!-- Sell Pricing Table #3 Ends -->
                            </ul>
                        </li>
                        <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <ul class="pricing-wrapper">
                                <!-- Buy Pricing Table #4 Starts -->
                                <li data-type="buy" class="is-visible">
                                    <header class="pricing-header">
                                        <h2>GET 0.081 BTC <span>For </span></h2>
                                        <div class="price">
                                            <span class="currency"><i class="fa fa-dollar"></i></span>
                                            <span class="value">1,000</span>
                                        </div>
                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="#" class="btn btn-primary">High gain for risk lovers</a>
                                    </footer>
                                </li>
                                <!-- Buy Pricing Table #4 Ends -->
                                <!-- Sell Pricing Table #4 Starts -->
                                <li data-type="sell" class="is-hidden">
                                    <header class="pricing-header">
                                        <h2>GET 9000 USD <span>For </span></h2>
                                        <div class="price">
                                            <span class="currency"><i class="fa fa-bitcoin"></i></span>
                                            <span class="value">2</span>
                                        </div>
                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="#" class="btn btn-primary">High gain for risk lovers</a>
                                    </footer>
                                </li>
                                <!-- Sell Pricing Table #4 Ends -->
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Ends -->

    <!-- Bitcoin Calculator Section Starts -->
    <section class="bitcoin-calculator-section">
        <div class="container">
            <div class="row">
                <!-- Section Heading Starts -->
                <div class="col-md-12">
                    <h2 class="title-head text-center"><span>Bitcoin</span> Calculator</h2>
                    <p class="message text-center">Find out the current Bitcoin value with our easy-to-use converter</p>
                </div>
                <!-- Section Heading Ends -->
                <!-- Bitcoin Calculator Form Starts -->
                <div class="col-md-12 ">
                    <form class="bitcoin-calculator" id="bitcoin-calculator">
                        <input class="form-input form-input-result" id="capitol_input" name="capitol_input">
                        <!-- Input/Result Ends -->
                        <!-- Select Currency Starts -->
                        <div class="form-wrap">
                            <select class="form-input select-currency select-primary" id="capitol_select"
                                    name="capitol_select" data-dropdown-class="select-primary-dropdown">
                                <option value="" disabled selected>Select</option>
                                <option value="100">100</option>
                                <option value="500">500</option>
                                <option value="1000">1000</option>
                                <option value="5000">5000</option>
                            </select>
                        </div>

                        <!-- Input/Result Starts -->
                        <input class="form-input form-input-result" id="month_input" name="month_input"
                               style="margin-left: 25px">
                        <!-- Input/Result Ends -->
                        <!-- Select Currency Starts -->
                        <div class="form-wrap">
                            <select class="form-input select-currency select-primary" id="month_select"
                                    name="month_select" data-dropdown-class="select-primary-dropdown">
                                <option value="" disabled selected>Select</option>
                                <option value="3">3</option>
                                <option value="6">6</option>
                                <option value="12">12</option>
                                <option value="18">18</option>
                                <option value="24">24</option>
                                <option value="36">36</option>
                            </select>
                        </div>
                        <!-- Select Currency Ends -->

                        <!-- Select Currency Starts -->
                        <div class="form-wrap form-group" style="margin-left: 25px">
                            <select class="form-control select-currency select-primary" id="strategy_select"
                                    name="strategy_select">
                                <option value="" disabled selected>Select Strategy</option>
                                @foreach($strategies as $strategy)
                                    <option value="{{$strategy->id}}">{{$strategy->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <input class="form-input form-input-result" name="result" id="result" style="margin-left: 25px">

                    </form>
                </div>
                <!-- Bitcoin Calculator Form Ends -->
            </div>
        </div>
    </section>
    <!-- Bitcoin Calculator Section Ends -->

    <!-- Bitcoin Calculator Section Starts -->
    <section class="bitcoin-calculator-section">
        <div class="container">
            <div class="row">
                <!-- Section Heading Starts -->
                <div class="col-md-12">
                    <h2 class="title-head text-center"><span>Bitcoin</span> Calculator</h2>
                    <p class="message text-center">Find out the current Bitcoin value with our easy-to-use converter</p>
                </div>
                <!-- Section Heading Ends -->
                <!-- Bitcoin Calculator Form Starts -->
                <div class="col-md-12 text-center">
                    <form class="bitcoin-calculator" id="bitcoin-calculator">
                        <!-- Input #1 Starts -->
                        <input class="form-input" name="btc-calculator-value" value="1">
                        <!-- Input #1 Ends -->
                        <div class="form-info"><i class="fa fa-bitcoin"></i></div>
                        <div class="form-equal">=</div>
                        <!-- Input/Result Starts -->
                        <input class="form-input form-input-result" name="btc-calculator-result">
                        <!-- Input/Result Ends -->
                        <!-- Select Currency Starts -->
                        <div class="form-wrap">
                            <select id="currency-select" class="form-input select-currency select-primary" name="btc-calculator-currency" data-dropdown-class="select-primary-dropdown"></select>
                        </div>
                        <!-- Select Currency Ends -->
                    </form>
                    <p class="info"><i>* Data updated every 15 minutes</i></p>
                </div>
                <!-- Bitcoin Calculator Form Ends -->
            </div>
        </div>
    </section>
    <!-- Bitcoin Calculator Section Ends -->
    <!-- Team Section Starts -->
    <section class="team">
        <div class="container">
            <!-- Section Title Starts -->
            <div class="row text-center">
                <h2 class="title-head">our <span>Services</span></h2>
                <div class="title-head-subtitle">
                    <p> Data reveals everything in better way</p>
                </div>
            </div>
            <!-- Section Title Ends -->
            <!-- Team Members Starts -->
            <div class="row team-content team-members">
                <!-- Team Member Starts -->
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="team-member">
                        <!-- Team Member Picture Starts -->
                        <img src="{{ asset('frontAsset/images/team/member1.jpg') }}" class="img-responsive" alt="team member">
                        <!-- Team Member Picture Ends -->
                        <!-- Team Member Details Starts -->
                        <div class="team-member-caption social-icons">
                            <h4>Lina Marzouki</h4>
                            <p>Ceo Founder</p>
                            <ul class="list list-inline social">
                                <li>
                                    <a href="#" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Team Member Details Ends -->
                    </div>
                </div>
                <!-- Team Member Ends -->
                <!-- Team Member Starts -->
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="team-member">
                        <!-- Team Member Picture Starts -->
                        <img src="{{ asset('frontAsset/images/team/member2.jpg') }}" class="img-responsive" alt="team member">
                        <!-- Team Member Picture Ends -->
                        <!-- Team Member Details Starts -->
                        <div class="team-member-caption social-icons">
                            <h4>Marco Verratti</h4>
                            <p>Director</p>
                            <ul class="list list-inline social">
                                <li>
                                    <a href="#" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Team Member Details Ends -->
                    </div>
                </div>
                <!-- Team Member Ends -->
                <!-- Team Member Starts -->
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <!-- Team Member-->
                    <div class="team-member">
                        <!-- Team Member Picture Starts -->
                        <img src="{{ asset('frontAsset/images/team/member3.jpg') }}" class="img-responsive" alt="team member">
                        <!-- Team Member Picture Ends -->
                        <!-- Team Member Details Starts -->
                        <div class="team-member-caption social-icons">
                            <h4>Emilia Bella</h4>
                            <p>Bitcoin Consultant</p>
                            <ul class="list list-inline social">
                                <li>
                                    <a href="#" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Team Member Details Ends -->
                    </div>
                </div>
                <!-- Team Member Ends -->
                <!-- Team Member Starts -->
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="team-member">
                        <!-- Team Member Picture Starts -->
                        <img src="{{ asset('frontAsset/images/team/member4.jpg') }}" class="img-responsive" alt="team member">
                        <!-- Team Member Picture Ends -->
                        <!-- Team Member Details Starts -->
                        <div class="team-member-caption social-icons">
                            <h4>Antonio Conte</h4>
                            <p>Bitcoin Developer</p>
                            <ul class="list list-inline social">
                                <li>
                                    <a href="#" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Team Member Details Ends -->
                    </div>
                </div>
                <!-- Team Member Ends -->
            </div>
            <!-- Team Members Ends -->
        </div>
    </section>
    <!-- Team Section Ends -->
    <!-- Quote and Chart Section Starts -->
    <section class="image-block2">
        <div class="container-fluid">
            <div class="row">
                <!-- Quote Starts -->
                <div class="col-md-4 img-block-quote bg-image-2">
                    <blockquote>
                        <p>Bitcoin is one of the most important inventions in all of human history. For the first time ever, anyone can send or receive any amount of money with anyone else, anywhere on the planet, conveniently and without restriction. It’s the dawn of a better, more free world.</p>
                        <footer><img src="{{ asset('frontAsset/images/ceo.jpg') }}" alt="ceo" /> <span>Marc Smith</span> - CEO</footer>
                    </blockquote>
                </div>
                <!-- Quote Ends -->
                <!-- Chart Starts -->
                <div class="col-md-8 bg-grey-chart">
                    <div class="chart-widget dark-chart chart-1">
                        <div>
                            <div class="btcwdgt-chart" data-bw-theme="dark"></div>
                        </div>
                    </div>
                </div>
                <!-- Chart Ends -->
            </div>
        </div>
    </section>
    <!-- Quote and Chart Section Ends -->
    <!-- Blog Section Starts -->
    <section class="blog">
        <div class="container">
            <!-- Section Title Starts -->
            <div class="row text-center">
                <h2 class="title-head">Bitcoin <span>News</span></h2>
                <div class="title-head-subtitle">
                    <p>Discover latest news about Bitcoin on our blog</p>
                </div>
            </div>
            <!-- Section Title Ends -->
            <!-- Section Content Starts -->
            <div class="row latest-posts-content">
                <!-- Article Starts -->
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <div class="latest-post">
                        <!-- Featured Image Starts -->
                        <a href="blog-post.html"><img class="img-responsive" src="{{ asset('frontAsset/images/blog/blog-post-small-1.jpg') }}" alt="img"></a>
                        <!-- Featured Image Ends -->
                        <!-- Article Content Starts -->
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="blog-post.html">How Cryptocurrency Begun and Its Impact To Financial Transactions</a>
                            </h4>
                            <div class="post-text">
                                <p>incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis nostrud...</p>
                            </div>
                        </div>
                        <div class="post-date">
                            <span>01</span>
                            <span>JAN</span>
                        </div>
                        <a href="blog-post.html" class="btn btn-primary">read more</a>
                        <!-- Article Content Ends -->
                    </div>
                </div>
                <!-- Article Ends -->
                <!-- Article Starts -->
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <div class="latest-post">
                        <!-- Featured Image Starts -->
                        <a href="blog-post.html"><img class="img-responsive" src="{{ asset('frontAsset/images/blog/blog-post-small-2.jpg') }}" alt="img"></a>
                        <!-- Featured Image Ends -->
                        <!-- Article Content Starts -->
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="blog-post.html">Cryptocurrency - Who Are Involved With It? Words about members</a>
                            </h4>
                            <div class="post-text">
                                <p>incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis nostrud...</p>
                            </div>
                        </div>
                        <div class="post-date">
                            <span>17</span>
                            <span>MAR</span>
                        </div>
                        <a href="blog-post.html" class="btn btn-primary">read more</a>
                        <!-- Article Content Ends -->
                    </div>
                </div>
                <!-- Article Ends -->
                <!-- Article Start -->
                <div class="col-sm-4 col-md-4 col-xs-12">
                    <div class="latest-post">
                        <!-- Featured Image Starts -->
                        <a href="blog-post.html"><img class="img-responsive" src="{{ asset('frontAsset/images/blog/blog-post-small-3.jpg') }}" alt="img"></a>
                        <!-- Featured Image Ends -->
                        <!-- Article Content Starts -->
                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="blog-post.html">Risks & Rewards Of Investing In Bitcoin. Pros and Cons</a>
                            </h4>
                            <div class="post-text">
                                <p>incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis nostrud...</p>
                            </div>
                        </div>
                        <div class="post-date">
                            <span>25</span>
                            <span>FEB</span>
                        </div>
                        <a href="blog-post.html" class="btn btn-primary">read more</a>
                        <!-- Article Content Ends -->
                    </div>
                </div>
            </div>
            <!-- Section Content Ends -->
        </div>
    </section>
    <!-- Blog Section Ends -->
    <!-- Call To Action Section Starts -->
    <section class="call-action-all">
        <div class="call-action-all-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Call To Action Text Starts -->
                        <div class="action-text">
                            <h2>Get Started Today With Bitcoin</h2>
                            <p class="lead">Open account for free and start trading Bitcoins!</p>
                        </div>
                        <!-- Call-To-Action Text Ends -->
                        <!-- call-To-Action Button Starts -->
                        <p class="action-btn"><a class="btn btn-primary" href="register.html">Register Now</a></p>
                        <!-- call-To-Action Button Ends -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section Ends -->

@endsection

@push('frontJS')
    <script>
        var capitol_input = $('#capitol_input');
        var capitol_select = $('#capitol_select');
        var month_input = $('#month_input');
        var month_select = $('#month_select');
        var strategy_select = $('#strategy_select');
        var result = $('#result');

        capitol_select.on('change', function () {
            capitol_input.val(capitol_select.val());
            callAPI();
        });

        month_select.on('change', function () {
            month_input.val(month_select.val());
            callAPI();
        });

        strategy_select.on('change', function () {
            callAPI();
        });

        capitol_input.on('change', function () {
            callAPI();
        });

        month_input.on('change', function () {
            callAPI();
        });

        function checkAllInputIsFilled() {
            console.log(strategy_select.val());
            if (
                capitol_input.val() == '' ||
                capitol_input.val() == null ||
                month_input.val() == '' ||
                month_input.val() == null ||
                strategy_select.val() == '' ||
                strategy_select.val() == null
            ) {
                return false;
            }
            return true;
        }

        function callAPI() {
            if (checkAllInputIsFilled()) {
                let url = '{{ route("calculate-growth") }}';
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        capitol: capitol_input.val(),
                        month: month_input.val(),
                        strategy: strategy_select.val(),
                    },
                    success: function (data) {
                        result.val(data.data.profit);
                    },
                    error: function () {
                        alert('Error');
                    }
                });
            }
        }
    </script>
@endpush
