<?php
/**
 * created by: tushar Khan
 * email : tushar.khan0122@gmail.com
 * date : 3/15/2023
 */
?>

@extends('front.layout.app')

@section('frontContent')

    <!-- Banner Area Starts -->
    @include('front.layout.banner', ['text' => 'About Us', 'pageName' => 'About', 'image' => 'frontAsset/images/backgrounds/bg-banner.jpg'])
    <!-- Banner Area Starts -->

    <!-- About Section Starts -->
    <section class="about-page">
        <div class="container">
            <!-- Section Content Starts -->
            <div class="row about-content">
                <!-- Image Starts -->
                <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                    <img class="img-responsive img-about-us" src="images/about-us.png" alt="about us">
                </div>
                <!-- Image Ends -->
                <!-- Content Starts -->
                <div class="col-sm-12 col-md-7 col-lg-6">
                    <div class="feature-about">
                        <h3 class="title-about">WE ARE BAYYA</h3>
                        <p>A place for everyone who wants to simply buy and sell Bitcoins. Deposit funds using your Visa/MasterCard or bank transfer. Instant buy/sell of Bitcoins at fair price is guaranteed. Nothing extra. Join over 700,000 users from all over the world satisfied with our services.</p>
                    </div>
                    <div class="feature-about">
                        <h3 class="title-about risk-title"><i class="fa fa-warning"></i> risk warning</h3>
                        <p>Bitcoin is not legal tender and is not backed by any government. Accounts and value balances are not subject to any government backed deposit insurance or any other government protections.</p>
                    </div>
                    <a class="btn btn-primary btn-services" href="services.html">Our services</a>
                </div>
                <!-- Content Ends -->

            </div>
            <!-- Section Content Ends -->
        </div><!--/ Content row end -->
    </section>
    <!-- About Section Ends -->

    <!-- Facts Section Starts -->
    <section class="facts">
        <!-- Container Starts -->
        <div class="container">
            <!-- Fact Badges Starts -->
            <div class="row text-center facts-content">
                <div class="text-center heading-facts">
                    <h2>Bayya<span> numbers</span></h2>
                    <p>leading cryptocurrency exchange since day one of Bitcoin distribution</p>
                </div>
                <!-- Fact Badge Item Starts -->
                <div class="col-xs-12 col-md-3 col-sm-6 fact">
                    <h3>$77.45B</h3>
                    <h4>market cap</h4>
                </div>
                <!-- Fact Badge Item Ends -->
                <!-- Fact Badge Item Starts -->
                <div class="col-xs-12 col-md-3 col-sm-6 fact fact-clear">
                    <h3>165k</h3>
                    <h4>daily transactions</h4>
                </div>
                <!-- Fact Badge Item Ends -->
                <!-- Fact Badge Item Starts -->
                <div class="col-xs-12 col-md-3 col-sm-6 fact">
                    <h3>1726</h3>
                    <h4>active accounts</h4>
                </div>
                <!-- Fact Badge Item Ends -->
                <!-- Fact Badge Item Starts -->
                <div class="col-xs-12 col-md-3 col-sm-6">
                    <h3>17</h3>
                    <h4>years on the market</h4>
                </div>
                <!-- Fact Badge Item Ends -->
                <div class="col-xs-12 buttons">
                    <a class="btn btn-primary btn-pricing" href="register.html">See pricing</a>
                    <span class="or"> or </span>
                    <a class="btn btn-primary btn-register" href="register.html">Register Now</a>
                </div>
            </div>
            <!-- Fact Badges Ends -->
        </div>
        <!-- Container Ends -->
    </section>
    <!-- facts Section Ends -->

    <!-- Team Section Starts -->
    <section class="team">
        <div class="container">
            <!-- Section Title Starts -->
            <div class="row text-center">
                <h2 class="title-head">our <span>experts</span></h2>
                <div class="title-head-subtitle">
                    <p> A talented team of Cryptocurrency experts based in London</p>
                </div>
            </div>
            <!-- Section Title Ends -->
            <!-- Team Members Starts -->
            <div class="row team-content team-members">
                <!-- Team Member Starts -->
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="team-member">
                        <!-- Team Member Picture Starts -->
                        <img src="images/team/member1.jpg" class="img-responsive" alt="team member">
                        <!-- Team Member Picture Ends -->
                        <!-- Team Member Details Starts -->
                        <div class="team-member-caption social-icons">
                            <h4>Maryana Mori</h4>
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
                        <!-- Team Member Details Starts -->
                    </div>
                </div>
                <!-- Team Member Ends -->
                <!-- Team Member Starts -->
                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                    <div class="team-member">
                        <!-- Team Member Picture Starts -->
                        <img src="images/team/member2.jpg" class="img-responsive" alt="team member">
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
                        <img src="images/team/member3.jpg" class="img-responsive" alt="team member">
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
                        <img src="images/team/member4.jpg" class="img-responsive" alt="team member">
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

@endsection
