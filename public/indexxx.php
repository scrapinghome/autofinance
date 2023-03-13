<?php if (Auth::guest()){ ?>

 @include('demo')

<?php }else{ ?>

@extends('layout-user.mainlayout')
@section('content')
<div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    @include('layout.partials.user-home-nav')
                    <div class="tab-content custom-menu-content">
                        <!--div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="index.php">Dashboard</a>
                                </li>
                                <li><a href="index-2.html">Dashboard Two</a>
                                </li>
                                <li><a href="index-3.html">Dashboard Three</a>
                                </li>
                                <li><a href="index-4.html">Dashboard Four</a>
                                </li>
                                <li><a href="analytics.html">Analytics</a>
                                </li>
                                <li><a href="widgets.html">Widgets</a>
                                </li>
                            </ul>
                        </div-->
                        <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="inbox.html">Inbox</a>
                                </li>
                                <li><a href="view-email.html">View Email</a>
                                </li>
                                <li><a href="compose-email.html">Compose Email</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="animations.html">Animations</a>
                                </li>
                                <li><a href="google-map.html">Google Map</a>
                                </li>
                                <li><a href="data-map.html">Data Maps</a>
                                </li>
                                <li><a href="code-editor.html">Code Editor</a>
                                </li>
                                <li><a href="image-cropper.html">Images Cropper</a>
                                </li>
                                <li><a href="wizard.html">Wizard</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="flot-charts.html">Flot Charts</a>
                                </li>
                                <li><a href="bar-charts.html">Bar Charts</a>
                                </li>
                                <li><a href="line-charts.html">Line Charts</a>
                                </li>
                                <li><a href="area-charts.html">Area Charts</a>
                                </li>
                            </ul>
                        </div>
                        <!--div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="normal-table.html">Normal Table</a>
                                </li>
                                <li><a href="extraction_history.php">Extraction History</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="zillow-request.php">Zillow Data extraction</a>
                                </li>
                                <li><a href="form-components.html">Form Components</a>
                                </li>
                                <li><a href="form-examples.html">Form Examples</a>
                                </li>
                            </ul>
                        </div-->
                        <div id="Appviews" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="notification.html">Notifications</a>
                                </li>
                                <li><a href="alert.html">Alerts</a>
                                </li>
                                <li><a href="modals.html">Modals</a>
                                </li>
                                <li><a href="buttons.html">Buttons</a>
                                </li>
                                <li><a href="tabs.html">Tabs</a>
                                </li>
                                <li><a href="accordion.html">Accordion</a>
                                </li>
                                <li><a href="dialog.html">Dialogs</a>
                                </li>
                                <li><a href="popovers.html">Popovers</a>
                                </li>
                                <li><a href="tooltips.html">Tooltips</a>
                                </li>
                                <li><a href="dropdown.html">Dropdowns</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="contact.html">Contact</a>
                                </li>
                                <li><a href="invoice.html">Invoice</a>
                                </li>
                                <li><a href="typography.html">Typography</a>
                                </li>
                                <li><a href="color.html">Color</a>
                                </li>
                                <li><a href="login-register.html">Login Register</a>
                                </li>
                                <li><a href="404.html">404 Page</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-house"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Scraping Home Cloud Data Extraction Portal</h2>
										<p>Welcome to Scraping Home</span></p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">20</span></h2>
                            <p>Total Extraction Jobs</p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2>15</h2>
                            <p>Completed Extraction Jobs</p>
                        </div>
                        <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2>5</span></h2>
                            <p>Pending Extraction jobs</p>
                        </div>
                        <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">1600</span></h2>
                            <p>Monthly total extracted records</p>
                        </div>
                        <div class="sparkline-bar-stats4">2,4,8,4,5,7,4,7,3,5,7,5</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Status area-->
    <!-- Start Email Statistic area-->
    <div class="notika-email-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="recent-signup-inner notika-shadow mg-t-30">
                        <div class="realtime-ctn">
                            <div class="realtime-title widget-inner-wp signup-hd-wd">
                                <h2>Custom Data Scraping Solution</h2>
                                <p>Scrape data from any website</p>
                            </div>
                        </div>
                        <div class="widget-signup-list">
                            <a class="signup-wd-mn" data-toggle="tooltip" data-placement="top" title="John Deo" href="#"><img src="{{ asset('public/loginassets/img/post/1.jpg')}}" alt="" /></a>
                            <a class="signup-wd-mn" data-toggle="tooltip" data-placement="top" title="Anisha" href="#">A</a>
                            <a class="signup-wd-mn" data-toggle="tooltip" data-placement="top" title="Weldro" href="#">W</a>
                            <a class="signup-wd-mn" data-toggle="tooltip" data-placement="top" title="Smith" href="#"><img src="{{ asset('public/loginassets/img/post/2.jpg')}}" alt="" /></a>
                            <a class="signup-wd-mn" data-toggle="tooltip" data-placement="top" title="Payel" href="#">P</a>
                            <a class="signup-wd-mn" data-toggle="tooltip" data-placement="top" title="Salim Sha" href="#">S</a>
                            <a data-toggle="tooltip" data-placement="top" title="John Deo" href="#"><img src="{{ asset('public/loginassets/img/post/1.jpg')}}" alt="" /></a>
                            <a data-toggle="tooltip" data-placement="top" title="Malika" href="#"><img src="{{ asset('public/loginassets/img/post/4.jpg')}}" alt="" /></a>
                            <a data-toggle="tooltip" data-placement="top" title="Elisha" href="#">E</a>
                            <a data-toggle="tooltip" data-placement="top" title="Bakis" href="#">B</a>
                            <a data-toggle="tooltip" data-placement="top" title="Smith" href="#"><img src="{{ asset('public/loginassets/img/post/2.jpg')}}" alt="" /></a>
                            <a data-toggle="tooltip" data-placement="top" title="Camerun" href="#">C</a>
                            <a data-toggle="tooltip" data-placement="top" title="Helina" href="#">H</a>
                            <a data-toggle="tooltip" data-placement="top" title="John Deo" href="#"><img src="{{ asset('public/loginassets/img/post/1.jpg')}}" alt="" /></a>
                            <a data-toggle="tooltip" data-placement="top" title="Konika" href="#">K</a>
                            <a data-toggle="tooltip" data-placement="top" title="Smith" href="#"><img src="{{ asset('public/loginassets/img/post/2.jpg')}}" alt="" /></a>
                            <a data-toggle="tooltip" data-placement="top" title="Conika" href="#">C</a>
                            <a data-toggle="tooltip" data-placement="top" title="Onita" href="#">O</a>
                            <a data-toggle="tooltip" data-placement="top" title="John Deo" href="#"><img src="{{ asset('public/loginassets/img/post/1.jpg')}}" alt="" /></a>
                            <a data-toggle="tooltip" data-placement="top" title="Unity" href="#">U</a>
                            <a data-toggle="tooltip" data-placement="top" title="John Deo" href="#"><img src="{{ asset('public/loginassets/img/post/1.jpg')}}" alt="" /></a>
                            <a data-toggle="tooltip" data-placement="top" title="Gorila" href="#">G</a>
                            <a data-toggle="tooltip" data-placement="top" title="Smith" href="#"><img src="{{ asset('public/loginassets/img/post/2.jpg')}}" alt="" /></a>
                            <a data-toggle="tooltip" data-placement="top" title="Fahima" href="#">F</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="ongoing-task-inner notika-shadow mg-t-30">
                        <div class="realtime-ctn">
                            <div class="realtime-title ongoing-hd-wd">
                                <a href="zillow-request.php"><h2> Zillow Data Extraction</h2></a>
                                <p>Create zillow extraction job</p>
                            </div>
                        </div>
                        <div class="skill-content-3 ongoing-tsk">
                            <div class="skill">
                                <div class="progress">
                                    <div class="lead-content">
                                        <p>Copy the URL of the target Zillow page</p>
                                    </div>
                                    <div class="progress-bar wow fadeInLeft" data-progress="100%" style="width: 100%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="lead-content">
                                        <p>Paste the URL into Cloud Zillow extraction portal</p>
                                    </div>
                                    <div class="progress-bar wow fadeInLeft" data-progress="100%" style="width: 100%;" data-wow-duration="1.5s" data-wow-delay="1.2s"></div>
                                </div>
                                <div class="progress">
                                    <div class="lead-content">
                                        <p>Our cloud team will run your job</p>
                                    </div>
                                    <div class="progress-bar wow fadeInLeft" data-progress="100%" style="width: 100%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> </div>
                                </div>
                                <div class="progress">
                                    <div class="lead-content">
                                        <p>Data will be posted on your account dashboard</p>
                                    </div>
                                    <div class="progress-bar wow fadeInLeft" data-progress="100%" style="width: 100%;" data-wow-duration="1.5s" data-wow-delay="1.2s"></div>
                                </div>
                                <div class="progress progress-bt">
                                    <div class="lead-content">
                                        <p>Download your data in Excel Sheets</p>
                                    </div>
                                    <div class="progress-bar wow fadeInLeft" data-progress="100%" style="width: 100%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="ongoing-task-inner notika-shadow mg-t-30">
                        <div class="realtime-ctn">
                            <div class="realtime-title ongoing-hd-wd">
                                <a href="zillow-request.php"><h2> Craigslist Data Extraction</h2></a>
                                <p>Create Craigslist extraction job</p>
                            </div>
                        </div>
                        <div class="skill-content-3 ongoing-tsk">
                            <div class="skill">
                                <div class="progress">
                                    <div class="lead-content">
                                        <p>Copy the URL of the target Craigslist page</p>
                                    </div>
                                    <div class="progress-bar wow fadeInLeft" data-progress="100%" style="width: 100%;" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="lead-content">
                                        <p>Paste the URL into Cloud Craigslist extraction portal</p>
                                    </div>
                                    <div class="progress-bar wow fadeInLeft" data-progress="100%" style="width: 100%;" data-wow-duration="1.5s" data-wow-delay="1.2s"></div>
                                </div>
                                <div class="progress">
                                    <div class="lead-content">
                                        <p>Our cloud team will run your job</p>
                                    </div>
                                    <div class="progress-bar wow fadeInLeft" data-progress="100%" style="width: 100%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> </div>
                                </div>
                                <div class="progress">
                                    <div class="lead-content">
                                        <p>Data will be posted on your account dashboard</p>
                                    </div>
                                    <div class="progress-bar wow fadeInLeft" data-progress="100%" style="width: 100%;" data-wow-duration="1.5s" data-wow-delay="1.2s"></div>
                                </div>
                                <div class="progress progress-bt">
                                    <div class="lead-content">
                                        <p>Download your data in Excel Sheets</p>
                                    </div>
                                    <div class="progress-bar wow fadeInLeft" data-progress="100%" style="width: 100%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!--div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="blog-inner-list notika-shadow mg-t-30 tb-res-ds-n dk-res-ds">
                        <div class="blog-img">
                            <img src="img/blog/1.jpg" alt="" />
                        </div>
                        <div class="blog-ctn">
                            <div class="blog-hd-sw">
								<h2> The best viral website ideas!</h2>
								<a class="bg-au" href="#">By Malinda on 9th June 2018</a>
							</div>
                            <p>Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                            <a class="vw-at" href="#">View Article...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <-- End Email Statistic area-->

    <div class="contact-info-area mg-t-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-inner">
                        <div class="contact-hd widget-ctn-hd">
                            <h2>Contact Information</h2>
                            <p>If you need any assistance, feel free to contact us.</p>
                        </div>
                        <div class="contact-dt">
                            <ul class="contact-list widget-contact-list">
                                <li><i class="notika-icon notika-phone"></i> +1 (513) 453-6260</li>
                                <li><i class="notika-icon notika-mail"></i> service@scrapinghome.com</li>
                                <li><i class="notika-icon notika-facebook"></i> facebook</li>
                                <!--li><i class="notika-icon notika-twitter"></i> @lucid twitter</li-->
                                <li><i class="notika-icon notika-map"></i>San jose, CA</li>
                            </ul>
                        </div>
                        <div class="contact-map widget-contact-map">
                            <div id="map6"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-form sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
                        <div class="contact-hd sm-form-hd">
                            <h2>Message us</h2>
                            <p>Send message to our Data Extraction team.</p>
                        </div>
                        <div class="contact-form-int">
                            <div class="form-group">
                                <div class="form-single nk-int-st widget-form">
                                    <input type="text" class="form-control" placeholder="First Name" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-single nk-int-st widget-form">
                                    <input type="text" class="form-control" placeholder="Last Name" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-single nk-int-st widget-form">
                                    <input type="email" class="form-control" placeholder="Email Address" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-single nk-int-st widget-form">
                                    <input type="number" class="form-control" placeholder="Contact Number" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-single nk-int-st widget-form">
                                    <textarea name="message" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="contact-btn">
                                <button class="button btn">Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="widget-tabs-int sm-res-mg-t-30 tb-res-mg-t-30 tb-res-ds-n dk-res-ds">
                        <div class="contact-hd tm-activity">
                            <h2>Billing & Subscription</h2>
                            <p>Please contact us for discounted prcing on bulk data</p>
                        </div>
                        <div class="widget-tabs-list">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Basic</a></li>
                                <li><a data-toggle="tab" href="#menu1">Professonal</a></li>
                                <li><a data-toggle="tab" href="#menu2">Enterprise</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <div class="tab-wd-img">
                                        <img src="{{ asset('public/loginassets/img/widgets/6.png')}}" alt="" />
                                    </div>
                                    <div class="tab-ctn">
                                        <p>Basic plan for zillow leads.</p>
                                        <ul class="tab-ctn-list">
											<li><i class="notika-icon notika-next"></i><strong> $49/month</strong></li>
                                            <li><i class="notika-icon notika-next"></i><strong> 7000 Zillow Records</strong></li>
                                            <!--li><i class="notika-icon notika-next"></i> Maecenas sit amet urna cry int.</li-->
                                        </ul>
                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <div class="tab-wd-img">
                                        <img src="{{ asset('public/loginassets/img/widgets/2.png')}}" alt="" />
                                    </div>
                                    <div class="tab-ctn">
                                        <p>Professional plan for both Craigslist and Zillow leads.</p>
                                        <ul class="tab-ctn-list">
                                            <li><i class="notika-icon notika-next"></i><strong> $89/month</strong></li>
                                            <li><i class="notika-icon notika-next"></i> <strong>7000 Zillow Records</strong></li>
                                            <li><i class="notika-icon notika-next"></i><strong> 3000 Craigslist Records</strong></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <div class="tab-wd-img">
                                        <img src="{{ asset('public/loginassets/img/widgets/4.png')}}" alt="" />
                                    </div>
                                    <div class="tab-ctn">
                                        <p>Get discount for higher volumes or if you Want data from any other website or any custom scrping bot. Contact our support team to get started</p>
                                        <ul class="tab-ctn-list">
											<li><i class="notika-icon notika-next"></i><strong>Buy more and get discount</strong></li>
                                            <li><i class="notika-icon notika-next"></i><strong>Get data in your desired Custom format</strong></li>
                                            <li><i class="notika-icon notika-next"></i><strong>Process batch jobs</strong></li>
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
@endsection
<?php } ?>
