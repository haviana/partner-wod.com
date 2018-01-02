<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/grav/www/html/user/config/plugins/email.yaml',
    'modified' => 1514841299,
    'data' => [
        'enbled' => true,
        'from' => 'partnerwodsh@gmail.com',
        'from_name' => 'hugohaviana',
        'to' => 'partnerwodsh@gmail.com',
        'to_name' => 'hviana',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.mailgun.org',
                'port' => 587,
                'encryption' => 'tls',
                'user' => 'postmaster@partner-wod.com',
                'password' => '698d70eb1e13aaaac17f469a0c8d5985'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => true
    ]
];
