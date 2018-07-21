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
    <?= $view->render('content') ?>
    <?= $view->render('footer') ?>
  </body>
</html>
