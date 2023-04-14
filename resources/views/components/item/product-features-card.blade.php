@props(['item_info' => null])

@if(empty($item_info))
    <div>{{__('Страница пуста')}}</div>

@else
<div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <div>
                <span class="text-danger me-3"><b>{{__('Грузоподъёмность: ')}}</b></span>
{{--                <span>An itemAn itemAn itemAn itemAn itemAn itemAn item</span>--}}
                <span>{{__($item_info->product_load_capacity)}}</span>
            </div>
        </li>
        <li class="list-group-item"><div>
                <span class="text-danger me-3"><b>{{__('Гарантия: ')}}</b></span>
{{--                <span>An itemAn itemAn itemAn itemAn itemAn itemAn item</span>--}}
                <span>{{__($item_info->product_warranty)}}</span>
            </div></li>
        <li class="list-group-item"><div>
                <span class="text-danger me-3"><b>{{__('Услуги: ')}}</b></span>
                <span>{{__($item_info->product_services)}}</span>
            </div></li>
        <li class="list-group-item"><div>
                <span class="text-danger me-3"><b>{{__('Срок изготовления: ')}}</b></span>
                <span>{{__($item_info->product_manufacturing_period)}}</span>
            </div></li>
    </ul>
</div>
@endif


{{--<div>--}}
{{--    <span class="fs-5">{{__('Типо слоган')}}</span>--}}
{{--    <span class="fs-5"><b>{{__('"ХЕМЦ Сибирь"')}}</b></span>--}}
{{--    <br/>--}}
{{--    <span>{{__('Здесь типо чем занимаются')}}</span>--}}
{{--</div>--}}
