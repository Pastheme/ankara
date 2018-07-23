<a class="<?= $item ?>" href="<?= $view->url()->get() ?>">
    <?php if ($params['hero']['contrast_logo'] === true): ?>

      <?php if (!empty($params['others']['logo_contrast'])): ?>
        <img class="uk-responsive-height" src="<?= $this->escape($params['others']['logo_contrast']) ?>">
      <?php else: ?>
        <img class="uk-responsive-height" src="<?= $this->escape($params['logo']) ?>">
      <?php endif; ?>

    <?php else: ?>
        <img class="uk-responsive-height" src="<?= $this->escape($params['logo']) ?>">
    <?php endif; ?>
</a>
