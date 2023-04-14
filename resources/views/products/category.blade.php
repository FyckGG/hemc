@extends('layouts.main')

@section('main.content')
    <h1>Products (cat)</h1>
    @if (empty($types) && empty($products))
        <h2>Products empty</h2>
    @else
        <x-product.product-card-list :types="$types" :products="$products"></x-product.product-card-list>
{{--@foreach($products as $product)--}}
{{--    <div>1</div>--}}
{{--@endforeach--}}
    @endif
@endsection
