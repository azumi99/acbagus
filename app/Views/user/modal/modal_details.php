<!-- Modal -->
<?php foreach ($viewOrder as $value) : ?>
    <div class="modal fade bd-example-modal-lg" id="detailsModal<?= $value->id_transaksi; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Details Transaksi</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="table-responsive">
                        <table style="font-size: 14px;" class="table table-striped">
                            <tr>
                                <th>IdTransaksi</th>
                                <td>:</td>
                                <td><?= $value->id_transaksi; ?></td>
                            </tr>
                            <tr>
                                <th>Date Transaksi</th>
                                <td>:</td>
                                <td><?= $value->date_transaksi; ?></td>
                            </tr>
                            <tr>
                                <th>Username</th>
                                <td>:</td>
                                <td><?= $value->username_user; ?></td>
                            </tr>
                            <tr>
                                <th>Nama Pembeli</th>
                                <td>:</td>
                                <td><?= $value->pembeli; ?></td>
                            </tr>
                            <tr>
                                <th>Nomor Handphone</th>
                                <td>:</td>
                                <td><?= $value->nomor_telp; ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>:</td>
                                <td><?= $value->email_transaksi; ?></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>:</td>
                                <td><?= $value->alamat_pembeli; ?></td>
                            </tr>
                            <tr>
                                <th>Service</th>
                                <td>:</td>
                                <td><?= $value->service; ?></td>
                            </tr>
                            <tr>
                                <th>Keluhan Detail</th>
                                <td>:</td>
                                <td><?= $value->keluhan_detail; ?></td>
                            </tr>
                            <tr>
                                <th>Teknisi</th>
                                <td>:</td>
                                <td><?= $value->teknisi; ?></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>:</td>
                                <td><?= $value->status; ?></td>
                            </tr>
                            <tr>
                                <th>Metode Pembayaran</th>
                                <td>:</td>
                                <td><?= $value->metode_bayar; ?></td>
                            </tr>
                            <tr>
                                <th>Deskripsi Tambahan</th>
                                <td>:</td>
                                <td><?= $value->deskripsi_tambahan; ?></td>
                            </tr>
                            <tr>
                                <th>Tambahan Harga</th>
                                <td>:</td>
                                <td>
                                    <?php
                                    if ($value->nominal_tambahan == 0) {
                                        echo $value->nominal_tambahan;
                                    } else {
                                        echo rupiah($value->nominal_tambahan);
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td>:</td>
                                <td><?= rupiah($value->nominal); ?></td>
                            </tr>
                            <tr>
                                <th>Total Harga</th>
                                <td>:</td>
                                <td><?= rupiah($value->total_harga); ?></td>
                            </tr>

                        </table>
                        <a href="<?= base_url('activity/print/' . $value->id_transaksi); ?>" target="blank_" class="btn btn-primary">Print Invoice</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>