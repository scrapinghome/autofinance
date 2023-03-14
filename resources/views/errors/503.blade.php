@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('short_message', __('Service Unavailable'))
@section('long_message', __('The server is temporarily unable to service your request due to maintenance downtime or capacity problems. Please try again later.'))
