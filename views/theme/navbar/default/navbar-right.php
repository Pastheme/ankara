<?php if ($view->position()->exists('navbar')): ?>
  <?= $view->position('navbar' , 'theme:views/theme/positions/position_blank.php') ?>
<?php endif; ?>

<a class="uk-navbar-toggle uk-hidden@m" href="#off-canvas" uk-toggle>
    <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
</a>

<?php if ($view->menu()->exists('second')): ?>
  <div class="uk-navbar-item uk-visible@m">
    <a href="#second-menu" class="uk-link-reset" uk-toggle><i uk-icon="more-vertical"></i></a>
  </div>

  <div id="second-menu" class="uk-modal-full" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        <div class="uk-height-viewport uk-flex uk-flex-middle uk-flex-center">
          <?= $view->menu('second' , 'theme:views/theme/navbar/nav.php' , ['primary' => 'uk-nav-primary']) ?>
        </div>
    </div>
  </div>
<?php endif; ?>
