 <!-- Menu -->

<div class="menu">

  <!-- Search -->
  <div class="menu_search">
    <form action="#" id="menu_search_form" class="menu_search_form">
      <input type="text" class="search_input" placeholder="Search Item" required="required">
      <button class="menu_search_button"><img src="vendor/images/search.png" alt=""></button>
    </form>
  </div>
  <!-- Navigation -->
  <div class="menu_nav">
    <ul>
      <li><a href="#">Women</a></li>
      <li><a href="#">Men</a></li>
      <li><a href="#">Kids</a></li>
      <li><a href="#">Home Deco</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
  <!-- Contact Info -->
  <div class="menu_contact">
    <div class="menu_phone d-flex flex-row align-items-center justify-content-start">
      <div><div><img src="vendor/images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
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
        <a href="#">
          <div class="d-flex flex-row align-items-center justify-content-start">
            <div><img src="vendor/images/logo_1.png" alt=""></div>
            <div>Little Closet</div>
          </div>
        </a>  
      </div>
      <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
      <nav class="main_nav">
        <ul class="d-flex flex-row align-items-start justify-content-start">
          <li class="active"><a href="#">Women</a></li>
          <li><a href="#">Men</a></li>
          <li><a href="#">Kids</a></li>
          <li><a href="#">Home Deco</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
        <!-- Search -->
        <div class="header_search">
          <form action="#" id="header_search_form">
            <input type="text" class="search_input" placeholder="Search Item" required="required">
            <button class="header_search_button"><img src="vendor/images/search.png" alt=""></button>
          </form>
        </div>
        <!-- User -->
        <div class="user"><a href="#"><div><img src="vendor/images/user.svg" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a></div>
        <!-- Cart -->
        <div class="cart"><a href="cart.html"><div><img class="svg" src="vendor/images/cart.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
        <!-- Phone -->
        <div class="header_phone d-flex flex-row align-items-center justify-content-start">
          <div><div><img src="vendor/images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
          <div>+1 912-252-7350</div>
        </div>
      </div>
    </div>
  </header>
<!-- endHeader -->
  <div class="super_container_inner">
    <div class="super_overlay"></div>
    <!-- Home -->

    <div class="home">
      <div class="home_container d-flex flex-column align-items-center justify-content-end">
        <div class="home_content text-center">
          <div class="home_title">Category Page</div>
          <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
            <ul class="d-flex flex-row align-items-start justify-content-start text-center">
              <li><a href="<?= base_url('category') ?>/index">All</a></li>
              <li><a href="<?= base_url('category') ?>/woman">Woman</a></li>
              <li><a href="<?= base_url('category') ?>/man">Man</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Products -->
     <?php foreach ($man as $m) : ?>
                      
          <!-- Product 1-->
          <div class="col-xl-4 col-md-6">
            <div class="product">
              <div class="product_image"><img src="<?= base_url('assets/') ?>images/produk/<?= $m->image ?>" alt="" ></div>
              <div class="product_content">
                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                  <div>
                    <div>
                      <div class="product_name"><a href="product.html"><?= $m->name ?></a></div>
                      <div class="product_category">Catagory <a href="category.html"><?= $m->category ?></a></div>
                    </div>
                  </div>
                  <div class="ml-auto text-right">
                    <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class="product_price text-right"><h4>Rp. <?= number_format($m->price,0,",",".");?></h4></div>
                  </div>
                </div>
                <div class="product_buttons">
                  
                  <div class="text-right d-flex flex-row align-items-start justify-content-start">
                    <div>
                      <a class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center" href="<?= base_url('produk') ?>/detailProduk/<? $m->id ?>" >
                        <div><div><img src="<?= base_url('assets/'); ?>/images/heart_2.svg" class="svg" alt="" ><div>+</div></div></div>
                      </a>
                    </div>
                    <div >
        

                      <a class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center" href="<?= base_url('cart') ?>/keranjang/<? $m->id ?>">
                        <div><div><img src="<?= base_url('assets/'); ?>/images/cart.svg" class="svg" alt=""><div>+</div></div></div>
                      </a> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- EndProduk 1 -->
         <?php endforeach; ?>
     
  </div>
        <div class="row page_nav_row">
          <div class="col">
            <div class="page_nav">
              <ul class="d-flex flex-row align-items-start justify-content-center">
                <li class="active"><a href="#">01</a></li>
                <li><a href="#">02</a></li>
                <li><a href="#">03</a></li>
                <li><a href="#">04</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
     

    <footer class="footer">
      <div class="footer_content">
        <div class="container">
          <div class="row">
            
            <!-- About -->
            <div class="col-lg-4 footer_col">
              <div class="footer_about">
                <div class="footer_logo">
                  <a href="#">
                    <div class="d-flex flex-row align-items-center justify-content-start">
                      <div class="footer_logo_icon"><img src="images/logo_2.png" alt=""></div>
                      <div>Little Closet</div>
                    </div>
                  </a>    
                </div>
                <div class="footer_about_text">
                  <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Fusce venenatis vel velit vel euismod.</p>
                </div>
              </div>
            </div>

            <!-- Footer Links -->
            <div class="col-lg-4 footer_col">
              <div class="footer_menu">
                <div class="footer_title">Support</div>
                <ul class="footer_list">
                  <li>
                    <a href="#"><div>Customer Service<div class="footer_tag_1">online now</div></div></a>
                  </li>
                  <li>
                    <a href="#"><div>Return Policy</div></a>
                  </li>
                  <li>
                    <a href="#"><div>Size Guide<div class="footer_tag_2">recommended</div></div></a>
                  </li>
                  <li>
                    <a href="#"><div>Terms and Conditions</div></a>
                  </li>
                  <li>
                    <a href="#"><div>Contact</div></a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Footer Contact -->
            <div class="col-lg-4 footer_col">
              <div class="footer_contact">
                <div class="footer_title">Stay in Touch</div>
                <div class="newsletter">
                  <form action="#" id="newsletter_form" class="newsletter_form">
                    <input type="email" class="newsletter_input" placeholder="Subscribe to our Newsletter" required="required">
                    <button class="newsletter_button">+</button>
                  </form>
                </div>
                <div class="footer_social">
                  <div class="footer_title">Social</div>
                  <ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer_bar">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
                <div class="copyright order-md-1 order-2"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                <nav class="footer_nav ml-md-auto order-md-2 order-1">
                  <ul class="d-flex flex-row align-items-center justify-content-start">
                    <li><a href="category.html">Women</a></li>
                    <li><a href="category.html">Men</a></li>
                    <li><a href="category.html">Kids</a></li>
                    <li><a href="category.html">Home Deco</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--end footer  -->
  </div>
  <!-- super_container_inner -->
    
</div>
<!-- super_container -->


