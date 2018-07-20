<?= $view->script('theme-configure' , 'theme:app/bundle/theme-configure.js' , 'vue') ?>

<form id="app" class="uk-form" v-on:submit.prevent="save" v-cloak>

  <div class="uk-clearfix">
    <button class="uk-button uk-button-primary uk-align-right">{{'Save' | trans}}</button>
  </div>

  <div class="uk-grid pk-grid-large pk-width-sidebar-large uk-form-stacked" data-uk-grid-margin>

    <div class="pk-width-sidebar">
      <div class="uk-panel">

        <ul class="uk-nav uk-nav-side pk-nav-large" v-el:tab>
          <li v-for="section in sections"><a>{{ section.label | trans }}</a></li>
        </ul>

      </div>
    </div>

    <div class="pk-width-content">
      <div class="uk-switcher uk-margin" v-el:content>

          <div v-for="section in sections">
              <component :is="section.name" :data.sync="data" :title.sync="section"></component>
          </div>

      </div>
    </div>

  </div>

</form>
