<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(<? echo $template_path ?>img/background/contact.jpg);">
    <div class="container">
        <div class="row align-center">
            <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '196']) as $contact) : ?>
                <div class="col-lg-6">
                    <h2><?= $contact['title'] ?></h2>
                </div>
                <div class="col-lg-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="<?= $contact['url1'] ?>"><i class="fas fa-home"></i><?= $contact['link1'] ?></a></li>
                        <li class="active"><?= $contact['link2'] ?></li>
                    </ul>
                </div>
            <? endforeach ?>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Contact 
    ============================================= -->
<div class="contact-area overflow-hidden default-padding">
    <div class="container">
        <div class="row">
            <? foreach (view::CONTENT('all_active', ['IBLOCK_ID' => '197']) as $contact) : ?>
                <div class="col-lg-6 contact-form-box">
                    <div class="content">
                        <div class="heading">
                            <h2><?= $contact['title1'] ?></h2>
                        </div>
                        <form id="myform" method="POST" class="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Please describe what you need."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="contact_button" id="submit">
                                        <?= $contact['button'] ?>
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="col-lg-6 info">
                    <div class="contact-tabs">
                        <ul id="tabs" class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="" data-target="#tab1" data-toggle="tab" class="active nav-link">
                                    <?= $contact['title2'] ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-target="#tab2" data-toggle="tab" class="nav-link">
                                    <?= $contact['title3'] ?>
                                </a>
                            </li>
                        </ul>
                        <div id="tabsContent" class="tab-content">
                            <div id="tab1" class="tab-pane fade active show">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="info">
                                            <p>
                                                Our Location
                                                <span><?= $contact['address'] ?></span>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope-open"></i>
                                        </div>
                                        <div class="info">
                                            <p>
                                                Send Us Mail
                                                <span><?= $contact['mail'] ?></span>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="info">
                                            <p>
                                                Call Us
                                                <span><?= $contact['phone'] ?></span>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab2" class="tab-pane fade">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2975.227482021836!2d-88.20534428423069!3d41.78031087922991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880ef853e986f371%3A0x61095d8135ef1a0b!2zMTc3MiBOIEF1cm9yYSBSZCwgTmFwZXJ2aWxsZSwgSUwgNjA1NjMsINCh0KjQkA!5e0!3m2!1sru!2s!4v1657694743395!5m2!1sru!2s"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            <? endforeach ?>
        </div>
    </div>
</div>
<!-- End Contact Area -->





<?php

//  echo '<pre>';
//  print_r($_POST);
//  echo '</pre>';



if (isset($_POST['contact_button'])) {

    $request['ins'] = db::query("INSERT INTO `requests` (
      `DATE_SEND`,
      `NAME`,
      `EMAIL`, 
      `PHONE`,
      `COMMENTS`,
      `STATUS`)
      VALUES 
      ( now(), 
      '$_POST[name]', 
      '$_POST[email]', 
      '$_POST[phone]', 
       '$_POST[comments]', 
       '1')");

    if ($request['ins']['stat'] == 'success') {
        echo ("отправлено");

        LocalRedirect('contact');
    }
}



?>

<script>
    $(document).ready(function() {

        $("form").submit(function(event) {


            //event.preventDefault();
            alert("Your application has been sent");

            // $('#submit')
            //     .after('<img src="/core/template_evo//img/ajax-loader.gif" class="loader" />')
            //     .attr('disabled', 'disabled');

            //document.getElementById('myform').reset();



            // $.ajax({
            //   type: $(this).attr('method'),
            //   url: $(this).attr('action'),
            //   data: new FormData(this),
            //   // contentType: false,
            //   // cache: false,
            //   // processData: false,

            //   success: function(result) {
            //     alert(result);
            //   },
            // });

        });
    });
</script>