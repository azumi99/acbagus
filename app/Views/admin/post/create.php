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
        <form action="<?= base_url('post/simpan'); ?>" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="author" value="<?= user()->username; ?>">
            <input type="hidden" name="id_user_author" value="<?= user()->id; ?>">
            <div class="row">
                <div class="col-md-12 py-3">
                    <button type="submit" class="btn btn-primary rounded-pill btn-sm float-right">Posting</button>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Judul Postingan</h5>
                            <input type="text" name="judul_artikel" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Artikel</h5>
                            <textarea name="isi_artikel" class="tinymce-editor"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tubnail Postingan</h5>
                            <input type="file" name="tubnail_artikel" class="form-control" required>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Kategori</h5>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#addKategori" class="btn btn-primary rounded-pill btn-sm">Tambah Kategori</button>
                            <div style="margin-top: 10px;">
                                <select name="kategori_artikel" id="" class="form-control" required>
                                    <option value="">--Pilih Kategori--</option>
                                    <?php foreach ($kategori as $value) : ?>
                                        <option value="<?= $value['id']; ?>"><?= $value['kategori_post_artikel']; ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Meta Description</h5>
                            <textarea name="meta_description" id="" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</main>
<?= $this->include('admin/post/kategori') ?>
<?= $this->endSection() ?>