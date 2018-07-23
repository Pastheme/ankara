<div class="uk-navbar-right">

  <?php if ($view->position()->exists('navbar')): ?>
    <?= $view->position('navbar' , 'theme:views/theme/positions/position_blank.php') ?>
  <?php endif; ?>

  <div class="uk-navbar-item">
    <a><i uk-icon="more-vertical"></i></a>
  </div>

</div>
