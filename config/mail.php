<?php

//return [
//    'driver' => 'smtp',
//    'host' => 'smtp.yandex.ru',
//    'port' => 465,
//    'from' => ['address' => 'ciklevka-parketa-spb@yandex.ru', 'name' => 'Циклевка паркета СПб'],
//    'encryption' => 'ssl',
//    'username' => 'ciklevka-parketa-spb@yandex.ru',
//    'password' => 'U4E41#RHw9',
//    'sendmail' => '/usr/sbin/sendmail -bs',
//    'pretend' => false,
//];

return [
    'driver'     => 'mailgun',
    'host'       => 'smtp.mailgun.org',
    'port'       => 587,
    'from'       => ['address' => 'postmaster@sandbox755ce66a5004448882858c5166f6fde6.mailgun.org', 'name' => 'Циклевка паркета СПб'],
    'encryption' => 'tls',
    'username'   =>'postmaster@sandbox755ce66a5004448882858c5166f6fde6.mailgun.org',
    'password'   => '939fa548ac5596a78594b8d2acc88a0b',
    'sendmail'   => '/usr/sbin/sendmail -bs',
    'pretend'    => false,
];