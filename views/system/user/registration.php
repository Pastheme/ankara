<?php $view->script('registration', 'system/user:app/bundle/registration.js', ['vue', 'uikit-form-password']) ?>
<div class="uk-width-large uk-margin uk-align-center">
  <div class="uk-card uk-card-default uk-padding">
    <form id="user-registration" class="pk-user pk-user-registration uk-form uk-form-stacked uk-width-medium-1-2 uk-width-large-1-3 uk-container-center" v-validator="form" v-cloak @submit.prevent="submit | valid">

        <h1 class="uk-h2 uk-text-center"><?= __('Create an account') ?></h1>

        <div class="uk-alert uk-alert-danger" v-show="error">{{ error }}</div>

        <div class="uk-form-row">
            <input class="uk-width-1-1 uk-input uk-margin-small" type="text" name="username" placeholder="<?= __('Username') ?>" v-model="user.username" v-validate:pattern.literal="/^[a-zA-Z0-9._\-]{3,}$/">
            <p class="uk-form-help-block uk-text-danger" v-show="form.username.invalid"><?= __('Username is invalid.') ?></p>
        </div>

        <div class="uk-form-row">
            <input class="uk-width-1-1 uk-input uk-margin-small" type="text" name="name" placeholder="<?= __('Name') ?>" v-model="user.name" v-validate:required>
            <p class="uk-form-help-block uk-text-danger" v-show="form.name.invalid"><?= __('Name cannot be blank.') ?></p>
        </div>

        <div class="uk-form-row">
            <input class="uk-width-1-1 uk-input uk-margin-small" type="email" name="email" placeholder="<?= __('Email') ?>" v-model="user.email" v-validate:email v-validate:required>
            <p class="uk-form-help-block uk-text-danger" v-show="form.email.invalid"><?= __('Email address is invalid.') ?></p>
        </div>

        <div class="uk-form-row">
            <div class="uk-form-password uk-width-1-1">
                <input class="uk-width-1-1 uk-input uk-margin-small" type="password" name="password" placeholder="<?= __('Password') ?>" v-model="user.password" v-validate:required v-validate:pattern.literal="/^.{6,}$/">
                <a href="" class="uk-text-small uk-form-password-toggle" tabindex="-1" data-uk-form-password="{ lblShow: '<?= __('Show') ?>', lblHide: '<?= __('Hide') ?>' }"></i><?= __('Show') ?></a>
            </div>
            <p class="uk-form-help-block uk-text-danger" v-show="form.password.invalid"><?= __('Password must be 6 characters or longer.') ?></p>
        </div>

        <p class="uk-form-row">
            <button class="uk-button pas-button-primary uk-width-1-1" type="submit"><?= __('Sign up') ?></button>
        </p>

        <p class="uk-text-center"><?= __('Already have an account?') ?> <a href="<?= $view->url('@user/login') ?>"><?= __('Login!') ?></a></p>

    </form>
  </div>
</div>
