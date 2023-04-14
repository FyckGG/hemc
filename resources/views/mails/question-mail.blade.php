props(['sender_name'=>'',
'sender_phone_number'=> '',
'sender_message' => '',
'object_location' => ''])

<div>
    <h1>{{__('Входящая заявка')}}</h1>
    <h3>
        <span>{{__('Заявка от: ')}}</span>
{{--        <span>{{$sender_name}}</span>--}}
    </h3>
{{--    <p>{{$sender_message}}</p>--}}
    @if (!empty($sender_phone_number))
    <h4>
        <span>{{__('Номер телефона отправителя: ')}}</span>
        <span>{{$sender_phone_number}}</span>
    </h4>
    @endif
    @if (!empty($object_location))
    <h4>
        <span>{{__('Местонахождение объекта: ')}}</span>
        <span>{{$object_location}}</span>
    </h4>
    @endif
</div>
