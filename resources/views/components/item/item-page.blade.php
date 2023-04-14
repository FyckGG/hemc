{{--@php--}}
{{--dd($item_info);--}}
{{--    @endphp--}}

@push('js')
    <script src="{{asset('js/formOperations.js')}}"></script>
@endpush


@props(['item_info' => null])


@if(empty($item_info))
    <div>{{__('Страница пуста')}}</div>
    @else
<div>
    <div class="d-flex flex-sm-row flex-column p-3">
        <div class="me-5">
            <img src="{{asset($item_info->path_to_directory)}}" height="330px" width="330px"/>

        </div>
        <div>
            <x-item.product-features-card :item_info="$item_info"/>
            <div class="d-grid gap-2 ">
            <button type="button" class="btn btn-warning" onclick="showOrderForm()">{{__('Заказать')}}</button>
            </div>
        </div>
    </div>
    <x-order-form product_name="{{$item_info->product_name}}"></x-order-form>
    <div>
        <x-item.product-tabs :description="$item_info->product_description"
        :characteristics="$item_info->product_characteristics"
        :terms="$item_info->product_terms_of_purchase"></x-item.product-tabs>

    </div>
</div>
@endif
