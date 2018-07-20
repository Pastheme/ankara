<template>
  <div>

    <div class="uk-form-row uk-form-horizontal">
      <label class="uk-form-label"> {{'Navbar Container' | trans}} </label>
      <div class="uk-form-controls">
        <select class="uk-width-1-1 uk-form-large" v-model="data.config.navbar.container">
          <option value="uk-container">Normal</option>
          <option value="uk-container uk-container-small">Small</option>
          <option value="uk-container uk-container-large">Large</option>
        </select>
      </div>
    </div>

    <div class="uk-form-row uk-form-horizontal">
      <label class="uk-form-label"> {{'Navbar Mode' | trans}} </label>
      <div class="uk-form-controls">
        <select class="uk-width-1-1 uk-form-large" v-model="data.config.navbar.mode">
          <option value="default">Center Menu</option>
          <option value="logo_center">Logo Center</option>
          <option value="modal">Modal Menu</option>
        </select>
      </div>
    </div>

    <div class="uk-margin uk-grid uk-grid-small uk-grid-width-medium-1-3">
      <div>
        <div class="uk-cover-background uk-position-relative">
          <img src="/packages/pastheme/anatolia/assets/img/admin/center-menu.svg">
          <div v-if="data.config.navbar.mode == 'default'" class="uk-position-cover uk-position-medium uk-flex uk-flex-center uk-flex-bottom">
            <div class="uk-badge uk-badge-success">Selected</div>
          </div>
        </div>
      </div>
      <div>
        <div class="uk-cover-background uk-position-relative">
          <img src="/packages/pastheme/anatolia/assets/img/admin/logo-center.svg" />
          <div v-if="data.config.navbar.mode == 'logo_center'" class="uk-position-cover uk-position-medium uk-flex uk-flex-center uk-flex-bottom">
            <div class="uk-badge uk-badge-success">Selected</div>
          </div>
        </div>
      </div>
      <div>
        <div class="uk-cover-background uk-position-relative">
          <img src="/packages/pastheme/anatolia/assets/img/admin/modal-menu.svg" />
          <div v-if="data.config.navbar.mode == 'modal'" class="uk-position-cover uk-position-medium uk-flex uk-flex-center uk-flex-bottom">
            <div class="uk-badge uk-badge-success">Selected</div>
          </div>
        </div>
      </div>
    </div>

    <div class="uk-form-row uk-form-horizontal">
      <label class="uk-form-label"> {{'Logo Contrast' | trans}} </label>
      <div class="uk-form-controls">
        <input-image :image.sync="data.config.others.logo.contrast"></input-image>
      </div>
    </div>

    <hr />

    <div class="uk-form-row">
      <label class="uk-form-label"> {{'Content Container' | trans}} </label>
      <div class="uk-form-controls">
        <select class="uk-width-1-1 uk-form-large" v-model="data.config.content">
          <option value="uk-container">Normal</option>
          <option value="uk-container uk-container-small">Small</option>
          <option value="uk-container uk-container-large">Large</option>
        </select>
      </div>
    </div>

    <div class="uk-form-row uk-form-horizontal">
      <label class="uk-margin-remove uk-form-label"> {{'Footer Copyright Hide' | trans}} </label>
      <div class="uk-form-controls">
        <input type="checkbox" v-model="data.config.footer.active">
      </div>
    </div>

    <div class="uk-form-row">
      <label class="uk-margin-remove uk-form-label"> {{'Copyright Text' | trans}} </label>
      <div class="uk-form-controls">
        <input type="text" class="uk-form-large uk-width-1-1" v-model="data.config.footer.content">
      </div>
    </div>

  </div>
</template>

<script>
  export default{

    props: ['data'],

    section:{
      label: 'General',
      priority: 0
    }
  }
</script>
