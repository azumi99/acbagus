<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top ">
    <div class="container">
        <a class="navbar-brand" href="/">ACBAGUS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/'); ?>">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('about'); ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('contact'); ?>">Contact</a>
                </li>
                <li style="margin-right:15px;" class="nav-item">
                    <a class="nav-link" href="<?= base_url('blog'); ?>">Blog</a>
                </li>
                <?php if (logged_in() == true) { ?>
                    <li class="nav-item">
                        <div class="dropdown">
                            <div style="cursor: pointer;" class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img style="width: 30px; border-radius:50%; height:30px; background: url('<?= base_url("/img_users/" . user()->image); ?>') center center; background-size:60px; background-repeat:no-repeat;">
                            </div>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?= base_url('usersprofile'); ?>"><?= user()->username; ?></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('activity'); ?>">Activity</a>
                                <a class="dropdown-item" href="<?= base_url('logout'); ?>">Logout</a>
                            </div>
                        </div>
                    </li>
                <?php } ?>
                <?php if (logged_in() == false) { ?>
                    <li class="nav-item nav-link">
                        <a href="<?= base_url('login'); ?>" class=" btn btn-primary btn-sm">Login</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>