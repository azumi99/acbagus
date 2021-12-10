<?= $this->extend('admin/template/admin') ?>
<?= $this->section('title') ?>
acbagus.id | Admin Service AC
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Service AC</h1>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('pesan') ?>
                        </div>
                    <?php endif; ?>
                    <div class="card-body py-4">
                        <?php
                        function rupiah($angka)
                        {
                            $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                            return $hasil_rupiah;
                        }
                        ?>
                        <div class="table-responsive">
                            <table style="text-align: center; font-size:13px;" id="dataTable" class="table table-striped " style="width:100%">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Id</th>
                                        <th>Date</th>
                                        <th>Pembeli</th>
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
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#updateModalService<?= $value->id_transaksi; ?>" class="btn btn-primary rounded-pill btn-sm" data-tooltip="tooltip" title="More Action">
                                                        <i class="fas fa-chevron-circle-down"></i>
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
<?= $this->include('admin/sales/modal/modal_detail'); ?>
<?= $this->include('admin/sales/modal/modal_service'); ?>
<?= $this->endSection() ?>