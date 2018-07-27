<!DOCTYPE html>
<html lang="<?= $intl->getLocaleTag() ?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $view->render('head') ?>

    <?= $view->style('theme' , 'theme:assets/css/uikit.ankara.min.css') ?>
    <?= $view->script('theme-js' , 'theme:assets/js/uikit.min.js' , ['jquery']) ?>
    <?= $view->script('theme-icons' , 'theme:assets/js/uikit-icons.min.js' , ['jquery' , 'theme-js']) ?>
  </head>
  <body class="uk-section-primary uk-flex uk-flex-middle uk-flex-center" uk-height-viewport="expand=true">

    <div class="uk-text-center">
      <h1 class="uk-heading-hero">404</h1>
      <p>
        <?= $title ?>
      </p>
      <a href="/" class="uk-button uk-button-primary uk-width-medium">Go Home</a>
    </div>

  </body>
</html>
