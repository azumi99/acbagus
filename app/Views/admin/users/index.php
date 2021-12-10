<?= $this->extend('admin/template/admin') ?>
<?= $this->section('title') ?>
acbagus.id | Admin Users
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>All Users</h1>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body py-4">
                        <?php if ($validation->hasError('foto_tek') or $validation->hasError('email_tek') or $validation->hasError('no_hp')) { ?>
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
                            <table style="text-align: center" id="dataTable" class="table table-striped " style="width:100%">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Created</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($users as $value) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value['created_at']; ?></td>
                                            <td><?= $value['username']; ?></td>
                                            <td><?= $value['email']; ?></td>
                                            <td>
                                                <?php
                                                $status = $value['active'];
                                                if ($status == 0) {
                                                    echo "<span class='badge rounded-pill bg-warning'>Belum Aktif</span>";
                                                } else {
                                                    echo "<span class='badge rounded-pill bg-success'>Teraktivasi</span>";
                                                }
                                                ?>
                                            </td>
                                            <td><img style="width: 30px;" src="<?= base_url('/img_users/' . $value['image']); ?>" alt=""></td>
                                            <td>
                                                <form action="<?= base_url('users/delete/' . $value['id']); ?>" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <?= csrf_field() ?>
                                                    <button type="submit" onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Drop">
                                                        <i class="fas fa-window-close"></i>
                                                    </button>
                                                </form>

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
<?= $this->endSection() ?>