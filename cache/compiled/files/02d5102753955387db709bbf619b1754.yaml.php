<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/partner-wod.com/user/config/site.yaml',
    'modified' => 1515712012,
    'data' => [
        'title' => 'Partner-wod',
        'default_lang' => 'pt',
        'author' => [
            'name' => 'Hugo Viana',
            'email' => 'Hugohaviana@gmail.com',
            'copyright' => 'Copyright 2017 Hugo Viana. All Rights Reserved.'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'featured'
        ],
        'metadata' => [
            'description' => 'PartnerWod'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'routes' => [
            '/something/else' => '/blog/sample-3',
            '/another/one/here' => '/blog/sample-3',
            '/new/*' => '/blog/*'
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'logo' => 'logo.png',
        'header' => [
            'title' => NULL,
            'description' => NULL,
            'background' => 'background.jpg'
        ],
        'social' => [
            0 => [
                'url' => 'https://www.instagram.com/partnerwod2017/',
                'icon' => 'instagram'
            ],
            1 => [
                'url' => 'https://www.facebook.com/partnerwod/',
                'icon' => 'facebook'
            ]
        ],
        'footer' => [
            'widget' => [
                'title' => 'Sobre o PartnerWod',
                'description' => 'Esperem por um blog super versátil sempre com os melhores artigos sobre desporto, alimentação ou viagens.',
                'link' => NULL
            ]
        ],
        'copyright' => 'Copyright © 2017. All Rights Reserved.'
    ]
];
