<?php
return [
    //Класс аутентификации
    'auth' => \Src\Auth\Auth::class,
    //Клас пользователя
    'identity' => \Model\User::class,
    //Классы для middleware
    'routeMiddleware' => [
        'auth' => \Middlewares\AuthMiddleware::class,
        'user' => \Middlewares\UserMiddleware::class,
        'admin' => \Middlewares\AdminMiddleware::class,
    ]
];
