<?= $view->script('page-index' , 'pasmodules:app/bundle/page-index.js' , 'vue') ?>
<div id="app">

  <div uk-filter="target: .category-filter">

    <ul class="uk-subnav uk-subnav-pill">
        <li uk-filter-control><a href="#">All</a></li>
        <?php foreach ($categorys as $category): ?>
          <li uk-filter-control=".<?= 'category'.$category->id ?>"><a href="#"><?= $category->title ?></a></li>
        <?php endforeach; ?>
    </ul>

    <ul class="category-filter uk-child-width-1-2 uk-child-width-1-3@m uk-grid-match" uk-grid>
        <?php foreach ($modules as $module): ?>
          <li class="<?= 'category'.$module->category_id ?>">
              <div class="uk-card uk-card-default">
                <?php if (!empty($module->data['image']['src'])): ?>
                  <div class="uk-card-media-top">
                    <a class="uk-link-reset" href="<?= $view->url('@projects/id', ['id' => $module->id]) ?>">
                      <img data-src="<?= $module->data['image']['src'] ?>" alt="<?= $module->data['image']['alt'] ?>" uk-img>
                    </a>
                  </div>
                <?php endif; ?>
                <div class="uk-padding-small">
                  <h3 class="uk-h4 uk-margin-remove"><a class="uk-link-reset" href="<?= $view->url('@projects/id', ['id' => $module->id]) ?>"><?= $module->title ?></a></h3>
                  <?php if (!empty($module->excerpt)): ?>
                    <p class="uk-margin-remove" style="font-size:0.7rem">
                      <?= $module->excerpt ?>
                    </p>
                  <?php endif; ?>
                </div>
              </div>
          </li>
        <?php endforeach; ?>
    </ul>

  </div>

</div>
