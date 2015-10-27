<?php

Route::get('/', function () {
    return view('index');
});

Route::post('mail', function(){
    $name = Input::get('name');
    $email = Input::get('email');
    $tel = Input::get('tel');
    $comment = Input::get('comment');
    $string = "Имя: {$name}
Email: {$email}
Телефон: {$tel}
Комментарий: {$comment}";
    Mail::raw($string, function($message)
    {
        $message->to('ciklevka-parketa-spb@yandex.ru')->subject('Заявка с сайта циклевка-паркета-спб.рф');
    });
});