<article class="uk-article">

    <?php if ($params['title_hide'] == false): ?>
      <h1 class="uk-article-title"><?= $page->title ?></h1>
    <?php endif; ?>

    <?= $page->content ?>

</article>
