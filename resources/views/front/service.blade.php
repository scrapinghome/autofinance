<?php
/**
 * created by: tushar Khan
 * email : tushar.khan0122@gmail.com
 * date : 3/15/2023
 */
?>

@extends('front.layout.app')

@section('frontContent')

    @include('front.layout.banner', ['text' => 'Our Services', 'pageName' => 'Services', 'image' => asset('frontAsset/images/backgrounds/bg-banner.jpg')])

    <!-- Section Services Starts -->
    <section class="services">
        <div class="container">
            <div class="row">
                <!-- Service Box Starts -->
                <div class="col-md-6 service-box">
                    <div>
                        <img src="images/icons/orange/download-bitcoin.png" alt="download bitcoin">
                        <div class="service-box-content">
                            <h3>Bitcoin Escrow Service</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>
                </div>
                <!-- Service Box Ends -->
                <!-- Service Box Starts -->
                <div class="col-md-6 service-box">
                    <div>
                        <img src="images/icons/orange/add-bitcoins.png" alt="add bitcoins">
                        <div class="service-box-content">
                            <h3>Bitcoin Mining</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>
                </div>
                <!-- Service Box Ends -->
                <!-- Service Box Starts -->
                <div class="col-md-6 service-box">
                    <div>
                        <img src="images/icons/orange/buy-sell-bitcoins.png" alt="buy and sell bitcoins">
                        <div class="service-box-content">
                            <h3>Software Development</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>
                </div>
                <!-- Service Box Ends -->
                <!-- Service Box Starts -->
                <div class="col-md-6 service-box">
                    <div>
                        <img src="images/icons/orange/strong-security.png" alt="strong security"/>
                        <div class="service-box-content">
                            <h3>Bitcoin Transaction</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>
                </div>
                <!-- Service Box Ends -->
                <!-- Service Box Starts -->
                <div class="col-md-6 service-box">
                    <div>
                        <img src="images/icons/orange/world-coverage.png" alt="world coverage"/>
                        <div class="service-box-content">
                            <h3>Bitcoin Exchange</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>
                </div>
                <!-- Service Box Ends -->
                <!-- Service Box Starts -->
                <div class="col-md-6 service-box">
                    <div>
                        <img src="images/icons/orange/payment-options.png" alt="payment options"/>
                        <div class="service-box-content">
                            <h3>Bitcoin Investment</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                    </div>
                </div>
                <!-- Service Box Ends -->

            </div>
        </div>
    </section>
    <!-- Section Services Ends -->

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
                        <!-- Call To Action Text Ends -->
                        <!-- Call To Action Button Starts -->
                        <p class="action-btn"><a class="btn btn-primary" href="register.html">Register Now</a></p>
                        <!-- Call To Action Button Ends -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section Ends -->

@endsection
