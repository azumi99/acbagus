<?= $this->extend('user_template/user') ?>
<?= $this->section('title') ?>
acbagus.id | Activity
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- breadcrumb -->
<div class="container space">
    <nav aria-label="breadcrumb space">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('/'); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Activity</li>
        </ol>
    </nav>
</div>
<div class="container">
    <?php if ($validation->hasError('metode_bayar') or $validation->hasError('service')) { ?>
        <div class="alert alert-danger" role="alert">
            <?= $validation->listErrors() ?>
        </div>
    <?php } ?>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan') ?>
        </div>
    <?php endif; ?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Transaksi
            </div>
            <?php
            function rupiah($angka)
            {

                $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                return $hasil_rupiah;
            }
            ?>
            <div class="card-body mt-3">
                <div class="table-responsive">
                    <table style="text-align: center; font-size:13px;" id="dataTable" class="table table-striped " style="width:100%">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Id</th>
                                <th>Date</th>
                                <th>Pembeli</th>
                                <th>Email</th>
                                <th>Service</th>
                                <th>Nominal</th>
                                <th>Status</th>
                                <th>Pay</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($viewOrder as $value) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= '#', $value->id_transaksi; ?></td>
                                    <td><?= $value->date_transaksi; ?></td>
                                    <td><?= $value->pembeli; ?></td>
                                    <td><?= $value->email_transaksi; ?></td>
                                    <td><?= $value->service; ?></td>
                                    <td><?= rupiah($value->total_harga); ?></td>
                                    <td>
                                        <?php
                                        $status = $value->status;
                                        if ($status == 'Waiting') {
                                            echo "<span class='badge badge-pill badge-warning'>$status</span>";
                                        } else if ($status == 'Process') {
                                            echo "<span class='badge badge-pill badge-info'>$status</span>";
                                        } else if ($status == 'Cancel') {
                                            echo "<span class='badge badge-pill badge-danger'>$status</span>";
                                        } else if ($status == 'Complete') {
                                            echo "<span class='badge badge-pill badge-success'>$status</span>";
                                        }
                                        ?>

                                    <td>
                                        <?php
                                        $status_pay = $value->status_pay;
                                        if ($status_pay == 'Belum') {
                                            echo "<span class='badge badge-pill badge-danger'>$status_pay</span>";
                                        } else {
                                            echo "<span class='badge badge-pill badge-success'>$status_pay</span>";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <form action="<?= base_url('activity/upstatus/' . $value->id_transaksi); ?>" method="POST">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#detailsModal<?= $value->id_transaksi; ?>" class="btn btn-info rounded-pill btn-sm" data-tooltip="tooltip" title="Details Transaksi">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                            <input type="hidden" name="update_status" value="Cancel">
                                            <button type="submit" onclick="return confirm('Mau cancel pesanan?')" class="btn btn-danger rounded-pill btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Cancel">
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
<?= $this->include('user/modal/modal_details'); ?>
<?= $this->endSection(); ?>