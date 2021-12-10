<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">

                <div class="card">
                    <h2 class="card-header"><?= lang('Auth.register') ?></h2>
                    <div class="card-body">

                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <form class="row g-3 py-2" action="<?= route_to('register') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="email"><?= lang('Auth.email') ?></label>
                                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="" value="<?= old('email') ?>">
                                    <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="username"><?= lang('Auth.username') ?></label>
                                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="" value="<?= old('username') ?>">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="password"><?= lang('Auth.password') ?></label>
                                    <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="" autocomplete="off">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                                    <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="" autocomplete="off">
                                </div>
                            </div>

                            <br>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.register') ?></button>
                            </div>
                        </form>


                        <hr>

                        <p><?= lang('Auth.alreadyRegistered') ?> <a href="<?= route_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>