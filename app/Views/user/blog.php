<?= $this->extend('user_template/user') ?>
<?= $this->section('title') ?>
acbagus.id | Blog
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- breadcrumb -->
<div class="container space">
    <nav aria-label="breadcrumb space">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('/'); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
        </ol>
    </nav>
</div>

<!-- blog view -->
<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 entries">
                <div class="row">
                    <?php foreach ($blogShow as $value) : ?>
                        <div class="col-md-6 d-flex align-items-stretch">
                            <article class="entry">
                                <div class="entry-img-tub">
                                    <img src="<?= base_url('/img_post/' . $value->tubnail_artikel); ?>" alt="" class="img-fluid" style="bac">
                                </div>
                                <h2 class="entry-title">
                                    <a href="<?= base_url('post/artikel/' . $value->slug); ?>"><?= $value->judul_artikel; ?></a>
                                </h2>
                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="far fa-user"></i><a><?= $value->author; ?></a></li>
                                        <li class="d-flex align-items-center"><i class="far fa-clock"></i><a><time datetime=""><?= $value->created_artikel; ?></time></a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <?php
                                    $num_char = 50;
                                    $text = $value->isi_artikel;
                                    echo substr($text, 0, $num_char) . '...';
                                    ?>
                                    <div class="read-more">
                                        <a href="<?= base_url('post/artikel/' . $value->slug); ?>">Read More</a>
                                    </div>
                                </div>

                            </article><!-- End blog entry -->
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="blog-pagination">
                    <ul class="justify-content-center">
                        <li class="disabled"><i class="fas fa-chevron-left"></i></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">.</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div><!-- End blog entries list -->
            <div class="col-lg-4">
                <div class="samping">
                    <h3 class="sidebar-title">Categories</h3>
                    <div class="sidebar-item categories">
                        <ul>
                            <?php foreach ($kategoriShow as $kateshow) : ?>
                                <li><a href=""><?= $kateshow['kategori_post_artikel']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div><!-- End sidebar categories-->
                    <h3 class="sidebar-title">Recent Posts</h3>
                    <div class="sidebar-item recent-posts">
                        <?php foreach ($blogShow as $value) : ?>
                            <div class="post-item clearfix">
                                <img src="<?= base_url('/img_post/' . $value->tubnail_artikel); ?>" alt="">
                                <h4><a href="<?= base_url('post/artikel/' . $value->slug); ?>"><?= $value->judul_artikel; ?></a></h4>
                                <time datetime=""><?= $value->created_artikel; ?></time>
                            </div>
                        <?php endforeach; ?>
                    </div><!-- End sidebar recent posts-->
                </div><!-- End sidebar -->
            </div><!-- End blog sidebar -->
        </div>
    </div>
</section><!-- End Blog Section -->
</main><!-- End #main -->
<?= $this->endSection(); ?>