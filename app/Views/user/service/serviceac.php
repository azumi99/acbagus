<?= $this->extend('user_template/user') ?>
<?= $this->section('title') ?>
acbagus.id | Service AC
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- breadcrumb -->
<div class="container space">
    <nav aria-label="breadcrumb space">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('/'); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Service AC</li>
        </ol>
    </nav>
</div>
<div class="container area-light">
    <div class="row ">
        <div class="col-lg-8">
            <div class="card border-co">
                <h5 class="card-header">Harga Jasa Perbaikan AC di acbagus.id</h5>
                <div class="card-body">
                    <h5 class="card-title judul">Rp 60.000 <p>/ unit</p>
                    </h5>
                    <div class="card-text text-bilas">
                        <p>Perlu kami beri tahukan, untuk harga berikut adalah harga pengecekan AC. Yang nantinya
                            jika ada penggantian sparepart, kami akan infokan kembali untuk harga sparepart yang
                            diganti.</p>
                        <ul class="list-icon">
                            <li><i class="fas fa-chevron-circle-down"></i> AC bocor, permasalahan pada Freon AC,
                                electrical AC serahin aja ke Abang Benerin</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="posisition-img">
                <img src="<?= base_url('asset/image/cuci-ac/cuciac.png'); ?>" alt="">
            </div>
        </div>
        <div class="long-text">
            <center><a href="<?= base_url('booking'); ?>" class="btn btn-info" role="button" aria-pressed="true">Pesan Sekarang</a>
            </center>
            <br />
            <p>Tahu nggak? Kalau AC-mu harus dirawat dan di-maintenance secara rutin untuk mencegah AC lebih cepat
                rusak dan membuat suhu AC tetap dingin.</p>
            <p>Tapi, nggak cuma itu aja AC harus ditangani dengan cara yang tepat agar masalah teknis pada AC
                terselesaikan dengan baik dan tidak menjalar ke komponen yang lain.</p>
            <p>Eh, tapi kamu pernah enggak service AC tapi permasalahannya freon kamu habis terus? Perlu diingat
                bahwa permasalahan teknis pada AC tidak hanya freon habis, tapi juga bisa seperti:</p>
            <ul class="list-icon">
                <li><i class="fas fa-chevron-circle-down"></i> Masalah teknis pada AC
                </li><br />
                <li><i class="fas fa-chevron-circle-down"></i> Kendala teknis yang berkaitan dengan freon,
                    termostat, drainase, elektronik, dan remote
                </li>
            </ul>
            <p>Acbagus.id selalu memberikan penanganan yang tepat untuk kendala AC kamu karena kami bekerja
                secara profesional dan transparan.</p>
            <p>Jadi, nggak usah takut atau ragu untuk maintenance atau service AC di Abang Benerin karena kami
                selalu mengecek terlebih dahulu apa saja yang dibutuhkan oleh AC-mu, setelah itu kami tangani dengan
                cara yang sesuai dengan kendala</p>
            <br />
        </div>
    </div>
</div>
<!-- how to order -->
<div class="container py-5">
    <div class="section-title">
        <h2>Cara Pesan ACBAGUS.ID</h2>
        <h3>Bagaimana Cara Kerjanya? <span>ACBAGUS.ID</span></h3>
    </div>
    <div class="row py-5">
        <div class="col-sm">
            <img src="<?= base_url('asset/image/mau-1.png'); ?>" alt="">
            <h4>Beritahu Kebutuhan Anda</h4>
            <p>Isi lengkap formulir tentang keluhan dan kebutuhan maintenance ac anda di website acbagus.id</p>
        </div>
        <div class="col-sm">
            <img src="<?= base_url('asset/image/mau-2.png'); ?>" alt="">
            <h4>Tunggu Beberapa Saat</h4>
            <p>customer service kami akan langsung menghubungi anda untuk konfirmasi pesanan anda</p>
        </div>
        <div class="col-sm">
            <img src="<?= base_url('asset/image/mau-3.png'); ?>" alt="">
            <h4>Jaminan Kepuasan Anda</h4>
            <p>Terima beres dan ac anda akan dingin kembali lebih tenang dengan garansi yang kami berikan</p>
        </div>
    </div>
</div>

<!-- testimoni -->
<div class="container py-5">
    <div class="section-title">
        <h2>Testimoni</h2>
        <h3>Apa Kata Mereka? <span>ACBAGUS.ID</span></h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="single-box">
                                    <div class="img-area"><img src="<?= base_url('asset/image/tstimoni-1.jpg'); ?>"></div>
                                    <div class="img-text">
                                        <h2>steven</h2>
                                        <p>"ac saya jadi dingin lagi setelah dibersihkan acbagus.id terimakasih
                                            ya."
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-box">
                                    <div class="img-area"><img src="<?= base_url('asset/image/tstimoni-2.jpg'); ?>"></div>
                                    <div class="img-text">
                                        <h2>hana</h2>
                                        <p>"baru pertama kali pakai jasa acbagus.id, pelayanannya ramah dan
                                            cepat
                                            pekerjaannya."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-box">
                                    <div class="img-area"><img src="<?= base_url('asset/image/tstimoni-3.jpg'); ?>"></div>
                                    <div class="img-text">
                                        <h2>adam</h2>
                                        <p>"outdor ac saya bermasalah, diperbaiki teknisi acbagus jadi rapih
                                            lagi,
                                            thanks."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="single-box">
                                    <div class="img-area"><img src="<?= base_url('asset/image/tstimoni-4.jpg'); ?>"></div>
                                    <div class="img-text">
                                        <h2>ilham</h2>
                                        <p>"terimakasih pekerjaannya bersih dan rapih ac saya udah 4 bulan belum
                                            dicuci jadi dingin lagi."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-box">
                                    <div class="img-area"><img src="<?= base_url('asset/image/tstimoni-5.jpg'); ?>"></div>
                                    <div class="img-text">
                                        <h2>bintang</h2>
                                        <p>"terimakasih pekerjaannya rapih dan bersih. ac jadi berasa baru
                                            lagi."
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-box">
                                    <div class="img-area"><img src="<?= base_url('asset/image/tstimoni-6.jpg'); ?>"></div>
                                    <div class="img-text">
                                        <h2>ananda</h2>
                                        <p>"pekerjaanya rapih, pelayannya bagus. ac saya jadi dingin kembali
                                            terimaksih banyak."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>