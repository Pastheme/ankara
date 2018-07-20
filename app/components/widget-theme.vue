<template lang="html">
  <div class="uk-grid pk-grid-large pk-width-sidebar-large uk-form-stacked" data-uk-grid-margin>
    <div v-if="modules.length" class="pk-width-content">

      <div v-el:content>
          <div v-for="module in modules">
              <component :is="module.name"></component>
          </div>
      </div>

    </div>

    <div class="pk-width-content uk-flex uk-flex-middle uk-flex-center" v-if="!modules.length">
      <div>
        <h1>{{'This Theme\'s Hasn\'t Module'}}</h1>
      </div>
    </div>

    <div class="pk-width-sidebar">

      <div class="uk-form-row">
          <label for="form-image" class="uk-form-label">{{ 'Image' | trans }}</label>
          <div class="uk-form-controls">
              <input-image-framework :image.sync="widget.theme.section_bg" class="pk-image-max-height"></input-image-framework>
          </div>
      </div>

      <div class="uk-form-row">
          <label for="form-status" class="uk-form-label">{{ 'Section Color' | trans }}</label>

          <div class="uk-form-controls">
              <select id="form-status" class="uk-form-width-large" v-model="widget.theme.section_color">
                  <option value="uk-section-default" :selected="!widget.theme.section_color">Default</option>
                  <option value="uk-section-muted">Muted</option>
                  <option value="uk-section-primary">Primary</option>
                  <option value="uk-section-secondary">Secondary</option>
              </select>
          </div>
      </div>

      <div class="uk-form-row">
          <label for="form-status" class="uk-form-label">{{ 'Height' | trans }}</label>

          <div class="uk-form-controls">
              <select id="form-status" class="uk-form-width-large" v-model="widget.theme.height">
                  <option value="uk-height-viewport" :selected="!widget.theme.height">Viewport</option>
                  <option value="uk-height-small">Small</option>
                  <option value="uk-height-medium">Medium</option>
                  <option value="uk-height-large">Large</option>
              </select>
          </div>
      </div>

      <div class="uk-form-row">
          <label for="form-status" class="uk-form-label">{{ 'Content' | trans }}</label>

          <div class="uk-form-controls">
              <select id="form-status" class="uk-form-width-large" v-model="widget.theme.text_color">
                  <option value="" :selected="!widget.theme.text_color">Default</option>
                  <option value="uk-dark">Dark</option>
                  <option value="uk-light">Light</option>
              </select>
          </div>
      </div>

      <div class="uk-form-row">
          <span class="uk-form-label">{{ 'Other Configurations' | trans }}</span>

          <div class="uk-form-controls uk-form-controls-text">
              <label><input type="checkbox" value="center-content" v-model="widget.theme.title_hile"> {{ 'Title Hide' | trans }}</label>
          </div>

      </div>

    </div>
  </div>
</template>

<script>
  module.exports = {
    props: ['widget', 'config'],

    data: function () {
        return {
            modules: []
        }
    },

    created: function () {

        var modules = [];

        _.forIn(this.$options.components, function (component, name) {

            var options = component.options || {};
            console.log(options);
            if (options.module) {
                modules.push(_.extend({name: name, priority: 0}, options.module));
            }

        });

        this.$set('modules', _.sortBy(modules, 'priority'));

    },

    components:{
      inputImageFramework: require('../components/input-image-framework.vue'),
      //settings:require('../modules/sidebar.vue')
    },

    section: {
      label:'Theme',
      priority:90
    }

  }
  window.Widgets.components['widget-theme'] = module.exports;
</script>
