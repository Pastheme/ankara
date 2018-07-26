<?php $view->script('author', 'dpnblog:app/bundle/author.js', 'vue') ?>

<article id="app" class="uk-comment" v-cloak>
    <header class="uk-comment-header uk-flex-middle" uk-grid>
        <div class="uk-width-auto">
          <img class="uk-comment-avatar" src="<?= $post->getGravatar() ?>" alt="<?= $post->user->name ?>">
        </div>
        <div class="uk-width-expand">
          <div class="uk-flex uk-flex-middle">
            <h4 class="uk-comment-title uk-margin-remove"><?= $post->user->name ?></h4>
            <?php if ($share === true): ?>
              <div class="uk-margin-small-left">
                <a class="uk-link-muted uk-text-small uk-margin-small-left" target="_blank" href="https://twitter.com/intent/tweet?text=<?= $desc ?>" data-size="large">
                  <i class="uk-icon-twitter"></i>  Share On Twitter
                </a>
              </div>
            <?php endif; ?>
          </div>
          <div id="postData" postid="<?= $post->id ?>" like="post"  class="uk-comment-meta">
            <?= __('Posted in') ?>
            <a class="uk-text-bold" href="<?= $view->url('@blogcategory/id', ['id' => $post->category->id]) ?>"><?= $post->category->title ?></a>
            <?= __('%date%', ['%date%' => '<time datetime="'.$post->date->format(\DateTime::ATOM).'" v-cloak>{{ "'.$post->date->format(\DateTime::ATOM).'" | date "longDate" }}</time>' ]) ?>
            <?php if ($like === true): ?>
              |
              <a v-on:click="like" class="uk-margin-small-left uk-text-bold uk-link-text" v-bind:style="hasLike === true ? 'color:#30f209':''"><i class="uk-icon-thumbs-o-up"></i> Like Post</a>
              <a class="uk-margin-small-left uk-link-text"> {{countLikes}}</a>
              <span v-if="msg" class="uk-text-danger">{{msg}}</span>
            <?php endif; ?>
          </div>
        </div>

    </header>
</article>
