<!DOCTYPE html>
<html lang="en">
<head>
<title><?= $title; ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="vendor/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>styles/responsive.css">

</head>
<body>
	



<div class="menu">
  <div class="super_container">

    <!-- Header -->

    <header class="header">
      <div class="header_overlay"></div>
      <div class="header_content d-flex flex-row align-items-center justify-content-start">
        <div class="logo">
          <a href="#">
            <!-- logo -->
            <div class="d-flex flex-row align-items-center justify-content-start">
              <div><img src="<?= base_url('assets/'); ?>images/logo/logo.png" alt="" width="150"></div>
            </div>
          </a>  
        </div>
        <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
        <nav class="main_nav">
          <ul class="d-flex flex-row align-items-start justify-content-start">
            <li class="active"><a href="<?= base_url() ?>menu">Women</a></li>
            <li><a href="<?= base_url() ?>menu">Men</a></li>
            <li><a href="#" >Kids</a></li>
            <li><a href="#">Home Deco</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
        <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
          <!-- Search -->
          <div class="header_search">
            <form action="#" id="header_search_form">
              <input type="text" class="search_input" placeholder="Search Item" required="required">
              <button class="header_search_button"><img src="<?= base_url('assets/'); ?>images/search.png" alt=""></button>
            </form>
          </div>
          <!-- Phone -->
          <!-- <div class="header_phone d-flex flex-row align-items-center justify-content-start">
            <div><div><img src="vendor/images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
            <div>-</div>
          </div> -->
          <!-- Cart -->
          <div class="user">
            <a href="<?= base_url() ?>cart">
              <div>
                <img class="svg" src="<?= base_url('assets/'); ?>images/cart.svg" alt="https://www.flaticon.com/authors/freepik">
                  <div class="bg-danger">4</div>
              </div>
            </a>
          </div>
          <!-- User -->
          <div class="user">
            <a   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div>
                <img src="<?= base_url('assets/'); ?>images/user.svg" alt="https://www.flaticon.com/authors/freepik">
                
                
              </div>
            </a>
            <!-- Dropdown - User Information -->
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?= base_url('auth') ;?>/registration">Register</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('auth') ;?>">Login</a>
              </div>
          </div>
          
        </div>
      </div>
    </header>
  </div>
<!-- endHeader -->






  <!-- Search -->
  <div class="d-flex flex-row align-items-center justify-content-start">
              <div><img src="<?= base_url('assets/'); ?>images/logo/logo.png" alt="" width="150"></div>
            </div>
  <div class="menu_search">
    <form action="#" id="menu_search_form" class="menu_search_form">
      <input type="text" class="search_input" placeholder="Search Item" required="required">
      <button class="menu_search_button"><img src="<?= base_url('assets/'); ?>images/search.png" alt=""></button>
    </form>
  </div>
  <!-- Navigation -->
  <div class="menu_nav">
    <ul>
      <li><a href="<?= base_url() ?>category">Women</a></li>
      <li><a href="<?= base_url() ?>category">Men</a></li>
    </ul>
  </div>
  <!-- Contact Info -->
  <div class="menu_contact">
    <div class="menu_phone d-flex flex-row align-items-center justify-content-start">
      <div><div><img src="<?= base_url('assets/'); ?>images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
      <div>+1 912-252-7350</div>
    </div>
    <div class="menu_social">
      <ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
</div>
<!-- Menu -->