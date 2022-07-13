   <!-- Start Breadcrumb 
    ============================================= -->
    <div
      class="breadcrumb-area shadow dark bg-fixed text-light"
      style="background-image: url(<? echo $template_path ?>img/background/about.jpeg)"
    >
      <div class="container">
        <div class="row align-center">
        <? foreach (view::CONTENT('all_active',['IBLOCK_ID'=>'165']) as $about):?>
          <div class="col-lg-6">
            <h2><?= $about['title'] ?></h2>
          </div>
          <div class="col-lg-6 text-right">
            <ul class="breadcrumb">
              <li>
                <a href="<?= $about['url1'] ?>"><i class="fas fa-home"></i><?= $about['link1'] ?></a>
              </li>
              <li class="active"><?= $about['link2'] ?></li>
            </ul>
          </div>
          <?endforeach?>
        </div>
      </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star About Area
    ============================================= -->
    <div class="about-area faq-area inc-shape default-padding">
      <div class="container">
        <div class="row">
        <? foreach (view::CONTENT('all_active',['IBLOCK_ID'=>'166']) as $about):?>
          <div class="col-lg-6">
            <div class="thumb">
              <img
                src="<?= $about['img'] ?>"
                alt="Thumb"
              />
              <img
                src="<?= $about['img2'] ?>"
                alt="Thumb"
              />
              <div class="overlay">
                <div class="content">
                  <h4><?= $about['title'] ?></h4>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-5 offset-lg-1 info">
            <h2><?= $about['subtitle'] ?></h2>
            <p><?= $about['text'] ?></p>
          </div>
          <?endforeach?>
        </div>
      </div>
    </div>
    <!-- End About Area -->
