<?php
/**
 * created by: tushar Khan
 * email : tushar.khan0122@gmail.com
 * date : 3/15/2023
 */
?>

@extends('front.layout.app')

@section('frontContent')

    @include('front.layout.banner', ['text' => 'Pricing', 'pageName' => 'Pricing', 'image' => 'frontAsset/images/backgrounds/bg-banner.jpg'])

    <!-- Pricing Starts -->
    <section class="pricing">
        <div class="container">
            <!-- Section Content Starts -->
            <h3 class="text-center">Buy Bitcoins</h3>
            <p class="text-center">Buy bitcoins with your credit card or cash here! Register to Bayya and get your
                bitcoins today.</p>
            <div class="row pricing-tables-content pricing-page">
                <div class="pricing-container">
                    <!-- Pricing Tables Starts -->
                    <ul class="pricing-list bounce-invert">
                        <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <ul class="pricing-wrapper">
                                <!-- Pricing Table #1 Starts -->
                                <li>
                                    <header class="pricing-header">
                                        <h2>GET 0.007 BTC <span>For </span></h2>
                                        <div class="price">
                                            <span class="currency"><i class="fa fa-dollar"></i></span>
                                            <span class="value">100</span>
                                        </div>
                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="#" class="btn btn-primary">ORDER NOW</a>
                                    </footer>
                                </li>
                                <!-- Pricing Table #1 Ends -->
                            </ul>
                        </li>
                        <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <ul class="pricing-wrapper">
                                <!-- Pricing Table #2 Starts -->
                                <li>
                                    <header class="pricing-header">
                                        <h2>GET 0.015 BTC <span>For </span></h2>
                                        <div class="price">
                                            <span class="currency"><i class="fa fa-dollar"></i></span>
                                            <span class="value">300</span>
                                        </div>
                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="#" class="btn btn-primary">ORDER NOW</a>
                                    </footer>
                                </li>
                                <!-- Pricing Table #2 Ends -->
                            </ul>
                        </li>
                        <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <ul class="pricing-wrapper">
                                <!-- Pricing Table #3 Starts -->
                                <li>
                                    <header class="pricing-header">
                                        <h2>GET 0.031 BTC <span>For </span></h2>
                                        <div class="price">
                                            <span class="currency"><i class="fa fa-dollar"></i></span>
                                            <span class="value">500</span>
                                        </div>
                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="#" class="btn btn-primary">ORDER NOW</a>
                                    </footer>
                                </li>
                                <!-- Pricing Table #3 Ends -->
                            </ul>
                        </li>
                        <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <ul class="pricing-wrapper">
                                <!-- Pricing Table #4 Starts -->
                                <li>
                                    <header class="pricing-header">
                                        <h2>GET 0.081 BTC <span>For </span></h2>
                                        <div class="price">
                                            <span class="currency"><i class="fa fa-dollar"></i></span>
                                            <span class="value">1,000</span>
                                        </div>
                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="#" class="btn btn-primary">ORDER NOW</a>
                                    </footer>
                                </li>
                                <!-- Pricing Table #4 Ends -->
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <h3 class="text-center sell-title">sell Bitcoins</h3>
            <p class="text-center">Sell easy, fast and secure Bitcoin. The money will be transferred to your PayPal or
                bank account.</p>
            <div class="row pricing-tables-content pricing-page">
                <div class="pricing-container">
                    <!-- Pricing Tables Starts -->
                    <ul class="pricing-list bounce-invert">
                        <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <ul class="pricing-wrapper">
                                <!-- Pricing Table #1 Starts -->
                                <li>
                                    <header class="pricing-header">
                                        <h2>GET 100 USD <span>For </span></h2>

                                        <div class="price">
                                            <span class="currency"><i class="fa fa-bitcoin"></i></span>
                                            <span class="value">0.2</span>
                                        </div>
                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="#" class="btn btn-primary">ORDER NOW</a>
                                    </footer>
                                </li>
                                <!-- Pricing Table #1 Ends -->
                            </ul>
                        </li>
                        <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <ul class="pricing-wrapper">
                                <!-- Pricing Table #2 Starts -->
                                <li>
                                    <header class="pricing-header">
                                        <h2>GET 1000 USD <span>For </span></h2>
                                        <div class="price">
                                            <span class="currency"><i class="fa fa-bitcoin"></i></span>
                                            <span class="value">0.5</span>
                                        </div>
                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="#" class="btn btn-primary">ORDER NOW</a>
                                    </footer>
                                </li>
                                <!-- Pricing Table #2 Ends -->
                            </ul>
                        </li>
                        <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <ul class="pricing-wrapper">
                                <!-- Yearlt Pricing Table #3 Starts -->
                                <li>
                                    <header class="pricing-header">
                                        <h2>GET 3000 USD <span>For </span></h2>

                                        <div class="price">
                                            <span class="currency"><i class="fa fa-bitcoin"></i></span>
                                            <span class="value">1</span>
                                        </div>
                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="#" class="btn btn-primary">ORDER NOW</a>
                                    </footer>
                                </li>
                                <!-- Pricing Table #3 Ends -->
                            </ul>
                        </li>
                        <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <ul class="pricing-wrapper">
                                <!-- Pricing Table #4 Starts -->
                                <li>
                                    <header class="pricing-header">
                                        <h2>GET 9000 USD <span>For </span></h2>
                                        <div class="price">
                                            <span class="currency"><i class="fa fa-bitcoin"></i></span>
                                            <span class="value">2</span>
                                        </div>
                                    </header>
                                    <footer class="pricing-footer">
                                        <a href="#" class="btn btn-primary">ORDER NOW</a>
                                    </footer>
                                </li>
                                <!-- Pricing Table #4 Ends -->
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Ends -->

@endsection
