@props(['product_name' => ''])

<x-base-form id="order-form" header="Заказ товара"
             action="{{route('order-mail')}}" method="POST">
    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="mb-3">
        <input required name="product_name" value={{$product_name}} type="text" placeholder="{{__('Наименование товара')}}"
               class="form-control" id="item_name" readonly>
    </div>
    <div class="mb-3">
        <input required name="sender_name" type="text" placeholder="{{__('Ваше имя')}}"
               class="form-control" id="customer_name">
    </div>
    <div class="mb-3">
        <input required name="sender_email" type="email" placeholder="{{__('Ваш email')}}"
               class="form-control" id="email">
    </div>
    <div class="mb-3">
        <input name="sender_phone_number" type="tel" placeholder="{{__('Ваш номер телефона')}}"
               class="form-control" id="phone">
    </div>
    <h6>{{__('Примечание:')}}</h6>
    <div class="form-floating">
                <textarea name="sender_message" class="form-control" placeholder="{{__('Сообщение')}}"
                          id="floatingTextarea"></textarea>
        <label for="floatingTextarea">{{__('Сообщение')}}</label>
    </div>
    <div class="mb-3 mt-3">
        <label for="exampleInputEmail1" class="form-label">{{__('Местонахождение объекта?')}}</label>
        <input name="object_location" type="text" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="mt-2">
        <button type="submit" class="btn btn-warning">{{__('Заказать')}}</button>
    </div>
</x-base-form>
{{--@endsection--}}
