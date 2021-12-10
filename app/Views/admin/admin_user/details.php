<?= $this->extend('admin/template/admin') ?>
<?= $this->section('title') ?>
acbagus.id | Admin Teknisi
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Detail Teknisi</h1>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="<?= base_url('admin'); ?>" class="btn btn-primary rounded-pill btn-sm"><i class="fas fa-chevron-left"></i> Kembali</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>Foto</th>
                                    <td>:</td>
                                    <td><img style="width: 200px;" src="<?= base_url('/img_admin/' . $value['foto_admin']); ?>" alt=""></td>
                                </tr>
                                <tr>
                                    <th>Nama Teknisi</th>
                                    <td>:</td>
                                    <td><?= $value['admin_name']; ?></td>
                                </tr>
                                <tr>
                                    <th>Jabatan</th>
                                    <td>:</td>
                                    <td><?= $value['admin_jabatan']; ?></td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>:</td>
                                    <td><?= $value['status_admin']; ?></td>
                                </tr>
                                <tr>
                                    <th>Nomor Telphone</th>
                                    <td>:</td>
                                    <td><?= $value['hp_admin']; ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>:</td>
                                    <td><?= $value['email_admin']; ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>:</td>
                                    <td><?= $value['alamat_admin']; ?></td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?= $this->endSection(); ?>