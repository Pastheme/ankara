<?php if ($view->position()->exists('navbar')): ?>
  <?= $view->position('navbar' , 'theme:views/theme/positions/position_blank.php') ?>
<?php endif; ?>
<div class="uk-navbar-item">
  <a class="uk-navbar-toggle uk-hidden@m" href="#off-canvas" uk-toggle>
      <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
  </a>
</div>
