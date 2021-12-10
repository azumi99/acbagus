<?= $this->extend('user_template/user') ?>
<?= $this->section('title') ?>
acbagus.id | About
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- breadcrumb -->
<div class="container space">
    <nav aria-label="breadcrumb space">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
    </nav>
</div>

<!-- overview -->
<section id="cta" class="cta">
    <div class="container">
        <div class="text-center">
            <h3>Company Overview</h3>
            <h2>ACBAGUS.ID</h2>
        </div>
    </div>
</section>

<!-- information -->
<div class="container py-5">
    <div class="section-title">
        <h3>About <span>ACBAGUS.ID</span></h3>
    </div>
    <div class="row">
        <div class="col-lg-6 pt-4 pt-lg-0">
            <div class="image-right"></div>
        </div>
        <div class="col-lg-6 text-content">
            <p>Ac bagus mulai didirikan semenjak dosen web programing 1 bina sarana informatika menyuruh kami
                membuat project web statik menggunakan html, css, javascript, dan html. dengan begitu kami punya ide
                untuk membuat company web acbagus.id sebagai bentuk penyelesaian tugas akhir web programing 1</p>
            <p>Untuk membuat web ini kami menggunakan bootstrap untuk mempermudah pembuatan sekaligus sebagai
                pembelajaran menggunakan framework css dan javascript</p>
            <p>Oh iya berikut kelebihan layanan acbagus.id ya</p>
            <ul class="list-icon">
                <li><i class="far fa-check-circle"></i>Tim teknikal kami selalu menggunkan masker dari mulai di
                    kantor hingga ke lokasi pelanggan</li>
                <li><i class="far fa-check-circle"></i>Selalu menggunakan sarung tangan saat pengerjaan
                    maintenance untuk menghindari kontak langsung dengan peralatan pelnggan ataupun ac</li>
                <li><i class="far fa-check-circle"></i>Dan membawa hand sanitizer untuk menjaga barang bawaan
                    dan menjaga kesetrilan tangan dan braang bawaan teknikal bagus.id</li>
            </ul>
        </div>
    </div>
</div>
</div>

<!-- team -->
<div class="container py-5">
    <div class="section-title">
        <h3>Our Team <span>ACBAGUS.ID</span></h3>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="single-box shake-area">
                <div class="img-area"><img src="asset/image/about/team1.jpg"></div>
                <div class="img-text-area">
                    <h2>Fadhil</h2>
                    <h3>Web Developer</h3>
                    <p>halo nama saya fadhil saya sebagai web developer di acbagus.id</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-box shake-area">
                <div class="img-area"><img src="asset/image/about/team2.jpg"></div>
                <div class="img-text-area">
                    <h2>Ardiansya</h2>
                    <h3>UI UX</h3>
                    <p>Experience ui ux in acbagus.id sejak dimualinya tugas web ini</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-box shake-area">
                <div class="img-area"><img src="asset/image/tstimoni-3.jpg"></div>
                <div class="img-text-area">
                    <h2>Bagus</h2>
                    <h3>CO Founder</h3>
                    <p>Pemilik usaha jasa maintenance air conditioner acbagus.id </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-box shake-area">
                <div class="img-area"><img src="asset/image/tstimoni-1.jpg"></div>
                <div class="img-text-area">
                    <h2>Parli</h2>
                    <h3>System Analyst</h3>
                    <p>Senior analyst di acbagus.id sejak tugas ini dimulai semuanya menjadi pro</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-box shake-area">
                <div class="img-area"><img src="asset/image/tstimoni-4.jpg"></div>
                <div class="img-text-area">
                    <h2>Ilham</h2>
                    <h3>Penjaga Kantin</h3>
                    <p>Profesional senior penjaga kantin yang sudah lama di acbagus.id</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-box shake-area">
                <div class="img-area"><img src="asset/image/tstimoni-6.jpg"></div>
                <div class="img-text-area">
                    <h2>Bintang</h2>
                    <h3>Spesialist Clening</h3>
                    <p>Senior dan spesialist bersih bersih kantor acbagus.id</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>