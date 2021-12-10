<?= $this->extend('user_template/user') ?>
<?= $this->section('title') ?>
acbagus.id | Contact
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- breadcrumb -->
<div class="container space">
    <nav aria-label="breadcrumb space">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('/'); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Booking
                </div>
                <form action="<?= base_url('booking/save'); ?>">
                    <div class="card-body mt-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Pilih Jadwal</label>
                                    <input type="date" name="date_transaksi" id="" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" value="<?= user()->username; ?>" name="username" id="" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Pembeli</label>
                                    <input type="text" name="pembeli" id="" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nomor Handphone</label>
                                    <input type="text" name="nomor_telp" id="" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" value="<?= user()->email; ?>" name="email_transaksi" id="" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat_pembeli" id="" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Keluhan Detail</label>
                                    <textarea name="keluhan_detail" id="" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Metode Pembayaran</label>
                                    <select name="metode_bayar" id="" class="form-control" required>
                                        <option value="">--Pilih Metode Bayar--</option>
                                        <option value="Transfer Mandiri">Transfer Mandiri</option>
                                        <option value="Transfer BCA">Transfer BCA</option>
                                        <option value="Transfer BNI">Transfer BNI</option>
                                        <option value="OVO">OVO</option>
                                        <option value="Gopay">Gopay</option>
                                        <option value="Cash">Cash</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Service</label>
                                    <select name="service" id="service" onchange="myFunction()" class="form-control" required>
                                        <option value="">--Pilih Service--</option>
                                        <option value="Cuci AC">Cuci Ac</option>
                                        <option value="Service AC">Service AC</option>
                                        <option value="Bongkar Pasang AC">Bongkar Pasang AC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Harga</label>
                                    <input type="text" name="nominal_view" id="nominal_view" class="form-control" required>
                                    <input type="hidden" name="nominal" id="nominal" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-primary float-right">Order</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    function rupiah($angka)
    {

        $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
        return $hasil_rupiah;
    }
    ?>
    <script>
        function myFunction() {
            var x = document.getElementById("service").value;
            if (x == 'Cuci AC') {
                document.getElementById("nominal").value = 50000;
                document.getElementById("nominal_view").value = '<?= rupiah(50000); ?>';
            } else if (x == 'Service AC') {
                document.getElementById("nominal").value = 350000;
                document.getElementById("nominal_view").value = '<?= rupiah(350000); ?>';
            } else if (x == 'Bongkar Pasang AC') {
                document.getElementById("nominal").value = 60000;
                document.getElementById("nominal_view").value = '<?= rupiah(60000); ?>';
            }
        }
    </script>
    <?= $this->endSection(); ?>