<nav class="uk-navbar-container">
  <div class="<?= $params['navbar']['container'] ?>" uk-navbar>
    <?= $view->render('theme:views/theme/navbar/' . $params['navbar']['mode'] . '/navbar.php') ?>
  </div>
</nav>
