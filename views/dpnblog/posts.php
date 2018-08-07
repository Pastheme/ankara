<?php $view->script('posts', 'dpnblog:app/bundle/posts.js', 'vue') ?>

<div class="uk-grid uk-grid-match uk-child-width-1-3@m" uk-grid>

  <?php foreach ($posts as $post) : ?>

    <div>
      <div class="uk-card uk-card-default uk-box-shadow-hover-large">
        <?php if ($image = $post->get('image.src')): ?>
          <div class="uk-card-media-top uk-cover-container">
            <a href="<?= $view->url('@dpnblog/id', ['id' => $post->id]) ?>">
              <img data-src="<?= $image ?>" alt="<?= $post->get('image.alt') ?>" style="width:100%; height:200px; object-fit:cover;" uk-img>
            </a>
          </div>
        <?php endif; ?>
        <div class="uk-card-body uk-card-small">
          <h5 class="uk-margin-remove"><a class="uk-link-reset" href="<?= $view->url('@dpnblog/id', ['id' => $post->id]) ?>"><?= $post->title ?></a></h5>
          <p class="uk-text-small uk-margin-remove"><a class="" href="<?= $view->url('@blogcategory/id', ['id' => $post->category->id]) ?>"><?= $post->category->title ?></a></p>
          <span class="uk-text-small"><?= $post->excerpt ?: substr($post->content , 0 , 150) ?></span>
          <div class="uk-child-width-1-3" uk-grid>

            <div class="uk-flex uk-flex-middle">
              <?php if ($post->isCommentable() || $post->comment_count) : ?>
              <li><a href="<?= $view->url('@dpnblog/id#comments', ['id' => $post->id]) ?>"><?= _c('{0} <i uk-icon="comment"></i>|{1} <i uk-icon="comment"></i> %num%|]1,Inf[ <i uk-icon="comment"></i> %num%', $post->comment_count, ['%num%' => $post->comment_count]) ?></a></li>
              <?php endif ?>
            </div>

            <div class="uk-flex uk-flex-middle">
              <?php if (isset($post->readmore) && $post->readmore || $post->excerpt) : ?>
              <a class="uk-button uk-button-text" href="<?= $view->url('@dpnblog/id', ['id' => $post->id]) ?>"><?= __('Read more') ?></a>
              <?php endif ?>
            </div>

            <div class="uk-text-right">
              <img class="uk-border-circle" width="30" height="30" data-src="<?= $post->getGravatar() ?>" alt="<?= $post->user->name ?>" uk-img>
            </div>

          </div>
        </div>
      </div>
    </div>

  <?php endforeach; ?>

</div>

<?php

    $range     = 3;
    $total     = intval($total);
    $page      = intval($page);
    $pageIndex = $page - 1;

?>

<?php if ($total > 1) : ?>
<ul class="uk-pagination">


    <?php for($i=1;$i<=$total;$i++): ?>
        <?php if ($i <= ($pageIndex+$range) && $i >= ($pageIndex-$range)): ?>

            <?php if ($i == $page): ?>
            <li class="uk-active"><span><?=$i?></span></li>
            <?php else: ?>
            <li>
                <a href="<?= $view->url('@dpnblog/page', ['page' => $i]) ?>"><?=$i?></a>
            <li>
            <?php endif; ?>

        <?php elseif($i==1): ?>

            <li>
                <a href="<?= $view->url('@dpnblog/page', ['page' => 1]) ?>">1</a>
            </li>
            <li><span>...</span></li>

        <?php elseif($i==$total): ?>

            <li><span>...</span></li>
            <li>
                <a href="<?= $view->url('@dpnblog/page', ['page' => $total]) ?>"><?=$total?></a>
            </li>

        <?php endif; ?>
    <?php endfor; ?>


</ul>
<?php endif ?>
