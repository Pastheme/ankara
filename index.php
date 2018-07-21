<?php
use Pagekit\Application;
return [

  'name'  => 'anatolia',
  'main'  => function(Application $app){},
  'resources' => ['theme:'=>'theme'],
  'autoload'  => ['Pastheme\\Anatolia\\' => 'src'],
  'settings' => '@anatolia',

  'menu' => [
    'anatolia' => [
      'label' => 'Anatolia',
      'icon'  => 'theme:logo.svg',
      'url'   => '@anatolia',
      'priority'=> 999
    ],
    'anatolia: info' => [
      'parent'=> 'anatolia',
      'label' => 'Info',
      'url'   => '@anatolia',
      'active'=> '@anatolia'
    ],
    'anatolia: themes' => [
      'parent'=> 'anatolia',
      'label' => 'Theme Configure',
      'url'   => '@anatolia/themeconfigure',
      'active'   => '@anatolia/themeconfigure*',
    ],
  ],

  'positions' => [
    'navbar' => 'Navbar',
    'offcanvast-top' => 'Offcanvas Top',
    'offcanvast-bottom' => 'Offcanvas Bottom',
    'top-a' => 'Top A',
    'top-b' => 'Top B',
    'main-top'  => 'Main Top',
    'main-bottom'  => 'Main Bottom',
    'bottom-a' => 'Bottom A',
    'bottom-b' => 'Bottom B',
    'footer'   => 'Footer'
  ],

  'routes' => [
    '/apianatolia' => [
      'name' => '@apianatolia',
      'controller' => [
        'Pastheme\\Anatolia\\Controller\\ApiAnatoliaController'
      ]
    ],
    '/anatolia' => [
      'name'  => '@anatolia',
      'controller'  => [
        'Pastheme\\Anatolia\\Controller\\AnatoliaController'
      ]
    ]
  ],

  'node'  => [
    'hero'  => [
      'content' => '',
      'status'  => false,
      'section_bg' => '',
      'section_color' => 'uk-section-default',
      'height'  => 'uk-height-viewport',
      'text_color'  => '',
      'contrast_logo' => false
    ],
    'title_hide' => false,
    'content_hide'  => false
  ],

  'widget' => [
    'section_bg' => '',
    'section_color' => 'uk-section-default',
    'height'  => 'uk-height-viewport',
    'text_color'  => '',
    'title_hide' => false,
  ],

  'config'  => [
    'navbar'  => [
      'container' => 'uk-container',
      'mode'  => 'default',
    ],
    'content' => 'uk-container',
    'footer'  => [
      'active'  => false,
      'content' => 'Develop'
    ],
    'others' => [
      'logo_contrast' => ''
    ]
  ],

  'events'  => [
    'view.system/site/admin/edit' => function($event , $view){
      $view->script('anatolia-node-hero' , 'theme:app/bundle/anatolia-node-hero.js' , 'site-edit');
    },

    'view.system/widget/edit' => function ($event, $view) {
      $view->script('widget-theme', 'theme:app/bundle/widget-theme.js', 'widget-edit');
     },

     'view.layout' => function($event) use ($app){

     }
  ]


]

?>
