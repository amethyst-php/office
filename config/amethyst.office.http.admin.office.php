<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\OfficesController::class,
    'router'     => [
        'as'     => 'office.',
        'prefix' => '/offices',
    ],
];
