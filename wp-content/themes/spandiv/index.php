<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Dongle&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Code+Latin:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">

    <!-- lightbox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.1/simple-lightbox.min.css" integrity="sha512-5CXltlbBBUSagP9f7vGb78xbExT4oaXtvUGXShbcSss85Tw5wG1fz7fFBF6o1Gp2teZQYvwf70Sz2LYzvNF4Eg==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= bloginfo('template_url'); ?>/style.css" type="text/css" media="screen" />

    <?php if(is_front_page()) : ?>
        <title><?= bloginfo('name') ?> - <?= bloginfo('description') ?></title>
    <?php elseif(is_home() || is_page() || is_single()) : ?>
        <title><?= single_post_title() ?> | <?= bloginfo('name') ?> - <?= bloginfo('description') ?></title>
    <?php elseif(is_category() || is_tax()) : ?>
        <title><?= single_cat_title() ?> | <?= bloginfo('name') ?> - <?= bloginfo('description') ?></title>
    <?php elseif(is_tag()) : ?>
        <title><?= single_tag_title() ?> | <?= bloginfo('name') ?> - <?= bloginfo('description') ?></title>
    <?php elseif(is_author()) : ?>
        <title><?= get_the_author() ?> | <?= bloginfo('name') ?> - <?= bloginfo('description') ?></title>
    <?php elseif(is_post_type_archive()) : ?>
        <title><?= $post_type_name ?> | <?= bloginfo('name') ?> - <?= bloginfo('description') ?></title>
    <?php elseif(is_search()) : ?>
        <title><?= _e('Search') ?> | <?= bloginfo('name') ?> - <?= bloginfo('description') ?></title>
    <?php elseif(is_404()) : ?>
        <title>Error 404 | <?= bloginfo('name') ?> - <?= bloginfo('description') ?></title>
    <?php endif; ?>
  </head>
  <body <?php body_class('spandiv'); ?>>
    <div id="spandiv">
        <nav class="navbar navbar-expand navbar-light bg-primary-s shadow fixed-bottom" style="display: none;">
          <div class="container justify-content-around">
            <div class="collapse navbar-collapse">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" onclick="document.getElementById('beranda').scrollIntoView({behavior: 'smooth', block: 'start', inline: 'start'})">
                    <i class="fad fa-home-lg-alt"></i><p class="mb-0">Beranda</p></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" onclick="document.getElementById('pasangan').scrollIntoView({behavior: 'smooth', block: 'start', inline: 'start'})">
                  <i class="fad fa-rings-wedding"></i><p class="mb-0">Pasangan</p></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" onclick="document.getElementById('acara').scrollIntoView({behavior: 'smooth', block: 'start', inline: 'start'})">
                  <i class="fad fa-calendar-alt"></i><p class="mb-0">Acara</p></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" onclick="document.getElementById('galeri').scrollIntoView({behavior: 'smooth', block: 'start', inline: 'start'})">
                  <i class="fad fa-photo-video"></i><p class="mb-0">Galeri</p></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" onclick="document.getElementById('reservasi').scrollIntoView({behavior: 'smooth', block: 'start', inline: 'start'})">
                  <i class="fad fa-envelope-open-text"></i><p class="mb-0">Reservasi</p></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <section class="section-overlay position-absolute w-100">
            <div class="blured-bg vh-100 vw-100 position-absolute"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="vh-100 d-flex flex-column text-white text-center justify-content-center align-items-center">
                            <div class="position-relative text-center">
                                <div class="rounded-circle" style="position: absolute; z-index: 2; left: 50%; top:50%; transform: translate(-50%, 15%); overflow: hidden; width: 200px; height: 200px;">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/IMG_0712.jpg" alt="images" class="w-100">
                                </div>
                            </div>
                            <img src="<?= get_template_directory_uri() ?>/assets/images/frame/couple_decor_9.webp" alt="images" width="250" height="250" style="position:relative; z-index: 3;">
                            <div class="position-relative mt-4" style="z-index: 3;">
                                <h5 class="text-uppercase">Undangan Pernikahan</h5>
                                <h1 style="font-family: 'Parisienne', cursive; font-size: 3rem;">Putri & Agus</h1>
                                <h5><i class="fad fa-heart"></i> Minggu 20 Februari 2022 <i class="fad fa-heart"></i></h5>
                                <button class="btn btn-outline-light btn-lg mt-3 rounded-3 px-5 btn-glow" id="buka-undangan">Buka Undangan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-home" id="beranda">
            <div class="text-primary text-center bg-secondary-s" style="min-height: 100vh;">
                <div class="row m-0 justify-content-center text-start">
                    <div class="col-md-5 p-0">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="frame" class="vh-100 img-fluid cover-home">

<!--                         <div class="position-absolute text-center" style="top: 50%;left: 50%; transform: translate(-50%, 100%)">
                            <h5>The Wedding Of</h5>
                            <h1 class="fw-bold" style="font-family: 'Parisienne', cursive;">Putri & Agus</h1>
                            <h5>Minggu&nbsp;20&nbsp;Februari&nbsp;2022</h5>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <section class="section-home" id="pasangan">
            <div class="d-flex flex-column text-primary text-center justify-content-between align-items-center bg-secondary-s" style="min-height: 100vh;">
                <div class="row m-0 justify-content-center"><div class="col-md-5 p-0"><img src="<?= get_template_directory_uri() ?>/assets/images/frame/quotes_decor_9.webp" alt="frame" class="img-fluid position-relative" style="transform: rotate(180deg); top: -1.5rem;"></div></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <div>
                                <img data-aos="fade-up" src="<?= get_template_directory_uri() ?>/assets/images/basmalah-1-2.png" alt="bismillah" class="img-fluid" style="width: 60%;    filter: brightness( 104% ) contrast( 116% ) saturate( 200% ) blur( 0px ) hue-rotate( 115deg );">
                                <p data-aos="fade-up" class="fw-bold mb-0 mt-2">Assalamualaikum Warahmatullahi Wabarakatuh</p>
                                <p data-aos="fade-up">Dengan memohon Ridho serta Rahmat Allah SWT, kami bermaksud menyelenggarakan Resepsi Pernikahan putra-putri kami:</p>
                                <div class="row">
                                    <div class="col-12" data-aos="fade-up">
                                        <div class="position-relative text-center">
                                            <div class="rounded-circle" style="position: absolute; z-index: 2; left: 50%; top:50%; transform: translate(-50%, 10%); overflow: hidden; width: 250px; height: 250px;">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/IMG_0885.jpg" alt="images" class="w-100">
                                            </div>
                                        </div>
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/frame/couple_decor_9.webp" alt="images" width="300" height="300" style="position:relative; z-index: 3;">
                                        <div>
                                           <h1 class="fw-bold" style="font-family: 'Parisienne', cursive; font-size: 1.5rem;">Rr. Fauziah Putri Pebrianingsih, S.Psi</h1>
                                            <p class="mb-0">Putri pertama dari Drs. Rahmat Farid M.H. & Rngt. Sri Hastuti Ningsih</p>
                                            <p class="mb-0">Ngasem RT. 02/RW. 11 Desa Gunung Pring, Kec Muntilan, Kab. Magelang, Jawa Tengah</p>
                                            <h1 class="fw-bold" style="font-family: 'Parisienne', cursive; font-size: 3rem;">&</h1>
                                        </div>
                                    </div>
                                    <div class="col-12" data-aos="fade-up">
                                        <div class="position-relative text-center">
                                            <div class="rounded-circle" style="position: absolute; z-index: 2; left: 50%; top:50%; transform: translate(-50%, 10%); overflow: hidden; width: 250px; height: 250px;">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/IMG_0874.jpg" alt="images" class="w-100">
                                            </div>
                                        </div>
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/frame/couple_decor_9.webp" alt="images" width="300" height="300" style="position:relative; z-index: 3;">
                                        <div>
                                           <h1 class="fw-bold" style="font-family: 'Parisienne', cursive; font-size: 1.5rem;">Agus Salim, S.Psi., M.Psi., Psikolog</h1>
                                            <p class="mb-0">Putra bungsu dari H. Syarifudin & Hj. Aisyah</p>
                                            <p class="mb-0">Radebari RT. 005/RW. 001 Desa Ngali, Kec. Belo, Kab. Bima, Nusa Tenggara Barat (NTB)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-0 justify-content-center"><div class="col-md-5 p-0"><img src="<?= get_template_directory_uri() ?>/assets/images/frame/quotes_decor_9.webp" alt="frame" class="img-fluid position-relative" style="bottom: -1.5rem;"></div></div>
            </div>
        </section>
        <section class="section-home" id="acara">
            <div class="d-flex flex-column text-primary text-center justify-content-between align-items-center bg-secondary-s" style="min-height: 100vh;">
                <div class="row m-0 justify-content-center"><div class="col-md-5 p-0"><img src="<?= get_template_directory_uri() ?>/assets/images/frame/quotes_decor_9.webp" alt="frame" class="img-fluid position-relative" style="transform: rotate(180deg); top: -1.5rem;"></div></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <div class="text-center text-primary">
                                <h1 data-aos="fade-up" class="fw-bold" style="font-family: 'Parisienne', cursive; font-size: 3rem;">Menuju Bahagia</h1>
                                <p data-aos="fade-up">Siang dan malam berganti begitu cepat, di antara saat-saat mendebarkan yang belum pernah kami rasakan sebelumnya. Kami nantikan kehadiran para keluarga dan sahabat, untuk menjadi saksi ikrar janji suci kami di hari yang bahagia.</p>
                            </div>
                            <div class="row" id="timer" data-aos="zoom-in">
                                <div class="col-3">
                                    <div class="text-center bg-primary-s rounded-2 p-3">
                                        <h2 class="fw-bold mb-0" id="days"></h2>
                                        <p class="mb-0">Hari</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="text-center bg-primary-s rounded-2 p-3">
                                        <h2 class="fw-bold mb-0" id="hours"></h2>
                                        <p class="mb-0">Jam</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="text-center bg-primary-s rounded-2 p-3">
                                        <h2 class="fw-bold mb-0" id="minutes"></h2>
                                        <p class="mb-0">Menit</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="text-center bg-primary-s rounded-2 p-3">
                                        <h2 class="fw-bold mb-0" id="seconds"></h2>
                                        <p class="mb-0">Detik</p>
                                    </div>
                                </div>
                            </div>
                            <div class="akad mt-5 text-start">
                                <div data-aos="fade-up" class="card border-0 rounded-2 shadow mb-4">
                                    <div class="card-body">
                                        <h1 class="fw-bold text-center" style="font-family: 'Parisienne', cursive; font-size: 3rem;">Akad Nikah</h1>
                                        <p class="d-flex align-items-center">
                                            <i class="position-absolute fad fa-calendar-alt"></i>
                                            <span class="ms-4">Minggu, 20 Februari 2022</span>
                                        </p>
                                        <p class="d-flex align-items-center">
                                            <i class="position-absolute fad fa-clock"></i>
                                            <span class="ms-4">06.00 WIB</span>
                                        </p>
                                        <p class="d-flex align-items-center">
                                            <i class="position-absolute fad fa-map-marker-alt"></i>
                                            <span class="ms-4">Kediaman Mempelai Wanita, Ngasem RT 02 RW 11 Desa Gunung Pring Kec Muntilan, Kab Magelang, Jawa Tengah </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="resepsi mt-5 text-start">
                                <div data-aos="fade-up" class="card border-0 rounded-2 shadow mb-4">
                                    <div class="card-body">
                                        <h1 class="fw-bold text-center" style="font-family: 'Parisienne', cursive; font-size: 3rem;">Resepsi Pernikahan</h1>
                                        <p class="d-flex align-items-center">
                                            <i class="position-absolute fad fa-calendar-alt"></i>
                                            <span class="ms-4">Minggu, 20 Februari 2022</span>
                                        </p>
                                        <p class="d-flex align-items-center">
                                            <i class="position-absolute fad fa-clock"></i>
                                            <span class="ms-4">10.00 WIB s.d 13.00 WIB</span>
                                        </p>
                                        <p class="d-flex align-items-center">
                                            <i class="position-absolute fad fa-map-marker-alt"></i>
                                            <span class="ms-4">Gedung Balai Desa Gunungpring Jl. Kyai Raden Santri, Gunung Pring, Kec. Muntilan, Kab. Magelang, Jawa Tengah</span>
                                        </p>
                                        <iframe class="rounded-2 mb-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.847608294062!2d110.275492114777!3d-7.591560094525716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8babd0a368bd%3A0x7a632da01a25d1b8!2sKANTOR%20KEPALA%20DESA%20GUNUNGPRING!5e0!3m2!1sid!2sid!4v1643735375947!5m2!1sid!2sid" width="100%" height="450" style="border:solid var(--primary);" allowfullscreen="" loading="lazy"></iframe>
                                        <a class="btn btn-primary btn-lg w-100 rounded-2" href="https://goo.gl/maps/8jdAaYf1JKdMam1UA" target="_blank">Buka Di Google Maps</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ngunduh mt-5 text-start">
                                <div data-aos="fade-up" class="card border-0 rounded-2 shadow mb-4">
                                    <div class="card-body">
                                        <h1 class="fw-bold text-center" style="font-family: 'Parisienne', cursive; font-size: 3rem;">Ngunduh Mantu</h1>
                                        <p class="d-flex align-items-center">
                                            <i class="position-absolute fad fa-calendar-alt"></i>
                                            <span class="ms-4">Sabtu, 26 Februari 2022</span>
                                        </p>
                                        <p class="d-flex align-items-center">
                                            <i class="position-absolute fad fa-clock"></i>
                                            <span class="ms-4">15.00 WITA s.d Selesai</span>
                                        </p>
                                        <p class="d-flex align-items-center">
                                            <i class="position-absolute fad fa-map-marker-alt"></i>
                                            <span class="ms-4">Lapangan SMPN 1 Belo Desa Ngali Kec. Belo, Kab. Bima, NTB</span>
                                        </p>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.6776609596545!2d118.72538641478371!3d-8.626911393800423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db5812c5e922265%3A0x30e9f72582e67615!2sSMP%20Negeri%201%20Belo!5e0!3m2!1sid!2sid!4v1643738255439!5m2!1sid!2sid" width="100%" height="450" style="border: solid var(--primary);" allowfullscreen="" loading="lazy" class="rounded-2 mb-3"></iframe>
                                        <a class="btn btn-primary btn-lg w-100 rounded-2" href="https://goo.gl/maps/7KXtAEfeiyAfvRrF6" target="_blank">Buka Di Google Maps</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-0 justify-content-center"><div class="col-md-5 p-0"><img src="<?= get_template_directory_uri() ?>/assets/images/frame/quotes_decor_9.webp" alt="frame" class="img-fluid position-relative" style="bottom: -1.5rem;"></div></div>
            </div>
        </section>
        <section class="section-home" id="galeri">
            <div class="d-flex flex-column text-primary text-center justify-content-between align-items-center bg-secondary-s" style="min-height: 100vh;">
                <div class="row m-0 justify-content-center"><div class="col-md-5 p-0"><img src="<?= get_template_directory_uri() ?>/assets/images/frame/quotes_decor_9.webp" alt="frame" class="img-fluid position-relative" style="transform: rotate(180deg); top: -1.5rem;"></div></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <div class="text-center text-primary mb-4">
                                <h1 data-aos="fade-up" class="fw-bold" style="font-family: 'Parisienne', cursive; font-size: 3rem;">Gallery Of Love</h1>
                            </div>
                            <div class="gallery">
                                <a class="imglightbox" href="<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0694.jpg"><img data-aos="zoom-in-up" class="rounded-2 mb-3 img-galery" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0694.jpg');"></a>
                                <a class="imglightbox" href="<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0697.jpg"><img data-aos="zoom-in-up" class="rounded-2 mb-3 img-galery" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0697.jpg');"></a>
                                <div class="row">
                                    <div class="col-7">
                                        <a class="imglightbox" href="<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0709.jpg"><img data-aos="zoom-in-up" class="rounded-2 mb-3 img-galery" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0709.jpg');"></a>
                                    </div>
                                    <div class="col-5">
                                        <a class="imglightbox" href="<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0712.jpg"><img data-aos="zoom-in-up" class="rounded-2 mb-3 img-galery" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0712.jpg');"></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <a class="imglightbox" href="<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0718.jpg"><img data-aos="zoom-in-up" class="rounded-2 mb-3 img-galery" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0718.jpg');"></a> 
                                    </div>
                                    <div class="col-7">
                                        <a class="imglightbox" href="<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0728.jpg"><img data-aos="zoom-in-up" class="rounded-2 mb-3 img-galery" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0728.jpg');"></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-7">
                                        <a class="imglightbox" href="<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0741.jpg"><img data-aos="zoom-in-up" class="rounded-2 mb-3 img-galery" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0741.jpg');"></a>
                                    </div>
                                    <div class="col-5">
                                        <a class="imglightbox" href="<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0760.jpg"><img data-aos="zoom-in-up" class="rounded-2 mb-3 img-galery" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0760.jpg');"></a>
                                    </div>
                                </div>
                                <a class="imglightbox" href="<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0812.jpg"><img data-aos="zoom-in-up" class="rounded-2 mb-3 img-galery" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0812.jpg');"></a>
                                <a class="imglightbox" href="<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0854.jpg"><img data-aos="zoom-in-up" class="rounded-2 mb-3 img-galery" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0854.jpg');"></a>
                                <a class="imglightbox" href="<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0862.jpg"><img data-aos="zoom-in-up" class="rounded-2 mb-3 img-galery" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0862.jpg');"></a>
                                <a class="imglightbox" href="<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0898.jpg"><img data-aos="zoom-in-up" class="rounded-2 mb-3 img-galery" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0898.jpg');"></a>
                                <div class="row">
                                    <div class="col-6">
                                        <a class="imglightbox" href="<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0905.jpg"><img data-aos="zoom-in-up" class="rounded-2 mb-3 img-galery" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0905.jpg');"></a>
                                    </div>
                                    <div class="col-6">
                                        <a class="imglightbox" href="<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0911.jpg"><img data-aos="zoom-in-up" class="rounded-2 mb-3 img-galery" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/galery/IMG_0911.jpg');"></a>
                                    </div>
                                </div>
                               <iframe data-aos="zoom-in-up" class="rounded-2" width="100%" height="315" src="https://www.youtube.com/embed/pgAOOMxTk7I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-0 justify-content-center"><div class="col-md-5 p-0"><img src="<?= get_template_directory_uri() ?>/assets/images/frame/quotes_decor_9.webp" alt="frame" class="img-fluid position-relative" style="bottom: -1.5rem;"></div></div>
            </div>
        </section>
        <section class="section-home" id="reservasi">
            <div class="d-flex flex-column text-primary text-center justify-content-between align-items-center bg-secondary-s" style="min-height: 100vh;">
                <div class="row m-0 justify-content-center"><div class="col-md-5 p-0"><img src="<?= get_template_directory_uri() ?>/assets/images/frame/quotes_decor_9.webp" alt="frame" class="img-fluid position-relative" style="transform: rotate(180deg); top: -1.5rem;"></div></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <div class="text-center text-primary mb-4">
                                <h1 data-aos="fade-up" class="fw-bold" style="font-family: 'Parisienne', cursive; font-size: 3rem;">Kalimat Mutiara</h1>
                                <p data-aos="fade-up">"Kami pernah enggan menatap<br>Menghabiskan waktu untuk meratap<br>Hingga kami dipertemukan di saat yang tepat, di waktu yang tepat<br>Dipersatukan dalam satu atap, dalam untaian kalimat akad yang khidmat"</p>
                            </div>
                            <div>
                                <h1 data-aos="fade-up" class="fw-bold mb-4" style="font-family: 'Parisienne', cursive; font-size: 3rem;">Cerita Cinta</h1>

                                <div class="timeline-container">

                                   <div class="timeline-block timeline-block-right" data-aos="fade-up">
                                      <div class="marker"><i class="fad fa-heart-circle h1"></i></div>
                                      <div class="timeline-content">
                                          <div class="date-left">
                                            <span class="fw-bold">2012<br>September</span>
                                          </div>
                                         <h3>Awal Pertemuan</h3>
                                         <div class="card rounded-2 shadow border-0">
                                            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="card-img-top img-galery rounded-1" alt="" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/story/Awalbertemu.jpg');">
                                             <div class="card-body">
                                                 <p>Fakultas Psikologi Universitas Muhammadiyah Malang dan Himpunan Mahasiswa Islam, tak ada tempat tersebut, Putri & Agus tidak akan bertemu, namun setelah lulus tidak pernah bertemu lagi.</p>
                                             </div>
                                         </div>
                                      </div>
                                   </div>

                                   <div class="timeline-block timeline-block-left" data-aos="fade-up">
                                      <div class="marker"><i class="fad fa-heart-circle h1"></i></div>
                                      <div class="timeline-content">
                                          <div class="date-right">
                                            <span class="fw-bold">2019<br>Februari</span>
                                          </div>
                                         <h3>Pertemuan Kembali</h3>
                                         <div class="card rounded-2 shadow border-0">
                                             <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="card-img-top img-galery rounded-1" alt="" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/story/Pendekatankembali.jpg');">
                                             <div class="card-body">
                                                 <p>Setelah sekian tahun tidak pernah bertemu dikarenakan berbeda tujuan hidup, Putri milih bekerja di Jogjakarta, sedangkan Agus memilih untuk melanjutkan Studi Magister Profesi Psikologi di surakarta. Putri dan Agus bertemu kembali di salah satu cafe di Jogjakarta untuk sekedar silaturrahmi, dan semenjak saat itu, mereka berdua sering komunikasi namun tidak pernah terpikir untuk menjalin asmara.</p>
                                             </div>
                                         </div>
                                      </div>
                                   </div>

                                   <div class="timeline-block timeline-block-right" data-aos="fade-up">
                                      <div class="marker"><i class="fad fa-heart-circle h1"></i></div>
                                      <div class="timeline-content">
                                          <div class="date-left">
                                            <span class="fw-bold">2021<br>September</span>
                                          </div>
                                         <h3>Pendekatan</h3>
                                         <div class="card rounded-2 shadow border-0">
                                             <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="img-fluid img-galery rounded-1" alt="" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/story/Pendekatan.jpg');">
                                             <div class="card-body">
                                                <p>Putri dan Agus intens berkomunikasi dan bertemu secara langsung, tepat di tanggal 7 September 2021, Agus menyatakan cintanya kepada putri.</p>
                                            </div>
                                         </div>
                                      </div>
                                   </div>

                                   <div class="timeline-block timeline-block-left" data-aos="fade-up">
                                      <div class="marker"><i class="fad fa-heart-circle h1"></i></div>
                                      <div class="timeline-content">
                                          <div class="date-right">
                                            <span class="fw-bold">2022<br>Januari</span>
                                          </div>
                                         <h3>Lamaran</h3>
                                         <div class="card rounded-2 shadow border-0">
                                             <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="img-fluid img-galery rounded-1" alt="" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/story/Lamaran.jpg'); background-position: center;">
                                             <div class="card-body">
                                                <p>Tepat di tanggal 6 Januari 2022 Agus menyakinkan putri untuk menikah. Keduanya sepakat untuk melangsungkan prosesi lamaran sebagai langkah awal menuju jenjang pernikahan</p>
                                             </div>
                                         </div>
                                      </div>
                                   </div>

                                   <div class="timeline-block timeline-block-right" data-aos="fade-up">
                                      <div class="marker"><i class="fad fa-heart-circle h1"></i></div>
                                      <div class="timeline-content">
                                          <div class="date-left">
                                            <span class="fw-bold">2022<br>Februari</span>
                                          </div>
                                         <h3>Menjelang Pernikahan</h3>
                                         <div class="card rounded-2 shadow border-0">
                                             <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="img-fluid img-galery rounded-1" alt="" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/story/Menjelangpernikahan.jpg');">
                                             <div class="card-body">
                                                <p>Dan Insya Allah di tanggal 20 Februari 2022 kami akan melaksanakan pernikahan. Dengan niat beribadah karena ALLAH SWT, hidup bersama sehidup sesurga. Aamiin.</p>
                                             </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>

                                <h1 data-aos="fade-up" class="fw-bold" style="font-family: 'Parisienne', cursive; font-size: 3rem;">Wedding Gift</h1>
                                <p data-aos="fade-up">Bagi Keluarga dan Sahabat yang ingin mengirimkan hadiah, silahkan mengirimkannya melalui :</p>
                                <div data-aos="fade-up" class="card border-0 rounded-2 shadow mb-4">
                                    <div class="card-body">
                                        <img class="mb-3" src="<?= get_template_directory_uri()  ?>/assets/images/bri.png" alt="bank bri" class="img-fluid" width="100">
                                        <p class="fw-bold mb-0">a.n Fauziah Putri Pebrianingsih</p>
                                        <p class="fw-bold" id="p1">124701006507504</p>
                                        <button class="btn btn-primary" onclick="copyToClipboard('#p1')"><i class="fad fa-copy"></i> Copy No. Rekening</button>
                                    </div>
                                </div>
                                <div data-aos="fade-up" class="card border-0 rounded-2 shadow mb-4">
                                    <div class="card-body">
                                        <img class="mb-3" src="<?= get_template_directory_uri()  ?>/assets/images/gopay.png" alt="bank bri" class="img-fluid" width="100">
                                        <p class="fw-bold mb-0">a.n Fauziah Putri</p>
                                        <p class="fw-bold" id="p2">082257968562</p>
                                        <button class="btn btn-primary" onclick="copyToClipboard('#p2')"><i class="fad fa-copy"></i> Copy No. GoPay</button>
                                    </div>
                                </div>
                                <div data-aos="fade-up" class="card border-0 rounded-2 shadow mb-4">
                                    <div class="card-body">
                                        <h1 class="fw-bold" style="font-family: 'Parisienne', cursive; font-size: 3rem;">Kirim Kado</h1>
                                        <p class="mb-0">Drs. Rahmat Farid M.H / Fauziah Putri</p>
                                        <p class="mb-0">Ngasem RT 02 RW 11 Desa Gunung Pring, Kecamatan Muntilan, Kabupaten Magelang, Jawa tengah.</p>
                                        <p class="mb-0">083166745857</p>
                                    </div>
                                </div>
                                <div class="text-start">
                                    <div class="text-center" data-aos="fade-up">
                                        <h5>Konfirmasi kehadiran Anda di acara pernikahan</h5>
                                    </div>
                                    <div class="card border-0 rounded-2 shadow mb-4" data-aos="fade-up">
                                       
                                            <div class="card-body">
                                                <div class="mb-3">
                                                  <label for="nama" class="form-label fw-bold">Nama</label>
                                                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Tulis Nama Anda" >
                                                </div>
                                                <div class="mb-3">
                                                  <label for="jumlah" class="form-label fw-bold">Jumlah</label>
                                                  <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Isi Jumlah Tamu" >
                                                </div>
                                                <label for="radio" class="form-label fw-bold">Konfirmasi Kehadiran</label>
                                                <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="konfirmasi" id="konfirmasi1" checked value="Ya, Saya akan Datang" >
                                                  <label class="form-check-label" for="konfirmasi1">
                                                    Ya, Saya akan Datang
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="konfirmasi" id="konfirmasi2" value="Saya Masih Ragu" >
                                                  <label class="form-check-label" for="konfirmasi2">
                                                    Saya Masih Ragu
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input" type="radio" name="konfirmasi" id="konfirmasi3" value="Maaf, Saya Tidak Bisa Datang" >
                                                  <label class="form-check-label" for="konfirmasi3">
                                                     Maaf, Saya Tidak Bisa Datang
                                                  </label>
                                                </div>
                                                <div class="text-center">
                                                    <button class="btn btn-primary mt-3" id="btn-reservasi">Reservasi Via WhatsApp</button>
                                                </div>
                                            </div>
                                        
                                    </div>
                                    <div class="text-center" data-aos="fade-up">
                                        <p>Dengan undangan ini meminta Do'a & Restu undangan sekalian agar keluarga anak kami kelak diridhoi Allah SWT dan menjadi keluarga yang sakinah mawaddah warahmah</p>
                                        <h1 data-aos="fade-up" class="fw-bold" style="font-family: 'Parisienne', cursive; font-size: 3rem;">Putri & Agus</h1>
                                    </div>
                                    <div>
                                        <p data-aos="fade-up" class="text-center fw-bold mb-4">Supported by:</p>
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-6 text-center" data-aos="zoom-in">
                                                <a href="https://connectedness.id/" class="text-decoration-none text-primary" target="_blank">
                                                    <img class="mx-auto" src="<?= get_template_directory_uri() ?>/assets/images/connectedness.png" alt="connectedness" width="50">
                                                    <p>Connectedness</p>
                                                </a>
                                            </div>
                                            <div class="col-6 text-center" data-aos="zoom-in">
                                                <a href="https://spandiv.xyz/" class="text-decoration-none text-primary" target="_blank">
                                                    <p class="mb-0" style="font-family: 'M PLUS Code Latin', sans-serif; font-size: 1.7rem; background: #0066FF; background: -webkit-linear-gradient(to right, #0066FF 0%, #00c6ff 100%); background: -moz-linear-gradient(to right, #0066FF 0%, #00c6ff 100%); background: linear-gradient(to right, #0066FF 0%, #00c6ff 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent">./Spandiv</p>
                                                    <p class="mb-1" style="line-height: 2px; font-family: 'Comfortaa', cursive; font-size: .6rem; color: var(--bs-gray-500);">Software Solutions</p>
                                                    <p>Spandiv</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-0 justify-content-center"><div class="col-md-5 p-0"><img src="<?= get_template_directory_uri() ?>/assets/images/frame/quotes_decor_9.webp" alt="frame" class="img-fluid position-relative" style="bottom: -1.5rem;"></div></div>
            </div>
        </section>
    </div>

    <!-- player control -->
    <div class="fixed-top player-btn" style="display: none;">
        <button class="btn btn-primary-s float-end mt-2 me-2" id="play-pause"><i class="fa fa-pause"></i></button>
    </div>
    <audio id="track">
      <source src="<?= get_template_directory_uri() ?>/assets/music/Melamarmu.mp3" type="audio/mpeg" />
    </audio>

    <!-- Modal Protokol-->
    <div class="modal fade" id="protokol" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 rounded-2">
          <div class="modal-header mx-3">
            <h3 class="modal-title"><i class="fad fa-exclamation-triangle text-warning"></i> Perhatian</h3>
            <button type="button" class="btn-close bg-primary text-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <p class=" mb-0">Dengan Tidak Mengurangi Rasa Hormat,</p>
            <p class=" fw-bold">Mohon Maaf Kami Tidak Menerima Tamu Di Rumah</p>
            <hr>
            <h1 class="text-capitalize mb-5 text-primary">Protokol Kesehatan</h1>
            <div class="row text-center">
                <div class="col-4 mb-3">
                    <img src="<?= get_template_directory_uri() ?>/assets/icons/wudhu.png" alt="icon" class="img-fluid mb-3" width="50">
                    <p class="">Cuci Tangan</p>
                </div>
                <div class="col-4 mb-3">
                    <img src="<?= get_template_directory_uri() ?>/assets/icons/mask.png" alt="icon" class="img-fluid mb-3" width="50">
                    <p class="">Gunakan Masker</p>
                </div>
                <div class="col-4 mb-3">
                    <img src="<?= get_template_directory_uri() ?>/assets/icons/substitute.png" alt="icon" class="img-fluid mb-3" width="50">
                    <p class="">Jaga Jarak</p>
                </div>
                <div class="col-4 mb-3">
                    <img src="<?= get_template_directory_uri() ?>/assets/icons/trust.png" alt="icon" class="img-fluid mb-3" width="50">
                    <p class="">Tidak Berjabat Tangan</p>
                </div>
                <div class="col-4 mb-3">
                    <img src="<?= get_template_directory_uri() ?>/assets/icons/population.png" alt="icon" class="img-fluid mb-3" width="50">
                    <p class="">Hindari Kerumunan</p>
                </div>
                <div class="col-4 mb-3">
                    <img src="<?= get_template_directory_uri() ?>/assets/icons/handwash.png" alt="icon" class="img-fluid mb-3" width="50">
                    <p class="">Gunakan Hand Sanitizer</p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- lightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.1/simple-lightbox.jquery.min.js" integrity="sha512-/KPL35RUhlitNiujTD78F6lyczxSeUrAsdPdEgkktIfmV28iY51t1oLOfAGB7fOnci6tntAwFdVpkAvlcXt89Q==" crossorigin="anonymous" referrerpolicy="no-referrer" type="text/javascript"></script>

    <!-- aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="<?= bloginfo('template_url'); ?>/app.js"></script>
  </body>
</html>