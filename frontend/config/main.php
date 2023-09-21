<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'view' => [
            'class' => 'yii\web\View',
            'theme' => [
                'pathMap' => [
                    '@frontend/views' => '@frontend/views',
                    '@common/widgets/views' => '@common/widgets/views',
                    // outros caminhos mapeados
                ],
            ],
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'home' => '/site/index',
                '<controller:[-\w]+>/<action:[-\w]+>/<id:\d+>' => '<controller>/<action>',
                '<controller:[-\w]+>/<action:[-\w]+>' => '<controller>/<action>',
                '<controller:[-\w]+>' => '<controller>/index',
                '/ordem/reimpressao' => 'ordem/reimpressao/index',
                '/ordem/reimpressao/reimprimir' => 'ordem/reimpressao/reimprimir',

            ],
        ],
        'pdf' => [
            'class' => 'Mpdf\Mpdf',
        ],
    ],
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => [
                '127.0.0.1',
                '::1',
                '192.9.200.118',
            ]
        ],
    ],
    'params' => $params,

    'aliases' => [
        '@fortawesome/fontawesome-free' => '@vendor/components/font-awesome',
        '@uploads' => '/var/www/html/uploads',
    ],

    'modules' => [
        'datecontrol' => [
            'class' => 'kartik\datecontrol\Module',
            'displaySettings' => [
                'date' => 'dd/MM/yyyy',
                'time' => 'HH:mm',
                'datetime' => 'dd/MM/yyyy HH:mm',
            ],
            'saveSettings' => [
                'date' => 'php:Y-m-d',
                'time' => 'php:H:i:s',
                'datetime' => 'php:Y-m-d H:i:s',
            ],
        ],

    ],
];