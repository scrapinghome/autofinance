<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Coming Soon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontAsset/images/favicon.png') }}">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900|Open+Sans:400,600');

        html {
            overflow-x: hidden !important;
            width: 100%;
            height: 100%;
            position: relative;
            -webkit-font-smoothing: antialiased;
        }

        body {
            border: 0;
            margin: 0;
            padding: 0;
            background: #111;
        }

        .wrapper {
            position: relative;
            overflow: hidden;
        }

        a:link,
        a:hover,
        a:visited {
            text-decoration: none;
        }

        section {
            padding: 60px 0;
            position: relative;
        }

        .bg-parallax {
            background-size: cover;
            background-attachment: fixed;
        }

        .overflow-hidden {
            overflow:hidden;
        }

        .gap-20 {
            clear: both;
            height: 20px;
        }

        a:focus {
            outline: 0;
        }

        .unstyled {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .ts-padding {
            padding: 50px;
        }

        .btn-primary {
            border: 0;
            border-radius: 0;
            padding: 12px 30px;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            transition: .1s;
            outline: 0;
            box-shadow: none;
            font-family: 'Open Sans', sans-serif;
        }

        .btn-primary:hover {
            color: #fff;
        }

        .btn-primary:hover, .btn-primary:focus, .btn-primary:active {
            box-shadow: none;
            outline: 0;
        }

        .form-control {
            box-shadow: none;
            border: 1px solid #333;
            padding: 0px 0px 4px 20px;
            height: 46px;
            color: #fff;
            background: #222;
            font-size: 14px;
            border-radius: 0;
            outline: 0;
            transition: .1s;
        }

        .form-control:focus {
            box-shadow: none;
            outline: none;
            border: 1px solid #555;
        }

        .form-control::-webkit-input-placeholder {
            font-size: 12px;
            color: #666;
        }  /* WebKit, Blink, Edge */
        .form-control:-moz-placeholder {
            font-size: 12px;
            color: #666;
        }  /* Mozilla Firefox 4 to 18 */
        .form-control::-moz-placeholder {
            font-size: 12px;
            color: #666;
        }  /* Mozilla Firefox 19+ */
        .form-control:-ms-input-placeholder {
            font-size: 12px;
            color: #666;
        }  /* Internet Explorer 10-11 */
        .form-control::-ms-input-placeholder {
            font-size: 12px;
            color: #666;
        }  /* Microsoft Edge */
        hr {
            background-color: #e7e7e7;
            border: 0;
            height: 1px;
            margin: 40px 0;
        }

        .title-head {
            margin: 0;
            font-weight: 800;
            font-size: 45px;
            line-height: 45px;
            margin-top: 0;
            color: #fff;
            padding: 10px 0 20px;
            position: relative;
            text-transform: uppercase;
            margin: 0 15px;
        }

        .title-head-subtitle p {
            position: relative;
            display: inline-block;
            text-transform: uppercase;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .title-head-subtitle p:before {
            position: absolute;
            content: "";
            height: 2px;
            right: -50px;
            top: 13px;
            width: 30px;
        }

        .title-head-subtitle p:after {
            position: absolute;
            content: "";
            height: 2px;
            left: -50px;
            top: 13px;
            width: 30px;
        }

        .terms-of-services h3 {
            color: #fff;
        }

        /*** Typography ***/

        body, p {
            -webkit-font-smoothing: antialiased !important;
            color: #999;
            line-height: 28px;
            font-weight: 400;
            font-size: 16px;
            font-family: 'Lato', sans-serif;
        }

        h1, h2, h3, h4 {
            color: #222;
            font-weight: 600;
        }

        h1 {
            font-size: 36px;
            line-height: 48px;
        }

        h2 {
            font-size: 28px;
            line-height: 36px;
        }

        h3 {
            font-size: 24px;
            line-height: 32px;
        }

        h4 {
            font-size: 18px;
            line-height: 28px;
        }

        h5 {
            font-size: 14px;
            line-height: 24px;
        }

        /*** Boxed Body ***/

        body.boxed {
            background: url('../images/bg.png');
            background-attachment: fixed;
        }

        body.boxed .wrapper {
            background: #111;
            margin: 0 auto;
            max-width: 1188px;
            box-shadow: 0 0 27px #999;
        }

        body.boxed .site-navigation.fixed ul.navbar-nav {
            max-width: 1188px;
            margin: 0 auto;
            right: 0;
        }

        body.boxed .site-navigation.fixed {
            max-width: 1188px;
        }

        /*** Light Body ***/

        body.light .wrapper,
        body.light #preloader,
        body.light .header,
        body.light .bitcoin-calculator .form-input,
        body.light .footer,
        body.light.auth-page,
        body.light .user-auth > div:nth-child(2) {
            background: #fff;
        }


        body.light, body.light p,
        body.light ul.bitcoin-stats span,
        body.light .feature-box .feature-box-content p,
        body.light ul.nav.nav-tabs li a {
            color: #777;
        }

        body.light ul.bitcoin-stats h6,
        body.light .pricing-header h2,
        body.light  .pricing-header h2 span,
        body.light .footer .top-footer .menu ul li a,
        body.light .footer .top-footer h4.payment-title,
        body.light .footer .bottom-footer p,
        body.light .footer .social-footer ul li a,
        body.light .top-footer .contacts > div,
        body.light .terms-of-services h3 {
            color: #555;
        }

        body.light ul.user li.sign-in a.btn-primary:hover,
        body.light ul.user li.sign-in a.btn-primary:focus,
        body.light ul.user li.sign-in a.btn-primary:active,
        body.light .pricing-switcher label,
        body.light .team-member:hover .team-member-caption h4,
        body.light blockquote p{
            color: #fff;
        }

        body.light .site-nav-inner,
        body.light .site-navigation.fixed ul.navbar-nav,
        body.light .features-row,
        body.light .image-block,
        body.light .team-member-caption,
        body.light .image-block2,
        body.light .pricing-wrapper > li,
        body.light .bitcoin-calculator-section .container,
        body.light .facts .container,
        body.light .shop-cart table.order thead tr,
        body.light .shop-cart .qty,
        body.light .shop-cart input.qtyplus,
        body.light .shop-cart input.qtyminus,
        body.light .shop-cart .quantity,
        body.light .shop-checkout .checkout table.products thead tr,
        body.light .shop-checkout .checkout table.products th.with-bg,
        body.light .shop-checkout .checkout .payment .cheque, body.light  .shop-checkout .checkout .payment .paypal {
            background: #e7e7e7;
        }

        body.light .site-navigation,
        body.light .site-navigation.fixed ul.navbar-nav {
            border-bottom: 1px solid #ddd;
        }

        body.light ul.navbar-nav > li:not(.active) > a,
        body.light .navbar-nav .fa-search,
        body.light ul.navbar-nav > li a,
        body.light .feature-box .feature-box-content h3,
        body.light .title-head,
        body.light .feature-title,
        body.light .price,
        body.light .bitcoin-calculator .form-input,
        body.light .bitcoin-calculator .form-equal,
        body.light .team-member .team-member-caption h4,
        body.light .latest-post .post-title a,
        body.light .title-about,
        body.light .contact-form h3,
        body.light .footer .bottom-footer p a,
        body.light.error-page .error h3,
        body.light.blog article h4 ,
        body.light .sidebar .widget-title,
        body.light .widget.recent-posts .entry-title a,
        body.light.blog .comments-heading,
        body.light .service-box h3,
        body.light .facts .facts-content .heading-facts h2, body.light .facts h3,
        body.light .pricing h3,
        body.light .banner-area .breadcrumb>li,
        body.light  .banner-area .breadcrumb>li+li:before ,
        body.light  .shop-cart .table thead > tr > th,
        body.light  .shop-cart .table h6,
        body.light  .shop-cart .table .icon-delete-product,
        body.light  .shop-checkout h3,
        body.light  .shop-checkout .checkout table.products td.text-price,
        body.light  .facts .facts-content .heading-facts h2  {
            color: #333;
        }

        body.light ul.nav.nav-tabs li a, body.light  ul.nav.nav-tabs li.active a {
            border-left: 1px solid #ccc;
        }
        body.light .widget ul.nav.nav-tabs li a, body.light .widget  ul.nav.nav-tabs li.active a, body.light ul.nav.nav-tabs li:first-child a {
            border-left:0;
        }

        body.light .bitcoin-calculator .form-input {
            border: 1px solid #ccc;
        }

        body.light .dropdown-menu {
            background: #fff;
            border: 1px solid rgba(0,0,0,.1);
        }

        body.light .dropdown-menu li a:hover, body.light .dropdown-menu li.active a:hover, body.light .dropdown-menu li.active a,body.light .widget,
        body.light.blog .comments-list .comment,
        body.light .service-box > div {
            background: #f2f2f2;
        }

        body.light .pricing-switcher > p {
            background: #333;
            border: 1px solid #333;
        }

        body.light .bitcoin-calculator-section p.info {
            color: rgba(0,0,0,.3);
        }

        body.light .btcwdgt-headlines.btcwdgt-clean {
            border: 1px solid #ddd !important;
        }

        body.light .footer hr {
            background: #ccc;
        }

        body.light .footer .bottom-footer p {
            border-top: 1px solid #ddd;
        }

        body.light .footer .menu ul li a:hover, body.light .footer .social-footer ul li a:hover {
            color: #222;
        }

        body.light .footer .top-footer .social-footer ul li a {
            background: rgba(0,0,0,.1);
        }

        body.light .footer .bottom-footer p a:hover {
            color: #111;
        }

        body.light .facts-footer > div span {
            font-weight: 600;
        }

        body.light .form-control {
            border: 1px solid #ddd;
            background: #f2f2f2;
            color: #555;
        }

        body.light .form-control:focus {
            border: 1px solid #aaa;
        }

        body.light.error-page .error > div {
            background: rgba(255,255,255,.9);
        }

        body.light.error-page .error p {
            color: #777;
        }

        body.light .back-to-top {
            background: #ccc;
            color: #777;
        }

        body.light .back-to-top:hover {
            background: #ccc;
            color: #333;
        }

        body.light.blog .meta {
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
        }


        body.light .sidebar ul.nav-tabs li, body.light .widget.recent-posts ul li {
            border-bottom: 1px solid #ddd;
        }

        body.light .widget.recent-posts ul li:last-child {
            border: 0;
            padding-bottom: 0;
            margin-bottom: 0;
        }

        body.light.blog .pagination li a {
            color: #777;
            border: 1px solid #ddd;
        }

        body.light.blog  .pagination li:not(.active) a:hover {
            background: #ddd;
        }

        body.light.error-page .error .big-404,
        body.light .facts-footer > div span,
        body.light.blog .comments-list .comment-author,
        body.light h4.panel-title a.collapsed,
        body.light .contact-page-info .contact-info-box-content h4 {
            color: #555;
        }

        body.light .action-text p {
            color: #ddd;
        }

        body.light .panel.panel-default {
            border-color: #ddd;
        }

        body.light .panel-default>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #ddd;
        }

        body.light .banner-area:after, body.light  .banner-area:before,
        body.light .call-action-all:after,body.light  .call-action-all:before {
            border-bottom: 30px solid #fff;
        }


        body.light .facts h4,
        body.light .facts span.or {
            color: #777;
        }

        body.light .facts .facts-content .fact:after {
            background: #aaa;
        }

        body.light .banner-area .banner-overlay {
            background-color: rgba(255, 255, 255, 0.5);
        }

        body.light .banner-area hr {
            border-top: 2px solid #333;
        }


        body.light .shop-cart .table tbody > tr,
        body.light .shop-cart .table.cart-total .section-border,
        body.light .shop-checkout .table tbody > tr {
            border-bottom: 1px solid #ddd;
        }

        /*** Preloader ***/

        #preloader {
            position: fixed;
            z-index: 1111111111111;
            top: 0;
            left: 0;
            display: block;
            width: 100%;
            height: 100%;
            background-color: #111;
        }

        #preloader-content {
            width: 200px;
            margin: 0 auto;
            display: block;
            text-align: center;
            top: 50%;
            position: absolute;
            left: 50%;
            -webkit-transform: translate(-50%, -50%) rotate(-13deg);
            -ms-transform: translate(-50%, -50%) rotate(-13deg);
            transform: translate(-50%, -50%) rotate(-13deg);
        }

        .path {
            stroke-dasharray: 2350;
            stroke-dashoffset: 910;
            stroke-width: 4;
            stroke-linecap: round;
            -webkit-animation: dash 3s linear infinite;
            animation: dash 3s linear infinite;
            fill-opacity: 0;
        }

        /* Back To Top */

        .back-to-top {
            position: fixed;
            right: -7.5%;
            bottom: 20px;
            height: 45px;
            width: 45px;
            line-height: 44px;
            font-size: 16px;
            opacity: 1;
            z-index: 1111;
            visibility: hidden;
            text-align: center;
            text-decoration: none;
            -webkit-transition: all 0.1s ease-in-out;
            transition: all 0.1s ease-in-out;
            background: #2d2d2d;
            color: #999;
        }

        .back-to-top:hover {
            color: #fff;
        }

        .show-back-to-top {
            display: block;
            right: 20px;
            visibility: visible;
        }

        /* [ HEADER ] */
        /*================================================== */

        .header {
            background: #1d1d1d;
        }

        /*** Logo ***/

        .main-logo {
            position: relative;
            padding-top: 25px;
            padding-bottom: 25px;
        }

        .logo-mobile {
            display: none;
        }

        /*** Bitcoin Statistics ***/

        ul.bitcoin-stats {
            padding-top: 28px;
        }

        ul.bitcoin-stats li {
            display: inline-block;
            padding-right: 25px;
        }

        ul.bitcoin-stats li:last-child {
            padding-right: 0;
        }

        ul.bitcoin-stats h6 {
            font-weight: 800;
            color: #eee;
            margin: 0;
            font-size: 13px;
            text-align: left;
            margin-bottom: -2px;
            line-height: 13px;
        }

        ul.bitcoin-stats span {
            font-size: 12px;
            text-align: left;
            color: #aaa;
        }

        .btcwdgt.btcwdgt-text-ticker.btcwdgt-s-price {
            margin-top: -3px !important;
            min-width: initial !important;
            box-shadow: none !important;
            margin: 0 !important;
            background-color: transparent !important;
        }

        .btcwdgt.btcwdgt-s-price .btcwdgt-body {
            padding: 0!important;
            margin-top: 0 !important;
            height: 14px !important;
            text-align: center !important;
        }

        @-moz-document url-prefix() {
            .btcwdgt.btcwdgt-s-price .btcwdgt-body {
                height: 15px !important;
            }
        }

        .btcwdgt.btcwdgt-s-price .btcwdgt-body span,
        .btcwdgt.btcwdgt-text-ticker .btcwdgt-footer,
        .btcwdgt.btcwdgt-text-ticker .btcwdgt-edge {
            display: none !important;
        }

        .btcwdgt.btcwdgt-s-price .btcwdgt-body ul {
            float: left !important;
        }

        .btcwdgt.btcwdgt-s-price .btcwdgt-body ul li {
            line-height: normal !important;
            font-size: 15px !important;
            font-weight: 600 !important;
        }

        .btcwdgt.btcwdgt-s-price .btcwdgt-body ul li:before {
            content: "$";
            position: relative;
            font-size: 12px;
            top: -1px;
        }

        ul.bitcoin-stats li .btcwdgt.btcwdgt .arrow,
        ul.bitcoin-stats li .btcwdgt.btcwdgt .arrow.up,
        ul.bitcoin-stats li .btcwdgt.btcwdgt .arrow.down {
            top: 10px !important;
            position: absolute !important;
            margin: -6px 0 0 -11px !important;
        }

        /*** User Buttons ***/

        ul.user {
            text-align: right;
            padding-top: 26px;
        }

        ul.user li {
            display: inline-block;
            padding-right: 25px;
        }

        ul.user li a {
            font-size: 13px;
        }

        ul.user li.sign-up {
            margin-right: 0;
            border-right: 0;
            padding-right: 0;
        }

        ul.user li.sign-up, ul.user li.sign-in {
            margin-right: 0;
        }

        ul.user li.sign-in {
            padding-right: 17px;
        }

        ul.user li.sign-in a:hover, ul.user li.sign-in a:active, ul.user li.sign-in a:focus {
            color: #fff;
        }

        ul.user li.sign-in a {
            background: transparent;
            padding: 11px 17px;
            transition: .1s;
        }

        /*** Main navigation ***/

        .site-navigation {
            position: relative;
            padding-bottom: 48px;
        }

        .site-navigation,
        .site-navigation.fixed ul.navbar-nav {
            border-bottom: 1px solid #222;
        }

        .site-navigation.fixed {
            z-index: 111111;
        }

        .site-nav-inner {
            position: absolute;
            z-index: 100;
            background: #111;
            text-align: center;
            width: 100%;
            left: 0;
            bottom: 0;
        }

        .navbar {
            border-radius: 0;
            border: 0;
            margin-bottom: 0;
        }

        .navbar-toggle {
            float: right;
            border-radius: 0;
            margin-right: 0;
        }

        .navbar-toggle .icon-bar {
            background: #fff;
        }

        .nav>li>a:focus,
        .nav>li>a:hover {
            background: none;
        }

        .nav-tabs>li>a {
            border: 0;
        }

        ul.navbar-nav {
            float: none;
            display: block;
        }

        .site-navigation.fixed ul.navbar-nav {
            position: fixed;
            top: 0;
            background: #111;
            width: 100%;
            left: 0;
        }

        ul.navbar-nav > li {
            float: none;
            display: inline-block;
        }

        ul.navbar-nav > li:not(.search):hover,
        ul.navbar-nav > li.active {
            color: #fff;
            position: relative;
        }

        ul.navbar-nav > li {
            padding: 0;
            position: relative;
        }

        ul.navbar-nav > li:last-child:after {
            background: none;
        }

        ul.navbar-nav > li > a {
            color: #fff;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            margin: 0;
            padding: 17px 16px;
            line-height: 14px;
            position: relative;
            font-family: 'Open Sans', sans-serif;
            transition: .1s;
        }

        ul.navbar-nav > li > a i {
            font-weight: 600;
            padding-left: 5px;
        }

        .nav .open>a, .nav .open>a:hover,
        .nav .open>a:focus {
            background: transparent;
            border: 0;
        }

        ul.navbar-nav > li:hover > a:after,
        ul.navbar-nav > li.active > a:after {
            position: absolute;
            content: '';
            left: 0;
            bottom: 0;
            width: 100%;
            height: 3px;
        }

        ul.nav.nav-tabs {
            border-bottom: 0;
        }

        ul.nav.nav-tabs li a, ul.nav.nav-tabs li.active a {
            border-top: 0;
            border-bottom: 0;
            border-right: 0;
            border-left: 1px solid #555;
            border-radius: 0;
            font-size: 15px;
            color: #aaa;
            padding: 0 30px;
            margin: 20px 0;
            text-transform: uppercase;
        }

        ul.nav.nav-tabs li.active a {
            font-weight: 600;
        }

        ul.nav.nav-tabs li:first-child a {
            border-left: 0;
            padding-left: 0;
        }

        ul.nav.nav-tabs li a:hover, ul.nav.nav-tabs li.active a:hover {
            border-bottom: 0 !important;
            border-top: 0 !important;
        }

        /*** Dropdown ***/

        .dropdown-menu {
            text-align: left;
            background: #1d1d1d;
            border-right: 1px solid rgba(255,255,255,.09);
            border-bottom: 1px solid rgba(255,255,255,.09);
            border-left: 1px solid rgba(255,255,255,.09);
            box-shadow: none;
            z-index: 100;
            min-width: 200px;
            border-radius: 0;
            padding: 0;
        }

        .navbar-nav>li .dropdown-menu li:last-child a {
            border-bottom: 0 !important;
        }

        .navbar-nav>li>.dropdown-menu a {
            background: none;
            text-transform: uppercase;
        }

        .dropdown-menu li a {
            display: block;
            font-size: 12px;
            font-weight: 600;
            line-height: normal;
            text-decoration: none;
            padding: 15px 20px;
            color: #999;
        }

        .dropdown-menu li a:hover, .dropdown-menu li.active a:hover, .dropdown-menu li.active a {
            background: #111;
        }

        .dropdown-menu li:last-child > a {
            border-bottom: 0;
        }

        /*** Search ***/

        .site-search {
            text-align: center;
            background: rgba(0,0,0,.7);
            position: absolute;
            top: 49px;
            z-index: 100;
            width: 100%;
        }

        .navbar-nav .fa-search {
            background: none;
            border: none;
            color: #fff;
            font-size: 14px;
            outline: none;
            padding: 17px;
        }

        .navbar-nav .fa-shopping-cart {
            font-weight: 300;
            padding: 0;
        }

        .site-navigation.fixed .site-search {
            top: 49px;
            position: fixed;
        }

        .site-search .container {
            height: 0;
            overflow: hidden;
            position: relative;
            -webkit-transition: height 0.3s;
            transition: height 0.3s;
        }

        .site-search .container.open {
            height: 80px;
        }

        .site-search input[type="text"] {
            background: none;
            border: none;
            color: #fff;
            font-size: 16px;
            margin: 22px 0 25px;
            padding-right: 20px;
            width: 100%;
            outline: 0;
            text-align: center;
        }

        .site-search input[type="text"]::-webkit-input-placeholder {
            color: rgba(255, 255, 255, 0.45);
        }

        .site-search input[type="text"]:-moz-placeholder {
            color: rgba(255, 255, 255, 0.45);
        }

        .site-search input[type="text"]::-moz-placeholder {
            color: rgba(255, 255, 255, 0.45);
        }

        .site-search input[type="text"]:-ms-input-placeholder {
            color: rgba(255, 255, 255, 0.45);
        }

        .site-search .close {
            color: rgba(255, 255, 255, 0.25);
            cursor: pointer;
            font-size: 32px;
            margin-top: -20px;
            position: absolute;
            top: 50%;
            right: 15px;
        }

        .site-search .close:hover {
            color: #fff;
        }

        /* [ SECTIONS ] */
        /*================================================== */

        /*** Main slide ***/

        #main-slide .item {
            min-height: 570px;
            color: #fff;
            background-position: 50% 50%;
            -webkit-background-size: cover;
            background-size: cover;
            -webkit-backface-visibility: hidden;
        }

        #main-slide .item.item-1 {
            background-image: url('../images/slider/bg1.jpg');
        }

        #main-slide .item.item-2 {
            background-image: url('../images/slider/bg2.jpg');
        }

        #main-slide .item:after {
            content: "";
            background: rgba(0,0,0,.6);
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        #main-slide .item .slider-content {
            z-index: 1;
            opacity: 0;
            -webkit-transition: opacity 500ms;
            -moz-transition: opacity 500ms;
            -o-transition: opacity 500ms;
            transition: opacity 500ms;
        }

        #main-slide .item.active .slider-content {
            opacity: 1;
            -webkit-transition: opacity 100ms;
            -moz-transition: opacity 100ms;
            -o-transition: opacity 100ms;
            transition: opacity 100ms;
        }

        #main-slide .slider-content {
            top: 50%;
            margin-top: -150px;
            padding: 0;
            position: absolute;
            width: 100%;
            color: #fff;
        }

        .slider-content {
            position: relative;
            display: table;
            height: 100%;
            width: 100%;
        }

        .slider-text {
            display: table;
            vertical-align: bottom;
            color: #fff;
            width: 100%;
            padding-bottom: 0;
            padding-top: 20px;
        }

        .slider-text .slide-title {
            font-size: 68px;
            line-height: 78px;
            font-weight: 600;
            color: #fff;
            text-transform: uppercase;
        }

        .slider-text .slide-title span {
            font-weight: 800;
        }

        .slider.btn-primary {
            margin-top: 10px;
            background: transparent;
            transition: .1s;
        }

        .slider.btn-primary:hover, .slider.btn-primary:active, .slider.btn-primary:focus {
            color: #fff;
        }

        /* Fix Bootstrap Carousel Bug in Firefox (Replace Slide by Fade) */
        @-moz-document url-prefix() {
            .carousel-fade .carousel-inner .item {
                -webkit-transition-property: opacity;
                transition-property: opacity;
            }

            .carousel-fade .carousel-inner .item,
            .carousel-fade .carousel-inner .active.left,
            .carousel-fade .carousel-inner .active.right {
                opacity: 0;
            }

            .carousel-fade .carousel-inner .active,
            .carousel-fade .carousel-inner .next.left,
            .carousel-fade .carousel-inner .prev.right {
                opacity: 1;
            }

            .carousel-fade .carousel-inner .next,
            .carousel-fade .carousel-inner .prev,
            .carousel-fade .carousel-inner .active.left,
            .carousel-fade .carousel-inner .active.right {
                left: 0;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            .carousel-fade .carousel-control {
                z-index: 2;
            }

            .carousel,
            .carousel-inner,
            .carousel-inner .item {
                height: 100%;
            }
        }
        /* Carousel Indicators */

        .carousel-indicators li {
            display: none;
        }

        #main-slide .carousel-control.left,
        #main-slide .carousel-control.right {
            opacity: 0;
            filter: alpha(opacity=0);
            background-image: none;
            background-repeat: no-repeat;
            text-shadow: none;
            -webkit-transition: all .25s ease;
            -moz-transition: all .25s ease;
            -ms-transition: all .25s ease;
            -o-transition: all .25s ease;
            transition: all .25s ease;
        }

        #main-slide:hover .carousel-control.left,
        #main-slide:hover .carousel-control.right {
            opacity: 1;
            filter: alpha(opacity=100);
        }

        #main-slide:hover .carousel-control.left {
            left: 30px;
        }

        #main-slide:hover .carousel-control.right {
            right: 30px;
        }

        #main-slide .carousel-control.left span {
            padding: 15px;
        }

        #main-slide .carousel-control.right span {
            padding: 15px;
        }

        #main-slide .carousel-control .fa-angle-left,
        #main-slide .carousel-control .fa-angle-right {
            position: absolute;
            top: 50%;
            z-index: 5;
            display: inline-block;
            margin-top: -25px;
        }

        #main-slide .carousel-control .fa-angle-left {
            left: 0;
        }

        #main-slide .carousel-control .fa-angle-right {
            right: 0;
        }

        #main-slide .carousel-control i {
            line-height: 56px;
            border-radius: 4px;
            font-size: 56px;
            -moz-transition: all 500ms ease;
            -webkit-transition: all 500ms ease;
            -ms-transition: all 500ms ease;
            -o-transition: all 500ms ease;
            transition: all 500ms ease;
        }


        /*** Features box ***/

        .features {
            padding-top: 0;
            padding-bottom: 0;
            top: -60px;
            position: relative;
            z-index: 10;
        }

        .features-row {
            background: #1d1d1d;
            padding: 60px 50px 50px 50px;
            margin-left: 0;
            margin-right: 0;
        }

        .feature-box .feature-icon {
            float: left;
            display: inline-block;
        }

        .feature-box .feature-icon img {
            width: 50px;
            vertical-align: initial;
        }

        .feature-box .feature-box-content {
            margin-left: 100px;
        }

        .feature-box .feature-box-content h3 {
            color: #fff;
            margin: 0 0 10px 0;
            line-height: normal;
            font-size: 18px;
        }

        .feature-box .feature-box-content p {
            color: #fff;
            font-size: 14px;
            line-height: 23px;
            color: #ddd;
        }

        /*** Banner Area ***/

        .banner-area {
            position: relative;
            padding: 0;
            color: #fff;
            background-image: url('../images/backgrounds/bg-banner.jpg');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }

        .banner-area:after,.banner-area:before {
            content: '';
            position: absolute;
            bottom: 0;
            width: 50%;
            z-index: 1;
            border-bottom: 30px solid #111;
            -moz-transform: rotate(0.000001deg);
            -webkit-transform: rotate(0.000001deg);
            -o-transform: rotate(0.000001deg);
            -ms-transform: rotate(0.000001deg);
            transform: rotate(0.000001deg);
        }

        .banner-area:before {
            right: 50%;
            border-right: 125px solid transparent;
        }

        .banner-area:after {
            left: 50%;
            border-left: 125px solid transparent;
        }

        .banner-area .banner-overlay {
            padding: 70px 0 90px;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .banner-area .banner-text {
            margin: 0 auto;
            width: 100%;
            z-index: 1;
        }

        .banner-area .title-head.banner-post-title {
            line-height: 55px;
        }

        .banner-area hr {
            border-top: 2px solid #fff;
            background: transparent;
            width: 60px;
            margin: 0 auto;
            margin-top: 10px;
        }

        .banner-area .banner-title {
            display: inline-block;
            color: #fff;
            text-transform: uppercase;
            font-weight: 800;
            font-size: 45px;
            line-height: 45px;
        }

        .banner-area .banner-title span {
            color: #ffae11;
        }

        /*** Breadcrumb ***/

        .banner-area .breadcrumb {
            font-size: 14px;
            text-transform: uppercase;
            margin: 15px 0 0;
            background: transparent;
        }

        .banner-area .breadcrumb>li {
            font-weight: 400;
        }

        .banner-area .breadcrumb>li a {
            font-weight: 600;
        }

        .banner-area .breadcrumb>li a:hover {
            opacity: .9;
        }

        .banner-area .breadcrumb>li+li:before {
            color: #fff;
        }

        /* [ SECTIONS ] */
        /*================================================== */

        /*** About Us ***/

        .about-us {
            padding: 0 0 70px;
        }

        .title-about {
            text-transform: uppercase;
            color: #fff;
            margin-top: 0;
            margin-bottom: 15px;
        }

        .title-about.risk-title {
            margin-top: 18px;
            font-size: 18px;
        }

        .img-about-us {
            margin: 0 auto;
        }

        .about-content {
            margin-top: 20px;
        }

        .about-text {
            line-height: 28px;
            margin-bottom: 3px;
        }

        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:hover,
        .nav-tabs>li.active>a:focus {
            background: none;
        }

        .nav-tabs>li.active>a:focus {
            color: #111;
        }

        .tab-content p {
            padding: 0 0 30px;
            margin: 0;
        }

        .feature-about i {
            margin-right: 10px;
        }

        .btn-services {
            margin-top: 15px;
        }

        /*** Features and Video ***/

        .image-block {
            background: #1d1d1d;
            padding: 0;
        }

        .bg-image-1 {
            background-image: url(../images/backgrounds/bg-video.jpg);
            background-size: cover;
            background-position: center center;
            height: 625px;
        }

        .bg-image-1:after {
            content: "";
            background: rgba(0,0,0,.6);
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .img-block-left {
            padding-left: 140px;
        }

        /* Features */

        .feature .feature-icon {
            font-size: 36px;
        }

        .image-block .feature .feature-icon img {
            height: 37px;
        }

        .feature-title {
            font-size: 18px;
            margin-top: 10px;
            text-transform: uppercase;
            font-weight: 600;
            color: #fff;
        }

        /* Video */

        .button-video {
            position: absolute;
            z-index: 2;
            top: 50%;
            left: 50%;
            display: block;
            overflow: hidden;
            border: 4px solid #fff;
            border-radius: 50%;
            transition: .1s;
            width: 86px;
            height: 86px;
            border-color: #fff;
            -webkit-transform: translate3d(-50%, -50%, 0);
            transform: translate3d(-50%, -50%, 0);
        }

        .button-video:after {
            content: '';
            position: absolute;
            top: 50%;
            left: 53%;
            -webkit-transform: translate3d(-50%, -50%, 0);
            transform: translate3d(-50%, -50%, 0);
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 10px 0 10px 18px;
        }

        .button-video:hover {
            background: #fff;
        }

        /*** Pricing Tables ***/

        .pricing-tables-content {
            margin-top: 25px;
        }

        .pricing-tables-content.pricing-page {
            margin-top: 0;
        }

        .pricing-tables-content .header {
            height: 100px;
            line-height: 170px;
            position: relative;
        }

        .pricing h3 {
            color: #fff;
            text-transform: uppercase;
        }

        .pricing h3.sell-title {
            margin-top: 50px;
        }

        .pricing-switcher {
            text-align: center;
        }

        .pricing-switcher > p {
            display: inline-block;
            position: relative;
            padding: 0;
            padding-right: 4px;
            border-radius: 0;
            background: #111;
            border: 1px solid #333;
        }

        .pricing-switcher input[type="radio"] {
            position: absolute;
            opacity: 0;
        }

        .pricing-switcher label {
            position: relative;
            z-index: 1;
            display: inline-block;
            float: left;
            width: 105px;
            height: 39px;
            line-height: 43px;
            cursor: pointer;
            padding-left: 8px;
            font-size: 16px;
            color: #fff;
        }

        .pricing-switcher label.switch-1.active, .pricing-switcher label.switch-2.active {
            color: #fff;
        }

        .pricing-switcher .switch {
            position: absolute;
            top: 2px;
            left: 2px;
            height: 40px;
            width: 105px;
            border-radius: 0;
            -webkit-transition: -webkit-transform 0.5s;
            -moz-transition: -moz-transform 0.5s;
            transition: transform 0.5s;
        }

        .pricing-switcher input[type="radio"]:checked + label + .switch,
        .pricing-switcher input[type="radio"]:checked + label:nth-of-type(n) + .switch {
            -webkit-transform: translateX(105px);
            -moz-transform: translateX(105px);
            -ms-transform: translateX(105px);
            -o-transform: translateX(105px);
            transform: translateX(105px);
        }

        .no-js .pricing-switcher {
            display: none;
        }

        .pricing-list {
            margin: 32px 0 0;
            list-style-type: none;
        }

        .pricing-list > li {
            position: relative;
            margin-bottom: 16px;
        }

        .pricing-wrapper {
            position: relative;
            list-style-type: none;
            padding: 0;
        }

        .touch .pricing-wrapper {
            -webkit-perspective: 2000px;
            -moz-perspective: 2000px;
            perspective: 2000px;
        }

        .pricing-wrapper.is-switched .is-visible {
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -ms-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            transform: rotateY(180deg);
            -webkit-animation: rotate 0.5s;
            -moz-animation: rotate 0.5s;
            animation: rotate 0.5s;
        }

        .pricing-wrapper.is-switched .is-hidden {
            -webkit-transform: rotateY(0);
            -moz-transform: rotateY(0);
            -ms-transform: rotateY(0);
            -o-transform: rotateY(0);
            transform: rotateY(0);
            -webkit-animation: rotate-inverse 0.5s;
            -moz-animation: rotate-inverse 0.5s;
            animation: rotate-inverse 0.5s;
            opacity: 0;
        }

        .pricing-wrapper.is-switched .is-selected {
            opacity: 1;
        }

        .pricing-wrapper.is-switched.reverse-animation .is-visible {
            -webkit-transform: rotateY(-180deg);
            -moz-transform: rotateY(-180deg);
            -ms-transform: rotateY(-180deg);
            -o-transform: rotateY(-180deg);
            transform: rotateY(-180deg);
            -webkit-animation: rotate-back 0.5s;
            -moz-animation: rotate-back 0.5s;
            animation: rotate-back 0.5s;
        }

        .pricing-wrapper.is-switched.reverse-animation .is-hidden {
            -webkit-transform: rotateY(0);
            -moz-transform: rotateY(0);
            -ms-transform: rotateY(0);
            -o-transform: rotateY(0);
            transform: rotateY(0);
            -webkit-animation: rotate-inverse-back 0.5s;
            -moz-animation: rotate-inverse-back 0.5s;
            animation: rotate-inverse-back 0.5s;
            opacity: 0;
        }

        .pricing-wrapper.is-switched.reverse-animation .is-selected {
            opacity: 1;
        }

        .pricing-wrapper > li {
            background-color: #1d1d1d;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            outline: 1px solid transparent;
        }

        .pricing-wrapper > li::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            height: 100%;
            width: 50px;
            pointer-events: none;
            background: -webkit-linear-gradient( right , #FFFFFF, rgba(255, 255, 255, 0));
            background: linear-gradient(to left, #FFFFFF, rgba(255, 255, 255, 0));
        }

        .pricing-wrapper > li.is-ended::after {
            display: none;
        }

        .pricing-wrapper .is-visible {
            position: relative;
            z-index: 5;
        }

        .pricing-wrapper .is-hidden {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: 1;
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -ms-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            transform: rotateY(180deg);
        }

        .pricing-wrapper .is-selected {
            z-index: 3 !important;
        }

        .no-js .pricing-wrapper .is-hidden {
            position: relative;
            -webkit-transform: rotateY(0);
            -moz-transform: rotateY(0);
            -ms-transform: rotateY(0);
            -o-transform: rotateY(0);
            transform: rotateY(0);
            margin-top: 16px;
        }

        .price {
            margin-top: 45px;
            color: #fff;
        }

        .pricing-header {
            position: relative;
            z-index: 1;
            height: 80px;
            padding: 16px;
            pointer-events: none;
            background-color: #3aa0d1;
            color: #FFFFFF;
        }

        .pricing-header h2 {
            margin-bottom: 3px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .currency, .value {
            font-size: 120px;
            font-weight: 300;
        }

        .pricing-body {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .is-switched .pricing-body {
            overflow: hidden;
        }

        .pricing-features {
            width: 600px;
        }

        .pricing-features:after {
            content: "";
            display: table;
            clear: both;
        }

        .pricing-features li {
            width: 100px;
            float: left;
            padding: 25px 16px;
            font-size: 56px;
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .pricing-features em {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .pricing-footer {
            position: absolute;
            z-index: 1;
            top: 0;
            left: 0;
            height: 80px;
            width: 100%;
        }

        .pricing-footer::after {
            content: '';
            position: absolute;
            right: 16px;
            top: 50%;
            bottom: auto;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            height: 20px;
            width: 20px;
        }

        .pricing-footer a {
            display: block;
            margin: 0 30px;
        }

        .select {
            position: relative;
            z-index: 1;
            display: block;
            height: 100%;
            overflow: hidden;
            text-indent: 100%;
            white-space: nowrap;
            color: transparent;
        }

        .pricing-tables-content .header {
            height: 160px;
            line-height: 280px;
        }

        .pricing-list {
            margin: 48px 0 0;
            padding: 0;
        }

        .pricing-list:after {
            content: "";
            display: table;
            clear: both;
        }

        .pricing-list > li {
            float: left;
            padding: 0 15px;
        }

        .pricing-wrapper > li::before {
            content: '';
            position: absolute;
            z-index: 6;
            left: -1px;
            top: 50%;
            bottom: auto;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            height: 50%;
            width: 1px;
        }

        .pricing-wrapper > li::after {
            display: none;
        }

        .pricing-header {
            height: auto;
            padding: 30px;
            pointer-events: auto;
            text-align: center;
            color: #173d50;
            background-color: transparent;
        }

        .popular .pricing-header {
            color: #e97d68;
            background-color: transparent;
        }

        .pricing-header h2 {
            font-size: 1.8rem;
            margin-top: 25px;
            line-height: 1.8rem;
            color: #e7e7e7;
            letter-spacing: 2px;
        }

        .pricing-header h2 span {
            color: #e7e7e7;
            display: block;
            padding-top: 17px;
            font-weight: 400;
            font-size: 14px;
        }

        .value {
            font-size: 4rem;
            font-weight: 800;
        }

        .currency {
            font-size: 4rem;
            font-weight: 600;
        }

        .pricing-body {
            overflow-x: visible;
        }

        .pricing-features {
            width: auto;
        }

        .pricing-features li {
            float: none;
            width: auto;
            padding: 16px;
        }

        .pricing-features li:nth-of-type(2n+1) {
            background-color: rgba(23, 61, 80, 0.06);
        }

        .pricing-features em {
            display: inline-block;
            margin-bottom: 0;
        }

        .pricing-footer {
            position: relative;
            height: auto;
            padding: 30px 0;
            text-align: center;
        }

        .pricing-footer::after {
            display: none;
        }

        .select {
            position: static;
            display: inline-block;
            height: auto;
            padding: 20px 48px;
            color: #FFFFFF;
            border-radius: 2px;
            background-color: #0c1f28;
            font-size: 1.4rem;
            text-indent: 0;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .no-touch .select:hover {
            background-color: #112e3c;
        }

        /* Keyframes */

        @-webkit-keyframes rotate {
            0% {
                -webkit-transform: perspective(2000px) rotateY(0);
            }

            70% {
                /* this creates the bounce effect */
                -webkit-transform: perspective(2000px) rotateY(200deg);
            }

            100% {
                -webkit-transform: perspective(2000px) rotateY(180deg);
            }
        }

        @-moz-keyframes rotate {
            0% {
                -moz-transform: perspective(2000px) rotateY(0);
            }

            70% {
                /* this creates the bounce effect */
                -moz-transform: perspective(2000px) rotateY(200deg);
            }

            100% {
                -moz-transform: perspective(2000px) rotateY(180deg);
            }
        }

        @keyframes rotate {
            0% {
                -webkit-transform: perspective(2000px) rotateY(0);
                -moz-transform: perspective(2000px) rotateY(0);
                -ms-transform: perspective(2000px) rotateY(0);
                -o-transform: perspective(2000px) rotateY(0);
                transform: perspective(2000px) rotateY(0);
            }

            70% {
                /* this creates the bounce effect */
                -webkit-transform: perspective(2000px) rotateY(200deg);
                -moz-transform: perspective(2000px) rotateY(200deg);
                -ms-transform: perspective(2000px) rotateY(200deg);
                -o-transform: perspective(2000px) rotateY(200deg);
                transform: perspective(2000px) rotateY(200deg);
            }

            100% {
                -webkit-transform: perspective(2000px) rotateY(180deg);
                -moz-transform: perspective(2000px) rotateY(180deg);
                -ms-transform: perspective(2000px) rotateY(180deg);
                -o-transform: perspective(2000px) rotateY(180deg);
                transform: perspective(2000px) rotateY(180deg);
            }
        }

        @-webkit-keyframes rotate-inverse {
            0% {
                -webkit-transform: perspective(2000px) rotateY(-180deg);
            }

            70% {
                /* this creates the bounce effect */
                -webkit-transform: perspective(2000px) rotateY(20deg);
            }

            100% {
                -webkit-transform: perspective(2000px) rotateY(0);
            }
        }

        @-moz-keyframes rotate-inverse {
            0% {
                -moz-transform: perspective(2000px) rotateY(-180deg);
            }

            70% {
                /* this creates the bounce effect */
                -moz-transform: perspective(2000px) rotateY(20deg);
            }

            100% {
                -moz-transform: perspective(2000px) rotateY(0);
            }
        }

        @keyframes rotate-inverse {
            0% {
                -webkit-transform: perspective(2000px) rotateY(-180deg);
                -moz-transform: perspective(2000px) rotateY(-180deg);
                -ms-transform: perspective(2000px) rotateY(-180deg);
                -o-transform: perspective(2000px) rotateY(-180deg);
                transform: perspective(2000px) rotateY(-180deg);
            }

            70% {
                /* this creates the bounce effect */
                -webkit-transform: perspective(2000px) rotateY(20deg);
                -moz-transform: perspective(2000px) rotateY(20deg);
                -ms-transform: perspective(2000px) rotateY(20deg);
                -o-transform: perspective(2000px) rotateY(20deg);
                transform: perspective(2000px) rotateY(20deg);
            }

            100% {
                -webkit-transform: perspective(2000px) rotateY(0);
                -moz-transform: perspective(2000px) rotateY(0);
                -ms-transform: perspective(2000px) rotateY(0);
                -o-transform: perspective(2000px) rotateY(0);
                transform: perspective(2000px) rotateY(0);
            }
        }

        @-webkit-keyframes rotate-back {
            0% {
                -webkit-transform: perspective(2000px) rotateY(0);
            }

            70% {
                /* this creates the bounce effect */
                -webkit-transform: perspective(2000px) rotateY(-200deg);
            }

            100% {
                -webkit-transform: perspective(2000px) rotateY(-180deg);
            }
        }

        @-moz-keyframes rotate-back {
            0% {
                -moz-transform: perspective(2000px) rotateY(0);
            }

            70% {
                /* this creates the bounce effect */
                -moz-transform: perspective(2000px) rotateY(-200deg);
            }

            100% {
                -moz-transform: perspective(2000px) rotateY(-180deg);
            }
        }

        @keyframes rotate-back {
            0% {
                -webkit-transform: perspective(2000px) rotateY(0);
                -moz-transform: perspective(2000px) rotateY(0);
                -ms-transform: perspective(2000px) rotateY(0);
                -o-transform: perspective(2000px) rotateY(0);
                transform: perspective(2000px) rotateY(0);
            }

            70% {
                /* this creates the bounce effect */
                -webkit-transform: perspective(2000px) rotateY(-200deg);
                -moz-transform: perspective(2000px) rotateY(-200deg);
                -ms-transform: perspective(2000px) rotateY(-200deg);
                -o-transform: perspective(2000px) rotateY(-200deg);
                transform: perspective(2000px) rotateY(-200deg);
            }

            100% {
                -webkit-transform: perspective(2000px) rotateY(-180deg);
                -moz-transform: perspective(2000px) rotateY(-180deg);
                -ms-transform: perspective(2000px) rotateY(-180deg);
                -o-transform: perspective(2000px) rotateY(-180deg);
                transform: perspective(2000px) rotateY(-180deg);
            }
        }

        @-webkit-keyframes rotate-inverse-back {
            0% {
                -webkit-transform: perspective(2000px) rotateY(180deg);
            }

            70% {
                /* this creates the bounce effect */
                -webkit-transform: perspective(2000px) rotateY(-20deg);
            }

            100% {
                -webkit-transform: perspective(2000px) rotateY(0);
            }
        }

        @-moz-keyframes rotate-inverse-back {
            0% {
                -moz-transform: perspective(2000px) rotateY(180deg);
            }

            70% {
                /* this creates the bounce effect */
                -moz-transform: perspective(2000px) rotateY(-20deg);
            }

            100% {
                -moz-transform: perspective(2000px) rotateY(0);
            }
        }

        @keyframes rotate-inverse-back {
            0% {
                -webkit-transform: perspective(2000px) rotateY(180deg);
                -moz-transform: perspective(2000px) rotateY(180deg);
                -ms-transform: perspective(2000px) rotateY(180deg);
                -o-transform: perspective(2000px) rotateY(180deg);
                transform: perspective(2000px) rotateY(180deg);
            }

            70% {
                /* this creates the bounce effect */
                -webkit-transform: perspective(2000px) rotateY(-20deg);
                -moz-transform: perspective(2000px) rotateY(-20deg);
                -ms-transform: perspective(2000px) rotateY(-20deg);
                -o-transform: perspective(2000px) rotateY(-20deg);
                transform: perspective(2000px) rotateY(-20deg);
            }

            100% {
                -webkit-transform: perspective(2000px) rotateY(0);
                -moz-transform: perspective(2000px) rotateY(0);
                -ms-transform: perspective(2000px) rotateY(0);
                -o-transform: perspective(2000px) rotateY(0);
                transform: perspective(2000px) rotateY(0);
            }
        }

        /*** Bitcoin Calculator ***/

        .bitcoin-calculator-section {
            background-image: url('../images/backgrounds/bg-calculator.jpg');
            height: 218px;
            position: relative;
            background-attachment: fixed;
            background-size: cover;
            margin: 70px 0;
        }

        .bitcoin-calculator-section:before {
            position: absolute;
            content: "";
            background: rgba(0,0,0,.7);
            top: 0;
            width: 100%;
            height: 100%;
            bottom: 0;
        }

        .bitcoin-calculator-section .container {
            background: #1d1d1d;
            width: 1140px;
            height: 358px;
            margin-top: -130px;
            position: absolute;
            left: 0;
            right: 0;
        }

        .bitcoin-calculator-section h2 {
            margin-bottom: 33px;
            color: #fff;
            padding-top: 70px;
            margin: 0;
        }

        .bitcoin-calculator-section h3 span {
            font-weight: 800;
        }

        .bitcoin-calculator-section p {
            display: block;
        }

        .bitcoin-calculator-section p.message {
            margin: 10px 0 39px;
            text-transform: uppercase;
            font-size: 14px;
        }

        .bitcoin-calculator-section p.info {
            font-size: 14px;
            color: rgba(244,255,255,.3);
            margin-top: 5px;
        }

        .bitcoin-calculator .form-input {
            min-width: 95px;
            border-right: 0;
            height: 45px;
        }

        .bitcoin-calculator .form-wrap {
            margin-left: 2px;
            vertical-align: top;
            margin-top: 3px;
        }

        .bitcoin-calculator .form-input,
        .bitcoin-calculator .form-info {
            font-size: 19px;
            line-height: 1;
            text-align: center;
            font-weight: 600;
            color: #fff;
            width: 230px;
            outline: none;
            display: inline-block;
            padding: 0;
            margin: 0;
            background: #181818;
        }

        .bitcoin-calculator .form-input {
            border: 1px solid #2d2d2d;
        }

        .bitcoin-calculator .select-primary ~ .select2-selection__rendered {
            padding-left: 20px;
            padding-right: 35px;
        }

        .select2-container--default .select2-results__option--highlighted[aria-selected],
        .select2-container--default .select2-results__option[aria-selected=true] {
            background-color: rgba(0,0,0,.2);
        }

        .bitcoin-calculator > * {
            margin-bottom: 7px;
            margin-left: 7px;
            margin-top: 0;
            display: inline-block;
        }

        .bitcoin-calculator .form-input.select-currency {
            border: 0;
            color: #fff;
            width: 105px;
            margin-left: -14px;
        }

        .bitcoin-calculator .form-info {
            margin-left: -6px;
            width: 62px;
            height: 45px;
            vertical-align: top;
        }

        .bitcoin-calculator .form-info i {
            color: #fff;
            line-height: 43px;
        }

        .bitcoin-calculator .form-equal {
            padding: 0 20px;
            color: #fff;
            margin: 0 8px;
            font-size: 26px;
            font-weight: 300;
        }

        .bitcoin-calculator .select-primary ~ .select2-selection__rendered {
            padding-left: 20px;
            padding-right: 35px;
        }

        .bitcoin-calculator span.select2 {
            margin-left: -8px;
            width: 95px !important;
            margin-top: -3px;
        }

        .bitcoin-calculator .select-primary~.select2 .select2-selection__rendered {
            padding: 6px 23px 4px 13px;
        }

        .bitcoin-calculator .select-primary~.select2 .select2-selection__arrow {
            top: 49%;
        }

        /*** Team ***/

        .team-members {
            margin-top: 30px;
            margin-bottom: 15px;
        }

        .team-member {
            position: relative;
            display: inline-block;
        }

        .team-member-caption {
            text-align: center;
            background: #1d1d1d;
            -webkit-transition: .1s all ease;
            transition: .1s all ease;
        }

        .team-member .team-member-caption h4 {
            line-height: 0;
            text-transform: uppercase;
            margin: 35px 0 16px;
            font-weight: 600;
            font-size: 18px;
            color: #fff;
        }

        .team-member-caption p {
            padding: 0 0 23px;
            font-style: italic;
            margin: 0;
            font-size: 15px;
        }

        .team-member-caption .list {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            opacity: 0;
            margin-top: -45px;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transition: .3s all ease;
            transition: .3s all ease;
            will-change: content;
        }

        .team-member-caption .list li {
            padding: 0;
        }

        .team-member-caption .list li a {
            color: #fff;
        }

        .team-member-caption .list li + li {
            margin-left: 5px;
        }

        .team-member-img-wrap img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .team-member-caption a:hover {
            text-decoration: none;
        }

        .team-member:hover .team-member-img-wrap:before {
            opacity: 1;
        }

        .team-member:hover .team-member-caption h4,
        .team-member:hover .team-member-caption p {
            color: #fff;
        }

        .team-member:hover .team-member-caption .list {
            opacity: 1;
        }

        .social-icons a {
            margin: 0 5px;
            font-size: 16px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(0,0,0,.5);
            line-height: 40px;
            display: inline-block;
        }

        .team ul.social li a:before {
            color: #fff;
            font-size: 16px;
        }

        .team .social-icons ul.social li a:hover:before {
            font-size: 16px;
        }

        /*** Services ***/

        section.services {
            padding: 90px 0 60px;
        }

        .service-box  .service-box-content {
            padding-left: 68px;
        }

        .service-box h3 {
            color: #fff;
            margin: 0 0 20px;
            font-weight: 400;
            font-size: 21px;
        }

        .service-box img {
            height: 37px;
            float: left;
        }

        .service-box > div {
            padding: 40px;
            margin-bottom: 30px;
            background: #1d1d1d;
        }

        /*** Blog ***/

        body.blog article {
            margin-bottom: 60px;
        }

        body.blog figure {
            margin: 0;
        }

        body.blog figure a img {
            width: 100%;
        }

        body.blog article h4 {
            color: #fff;
            text-transform: uppercase;
            font-weight: 900;
            font-size: 28px;
            margin: 0 0 20px;
            line-height: 40px;
        }
        body.blog.grid-no-sidebar article h4 {
            font-size: 23px;
            line-height: 31px;
        }

        body.blog p.excerpt, body.blog p.content-article {
            margin: 22px 0;
        }

        body.blog .btn.btn-readmore {
            width: 250px;
        }

        body.blog .meta {
            clear: both;
            padding: 10px 0;
            width: 100%;
            border-top: 1px solid #222;
            border-bottom: 1px solid #222;
            font-size: 14px;
            margin-top: 30px;
        }

        body.blog .banner-area .meta {
            border-top: 0;
            border-bottom: 0;
        }

        body.blog .meta span {
            margin-right: 15px;
            display: inline-block;
        }

        body.blog .meta span i {
            padding-right: 4px;
        }

        section.blog-page {
            padding: 85px 15px 60px;
        }

        /* Pagination */

        body.blog .pagination li a:hover {
            background: #333;
        }

        body.blog .pagination li a {
            color: #999;
            background: transparent;
            border: 1px solid #333;
            border-radius: 0;
            padding: 7px 14px;
        }

        body.blog .pagination li.active a {
            color: #fff;
        }

        /* Comments */

        .comments-heading {
            margin: 40px 0 25px;
            text-transform: uppercase;
            color: #fff;
        }

        .comments-list {
            list-style: none;
            margin: 0;
            padding: 20px 0;
        }

        .comments-list .comment {
            margin-bottom: 30px;
            background: #1d1d1d;
            padding: 25px;
            border-radius: 7px;
        }

        .comments-list img.comment-avatar {
            width: 82px;
            height: 82px;
            border-radius: 100%;
            margin-right: 25px;
        }

        .comments-list .comment-body {
            margin-left: 110px;
        }

        .comments-list .comment-author {
            font-size: 16px;
            color: #eee;
        }

        .comments-list .comment-content {
            font-size: 14px;
        }

        .comments-list .comment-date {
            font-size: 12px;
        }

        .comments-list .comment-content {
            margin: 15px 0;
        }

        .comments-list .comment-reply {
            text-transform: uppercase;
            font-weight: 600;
        }

        .comments-reply {
            list-style: none;
            margin: 0 0 0 96px;
        }

        /* Comments Form */

        .comments-heading.add-comment {
            margin: 0 0 50px;
        }

        .comments-form {
            margin-bottom: 0;
        }

        .comments-form .title-normal {
            margin-top: 0;
            line-height: normal;
            margin-bottom: 25px;
        }

        .comments-form .form-group {
            margin-bottom: 30px;
        }

        .comments-form textarea {
            padding: 15px 20px;
            height: 150px;
        }

        /*** Sidebar ***/

        .sidebar .widget-title {
            font-size: 18px;
            font-weight: 600;
            position: relative;
            margin-bottom: 25px;
            margin-top: 0;
            line-height: normal;
            text-transform: uppercase;
            color: #fff;
        }

        .widget {
            background: #1d1d1d;
            padding: 30px;
            margin-bottom: 30px;
        }

        /* Search Widget */

        .widget.widget-search {
            padding: 8px 20px;
        }

        .widget-search input,
        .widget-search input:focus {
            border: 0 !important;
            font-style: italic;
        }

        /* Recent Posts Widget */

        .widget.recent-posts ul li {
            border-bottom: 1px solid #333;
            padding: 20px 0;
        }

        .widget.recent-posts ul li:first-child {
            padding-top: 0;
        }

        .widget.recent-posts ul li:last-child {
            border: 0;
            padding-bottom: 0;
            margin-bottom: 0;
        }

        .widget.recent-posts .posts-thumb {
        }

        .widget.recent-posts .posts-thumb img {
            margin-right: 15px;
            width: 90px;
            height: 70px;
        }

        .widget.recent-posts .post-info .entry-title {
            font-size: 14px;
            font-weight: 600;
            line-height: 20px;
            margin: 0;
        }

        .widget.recent-posts .post-info .post-meta {
            margin-bottom: 0;
        }

        .widget.recent-posts .entry-title a {
            color: #eee;
            font-weight: 600;
        }

        .widget.recent-posts .post-date {
            font-weight: 400;
            color: #999;
            text-transform: capitalize;
            font-size: 12px;
        }

        /* Navigation Widget */

        .sidebar ul.nav-tabs {
            border: 0;
        }

        .sidebar ul.nav-tabs li a {
            color: #999;
            border-radius: 0;
            padding: 0;
            padding-left: 0;
            font-weight: 600;
            display: inline-block;
            border-left: 0;
            margin: 0;
            font-size: 13px;
            font-family: 'Open Sans', sans-serif;
        }

        .sidebar ul.nav-tabs li {
            line-height: normal;
            font-weight: 600;
            border-bottom: 1px solid #333;
            padding: 15px 0;
            float: none;
            text-align: left;
        }

        .sidebar ul.nav-tabs li:first-child {
            padding-top: 0;
        }

        .sidebar ul.nav-tabs li:last-child {
            border-bottom: 0;
        }

        /* Tags Widget */

        .widget-tags ul > li {
            display: inline-block;
            margin: 6px 6px 6px 0;
        }

        .widget-tags ul > li a {
            color: #999;
            font-family: 'Open Sans', sans-serif;
            border: 1px solid #999;
            display: block;
            font-size: 13px;
            padding: 5px 15px;
            font-weight: 600;
            transition: 0.1s;
        }

        .widget-tags ul > li a:hover {
            color: #fff;
            border: 1px solid #fff;
        }

        /*** Quote and Chart ***/

        .image-block2 {
            background: #1d1d1d;
            padding: 0;
        }

        .bg-image-2:after {
            content: "";
            background: rgba(0,0,0,.6);
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .img-block-quote {
            padding: 100px 50px;
        }

        /* Quote */

        .image-block2 blockquote {
            border-left: 0;
            margin: 30px 0;
            position: relative;
            background: transparent;
            padding: 30px;
            z-index: 1;
        }

        .image-block2 blockquote p:before, .image-block2 blockquote p:after {
            display: block;
            font-size: 80px;
            position: absolute;
        }

        .image-block2 blockquote p:before {
            content: "\201C";
            left: 10px;
            top: 5px;
        }

        .image-block2 blockquote p:after {
            content: "\201D";
            right: 10px;
        }

        .image-block2 blockquote p {
            color: #fff;
            font-style: italic;
            font-size: 18px;
            line-height: 28px;
            font-weight: 300;
        }

        .image-block2 blockquote footer {
            color: #fff;
        }

        .image-block2 blockquote footer img {
            border-radius: 50%;
            width: 50px;
            border: 3px solid #fff;
            margin: 0 10px 0 0;
            background: #fff;
        }

        .image-block2 blockquote footer span {
            font-weight: 600;
            text-transform: uppercase;
        }

        .image-block2 blockquote footer:before {
            display: none;
        }

        /* Chart */

        .btcwdgt-headlines.btcwdgt-clean {
            margin: 0 auto !important;
            border: 1px solid #333 !important;
            box-shadow: none !important;
            max-width: 615px !important;
        }

        .dark-chart .btcwdgt-chart .btcwdgt-body {
            background: #222 !important;
        }

        .dark-chart .btcwdgt.btcwdgt-chart .btcwdgt-header p {
            background: #1d1d1d !important;
        }

        .dark-chart .btcwdgt.btcwdgt-chart .btcwdgt-header p.changes {
            background: #1d1d1d !important;
        }

        .btcwdgt.btcwdgt-chart .btcwdgt-footer {
            display: none !important;
        }

        .chart-widget {
            display: table;
            position: absolute;
            height: 100%;
            width: 100%;
            left: 0;
        }

        .chart-widget > div {
            display: table-cell;
            vertical-align: middle;
        }

        .bg-grey-chart, .bg-image-2 {
            height: 580px;
        }

        .bg-image-2 {
            background-image: url(../images/backgrounds/bg-quote.jpg);
            background-size: cover;
            background-position: center center;
            height: 580px;
        }
        /*** Contact Page ***/

        /* Contact Form */

        section.contact {
            padding: 90px 0 60px;
        }

        .contact-form {
            padding: 0;
        }

        .contact-form h3 {
            color: #fff;
            text-transform: uppercase;
            margin-top: 0;
        }

        .contact-form p, .contact-form .form-group {
            margin-bottom: 30px;
        }

        .contact-form textarea {
            height: 162px;
            padding: 15px 20px;
        }

        .contact-form .btn-contact {
            width: 100%;
        }

        .contact-form .output_message_holder {
            display: none;
        }

        .contact-form .output_message {
            padding: 8px;
            margin-bottom: 30px;
            border-radius: 2px;
            color: #fff;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 16px;
        }

        .contact-form .output_message.success {
            background: #28a745;
            padding: 15px;
        }

        .contact-form .output_message.success:before {
            font-family: FontAwesome;
            content: "\f14a";
            padding-right: 10px;
        }

        .contact-form .output_message.error {
            background: #dc3545;
            padding: 15px;
        }

        .contact-form .output_message.error:before {
            font-family: FontAwesome;
            content: "\f071";
            padding-right: 10px;
        }

        .contact-form .d-block {
            display: block;
        }

        /* Contact Widget */

        .contact-page-info .contact-info-box-content h4 {
            font-size: 17px;
            margin-top: 0;
            line-height: normal;
            color: #fff;
            text-transform: uppercase;
        }

        .contact-page-info .contact-info-box-content p {
            font-size: 14px;
        }

        .contact-page-info .contact-info-box i.big-icon {
            text-align: center;
            float: left;
            font-size: 30px;
            border-radius: 50%;
        }

        .contact-page-info .contact-info-box .contact-info-box-content {
            padding-left: 60px;
            margin-bottom: 25px;
        }

        .contact-page-info .social-contact ul {
            list-style-type: none;
            margin-top: 28px;
            padding: 0;
        }

        .contact-page-info .social-contact ul li {
            display: inline-block;
        }

        .contact-page-info .social-contact ul li a i {
            width: 35px;
            height: 35px;
            line-height: 36px;
            text-align: center;
            color: #fff;
            font-size: 14px;
            border-radius: 50%;
            margin: 0 10px 10px 0;
        }

        .contact-page-info .social-contact ul li.facebook a i {
            background: #3b5998;
        }

        .contact-page-info .social-contact ul li.twitter a i {
            background: #1da1f2;
        }

        .contact-page-info .social-contact ul li.google-plus a i {
            background: #dd4b39;
        }

        /*** Shopping Cart ***/

        section.shop-cart {
            padding: 90px 0 60px;
        }

        .shop-cart .table-responsive .table.order {
            margin-bottom: 35px;
        }

        .shop-cart table.order thead tr {
            background: #222;
            color: #fff;
            text-transform: uppercase;
        }

        .shop-cart .table thead > tr > th {
            padding: 20px 0;
            font-size: 15px;
        }

        .shop-cart .table-responsive .table.order tr td {
            vertical-align: middle;
            padding-top: 29px;
            padding-bottom: 29px;
            padding-left: 0;
        }

        .shop-cart .table h6 {
            font-size: 18px;
            color: #fff;
        }

        .shop-cart .table .icon-delete-product {
            color: #fff;
        }

        .shop-cart .table td span.price {
            font-weight: 700;
        }

        .shop-cart .form-control {
            max-width: 168px;
            display: inline-block;
            text-align: center;
        }

        .shop-cart .btn.btn-coupon, .shop-cart .btn.btn-update-cart {
            background: transparent;
            color: #999;
            border: 1px solid #999;
        }

        .shop-cart .btn.btn-primary.btn-coupon:hover,
        .shop-cart .btn.btn-primary.btn-coupon:focus,
        .shop-cart .btn.btn-primary.btn-coupon:active,
        .shop-cart .btn.btn-update-cart:hover,
        .shop-cart .btn.btn-update-cart:focus,
        .shop-cart .btn.btn-update-cart:active {
            background: transparent !important;
        }

        .shop-cart .form-control, .shop-cart button {
            font-size: 14px;
            float: left;
            margin-right: 15px;
        }

        .shop-cart .form-control {
            padding: 0px 0px 3px 0;
        }

        .shop-cart h4.title-totals {
            color: #fff;
            text-transform: uppercase;
            margin: 70px 0 20px;
        }

        .shop-cart .table.cart-total {
            margin-top: 20px;
        }

        .shop-cart .table.cart-total .section-border {
            border-bottom: 1px solid #222;
        }

        .shop-cart .table.cart-total th {
            font-weight: 400;
            text-transform: capitalize;
            border: none;
        }

        .shop-cart .table.cart-total th.total .price {
            font-weight: 800;
            font-size: 20px;
        }

        .shop-cart .table, .shop-checkout .table {
            border: 0;
        }

        .shop-cart .table thead > tr > th,
        .shop-checkout .table thead > tr > th {
            border-bottom: none;
        }

        .shop-cart .table thead > tr > th,
        .shop-checkout .table thead > tr > th,
        .shop-cart .table tbody > tr > th,
        .shop-cart .table tfoot > tr > th,
        .shop-cart .table thead > tr > td,
        .shop-cart .table tbody > tr > td,
        .shop-cart .table tfoot > tr > td,
        .shop-checkout .table tbody > tr > th,
        .shop-checkout .table tfoot > tr > th,
        .shop-checkout .table thead > tr > td,
        .shop-checkout .table tbody > tr > td,
        .shop-checkout .table tfoot > tr > td {
            border: 0;
        }

        .shop-cart .table tbody > tr,
        .shop-checkout  .table tbody > tr {
            border-bottom: 1px solid #222;
        }

        .shop-cart .quantity {
            text-align: center;
            font-size: 12px;
            background: #222;
            padding-top: 11px;
            padding-bottom: 11px;
            width: 82px;
            height: auto;
            display: inline-block;
        }

        .shop-cart .qty {
            text-align: center;
            width: 26px;
        }

        .shop-cart .qty, .shop-cart input.qtyplus, .shop-cart input.qtyminus {
            background: #222;
            border: 0;
            outline: none;
        }

        .shop-cart input.qtyplus, .shop-cart input.qtyminus {
            font-size: 15px;
        }

        /* Checkout Page */
        section.shop-checkout {
            padding: 90px 0 60px;
        }

        .shop-checkout h3 {
            color: #fff;
            text-transform: uppercase;
            margin-bottom: 25px;
        }

        .shop-checkout .form-group {
            margin-bottom: 30px;
        }

        .shop-checkout textarea {
            height: 150px;
            padding: 15px 20px;
        }

        .shop-checkout select {
            color: #666;
            outline: none;
        }

        .shop-checkout select:focus {
            outline: none;
            box-shadow: none;
            border: 0;
        }

        .shop-checkout .checkout table.products thead tr {
            background: #222;
        }

        .shop-checkout .checkout table.products th.with-bg {
            background: #222;
        }

        .shop-checkout .checkout table.products td.text-price {
            color: #fff;
        }

        .shop-checkout .checkout table.products td.text-price.big-price {
            font-size: 20px;
            font-weight: 800;
        }

        .products > thead > tr > th,
        .products > thead > tr > td,
        .products > tbody > tr > th,
        .products > tbody > tr > td,
        .products > tfoot > tr > th,
        .products > tfoot > tr > td {
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 15px;
            padding-right: 15px;
            line-height: 1.66667;
            vertical-align: middle;
            border-top: 1px solid;
        }

        .shop-checkout .checkout .payment .cheque,
        .shop-checkout .checkout .payment .paypal {
            background: #222;
            padding: 30px;
            margin-bottom: 30px;
        }

        .shop-checkout .checkout .payment .cheque {
            margin-bottom: 1px;
        }

        .shop-checkout .checkout .payment .radio {
            display: inline-block;
            margin-right: 15px;
        }

        .shop-checkout .checkout .payment .payment-cards {
            margin-top: 10px;
            padding-bottom: 15px;
        }

        .shop-checkout .checkout .payment .payment-cards img {
            margin: 0 5px 5px 0;
        }

        .tooltip.top .tooltip-inner {
            padding: 20px;
            width: 290px;
            min-width: 290px;
            line-height: 19px;
            text-align: left;
        }

        .checkbox input[type=checkbox], .shop-checkout .checkout .payment input[type=radio] {
            margin-top: 8px;
        }

        /*** Latest Posts ***/

        .latest-posts-content {
            margin-top: 30px;
        }

        .latest-post .post-title {
            font-size: 18px;
            position: relative;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .latest-post .post-title a {
            color: #fff;
            transition: .1s;
        }

        .latest-post a.btn {
            margin: 15px 0;
        }

        .latest-post a img {
            opacity: .9;
            transition: .1s;
        }

        .latest-post a:hover img {
            opacity: 1;
        }

        .latest-post .post-date {
            width: 50px;
            height: 57px;
            background: #1d1d1d;
            position: absolute;
            top: 0;
            text-align: center;
            padding-top: 1px;
        }

        .latest-post .post-date span {
            display: block;
            color: #fff;
        }

        .latest-post .post-date span:first-child {
            font-weight: 600;
            font-size: 16px;
        }

        .latest-post .post-date span:nth-child(2) {
            font-size: 12px;
        }

        /*** Call To Action ***/

        .call-action-all {
            padding: 0;
            position: relative;
            background: url('../images/backgrounds/call-to-action-bg.jpg');
            background-size: cover;
            background-position: center center;
        }

        .call-action-all:after,.call-action-all:before {
            content: '';
            position: absolute;
            bottom: 0;
            width: 50%;
            z-index: 100;
            border-bottom: 30px solid #0c0c0c;
            -moz-transform: rotate(0.000001deg);
            -webkit-transform: rotate(0.000001deg);
            -o-transform: rotate(0.000001deg);
            -ms-transform: rotate(0.000001deg);
            transform: rotate(0.000001deg);
        }

        .call-action-all:before {
            right: 50%;
            border-right: 125px solid transparent;
        }

        .call-action-all:after {
            left: 50%;
            border-left: 125px solid transparent;
        }

        .call-action-all .call-action-all-overlay {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 60px 0 95px;
        }

        .action-text {
            text-align: center;
        }

        .action-text h2 {
            margin: 15px 0 23px;
            font-size: 30px;
            color: #fff;
            font-weight: 800;
            text-transform: uppercase;
        }

        .action-text p {
            font-size: 21px;
            color: #ddd;
        }

        .call-action-all .action-btn .btn-primary {
            font-size: 16px;
            padding: 13px 25px;
            max-width: 240px;
            margin: 0 auto;
            display: block;
            margin-top: 40px;
            background: transparent;
        }

        .call-action-all .action-btn .btn-primary:hover, .call-action-all .action-btn .btn-primary:active, .call-action-all .action-btn .btn-primary:focus {
            color: #fff;
        }

        /*** Facts ***/

        .facts {
            height: 342px;
            position: relative;
            margin: 75px 0;
        }

        .facts .container {
            background: #222;
            width: 1140px;
            height: 490px;
            margin-top: -135px;
            position: absolute;
            left: 0;
            right: 0;
        }

        .facts .facts-content .heading-facts h5 {
            text-transform: uppercase;
            color: #777;
            font-weight: 800;
        }

        .facts .facts-content .heading-facts h2 {
            text-transform: uppercase;
            color: #fff;
            font-weight: 800;
            font-size: 45px;
            line-height: 45px;
            margin-top: 70px;
        }

        .facts .facts-content .heading-facts p {
            margin-bottom: 70px;
            font-size: 14px;
            text-transform: uppercase;
        }

        .facts h3 {
            margin-top: 0;
            font-size: 40px;
            color: #fff;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .facts h4 {
            margin-bottom: 0;
            font-weight: 700;
            color: #ddd;
            font-size: 14px;
            text-transform: uppercase;
        }

        .facts .facts-content .fact:after {
            content: '';
            position: absolute;
            font-weight: 100;
            top: 0;
            right: -6%;
            height: 73px;
            -webkit-transform: translateX(-50%) skew(-21deg);
            transform: translateX(-50%) skew(-21deg);
            width: 1px;
            background: #444;
        }

        .facts .btn-primary.btn-pricing {
            background: transparent;
            padding: 11px 29px;
        }

        .facts .btn-primary.btn-pricing:hover,.facts .btn-primary.btn-pricing:active,.facts .btn-primary.btn-pricing:focus {
            color: #fff;
        }

        .facts span.or {
            font-style: italic;
            padding: 0 18px;
            font-size: 18px;
            color: #999;
        }

        .facts .buttons {
            margin-top: 80px;
        }

        /*** Sign in & Sign Up ***/

        .auth-page {
            background: #111;
        }
        .user-auth {
            padding: 0;
        }

        .user-auth .logo {
            position: absolute;
            left: 0;
            top: 0;
            z-index: 1;
            margin-left: 30px;
            margin-top: 30px;
        }

        .user-auth .logo img {
            width: 110px;
        }

        .user-auth > div {
            padding: 0;
        }

        .user-auth > div:nth-child(2) {
            height: 100vh;
            background: #111;
        }

        .user-auth > div:nth-child(2) .copyright-text {
            font-size: 12px;
            position: absolute;
            bottom: 0;
            width: 100%;
            margin-bottom:3px;
            opacity: .8;
        }

        .user-auth > div:nth-child(2) .form-container {
            display: table;
            position: absolute;
            height: 100vh;
            width: 100%;
            left: 0;
        }

        .user-auth > div:nth-child(2) .form-container > div {
            display: table-cell;
            vertical-align: middle;
        }

        .user-auth > div:nth-child(2) .form-container form {
            max-width: 450px;
            margin: 0 auto;
        }

        .user-auth > div:nth-child(2) .form-container form .form-group {
            margin: 0 auto;
            margin-bottom: 30px;
        }

        .user-auth > div:nth-child(2) .form-container button {
            width: 100%;
            margin-bottom: 7px;
        }

        .user-auth > div:nth-child(2) .form-container p {
            text-transform: uppercase;
        }

        .user-auth > div:nth-child(2) .form-container p.info-form {
            margin-bottom: 30px;
            font-size: 14px;
        }

        .user-auth > div:nth-child(2) .form-container .form-group p {
            font-size: 12px;
        }

        .user-auth > div:nth-child(2) .form-container .form-group a:hover {
            opacity: .9;
        }

        /*** Warning Carousel ***/

        #carousel-testimonials .item {
            height: 100vh;
            color: #fff;
            -webkit-background-size: cover;
            background-position: center center;
            background-size: cover;
            -webkit-backface-visibility: hidden;
            background-attachment: initial;
        }

        #carousel-testimonials .item.item-1 {
            background-image: url('../images/backgrounds/bg-user.jpg');
        }

        #carousel-testimonials .item.item-2 {
            background-image: url('../images/backgrounds/bg-user-2.jpg');
        }

        #carousel-testimonials .item.item-3 {
            background-image: url('../images/backgrounds/bg-user-3.jpg');
        }

        #carousel-testimonials .carousel-control {
            display: none;
        }

        #carousel-testimonials .item > div {
            position: absolute;
            bottom: 0;
        }

        #carousel-testimonials .item > div:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: -1;
            height: 480px;
            background-image: -webkit-linear-gradient(91deg,#141516 7%,rgba(43,51,65,0) 100%);
            background-image: linear-gradient(-1deg,#141516 7%,rgba(43,51,65,0) 100%);
        }

        #carousel-testimonials blockquote {
            border-left: 0;
            padding: 10px 30px;
        }

        #carousel-testimonials blockquote p {
            position: relative;
            margin-bottom: 40px;
            font-size: 17px;
            font-style: italic;
            color: #FFF;
            line-height: 31px;
            opacity: .8;
        }

        #carousel-testimonials blockquote footer {
            font-size: 12px;
            text-transform: uppercase;
        }

        #carousel-testimonials blockquote footer span {
            color: #eee;
        }

        #carousel-testimonials .carousel-indicators {
            text-align: right;
            width: 100%;
            left: 0;
            margin-left: 0;
            padding-right: 30px;
            margin-bottom: 5px;
        }

        #carousel-testimonials .carousel-indicators li {
            display: inline-block;
            background-color: rgba(255,255,255,.5);
            border: 0;
            margin-right: 13px;
        }

        #carousel-testimonials .carousel-indicators li:last-child {
            margin-right: 0;
        }

        #carousel-testimonials .carousel-indicators li:hover {
            background-color: rgba(255,255,255,.8);
        }

        /*** Error Page ***/
        body.error-page .error {
            height: 100vh;
            background-image: url('../images/backgrounds/404.jpg');
            background-size: cover;
            background-position: center center;
            padding: 0;
        }

        body.error-page.server-error-page .error {
            background-image: url('../images/backgrounds/503.jpg');
        }

        body.error-page .error .logo {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
        }

        body.error-page .logo img {
            margin: 0 auto;
            padding-top: 30px;
        }

        body.error-page .error > div {
            display: table;
            position: absolute;
            height: 100vh;
            width: 100%;
            left: 0;
            background: rgba(17,17,17,.9);
        }

        body.error-page .error > div > div {
            display: table-cell;
            vertical-align: middle;
        }

        body.error-page .error h3 {
            font-size: 36px;
            line-height: 36px;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        body.error-page .error .big-404 {
            font-size: 220px;
            line-height: 220px;
            color: #999;
            font-weight: 300;
            margin-top: 70px;
        }

        body.error-page .error p {
            color: #999;
            font-size: 15px;
            padding: 20px 0;
            text-transform: uppercase;
            margin: 0 auto;
            max-width: 530px;
        }

        body.error-page .error a.btn {
            margin-bottom: 25px;
        }

        body.error-page .error a.refresh {
            text-transform: uppercase;
            padding-bottom: 40px;
            font-weight: 600;
        }

        body.error-page .error a.refresh:hover {
            opacity: .9;
        }

        /*** Coming Soon Page ***/

        body.error-page.coming-soon .error {
            background-image: url('../images/backgrounds/coming-soon.jpg');
        }

        body.error-page.coming-soon .coming-soon-title {
            margin-top:70px;
        }
        .countdown {
            margin: 10px 0 40px;
        }

        .countdown-section {
            display: inline-block;
            font-size: 17px;
            line-height: 1;
            text-align: center;
            color: #888;
            text-transform: capitalize;
            padding: 0 20px;
        }

        .countdown-amount {
            display: block;
            font-size: 45px;
            margin-bottom: 5px;
        }

        /*** FAQ Panels ***/
        section.faq {
            padding: 90px 0 60px;
        }

        .panel-group {
            margin-bottom: 80px;
        }

        .panel-default>.panel-heading {
            background: none;
            border-radius: 0;
            position: relative;
            padding: 15px;
        }

        .panel-group .panel {
            border-radius: 0;
            margin-bottom: -6px;
        }

        .panel.panel-default {
            background: transparent;
            border-color: #222;
            box-shadow: none;
        }

        .panel-default>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #222;
        }

        h4.panel-title {
            font-size: 17px;
            background: none;
            border: 0;
            padding: 8px 0 8px 30px;
            line-height: normal;
            border-radius: 0;
            text-transform: uppercase;
        }

        h4.panel-title a.collapsed {
            color: #fff;
        }

        h4.panel-title span {
            float: right;
        }

        h4.panel-title a:before,
        h4.panel-title a.collapsed:before {
            font-family: "FontAwesome";
            position: absolute;
            z-index: 0;
            font-size: 12px;
            left: 15px;
            padding: 0 5px;
            text-align: center;
            top: 50%;
            margin-top: -7px;
        }

        h4.panel-title a:before {
            content: "\f106";
        }

        h4.panel-title a.collapsed:before {
            content: "\f107";
        }

        .panel-body ul {
            padding-left: 25px;
        }

        /* [ FOOTER ] */
        /*================================================== */

        .footer {
            background: #0c0c0c;
        }

        .footer .top-footer {
            padding: 45px 0 50px;
        }

        .footer .top-footer h4 {
            text-transform: uppercase;
            margin-top: 0;
            font-size: 16px;
            margin-bottom: 15px;
        }

        /*** Menu ***/

        .footer .top-footer ul {
            padding: 0;
        }

        .footer .top-footer .menu ul {
            list-style-type: none;
        }

        .footer .top-footer .menu ul li {
            margin-bottom: 5px;
        }

        .footer .top-footer .menu ul li a {
            text-transform: uppercase;
            color: #999;
            font-size: 13px;
            font-weight: 600;
            font-family: 'Open Sans', sans-serif;
            transition: .1s;
        }

        .footer .top-footer .menu ul li a:hover {
            color: #fff;
        }

        .top-footer .contacts > div {
            padding-bottom: 12px;
            font-size: 13px;
            font-family: 'Open Sans', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
        }

        /*** Social Icons ***/

        .footer .top-footer .social-footer {
            margin: 0 0 12px;
        }

        .footer .top-footer .social-footer ul {
            list-style-type: none;
        }

        .footer .top-footer .social-footer ul li {
            display: inline-block;
            margin: 0 3px;
        }

        .footer .top-footer .social-footer ul li:first-child {
            margin-left: 0;
        }

        .footer .top-footer .social-footer ul li a {
            display: block;
            color: #ccc;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            font-size: 13px;
            line-height: 28px;
            text-align: center;
            background: #1d1d1d;
            transition: .1s;
        }

        .footer .top-footer .social-footer ul li a:hover {
            color: #fff;
        }

        .footer .social-footer ul li a:hover {
            color: #fff;
        }

        .social {
            list-style-type: none;
            margin: 0 auto;
            display: table;
            padding: 0;
            margin-top: 8px;
        }

        .social li a {
            color: #111;
            font-size: 16px;
        }

        .social li a i {
            padding: 0 2px;
        }

        .facts-footer > div {
            width: 49%;
            display: inline-block;
        }

        .facts-footer > div:first-child h5, .facts-footer > div:nth-child(2) h5 {
            margin-top: 0;
        }

        .facts-footer > div h5 {
            font-size: 23px;
            font-weight: 800;
            margin: 15px 0 0;
        }

        .facts-footer > div span {
            text-transform: uppercase;
            font-size: 12px;
            color: #999;
        }

        /*** Copyright Bar ***/

        .footer .bottom-footer p {
            margin: 0;
            font-size: 13px;
            border-top: 1px solid #222;
            padding: 13px 0;
        }

        .footer .bottom-footer p a {
            color: #999;
        }

        .footer .bottom-footer p a:hover {
            color: #fff;
        }

        .footer hr {
            background-color: #1d1d1d;
            border: 0;
            height: 1px;
            margin: 25px 0 18px;
        }

        .footer .top-footer h4.payment-title {
            color: #999;
            font-size: 14px;
            font-family: 'Open Sans', sans-serif;
            margin-bottom: 5px;
        }

        .payment-logos img {
            width: 30px;
            margin-right: 5px;
        }

        .payment-logos img.last {
            margin-right: 0;
        }

        /* [ RESPONSIVE DESIGN STYLES ] */
        /*================================================== */

        /*** Only Wide Screens ***/

        @media(min-width:1600px) {
            .img-block-left {
                padding-left: 285px;
            }
        }

        /*** Large Devices, Wide Screens ***/

        @media (min-width : 1200px) {
            ul.navbar-nav > li.visible-md.visible-lg {
                display: inline-block !important;
            }
        }

        /*** Devices Width 767px and Up ***/

        @media (min-width:767px) {
            ul.nav li.dropdown:hover ul.dropdown-menu {
                display: block;
            }
        }

        /*** Only Medium Devices, Desktops ***/

        @media (max-width:1200px) and (min-width:992px) {
            ul.user li.sign-in {
                padding-right: 15px;
            }

            ul.user li.sign-in a {
                padding: 11px 13px;
            }

            ul.user li a {
                font-size: 12px;
            }

            ul.user li.sign-up a {
                padding: 12px 18px;
            }
        }

        /* Medium Devices, Desktops */

        @media (max-width:1200px) {
            .bitcoin-calculator-section .container, .facts .container {
                width: 940px;
            }

            ul.navbar-nav > li.visible-md.visible-lg {
                display: inline-block !important;
            }

            ul.bitcoin-stats li {
                padding-right: 18px;
            }

            .latest-post .post-title {
                margin-bottom: 5px;
            }

            .site-search {
                top: 49px;
            }

            .slider-text {
                position: relative;
                z-index: 1;
            }

            .slider-img {
                top: -95px;
            }

            .img-block-left.ts-padding {
                padding: 40px;
            }
        }

        /* Small Devices, Tablets */

        @media (max-width: 992px) {

            .bitcoin-calculator-section .container, .facts .container {
                width: 720px;
            }

            .facts {
                height: 445px;
            }

            .facts .container {
                height: 600px;
            }

            .facts .facts-content .fact.fact-clear:after {
                display: none;
            }

            body.blog article {
                padding: 0;
            }

            .facts-footer {
                margin-top: 15px;
            }

            .main-logo a img {
                margin: 0 auto;
            }

            ul.user {
                text-align: center;
                padding: 15px 0 22px;
            }

            .banner-area .banner-overlay {
                padding: 50px 0;
            }

            .features-row {
                padding-bottom: 10px;
            }

            .bg-image-1 {
                height: 225px;
            }

            .dropdown-menu li a {
                font-size: 12px;
            }

            .img-about-us {
                padding-bottom: 60px;
            }

            .pricing-list > li {
                margin-bottom: 30px;
            }

            .bg-image-2 {
                height: inherit;
                padding: 60px;
            }

            .call-action-all .action-btn {
                float: none;
                text-align: center;
            }

            .action-text {
                text-align: center;
                float: none;
            }

            .action-text h2 {
                font-size: 28px;
            }

            .action-text p {
                font-size: 18px;
            }

            .call-action-all .action-btn .btn-primary {
                font-size: 14px;
                padding: 12px 25px;
                min-height: 40px;
                float: none;
            }

            #main-slide .item {
                min-height: 450px;
            }

            #main-slide .slider-content {
                margin-top: -115px;
            }

            #main-slide .slider-content h3 {
                font-size: 40px;
                margin: 10px 0;
                line-height: 50px;
            }

            .slider.btn {
                padding: 10px 26px;
                margin-top: 10px;
            }

            #main-slide .carousel-indicators {
                bottom: 20px;
            }

            footer .about-text {
                margin-bottom: 25px;
            }

            .feature-box {
                clear: both;
                margin-bottom: 40px;
            }

            .call-to-action {
                background-position: 50% 50%;
            }

            .img-block-left {
                padding-left: 100px;
            }

            .img-block-quote {
                padding: 100px;
            }

            .latest-post {
                clear: both;
                margin-bottom: 50px;
            }

            section.blog {
                padding-bottom: 20px;
            }

            ul.pagination {
                margin: 20px 0;
            }

            .footer .top-footer {
                padding: 60px 0 25px;
            }
        }

        /*** Only Small Devices ***/

        @media (max-width: 992px) and (min-width:768px) {

            .main-logo {
                float: none;
                padding-bottom: 0;
            }

            ul.navbar-nav > li > a {
                padding: 16px 14px;
            }

            ul.bitcoin-stats {
                padding-top: 22px;
            }

            .bitcoin-calculator .form-input {
                width: 215px;
            }

            .team-member .team-member-caption h4 {
                font-size: 15px;
                margin: 25px 0 16px;
            }

            .team-member-caption p {
                font-size: 13px;
                padding: 0 0 14px;
            }

            .social-icons a {
                width: 30px;
                height: 30px;
                line-height: 27px;
                margin-left: 5px;
                margin-right: 5px;
            }

            .team ul.social li a:before, .team ul.social li a:hover:before {
                font-size: 12px !important;
            }

            .img-block-quote {
                padding: 40px 100px 10px;
            }

            .facts .facts-content .fact:after {
                right: 1%;
            }

            .shop-checkout .table {
                margin-bottom:30px;
            }
        }

        @media (max-width : 992px) and (min-width:570px) {
            .facts .facts-content .fact:first-child, .facts .facts-content .fact.fact-clear {
                margin-bottom: 50px;
            }
        }
        /* Small Devices Potrait */


        @media (max-width : 767px) {

            ul.nav.nav-tabs li a, ul.nav.nav-tabs li.active a {
                padding: 0 20px;
            }

            ul.nav.nav-tabs li:first-child a {
                padding-left: 0;
            }

            .feature-title {
                margin-top: 20px;
            }

            .gap-20-mobile {
                clear: both;
                height: 20px;
            }

            .bitcoin-calculator .form-equal {
                display: block;
                padding: 20px 0;
                margin: 0 auto;
                font-size: 25px;
            }

            .bitcoin-calculator-section {
                height: 340px;
            }

            .facts .container {
                width: 510px;
            }

            .bitcoin-calculator-section .container {
                height: 480px;
                max-width: 510px;
            }

            .bitcoin-calculator .form-info {
                width: 95px;
            }

            .bitcoin-calculator .form-input {
                width: calc(100% - 125px);
            }

            .site-nav-inner {
                position: relative;
            }

            .site-nav-inner:before {
                border: 0;
            }

            .site-nav-inner:after {
                background: none;
            }

            .navbar-collapse ul.navbar-nav > li > a {
                color: #fff;
            }

            .navbar-collapse ul.navbar-nav > li.active > a,
            .navbar-collapse ul.navbar-nav > li:hover > a {
                color: #fff;
            }

            body.light .navbar-collapse ul.navbar-nav > li:hover > a {
                color: #333;
            }

            ul.navbar-nav > li {
                display: block;
            }

            ul.navbar-nav > li.search {
                display: none;
            }

            ul.navbar-nav > li > a {
                padding: 18px 0;
                font-size: 16px;
            }

            ul.navbar-nav > li:after {
                background: none;
            }

            ul.navbar-nav > li:hover > a:after,
            ul.navbar-nav > li.active > a:after {
                background: none;
            }

            .navbar-nav .open .dropdown-menu>li>a, body.light .navbar-nav .open .dropdown-menu>li>a {
                line-height: 30px;
                text-align: center;
                border-bottom: 0;
            }

            .logo-mobile {
                display: inline-block;
                float: left;
            }

            .logo-mobile img {
                height: 34px;
                margin-top: 8px;
            }

            .navbar-collapse {
                width: 100%;
                box-shadow: none;
            }

            ul.navbar-nav > li:not(.search):hover, ul.navbar-nav > li.active, ul.navbar-nav > li.dropdown.open {
                background: transparent;
            }

            #main-slide .item {
                min-height: 400px;
            }

            #main-slide .slider-content {
                margin-top: -165px;
            }

            #main-slide .slider-content h3 {
                font-size: 26px;
                margin: 30px 0;
                line-height: 36px;
            }

            .mobile-logo {
                margin: 0 auto;
                margin-top: 70px;
            }

            .user-auth > div:nth-child(2) {
                height: auto;
            }

            .user-auth > div:nth-child(2) .form-container {
                display: block;
                padding: 15px;
                position: relative;
                height: auto;
            }

            .user-auth > div:nth-child(2) .form-container > div {
                display: block;
            }

            .user-auth > div:nth-child(2) .form-container p.info-form {
                margin: 8px 15px 30px 15px;
            }

            .user-auth > div:nth-child(2) .form-container .form-group {
                margin-bottom: 15px;
            }

            .user-auth > div:nth-child(2) .form-container .form-group p {
                margin-bottom: 40px;
            }

            .slider-text {
                z-index: 1;
                position: relative;
            }

            .slider-text .slide-head:after {
                height: 3px;
                bottom: 0;
            }

            .slider.btn {
                padding: 12px 22px;
                margin-top: 0;
                font-size: 12px;
            }

            #main-slide .carousel-indicators {
                bottom: 20px;
            }

            .feature-box .feature-icon {
                float: none;
                margin-bottom: 30px;
            }

            .feature-box .feature-box-content {
                margin-left: 0;
                margin-bottom: 30px;
            }

            .features.text-center .feature-box {
                margin-bottom: 70px;
            }

            .action-btn .btn-primary {
                font-size: 20px;
                min-height: 54px;
                padding-right: 30px;
            }

            .action-btn .btn-primary i {
                height: 54px;
                line-height: 54px;
            }

            .call-to-action {
                background-position: 50% 50%;
            }

            .img-block-left {
                padding-left: 30px;
            }

            .img-block-quote {
                padding: 100px 30px;
            }

            .latest-post {
                clear: both;
                margin-bottom: 50px;
            }

            .team-member {
                margin-bottom: 30px;
            }

            .bg-image-2 {
                padding: 15px;
            }

            .widget {
                padding: 15px;
                margin-bottom: 15px;
            }

            blockquote {
                padding: 30px 0;
                max-width: 540px;
                margin-top: 70px;
            }

            .container {
                max-width: 540px;
            }

            .title-head-subtitle p {
                margin-left: 15px;
                margin-right: 15px;
            }

            .title-head-subtitle p:before,.title-head-subtitle p:after {
                display: none;
            }

            .site-navigation {
                padding: 6px 0;
                position: fixed;
                top: 0;
                background: #111;
                width: 100%;
                border-bottom: 1px solid #222;
                z-index: 1111;
            }

            ul.navbar-nav {
                padding: 30px 0 50px;
            }

            .site-navigation.fixed ul.navbar-nav {
                position: relative;
                margin-left: 0;
                margin-right: 0;
                border: 0;
            }

            body.light .site-navigation {
                background: #e7e7e7;
                border-bottom: 1px solid #ddd;
            }

            .header {
                margin-top: 63px;
            }

            section.blog {
                padding-bottom: 10px;
            }

            .footer .menu ul li {
                width: 49%;
                display: inline-block;
                position: relative;
            }

            .footer .bottom-footer p {
                text-align: center;
            }

            .footer .payment-logos {
                float: none;
                text-align: center;
            }

            .facts-footer {
                margin-top: 25px;
            }

            .payment-logos img {
                float: none;
            }

            body.error-page .error {
                height: auto;
            }

            body.error-page .error > div {
                display: block;
                position: relative;
                height: auto;
            }

            body.error-page .error > div > div {
                height: 100vh;
                margin: 0 auto;
                display: block;
                overflow-y: auto;
                max-width: 490px;
            }

            body.error-page .error .big-404 {
                font-size: 150px;
                line-height: 150px;
                margin-top: 0;
            }

            body.error-page .error .logo {
                position: relative;
            }

            body.error-page .logo img {
                padding-top: 70px;
                padding-bottom: 35px;
            }

            body.error-page .error p, body.error-page h3 {
                margin-left: 15px;
                margin-right: 15px;
            }

            body.blog article h4 {
                font-size: 20px;
                line-height: 25px;
            }

            .sidebar ul.nav.nav-tabs li a {
                padding-left: 0;
            }

            .banner-area .title-head.banner-post-title {
                font-size: 20px;
                line-height: 25px;
            }

            .comments-list .comment-body {
                margin-left: 0;
            }

            .comments-list .comment-content {
                margin: 70px 0 15px;
            }

            .comments-list .comment-date {
                float: left !important;
            }

            .comments-reply {
                margin: 0;
            }

            .comments-list .comment {
                margin-bottom: 15px;
                padding: 15px;
            }

            .shop-cart .table-responsive {
                border: 0;
            }

            .shop-cart .table-responsive {
                border: 0;
            }

            .shop-cart .form-control {
                max-width: initial;
                width: 39%;
            }

            .shop-cart button {
                width: calc(61% - 15px);
                margin: 0;
            }

            .shop-cart .btn.btn-update-cart {
                width: 100%;
                margin-top: 15px;
            }

            .shop-cart .btn.btn-proceed {
                width: 100%;
            }

            .shop-cart .table-responsive .table.order colgroup {
                width: auto;
            }

            .shop-cart .table-responsive .table.order colgroup col {
                padding-left: 5px;
                padding-right: 5px;
            }

            .shop-cart .table-responsive .table.order tr td, .shop-cart .table-responsive .table.order tr th {
                padding-left: 5px;
                padding-right: 5px;
                white-space: normal;
            }

            .shop-cart .table-responsive .table.order tr td h6, .shop-cart .table-responsive .table.order tr th h6 {
                font-size: 12px;
            }

            .shop-cart .table-responsive .table.order tr td .price, .shop-cart .table-responsive .table.order tr th .price {
                font-size: 11px;
            }

            .shop-cart .table-responsive .table.order tr td .quantity, .shop-cart .table-responsive .table.order tr th .quantity {
                padding-top: 4px;
                padding-bottom: 4px;
            }

            .shop-cart .table-responsive .table.order tr th {
                font-size: 12px;
            }

            .shop-checkout .form-group ,.shop-checkout .checkout .payment .paypal,  .shop-checkout .table, .contact-form .form-group {
                margin-bottom:15px;
            }

            body.light .dropdown-menu li.active a {
                background:none;
            }

            .btn.btn-primary.btn-order {
                width: 100%;
            }

            .features-row {
                padding: 45px 0 0 0;
            }

            .feature-box {
                text-align: center;
            }

            .feature-box .feature-icon {
                margin-bottom: 0;
            }

            .feature-box .feature-box-content h3 {
                margin: 15px 0 10px;
            }

            .facts {
                height: 805px;
            }

            .facts .facts-content .fact:after {
                display: none;
            }

            .facts .container {
                width: 100%;
                height: 965px;
                position: relative;
                padding: 0 15px;
            }

            .facts h3 {
                font-size: 34px;
            }

            .facts .buttons .btn {
                width: 100%;
            }

            .facts .buttons .btn.btn-register {
                margin-top: 18px;
            }

            .facts .btn-primary.btn-pricing {
                margin-bottom: 15px;
            }

            .facts-content .heading-facts p {
                padding: 0 15px;
                margin-bottom: 50px;
            }

            .facts .fact {
                margin-bottom: 35px;
            }
            body.error-page.coming-soon .coming-soon-title {
                margin-top:30px;
            }
        }

        @media (max-width : 767px) and (min-width:571px) {
            .btcwdgt-headlines.btcwdgt-clean {
                max-width: 510px !important;
            }

            blockquote {
                max-width: 510px;
                margin: 0 auto;
                margin-top: 80px;
                margin-bottom: 35px;
                right: 0;
                left: initial;
            }

            section.team {
                padding: 60px 0 40px;
            }

            .bitcoin-calculator-section h2 {
                font-size: 40px;
            }

            .bitcoin-calculator-section p.message {
                font-size: 14px;
            }
        }

        @media (max-width : 570px) {
            .bitcoin-calculator-section {
                height: inherit;
                padding-bottom: 0;
                margin-bottom: 0;
                background: none;
            }

            .bitcoin-calculator-section:before {
                display: none;
            }

            .bitcoin-calculator-section .container {
                width: 100%;
                height: inherit;
                position: relative;
                padding-bottom: 50px;
            }

            .facts {
                height: auto;
                background: #222;
                margin: 75px 0 0;
            }

            .facts .facts-content .fact:after {
                display: none;
            }

            .facts .container {
                width: 100%;
                height: auto;
                position: relative;
                padding: 0 15px;
            }

            .chart-widget {
                display: block;
                margin: 70px 0;
                left: 0 !important;
                position: relative;
            }

            .chart-widget > div {
                display: block;
            }

            .bg-grey-chart {
                height: inherit;
            }

            .pricing-list > li {
                margin-bottom: 15px;
            }

            ul.nav.nav-tabs {
                border: 1px solid #444;
                margin: 20px 0 15px;
            }

            .sidebar ul.nav.nav-tabs {
                border: 0;
            }

            body.light ul.nav.nav-tabs {
                border: 1px solid #ddd;
            }
            body.light .widget ul.nav.nav-tabs {
                border: 0;
            }

            .nav-tabs>li {
                float: none;
                text-align: center;
                border-bottom: 1px solid #444;
            }

            body.light .nav-tabs>li {
                border-bottom: 1px solid #ddd;
            }

            ul.nav.nav-tabs li a, ul.nav.nav-tabs li.active a {
                border-left: 0;
                padding: 12px 0;
                margin: 0;
            }

            .about-content ul.nav.nav-tabs li.active a:hover, .about-content  ul.nav.nav-tabs li.active a {
                color: #fff;
            }

            ul.user {
                padding: 15px 0;
            }

            ul.user li.sign-in, ul.user li.sign-up {
                width: 50%;
            }

            ul.user li.sign-in {
                padding-left: 0;
                padding-right: 7px;
                float: left;
            }

            ul.user li.sign-up {
                padding-right: 0;
                padding-left: 7px;
            }

            ul.user li.sign-in a, ul.user li.sign-up a {
                width: 100%;
            }

            .team-members > div {
                width: 100%;
            }

            .team-member {
                margin-bottom: 15px;
            }

            .pricing-list > li {
                float: none;
                width: 100%;
            }

            .back-to-top {
                bottom: 15px;
            }

            .show-back-to-top {
                right: 15px;
            }

            .bitcoin-calculator .form-input {
                width: calc(100% - 93px);
            }

            .call-action-all .action-btn .btn-primary {
                max-width: initial;
            }

            .service-box > div {
                padding: 40px 15px;
                margin-bottom: 15px;
            }

            .service-box img {
                float: none;
                margin: 0 auto;
                display: block;
            }

            .service-box .service-box-content {
                padding-left: 0;
                text-align: center;
            }

            .service-box h3 {
                margin: 15px 0 10px;
            }

            .pricing-footer {
                padding: 30px 0 15px;
            }

            .pricing-footer a {
                margin: 0 15px;
            }

            .sidebar ul.nav.nav-tabs li a {
                padding: 0;
            }

            .user-auth > div:nth-child(2) .form-container form .form-group {
                margin-bottom: 15px;
            }
        }
        /* Extra Small Devices, Phones */
        @media (max-width : 480px) {

            ul.bitcoin-stats {
                display: none;
            }

            #main-slide .item {
                min-height: 320px;
            }

            .countdown-section {
                font-size: 16px;
                padding: 0 10px;
            }

            .countdown-amount {
                font-size: 28px;
            }
        }
    </style>

</head>

<body class="error-page coming-soon">
<!-- SVG Preloader Starts -->
<div id="preloader">
    <div id="preloader-content">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="150px" height="150px" viewBox="100 100 400 400" xml:space="preserve">
                <filter id="dropshadow" height="130%">
                    <feGaussianBlur in="SourceAlpha" stdDeviation="5"/>
                    <feOffset dx="0" dy="0" result="offsetblur"/>
                    <feFlood flood-color="red"/>
                    <feComposite in2="offsetblur" operator="in"/>
                    <feMerge>
                        <feMergeNode/>
                        <feMergeNode in="SourceGraphic"/>
                    </feMerge>
                </filter>
            <path class="path" fill="#000000" d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068
                    c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073
                    l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23
                    c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188
                    c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995
                    l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984
                    C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404
                    C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489
                    C327.767,212.14,389.234,221.02,379.302,260.846z"/>
            </svg>
    </div>
</div>
<!-- SVG Preloader Ends -->
<!-- Wrapper Starts -->
<div class="wrapper">
    <div class="container-fluid error">
        <div>
            <div class="text-center">
                <!-- Logo Starts -->
                <a class="logo" href="index.html">
                    <img class="img-responsive" src="images/logo.png" alt="logo">
                </a>
                <!-- Logo Ends -->
                <!-- Coming Soon Content Starts -->
                <h3 class="coming-soon-title">our new website is coming soon !</h3>
                <p>we're making new awesome features! we will be online in just :</p>
                <div class="countdown" id="countdown"></div>
                <!-- Coming Soon Content Ends -->

                <div class="coming-soon-video col-md-6 col-md-offset-3">
                    <video controls class="col-md-12">
                        <source src="{{ asset('build/frontAsset/video.mp4') }}" type="video/mp4">
                        Error Message
                    </video>
                </div>

            </div>
        </div>
    </div>
    <!-- Template JS Files -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script>
        !function(){"use strict";var a=!1;window.JQClass=function(){},JQClass.classes={},JQClass.extend=function b(c){function d(){!a&&this._init&&this._init.apply(this,arguments)}var e=this.prototype;a=!0;var f=new this;a=!1;for(var g in c)if("function"==typeof c[g]&&"function"==typeof e[g])f[g]=function(a,b){return function(){var c=this._super;this._super=function(b){return e[a].apply(this,b||[])};var d=b.apply(this,arguments);return this._super=c,d}}(g,c[g]);else if("object"==typeof c[g]&&"object"==typeof e[g]&&"defaultOptions"===g){var h,i=e[g],j=c[g],k={};for(h in i)k[h]=i[h];for(h in j)k[h]=j[h];f[g]=k}else f[g]=c[g];return d.prototype=f,d.prototype.constructor=d,d.extend=b,d}}(),/*! Abstract base class for collection plugins v1.0.2.
	Written by Keith Wood (wood.keith{at}optusnet.com.au) December 2013.
	Licensed under the MIT license (http://keith-wood.name/licence.html). */
            function($){"use strict";function camelCase(a){return a.replace(/-([a-z])/g,function(a,b){return b.toUpperCase()})}JQClass.classes.JQPlugin=JQClass.extend({name:"plugin",defaultOptions:{},regionalOptions:{},deepMerge:!0,_getMarker:function(){return"is-"+this.name},_init:function(){$.extend(this.defaultOptions,this.regionalOptions&&this.regionalOptions[""]||{});var a=camelCase(this.name);$[a]=this,$.fn[a]=function(b){var c=Array.prototype.slice.call(arguments,1),d=this,e=this;return this.each(function(){if("string"==typeof b){if("_"===b[0]||!$[a][b])throw"Unknown method: "+b;var f=$[a][b].apply($[a],[this].concat(c));if(f!==d&&void 0!==f)return e=f,!1}else $[a]._attach(this,b)}),e}},setDefaults:function(a){$.extend(this.defaultOptions,a||{})},_attach:function(a,b){if(a=$(a),!a.hasClass(this._getMarker())){a.addClass(this._getMarker()),b=$.extend(this.deepMerge,{},this.defaultOptions,this._getMetadata(a),b||{});var c=$.extend({name:this.name,elem:a,options:b},this._instSettings(a,b));a.data(this.name,c),this._postAttach(a,c),this.option(a,b)}},_instSettings:function(a,b){return{}},_postAttach:function(a,b){},_getMetadata:function(elem){try{var data=elem.data(this.name.toLowerCase())||"";data=data.replace(/(\\?)'/g,function(a,b){return b?"'":'"'}).replace(/([a-zA-Z0-9]+):/g,function(a,b,c){var d=data.substring(0,c).match(/"/g);return d&&d.length%2!==0?b+":":'"'+b+'":'}).replace(/\\:/g,":"),data=$.parseJSON("{"+data+"}");for(var key in data)if(data.hasOwnProperty(key)){var value=data[key];"string"==typeof value&&value.match(/^new Date\(([-0-9,\s]*)\)$/)&&(data[key]=eval(value))}return data}catch(a){return{}}},_getInst:function(a){return $(a).data(this.name)||{}},option:function(a,b,c){a=$(a);var d=a.data(this.name),e=b||{};return!b||"string"==typeof b&&"undefined"==typeof c?(e=(d||{}).options,e&&b?e[b]:e):void(a.hasClass(this._getMarker())&&("string"==typeof b&&(e={},e[b]=c),this._optionsChanged(a,d,e),$.extend(d.options,e)))},_optionsChanged:function(a,b,c){},destroy:function(a){a=$(a),a.hasClass(this._getMarker())&&(this._preDestroy(a,this._getInst(a)),a.removeData(this.name).removeClass(this._getMarker()))},_preDestroy:function(a,b){}}),$.JQPlugin={createPlugin:function(a,b){"object"==typeof a&&(b=a,a="JQPlugin"),a=camelCase(a);var c=camelCase(b.name);JQClass.classes[c]=JQClass.classes[a].extend(b),new JQClass.classes[c]}}}(jQuery);
        //# sourceMappingURL=jquery.plugin.min.map

    </script>
    <script>

        !function(a){"use strict";var b="countdown",c=0,d=1,e=2,f=3,g=4,h=5,i=6;a.JQPlugin.createPlugin({name:b,defaultOptions:{until:null,since:null,timezone:null,serverSync:null,format:"dHMS",layout:"",compact:!1,padZeroes:!1,significant:0,description:"",expiryUrl:"",expiryText:"",alwaysExpire:!1,onExpiry:null,onTick:null,tickInterval:1},regionalOptions:{"":{labels:["Years","Months","Weeks","Days","Hours","Minutes","Seconds"],labels1:["Year","Month","Week","Day","Hour","Minute","Second"],compactLabels:["y","m","w","d"],whichLabels:null,digits:["0","1","2","3","4","5","6","7","8","9"],timeSeparator:":",isRTL:!1}},_rtlClass:b+"-rtl",_sectionClass:b+"-section",_amountClass:b+"-amount",_periodClass:b+"-period",_rowClass:b+"-row",_holdingClass:b+"-holding",_showClass:b+"-show",_descrClass:b+"-descr",_timerElems:[],_init:function(){function b(a){var h=a<1e12?e?window.performance.now()+window.performance.timing.navigationStart:d():a||d();h-g>=1e3&&(c._updateElems(),g=h),f(b)}var c=this;this._super(),this._serverSyncs=[];var d="function"==typeof Date.now?Date.now:function(){return(new Date).getTime()},e=window.performance&&"function"==typeof window.performance.now,f=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||null,g=0;!f||a.noRequestAnimationFrame?(a.noRequestAnimationFrame=null,a.countdown._timer=setInterval(function(){c._updateElems()},1e3)):(g=window.animationStartTime||window.webkitAnimationStartTime||window.mozAnimationStartTime||window.oAnimationStartTime||window.msAnimationStartTime||d(),f(b))},UTCDate:function(a,b,c,d,e,f,g,h){"object"==typeof b&&b instanceof Date&&(h=b.getMilliseconds(),g=b.getSeconds(),f=b.getMinutes(),e=b.getHours(),d=b.getDate(),c=b.getMonth(),b=b.getFullYear());var i=new Date;return i.setUTCFullYear(b),i.setUTCDate(1),i.setUTCMonth(c||0),i.setUTCDate(d||1),i.setUTCHours(e||0),i.setUTCMinutes((f||0)-(Math.abs(a)<30?60*a:a)),i.setUTCSeconds(g||0),i.setUTCMilliseconds(h||0),i},periodsToSeconds:function(a){return 31557600*a[0]+2629800*a[1]+604800*a[2]+86400*a[3]+3600*a[4]+60*a[5]+a[6]},resync:function(){var b=this;a("."+this._getMarker()).each(function(){var c=a.data(this,b.name);if(c.options.serverSync){for(var d=null,e=0;e<b._serverSyncs.length;e++)if(b._serverSyncs[e][0]===c.options.serverSync){d=b._serverSyncs[e];break}if(b._eqNull(d[2])){var f=a.isFunction(c.options.serverSync)?c.options.serverSync.apply(this,[]):null;d[2]=(f?(new Date).getTime()-f.getTime():0)-d[1]}c._since&&c._since.setMilliseconds(c._since.getMilliseconds()+d[2]),c._until.setMilliseconds(c._until.getMilliseconds()+d[2])}});for(var c=0;c<b._serverSyncs.length;c++)b._eqNull(b._serverSyncs[c][2])||(b._serverSyncs[c][1]+=b._serverSyncs[c][2],delete b._serverSyncs[c][2])},_instSettings:function(a,b){return{_periods:[0,0,0,0,0,0,0]}},_addElem:function(a){this._hasElem(a)||this._timerElems.push(a)},_hasElem:function(b){return a.inArray(b,this._timerElems)>-1},_removeElem:function(b){this._timerElems=a.map(this._timerElems,function(a){return a===b?null:a})},_updateElems:function(){for(var a=this._timerElems.length-1;a>=0;a--)this._updateCountdown(this._timerElems[a])},_optionsChanged:function(b,c,d){d.layout&&(d.layout=d.layout.replace(/&lt;/g,"<").replace(/&gt;/g,">")),this._resetExtraLabels(c.options,d);var e=c.options.timezone!==d.timezone;a.extend(c.options,d),this._adjustSettings(b,c,!this._eqNull(d.until)||!this._eqNull(d.since)||e);var f=new Date;(c._since&&c._since<f||c._until&&c._until>f)&&this._addElem(b[0]),this._updateCountdown(b,c)},_updateCountdown:function(b,c){if(b=b.jquery?b:a(b),c=c||this._getInst(b)){if(b.html(this._generateHTML(c)).toggleClass(this._rtlClass,c.options.isRTL),"pause"!==c._hold&&a.isFunction(c.options.onTick)){var d="lap"!==c._hold?c._periods:this._calculatePeriods(c,c._show,c.options.significant,new Date);1!==c.options.tickInterval&&this.periodsToSeconds(d)%c.options.tickInterval!==0||c.options.onTick.apply(b[0],[d])}var e="pause"!==c._hold&&(c._since?c._now.getTime()<c._since.getTime():c._now.getTime()>=c._until.getTime());if(e&&!c._expiring){if(c._expiring=!0,this._hasElem(b[0])||c.options.alwaysExpire){if(this._removeElem(b[0]),a.isFunction(c.options.onExpiry)&&c.options.onExpiry.apply(b[0],[]),c.options.expiryText){var f=c.options.layout;c.options.layout=c.options.expiryText,this._updateCountdown(b[0],c),c.options.layout=f}c.options.expiryUrl&&(window.location=c.options.expiryUrl)}c._expiring=!1}else"pause"===c._hold&&this._removeElem(b[0])}},_resetExtraLabels:function(a,b){var c=null;for(c in b)c.match(/[Ll]abels[02-9]|compactLabels1/)&&(a[c]=b[c]);for(c in a)c.match(/[Ll]abels[02-9]|compactLabels1/)&&"undefined"==typeof b[c]&&(a[c]=null)},_eqNull:function(a){return"undefined"==typeof a||null===a},_adjustSettings:function(b,c,d){for(var e=null,f=0;f<this._serverSyncs.length;f++)if(this._serverSyncs[f][0]===c.options.serverSync){e=this._serverSyncs[f][1];break}var g=null,h=null;if(this._eqNull(e)){var i=a.isFunction(c.options.serverSync)?c.options.serverSync.apply(b[0],[]):null;g=new Date,h=i?g.getTime()-i.getTime():0,this._serverSyncs.push([c.options.serverSync,h])}else g=new Date,h=c.options.serverSync?e:0;var j=c.options.timezone;j=this._eqNull(j)?-g.getTimezoneOffset():j,(d||!d&&this._eqNull(c._until)&&this._eqNull(c._since))&&(c._since=c.options.since,this._eqNull(c._since)||(c._since=this.UTCDate(j,this._determineTime(c._since,null)),c._since&&h&&c._since.setMilliseconds(c._since.getMilliseconds()+h)),c._until=this.UTCDate(j,this._determineTime(c.options.until,g)),h&&c._until.setMilliseconds(c._until.getMilliseconds()+h)),c._show=this._determineShow(c)},_preDestroy:function(a,b){this._removeElem(a[0]),a.empty()},pause:function(a){this._hold(a,"pause")},lap:function(a){this._hold(a,"lap")},resume:function(a){this._hold(a,null)},toggle:function(b){var c=a.data(b,this.name)||{};this[c._hold?"resume":"pause"](b)},toggleLap:function(b){var c=a.data(b,this.name)||{};this[c._hold?"resume":"lap"](b)},_hold:function(b,c){var d=a.data(b,this.name);if(d){if("pause"===d._hold&&!c){d._periods=d._savePeriods;var e=d._since?"-":"+";d[d._since?"_since":"_until"]=this._determineTime(e+d._periods[0]+"y"+e+d._periods[1]+"o"+e+d._periods[2]+"w"+e+d._periods[3]+"d"+e+d._periods[4]+"h"+e+d._periods[5]+"m"+e+d._periods[6]+"s"),this._addElem(b)}d._hold=c,d._savePeriods="pause"===c?d._periods:null,a.data(b,this.name,d),this._updateCountdown(b,d)}},getTimes:function(b){var c=a.data(b,this.name);return c?"pause"===c._hold?c._savePeriods:c._hold?this._calculatePeriods(c,c._show,c.options.significant,new Date):c._periods:null},_determineTime:function(a,b){var c=this,d=function(a){var b=new Date;return b.setTime(b.getTime()+1e3*a),b},e=function(a){a=a.toLowerCase();for(var b=new Date,d=b.getFullYear(),e=b.getMonth(),f=b.getDate(),g=b.getHours(),h=b.getMinutes(),i=b.getSeconds(),j=/([+-]?[0-9]+)\s*(s|m|h|d|w|o|y)?/g,k=j.exec(a);k;){switch(k[2]||"s"){case"s":i+=parseInt(k[1],10);break;case"m":h+=parseInt(k[1],10);break;case"h":g+=parseInt(k[1],10);break;case"d":f+=parseInt(k[1],10);break;case"w":f+=7*parseInt(k[1],10);break;case"o":e+=parseInt(k[1],10),f=Math.min(f,c._getDaysInMonth(d,e));break;case"y":d+=parseInt(k[1],10),f=Math.min(f,c._getDaysInMonth(d,e))}k=j.exec(a)}return new Date(d,e,f,g,h,i,0)},f=this._eqNull(a)?b:"string"==typeof a?e(a):"number"==typeof a?d(a):a;return f&&f.setMilliseconds(0),f},_getDaysInMonth:function(a,b){return 32-new Date(a,b,32).getDate()},_normalLabels:function(a){return a},_generateHTML:function(b){var j=this;b._periods=b._hold?b._periods:this._calculatePeriods(b,b._show,b.options.significant,new Date);var k=!1,l=0,m=b.options.significant,n=a.extend({},b._show),o=null;for(o=c;o<=i;o++)k=k||"?"===b._show[o]&&b._periods[o]>0,n[o]="?"!==b._show[o]||k?b._show[o]:null,l+=n[o]?1:0,m-=b._periods[o]>0?1:0;var p=[!1,!1,!1,!1,!1,!1,!1];for(o=i;o>=c;o--)b._show[o]&&(b._periods[o]?p[o]=!0:(p[o]=m>0,m--));var q=b.options.compact?b.options.compactLabels:b.options.labels,r=b.options.whichLabels||this._normalLabels,s=function(a){var c=b.options["compactLabels"+r(b._periods[a])];return n[a]?j._translateDigits(b,b._periods[a])+(c?c[a]:q[a])+" ":""},t=b.options.padZeroes?2:1,u=function(a){var c=b.options["labels"+r(b._periods[a])];return!b.options.significant&&n[a]||b.options.significant&&p[a]?'<span class="'+j._sectionClass+'"><span class="'+j._amountClass+'">'+j._minDigits(b,b._periods[a],t)+'</span><span class="'+j._periodClass+'">'+(c?c[a]:q[a])+"</span></span>":""};return b.options.layout?this._buildLayout(b,n,b.options.layout,b.options.compact,b.options.significant,p):(b.options.compact?'<span class="'+this._rowClass+" "+this._amountClass+(b._hold?" "+this._holdingClass:"")+'">'+s(c)+s(d)+s(e)+s(f)+(n[g]?this._minDigits(b,b._periods[g],2):"")+(n[h]?(n[g]?b.options.timeSeparator:"")+this._minDigits(b,b._periods[h],2):"")+(n[i]?(n[g]||n[h]?b.options.timeSeparator:"")+this._minDigits(b,b._periods[i],2):""):'<span class="'+this._rowClass+" "+this._showClass+(b.options.significant||l)+(b._hold?" "+this._holdingClass:"")+'">'+u(c)+u(d)+u(e)+u(f)+u(g)+u(h)+u(i))+"</span>"+(b.options.description?'<span class="'+this._rowClass+" "+this._descrClass+'">'+b.options.description+"</span>":"")},_buildLayout:function(b,j,k,l,m,n){for(var o=b.options[l?"compactLabels":"labels"],p=b.options.whichLabels||this._normalLabels,q=function(a){return(b.options[(l?"compactLabels":"labels")+p(b._periods[a])]||o)[a]},r=function(a,c){return b.options.digits[Math.floor(a/c)%10]},s={desc:b.options.description,sep:b.options.timeSeparator,yl:q(c),yn:this._minDigits(b,b._periods[c],1),ynn:this._minDigits(b,b._periods[c],2),ynnn:this._minDigits(b,b._periods[c],3),y1:r(b._periods[c],1),y10:r(b._periods[c],10),y100:r(b._periods[c],100),y1000:r(b._periods[c],1e3),ol:q(d),on:this._minDigits(b,b._periods[d],1),onn:this._minDigits(b,b._periods[d],2),onnn:this._minDigits(b,b._periods[d],3),o1:r(b._periods[d],1),o10:r(b._periods[d],10),o100:r(b._periods[d],100),o1000:r(b._periods[d],1e3),wl:q(e),wn:this._minDigits(b,b._periods[e],1),wnn:this._minDigits(b,b._periods[e],2),wnnn:this._minDigits(b,b._periods[e],3),w1:r(b._periods[e],1),w10:r(b._periods[e],10),w100:r(b._periods[e],100),w1000:r(b._periods[e],1e3),dl:q(f),dn:this._minDigits(b,b._periods[f],1),dnn:this._minDigits(b,b._periods[f],2),dnnn:this._minDigits(b,b._periods[f],3),d1:r(b._periods[f],1),d10:r(b._periods[f],10),d100:r(b._periods[f],100),d1000:r(b._periods[f],1e3),hl:q(g),hn:this._minDigits(b,b._periods[g],1),hnn:this._minDigits(b,b._periods[g],2),hnnn:this._minDigits(b,b._periods[g],3),h1:r(b._periods[g],1),h10:r(b._periods[g],10),h100:r(b._periods[g],100),h1000:r(b._periods[g],1e3),ml:q(h),mn:this._minDigits(b,b._periods[h],1),mnn:this._minDigits(b,b._periods[h],2),mnnn:this._minDigits(b,b._periods[h],3),m1:r(b._periods[h],1),m10:r(b._periods[h],10),m100:r(b._periods[h],100),m1000:r(b._periods[h],1e3),sl:q(i),sn:this._minDigits(b,b._periods[i],1),snn:this._minDigits(b,b._periods[i],2),snnn:this._minDigits(b,b._periods[i],3),s1:r(b._periods[i],1),s10:r(b._periods[i],10),s100:r(b._periods[i],100),s1000:r(b._periods[i],1e3)},t=k,u=c;u<=i;u++){var v="yowdhms".charAt(u),w=new RegExp("\\{"+v+"<\\}([\\s\\S]*)\\{"+v+">\\}","g");t=t.replace(w,!m&&j[u]||m&&n[u]?"$1":"")}return a.each(s,function(a,b){var c=new RegExp("\\{"+a+"\\}","g");t=t.replace(c,b)}),t},_minDigits:function(a,b,c){return b=""+b,b.length>=c?this._translateDigits(a,b):(b="0000000000"+b,this._translateDigits(a,b.substr(b.length-c)))},_translateDigits:function(a,b){return(""+b).replace(/[0-9]/g,function(b){return a.options.digits[b]})},_determineShow:function(a){var b=a.options.format,j=[];return j[c]=b.match("y")?"?":b.match("Y")?"!":null,j[d]=b.match("o")?"?":b.match("O")?"!":null,j[e]=b.match("w")?"?":b.match("W")?"!":null,j[f]=b.match("d")?"?":b.match("D")?"!":null,j[g]=b.match("h")?"?":b.match("H")?"!":null,j[h]=b.match("m")?"?":b.match("M")?"!":null,j[i]=b.match("s")?"?":b.match("S")?"!":null,j},_calculatePeriods:function(a,b,j,k){a._now=k,a._now.setMilliseconds(0);var l=new Date(a._now.getTime());a._since?k.getTime()<a._since.getTime()?a._now=k=l:k=a._since:(l.setTime(a._until.getTime()),k.getTime()>a._until.getTime()&&(a._now=k=l));var m=[0,0,0,0,0,0,0];if(b[c]||b[d]){var n=this._getDaysInMonth(k.getFullYear(),k.getMonth()),o=this._getDaysInMonth(l.getFullYear(),l.getMonth()),p=l.getDate()===k.getDate()||l.getDate()>=Math.min(n,o)&&k.getDate()>=Math.min(n,o),q=function(a){return 60*(60*a.getHours()+a.getMinutes())+a.getSeconds()},r=Math.max(0,12*(l.getFullYear()-k.getFullYear())+l.getMonth()-k.getMonth()+(l.getDate()<k.getDate()&&!p||p&&q(l)<q(k)?-1:0));m[c]=b[c]?Math.floor(r/12):0,m[d]=b[d]?r-12*m[c]:0,k=new Date(k.getTime());var s=k.getDate()===n,t=this._getDaysInMonth(k.getFullYear()+m[c],k.getMonth()+m[d]);k.getDate()>t&&k.setDate(t),k.setFullYear(k.getFullYear()+m[c]),k.setMonth(k.getMonth()+m[d]),s&&k.setDate(t)}var u=Math.floor((l.getTime()-k.getTime())/1e3),v=null,w=function(a,c){m[a]=b[a]?Math.floor(u/c):0,u-=m[a]*c};if(w(e,604800),w(f,86400),w(g,3600),w(h,60),w(i,1),u>0&&!a._since){var x=[1,12,4.3482,7,24,60,60],y=i,z=1;for(v=i;v>=c;v--)b[v]&&(m[y]>=z&&(m[y]=0,u=1),u>0&&(m[v]++,u=0,y=v,z=1)),z*=x[v]}if(j)for(v=c;v<=i;v++)j&&m[v]?j--:j||(m[v]=0);return m}})}(jQuery);
        //# sourceMappingURL=jquery.countdown.min.map

    </script>
    <script>

        /*! Magnific Popup - v1.0.0 - 2015-09-17
* http://dimsemenov.com/plugins/magnific-popup/
* Copyright (c) 2015 Dmitry Semenov; */
        !function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):window.jQuery||window.Zepto)}(function(a){var b,c,d,e,f,g,h="Close",i="BeforeClose",j="AfterClose",k="BeforeAppend",l="MarkupParse",m="Open",n="Change",o="mfp",p="."+o,q="mfp-ready",r="mfp-removing",s="mfp-prevent-close",t=function(){},u=!!window.jQuery,v=a(window),w=function(a,c){b.ev.on(o+a+p,c)},x=function(b,c,d,e){var f=document.createElement("div");return f.className="mfp-"+b,d&&(f.innerHTML=d),e?c&&c.appendChild(f):(f=a(f),c&&f.appendTo(c)),f},y=function(c,d){b.ev.triggerHandler(o+c,d),b.st.callbacks&&(c=c.charAt(0).toLowerCase()+c.slice(1),b.st.callbacks[c]&&b.st.callbacks[c].apply(b,a.isArray(d)?d:[d]))},z=function(c){return c===g&&b.currTemplate.closeBtn||(b.currTemplate.closeBtn=a(b.st.closeMarkup.replace("%title%",b.st.tClose)),g=c),b.currTemplate.closeBtn},A=function(){a.magnificPopup.instance||(b=new t,b.init(),a.magnificPopup.instance=b)},B=function(){var a=document.createElement("p").style,b=["ms","O","Moz","Webkit"];if(void 0!==a.transition)return!0;for(;b.length;)if(b.pop()+"Transition"in a)return!0;return!1};t.prototype={constructor:t,init:function(){var c=navigator.appVersion;b.isIE7=-1!==c.indexOf("MSIE 7."),b.isIE8=-1!==c.indexOf("MSIE 8."),b.isLowIE=b.isIE7||b.isIE8,b.isAndroid=/android/gi.test(c),b.isIOS=/iphone|ipad|ipod/gi.test(c),b.supportsTransition=B(),b.probablyMobile=b.isAndroid||b.isIOS||/(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent),d=a(document),b.popupsCache={}},open:function(c){var e;if(c.isObj===!1){b.items=c.items.toArray(),b.index=0;var g,h=c.items;for(e=0;e<h.length;e++)if(g=h[e],g.parsed&&(g=g.el[0]),g===c.el[0]){b.index=e;break}}else b.items=a.isArray(c.items)?c.items:[c.items],b.index=c.index||0;if(b.isOpen)return void b.updateItemHTML();b.types=[],f="",c.mainEl&&c.mainEl.length?b.ev=c.mainEl.eq(0):b.ev=d,c.key?(b.popupsCache[c.key]||(b.popupsCache[c.key]={}),b.currTemplate=b.popupsCache[c.key]):b.currTemplate={},b.st=a.extend(!0,{},a.magnificPopup.defaults,c),b.fixedContentPos="auto"===b.st.fixedContentPos?!b.probablyMobile:b.st.fixedContentPos,b.st.modal&&(b.st.closeOnContentClick=!1,b.st.closeOnBgClick=!1,b.st.showCloseBtn=!1,b.st.enableEscapeKey=!1),b.bgOverlay||(b.bgOverlay=x("bg").on("click"+p,function(){b.close()}),b.wrap=x("wrap").attr("tabindex",-1).on("click"+p,function(a){b._checkIfClose(a.target)&&b.close()}),b.container=x("container",b.wrap)),b.contentContainer=x("content"),b.st.preloader&&(b.preloader=x("preloader",b.container,b.st.tLoading));var i=a.magnificPopup.modules;for(e=0;e<i.length;e++){var j=i[e];j=j.charAt(0).toUpperCase()+j.slice(1),b["init"+j].call(b)}y("BeforeOpen"),b.st.showCloseBtn&&(b.st.closeBtnInside?(w(l,function(a,b,c,d){c.close_replaceWith=z(d.type)}),f+=" mfp-close-btn-in"):b.wrap.append(z())),b.st.alignTop&&(f+=" mfp-align-top"),b.fixedContentPos?b.wrap.css({overflow:b.st.overflowY,overflowX:"hidden",overflowY:b.st.overflowY}):b.wrap.css({top:v.scrollTop(),position:"absolute"}),(b.st.fixedBgPos===!1||"auto"===b.st.fixedBgPos&&!b.fixedContentPos)&&b.bgOverlay.css({height:d.height(),position:"absolute"}),b.st.enableEscapeKey&&d.on("keyup"+p,function(a){27===a.keyCode&&b.close()}),v.on("resize"+p,function(){b.updateSize()}),b.st.closeOnContentClick||(f+=" mfp-auto-cursor"),f&&b.wrap.addClass(f);var k=b.wH=v.height(),n={};if(b.fixedContentPos&&b._hasScrollBar(k)){var o=b._getScrollbarSize();o&&(n.marginRight=o)}b.fixedContentPos&&(b.isIE7?a("body, html").css("overflow","hidden"):n.overflow="hidden");var r=b.st.mainClass;return b.isIE7&&(r+=" mfp-ie7"),r&&b._addClassToMFP(r),b.updateItemHTML(),y("BuildControls"),a("html").css(n),b.bgOverlay.add(b.wrap).prependTo(b.st.prependTo||a(document.body)),b._lastFocusedEl=document.activeElement,setTimeout(function(){b.content?(b._addClassToMFP(q),b._setFocus()):b.bgOverlay.addClass(q),d.on("focusin"+p,b._onFocusIn)},16),b.isOpen=!0,b.updateSize(k),y(m),c},close:function(){b.isOpen&&(y(i),b.isOpen=!1,b.st.removalDelay&&!b.isLowIE&&b.supportsTransition?(b._addClassToMFP(r),setTimeout(function(){b._close()},b.st.removalDelay)):b._close())},_close:function(){y(h);var c=r+" "+q+" ";if(b.bgOverlay.detach(),b.wrap.detach(),b.container.empty(),b.st.mainClass&&(c+=b.st.mainClass+" "),b._removeClassFromMFP(c),b.fixedContentPos){var e={marginRight:""};b.isIE7?a("body, html").css("overflow",""):e.overflow="",a("html").css(e)}d.off("keyup"+p+" focusin"+p),b.ev.off(p),b.wrap.attr("class","mfp-wrap").removeAttr("style"),b.bgOverlay.attr("class","mfp-bg"),b.container.attr("class","mfp-container"),!b.st.showCloseBtn||b.st.closeBtnInside&&b.currTemplate[b.currItem.type]!==!0||b.currTemplate.closeBtn&&b.currTemplate.closeBtn.detach(),b._lastFocusedEl&&a(b._lastFocusedEl).focus(),b.currItem=null,b.content=null,b.currTemplate=null,b.prevHeight=0,y(j)},updateSize:function(a){if(b.isIOS){var c=document.documentElement.clientWidth/window.innerWidth,d=window.innerHeight*c;b.wrap.css("height",d),b.wH=d}else b.wH=a||v.height();b.fixedContentPos||b.wrap.css("height",b.wH),y("Resize")},updateItemHTML:function(){var c=b.items[b.index];b.contentContainer.detach(),b.content&&b.content.detach(),c.parsed||(c=b.parseEl(b.index));var d=c.type;if(y("BeforeChange",[b.currItem?b.currItem.type:"",d]),b.currItem=c,!b.currTemplate[d]){var f=b.st[d]?b.st[d].markup:!1;y("FirstMarkupParse",f),f?b.currTemplate[d]=a(f):b.currTemplate[d]=!0}e&&e!==c.type&&b.container.removeClass("mfp-"+e+"-holder");var g=b["get"+d.charAt(0).toUpperCase()+d.slice(1)](c,b.currTemplate[d]);b.appendContent(g,d),c.preloaded=!0,y(n,c),e=c.type,b.container.prepend(b.contentContainer),y("AfterChange")},appendContent:function(a,c){b.content=a,a?b.st.showCloseBtn&&b.st.closeBtnInside&&b.currTemplate[c]===!0?b.content.find(".mfp-close").length||b.content.append(z()):b.content=a:b.content="",y(k),b.container.addClass("mfp-"+c+"-holder"),b.contentContainer.append(b.content)},parseEl:function(c){var d,e=b.items[c];if(e.tagName?e={el:a(e)}:(d=e.type,e={data:e,src:e.src}),e.el){for(var f=b.types,g=0;g<f.length;g++)if(e.el.hasClass("mfp-"+f[g])){d=f[g];break}e.src=e.el.attr("data-mfp-src"),e.src||(e.src=e.el.attr("href"))}return e.type=d||b.st.type||"inline",e.index=c,e.parsed=!0,b.items[c]=e,y("ElementParse",e),b.items[c]},addGroup:function(a,c){var d=function(d){d.mfpEl=this,b._openClick(d,a,c)};c||(c={});var e="click.magnificPopup";c.mainEl=a,c.items?(c.isObj=!0,a.off(e).on(e,d)):(c.isObj=!1,c.delegate?a.off(e).on(e,c.delegate,d):(c.items=a,a.off(e).on(e,d)))},_openClick:function(c,d,e){var f=void 0!==e.midClick?e.midClick:a.magnificPopup.defaults.midClick;if(f||!(2===c.which||c.ctrlKey||c.metaKey||c.altKey||c.shiftKey)){var g=void 0!==e.disableOn?e.disableOn:a.magnificPopup.defaults.disableOn;if(g)if(a.isFunction(g)){if(!g.call(b))return!0}else if(v.width()<g)return!0;c.type&&(c.preventDefault(),b.isOpen&&c.stopPropagation()),e.el=a(c.mfpEl),e.delegate&&(e.items=d.find(e.delegate)),b.open(e)}},updateStatus:function(a,d){if(b.preloader){c!==a&&b.container.removeClass("mfp-s-"+c),d||"loading"!==a||(d=b.st.tLoading);var e={status:a,text:d};y("UpdateStatus",e),a=e.status,d=e.text,b.preloader.html(d),b.preloader.find("a").on("click",function(a){a.stopImmediatePropagation()}),b.container.addClass("mfp-s-"+a),c=a}},_checkIfClose:function(c){if(!a(c).hasClass(s)){var d=b.st.closeOnContentClick,e=b.st.closeOnBgClick;if(d&&e)return!0;if(!b.content||a(c).hasClass("mfp-close")||b.preloader&&c===b.preloader[0])return!0;if(c===b.content[0]||a.contains(b.content[0],c)){if(d)return!0}else if(e&&a.contains(document,c))return!0;return!1}},_addClassToMFP:function(a){b.bgOverlay.addClass(a),b.wrap.addClass(a)},_removeClassFromMFP:function(a){this.bgOverlay.removeClass(a),b.wrap.removeClass(a)},_hasScrollBar:function(a){return(b.isIE7?d.height():document.body.scrollHeight)>(a||v.height())},_setFocus:function(){(b.st.focus?b.content.find(b.st.focus).eq(0):b.wrap).focus()},_onFocusIn:function(c){return c.target===b.wrap[0]||a.contains(b.wrap[0],c.target)?void 0:(b._setFocus(),!1)},_parseMarkup:function(b,c,d){var e;d.data&&(c=a.extend(d.data,c)),y(l,[b,c,d]),a.each(c,function(a,c){if(void 0===c||c===!1)return!0;if(e=a.split("_"),e.length>1){var d=b.find(p+"-"+e[0]);if(d.length>0){var f=e[1];"replaceWith"===f?d[0]!==c[0]&&d.replaceWith(c):"img"===f?d.is("img")?d.attr("src",c):d.replaceWith('<img src="'+c+'" class="'+d.attr("class")+'" />'):d.attr(e[1],c)}}else b.find(p+"-"+a).html(c)})},_getScrollbarSize:function(){if(void 0===b.scrollbarSize){var a=document.createElement("div");a.style.cssText="width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;",document.body.appendChild(a),b.scrollbarSize=a.offsetWidth-a.clientWidth,document.body.removeChild(a)}return b.scrollbarSize}},a.magnificPopup={instance:null,proto:t.prototype,modules:[],open:function(b,c){return A(),b=b?a.extend(!0,{},b):{},b.isObj=!0,b.index=c||0,this.instance.open(b)},close:function(){return a.magnificPopup.instance&&a.magnificPopup.instance.close()},registerModule:function(b,c){c.options&&(a.magnificPopup.defaults[b]=c.options),a.extend(this.proto,c.proto),this.modules.push(b)},defaults:{disableOn:0,key:null,midClick:!1,mainClass:"",preloader:!0,focus:"",closeOnContentClick:!1,closeOnBgClick:!0,closeBtnInside:!0,showCloseBtn:!0,enableEscapeKey:!0,modal:!1,alignTop:!1,removalDelay:0,prependTo:null,fixedContentPos:"auto",fixedBgPos:"auto",overflowY:"auto",closeMarkup:'<button title="%title%" type="button" class="mfp-close">&#215;</button>',tClose:"Close (Esc)",tLoading:"Loading..."}},a.fn.magnificPopup=function(c){A();var d=a(this);if("string"==typeof c)if("open"===c){var e,f=u?d.data("magnificPopup"):d[0].magnificPopup,g=parseInt(arguments[1],10)||0;f.items?e=f.items[g]:(e=d,f.delegate&&(e=e.find(f.delegate)),e=e.eq(g)),b._openClick({mfpEl:e},d,f)}else b.isOpen&&b[c].apply(b,Array.prototype.slice.call(arguments,1));else c=a.extend(!0,{},c),u?d.data("magnificPopup",c):d[0].magnificPopup=c,b.addGroup(d,c);return d};var C,D,E,F="inline",G=function(){E&&(D.after(E.addClass(C)).detach(),E=null)};a.magnificPopup.registerModule(F,{options:{hiddenClass:"hide",markup:"",tNotFound:"Content not found"},proto:{initInline:function(){b.types.push(F),w(h+"."+F,function(){G()})},getInline:function(c,d){if(G(),c.src){var e=b.st.inline,f=a(c.src);if(f.length){var g=f[0].parentNode;g&&g.tagName&&(D||(C=e.hiddenClass,D=x(C),C="mfp-"+C),E=f.after(D).detach().removeClass(C)),b.updateStatus("ready")}else b.updateStatus("error",e.tNotFound),f=a("<div>");return c.inlineElement=f,f}return b.updateStatus("ready"),b._parseMarkup(d,{},c),d}}});var H,I="ajax",J=function(){H&&a(document.body).removeClass(H)},K=function(){J(),b.req&&b.req.abort()};a.magnificPopup.registerModule(I,{options:{settings:null,cursor:"mfp-ajax-cur",tError:'<a href="%url%">The content</a> could not be loaded.'},proto:{initAjax:function(){b.types.push(I),H=b.st.ajax.cursor,w(h+"."+I,K),w("BeforeChange."+I,K)},getAjax:function(c){H&&a(document.body).addClass(H),b.updateStatus("loading");var d=a.extend({url:c.src,success:function(d,e,f){var g={data:d,xhr:f};y("ParseAjax",g),b.appendContent(a(g.data),I),c.finished=!0,J(),b._setFocus(),setTimeout(function(){b.wrap.addClass(q)},16),b.updateStatus("ready"),y("AjaxContentAdded")},error:function(){J(),c.finished=c.loadError=!0,b.updateStatus("error",b.st.ajax.tError.replace("%url%",c.src))}},b.st.ajax.settings);return b.req=a.ajax(d),""}}});var L,M=function(c){if(c.data&&void 0!==c.data.title)return c.data.title;var d=b.st.image.titleSrc;if(d){if(a.isFunction(d))return d.call(b,c);if(c.el)return c.el.attr(d)||""}return""};a.magnificPopup.registerModule("image",{options:{markup:'<div class="mfp-figure"><div class="mfp-close"></div><figure><div class="mfp-img"></div><figcaption><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></figcaption></figure></div>',cursor:"mfp-zoom-out-cur",titleSrc:"title",verticalFit:!0,tError:'<a href="%url%">The image</a> could not be loaded.'},proto:{initImage:function(){var c=b.st.image,d=".image";b.types.push("image"),w(m+d,function(){"image"===b.currItem.type&&c.cursor&&a(document.body).addClass(c.cursor)}),w(h+d,function(){c.cursor&&a(document.body).removeClass(c.cursor),v.off("resize"+p)}),w("Resize"+d,b.resizeImage),b.isLowIE&&w("AfterChange",b.resizeImage)},resizeImage:function(){var a=b.currItem;if(a&&a.img&&b.st.image.verticalFit){var c=0;b.isLowIE&&(c=parseInt(a.img.css("padding-top"),10)+parseInt(a.img.css("padding-bottom"),10)),a.img.css("max-height",b.wH-c)}},_onImageHasSize:function(a){a.img&&(a.hasSize=!0,L&&clearInterval(L),a.isCheckingImgSize=!1,y("ImageHasSize",a),a.imgHidden&&(b.content&&b.content.removeClass("mfp-loading"),a.imgHidden=!1))},findImageSize:function(a){var c=0,d=a.img[0],e=function(f){L&&clearInterval(L),L=setInterval(function(){return d.naturalWidth>0?void b._onImageHasSize(a):(c>200&&clearInterval(L),c++,void(3===c?e(10):40===c?e(50):100===c&&e(500)))},f)};e(1)},getImage:function(c,d){var e=0,f=function(){c&&(c.img[0].complete?(c.img.off(".mfploader"),c===b.currItem&&(b._onImageHasSize(c),b.updateStatus("ready")),c.hasSize=!0,c.loaded=!0,y("ImageLoadComplete")):(e++,200>e?setTimeout(f,100):g()))},g=function(){c&&(c.img.off(".mfploader"),c===b.currItem&&(b._onImageHasSize(c),b.updateStatus("error",h.tError.replace("%url%",c.src))),c.hasSize=!0,c.loaded=!0,c.loadError=!0)},h=b.st.image,i=d.find(".mfp-img");if(i.length){var j=document.createElement("img");j.className="mfp-img",c.el&&c.el.find("img").length&&(j.alt=c.el.find("img").attr("alt")),c.img=a(j).on("load.mfploader",f).on("error.mfploader",g),j.src=c.src,i.is("img")&&(c.img=c.img.clone()),j=c.img[0],j.naturalWidth>0?c.hasSize=!0:j.width||(c.hasSize=!1)}return b._parseMarkup(d,{title:M(c),img_replaceWith:c.img},c),b.resizeImage(),c.hasSize?(L&&clearInterval(L),c.loadError?(d.addClass("mfp-loading"),b.updateStatus("error",h.tError.replace("%url%",c.src))):(d.removeClass("mfp-loading"),b.updateStatus("ready")),d):(b.updateStatus("loading"),c.loading=!0,c.hasSize||(c.imgHidden=!0,d.addClass("mfp-loading"),b.findImageSize(c)),d)}}});var N,O=function(){return void 0===N&&(N=void 0!==document.createElement("p").style.MozTransform),N};a.magnificPopup.registerModule("zoom",{options:{enabled:!1,easing:"ease-in-out",duration:300,opener:function(a){return a.is("img")?a:a.find("img")}},proto:{initZoom:function(){var a,c=b.st.zoom,d=".zoom";if(c.enabled&&b.supportsTransition){var e,f,g=c.duration,j=function(a){var b=a.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),d="all "+c.duration/1e3+"s "+c.easing,e={position:"fixed",zIndex:9999,left:0,top:0,"-webkit-backface-visibility":"hidden"},f="transition";return e["-webkit-"+f]=e["-moz-"+f]=e["-o-"+f]=e[f]=d,b.css(e),b},k=function(){b.content.css("visibility","visible")};w("BuildControls"+d,function(){if(b._allowZoom()){if(clearTimeout(e),b.content.css("visibility","hidden"),a=b._getItemToZoom(),!a)return void k();f=j(a),f.css(b._getOffset()),b.wrap.append(f),e=setTimeout(function(){f.css(b._getOffset(!0)),e=setTimeout(function(){k(),setTimeout(function(){f.remove(),a=f=null,y("ZoomAnimationEnded")},16)},g)},16)}}),w(i+d,function(){if(b._allowZoom()){if(clearTimeout(e),b.st.removalDelay=g,!a){if(a=b._getItemToZoom(),!a)return;f=j(a)}f.css(b._getOffset(!0)),b.wrap.append(f),b.content.css("visibility","hidden"),setTimeout(function(){f.css(b._getOffset())},16)}}),w(h+d,function(){b._allowZoom()&&(k(),f&&f.remove(),a=null)})}},_allowZoom:function(){return"image"===b.currItem.type},_getItemToZoom:function(){return b.currItem.hasSize?b.currItem.img:!1},_getOffset:function(c){var d;d=c?b.currItem.img:b.st.zoom.opener(b.currItem.el||b.currItem);var e=d.offset(),f=parseInt(d.css("padding-top"),10),g=parseInt(d.css("padding-bottom"),10);e.top-=a(window).scrollTop()-f;var h={width:d.width(),height:(u?d.innerHeight():d[0].offsetHeight)-g-f};return O()?h["-moz-transform"]=h.transform="translate("+e.left+"px,"+e.top+"px)":(h.left=e.left,h.top=e.top),h}}});var P="iframe",Q="//about:blank",R=function(a){if(b.currTemplate[P]){var c=b.currTemplate[P].find("iframe");c.length&&(a||(c[0].src=Q),b.isIE8&&c.css("display",a?"block":"none"))}};a.magnificPopup.registerModule(P,{options:{markup:'<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe></div>',srcAction:"iframe_src",patterns:{youtube:{index:"youtube.com",id:"v=",src:"//www.youtube.com/embed/%id%?autoplay=1"},vimeo:{index:"vimeo.com/",id:"/",src:"//player.vimeo.com/video/%id%?autoplay=1"},gmaps:{index:"//maps.google.",src:"%id%&output=embed"}}},proto:{initIframe:function(){b.types.push(P),w("BeforeChange",function(a,b,c){b!==c&&(b===P?R():c===P&&R(!0))}),w(h+"."+P,function(){R()})},getIframe:function(c,d){var e=c.src,f=b.st.iframe;a.each(f.patterns,function(){return e.indexOf(this.index)>-1?(this.id&&(e="string"==typeof this.id?e.substr(e.lastIndexOf(this.id)+this.id.length,e.length):this.id.call(this,e)),e=this.src.replace("%id%",e),!1):void 0});var g={};return f.srcAction&&(g[f.srcAction]=e),b._parseMarkup(d,g,c),b.updateStatus("ready"),d}}});var S=function(a){var c=b.items.length;return a>c-1?a-c:0>a?c+a:a},T=function(a,b,c){return a.replace(/%curr%/gi,b+1).replace(/%total%/gi,c)};a.magnificPopup.registerModule("gallery",{options:{enabled:!1,arrowMarkup:'<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',preload:[0,2],navigateByImgClick:!0,arrows:!0,tPrev:"Previous (Left arrow key)",tNext:"Next (Right arrow key)",tCounter:"%curr% of %total%"},proto:{initGallery:function(){var c=b.st.gallery,e=".mfp-gallery",g=Boolean(a.fn.mfpFastClick);return b.direction=!0,c&&c.enabled?(f+=" mfp-gallery",w(m+e,function(){c.navigateByImgClick&&b.wrap.on("click"+e,".mfp-img",function(){return b.items.length>1?(b.next(),!1):void 0}),d.on("keydown"+e,function(a){37===a.keyCode?b.prev():39===a.keyCode&&b.next()})}),w("UpdateStatus"+e,function(a,c){c.text&&(c.text=T(c.text,b.currItem.index,b.items.length))}),w(l+e,function(a,d,e,f){var g=b.items.length;e.counter=g>1?T(c.tCounter,f.index,g):""}),w("BuildControls"+e,function(){if(b.items.length>1&&c.arrows&&!b.arrowLeft){var d=c.arrowMarkup,e=b.arrowLeft=a(d.replace(/%title%/gi,c.tPrev).replace(/%dir%/gi,"left")).addClass(s),f=b.arrowRight=a(d.replace(/%title%/gi,c.tNext).replace(/%dir%/gi,"right")).addClass(s),h=g?"mfpFastClick":"click";e[h](function(){b.prev()}),f[h](function(){b.next()}),b.isIE7&&(x("b",e[0],!1,!0),x("a",e[0],!1,!0),x("b",f[0],!1,!0),x("a",f[0],!1,!0)),b.container.append(e.add(f))}}),w(n+e,function(){b._preloadTimeout&&clearTimeout(b._preloadTimeout),b._preloadTimeout=setTimeout(function(){b.preloadNearbyImages(),b._preloadTimeout=null},16)}),void w(h+e,function(){d.off(e),b.wrap.off("click"+e),b.arrowLeft&&g&&b.arrowLeft.add(b.arrowRight).destroyMfpFastClick(),b.arrowRight=b.arrowLeft=null})):!1},next:function(){b.direction=!0,b.index=S(b.index+1),b.updateItemHTML()},prev:function(){b.direction=!1,b.index=S(b.index-1),b.updateItemHTML()},goTo:function(a){b.direction=a>=b.index,b.index=a,b.updateItemHTML()},preloadNearbyImages:function(){var a,c=b.st.gallery.preload,d=Math.min(c[0],b.items.length),e=Math.min(c[1],b.items.length);for(a=1;a<=(b.direction?e:d);a++)b._preloadItem(b.index+a);for(a=1;a<=(b.direction?d:e);a++)b._preloadItem(b.index-a)},_preloadItem:function(c){if(c=S(c),!b.items[c].preloaded){var d=b.items[c];d.parsed||(d=b.parseEl(c)),y("LazyLoad",d),"image"===d.type&&(d.img=a('<img class="mfp-img" />').on("load.mfploader",function(){d.hasSize=!0}).on("error.mfploader",function(){d.hasSize=!0,d.loadError=!0,y("LazyLoadError",d)}).attr("src",d.src)),d.preloaded=!0}}}});var U="retina";a.magnificPopup.registerModule(U,{options:{replaceSrc:function(a){return a.src.replace(/\.\w+$/,function(a){return"@2x"+a})},ratio:1},proto:{initRetina:function(){if(window.devicePixelRatio>1){var a=b.st.retina,c=a.ratio;c=isNaN(c)?c():c,c>1&&(w("ImageHasSize."+U,function(a,b){b.img.css({"max-width":b.img[0].naturalWidth/c,width:"100%"})}),w("ElementParse."+U,function(b,d){d.src=a.replaceSrc(d,c)}))}}}}),function(){var b=1e3,c="ontouchstart"in window,d=function(){v.off("touchmove"+f+" touchend"+f)},e="mfpFastClick",f="."+e;a.fn.mfpFastClick=function(e){return a(this).each(function(){var g,h=a(this);if(c){var i,j,k,l,m,n;h.on("touchstart"+f,function(a){l=!1,n=1,m=a.originalEvent?a.originalEvent.touches[0]:a.touches[0],j=m.clientX,k=m.clientY,v.on("touchmove"+f,function(a){m=a.originalEvent?a.originalEvent.touches:a.touches,n=m.length,m=m[0],(Math.abs(m.clientX-j)>10||Math.abs(m.clientY-k)>10)&&(l=!0,d())}).on("touchend"+f,function(a){d(),l||n>1||(g=!0,a.preventDefault(),clearTimeout(i),i=setTimeout(function(){g=!1},b),e())})})}h.on("click"+f,function(){g||e()})})},a.fn.destroyMfpFastClick=function(){a(this).off("touchstart"+f+" click"+f),c&&v.off("touchmove"+f+" touchend"+f)}}(),A()});

    </script>
    <script>
        (function($) {

            "use strict";

            $(window).on("load", function() {

                /* ----------------------------------------------------------- */
                /*  BITCOIN PRELOADER
                /* ----------------------------------------------------------- */

                if ($("#preloader")[0]) {
                    $("#preloader").delay(500).fadeTo(500, 0, function() {
                        $(this).remove();
                    });
                }

            });

            $(document).ready(function() {

                /* ----------------------------------------------------------- */
                /*  ADD AND REMOVE OVERFLOW TO DOCUMENT WHEN MENU MOBILE IS OPENED
                /* ----------------------------------------------------------- */

                $(".navbar-toggle").click(function(){
                    $("html").toggleClass("overflow-hidden");
                });

                /* ----------------------------------------------------------- */
                /*  REMOVE # FROM URL
                /* ----------------------------------------------------------- */

                $("a[href='#']").on("click", (function(e) {
                    e.preventDefault();
                }));

                /* ----------------------------------------------------------- */
                /*  FIXED HEADER ON SCROLL
                /* ----------------------------------------------------------- */

                var navsite = $("#site-navigation");
                if (navsite.length) {
                    var offset = $("#site-navigation").offset().top;
                }
                $(document).scroll(function() {
                    var scrollTop = $(document).scrollTop();
                    if (scrollTop > offset) {
                        $("#site-navigation").addClass("fixed");

                    } else {
                        $("#site-navigation").removeClass("fixed");
                    }
                });

                /* ----------------------------------------------------------- */
                /*  ADD HEIGHT TO NAVBAR IN MOBILE DEVICES
                /* ----------------------------------------------------------- */

                $(".navbar-collapse").css({ maxHeight: $(window).height() - $(".navbar-header").height() + "px" });

                /* ----------------------------------------------------------- */
                /*  BOOTSTRAP CAROUSEL
                /* ----------------------------------------------------------- */

                $("#main-slide").carousel({
                    pause: true,
                    interval: 100000,
                });

                /* ----------------------------------------------------------- */
                /*  BACK TO TOP
                /* ----------------------------------------------------------- */

                $(window).scroll(function() {
                    if ($(this).scrollTop() > 800) {
                        $("#back-to-top").addClass("show-back-to-top");
                    } else {
                        $("#back-to-top").removeClass("show-back-to-top");
                    }
                });
                $("#back-to-top").on("click", function() {
                    $("html, body").animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });

                /* ----------------------------------------------------------- */
                /*  TESTIMONIAL CAROUSEL
                /* ----------------------------------------------------------- */

                $("#carousel-testimonials").carousel({
                    wrap:true,
                    pause: true,
                    interval: 20000
                });

                /* ----------------------------------------------------------- */
                /*  REFRESH 503 PAGE
                /* ----------------------------------------------------------- */

                $("#refresh").on("click", function() {
                    location.reload();
                });

                /* ----------------------------------------------------------- */
                /*  TESTIMONIAL CAROUSEL TOUCH OPTIMIZED [ MAIN SLIDER ]
                /* ----------------------------------------------------------- */

                var cr = $("#main-slide");
                cr.on("touchstart", function(event) {
                    var xClick = event.originalEvent.touches[0].pageX;
                    $(this).one("touchmove", function(event) {
                        var xMove = event.originalEvent.touches[0].pageX;
                        if (Math.floor(xClick - xMove) > 5) {
                            cr.carousel("next");
                        } else if (Math.floor(xClick - xMove) < -5) {
                            cr.carousel("prev");
                        }
                    });
                    cr.on("touchend", function() {
                        $(this).off("touchmove");
                    });
                });

                /* ----------------------------------------------------------- */
                /*  TESTIMONIAL CAROUSEL TOUCH OPTIMIZED [ CAROUSEL TESTIMONIALS ]
                /* ----------------------------------------------------------- */

                var ct = $("#carousel-testimonials");
                ct.on("touchstart", function(event) {
                    var xClick = event.originalEvent.touches[0].pageX;
                    $(this).one("touchmove", function(event) {
                        var xMove = event.originalEvent.touches[0].pageX;
                        if (Math.floor(xClick - xMove) > 5) {
                            ct.carousel("next");
                        } else if (Math.floor(xClick - xMove) < -5) {
                            ct.carousel("prev");
                        }
                    });
                    ct.on("touchend", function() {
                        $(this).off("touchmove");
                    });
                });

                /* ----------------------------------------------------------- */
                /*  WIDGET DATA FROM BITCOIN.COM
                /* ----------------------------------------------------------- */

                (function(b, i, t, C, O, I, N) {
                    window.addEventListener("load", function() {
                        if (b.getElementById(C)) return;
                        I = b.createElement(i), N = b.getElementsByTagName(i)[0];
                        I.src = t;
                        I.id = C;
                        N.parentNode.insertBefore(I, N);
                    }, false)
                })(document, "script", "https://widgets.bitcoin.com/widget.js", "btcwdgt");

                /* ----------------------------------------------------------- */
                /*  VARIABLES FOR SELECT INPUT AND BITCOIN CALCULATOR FORM
                /* ----------------------------------------------------------- */

                var userAgent = navigator.userAgent.toLowerCase(),
                    plugins = {
                        selectFilter: $("#currency-select"),
                        btcCalculator: $("#bitcoin-calculator"),
                    };


                /* ----------------------------------------------------------- */
                /*  REPLACE OLD SELECT IN BITCOIN CALCULATOR FORM
                /* ----------------------------------------------------------- */

                if (plugins.selectFilter.length) {
                    for (var i = 0; i < plugins.selectFilter.length; i++) {
                        var select = $(plugins.selectFilter[i]);
                        select.select2({
                            placeholder: select.attr("data-placeholder") ? select.attr("data-placeholder") : false,
                            minimumResultsForSearch: select.attr("data-minimum-results-search") ? select.attr("data-minimum-results-search") : 10,
                            maximumSelectionSize: 3,
                            dropdownCssClass: select.attr("data-dropdown-class") ? select.attr("data-dropdown-class") : ""
                        });
                    }
                }

                /* ----------------------------------------------------------- */
                /*  BITCOIN CALCULATOR [ WWW.BLOCKCHAIN.INFO API ]
                /* ----------------------------------------------------------- */

                if (plugins.btcCalculator.length) {

                    $.getJSON("https://blockchain.info/ticker", function(btcJsonData) {
                        var currencyList = [];
                        var index = 0;

                        for (var currency in btcJsonData) {
                            currencyList.push({
                                "id": index,
                                "text": currency
                            });
                            index++;
                        }

                        for (var i = 0; i < plugins.btcCalculator.length; i++) {
                            var btcForm = $(plugins.btcCalculator[i]),
                                btcFormInput = $(btcForm.find('[name="btc-calculator-value"]')),
                                btcFormOutput = $(btcForm.find('[name="btc-calculator-result"]')),
                                btcFormCurrencySelect = $(btcForm.find('[name="btc-calculator-currency"]'));

                            btcFormCurrencySelect.select2({
                                placeholder: btcFormCurrencySelect.attr("data-placeholder") ? btcFormCurrencySelect.attr("data-placeholder") : false,
                                minimumResultsForSearch: btcFormCurrencySelect.attr("data-minimum-results-search") ? btcFormCurrencySelect.attr("data-minimum-results-search") : 50,
                                maximumSelectionSize: 3,
                                dropdownCssClass: btcFormCurrencySelect.attr("data-dropdown-class") ? btcFormCurrencySelect.attr("data-dropdown-class") : '',
                                data: currencyList
                            });

                            if (btcFormInput.length && btcFormOutput.length) {
                                // BTC => Currency
                                (function(btcFormInput, btcFormOutput, btcFormCurrencySelect) {
                                    var lastChanged = 'btc';

                                    btcFormInput.on('input', function() {
                                        // store current positions in variables
                                        var selectionStart = this.selectionStart,
                                            selectionEnd = this.selectionEnd;

                                        this.value = toCryptoCurrencyFormat(this.value);

                                        // restore cursor position
                                        this.setSelectionRange(selectionStart, selectionEnd);

                                        btcFormOutput.val(toCurrencyFormat('' + btcJsonData[btcFormCurrencySelect.select2('data')[0].text]["buy"] * this.value));
                                        lastChanged = 'btc';
                                    });

                                    // Currency => BTC
                                    btcFormOutput.on('input', function() {
                                        // store current positions in variables
                                        var selectionStart = this.selectionStart,
                                            selectionEnd = this.selectionEnd;

                                        this.value = toCurrencyFormat(this.value);

                                        // restore cursor position
                                        this.setSelectionRange(selectionStart, selectionEnd);

                                        btcFormInput.val(toCryptoCurrencyFormat('' + this.value / btcJsonData[btcFormCurrencySelect.select2('data')[0].text]["sell"]));
                                        lastChanged = 'currency';
                                    });

                                    btcFormInput.trigger('input');
                                    btcFormOutput.blur();

                                    btcFormCurrencySelect.on('change', function() {
                                        if (lastChanged === 'btc') {
                                            btcFormOutput.val(toCurrencyFormat('' + btcJsonData[btcFormCurrencySelect.select2('data')[0].text]["buy"] * btcFormInput.val()));
                                        } else {
                                            btcFormInput.val(toCryptoCurrencyFormat('' + btcFormOutput.val() / btcJsonData[btcFormCurrencySelect.select2('data')[0].text]["sell"]));
                                        }
                                    });
                                })(btcFormInput, btcFormOutput, btcFormCurrencySelect);
                            }
                        }
                    })
                        .fail(function() {
                            console.log('Error while fetching data from https://blockchain.info/ticker');
                        });
                }

                function toCurrencyFormat(stringValue) {
                    var value = parseFloat(stringValue.replace(/[^\d.]/g, '')).toFixed(2);
                    return $.isNumeric(value) ? value : 0;
                }

                function toCryptoCurrencyFormat(stringValue) {
                    var value = stringValue.replace(/[^\d.]/g, '');
                    return $.isNumeric(value) ? value : 0;
                }

                /* ----------------------------------------------------------- */
                /*  PRICING TABLES SWITCH ANIMATION
                /* ----------------------------------------------------------- */

                checkScrolling($(".pricing-body"));
                $(window).on("resize", function() {
                    window.requestAnimationFrame(function() {
                        checkScrolling($(".pricing-body"))
                    });
                });
                $(".pricing-body").on("scroll", function() {
                    var selected = $(this);
                    window.requestAnimationFrame(function() {
                        checkScrolling(selected)
                    });
                });

                function checkScrolling(tables) {
                    tables.each(function() {
                        var table = $(this),
                            totalTableWidth = parseInt(table.children(".pricing-features").width(),10 ),
                            tableViewport = parseInt(table.width(),10 );
                        if (table.scrollLeft() >= totalTableWidth - tableViewport - 1) {
                            table.parent("li").addClass("is-ended");
                        } else {
                            table.parent("li").removeClass("is-ended");
                        }
                    });
                }

                bouncy_filter($(".pricing-container"));

                function bouncy_filter(container) {
                    container.each(function() {
                        var pricing_table = $(this);
                        var filter_list_container = pricing_table.children(".pricing-switcher"),
                            filter_radios = filter_list_container.find("input[type='radio']"),
                            pricing_table_wrapper = pricing_table.find(".pricing-wrapper");

                        var table_elements = {};
                        filter_radios.each(function() {
                            var filter_type = $(this).val();
                            table_elements[filter_type] = pricing_table_wrapper.find("li[data-type='" + filter_type + "']");
                        });

                        //detect input change event
                        filter_radios.on("change", function(event) {
                            event.preventDefault();
                            //detect which radio input item was checked
                            var selected_filter = $(event.target).val();

                            //give higher z-index to the pricing table items selected by the radio input
                            show_selected_items(table_elements[selected_filter]);

                            //rotate each pricing-wrapper
                            //at the end of the animation hide the not-selected pricing tables and rotate back the .pricing-wrapper

                            if (!Modernizr.cssanimations) {
                                hide_not_selected_items(table_elements, selected_filter);
                                pricing_table_wrapper.removeClass("is-switched");
                            } else {
                                pricing_table_wrapper.addClass("is-switched").eq(0).one("webkitAnimationEnd oanimationend msAnimationEnd animationend", function() {
                                    hide_not_selected_items(table_elements, selected_filter);
                                    pricing_table_wrapper.removeClass("is-switched");
                                    //change rotation direction if .pricing-list has the .bounce-invert class
                                    if (pricing_table.find(".pricing-list").hasClass("bounce-invert")) pricing_table_wrapper.toggleClass("reverse-animation");
                                });
                            }
                        });
                    });
                }

                function show_selected_items(selected_elements) {
                    selected_elements.addClass("is-selected");
                }

                function hide_not_selected_items(table_containers, filter) {
                    $.each(table_containers, function(key, value) {
                        if (key != filter) {
                            $(this).removeClass("is-visible is-selected").addClass("is-hidden");

                        } else {
                            $(this).addClass("is-visible").removeClass("is-hidden is-selected");
                        }
                    });
                }

                /* ----------------------------------------------------------- */
                /*  VIDEO POP UP
                /* ----------------------------------------------------------- */
                jQuery(".mfp-youtube").magnificPopup({
                    type: "iframe",
                    mainClass: "mfp-fade",
                    removalDelay: 0,
                    preloader: false,
                    fixedContentPos: false,
                    iframe: {
                        patterns: {
                            youtube: {
                                src: "https://youtube.com/embed/%id%?autoplay=1&rel=0"
                            },
                        }
                    }
                });

                /* ----------------------------------------------------------- */
                /*  SITE SEARCH
                /* ----------------------------------------------------------- */

                $(".navbar-nav .fa-search").on("click", function() {
                    //$("html, body").animate({ }, "slow");
                    $(".site-search .container").toggleClass("open");
                })

                $(".site-search .close").on("click", function() {
                    $(".site-search .container").removeClass("open");;
                })

                /* ----------------------------------------------------------- */
                /*  AJAX CONTACT FORM
                /* ----------------------------------------------------------- */

                $(".form-contact").on("submit", function() {
                    $(".output_message").text("Loading...");

                    var form = $(this);
                    $.ajax({
                        url: form.attr("action"),
                        method: form.attr("method"),
                        data: form.serialize(),
                        success: function(result) {
                            if (result == "success") {
                                $(".form-contact").find(".output_message_holder").addClass("d-block");
                                $(".form-contact").find(".output_message").addClass("success");
                                $(".output_message").text("Your message has been sent successfully!");
                            } else {
                                $(".form-contact").find(".output_message_holder").addClass("d-block");
                                $(".form-contact").find(".output_message").addClass("error");
                                $(".output_message").text("Error while Sending email! try later");
                            }
                        }
                    });

                    return false;
                });

                /* ----------------------------------------------------------- */
                /*  NUMBER SPINNER HORIZONTAL [ QUANTITY IN SHOPPING CART PAGE ]
                /* ----------------------------------------------------------- */

                var fieldName;
                // This button will increment the value
                $(".qtyplus").on("click", function(e){
                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    fieldName = $(this).attr("data-field");
                    // Get its current value
                    var currentVal = parseInt($("input[name="+fieldName+"]").val(),10 );
                    // If is not undefined
                    if (!isNaN(currentVal)) {
                        // Increment
                        $("input[name="+fieldName+"]").val(currentVal + 1);
                    } else {
                        // Otherwise put a 0 there
                        $("input[name="+fieldName+"]").val(0);
                    }
                });
                // This button will decrement the value till 0
                $(".qtyminus").on("click", function(e) {
                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    fieldName = $(this).attr("data-field");
                    // Get its current value
                    var currentVal = parseInt($("input[name="+fieldName+"]").val(),10 );
                    // If it isn't undefined or its greater than 0
                    if (!isNaN(currentVal) && currentVal > 1) {
                        // Decrement one
                        $("input[name="+fieldName+"]").val(currentVal - 1);
                    } else if (currentVal == 0) {
                        $("input[name="+fieldName+"]").val(1);
                    }

                    else {
                        // Otherwise put a 1 there
                        $("input[name="+fieldName+"]").val(1);
                    }
                });

                /* ----------------------------------------------------------- */
                /*  TOOLTIP
                /* ----------------------------------------------------------- */

                $("[data-toggle='tooltip']").tooltip()

            });

            /* ----------------------------------------------------------- */

        })(jQuery);
    </script>
    <script>
        $(function () {
            $('#countdown').countdown({until: new Date(2024, 06-1, 25)});
        });
    </script>

</div>
<!-- Wrapper Ends -->
</body>

</html>
