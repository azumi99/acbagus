<?= $this->extend('admin/template/admin') ?>
<?= $this->section('title') ?>
acbagus.id | Admin Dashboard
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Sales <span>| Monthly</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $countSales; ?></h6>
                                        <span class="text-success small pt-1 fw-bold">Complete</span> <span class="text-muted small pt-2 ps-1">status</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card customers-card">

                            <div class="card-body">
                                <h5 class="card-title">All User</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $countUsers->active; ?></h6>
                                        <span class="text-danger small pt-1 fw-bold">Activated</span> <span class="text-muted small pt-2 ps-1">Account</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Revenue <span>| Monthly</span></h5>
                                <?php
                                function rupiah($angka)
                                {
                                    $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                                    return $hasil_rupiah;
                                }
                                ?>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= rupiah($countRevenue->total_harga); ?></h6>
                                        <span class="text-success small pt-1 fw-bold">Complete</span> <span class="text-muted small pt-2 ps-1">status</span>


                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->


                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">
                <!-- News & Updates Traffic -->
                <div class="card">

                    <div class="card-body pb-0">
                        <h5 class="card-title">Blog Post <span>| Today</span></h5>
                        <?php foreach ($postView as $viewPost) : ?>
                            <div class="news">
                                <div class="post-item clearfix">
                                    <img src="<?= base_url('/img_post/' . $viewPost->tubnail_artikel); ?>" alt="">
                                    <h4><a href="<?= base_url('post/artikel/' . $viewPost->slug); ?>" target="blank_"><?= $viewPost->judul_artikel; ?></a></h4>
                                    <p>
                                        <?php
                                        $num_char = 50;
                                        $text = $viewPost->isi_artikel;
                                        echo substr($text, 0, $num_char) . '...';
                                        ?>
                                    </p>
                                </div>
                            <?php endforeach; ?>
                            </div><!-- End sidebar recent posts-->

                    </div>
                </div><!-- End News & Updates -->

            </div><!-- End Right side columns -->

        </div>
    </section>

</main><!-- End #main -->
<?= $this->endSection() ?>