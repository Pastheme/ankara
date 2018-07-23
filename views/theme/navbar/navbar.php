<?php if ($params['hero']['status'] == true): ?>

  <?php

  $headerStyle  = [];
  $headerOther  = [];
  $navbarStyle  = [];
  $contentStyle = [];
  $contentOther = [];
  $height       = [];

  if ($params['hero']['status'] == true) {

    $headerStyle[0] = [
      'section_color' => $params['hero']['section_color'],
      'preserve' => 'uk-preserve-color',
    ];

    if (!empty($params['hero']['section_bg']['src'])) {
      array_push($headerStyle , [
        'bg' => 'uk-background-image',
        'blend' => $params['hero']['section_bg']['blend'],
        'size' =>  $params['hero']['section_bg']['size'],
        'fixed' => $params['hero']['section_bg']['fixed'] == true ? 'uk-background-fixed':'',
      ]);

      $headerOther = [
        'data-src' => 'data-src=" ' . $params['hero']['section_bg']['src'] . ' " uk-img',
      ];

    }

    $navbarStyle = [
      'uk-navbar-container' , $params['hero']['text_color'] , 'uk-navbar-transparent'
    ];

    if ($params['hero']['expand'] == true) {
      $contentOther = [
        'uk-height-viewport="expand:true"'
      ];
    }

    if ($params['hero']['expand'] == false) {
      $height = [
        $params['hero']['height']
      ];
    }

    $contentStyle = [
      $params['hero']['text_color'],
      'uk-flex uk-flex-center uk-flex-middle'
    ];

  }

  ?>

  <header class="<?= implode(' ' , $headerStyle[0]) ?> <?= isset($headerStyle[1]) ? implode(' ' , $headerStyle[1]):'' ?>" <?= implode(' ' , $headerOther) ?>>

    <nav class="<?= implode(' ' , $navbarStyle) ?>">
      <div class="<?= $params['navbar']['container'] ?>" uk-navbar>
        <?= $view->render('theme:views/theme/navbar/' . $params['navbar']['mode'] . '/navbar.php') ?>
      </div>
    </nav>

    <main class="<?= implode(' ' , array_values($contentStyle)) ?> <?= implode(' ' , array_values($height)) ?>" <?= $params['hero']['expand'] === true ? implode(' ' , $contentOther):'' ?>>
      <?= $params['hero']['content'] ?>
    </main>

  </header>

<?php else: ?>

  <nav class="uk-navbar-container">
    <div class="<?= $params['navbar']['container'] ?>" uk-navbar>
      <?= $view->render('theme:views/theme/navbar/' . $params['navbar']['mode'] . '/navbar.php') ?>
    </div>
  </nav>

<?php endif; ?>

<?= $view->render('theme:views/theme/navbar/navbar-others/off-canvas.php') ?>
