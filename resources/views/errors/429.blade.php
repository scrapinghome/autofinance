@extends('errors.layout')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('short_message', __('Too Many Requests'))
@section('long_message', __('You have made too many requests to this page. Please try again in a few minutes.') . ' ' . __('If you are the owner of this website, please contact your hosting provider to increase the limit.'))
