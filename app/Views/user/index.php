<?= $this->extend('user_template/user') ?>
<?= $this->section('title') ?>
acbagus.id | Jasa Perbaikan AC Profesional
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- slider -->
<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <section id="image_slider1">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="container">
                            <h5>acbagus.id</h5>
                            <p>Layanan Service Ac Profesional & Terpercaya</p>
                            <p><a href="#service">MORE INFO</a></p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="carousel-item">
                <section id="image_slider2">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="container">
                            <h5>Buat AC Anda Seperti Baru Kembali</h5>
                            <p>Profesional maintenance air conditioner
                            </p>
                            <p><a href="#service">MORE INFO</a></p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- service -->
<section id="service" class="services py-5">
    <div class="container py-5">
        <div class="section-title">
            <h2>Layanan</h2>
            <h3>Daftar Layanan <span>ACBAGUS.ID</span></h3>
        </div>
        <div class="row pb-3">
            <div class="col-lg-4 mb-3">
                <div class="card card-hover text-center">
                    <div class="card-body">
                        <img src="<?= base_url('asset/image/cuci_ac.png'); ?>" class="img_icon">
                        <h4 class="font-weight-bold pb-2">Cuci AC</h4>
                        <h6>Bersihkan AC anda secara berkala, sehingga ruangan menjadi nyaman dan segar</h6>
                        <a href="<?= base_url('service/cuciac'); ?>" class="btn btn-info" role="button" aria-pressed="true">More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card card-hover text-center">
                    <div class="card-body">
                        <img src="<?= base_url('asset/image/bongkar_pasang_ac.png'); ?>" class="img_icon">
                        <h4 class="font-weight-bold pb-2">Bongkar Pasang AC</h4>
                        <h6>Service Bongkar dan Pasang Ac milik anda dengan team teknisi yang handal dan
                            berpengalaman</h6>
                        <a href="<?= base_url('service/bongkarac'); ?>" class="btn btn-info" role="button" aria-pressed="true">More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card card-hover text-center">
                    <div class="card-body">
                        <img src="<?= base_url('asset/image/ac_maintenance.png'); ?>" class=" img_icon">
                        <h4 class="font-weight-bold pb-2">Perbaikan AC</h4>
                        <h6>Maintenance Ac dari bagus.id memiliki team teknisi yang professional dan terpercaya</h6>
                        <a href="<?= base_url('service/serviceac'); ?>" class="btn btn-info" role="button" aria-pressed="true">More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- overview -->
<section class="py-5">
    <div class="container">
        <div class="section-title">
            <h2>SOP ACBAGUS.ID</h2>
            <h3>Penerapan SOP Kesehatan Di Era Pandemi <span>ACBAGUS.ID</span></h3>
        </div>
        <div class="row">
            <div class="col-lg-6 text-content">
                <p>Pengerjaan maintenance AC anda dikerjakan langsung oleh tim intenal dari acbagus.id yang dimana
                    di dalam SOP nya menerapkan protokol kesehatan di era pandemi ini sehingga tetap mengedepankan
                    kesehatan para tim pekerja acbagus.id dan pelanggan</p>
                <ul class="list-icon">
                    <li><i class="far fa-check-circle"></i>Tim teknikal kami selalu menggunkan masker dari mulai di
                        kantor hingga ke lokasi pelanggan</li>
                    <li><i class="far fa-check-circle"></i>Selalu menggunakan sarung tangan saat pengerjaan
                        maintenance untuk menghindari kontak langsung dengan peralatan pelnggan ataupun ac</li>
                    <li><i class="far fa-check-circle"></i>Dan membawa hand sanitizer untuk menjaga barang bawaan
                        dan menjaga kesetrilan tangan dan braang bawaan teknikal bagus.id</li>
                </ul>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <img class="img-fluid" src="asset/image/ac_content.png" class="rounded float-left" alt="">
            </div>
        </div>
    </div>
    </div>
</section>

<!-- why acbagus.id -->
<div class="container py-5">
    <div class="section-title">
        <h2>Maintenance AC Dengan ACBAGUS.ID</h2>
        <h3>Kenapa Harus Kami? <span>ACBAGUS.ID</span></h3>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-4 col-6 col-6">
            <div class="icon-box">
                <i class="fas fa-cart-plus"></i>
                <h3><a>pemesanan mudah</a></h3>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <div class="icon-box">
                <i class="fas fa-user-cog"></i>
                <h3><a>profesional teknikal</a></h3>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 mt-4 mt-md-0">
            <div class="icon-box">
                <i class="fas fa-shield-virus"></i>
                <h3><a>protokol kesehatan</a></h3>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 mt-4 mt-lg-0">
            <div class="icon-box">
                <i class="fas fa-bed"></i>
                <h3><a>terima beres</a></h3>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
                <i class="fas fa-umbrella"></i>
                <h3><a>garansi</a></h3>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
                <i class="fas fa-hand-holding-usd"></i>
                <h3><a>harga transparan</a></h3>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
                <i class="fas fa-percent"></i>
                <h3><a>dapatkan promo</a></h3>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-6 mt-4">
            <div class="icon-box">
                <i class="fas fa-phone-alt"></i>
                <h3><a>pelayanan cepat</a></h3>
            </div>
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
                                        <p>"ac saya jadi dingin lagi setelah dibersihkan acbagus.id terimakasih ya."
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-box">
                                    <div class="img-area"><img src="<?= base_url('asset/image/tstimoni-2.jpg'); ?>"></div>
                                    <div class="img-text">
                                        <h2>hana</h2>
                                        <p>"baru pertama kali pakai jasa acbagus.id, pelayanannya ramah dan cepat
                                            pekerjaannya."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-box">
                                    <div class="img-area"><img src="<?= base_url('asset/image/tstimoni-3.jpg'); ?>"></div>
                                    <div class="img-text">
                                        <h2>adam</h2>
                                        <p>"outdor ac saya bermasalah, diperbaiki teknisi acbagus jadi rapih lagi,
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
                                        <p>"terimakasih pekerjaannya rapih dan bersih. ac jadi berasa baru lagi."
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

<!-- FAQ -->
<section class="faq">
    <div class="container">

        <div class="section-title">
            <h2>F.A.Q</h2>
            <h3>Frequently Asked <span>Questions</span></h3>
        </div>
        <ul class="faq-list">
            <li><a data-toggle="collapse" class="" href="#faq1">Bagaimana cara pesannya? <i class="fas fa-chevron-circle-down"></i></a>
                <div id="faq1" class="collapse show" data-parent=".faq-list">
                    <p>
                        Kunjungi website acbagus.id kemudian pilih layanan maintenanance ac yang anda perlukan klik
                        order dan isi formulir pemesanann, tunggu beberapa saat costumer service acbagus.id akan
                        menghubungi anda.
                    </p>
                </div>
            </li>
            <li><a data-toggle="collapse" href="#faq2" class="collapsed">Apakah ada garansi dari acbagus.id? <i class="fas fa-chevron-circle-down"></i></a>
                <div id="faq2" class="collapse" data-parent=".faq-list">
                    <p>
                        Kami selalu mengutamakan kepuasan pelanggan dengan memberikan garansi saat pemasangan ac dan
                        maintenance.
                    </p>
                </div>
            </li>
        </ul>
    </div>
</section>

<!-- call to action nya -->
<section id="cta" class="cta">
    <div class="container">
        <div class="text-center">
            <h3>Hubungi Untuk Order Sekarang</h3>
            <a class="cta-btn" href="contact.php" target="_blank">Pesan Sekarang</a>
        </div>
    </div>
</section>
<?= $this->endSection() ?>