<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\OfficesController::class,
    'router'     => [
        'as'     => 'office.',
        'prefix' => '/offices',
    ],
];
