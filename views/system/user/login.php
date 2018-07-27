<div class="uk-width-large uk-margin uk-align-center">
  <div class="uk-card uk-card-default uk-padding">
    <form class="pk-user pk-user-login uk-form uk-form-stacked uk-width-medium-1-2 uk-width-large-1-3 uk-container-center" action="<?= $view->url('@user/authenticate') ?>" method="post">

        <h1 class="uk-h2 uk-text-center"><?= __('Sign in to your account') ?></h1>

        <?= $view->render('messages') ?>

        <div class="uk-form-row">
            <input class="uk-width-1-1 uk-input" type="text" name="credentials[username]" value="<?= $this->escape($last_username) ?>" placeholder="<?= __('Username') ?>" required autofocus>
        </div>

        <div class="uk-form-row uk-margin-small">
            <input class="uk-width-1-1 uk-input" type="password" name="credentials[password]" value="" placeholder="<?= __('Password') ?>" required>
        </div>

        <p class="uk-form-row uk-margin-small-bottom">
            <button class="uk-button pas-button-primary uk-width-1-1" type="submit"><?= __('Sign in') ?></button>
        </p>

        <ul class="uk-flex uk-flex-middle uk-text-small uk-grid">
            <li>
                <label><input type="checkbox" class="uk-checkbox" name="remember_me"> <?= __('Remember Me') ?></label>
            </li>
            <li class="uk-text-right">
                <a class="uk-link" href="<?= $view->url('@user/resetpassword') ?>"><?= __('Request Password') ?></a>
            </li>
        </ul>

        <?php if ($app->module('system/user')->config('registration') != 'admin') : ?>
        <p class="uk-margin-large-top uk-text-center"><?= __('No account yet?') ?> <a href="<?= $view->url('@user/registration') ?>"><?= __('Sign up now') ?></a></p>
        <?php endif ?>

        <input type="hidden" name="redirect" value="<?= $this->escape($redirect) ?>">
        <?php $view->token()->get() ?>

    </form>
  </div>
</div>
