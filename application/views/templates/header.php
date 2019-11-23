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
    <a class="navbar-brand" href="#">KangKaos</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <!-- Example single danger button -->
          <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Action
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
        <li class="nav-item">
          <a class="nav-link disabled"  style="" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        <li class="nav-item">
          <div class="input-group" style="width: 200%">
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
          <a class="nav-link disabled"  style="" href="#" tabindex="-1" aria-disabled="true">Cart <span style="line-height: 20px" class="badge badge-warning">2</span></a>
        </li>

        <li class="nav-item active ">
          <button class="btn btn-outline-light" type="submit">Login</button>
        </li>
      </ul>
    </div>
  </nav>