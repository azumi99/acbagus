<?= $this->extend('admin/template/admin') ?>
<?= $this->section('title') ?>
acbagus.id | Admin Group
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>User Group</h1>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body py-4">
                        <?php if ($validation->hasError('users_simpan') or $validation->hasError('group_simpan')) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $validation->listErrors() ?>
                            </div>
                        <?php } ?>
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan') ?>
                            </div>
                        <?php endif; ?>
                        <div class="table-responsive">
                            <table style="text-align: center" id="dataTable" class="table table-striped" style="width:100%">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($group as $value) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value->username; ?></td>
                                            <td><?= $value->email; ?></td>
                                            <td>
                                                <?php
                                                $role = $value->name;
                                                if ($role == 'admin') {
                                                    echo "<span class='badge rounded-pill bg-success'>$role</span>";
                                                } elseif ($role == 'user') {
                                                    echo "<span class='badge rounded-pill bg-warning'>$role</span>";
                                                } else {
                                                    echo "<span class='badge rounded-pill bg-danger'>$role</span>";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#usergroupModal<?= $value->id_role; ?>" class="btn btn-warning rounded-pill btn-sm" data-tooltip="tooltip" title="Ubah Role">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>
</main>
<?= $this->include('admin/user_group/edit'); ?>
<?= $this->endSection() ?>