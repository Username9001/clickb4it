@extends('shop::base')

@section('aimeos_scripts')
	@parent
    <script type="text/javascript" src="<?php echo asset('packages/aimeos/shop/themes/aimeos-detail.js'); ?>"></script>
@stop

@section('aimeos_header')
    <?= $aiheader['basket/mini'] ?>
    <?= $aiheader['catalog/stage'] ?>
    <?= $aiheader['catalog/detail'] ?>
    <?= $aiheader['catalog/session'] ?>
@stop

@section('aimeos_head')

@stop

@section('aimeos_stage')

@stop

@section('aimeos_body')
    <?= $aibody['catalog/detail'] ?>
    <?= $aibody['basket/mini'] ?>
@stop

@section('aimeos_aside')

@stop
