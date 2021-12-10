<!-- Modal -->
<?php foreach ($viewOrder as $value) : ?>
    <div class="modal fade " id="updateModal<?= $value->id_transaksi; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">More Action</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('sales/cucisave/' . $value->id_transaksi); ?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Update Status</label>
                            <select name="update_status" id="" class="form-control">
                                <option value="<?= $value->status; ?>">--Pilih Status--</option>
                                <option value="Waiting">Waiting</option>
                                <option value="Process">Process</option>
                                <option value="Cancel">Cancel</option>
                                <option value="Complete">Complete</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Update Payment</label>
                            <select name="update_payment" id="" class="form-control">
                                <option value="<?= $value->status_pay; ?>">--Pilih Status Pay--</option>
                                <option value="Sudah">Sudah</option>
                                <option value="Belum">Belum</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Update Teknisi</label>
                            <select name="update_teknisi" id="" class="form-control">
                                <option value="<?= $value->teknisi; ?>">--Pilih Teknisi--</option>
                                <?php foreach ($viewTeknisi as $teknisi_name) : ?>
                                    <option value="<?= $teknisi_name->username; ?>"><?= $teknisi_name->username; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>