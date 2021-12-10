<!-- Modal -->
<?php foreach ($viewOrder as $value) : ?>
    <div class="modal fade " id="updateModal<?= $value->id_transaksi; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambahan Biaya</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('teknis/bongkarsave/' . $value->id_transaksi); ?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Deskripsi Tambahan</label>
                            <textarea name="deskripsi_tambahan" id="" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Tambahan Harga</label>
                            <input type="number" name="nominal_tambahan" class="form-control" id="tambahan_harga">
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