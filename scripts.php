<?php
return [

    'install' => function ($app) {},
    'uninstall' => function ($app) {},
    'enable' => function ($app) {},
    'disable' => function ($app) {
      $app['config']->remove('pastheme/anatolia');
    },
    'updates' => [

        '0.5.0' => function ($app) {},
        '0.9.0' => function ($app) {}

    ]
];

?>
