<!DOCTYPE html>
<html lang="en">

<head>
  <!-- ========== Meta Tags ========== -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="At Vanner, we are building long-term, fruitful partnerships that ensure the growth and progress of everyone. We offer plain contracts and leases that allow you to take ownership of your own well-maintained premium trucks and trailers." />

  <!-- ========== Page Title ========== -->
  <title>Vanner</title>

  <!-- ========== Favicon Icon ========== -->
  <link rel="shortcut icon" href="<?php echo $template_path ?>img/favicon.jpg" type="image/x-icon" />

  <!-- Icons -->
  <script src="https://kit.fontawesome.com/0ca3153d0b.js" crossorigin="anonymous" defer></script>

  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo $template_path ?>/js/jquery.js"></script>
    <script src="<?php echo $template_path ?>/js/jquery-confirm.min.js"></script>

  <? $template_path = './core/template_evo/'; ?>

  <!-- swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

  <!-- ========== Start Stylesheet ========== -->
  <link href="<?php echo $template_path ?>css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo $template_path ?>css/font-awesome.min.css" rel="stylesheet" />
  <link href="<?php echo $template_path ?>css/themify-icons.css" rel="stylesheet" />
  <link href="<?php echo $template_path ?>css/flaticon-set.css" rel="stylesheet" />
  <link href="<?php echo $template_path ?>css/magnific-popup.css" rel="stylesheet" />
  <link href="<?php echo $template_path ?>css/owl.carousel.min.css" rel="stylesheet" />
  <link href="<?php echo $template_path ?>css/owl.theme.default.min.css" rel="stylesheet" />
  <link href="<?php echo $template_path ?>css/animate.css" rel="stylesheet" />
  <link href="<?php echo $template_path ?>css/bootsnav.css" rel="stylesheet" />
  <link href="<?php echo $template_path ?>css/style.css" rel="stylesheet" />
  <link href="<?php echo $template_path ?>css/style2.css" rel="stylesheet" />
  <link href="<?php echo $template_path ?>css/responsive.css" rel="stylesheet" />
  <!-- ========== End Stylesheet ========== -->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <!-- Preloader Start -->
  <!-- <div class="se-pre-con"></div> -->
  <!-- Preloader Ends -->

  <!-- Start Header Top 
    ============================================= -->
  <div class="top-bar-area inc-pad bg-theme text-light">
    <div class="container">
      <div class="row align-center">
        <div class="col-lg-6 info">
          <ul>
            <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '180']) as $navbar) : ?>
              <li>
                <i class="fas fa-map-marker-alt">
                  <?= $navbar['adress'] ?></i>
              </li>
              <li><i class="fas fa-envelope-open"></i><?= $navbar['mail'] ?></li>
            <? endforeach ?>
          </ul>
        </div>
        <div class="col-lg-6 text-right item-flex">
          <div class="info">
            <ul>
              <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '180']) as $navbar) : ?>
                <li>
                  <i class="fas fa-clock"></i><?= $navbar['opening_hours'] ?>
                </li>
              <? endforeach ?>
            </ul>
          </div>
          <div class="social">
            <ul>
              <li>
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Header Top -->

  <!-- Header 
    ============================================= -->
  <header id="home">
    <!-- Start Navigation -->
    <nav class="navbar navbar-default active-border navbar-sticky bootsnav">
      <div class="container">
        <!-- Start Atribute Navigation -->
        <div class="attr-nav inc-border">
          <ul>
            <li class="contact">
              <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '180']) as $navbar) : ?>
                <i class="fa-solid fa-phone"></i>
                <p><?= $navbar['call'] ?><strong><?= $navbar['phone'] ?></strong></p>
            </li>
          <? endforeach ?>
          </ul>
        </div>
        <!-- End Atribute Navigation -->

        <!-- Start Header Navigation -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="index.html">
            <img width="150px" src="<?= $navbar['img-logo'] ?>" class="logo" alt="Logo" />
          </a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="navbar-menu">

          <ul class=" nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
            <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '159']) as $menu) : ?>
              <li class="<? if ($_GET['page'] == $menu['page_name']) {
                            echo 'active';
                          } ?>">
                <a href="<?= $menu['url'] ?>">
                  <?= $menu['name'] ?></a>
              </li>
            <? endforeach ?>
          </ul>

        </div>

        <!-- /.navbar-collapse -->
      </div>
    </nav>
    <!-- End Navigation -->
  </header>
  <!-- End Header -->