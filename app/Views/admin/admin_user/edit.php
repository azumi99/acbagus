<?php foreach ($admin as $value) : ?>
    <div class="modal fade" id="editAdmin<?= $value['id']; ?>" tabindex="-1">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Teknisi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/update/' . $value['id']); ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="row">
                            <input type="hidden" value="<?= $value['id']; ?>" name="id" class="form-control">
                            <div class="form-group col-md-6">
                                <label for="">Nama Admin</label>
                                <input type="text" value="<?= $value['admin_name']; ?>" name="nama_admin" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Jabatan</label>
                                <select name="jabatan_admin" class="form-control" id="">
                                    <option value="<?= $value['admin_jabatan']; ?>"><?= $value['admin_jabatan']; ?></option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Status</label>
                                <select name="status_admin" class="form-control" id="">
                                    <option value="<?= $value['status_admin']; ?>"><?= $value['status_admin']; ?></option>
                                    <option value="Karyawan">Karyawan</option>
                                    <option value="Probation">Probation</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Nomor Handphone</label>
                                <input type="text" value="<?= $value['hp_admin']; ?>" class="form-control" name="nomor_admin">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Email</label>
                                <input type="text" value="<?= $value['email_admin']; ?>" name="email_admin" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Foto</label>
                                <input type="file" value="" name="foto_admin" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Alamat</label>
                                <textarea name="alamat_admin" class="form-control" id="" cols="10" rows="5"><?= $value['alamat_admin']; ?></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <img style="width: 200px;" src="<?= base_url('/img_admin/') . $value['foto_admin']; ?>" alt="">
                            </div>
                        </div>
                        <div style="margin-top:20px;" class="float-right">
                            <button type="submit" class="btn btn-warning ">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- End Vertically centered Modal-->
<?php endforeach; ?>