<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-xl-9 d-flex align-items-center justify-content-lg-between">
                <h1 class="logo me-auto me-lg-0"><a href="<?= base_url('/'); ?>" class="bi bi-cursor-fill">ayodolan</a></h1>

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <i class="bi bi-list mobile-nav-toggle"></i>

                    <ul>
                        <li><a class="nav-link scrollto" href="<?= base_url('/'); ?>">Home</a></li>
                        <li><a class="nav-link scrollto" href="<?= base_url('pages/about'); ?>">About</a></li>
                        <li><a class="nav-link scrollto" href="<?= base_url('pages/contact'); ?>">Contact</a></li>
                        <li><a class="nav-link scrollto " href="<?= base_url('wisata'); ?>">Paket Wisata</a></li>
                        <li><a class="nav-link scrollto" href="<?= base_url('pemesanan'); ?>">Booking</a></li>

                        <?php if (logged_in()) : ?>
                            <li><a class="nav-link scrollto" href="<?= base_url('pemesanan/riwayat'); ?>">Riwayat Pemesanan</a></li>
                        <?php endif; ?>

                        <?php if (logged_in()) : ?>

                        <?php else : ?>

                            <a class="nav-link scrollto ms-3" href="<?= base_url('login'); ?>">Login</a>
                        <?php endif; ?>

                        <?php if (session()->getFlashdata('message')) : ?>
                            <div class="position-relative">
                                <div class="alert alert-success fixed-top mt-4 me-4 position-absolute top-100 start-50 translate-middle" role="alert" style="width: 350px;">
                                    <?= session()->getFlashdata('message'); ?>
                                    <button type="button" class="btn-close" style="float: right;" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                            <script>
                                var s = document.getElementById('thing').style;
                                s.opacity = 1;
                                (function fade() {
                                    (s.opacity -= .1) < 0 ? s.display = "none" : setTimeout(fade, 40)
                                })();
                            </script>
                        <?php endif; ?>

                        <?php if (logged_in()) : ?>
                            <!-- Nav Item - User Information -->
                            <li class="dropdown">
                                <a class="nav-link scrollto d-flex justify-content-start" href=" #">
                                    <?= user()->username; ?>
                                    <img class="img-profile rounded-circle ms-1" width="20px" src="<?= base_url(); ?>/img/<?= user()->user_image; ?>">
                                    <i class="bi bi-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu p-1">
                                    <div class="border border-1">
                                        <img class="img-profile rounded-circle ps-4 pe-4 pt-2" width="160px" src="<?= base_url(); ?>/img/<?= user()->user_image; ?>">
                                        <a class="d-flex justify-content-around mb-2"><?= user()->fullname; ?></a>
                                        <li class="dropdown-item d-flex justify-content-around border-top">
                                            <a class="bi bi-person" href="<?= base_url('profil'); ?>">Profil</a>
                                        </li>
                                        <li class="dropdown-item d-flex justify-content-around border-top">
                                            <a class="bi bi-box-arrow-right" href="<?= base_url('logout'); ?>" data-toggle="modal" data-target="#logoutModal"> Logout</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        <?php else : ?>
                    </ul>
                </nav>

                <a href="/login" class="get-started-btn scrollto">Get Started</a>
            <?php endif; ?>
            <!-- .navbar -->
            </div>
        </div>

    </div>
</header><!-- End Header -->