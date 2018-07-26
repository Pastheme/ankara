<?php
return [

    'install' => function ($app) {},
    'uninstall' => function ($app) {
        $app['config']->remove('pastheme/ankara');
    },
    'enable' => function ($app) {},
    'disable' => function ($app) {},
    'updates' => []
];

?>
