
{{--@extends('components.base-form')--}}
{{--@section('base-form.id') question-form @endsection--}}
{{--@section('base-form.header')--}}
{{--    <h3>{{__('Отправить заявку')}}</h3>--}}
{{--@endsection--}}
{{--'sender_message'=> $this->sender_message,--}}
{{--'sender_phone_number'=>$this->sender_phone_number,--}}
{{--'object_location'=>$this->object_location]);--}}
{{--@section('base-form.content')--}}
<x-base-form id="question-form" header="Отправить заявку"
             action="{{route('question-mail')}}" method="POST">
    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
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
    <h6>{{__('Чем мы можем Вам помочь?')}}</h6>
    <div class="form-floating">
                <textarea required name="sender_message" class="form-control" placeholder="{{__('Сообщение')}}"
                          id="floatingTextarea"></textarea>
        <label for="floatingTextarea">{{__('Сообщение')}}</label>
    </div>
    <div class="mb-3 mt-3">
        <label for="exampleInputEmail1" class="form-label">{{__('Местонахождение объекта?')}}</label>
        <input name="object_location" type="text" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="mt-2">
        <button type="submit" class="btn btn-warning">{{__('Отправить')}}</button>
    </div>
</x-base-form>
{{--@endsection--}}


