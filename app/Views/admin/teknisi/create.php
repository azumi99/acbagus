<div class="modal fade" id="createTeknisi" tabindex="-1">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Teknisi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('/teknisi/simpan'); ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">Nama Teknisi</label>
                            <input type="text" name="nama_teknisi" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Jabatan</label>
                            <select name="jabatan" class="form-control" id="" required>
                                <option value="">--Jabatan--</option>
                                <option value="Supervisor">Supervisor</option>
                                <option value="Teknisi">Teknisi</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Status</label>
                            <select name="status_teknisi" class="form-control" id="" required>
                                <option value="">--Status--</option>
                                <option value="Karyawan">Karyawan</option>
                                <option value="Probation">Probation</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Nomor Handphone</label>
                            <input type="text" class="form-control" name="no_hp" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Email</label>
                            <input type="text" name="email_tek" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Foto</label>
                            <input type="file" name="foto_tek" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Alamat</label>
                            <textarea name="alamat_teknisi" class="form-control" id="" cols="10" rows="5" required></textarea>
                        </div>
                    </div>
                    <div style="margin-top:20px;" class="float-right">
                        <button type="submit" class="btn btn-primary ">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- End Vertically centered Modal-->