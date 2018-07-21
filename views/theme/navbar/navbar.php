<?php if ($params['hero']['status'] == true): ?>

  <header class="<?= $params['hero']['section_color'] ?> uk-preserve-color <?= !empty($params['hero']['section_bg']['src']) ? 'uk-background-image ' .$params['hero']['section_bg']['blend'] . ' '.$params['hero']['section_bg']['size']  :'' ?> <?= $params['hero']['section_bg']['fixed'] == true ? 'uk-background-fixed':'' ?>"  <?= !empty($params['hero']['section_bg']['src']) ? 'data-src="' .$params['hero']['section_bg']['src'] . '"':'' ?> uk-img>

    <nav class="uk-navbar-container <?= $params['hero']['text_color'] ?> uk-navbar-transparent">
      <div class="<?= $params['navbar']['container'] ?>" uk-navbar>
        <?= $view->render('theme:views/theme/navbar/' . $params['navbar']['mode'] . '/navbar.php') ?>
      </div>
    </nav>

    <main class="uk-flex uk-flex-middle uk-flex-center <?= $params['hero']['height'] == 'uk-height-viewport' ? '':$params['hero']['height']?> <?= $params['hero']['text_color'] ?>" <?= $params['hero']['height'] == 'uk-height-viewport' ? 'uk-height-viewport="expand:true"':'' ?>>
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
