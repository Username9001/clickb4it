@extends('app')

@section('aimeos_styles')
	<link type="text/css" rel="stylesheet" href="{{ asset('packages/aimeos/shop/themes/forhumans/aimeos.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('packages/aimeos/shop/themes/forhumans/forhumans.css') }}" />
@stop

@section('aimeos_scripts')
	<script type="text/javascript" src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
	<script type="text/javascript" src="{{ asset('packages/aimeos/shop/themes/jquery-ui.custom.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('packages/aimeos/shop/themes/aimeos.js') }}"></script>
	<script type="text/javascript" src="{{ asset('packages/aimeos/shop/themes/forhumans/aimeos.js') }}"></script>
@stop
