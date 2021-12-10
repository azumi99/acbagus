<!-- Modal -->
<?php foreach ($viewOrder as $value) : ?>
    <div class="modal fade bd-example-modal" id="detailsModal<?= $value->id_transaksi; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Terima Transaksi</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('teknis/bongkarsaveyakin/' . $value->id_transaksi); ?>" method="POST">
                    <div class="modal-body">
                        <p>Yakin ingin terima pesanan?</p>
                        <input type="hidden" value="Process" name="update_status">
                        <button type="submit" class="btn btn-primary">Yakin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>