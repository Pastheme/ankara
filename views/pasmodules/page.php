<?= $view->script('page-pege' , 'pasmodules:app/bundle/page-page.js' , 'vue') ?>

<div id="app">

  <div class="uk-grid" uk-grid>

    <?php if (!empty($module->data['image']['src'])): ?>

      <div class="uk-width-2-3@m">

        <img data-src="<?= $view->url()->get($module->data['image']['src']) ?>" width="100%" height="500px" alt="<?= $module->data['image']['alt'] ?>" uk-img>

      </div>

    <?php endif; ?>

    <div class="uk-width-expand@m">

      <div class="uk-card uk-card-small uk-card-default">

        <div class="uk-card-header">
          <h1 class="uk-h4"><?= $module->title ?></h1>
        </div>

        <div class="uk-card-body">

          <?php if (!empty($module->excerpt)): ?>
            <p class="uk-text-small">
              <?= $module->excerpt ?>
            </p>
          <?php endif; ?>

          <ul class="uk-list uk-list-divider uk-text-small">

            <?php if (!empty($module->category)): ?>
              <li>
                <em class="uk-text-uppercase uk-text-muted">Category:</em>
                <span class="uk-align-right uk-text-lowercase"><?= $module->category->title ?></span>
              </li>
            <?php endif; ?>

            <li>
              <em class="uk-text-uppercase uk-text-muted">Last Modified:</em>
              <span class="uk-align-right uk-text-lowercase">
                <time datetime="<?= $module->modified->format(\DateTime::ATOM) ?>" v-cloak>{{ "<?= $module->modified->format(\DateTime::ATOM) ?>" | date "longDate" }}</time>
              </span>
            </li>

            <?php if (!empty($module->data['version'])): ?>
              <li>
                <em class="uk-text-uppercase uk-text-muted">Version:</em>
                <span class="uk-align-right uk-text-lowercase"><?= $module->data['version'] ?></span>
              </li>
            <?php endif; ?>

            <li v-if="latest">
              Buraya Gelecek Github
            </li>

          </ul>

          <ul class="uk-list">
            <?php if (!empty($module->data['repository'])): ?>
              <li>
                <a href="<?= $module->data['repository']['html_url'] ?>" target="_blank" class="uk-button uk-button-default uk-width-1-1">Github</a>
              </li>
            <?php endif; ?>
            <?php if (!empty($module->data['document'])): ?>
              <li>
                <a href="<?= $module->data['document'] ?>" target="_blank" class="uk-button uk-button-default uk-width-1-1">Document</a>
              </li>
            <?php endif; ?>
            <?php if (!empty($module->data['market'])): ?>
              <li>
                <a href="<?= $module->data['market'] ?>" target="_blank" class="uk-button uk-button-default uk-width-1-1">Market</a>
              </li>
            <?php endif; ?>
            <?php if (!empty($module->data['demo'])): ?>
              <li>
                <a href="#modal-demo" v-on:click="loadIframe('<?= $module->data['demo'] ?>')" uk-toggle class="uk-button uk-button-primary uk-width-1-1">Demo</a>
              </li>
            <?php endif; ?>
          </ul>

        </div>

      </div>

    </div>

  </div>

  <?php if (!empty($module->content)): ?>
    <article class="uk-section uk-section-small">
      <?= $module->content ?>
    </article>
  <?php endif; ?>

  <?php if (!empty($module->data['demo'])): ?>

    <div id="modal-demo" class="uk-modal-full" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
            <div class="uk-position-relative uk-height-viewport">

              <div class="uk-grid uk-padding" uk-grid>
                <div class="uk-width-1-2@m">
                  <div class="uk-flex uk-flex-middle">
                    <h2 class="uk-h3 uk-margin-remove uk-text-capitalize"><?= $module->title ?></h2>

                    <ul class="uk-iconnav uk-margin-small-left">
                        <li><a v-on:click="resize('30%' , '90%')" uk-icon="icon: phone"></a></li>
                        <li><a v-on:click="resize('70%' , '90%')" uk-icon="icon: tablet"></a></li>
                        <li><a v-on:click="resize('100%' , '90%')" uk-icon="icon: laptop"></a></li>
                    </ul>

                  </div>
                  <span class="uk-text-meta">

                  </span>
                </div>
                <div class="uk-width-1-2@m ">

                </div>
              </div>

              <iframe class="uk-position-absolute uk-position-bottom-center uk-box-shadow-large" v-bind:width="width" v-bind:height="height" v-bind:src="iframe"></iframe>

            </div>
        </div>
    </div>

  <?php endif; ?>

</div>
