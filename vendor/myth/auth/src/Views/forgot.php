<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">

                <div class="card">
                    <h2 class="card-header"><?= lang('Auth.forgotPassword') ?></h2>
                    <div class="card-body py-2">

                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <p><?= lang('Auth.enterEmailForInstructions') ?></p>

                        <form class="row g-3 py-2" action="<?= route_to('forgot') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="email"><?= lang('Auth.emailAddress') ?></label>
                                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>">
                                    <div class="invalid-feedback">
                                        <?= session('errors.email') ?>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.sendInstructions') ?></button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>