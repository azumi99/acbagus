<?= $this->extend('admin/template/admin') ?>
<?= $this->section('title') ?>
acbagus.id | Admin Post
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Post</h1>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="<?= base_url('post/create'); ?>" class="btn btn-primary rounded-pill btn-sm"><i class="fas fa-plus"></i> Buat Artikel Baru</a>
                    </div>
                    <div class="card-body py-4">
                        <?php if ($validation->hasError('judul_artikel') or $validation->hasError('isi_artikel') or $validation->hasError('tubnail_artikel') or $validation->hasError('kategori artikel')) { ?>
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
                                        <th>Created</th>
                                        <th>Judul</th>
                                        <th>Author</th>
                                        <th>Tubnail</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($post as $value) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value['created_artikel']; ?></td>
                                            <td><?= $value['judul_artikel']; ?></td>
                                            <td><?= $value['author']; ?></td>
                                            <td><img style="width: 70px;" src="<?= base_url('/img_post/' . $value['tubnail_artikel']); ?>" alt=""></td>
                                            <td>
                                                <form action="<?= base_url('post/delete/' . $value['id']); ?>" method="POST">
                                                    <a href="<?= base_url('post/artikel/' . $value['slug']); ?>" target="_blank" class="btn btn-info btn-sm" data-tooltip="tooltip" title="Show"><i class="far fa-eye"></i></a><br>
                                                    <a href="<?= base_url('post/edit/' . $value['id']); ?>" class="btn btn-warning btn-sm mt-1" data-tooltip="tooltip" title="Edit Artikel">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a><br>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <?= csrf_field() ?>
                                                    <button type="submit" onclick="return confirm('Apakah anda ingin menghapus artikel ini?')" class="btn btn-danger btn-sm mt-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Drop">
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