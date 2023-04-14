<?php

return [
    'urlNames' => [
        'О нас' => 'about-us',
        'Каталог' => 'products',
        'Контакты' => 'contacts',
    ],

    'regExpIgnoreUrl' => [
        'product' => "/\/(product)$/"
    ],

    'validatedFailedNames' => [
//        'product_name' => "Некорректное заполнение поля 'Наименование товара'",
//        'sender_name' => "Некорректное заполнение поля 'Ваше имя'",
//        'sender_email' =>"Некорректное заполнение поля 'Ваше email'",
//        'sender_message' => "Некорректное сообщение",
//        'sender_phone_number' => "Некорректный номер телефона",
//        'object_location'=>"Некорректное заполнение поля 'Местонахождение объекта",
        "Некорректное заполнение поля 'Наименование товара'" => 'product_name' ,
        "Некорректное заполнение поля 'Ваше имя'" => 'sender_name',
        "Некорректное заполнение поля 'Ваше email'" => 'sender_email',
       "Некорректное сообщение" => 'sender_message',
        "Некорректный номер телефона" => 'sender_phone_number',
        "Некорректное заполнение поля 'Местонахождение объекта" => 'object_location',
    ],
];


//array:3 [▼ // app\helpers.php:27
//  0 => "products"
//  1 => "products/vf"
//  2 => "products/vf/mkmk"
//]

//'urlNames' => [
//    'О нас' => 'about-us',
//    'Каталог' => 'products',
//    'Контакты' => 'contacts',
//],
