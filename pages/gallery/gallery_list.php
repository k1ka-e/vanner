<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area shadow dark bg-fixed text-light" style="background: url(<? echo $template_path ?>img/background/gallery2.jpg)">
  <div class="container">
    <div class="row align-center">
      <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '194']) as $gallery) : ?>
        <div class="col-lg-6">
          <h2><?= $gallery['title'] ?></h2>
        </div>
        <div class="col-lg-6 text-right">
          <ul class="breadcrumb">
            <li>
              <a href="<?= $gallery['url1'] ?>"><i class="fas fa-home"></i><?= $gallery['link1'] ?></a>
            </li>
            <li class="active"><?= $gallery['link2'] ?></li>
          </ul>
        </div>
      <? endforeach ?>
    </div>
  </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Services 
    ============================================= -->
<div class="thumb-services-area default-padding carousel-shadow relative bg-cover">
  <div class="container">
    <h1 class="gallary__title">Gallery</h1>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">

        <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '195']) as $slider) : ?>

          <div class="swiper-slide">
            <img src="<?= $slider['img'] ?>" alt="">
          </div>

        <? endforeach ?>

      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</div>
<!-- End Services Area -->