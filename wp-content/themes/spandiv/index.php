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
          <div class="container">
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
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/IMG20220130100403.jpg" alt="images" class="w-100">
                                </div>
                            </div>
                            <img src="<?= get_template_directory_uri() ?>/assets/images/frame/couple_decor_9.webp" alt="images" width="250" height="250" style="position:relative; z-index: 3;">
                            <div class="position-relative mt-4" style="z-index: 3;">
                                <h5 class="text-uppercase">Undangan Pernikahan</h5>
                                <h1 style="font-family: 'Parisienne', cursive; font-size: 3rem;">Putri & Agus</h1>
                                <h5><i class="fad fa-heart"></i> Kamis 20 Februari 1990 <i class="fad fa-heart"></i></h5>
                                <button class="btn btn-outline-light btn-lg mt-3 rounded-3 px-5 btn-glow" id="buka-undangan">Buka Undangan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-home" id="beranda">
            <div class="d-flex flex-column text-primary text-center justify-content-between align-items-center" style="min-height: 100vh;">
                <div class="row m-0 justify-content-center text-start"><div class="col-md-5 p-0"><img src="<?= get_template_directory_uri() ?>/assets/images/frame/home1.png" alt="frame" class="img-fluid" style="max-width: 70%;"></div></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <div>
                                <h1>Putri & Agus</h1>
                                <p>Beranda</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-0 justify-content-center text-end"><div class="col-md-5 p-0"><img src="<?= get_template_directory_uri() ?>/assets/images/frame/home2.png" alt="frame" class="img-fluid" style="max-width: 70%;"></div></div>
            </div>
        </section>
        <section class="section-home" id="pasangan">
            <div class="d-flex flex-column text-primary text-center justify-content-between align-items-center bg-secondary-s" style="min-height: 100vh;">
                <div class="row m-0 justify-content-center"><div class="col-md-5 p-0"><img src="<?= get_template_directory_uri() ?>/assets/images/frame/quotes_decor_9.webp" alt="frame" class="img-fluid position-relative" style="transform: rotate(180deg); top: -1.5rem;"></div></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <div>
                                <img src="<?= get_template_directory_uri() ?>/assets/images/basmalah-1-2.png" alt="bismillah" class="img-fluid" style="width: 60%;    filter: brightness( 104% ) contrast( 116% ) saturate( 200% ) blur( 0px ) hue-rotate( 115deg );">
                                <p class="fw-bold mb-0 mt-2">Assalamualaikum Warahmatullahi Wabarakatuh</p>
                                <p>Dengan memohon Ridho serta Rahmat Allah SWT, kami bermaksud menyelenggarakan Resepsi Pernikahan putra-putri kami:</p>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="position-relative text-center">
                                            <div class="rounded-circle" style="position: absolute; z-index: 2; left: 50%; top:50%; transform: translate(-50%, 10%); overflow: hidden; width: 250px; height: 250px;">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/IMG20220130100403.jpg" alt="images" class="w-100">
                                            </div>
                                        </div>
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/frame/couple_decor_9.webp" alt="images" width="300" height="300" style="position:relative; z-index: 3;">
                                        <div>
                                           <h4 class="fw-bold" style="font-family: 'Parisienne', cursive; font-size: 3rem;">Rr. Fauziah Putri Pebrianingsih, S.Psi</h4>
                                            <p class="fw-bold mb-0">Putri dari:</p>
                                            <p class="mb-0">Drs. Rahmat Farid M.H.</p>
                                            <p class="mb-0">Rngt. Sri Hastuti Ningsih</p>
                                            <h1 class="fw-bold" style="font-family: 'Parisienne', cursive; font-size: 3rem;">&</h1>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="position-relative text-center">
                                            <div class="rounded-circle" style="position: absolute; z-index: 2; left: 50%; top:50%; transform: translate(-50%, 10%); overflow: hidden; width: 250px; height: 250px;">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/IMG20220130100403.jpg" alt="images" class="w-100">
                                            </div>
                                        </div>
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/frame/couple_decor_9.webp" alt="images" width="300" height="300" style="position:relative; z-index: 3;">
                                        <div>
                                           <h4 class="fw-bold" style="font-family: 'Parisienne', cursive; font-size: 3rem;">Agus Salim, S.Psi., M.Psi., Psikolog</h4>
                                            <p class="fw-bold mb-0">Putra dari:</p>
                                            <p class="mb-0">H. Syarifudin</p>
                                            <p class="mb-0">Hj. Aisyah</p>
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
                                <h1 class="fw-bold" style="font-family: 'Parisienne', cursive; font-size: 3rem;">Menuju Bahagia</h1>
                                <p>Siang dan malam berganti begitu cepat, di antara saat-saat mendebarkan yang belum pernah kami rasakan sebelumnya. Kami nantikan kehadiran para keluarga dan sahabat, untuk menjadi saksi ikrar janji suci kami di hari yang bahagia.</p>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="text-center bg-primary-s rounded-2 p-3">
                                        <h2 class="fw-bold mb-0">120</h2>
                                        <p class="mb-0">Hari</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="text-center bg-primary-s rounded-2 p-3">
                                        <h2 class="fw-bold mb-0">22</h2>
                                        <p class="mb-0">Hari</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="text-center bg-primary-s rounded-2 p-3">
                                        <h2 class="fw-bold mb-0">11</h2>
                                        <p class="mb-0">Hari</p>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="text-center bg-primary-s rounded-2 p-3">
                                        <h2 class="fw-bold mb-0">1</h2>
                                        <p class="mb-0">Hari</p>
                                    </div>
                                </div>
                            </div>
                            <div class="akad mt-5 text-start">
                                <div class="bg-white rounded-2 p-3 shadow">
                                    <h1 class="fw-bold text-center" style="font-family: 'Parisienne', cursive; font-size: 3rem;">Akad Nikah</h1>
                                    <p class="d-flex align-items-center">
                                        <i class="position-absolute fad fa-calendar-alt"></i>
                                        <span class="ms-5">Sabtu, 26 Februari 2022</span>
                                    </p>
                                    <p class="d-flex align-items-center">
                                        <i class="position-absolute fad fa-clock"></i>
                                        <span class="ms-5">06.00 WIB</span>
                                    </p>
                                    <p class="d-flex align-items-center">
                                        <i class="position-absolute fad fa-map-marker-alt"></i>
                                        <span class="ms-5">Kediaman Mempelai Wanita, Ngasem RT 02 RW 11 Desa Gunung Pring Kec Muntilan, Kab Magelang, Jawa Tengah </span>
                                    </p>
                                </div>
                            </div>
                            <div class="resepsi mt-5 text-start">
                                <div class="bg-white rounded-2 p-3 shadow">
                                    <h1 class="fw-bold text-center" style="font-family: 'Parisienne', cursive; font-size: 3rem;">Resepsi Pernikahan</h1>
                                    <p class="d-flex align-items-center">
                                        <i class="position-absolute fad fa-calendar-alt"></i>
                                        <span class="ms-5">Sabtu, 2 Februari 2022</span>
                                    </p>
                                    <p class="d-flex align-items-center">
                                        <i class="position-absolute fad fa-clock"></i>
                                        <span class="ms-5">06.00 WIB</span>
                                    </p>
                                    <p class="d-flex align-items-center">
                                        <i class="position-absolute fad fa-map-marker-alt"></i>
                                        <span class="ms-5">Gedung Balai Desa Gunungpring Jl. Kyai Raden Santri, Gunung Pring, Kec. Muntilan, Kab. Magelang, Jawa Tengah</span>
                                    </p>
                                    <iframe class="rounded-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.847608294062!2d110.275492114777!3d-7.591560094525716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8babd0a368bd%3A0x7a632da01a25d1b8!2sKANTOR%20KEPALA%20DESA%20GUNUNGPRING!5e0!3m2!1sid!2sid!4v1643735375947!5m2!1sid!2sid" width="100%" height="450" style="border:solid var(--primary);" allowfullscreen="" loading="lazy"></iframe>
                                    <a class="btn btn-primary btn-lg w-100 rounded-2" href="https://goo.gl/maps/8jdAaYf1JKdMam1UA" target="_blank">Buka Di Google Maps</a>
                                </div>
                            </div>
                            <div class="ngunduh mt-5 text-start">
                                <div class="bg-white rounded-2 p-3 shadow">
                                    <h1 class="fw-bold text-center" style="font-family: 'Parisienne', cursive; font-size: 3rem;">Ngunduh Mantu</h1>
                                    <p class="d-flex align-items-center">
                                        <i class="position-absolute fad fa-calendar-alt"></i>
                                        <span class="ms-5">Sabtu, 26 Februari 2022</span>
                                    </p>
                                    <p class="d-flex align-items-center">
                                        <i class="position-absolute fad fa-clock"></i>
                                        <span class="ms-5">15.00 WITA s.d Selesai</span>
                                    </p>
                                    <p class="d-flex align-items-center">
                                        <i class="position-absolute fad fa-map-marker-alt"></i>
                                        <span class="ms-5">Lapangan SMPN 1 Belo Desa Ngali Kec. Belo, Kab. Bima, NTB</span>
                                    </p>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.6776609596545!2d118.72538641478371!3d-8.626911393800423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db5812c5e922265%3A0x30e9f72582e67615!2sSMP%20Negeri%201%20Belo!5e0!3m2!1sid!2sid!4v1643738255439!5m2!1sid!2sid" width="100%" height="450" style="border: solid var(--primary);" allowfullscreen="" loading="lazy" class="rounded-2"></iframe>
                                    <a class="btn btn-primary btn-lg w-100 rounded-2" href="https://goo.gl/maps/7KXtAEfeiyAfvRrF6" target="_blank">Buka Di Google Maps</a>
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
                            <div class="text-center text-primary">
                                <h1 class="fw-bold" style="font-family: 'Parisienne', cursive; font-size: 3rem;">Galery Of Love</h1>
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
                            <div class="text-center text-primary">
                                <h1 class="fw-bold" style="font-family: 'Parisienne', cursive; font-size: 3rem;">Reservasi</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-0 justify-content-center"><div class="col-md-5 p-0"><img src="<?= get_template_directory_uri() ?>/assets/images/frame/quotes_decor_9.webp" alt="frame" class="img-fluid position-relative" style="bottom: -1.5rem;"></div></div>
            </div>
        </section>
    </div>

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
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="<?= bloginfo('template_url'); ?>/app.js"></script>
  </body>
</html>