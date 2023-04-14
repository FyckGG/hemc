
@extends('layouts.main')

@section('page.title')
    {{__('Каталог | OOO')}}
@endsection

@section('main.content')
    <h1 class="mb-3">{{__('Каталог')}}</h1>
    @if (empty($types) && empty($products))
        <h2>{{__("Каталог пуст")}}</h2>
        @else
        <x-product.product-card-list :types="$types" :products="$products ?? []"></x-product.product-card-list>
    @endif


@endsection
