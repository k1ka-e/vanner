    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
      <!-- Fixed Shape -->
      <div class="fixed-shape">
        <img src="<?php echo $template_path ?>img/map.svg" alt="Shape" />
      </div>
      <!-- Fixed Shape -->
      <div class="container">
        <div class="f-items default-padding">
          <div class="row">
            <div class="col-lg-4 col-md-6 item">
              <div class="f-item about">
                <img src="<?php echo $template_path ?>img/remove-bg-logo.png" alt="Logo">
                <form action="#">
                  <input type="email" placeholder="Your Email" class="form-control" name="email">
                  <button type="submit">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
            </div>
            <div class="col-lg-2 col-md-6">
              <div class="f-item link">
                <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '178']) as $footer) : ?>

                  <h4 class="widget-title"><?= $footer['title'] ?></h4>
                <? endforeach ?>
                <ul class="footer__list">

                  <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '159']) as $menu) : ?>
                    <li>
                      <a href="<?= $menu['url'] ?>"><?= $menu['name'] ?></a>
                    </li>
                  <? endforeach ?>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-md-6">
              <div class="f-item link">
                <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '178']) as $footer) : ?>

                  <h4 class="widget-title"><?= $footer['title2'] ?></h4>
                <? endforeach ?>

                <ul>
                  <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '179']) as $footer) : ?>
                    <li>
                      <?= $footer['name'] ?>
                    </li>
                  <? endforeach ?>
                </ul>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="f-item">
                <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '178']) as $footer) : ?>

                  <h4 class="widget-title"><?= $footer['title3'] ?></h4>
                <? endforeach ?>
                <div class="address">
                  <ul>
                    <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '180']) as $footer) : ?>
                      <li>
                        <strong>Address:</strong>
                        <?= $footer['adress'] ?>
                      </li>
                      <li>
                        <strong>Email:</strong>
                        <a href="mailto:info@validtheme.com">
                          <?= $footer['mail'] ?></a>
                      </li>
                    <? endforeach ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Start Footer Bottom -->
      <div class="footer-bottom">
        <div class="container">
          <div class="podfooter">
            <div class="col-md-6 offset-md-3">
              <p>
                Copyright &copy; Vanner. All Rights Reserved by
                <a target="_blank" href="https://evosoft-solutions.com/">Evosoft Solutions</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- swiper -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>



    <!-- jQuery Frameworks
    ============================================= -->

    <script src="<?php echo $template_path ?>js/jquery-1.12.4.min.js"></script>
    <script src="<?php echo $template_path ?>js/popper.min.js"></script>
    <script src="<?php echo $template_path ?>js/bootstrap.min.js"></script>
    <script src="<?php echo $template_path ?>js/equal-height.min.js"></script>
    <script src="<?php echo $template_path ?>js/jquery.appear.js"></script>
    <script src="<?php echo $template_path ?>js/jquery.easing.min.js"></script>
    <script src="<?php echo $template_path ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo $template_path ?>js/modernizr.custom.13711.js"></script>
    <script src="<?php echo $template_path ?>js/owl.carousel.min.js"></script>
    <script src="<?php echo $template_path ?>js/wow.min.js"></script>
    <script src="<?php echo $template_path ?>js/progress-bar.min.js"></script>
    <script src="<?php echo $template_path ?>js/isotope.pkgd.min.js"></script>
    <script src="<?php echo $template_path ?>js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo $template_path ?>js/count-to.js"></script>
    <script src="<?php echo $template_path ?>js/YTPlayer.min.js"></script>
    <script src="<?php echo $template_path ?>js/jquery.nice-select.min.js"></script>
    <script src="<?php echo $template_path ?>js/bootsnav.js"></script>
    <script src="<?php echo $template_path ?>js/main.js"></script>
    </body>

    </html>