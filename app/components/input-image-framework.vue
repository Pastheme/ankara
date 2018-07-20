<template>

    <a class="uk-placeholder uk-text-center uk-display-block uk-margin-remove" v-if="!image.src" @click.prevent="pick">
        <img width="60" height="60" :alt="'Placeholder Image' | trans" :src="$url('app/system/assets/images/placeholder-image.svg')">

        <p class="uk-text-muted uk-margin-small-top">{{ 'Add Image' | trans }}</p>
    </a>

    <div class="uk-overlay uk-overlay-hover uk-visible-hover {{ class }}" v-else>

        <img :src="$url(image.src)">

        <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade"></div>

        <a class="uk-position-cover" @click.prevent="pick"></a>

        <div class="uk-panel-badge pk-panel-badge uk-hidden">
            <ul class="uk-subnav pk-subnav-icon">
                <li>
                    <a class="pk-icon-delete pk-icon-hover" :title="'Delete' | trans" data-uk-tooltip="{delay: 500}" @click.prevent="remove"></a>
                </li>
            </ul>
        </div>

    </div>

    <v-modal v-ref:modal>
        <form class="uk-form uk-form-stacked" @submit="update">

            <div class="uk-modal-header">
                <h2>{{ 'Image' | trans }}</h2>
            </div>

            <div class="uk-form-row">
                <input-image :source.sync="img.src"></input-image>
            </div>

            <div class="uk-form-row">
                <label for="form-src" class="uk-form-label">{{ 'URL' | trans }}</label>
                <div class="uk-form-controls">
                    <input id="form-src" class="uk-width-1-1" type="text" v-model="img.src" lazy>
                </div>
            </div>

            <div class="uk-form-row">
                <label for="form-blend" class="uk-form-label">{{ 'Blend' | trans }}</label>
                <div class="uk-form-controls">
                    <select id="form-blend" class="uk-width-1-1" v-model="img.blend">
                      <option value="">None Blend</option>
                      <option v-for="blend in blends" v-bind:value="blend.key">{{blend.name}}</option>
                    </select>
                </div>
            </div>

            <div class="uk-form-row">
                <label for="form-size" class="uk-form-label">{{ 'Size' | trans }}</label>
                <div class="uk-form-controls">
                    <select id="form-size" class="uk-width-1-1" v-model="img.size">
                      <option value="uk-background-cover" :selected="!img.size">Cover</option>
                      <option value="uk-background-contain">Contain</option>
                    </select>
                </div>
            </div>

            <div class="uk-form-row ">
                <div class="uk-form-controls">
                  <label for="form-fixed" >{{ 'Fixed' | trans }}</label>
                  <input type="checkbox" id="form-fixed" value="true" v-model="img.fixed" />
                </div>
            </div>

            <div class="uk-modal-footer uk-text-right">
                <button class="uk-button uk-button-link uk-modal-close" type="button">{{ 'Cancel' | trans }}</button>
                <button class="uk-button uk-button-link" type="button" @click.prevent="update">{{ 'Update' | trans }}</button>
            </div>

        </form>
    </v-modal>

</template>

<script>

    module.exports = {

        props: {
            class: {
                type: String,
                default: ''
            },
            image: Object
        },

        data: function () {
            return _.merge({
              img: {},
              blends:null,
            }, $pagekit);
        },

        ready: function () {

            this.$set('image', this.image || {src: '', blend: '', size:'',fixed:''});
            this.$set('img', _.extend({}, this.image));

            this.$http.get('apiframework/getblend').then(response => {
              this.$set('blends' , response.data.blendList);
            });

        },

        methods: {

            pick: function () {
                this.img.src = this.image.src;
                this.img.blend = this.image.blend;
                this.img.size = this.image.size;
                this.img.fixed = this.image.fixed;
                this.$refs.modal.open();
            },

            update: function () {
                this.image.src = this.img.src;
                this.image.blend = this.img.blend;
                this.image.size = this.img.size;
                this.image.fixed = this.img.fixed;
                this.$refs.modal.close();
            },

            remove: function () {
                this.img.src = '';
                this.image.src = '';
            }
        }

    };

    Vue.component('input-image-framework', function (resolve, reject) {
        Vue.asset({
            js: [
                'app/assets/uikit/js/components/upload.min.js',
                'app/system/modules/finder/app/bundle/panel-finder.js'
            ]
        }).then(function () {
            resolve(module.exports);
        })
    });

</script>
