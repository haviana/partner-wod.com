<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/partner-wod.com/user/config/system.yaml',
    'modified' => 1516814772,
    'data' => [
        'home' => [
            'alias' => '/home'
        ],
        'pages' => [
            'theme' => 'gateway',
            'process' => [
                'markdown' => true,
                'twig' => false
            ],
            'markdown' => [
                'extra' => false
            ]
        ],
        'cache' => [
            'enabled' => false,
            'check' => [
                'method' => 'file'
            ],
            'driver' => 'auto',
            'prefix' => 'g'
        ],
        'twig' => [
            'cache' => true,
            'debug' => true,
            'auto_reload' => true,
            'autoescape' => false
        ],
        'assets' => [
            'css_pipeline' => false,
            'css_minify' => true,
            'css_rewrite' => true,
            'js_pipeline' => false,
            'js_minify' => true
        ],
        'debugger' => [
            'enabled' => false,
            'twig' => true,
            'shutdown' => [
                'close_connection' => true
            ]
        ],
        'languages' => [
            'translations' => true,
            'supported' => [
                0 => 'pt'
            ]
        ]
    ]
];
