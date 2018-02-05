<?php

return [
    'root_dir' => __DIR__ . "/../",
    'controllers_namespaces' => 'app\controllers\\',
    'templates_dir' => __DIR__ . "/../templates/",
    'components' => [
        'db' => [
            'class' => \app\services\Db::class,
            'driver' => 'mysql',
            'host' => 'localhost',
            'login' => 'gu_shop_user',//'gu_php_2',
            'password' => 'gu_shop_user',//'gu_php_2',
            'database' => 'gu_shop',//'shopshop',
            'charset' => 'utf8'
        ],
        'request' => [
            'class' => \app\services\Request::class
        ],
        'mainController' => [
            'class' => \app\controllers\FrontController::class
        ]
    ]
];