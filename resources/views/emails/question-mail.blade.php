@props(['sender_name'=>'',
'sender_message' => '',
'sender_email' => '',
'sender_phone_number'=> '',
'object_location' => ''])

<div>
    <h1>{{__('Входящая заявка')}}</h1>
    <h2>
        <span>{{__('Заявка от: ')}}</span>
                <span>{{$sender_name}}</span>
    </h2>
        <p>{{$sender_message}}</p>
    <h3>
        <span>{{__('Электронная почта отправителя: ')}}</span>
        <span>{{$sender_email}}</span>
    </h3>
    @if (!empty($sender_phone_number))
        <h3>
            <span>{{__('Номер телефона отправителя: ')}}</span>
            <span>{{$sender_phone_number}}</span>
        </h3>
    @endif
    @if (!empty($object_location))
        <h3>
            <span>{{__('Местонахождение объекта: ')}}</span>
            <span>{{$object_location}}</span>
        </h3>
    @endif
</div>
