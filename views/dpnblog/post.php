<?php $view->script('post', 'dpnblog:app/bundle/post.js', 'vue') ?>
<?php $view->style('dpn-css' , 'dpnblog:assets/css/dpnblog.min.css');?>
<?php $view->script('author', 'dpnblog:app/bundle/author.js', 'vue') ?>

<script>

  $(document).ready(function() {
    var article = $('.article-paragraf');

    article.children('p').addClass('uk-container uk-container-small uk-section-small')

  });

</script>

<article class="uk-article">

  <div class="uk-container uk-container-small uk-section">

    <h1 class="uk-heading-primary uk-text-center"><?= $post->title ?></h1>
    <?php if ($post->excerpt): ?>
      <div class="uk-text-center uk-text-lead uk-text-muted">
        <?= substr($post->excerpt , 0 , 100) ?>
      </div>
    <?php endif; ?>

    <?php if (!empty(array_filter($post->tags))): ?>
      <ul class="uk-grid uk-grid-small uk-flex uk-flex-middle uk-flex-center">
        <?php foreach ($post->tags as $tag): ?>
          <li>
            <a class="uk-button uk-button-text" href="<?= $view->url('@blogcategory/tags' , ['tags' => $tag]) ?>"><?= $tag ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <div class="uk-grid" uk-grid>

      <div class="uk-width-auto">
        <img class="uk-border-circle uk-text-center" width="80" height="80" data-src="<?= $post->getGravatar() ?>" alt="<?= $post->user->name ?>" uk-img>
      </div>

      <div class="uk-width-expand uk-flex uk-flex-middle">
        <div id="app">
          <div class="uk-flex uk-flex-middle">
            <h4 class="uk-h3 uk-margin-remove"><?= $post->user->name ?></h4>

          </div>
          <div id="postData" postid="<?= $post->id ?>" like="post"  class="uk-comment-meta">
            <?= __('Posted in') ?>
            <a href="<?= $view->url('@blogcategory/id', ['id' => $post->category->id]) ?>"><?= $post->category->title ?></a>
            <?= __('%date%', ['%date%' => '<time datetime="'.$post->date->format(\DateTime::ATOM).'" v-cloak>{{ "'.$post->date->format(\DateTime::ATOM).'" | date "longDate" }}</time>' ]) ?>
            <?php if ($like === true): ?>
              |
              <a v-on:click="like" class="" v-bind:style="hasLike === true ? 'color:#30f209':''"><i class="uk-icon-thumbs-o-up"></i> Like Post</a>
              <a class="uk-margin-small-left uk-link-text"> {{countLikes}}</a>
              <span v-if="msg" class="uk-text-danger">{{msg}}</span>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <?php if ($share === true): ?>
        <div class="uk-width-auto@m uk-flex uk-flex-middle uk-flex-left@m uk-flex-center">
          <a class="uk-button uk-button-gradient" target="_blank" href="https://twitter.com/intent/tweet?text=<?= $desc ?>" data-size="large">
            <i uk-icon="twitter"></i>  Share On Twitter
          </a>
        </div>
      <?php endif; ?>

    </div>

  </div>

  <?php if ($image = $post->get('image.src')): ?>
    <img data-src="<?= $image ?>" width="100%" height="100px" class="uk-cover-container" alt="<?= $post->get('image.alt') ?>" uk-img>
  <?php endif ?>

  <article class="article-paragraf uk-section-small uk-text-large">
    <?= $post->content ?>
  </article>

  <?= $view->render('theme:views/dpnblog/comments.php') ?>


</article>
