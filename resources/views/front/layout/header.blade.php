<?php
/**
 * created by: tushar Khan
 * email : tushar.khan0122@gmail.com
 * date : 3/14/2023
 */
?>

<head>

    <meta charset="utf-8" />
    <title>{{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontAsset/images/favicon.png') }}">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{ asset('frontAsset/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontAsset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontAsset/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontAsset/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontAsset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontAsset/css/skins/orange.css') }}">

    @stack('frontCSS')

    <!-- Template JS Files -->
    <script src="{{ asset('frontAsset/js/modernizr.js') }}"></script>

</head>
