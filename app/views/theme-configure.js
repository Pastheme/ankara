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

      this.$http.post('apianatolia/savethemeconfig', {data:this.data}).then(response => {
        UIkit.notify(this.$trans('Saved.'), '');
      }, response => {

      });

    }

  },

  components: {

      general: require('../components/theme-configure/general.vue'),

  }

}

Vue.ready(window.ThemeConfigure);
