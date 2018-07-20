<div class="uk-navbar-left">
  <a class="uk-navbar-brand" href="<?= $view->url()->get() ?>">
      <?php if ($params['logo']) : ?>
          <img class="tm-logo uk-responsive-height" src="<?= $this->escape($params['logo']) ?>" alt="">
      <?php else : ?>
          <?= $params['title'] ?>
      <?php endif ?>
  </a>
</div>
