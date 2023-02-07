<?php

return [
    [
        'GET',
        '/',
        [
            \App\Default\Controller::class,
            'index'
        ]
    ],
    [
        'GET',
        '/test/{id:\d+}',
        [
            \App\Default\Controller::class,
            'test'
        ]
    ],
];