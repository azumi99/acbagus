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

<!-- form contact -->
<div class="kotak">
    <span class="big-circle"></span>
    <img src="img/shape.png" class="square" alt="" />
    <div class="form_aman">
        <div class="contact-info">
            <h3 class="title">Saran Anda Berguna Bagi Kami</h3>
            <p class="text">
                Tinggalkan pesan anda dan jangan lupa ikuti kami di social berikut ya saya tunggu follownya.
            </p>

            <div class="info">
                <div class="information">
                    <img src="asset/image/contact/location.png" class="icon" alt="" />
                    <p>Jalan Menceng Lurus No 1001</p>
                </div>
                <div class="information">
                    <img src="asset/image/contact/email.png" class="icon" alt="" />
                    <p>admin@bagus.id</p>
                </div>
                <div class="information">
                    <img src="asset/image/contact/phone.png" class="icon" alt="" />
                    <p>082251116009</p>
                </div>
            </div>

            <div class="social-media">
                <p>Jan lupa follow ya :</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/ilham.kuhakusoft">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/ananda_xcn/">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/ilham-tegar-1b60391a5/">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=082251116009"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>

        <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>

            <form class="open_form" action="user/mail" method="POST" autocomplete="off">
                <h3 class="title">Contact us</h3>
                <div class="input-container">
                    <input type="text" name="name" class="input" />
                    <label for="">Nama</label>
                    <span>Nama</span>
                </div>
                <div class="input-container">
                    <input type="email" name="email" class="input" />
                    <label for="">Email</label>
                    <span>Email</span>
                </div>
                <div class="input-container">
                    <input type="tel" name="phone" class="input" />
                    <label for="">Nomor Handphone</label>
                    <span>Nomor Handphone</span>
                </div>
                <div class="input-container">
                    <select name="service" class="input">
                        <option value=""></option>
                        <option value="Cuci AC">Cuci AC</option>
                        <option value="Bongkar Pasang AC">Bongkar Pasang AC</option>
                        <option value="Perbaikan AC">Perbaikan AC</option>
                    </select>
                    <label for="">Pilih Layanan</label>
                    <span>Pilih Layanan</span>
                </div>
                <div class="input-container textarea">
                    <textarea name="message" class="input"></textarea>
                    <label for="">Keluhan</label>
                    <span>Keluhan</span>
                </div>
                <input type="submit" name="submit" value="Send" class="btm" />
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>