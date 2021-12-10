<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <div class="d-flex justify-content-center py-4">
                    <a href="index.html" class="logo d-flex align-items-center w-auto">
                        <span class="d-none d-lg-block">acbagus</span>
                    </a>
                </div><!-- End Logo -->

                <div class="card mb-3">

                    <div class="card-body">

                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                            <p class="text-center small">Enter your username & password to login</p>
                        </div>

                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <form class="row g-3" action="<?= route_to('login') ?>" method="post">
                            <?= csrf_field() ?>

                            <?php if ($config->validFields === ['email']) : ?>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="login"><?= lang('Auth.email') ?></label>
                                        <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="">
                                        <div class="invalid-feedback">
                                            <?= session('errors.login') ?>
                                        </div>
                                    </div>
                                </div>
                            <?php else : ?>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="login"><?= lang('Auth.emailOrUsername') ?></label>
                                        <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="">
                                        <div class="invalid-feedback">
                                            <?= session('errors.login') ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="password"><?= lang('Auth.password') ?></label>
                                    <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="">
                                    <div class="invalid-feedback">
                                        <?= session('errors.password') ?>
                                    </div>
                                </div>
                            </div>

                            <?php if ($config->allowRemembering) : ?>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                        <?= lang('Auth.rememberMe') ?>
                                    </label>
                                </div>
                            <?php endif; ?>

                            <br>
                            <div class="col-12 py-3">
                                <button type="submit" class="btn btn-primary btn-block w-100">Login</button>
                            </div>
                        </form>
                        <br />
                        <div class="col-12">
                            <?php if ($config->allowRegistration) : ?>
                                <p class="small mb-0"><a href="<?= route_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
                            <?php endif; ?>
                            <?php if ($config->activeResetter) : ?>
                                <p class="small mb-0"><a href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<?= $this->endSection() ?>