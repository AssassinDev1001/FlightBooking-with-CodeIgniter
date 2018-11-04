<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest (the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Metronic Frontend (with Top Bar)</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href=<?=base_url("assets/global/plugins/font-awesome/css/font-awesome.min.css")?> rel="stylesheet">
  <link href=<?=base_url("assets/global/plugins/bootstrap/css/bootstrap.min.css")?> rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href=<?=base_url("assets/global/plugins/fancybox/source/jquery.fancybox.css")?> rel="stylesheet">
  <link href=<?=base_url("assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css")?> rel="stylesheet">
  <link href=<?=base_url("assets/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css")?> rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href=<?=base_url("assets/global/css/components.css")?> rel="stylesheet">
  <link href=<?=base_url("assets/global/css/components-rounded.css")?> rel="stylesheet">
  <link href=<?=base_url("assets/frontend/layout/css/style.css")?> rel="stylesheet">
  <link href=<?=base_url("assets/frontend/pages/css/style-revolution-slider.css")?> rel="stylesheet"><!-- metronic revo slider styles -->
  <link href=<?=base_url("assets/frontend/layout/css/style-responsive.css")?> rel="stylesheet">
  <link href=<?=base_url("assets/frontend/layout/css/themes/red.css")?> rel="stylesheet" id="style-color">
  <link href=<?=base_url("assets/frontend/layout/css/custom.css")?> rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
    

    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>+1 456 6717</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>info@keenthemes.com</span></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <?php
                          if($this->session->has_userdata('id') == FALSE)
                          {
                        ?>
                        <li><a href=<?=site_url("CustomerController/view_login")?>>Log In</a></li>
                        <li><a href=<?=site_url("CustomerController/view_register")?>>Registration</a></li>
                        <?php } else {
                          echo $this->session->userdata('firstname').' '.$this->session->userdata('lastname');
                          echo '<li><a href="'.site_url("CustomerController/logout").'">Log Out</a></li>';
                        }?>

                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href=<?=site_url()?>><img src=<?=base_url("assets/frontend/layout/img/logos/logo-corp-red.png")?> alt="Metronic FrontEnd"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation pull-right font-transform-inherit">
          <ul>
            <li><a href=<?=site_url()?>>Flight</a></li>
            <li><a href=<?=site_url()?>>Hotel</a></li>
            <li><a href=<?=site_url()?>>Car Rental</a></li>
            <?php
              if($this->session->userdata('admin') == 1)
                echo '<li><a href="'.site_url("/PhotoController/index").'">Admin Panel</a></li>';
            ?>
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->
