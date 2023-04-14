{{--@php--}}
{{--dd($types);--}}
{{--@endphp--}}

<div class="row justify-content-center row-cols-lg-4 g-2 g-lg-3">
    @if(!empty($types))
    @foreach ($types as $type)
        <div class="col-12 col-md-4">
{{--            <x-product.product-card :type="$type" ></x-product.product-card>--}}
            <x-product.product-card :ref="$type->id"
                                    :img_src="$type->path_to_directory"
                                    :name="$type->type_name"></x-product.product-card>
        </div>
    @endforeach
    @endif
        @if(!empty($products))
            @foreach($products as $product)
                <div class="col-12 col-md-4">
                    <x-product.product-card ref="product/{{$product->id}}"
                                            :img_src="$product->path_to_directory"
                                            :name="$product->product_name"></x-product.product-card>
                </div>
            @endforeach
        @endif
</div>
