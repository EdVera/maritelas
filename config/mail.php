<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Mail Driver
    |--------------------------------------------------------------------------
    |
    | Laravel supports both SMTP and PHP's "mail" function as drivers for the
    | sending of e-mail. You may specify which one you're using throughout
    | your application here. By default, Laravel is setup for SMTP mail.
    |
    | Supported: "smtp", "sendmail", "mailgun", "mandrill", "ses",
    |            "sparkpost", "log", "array"
    |
    */

    'driver' => env('MAIL_DRIVER', 'smtp'),
    'host' => env('MAIL_HOST', 'smtp.gmail.com'),
    'port' => env('MAIL_PORT', 587),
    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'maritelascountrymx@gmail.com'),
        'name' => env('MAIL_FROM_NAME', 'Maritelas'),
    ],
    'encryption' => env('MAIL_ENCRYPTION', 'ssl'),
    'username' => env('MAIL_USERNAME'),
    'password' => env('MAIL_PASSWORD'),
    'sendmail' => '/usr/sbin/sendmail -t',
    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],
    'pretend' => false
];

// 'driver' => env('MAIL_DRIVER', 'sendmail'),
// 'host' => env('MAIL_HOST', 'localhost'),
// 'port' => env('MAIL_PORT', 587),
// 'from' => ['address' => '**********', 'name' => '********'],
// 'encryption' => 'tls',
// 'username' => env('MAIL_USERNAME'),
// 'password' => env('MAIL_PASSWORD'),
// 'sendmail' => '/usr/sbin/sendmail -t',
// 'pretend' => false,

// 'driver' => env('MAIL_DRIVER', 'smtp'),
// 'host' => env('MAIL_HOST', 'smtp.office365.com'),
// 'port' => env('MAIL_PORT', 587),
// 'from' => ['address' => 'info@minghan.sg', 'name' => 'Minghan'],
// 'encryption' => 'tls',
// 'username' => env('MAIL_USERNAME'),
// 'password' => env('MAIL_PASSWORD'),
// 'sendmail' => '/usr/sbin/sendmail -bs',
// 'pretend' => false,
