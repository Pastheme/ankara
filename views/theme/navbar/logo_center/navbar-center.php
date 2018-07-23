<div class="uk-navbar-center-left"><div>
  <?php if ($view->menu()->exists('main')): ?>
    <?= $view->menu('main' , 'theme:views/theme/navbar/menu.php') ?>
  <?php endif; ?>
</div></div>

<?= $view->render('theme:views/theme/navbar/navbar-others/logo.php' , ['item' => 'uk-navbar-item']) ?>

<div class="uk-navbar-center-right"><div>
  <?php if ($view->menu()->exists('second')): ?>
    <?= $view->menu('second' , 'theme:views/theme/navbar/menu.php') ?>
  <?php endif; ?>
</div></div>
