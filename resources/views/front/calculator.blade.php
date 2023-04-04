<?php
/**
 * created by: tushar Khan
 * email : tushar.khan0122@gmail.com
 * date : 4/5/2023
 */
?>

@extends('front.layout.app')

@section('frontContent')

    <!-- Bitcoin Calculator Section Starts -->
    @include('front.layout.calculator-from')
    <!-- Bitcoin Calculator Section Ends -->

@endsection

@push('frontJS')
    @include('front.layout.calculator-script')
@endpush
