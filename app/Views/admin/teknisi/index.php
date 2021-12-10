<?= $this->extend('admin/template/admin') ?>
<?= $this->section('title') ?>
acbagus.id | Admin Teknisi
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Teknisi</h1>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#createTeknisi" class="btn btn-primary rounded-pill btn-sm"><i class="fas fa-plus"></i> Tambah Teknisi</button>
                    </div>
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
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($teknisi as $value) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value['teknisi_name']; ?></td>
                                            <td><?= $value['tek_jabatan']; ?></td>
                                            <td>
                                                <?php
                                                $status = $value['status_tek'];
                                                if ($status == 'Karyawan') {
                                                    echo "<span class='badge rounded-pill bg-success'>$status</span>";
                                                } else {
                                                    echo "<span class='badge rounded-pill bg-warning'>$status</span>";
                                                }
                                                ?>
                                            </td>
                                            <td><img style="width: 30px;" src="<?= base_url('/img_teknis/' . $value['foto_teknisi']); ?>" alt=""></td>
                                            <td>
                                                <form action="<?= base_url('teknisi/delete/' . $value['id']); ?>" method="POST">
                                                    <a href="<?= base_url('teknisi/details/' . $value['id']); ?>" class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail">
                                                        <i class="fas fa-info-circle"></i>
                                                    </a>
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#editTeknisi<?= $value['id']; ?>" class="btn btn-warning btn-sm" data-tooltip="tooltip" title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </button>
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
<?= $this->include('admin/teknisi/edit'); ?>
<?= $this->include('admin/teknisi/create'); ?>
<?= $this->endSection() ?>