<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '1dj8Oa9bgH2FpbG5fpQ42wtphX0kqCMl',
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 
    [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['*'],
        'generators' => [ 
        'kouoslModule' => [
        'class' => 'kouosl\gii\module\Generator', 
        
        ]],
    ];
}

return $config;
