<?php

namespace Pastheme\Anatolia\Controller;

use Pagekit\Application as App;
use Pastheme\Anatolia\OtherExtends;
/**
* @Access(admin=true)
*/
class AnatoliaController{

  /**
  * @Route("/theme-configure")
  */
  public function themeConfigureAction(){

    $module = App::module('ankara');

    $imgSelect = [
      'centermenu' => App::view()->url()->getStatic('theme:assets/img/admin/center-menu.svg'),
      'logocenter' => App::view()->url()->getStatic('theme:assets/img/admin/logo-center.svg'),
      'modalmenu' => App::view()->url()->getStatic('theme:assets/img/admin/modal-menu.svg'),
    ];

    return [
      '$view' => [
        'title' => 'Theme Configure',
        'name'  => 'theme:views/admin/theme-configure.php'
      ],
      '$data' => [
        'config'  => $module->config,
        'img'     => $imgSelect
      ]

    ];

  }

}

?>
