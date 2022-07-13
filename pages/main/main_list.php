
    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area header auto-height text-color bg-gray inc-shape">
      <div class="item">
        <div class="container">
          <div class="align-bottom">
            <div class="col-md-6 offset-md-3">
              <div class="content align-bottom">
              <? foreach (view::CONTENT('all_active',['IBLOCK_ID'=>'160']) as $main):?>
                <h2 class="wow fadeInDown header__title">
                <?= $main['banner'] ?>
                  <strong><?= $main['text'] ?></strong>
                </h2>

                <a
                  class="btn circle btn-theme effect btn-md wow fadeInUp"
                  href="#"
                  ><?= $main['button1'] ?><i class="fas fa-arrow-alt-circle-right"></i
                ></a>
                <?endforeach?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Banner -->

    <div class="features-area bg-gray">
      <!-- End Fixed Shpae  -->
      <div class="container">
        <div class="item__content">
          <div class="item-grid">
          <div class="item">
              <i class="fa-solid fa-clock"></i>
              <p>Fast Quality Service</p>
            </div>

            <div class="item">
              <i class="fa-solid fa-wrench"></i>
              <p>Experienced Mechanics</p>
            </div>

            <div class="item">
              <i class="fa-solid fa-check"></i>
              <p>Affordable Prices</p>
            </div>

            <div class="item">
              <i class="fa-solid fa-thumbs-up"></i>
              <p>Well Experienced</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="features-area overflow-hidden bg-gray default-padding">
      <div class="container">
        <div class="row align-center">
        <? foreach (view::CONTENT('all_active',['IBLOCK_ID'=>'162']) as $about):?>
          <div class="col-lg-5 why-us">
            <h2><?= $about['title_dange'] ?></h2>
            <p>
            <?= $about['title'] ?>
            </p>
            <a
              class="popup-youtube theme relative video-play-button"
              href="https://www.youtube.com/watch?v=owhuBrGIOsE"
            >
              <i class="fa fa-play"></i> <span><?= $about['video_text'] ?></span>
            </a>
          </div>
          <div class="col-lg-7 features-box text-center">
            <img
              src="<?= $about['img'] ?>"
              alt="about image"
            />
          </div>
          <?endforeach?>
        </div>
      </div>
    </div>

    <!-- Start Features 
    ============================================= -->

    <!-- End Features Area -->

    <!-- Start Works About 
    ============================================= -->
    <div class="works-about-area overflow-hidden">
      <div class="container">
        <div class="works-about-items default-padding">
          <div class="row align-center">
          <? foreach (view::CONTENT('all_active',['IBLOCK_ID'=>'163']) as $work):?>
            <div class="col-lg-6 info">
              <h5><?= $work['title_dange'] ?></h5>
              <h2><?= $work['title'] ?></h2>
              <p><?= $work['text'] ?></p>
              <ul>
                <li>
                  <h5><?= $work['info1'] ?></h5>
                </li>
                <li>
                  <h5><?= $work['info2'] ?></h5>
                </li>
              </ul>
              <a class="btn btn-theme effect btn-sm"><?= $work['button'] ?></a>
            </div>
            <div class="col-lg-6">
              <div class="thumb">
                <img
                  src="<?= $work['img'] ?>"
                  alt="Thumb"
                />
                <div class="fun-fact">
                  <div class="timer" data-to="875" data-speed="5000"></div>
                  <span class="medium"><?= $work['Completed'] ?></span>
                </div>
              </div>
            </div>
            <?endforeach?>
          </div>
        </div>
      </div>
    </div>
    <!-- End Works About Area -->

    <!-- Start Case Studies Area
    ============================================= -->
    <div class="case-studies-area half-bg default-padding-top">
    <? foreach (view::CONTENT('all_active',['IBLOCK_ID'=>'164']) as $slider):?>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="site-heading text-center">
              <h4><?= $slider['title_badge'] ?></h4>
              <h2><?= $slider['title'] ?></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fill">
        <div class="case-carousel owl-carousel owl-theme">
          <div class="item">
            <div class="thumb">
              <img
                src="<?= $slider['img1'] ?>"
                alt="Thumb"
              />
            </div>
          </div>

          <div class="item">
            <div class="thumb">
              <img
                src="<?= $slider['img2'] ?>"
                alt="Thumb"
              />
            </div>
          </div>

          <div class="item">
            <div class="thumb">
              <img
                src="<?= $slider['img3'] ?>"
                alt="Thumb"
              />
            </div>
          </div>

          <div class="item">
            <div class="thumb">
              <img
                src="<?= $slider['img4'] ?>"
                alt="Thumb"
              />
            </div>
          </div>
        </div>
      </div>
      <?endforeach?>
    </div>
    <!-- End Case Studies Area -->
