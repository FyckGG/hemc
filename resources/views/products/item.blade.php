{{--@php--}}
{{--dd($item_info);--}}
{{--    @endphp--}}


@extends('layouts.main')

@section('page.title')
     {{$item_info->product_name}} | XЕМЦ-Сибирь
@endsection

@section('main.content')
    <h1>{{$item_info->product_name}}</h1>
{{--    <x-item.product-features-card/>--}}
    <x-item.item-page :item_info="$item_info"/>
@endsection


