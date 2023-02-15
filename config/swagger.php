<?php

use App\Http\Controllers\ApiController;

return [
    'api' => [
        'title' => 'API Documentation',
        'description' => 'API Documentation for my Laravel Application',
        'version' => '1.0.0',
        'path' => '/api/documentation',
    ],

    'routes' => [
        'docs' => '/docs',
        'api' => '/api/docs',
        'oauth2_callback' => '/api/oauth2-callback',
    ],

    'securityDefinitions' => [
        'passport' => [
            'type' => 'oauth2',
            'description' => 'Laravel Passport authentication',
            'in' => 'header',
            'name' => 'Authorization',
            'flow' => 'accessCode',
            'authorizationUrl' => '/oauth/authorize',
            'tokenUrl' => '/oauth/token',
            'scopes' => [],
        ],
    ],
];

