<?= $this->extend('user_template/user') ?>
<?= $this->section('title') ?>
acbagus.id | Profile
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- breadcrumb -->
<div class="container space">
    <nav aria-label="breadcrumb space">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('/'); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </nav>
</div>
<div class="container">
    <?php if ($validation->hasError('uploudImage') or $validation->hasError('username') or $validation->hasError('email') or $validation->hasError('fullname')) { ?>
        <div class="alert alert-danger" role="alert">
            <?= $validation->listErrors() ?>
        </div>
    <?php } ?>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan') ?>
        </div>
    <?php endif; ?>
    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <div style="width: 150px; border-radius:50%; height:150px; background: url('<?= base_url("/img_users/" . user()->image); ?>') center center; background-size:250px; background-repeat:no-repeat;"></div>
                        <h2><?= user()->username; ?></h2>
                        <h3>admin</h3>
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                <h5 class="card-title">Profile Details</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Username</div>
                                    <div class="col-lg-9 col-md-8"><?= user()->username; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Full Name</div>
                                    <div class="col-lg-9 col-md-8">
                                        <?php if (user()->fullname == NULL) {
                                            echo '-';
                                        } else {
                                            echo user()->fullname;
                                        }
                                        ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8"><?= user()->email; ?></div>
                                </div>

                            </div>

                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                <!-- Profile Edit Form -->

                                <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                    <div class="col-md-8 col-lg-9">
                                        <img src="<?= base_url("/img_users/" . user()->image); ?>" alt="Profile">
                                        <div class="pt-2">
                                            <a href="" type="button" data-bs-toggle="modal" data-bs-target="#uploudModal" class="btn btn-primary btn-sm" data-tooltip="tooltip" title="Update Image Profile"><i class="fas fa-file-upload"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <form action="<?= base_url('usersprofile/update/' . user()->id); ?>" method="POST">
                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Username</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="username" type="text" class="form-control" id="username" value="<?= user()->username; ?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="fullname" type="text" class="form-control" id="fullName" value="<?= user()->fullname; ?>">
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="email" type="email" class="form-control" id="Email" value="<?= user()->email; ?>">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form><!-- End Profile Edit Form -->

                            </div>

                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                <!-- Change Password Form -->
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
                                        <button type="submit" class="btn btn-primary "><?= lang('Auth.sendInstructions') ?></button>
                                    </div>
                                </form>

                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<?= $this->include('user/modal/modal_profile');; ?>
<?= $this->endSection(); ?>