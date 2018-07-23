<?php
return [

    'install' => function ($app) {},
    'uninstall' => function ($app) {
        $app['config']->remove('pastheme/anatolia');
    },
    'enable' => function ($app) {},
    'disable' => function ($app) {},
    'updates' => []
];

?>
