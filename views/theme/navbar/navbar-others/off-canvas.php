<div id="off-canvas" uk-offcanvas>
    <div class="uk-offcanvas-bar">

        <button class="uk-offcanvas-close" type="button" uk-close></button>

        <?php if ($view->position()->exists('offcanvast-top')): ?>
          <?= $view->position('offcanvast-top' , 'theme:views/theme/positions/position_blank.php') ?>
        <?php endif; ?>

        <?php if ($view->menu()->exists('main')): ?>
          <?= $view->menu('main' , 'theme:views/theme/navbar/nav.php' , ['primary' => 'uk-nav-default' , 'text' => 'Main']) ?>
        <?php endif; ?>

        <?php if ($view->menu()->exists('second')): ?>
          <?= $view->menu('second' , 'theme:views/theme/navbar/nav.php' , ['primary' => 'uk-nav-default' , 'text' => 'Secondary']) ?>
        <?php endif; ?>

        <?php if ($view->position()->exists('offcanvast-bottom')): ?>
          <?= $view->position('offcanvast-bottom' , 'theme:views/theme/positions/position_blank.php') ?>
        <?php endif; ?>

    </div>
</div>
