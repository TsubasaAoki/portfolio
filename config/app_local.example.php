<?php
return [
    'debug' => filter_var(env('DEBUG', true), FILTER_VALIDATE_BOOLEAN),
    'Security' => [
        'salt' => env('SECURITY_SALT', ''),
    ],
    'Datasources' => [
        'default' => [
            'host' => 'xxxxxxxxxxxx',
            'username' => 'xxxxxxxxxxxx',
            'password' => 'xxxxxxxxxxxx',
            'database' => 'xxxxxxxxxxxx',
        ],
    ],
];
