@extends('errors.layout')

@section('title', __('Server Error'))
@section('code', '500')
@section('short_message', __('Server Error'))
@section('long_message', __('Whoops, something went wrong on our servers.'))
