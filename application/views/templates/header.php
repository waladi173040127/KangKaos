<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $judul; ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets'); ?>/css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <img src="<?= base_url('assets/img/profile/default.jpg'); ?>" width="30" height="30" class="d-inline-block align-top" alt="">
    <a class="navbar-brand font-weight-bolder text-white" href="#">KangKaos</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <!-- Example single danger button -->
          <div class="btn-group">
            <button type="button" class="btn btn-primary font-weight-bolder text-white " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categori
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
        </li>
        <li class="nav-item">
          
        </li>
        
        <li class="nav-item" style="padding-left: 100px">
          <div class="input-group" style="width: 180%">
            <div class="input-group-prepend">
              <button class="btn btn-outline-light" type="button" id="button-addon1"><img style="width: 19px" src="<?= base_url('assets'); ?>/img/icon/finder.png"></button>
            </div>
            <input type="text" class="form-control"  placeholder="cari kaos kuy..." aria-label="Example text with button addon" aria-describedby="button-addon1">
          </div>
        </li>
      </ul>
     <!--  <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
      <ul class="navbar-nav ">
        <li class="nav-item active">
          <a class="nav-link disabled font-weight-bolder text-white"  style="" href="#" tabindex="-1" aria-disabled="true">Carti <i class="fas fa-bars"></i> <span style="line-height: 20px" class="badge badge-warning">2</span></a>
        </li>
        <!-- Login -->
        <li class="nav-item dropdown ">
            <a class="nav-link font-weight-bolder text-white" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="">
                Login
              </span>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url() ?>menu">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    My Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      Logout
                </a>
            </div>
        </li>
      </ul>
    </div>
  </nav>