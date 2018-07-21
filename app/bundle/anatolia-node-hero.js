/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

	var __vue_script__, __vue_template__
	var __vue_styles__ = {}
	__vue_script__ = __webpack_require__(1)
	if (Object.keys(__vue_script__).some(function (key) { return key !== "default" && key !== "__esModule" })) {
	  console.warn("[vue-loader] app/components/anatolia-node-hero.vue: named exports in *.vue files are ignored.")}
	__vue_template__ = __webpack_require__(5)
	module.exports = __vue_script__ || {}
	if (module.exports.__esModule) module.exports = module.exports.default
	var __vue_options__ = typeof module.exports === "function" ? (module.exports.options || (module.exports.options = {})) : module.exports
	if (__vue_template__) {
	__vue_options__.template = __vue_template__
	}
	if (!__vue_options__.computed) __vue_options__.computed = {}
	Object.keys(__vue_styles__).forEach(function (key) {
	var module = __vue_styles__[key]
	__vue_options__.computed[key] = function () { return module }
	})
	if (false) {(function () {  module.hot.accept()
	  var hotAPI = require("vue-hot-reload-api")
	  hotAPI.install(require("vue"), false)
	  if (!hotAPI.compatible) return
	  var id = "_v-420ae8cf/anatolia-node-hero.vue"
	  if (!module.hot.data) {
	    hotAPI.createRecord(id, module.exports)
	  } else {
	    hotAPI.update(id, module.exports, __vue_template__)
	  }
	})()}

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';

	module.exports = {
	  props: ['config', 'node'],

	  components: {
	    inputImageFramework: __webpack_require__(2)
	  },

	  section: {
	    label: 'Hero',
	    priority: 90
	  }
	};
	window.Site.components['anatolia-node-hero'] = module.exports;

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

	var __vue_script__, __vue_template__
	var __vue_styles__ = {}
	__vue_script__ = __webpack_require__(3)
	if (Object.keys(__vue_script__).some(function (key) { return key !== "default" && key !== "__esModule" })) {
	  console.warn("[vue-loader] app/components/input-image-framework.vue: named exports in *.vue files are ignored.")}
	__vue_template__ = __webpack_require__(4)
	module.exports = __vue_script__ || {}
	if (module.exports.__esModule) module.exports = module.exports.default
	var __vue_options__ = typeof module.exports === "function" ? (module.exports.options || (module.exports.options = {})) : module.exports
	if (__vue_template__) {
	__vue_options__.template = __vue_template__
	}
	if (!__vue_options__.computed) __vue_options__.computed = {}
	Object.keys(__vue_styles__).forEach(function (key) {
	var module = __vue_styles__[key]
	__vue_options__.computed[key] = function () { return module }
	})
	if (false) {(function () {  module.hot.accept()
	  var hotAPI = require("vue-hot-reload-api")
	  hotAPI.install(require("vue"), false)
	  if (!hotAPI.compatible) return
	  var id = "_v-707be9d2/input-image-framework.vue"
	  if (!module.hot.data) {
	    hotAPI.createRecord(id, module.exports)
	  } else {
	    hotAPI.update(id, module.exports, __vue_template__)
	  }
	})()}

/***/ }),
/* 3 */
/***/ (function(module, exports) {

	'use strict';

	module.exports = {

	    props: {
	        class: {
	            type: String,
	            default: ''
	        },
	        image: Object
	    },

	    data: function data() {
	        return _.merge({
	            img: {},
	            blends: null
	        }, $pagekit);
	    },

	    ready: function ready() {
	        var _this = this;

	        this.$set('image', this.image || { src: '', blend: '', size: '', fixed: '' });
	        this.$set('img', _.extend({}, this.image));

	        this.$http.get('apianatolia/getblend').then(function (response) {
	            _this.$set('blends', response.data.blendList);
	        });
	    },

	    methods: {

	        pick: function pick() {
	            this.img.src = this.image.src;
	            this.img.blend = this.image.blend;
	            this.img.size = this.image.size;
	            this.img.fixed = this.image.fixed;
	            this.$refs.modal.open();
	        },

	        update: function update() {
	            this.image.src = this.img.src;
	            this.image.blend = this.img.blend;
	            this.image.size = this.img.size;
	            this.image.fixed = this.img.fixed;
	            this.$refs.modal.close();
	        },

	        remove: function remove() {
	            this.img.src = '';
	            this.image.src = '';
	        }
	    }

	};

	Vue.component('input-image-framework', function (resolve, reject) {
	    Vue.asset({
	        js: ['app/assets/uikit/js/components/upload.min.js', 'app/system/modules/finder/app/bundle/panel-finder.js']
	    }).then(function () {
	        resolve(module.exports);
	    });
	});

/***/ }),
/* 4 */
/***/ (function(module, exports) {

	module.exports = "\n\n<a class=\"uk-placeholder uk-text-center uk-display-block uk-margin-remove\" v-if=\"!image.src\" @click.prevent=\"pick\">\n    <img width=\"60\" height=\"60\" :alt=\"'Placeholder Image' | trans\" :src=\"$url('app/system/assets/images/placeholder-image.svg')\">\n\n    <p class=\"uk-text-muted uk-margin-small-top\">{{ 'Add Image' | trans }}</p>\n</a>\n\n<div class=\"uk-overlay uk-overlay-hover uk-visible-hover {{ class }}\" v-else>\n\n    <img :src=\"$url(image.src)\">\n\n    <div class=\"uk-overlay-panel uk-overlay-background uk-overlay-fade\"></div>\n\n    <a class=\"uk-position-cover\" @click.prevent=\"pick\"></a>\n\n    <div class=\"uk-panel-badge pk-panel-badge uk-hidden\">\n        <ul class=\"uk-subnav pk-subnav-icon\">\n            <li>\n                <a class=\"pk-icon-delete pk-icon-hover\" :title=\"'Delete' | trans\" data-uk-tooltip=\"{delay: 500}\" @click.prevent=\"remove\"></a>\n            </li>\n        </ul>\n    </div>\n\n</div>\n\n<v-modal v-ref:modal>\n    <form class=\"uk-form uk-form-stacked\" @submit=\"update\">\n\n        <div class=\"uk-modal-header\">\n            <h2>{{ 'Image' | trans }}</h2>\n        </div>\n\n        <div class=\"uk-form-row\">\n            <input-image :source.sync=\"img.src\"></input-image>\n        </div>\n\n        <div class=\"uk-form-row\">\n            <label for=\"form-src\" class=\"uk-form-label\">{{ 'URL' | trans }}</label>\n            <div class=\"uk-form-controls\">\n                <input id=\"form-src\" class=\"uk-width-1-1\" type=\"text\" v-model=\"img.src\" lazy>\n            </div>\n        </div>\n\n        <div class=\"uk-form-row\">\n            <label for=\"form-blend\" class=\"uk-form-label\">{{ 'Blend' | trans }}</label>\n            <div class=\"uk-form-controls\">\n                <select id=\"form-blend\" class=\"uk-width-1-1\" v-model=\"img.blend\">\n                  <option value=\"\">None Blend</option>\n                  <option v-for=\"blend in blends\" v-bind:value=\"blend.key\">{{blend.name}}</option>\n                </select>\n            </div>\n        </div>\n\n        <div class=\"uk-form-row\">\n            <label for=\"form-size\" class=\"uk-form-label\">{{ 'Size' | trans }}</label>\n            <div class=\"uk-form-controls\">\n                <select id=\"form-size\" class=\"uk-width-1-1\" v-model=\"img.size\">\n                  <option value=\"uk-background-cover\" :selected=\"!img.size\">Cover</option>\n                  <option value=\"uk-background-contain\">Contain</option>\n                </select>\n            </div>\n        </div>\n\n        <div class=\"uk-form-row \">\n            <div class=\"uk-form-controls\">\n              <label for=\"form-fixed\" >{{ 'Fixed' | trans }}</label>\n              <input type=\"checkbox\" id=\"form-fixed\" value=\"true\" v-model=\"img.fixed\" />\n            </div>\n        </div>\n\n        <div class=\"uk-modal-footer uk-text-right\">\n            <button class=\"uk-button uk-button-link uk-modal-close\" type=\"button\">{{ 'Cancel' | trans }}</button>\n            <button class=\"uk-button uk-button-link\" type=\"button\" @click.prevent=\"update\">{{ 'Update' | trans }}</button>\n        </div>\n\n    </form>\n</v-modal>\n\n";

/***/ }),
/* 5 */
/***/ (function(module, exports) {

	module.exports = "\n<div class=\"uk-grid pk-grid-large pk-width-sidebar-large uk-form-stacked\" data-uk-grid-margin>\n  <div class=\"pk-width-content\">\n\n    <div class=\"uk-form-row\">\n        <v-editor :value.sync=\"node.theme.hero.content\" :options=\"{markdown : false}\"></v-editor>\n    </div>\n\n  </div>\n  <div class=\"pk-width-sidebar\">\n\n    <div class=\"uk-form-row\">\n        <label for=\"form-status\" class=\"uk-form-label\">{{ 'Status' | trans }}</label>\n\n        <div class=\"uk-form-controls\">\n            <select id=\"form-status\" class=\"uk-form-width-large\" v-model=\"node.theme.hero.status\">\n                <option value=\"0\" :selected=\"!node.theme.hero\">{{ 'Disabled' | trans }}</option>\n                <option value=\"1\">{{ 'Enabled' | trans }}</option>\n            </select>\n        </div>\n    </div>\n\n    <div class=\"uk-form-row\">\n        <label for=\"form-image\" class=\"uk-form-label\">{{ 'Image' | trans }}</label>\n        <div class=\"uk-form-controls\">\n            <input-image-framework :image.sync=\"node.theme.hero.section_bg\" class=\"pk-image-max-height\"></input-image-framework>\n        </div>\n    </div>\n\n    <div class=\"uk-form-row\">\n        <label for=\"form-status\" class=\"uk-form-label\">{{ 'Section Color' | trans }}</label>\n\n        <div class=\"uk-form-controls\">\n            <select id=\"form-status\" class=\"uk-form-width-large\" v-model=\"node.theme.hero.section_color\">\n                <option value=\"uk-section-default\">Default</option>\n                <option value=\"uk-section-muted\">Muted</option>\n                <option value=\"uk-section-primary\">Primary</option>\n                <option value=\"uk-section-secondary\">Secondary</option>\n            </select>\n        </div>\n    </div>\n\n    <div class=\"uk-form-row\">\n        <label for=\"form-status\" class=\"uk-form-label\">{{ 'Height' | trans }}</label>\n\n        <div class=\"uk-form-controls\">\n            <select id=\"form-status\" class=\"uk-form-width-large\" v-model=\"node.theme.hero.height\">\n                <option value=\"uk-height-viewport\">Viewport</option>\n                <option value=\"uk-height-small\">Small</option>\n                <option value=\"uk-height-medium\">Medium</option>\n                <option value=\"uk-height-large\">Large</option>\n            </select>\n        </div>\n    </div>\n\n    <div class=\"uk-form-row\">\n        <label for=\"form-status\" class=\"uk-form-label\">{{ 'Content' | trans }}</label>\n\n        <div class=\"uk-form-controls\">\n            <select id=\"form-status\" class=\"uk-form-width-large\" v-model=\"node.theme.hero.text_color\">\n                <option value=\"\">Default</option>\n                <option value=\"uk-dark\">Dark</option>\n                <option value=\"uk-light\">Light</option>\n            </select>\n        </div>\n    </div>\n\n    <div class=\"uk-form-row\">\n        <span class=\"uk-form-label\">{{ 'Other Configurations' | trans }}</span>\n\n        <div class=\"uk-form-controls uk-form-controls-text\">\n            <label><input type=\"checkbox\" value=\"center-content\" v-model=\"node.theme.hero.contrast_logo\"> {{ 'Contrast Logo' | trans }}</label>\n        </div>\n        <div class=\"uk-form-controls uk-form-controls-text\">\n            <label><input type=\"checkbox\" value=\"center-content\" v-model=\"node.theme.title_hide\"> {{ 'Title Hide' | trans }}</label>\n        </div>\n        <div class=\"uk-form-controls uk-form-controls-text\">\n            <label><input type=\"checkbox\" value=\"center-content\" v-model=\"node.theme.content_hide\"> {{ 'Content Hide' | trans }}</label>\n        </div>\n\n    </div>\n\n  </div>\n</div>\n";

/***/ })
/******/ ]);