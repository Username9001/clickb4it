@extends('shop::base')

@section('aimeos_header')
    <?= $aiheader['basket/mini'] ?>
    <?= $aiheader['catalog/filter'] ?>
    <?= $aiheader['catalog/stage'] ?>
    <?= $aiheader['catalog/lists'] ?>
@stop

@section('aimeos_head')

@stop

@section('aimeos_nav')

@stop

@section('aimeos_stage')

@stop

@section('aimeos_body')
     <?= $aibody['catalog/lists'] ?>
     <?= $aibody['basket/mini'] ?>
@stop
