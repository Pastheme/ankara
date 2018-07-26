<?php $view->script('post', 'dpnblog:app/bundle/post.js', 'vue') ?>
<?php $view->style('dpn-css' , 'dpnblog:assets/css/dpnblog.min.css');?>
<article class="uk-article">

    <?php if ($image = $post->get('image.src')): ?>
    <img src="<?= $image ?>" alt="<?= $post->get('image.alt') ?>">
    <?php endif ?>

    <h1 class="uk-article-title"><?= $post->title ?></h1>

    <?= $view->render('theme:views/dpnblog/components/author.php') ?>

    <div class="uk-margin"><?= $post->content ?></div>
    <?php if (!empty(array_filter($post->tags))): ?>
      <p class="uk-article-meta">
        <ul class="uk-subnav uk-subnav-pill">
          <?php foreach ($post->tags as $tag): ?>
            <li>
              <a href="<?= $view->url('@blogcategory/tags' , ['tags' => $tag]) ?>" class="uk-text-small"><?= $tag ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </p>
    <?php endif; ?>

    <?= $view->render('theme:views/dpnblog/comments.php') ?>

</article>
