@extends('errors.layout')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('short_message', __('Unauthorized Access'))
@section('long_message', __('You are not authorized to access this page.'))
