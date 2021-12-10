<?php foreach ($teknisi as $value) : ?>
    <div class="modal fade" id="editTeknisi<?= $value['id']; ?>" tabindex="-1">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Teknisi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('teknisi/update/' . $value['id']); ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="row">
                            <input type="hidden" value="<?= $value['id']; ?>" name="id" class="form-control">
                            <div class="form-group col-md-6">
                                <label for="">Nama Teknisi</label>
                                <input type="text" value="<?= $value['teknisi_name']; ?>" name="nama_teknisi" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Jabatan</label>
                                <select name="jabatan" class="form-control" id="">
                                    <option value="<?= $value['tek_jabatan']; ?>"><?= $value['tek_jabatan']; ?></option>
                                    <option value="Supervisor">Supervisor</option>
                                    <option value="Teknisi">Teknisi</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Status</label>
                                <select name="status_teknisi" class="form-control" id="">
                                    <option value="<?= $value['status_tek']; ?>"><?= $value['status_tek']; ?></option>
                                    <option value="Karyawan">Karyawan</option>
                                    <option value="Probation">Probation</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Nomor Handphone</label>
                                <input type="text" value="<?= $value['nomor_hp']; ?>" class="form-control" name="no_hp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Email</label>
                                <input type="text" value="<?= $value['email_tek']; ?>" name="email_tek" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Foto</label>
                                <input type="file" value="public/img_teknis/<?= $value['foto_teknisi']; ?>" name="foto_tek" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Alamat</label>
                                <textarea name="alamat_teknisi" class="form-control" id="" cols="10" rows="5"><?= $value['alamat_tek']; ?></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <img style="width: 200px;" src="/img_teknis/<?= $value['foto_teknisi']; ?>" alt="">
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