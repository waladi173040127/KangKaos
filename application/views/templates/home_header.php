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
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>styles/style.css">
<link rel="icon" type="image/png" href="<?= base_url('assets') ?>/images/logo/kang.png">
<!--===============================================================================================-->
  <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>myProfil/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/'); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">


</head>
<body>
<!-- Menu Sidebar-->
<div class="menu">
  <!-- Search -->
    <div class="d-flex flex-row align-items-center justify-content-start ">
      <a href="<?= base_url('home'); ?>">
        <div><img src="<?= base_url('assets/'); ?>images/logo/logo.png" alt="" width="150"></div>
        <br><br>
      </a>
        
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
        <li><a href="<?= base_url('category') ?>/woman">Women</a></li>
        <li><a href="<?= base_url('category') ?>/man">Men</a></li>
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
<div class="super_container">
  <!-- Header -->
      <header class="header">
        <div class="header_overlay"></div>
        <div class="header_content d-flex flex-row align-items-center justify-content-start">
          <div class="logo">
            <a href="<?= base_url('home'); ?>">
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
            <!-- Cart -->
            <div class="user">
             <h4>
             </h4>
              <a href="<?= base_url() ?>cart/detail_cart">
                <div>
                  <img class="svg" src="<?= base_url('assets/'); ?>images/cart.svg" alt="https://www.flaticon.com/authors/freepik">
                    <?=
                  $keranjang = '<div class="bg-danger">'.$this->cart->total_items().'</div>' ?>
                </div>
              </a>
            </div>
            <!-- endCart -->
            <!-- User -->
             <?php if($this->session->userdata('role_id')  == 2) { ?>
              <div class="user">
                <a   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div>
                    <img class="img-profile rounded-circle" src="<?= base_url('assets/images/profile/') . $user['image']; ?>"> 
                  </div>
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?= base_url('auth') ;?>"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>My Profile</a>
                  <a class="dropdown-item" href="<?= base_url('cart/') ;?>detail_cart"><i class="fas fa-cart-arrow-down mr-2 text-gray-400"></i> My Cart</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
                </div>
              </div>
              <?php }elseif ($this->session->userdata('role_id')  == 1) { ?>
                <div class="user">
                <a   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div>
                    <img class="rounded-circle" src="<?= base_url('assets/images/profile/') . $user['image']; ?>"> 
                  </div>
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?= base_url('auth') ;?>"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Dasboard</a>
                  <a class="dropdown-item" href="<?= base_url('cart/') ;?>detail_cart"><i class="fas fa-cart-arrow-down mr-2 text-gray-400"></i> My Cart</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
                </div>
              </div>
             <?php } else { ?>
            <div class="user">
              <a   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div>
                  <img src="<?= base_url('assets/'); ?>images/user.svg" alt="https://www.flaticon.com/authors/freepik"> 
                </div>
              </a>
              <!-- Dropdown - User Information -->
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?= base_url('auth') ;?>/registration"><i class="far fa-address-book mr-2 text-gray-400"></i>Register</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?= base_url('auth') ;?>"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Login</a>
                </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </header>
    <div class="super_container_inner">
      <div class="super_overlay"></div>



