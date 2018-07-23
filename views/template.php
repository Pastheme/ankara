<!DOCTYPE html>
<html lang="<?= $intl->getLocaleTag() ?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $view->render('head') ?>

    <?= $view->style('theme' , 'theme:assets/css/uikit.min.css') ?>
    <?= $view->script('theme-js' , 'theme:assets/js/uikit.min.js' , ['jquery']) ?>
    <?= $view->script('theme-icons' , 'theme:assets/js/uikit-icons.min.js' , ['jquery' , 'theme-js']) ?>
  </head>
  <body>
    <?= $view->render('theme:views/theme/navbar/navbar.php') ?>

    <?php if ($view->position()->exists('top')): ?>
      <?= $view->position('top' , 'theme:views/theme/positions/position.php') ?>
    <?php endif; ?>

    <?php if ($params['content_hide'] == false): ?>
      <div class="<?= $params['content'] ?> uk-section-small">
        <?= $view->render('content') ?>
      </div>
    <?php endif; ?>

    <?php if ($view->position()->exists('bottom')): ?>
      <?= $view->position('bottom' , 'theme:views/theme/positions/position.php') ?>
    <?php endif; ?>

    <?php if ($view->position()->exists('footer')): ?>
      <?= $view->position('footer' , 'theme:views/theme/positions/position.php') ?>
    <?php endif; ?>

    <div class="uk-section uk-section-secondary uk-section-xsmall">

      <div class="<?= $params['content'] ?>">

        <div class="uk-child-width-1-2@m" uk-grid>

          <?php if ($params['footer']['active'] === false): ?>
            <div class="uk-text-left@m uk-text-center">
              <span class="uk-text-small"><?= $params['footer']['content'] ?></span>
            </div>
          <?php endif; ?>

        <?php if ($view->position()->exists('footer-right')): ?>
          <div class="uk-text-right@m uk-text-center">
            <?= $view->position('footer-right' , 'theme:views/theme/positions/position_blank.php') ?>
          </div>
        <?php endif; ?>

        </div>

      </div>

    </div>

    <?= $view->render('footer') ?>

  </body>
</html>
