<?= $this->extend('user_template/user') ?>
<?php foreach ($showPost as $value) : ?>
    <?= $this->section('title') ?>
    <?= $value->judul_artikel; ?> | acbagus.id
    <?= $this->endSection() ?>
    <?= $this->section('content') ?>
    <div class="container space">
        <nav aria-label="breadcrumb space">
        </nav>
    </div>
    <section id="blog" class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 entries">
                    <article class="entry entry-single">
                        <div class="entry-img">
                            <img src="<?= base_url('/img_post/' . $value->tubnail_artikel); ?>" alt="" class="img-fluid">
                        </div>
                        <h2 class="entry-title"><?= $value->judul_artikel; ?></a>
                        </h2>
                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="far fa-user"></i> <a><?= $value->author; ?></a></li>
                                <li class="d-flex align-items-center"><i class="far fa-clock"></i><a><time datetime=""><?= $value->created_artikel; ?></time></a></li>
                                </li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <?php
                            echo $value->isi_artikel;
                            ?>
                        </div>
                        <div class="entry-footer clearfix">
                            <div class="float-left">
                                <i class="icofont-tags"></i>
                                <ul class="tags">
                                    <li><a href="#"><?= $value->kategori_post_artikel; ?></a></li>
                                </ul>
                            </div>
                            <div class="float-right share">
                                <a href="https://twitter.com/home?status= " target="_blank" title="Share on Twitter"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=" target="_blank" title="Share on Facebook"><i class="fab fa-facebook"></i></a>
                                <a href="https://pinterest.com/pin/create/button/?url= &media=&description=" target="_blank" title="Share on Pinterest"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </article><!-- End blog entry -->

                    <div class="blog-author clearfix">
                        <img src="<?= base_url('/img_users/' . $value->image); ?>" class="rounded-circle float-left" alt="">
                        <h4><?= $value->author; ?></h4>
                        <div class="social-links">
                            <a href="https://www.instagram.com/ananda_xcn/"><i class="fab fa-instagram"></i></a>
                            <a href="https://api.whatsapp.com/send?phone=082251116009" target="_blank" class="instagram"><i class="fab fa-whatsapp"></i></a>
                            <a href="https://www.facebook.com/ilham.kuhakusoft" class="facebook"><i class="fab fa-facebook"></i></a>
                        </div>
                        <p>
                            Terus buat inovasi yang bermanfaat
                        </p>
                    </div><!-- End blog author bio -->
                </div>

                <div class="col-lg-4">
                    <div class="samping">
                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <?php foreach ($kategoriShow as $showkate) : ?>
                                    <li><a href=""><?= $showkate['kategori_post_artikel']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div><!-- End sidebar categories-->
                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">
                            <?php foreach ($recentShow as $value) : ?>
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
<?php endforeach; ?>
<?= $this->endSection() ?>