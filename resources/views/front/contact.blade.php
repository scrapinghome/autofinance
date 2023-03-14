<?php
/**
 * created by: tushar Khan
 * email : tushar.khan0122@gmail.com
 * date : 3/15/2023
 */
?>

@extends('front.layout.app')

@section('frontContent')

    @include('front.layout.banner', ['text' => 'Contact Us', 'pageName' => 'Contact Us', 'image' => 'frontAsset/images/backgrounds/bg-banner.jpg'])

    <!-- Contact Section Starts -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 contact-form">
                    <h3 class="col-xs-12">feel free to drop us a message</h3>
                    <p class="col-xs-12">Need to speak to us? Do you have any queries or suggestions? Please contact us about all enquiries including membership and volunteer work using the form below.</p>
                    <!-- Contact Form Starts -->
                    <form class="form-contact" method="post" action="php/process-form.php">
                        <!-- Input Field Starts -->
                        <div class="form-group col-md-6">
                            <input class="form-control" name="firstname" id="firstname" placeholder="FIRST NAME" type="text" required>
                        </div>
                        <!-- Input Field Ends -->
                        <!-- Input Field Starts -->
                        <div class="form-group col-md-6">
                            <input class="form-control" name="lastname" id="lastname" placeholder="LAST NAME" type="text" required>
                        </div>
                        <!-- Input Field Ends -->
                        <!-- Input Field Starts -->
                        <div class="form-group col-md-6">
                            <input class="form-control" name="email" id="email" placeholder="EMAIL" type="email" required>
                        </div>
                        <!-- Input Field Ends -->
                        <!-- Input Field Starts -->
                        <div class="form-group col-md-6">
                            <input class="form-control" name="text" id="subject" placeholder="SUBJECT" type="text" required>
                        </div>
                        <!-- Input Field Ends -->
                        <!-- Input Field Starts -->
                        <div class="form-group col-xs-12">
                            <textarea class="form-control" id="message" name="message" placeholder="MESSAGE" required></textarea>
                        </div>
                        <!-- Input Field Ends -->
                        <!-- Submit Form Button Starts -->
                        <div class="form-group col-xs-12 col-sm-4">
                            <button class="btn btn-primary btn-contact" type="submit">send message</button>
                        </div>
                        <!-- Submit Form Button Ends -->
                        <!-- Form Submit Message Starts -->
                        <div class="col-xs-12 text-center output_message_holder d-none">
                            <p class="output_message"></p>
                        </div>
                        <!-- Form Submit Message Ends -->
                    </form>
                    <!-- Contact Form Ends -->
                </div>
                <!-- Contact Widget Starts -->
                <div class="col-xs-12 col-md-4">
                    <div class="widget">
                        <div class="contact-page-info">
                            <!-- Contact Info Box Starts -->
                            <div class="contact-info-box">
                                <i class="fa fa-home big-icon"></i>
                                <div class="contact-info-box-content">
                                    <h4>Address</h4>
                                    <p>123 Disney Street Slim Av. Brooklyn Bridge, NY, New York</p>
                                </div>
                            </div>
                            <!-- Contact Info Box Ends -->
                            <!-- Contact Info Box Starts -->
                            <div class="contact-info-box">
                                <i class="fa fa-phone big-icon"></i>
                                <div class="contact-info-box-content">
                                    <h4>Phone Numbers</h4>
                                    <p>+88 0123 4567 890<br>+88 0231 3421 453</p>
                                </div>
                            </div>
                            <!-- Contact Info Box Ends -->
                            <!-- Contact Info Box Starts -->
                            <div class="contact-info-box">
                                <i class="fa fa-envelope big-icon"></i>
                                <div class="contact-info-box-content">
                                    <h4>Email Addresses</h4>

                                    <p>contact@example.com<br>info@example.com</p>
                                </div>
                            </div>
                            <!-- Contact Info Box Ends -->
                            <!-- Social Media Icons Starts -->
                            <div class="contact-info-box">
                                <i class="fa fa-share-alt big-icon"></i>
                                <div class="contact-info-box-content">
                                    <h4>Social Profiles</h4>
                                    <div class="social-contact">
                                        <ul>
                                            <li class="facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li class="google-plus"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Social Media Icons Starts -->
                        </div>
                    </div>
                </div>
                <!-- Contact Widget Ends -->
            </div>
        </div>
    </section>
    <!-- Contact Section Ends -->

@endsection
