<?php if ($root->getDepth() === 0) : ?>
  <ul class="uk-navbar-nav uk-visible@m">
<?php endif; ?>

  <?php foreach ($root->getChildren() as $node) : ?>
    <li class="<?= $node->hasChildren() ? 'uk-parent' : '' ?><?= $node->get('active') ? ' uk-active' : '' ?>" >
      <a href="<?= $node->getUrl() ?>">
        <?= $node->title ?>
      </a>

      <?php if ($node->hasChildren()) : ?>

        <?php if ($root->getDepth() === 0) : ?>
        <div class="uk-navbar-dropdown">
        <?php endif ?>

          <?php if ($root->getDepth() === 0) : ?>
          <ul class="uk-nav uk-navbar-dropdown-nav">
          <?php endif ?>

            <?= $view->render('theme:views/theme/navbar/menu.php', ['root' => $node]) ?>

          <?php if ($root->getDepth() === 0) : ?>
          </ul>
          <?php endif ?>


        <?php if ($root->getDepth() === 0) : ?>
        </div>
        <?php endif ?>

      <?php endif; ?>

    </li>
  <?php endforeach; ?>

<?php if ($root->getDepth() === 0) : ?>
</ul>
<?php endif; ?>
