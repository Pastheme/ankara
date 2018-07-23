<template lang="html">
  <div class="uk-grid pk-grid-large pk-width-sidebar-large uk-form-stacked" data-uk-grid-margin>
    <div class="pk-width-content">

      <div class="uk-form-row">
          <v-editor :value.sync="node.theme.hero.content" :options="{markdown : false}"></v-editor>
      </div>

    </div>
    <div class="pk-width-sidebar">

      <div class="uk-form-row">
          <label for="form-status" class="uk-form-label">{{ 'Status' | trans }}</label>

          <div class="uk-form-controls">
              <select id="form-status" class="uk-form-width-large" v-model="node.theme.hero.status">
                  <option value="0" :selected="!node.theme.hero">{{ 'Disabled' | trans }}</option>
                  <option value="1">{{ 'Enabled' | trans }}</option>
              </select>
          </div>
      </div>

      <div class="uk-form-row">
          <label for="form-image" class="uk-form-label">{{ 'Image' | trans }}</label>
          <div class="uk-form-controls">
              <input-image-framework :image.sync="node.theme.hero.section_bg" class="pk-image-max-height"></input-image-framework>
          </div>
      </div>

      <div class="uk-form-row">
          <label for="form-status" class="uk-form-label">{{ 'Section Color' | trans }}</label>

          <div class="uk-form-controls">
              <select id="form-status" class="uk-form-width-large" v-model="node.theme.hero.section_color">
                  <option value="uk-section-default">Default</option>
                  <option value="uk-section-muted">Muted</option>
                  <option value="uk-section-primary">Primary</option>
                  <option value="uk-section-secondary">Secondary</option>
              </select>
          </div>
      </div>

      <div class="uk-form-row">
          <label for="form-status" class="uk-form-label">{{ 'Height' | trans }}</label>

          <div class="uk-form-controls">
              <select id="form-status" class="uk-form-width-large" v-model="node.theme.hero.height">
                  <option value="uk-height-viewport">Viewport</option>
                  <option value="uk-height-small">Small</option>
                  <option value="uk-height-medium">Medium</option>
                  <option value="uk-height-large">Large</option>
              </select>
          </div>
      </div>

      <div class="uk-form-row">
          <label for="form-status" class="uk-form-label">{{ 'Content' | trans }}</label>

          <div class="uk-form-controls">
              <select id="form-status" class="uk-form-width-large" v-model="node.theme.hero.text_color">
                  <option value="">Default</option>
                  <option value="uk-dark">Dark</option>
                  <option value="uk-light">Light</option>
              </select>
          </div>
      </div>

      <div class="uk-form-row">
          <span class="uk-form-label">{{ 'Other Configurations' | trans }}</span>

          <div class="uk-form-controls uk-form-controls-text">
              <label><input type="checkbox" value="center-content" v-model="node.theme.hero.contrast_logo"> {{ 'Contrast Logo' | trans }}</label>
          </div>
          <div class="uk-form-controls uk-form-controls-text">
              <label><input type="checkbox" value="center-content" v-model="node.theme.title_hide"> {{ 'Title Hide' | trans }}</label>
          </div>
          <div class="uk-form-controls uk-form-controls-text">
              <label><input type="checkbox" value="center-content" v-model="node.theme.content_hide"> {{ 'Content Hide' | trans }}</label>
          </div>
          <div class="uk-form-controls uk-form-controls-text">
              <label><input type="checkbox" value="center-content" v-model="node.theme.hero.expand"> {{ 'Expand Height' | trans }}</label>
          </div>

      </div>

    </div>
  </div>
</template>

<script>
  module.exports = {
    props: ['config' , 'node'],

    components:{
      inputImageFramework: require('../components/input-image-framework.vue')
    },

    section: {
      label:'Hero',
      priority:90
    }
  }
  window.Site.components['anatolia-node-hero'] = module.exports;
</script>
