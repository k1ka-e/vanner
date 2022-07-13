<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area shadow dark bg-fixed text-light" style="background:  url(<? echo $template_path ?>img/background/services1.jpeg); background-size: 100%;" >
  <div class="container">
    <div class="row align-center">
      <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '167']) as $services) : ?>
        <div class="col-lg-6">
          <h2><?= $services['title'] ?></h2>
        </div>
        <div class="col-lg-6 text-right">
          <ul class="breadcrumb">
            <li>
              <a href="<?= $services['url1'] ?>"><i class="fas fa-home"></i><?= $services['link1'] ?></a>
            </li>
            <li class="active"><?= $services['link2'] ?></li>
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
    <div class="services-items">
      <div class="services__content">
        <div class="services__list">

          <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '169']) as $title) : ?>
            <h3><?= $title['title'] ?></h3>
          <? endforeach ?>

          <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '175']) as $list) : ?>
            <li><?= $list['name'] ?></li>
          <? endforeach ?>

        </div>

        <div class="services__list">

          <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '169']) as $title) : ?>
            <h3><?= $title['title2'] ?></h3>
          <? endforeach ?>

          <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '176']) as $list) : ?>
            <li><?= $list['name'] ?></li>
          <? endforeach ?>
        </div>
      </div>


    </div>
  </div>
</div>
<!-- End Services Area -->