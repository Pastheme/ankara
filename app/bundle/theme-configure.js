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

	window.ThemeConfigure = {

	  el: '#app',

	  name: 'ThemeConfigure',

	  data: function(){
	    return {
	      data: window.$data,
	      config: window.$data.config,
	      sections: [],
	    }
	  },

	  created: function () {

	      var sections = [];

	      _.forIn(this.$options.components, function (component, name) {

	          var options = component.options || {};

	          if (options.section) {
	              sections.push(_.extend({name: name, priority: 0}, options.section));
	          }

	      });

	      this.$set('sections', _.sortBy(sections, 'priority'));

	  },

	  ready: function () {
	      this.tab = UIkit.tab(this.$els.tab, {connect: this.$els.content});
	  },

	  methods:{

	    save: function(){

	      this.$http.post('apianatolia/savethemeconfig', {data:this.config}).then(response => {
	        UIkit.notify(this.$trans('Saved.'), '');
	      }, response => {

	      });

	    }

	  },

	  components: {

	      general: __webpack_require__(6),

	  }

	}

	Vue.ready(window.ThemeConfigure);


/***/ }),
/* 1 */,
/* 2 */,
/* 3 */,
/* 4 */,
/* 5 */,
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

	var __vue_script__, __vue_template__
	var __vue_styles__ = {}
	__vue_script__ = __webpack_require__(7)
	if (Object.keys(__vue_script__).some(function (key) { return key !== "default" && key !== "__esModule" })) {
	  console.warn("[vue-loader] app/components/theme-configure/general.vue: named exports in *.vue files are ignored.")}
	__vue_template__ = __webpack_require__(8)
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
	  var id = "_v-541cc30c/general.vue"
	  if (!module.hot.data) {
	    hotAPI.createRecord(id, module.exports)
	  } else {
	    hotAPI.update(id, module.exports, __vue_template__)
	  }
	})()}

/***/ }),
/* 7 */
/***/ (function(module, exports) {

	'use strict';

	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	exports.default = {

	  props: ['data'],

	  section: {
	    label: 'General',
	    priority: 0
	  }
	};

/***/ }),
/* 8 */
/***/ (function(module, exports) {

	module.exports = "\n<div>\n\n  <div class=\"uk-form-row uk-form-horizontal\">\n    <label class=\"uk-form-label\"> {{'Navbar Container' | trans}} </label>\n    <div class=\"uk-form-controls\">\n      <select class=\"uk-width-1-1 uk-form-large\" v-model=\"data.config.navbar.container\">\n        <option value=\"uk-container\">Normal</option>\n        <option value=\"uk-container uk-container-small\">Small</option>\n        <option value=\"uk-container uk-container-large\">Large</option>\n      </select>\n    </div>\n  </div>\n\n  <div class=\"uk-form-row uk-form-horizontal\">\n    <label class=\"uk-form-label\"> {{'Navbar Mode' | trans}} </label>\n    <div class=\"uk-form-controls\">\n      <select class=\"uk-width-1-1 uk-form-large\" v-model=\"data.config.navbar.mode\">\n        <option value=\"default\">Center Menu</option>\n        <option value=\"logo_center\">Logo Center</option>\n        <option value=\"modal\">Modal Menu</option>\n      </select>\n    </div>\n  </div>\n\n  <div class=\"uk-margin uk-grid uk-grid-small uk-grid-width-medium-1-3\">\n    <div>\n      <div class=\"uk-cover-background uk-position-relative\">\n        <img v-bind:src=\"data.img['centermenu']\">\n        <div v-if=\"data.config.navbar.mode == 'default'\" class=\"uk-position-cover uk-position-medium uk-flex uk-flex-center uk-flex-bottom\">\n          <div class=\"uk-badge uk-badge-success\">Selected</div>\n        </div>\n      </div>\n    </div>\n    <div>\n      <div class=\"uk-cover-background uk-position-relative\">\n        <img v-bind:src=\"data.img['logocenter']\">\n        <div v-if=\"data.config.navbar.mode == 'logo_center'\" class=\"uk-position-cover uk-position-medium uk-flex uk-flex-center uk-flex-bottom\">\n          <div class=\"uk-badge uk-badge-success\">Selected</div>\n        </div>\n      </div>\n    </div>\n    <div>\n      <div class=\"uk-cover-background uk-position-relative\">\n        <img v-bind:src=\"data.img['modalmenu']\">\n        <div v-if=\"data.config.navbar.mode == 'modal'\" class=\"uk-position-cover uk-position-medium uk-flex uk-flex-center uk-flex-bottom\">\n          <div class=\"uk-badge uk-badge-success\">Selected</div>\n        </div>\n      </div>\n    </div>\n  </div>\n\n  <div class=\"uk-form-row uk-form-horizontal\">\n    <label class=\"uk-form-label\"> {{'Logo Contrast' | trans}} </label>\n    <div class=\"uk-form-controls\">\n      <input-image :source.sync=\"data.config.others.logo_contrast\"></input-image>\n    </div>\n  </div>\n\n  <hr />\n\n  <div class=\"uk-form-row\">\n    <label class=\"uk-form-label\"> {{'Content Container' | trans}} </label>\n    <div class=\"uk-form-controls\">\n      <select class=\"uk-width-1-1 uk-form-large\" v-model=\"data.config.content\">\n        <option value=\"uk-container\">Normal</option>\n        <option value=\"uk-container uk-container-small\">Small</option>\n        <option value=\"uk-container uk-container-large\">Large</option>\n      </select>\n    </div>\n  </div>\n\n  <div class=\"uk-form-row uk-form-horizontal\">\n    <label class=\"uk-margin-remove uk-form-label\"> {{'Footer Copyright Hide' | trans}} </label>\n    <div class=\"uk-form-controls\">\n      <input type=\"checkbox\" v-model=\"data.config.footer.active\">\n    </div>\n  </div>\n\n  <div class=\"uk-form-row\">\n    <label class=\"uk-margin-remove uk-form-label\"> {{'Copyright Text' | trans}} </label>\n    <div class=\"uk-form-controls\">\n      <input type=\"text\" class=\"uk-form-large uk-width-1-1\" v-model=\"data.config.footer.content\">\n    </div>\n  </div>\n\n</div>\n";

/***/ })
/******/ ]);