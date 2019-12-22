<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $title; ?></title>
  <!-- MDB icon -->
  <link rel="icon" type="image/png" href="<?= base_url('assets') ?>/images/logo/kang.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/style/'); ?>font/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/style/'); ?>css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/style/'); ?>css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="<?= base_url('assets/style/'); ?>css/style.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>styles/main_styles.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>styles/responsive.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>styles/style.css">
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
      <form method="post" action="#" id="menu_search_form" class="menu_search_form">
        <input type="text" class="search_input" placeholder="Search your clothes" required="required">
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
      <!-- Card -->
<div class="card">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title">Card title</h4>
    <!-- Text -->
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <!-- Button -->
    <a href="#" class="btn btn-primary">Button</a>

  </div>

</div>
<!-- Card -->
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
              <form method="post" action="<?= base_url('category') ?>" >
                <input type="text" class="search_input" placeholder="Search your clothes"  name="keyword">
                <button type="submit" class="header_search_button"><img src="<?= base_url('assets/'); ?>images/search.png" alt=""></button>
              </form>
            </div>
            <!-- Cart -->
            <div class="user">
             <h4>
             </h4>
              <a data-toggle="modal" data-target="#modalCart">
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
                  <a class="dropdown-item" data-toggle="modal" data-target="#modalLoginAvatar"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
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
                  <a class="dropdown-item"  data-toggle="modal" data-target="#modalLoginAvatar"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
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

      <div>
        <!-- Card -->
<div class="card card-cascade wider reverse">

  <!-- Card image -->
  <div class="view view-cascade overlay">
    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade text-center">

    <!-- Title -->
    <h4 class="card-title"><strong>My adventure</strong></h4>
    <!-- Subtitle -->
    <h6 class="font-weight-bold indigo-text py-2">Photography</h6>
    <!-- Text -->
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem perspiciatis voluptatum a, quo nobis, non commodi quia repellendus sequi nulla voluptatem dicta reprehenderit, placeat laborum ut beatae ullam suscipit veniam.
    </p>

    <!-- Linkedin -->
    <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
    <!-- Twitter -->
    <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
    <!-- Dribbble -->
    <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>

  </div>

</div>
<!-- Card -->
      </div>


<!--Modal: Login with Avatar Form-->
<div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
    <!--Content-->
    <form method="post" action="<?= base_url('auth/logout'); ?>">
   
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <img src="<?= base_url('assets/images/profile/') . $user['image']; ?>" alt="avatar" class="shadow rounded-circle img-responsive" >
        </div>
        <!--Body-->
        <div class="modal-body text-center mb-1">
          <h3 class="mt-1 mb-2">Maria Doe</h3>
          <div class="md-form ml-0 mr-0">
            <h5>Select "Logout" below if you are ready to end your current session.</h5>
          </div>
          <div class="text-center mt-4">
           <button type="button" class="example_aa" data-dismiss="modal">Cancel</button>
           <button type="submit" class="example_a">Logout</button>
         </div>
       </div>

     </div>
    </form>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login with Avatar Form-->



<!-- Modal: modalCart -->
<div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Your cart</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">
        
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Image</th>
              <th>Product name</th>
              <th>Price</th>
              <th>Sub- Total</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; ?>
            <?php foreach($this->cart->contents() as $i) : ?>
            <tr>
              <th scope="row"><?= $no++; ?></th>
              <td><img src="<?= base_url('assets/') ?>images/produk/<?= $i['image']; ?>" width=50 ></td>
              <td><?= $i['name'] ?></td>
              <td align="right">Rp. <?= number_format($i['price'],0,",",".") ?></td>
              <td align="right">Rp. <?=  number_format($i['subtotal'] ,0,",",".") ?></td>
            </tr>

            <?php endforeach; ?>
            <tr>
              <td colspan="4"></td>
              <td align="right">RP.<?=  number_format($this->cart->total() ,0,",",".") ?> </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="example_aa" data-dismiss="modal">Close</button>
        <a class="example_a" href="<?= base_url('cart/') ;?>detail_cart">my cart</a>
      </div>
    </div>
  </div>
</div>
<!-- Modal: modalCart -->
<!--Modal: Login with Avatar Form-->
<div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header">
        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%281%29.jpg" alt="avatar" class="rounded-circle img-responsive">
      </div>
      <!--Body-->
      <div class="modal-body text-center mb-1">

        <h5 class="mt-1 mb-2">Maria Doe</h5>

        <div class="md-form ml-0 mr-0">
          <input type="password" type="text" id="form29" class="form-control form-control-sm validate ml-0">
          <label data-error="wrong" data-success="right" for="form29" class="ml-0">Enter password</label>
        </div>

        <div class="text-center mt-4">
          <button class="btn btn-cyan mt-1">Login <i class="fas fa-sign-in ml-1"></i></button>
        </div>
      </div>

    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login with Avatar Form-->
<br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><div class="text-center">
  <a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modalLoginAvatar">Launch
    Modal Login with Avatar</a>
</div>

  <!-- jQuery -->
  <script type="text/javascript" src="<?= base_url('assets/style/'); ?>js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?= base_url('assets/style/'); ?>js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?= base_url('assets/style/'); ?>js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?= base_url('assets/style/'); ?>js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
  <script src="<?= base_url('assets/'); ?>js/custom.js"></script>

</body>
</html>
