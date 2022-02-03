<?php 
  $product_api = file_get_contents("https://web.spandiv.xyz/wp-json/wp/v2/product?_embed");
  $products = json_decode($product_api, true);
  $product = $products[rand(0,count($products)-1)];
  // echo "<pre>";
  // var_dump($product);
  // echo "</pre>";

  // $image = file_get_contents("https://web.spandiv.xyz/wp-json/wp/v2/media?parent=77");
  // var_dump($image);

  // https://web.spandiv.xyz/wp-json/wp/v2/media/47?username=spandiv&password=bismillah*2020#
?>


<div class="col-lg-3 d-block">
  <div class="card border-0 shadow-sm sticky-top" style="position: sticky;top:3rem">
    <a href="<?= $product['link'] ?>" target="_blank">
      <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" style="background-image: url('<?= CFS()->get( 'image_1', $product['id'] ); ?>'); background-repeat: no-repeat; height: 200px; width: 100%; background-size:cover; border-radius: .3rem .3rem 0 0;">
    </a>
    <div class="card-body pb-0 bg-white">
        <div class="row">
          <div class="col text-start">
              <p class="mb-0 fw-bold text-truncate"><?= $product['title']['rendered'] ?></p>
          </div>
        </div>
        <hr>
        <p><?= $product["excerpt"]["rendered"] ?></p>
    </div>
    <div class="card-footer border-0 bg-white text-center pb-3">
        <a class="btn btn-primary rounded-3 d-block" href="<?= $product['link']?>" target="_blank" rel="bookmark"><span class="dashicons dashicons-external"></span> Lihat Lebih Lanjut</a>
    </div>
  </div>
</div>