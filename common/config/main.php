<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    'urlManager' => [
        	'class' => 'yii\web\UrlManager',
        	'enablePrettyUrl' => true,
        	'showScriptName' => false
        ],
    'request' => [
            'baseUrl' => '',        // убираем "frontend/web" из URL 
        ]
    ],
];
