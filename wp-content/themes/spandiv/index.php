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
            <div class="container px-0">
                <div class="row m-0 justify-content-center">
                    <div class="col-md-5 px-0">
                        <div class="vh-100 d-flex flex-column text-primary text-center justify-content-center align-items-center" style="background: url(https://cdn-uploads.our-wedding.link/db7fa8e0-4075-11eb-8193-6d767f9d355e.webp); background-repeat: no-repeat; background-size: cover;">
                            <h5 class="text-uppercase">Undangan Pernikahan</h5>
                            <h1>Agus & Salim</h1>
                            <h5><i class="fad fa-heart"></i> Kamis 20 Februari 1990 <i class="fad fa-heart"></i></h5>
                            <button class="btn btn-primary fw-bold mt-3 rounded-3 px-4 btn-glow" id="buka-undangan">Buka Undangan</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-home" id="beranda">
            <div class="container vh-100 d-flex justify-content-center align-items-center">
                <div>
                    <h1>Agus & Salim</h1>
                </div>
            </div>
        </section>
        <section class="section-home" id="pasangan">
            <div class="container vh-100 d-flex justify-content-center align-items-center">
                <div>
                    <h1>Agus & Salim</h1>
                    <p>Pasangan</p>
                </div>
            </div>
        </section>
        <section class="section-home" id="acara">
            <div class="container vh-100 d-flex justify-content-center align-items-center">
                <div>
                    <h1>Agus & Salim</h1>
                    <p>Acara</p>
                </div>
            </div>
        </section>
        <section class="section-home" id="galeri">
            <div class="container vh-100 d-flex justify-content-center align-items-center">
                <div>
                    <h1>Agus & Salim</h1>
                    <p>Galeri</p>
                </div>
            </div>
        </section>
        <section class="section-home" id="reservasi">
            <div class="container vh-100 d-flex justify-content-center align-items-center">
                <div>
                    <h1>Agus & Salim</h1>
                    <p>Reservasi</p>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal Protokol-->
    <div class="modal fade" id="protokol" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content border-0 rounded-3">
          <div class="modal-header mx-3">
            <h5 class="modal-title"><i class="fad fa-exclamation-triangle text-warning"></i> Perhatian</h5>
            <button type="button" class="btn-close bg-primary text-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <p class=" mb-0">Dengan Tidak Mengurangi Rasa Hormat,</p>
            <p class=" fw-bold" style="font-size: 1.1rem">Mohon Maaf Kami Tidak Menerima Tamu Di Rumah</p>
            <hr>
            <h1 class="text-capitalize mb-5 text-primary">Protokol Kesehatan</h1>
            <div class="row text-center">
                <div class="col-4 mb-3">
                    <img src="<?= get_template_directory_uri() ?>/assets/icons/wudhu.png" alt="icon" class="img-fluid mb-3" width="70">
                    <p class="">Cuci Tangan</p>
                </div>
                <div class="col-4 mb-3">
                    <img src="<?= get_template_directory_uri() ?>/assets/icons/mask.png" alt="icon" class="img-fluid mb-3" width="70">
                    <p class="">Gunakan Masker</p>
                </div>
                <div class="col-4 mb-3">
                    <img src="<?= get_template_directory_uri() ?>/assets/icons/substitute.png" alt="icon" class="img-fluid mb-3" width="70">
                    <p class="">Jaga Jarak</p>
                </div>
                <div class="col-4 mb-3">
                    <img src="<?= get_template_directory_uri() ?>/assets/icons/trust.png" alt="icon" class="img-fluid mb-3" width="70">
                    <p class="">Tidak Berjabat Tangan</p>
                </div>
                <div class="col-4 mb-3">
                    <img src="<?= get_template_directory_uri() ?>/assets/icons/population.png" alt="icon" class="img-fluid mb-3" width="70">
                    <p class="">Hindari Kerumunan</p>
                </div>
                <div class="col-4 mb-3">
                    <img src="<?= get_template_directory_uri() ?>/assets/icons/handwash.png" alt="icon" class="img-fluid mb-3" width="70">
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