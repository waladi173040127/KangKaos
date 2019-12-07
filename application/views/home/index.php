
  <div class="super_container_inner">
    <div class="super_overlay"></div>
    <!-- Home -->

    <div class="home">
      <!--Crousel-->
        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/1500x650" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/1500x650" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/1500x650" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- Home Slider Dots -->
        
        <div class="home_slider_dots_container">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="home_slider_dots">
                  <ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-center">
                    <li class="home_slider_custom_dot active">01</li>
                    <li class="home_slider_custom_dot">02</li>
                    <li class="home_slider_custom_dot">03</li>
                    <li class="home_slider_custom_dot">04</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>  
        </div>
        <!-- Home Slider Dots -->
      </div>
      <!-- home_slider_container -->
    </div>  
    <!-- edHome -->
    <!-- Products -->

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="section_title text-center">Popular on Little Closet</div>
          </div>
        </div>
        <div class="row page_nav_row">
          <div class="col">
            <div class="page_nav">
              <ul class="d-flex flex-row align-items-start justify-content-center">
                <li class="active"><a href="<?= base_url() ?>produk">Women</a></li>
                <li><a href="<?= base_url() ?>menu">Men</a></li>
                <li><a href="category.html">Kids</a></li>
                <li class=""><a href="category.html" >Home Deco</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row products_row">
          <!-- Product 1-->
          <div class="col-xl-4 col-md-6">
            <div class="product">
              <div class="product_image"><img src="http://placehold.it/700x600" alt="" ></div>
              <div class="product_content">
                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                  <div>
                    <div>
                      <div class="product_name"><a href="product.html">Cool Clothing with Brown Stripes</a></div>
                      <div class="product_category">In <a href="category.html">Category</a></div>
                    </div>
                  </div>
                  <div class="ml-auto text-right">
                    <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class="product_price text-right">$3<span>.99</span></div>
                  </div>
                </div>
                <div class="product_buttons">
                  <div class="text-right d-flex flex-row align-items-start justify-content-start">
                    <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                      <div><div><img src="<?= base_url('assets/'); ?>/images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
                    </div>
                    <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                      <div><div><img src="<?= base_url('assets/'); ?>/images/cart.svg" class="svg" alt=""><div>+</div></div></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- EndProduk 1 -->
          <!-- Product 3-->
          <div class="col-xl-4 col-md-6">
            <div class="product">
              <div class="product_image"><img src="vendor/images/product_1.jpg" alt=""></div>
              <div class="product_content">
                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                  <div>
                    <div>
                      <div class="product_name"><a href="product.html">Cool Clothing with Brown Stripes</a></div>
                      <div class="product_category">In <a href="category.html">Category</a></div>
                    </div>
                  </div>
                  <div class="ml-auto text-right">
                    <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class="product_price text-right">$3<span>.99</span></div>
                  </div>
                </div>
                <div class="product_buttons">
                  <div class="text-right d-flex flex-row align-items-start justify-content-start">
                    <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                      <div><div><img src="vendor/images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
                    </div>
                    <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                      <div><div><img src="vendor/images/cart.svg" class="svg" alt=""><div>+</div></div></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- EndProduk 2 -->
          <!-- Product 3-->
          <div class="col-xl-4 col-md-6">
            <div class="product">
              <div class="product_image"><img src="http://placehold.it/700x600" alt=""></div>
              <div class="product_content">
                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                  <div>
                    <div>
                      <div class="product_name"><a href="product.html">Cool Clothing with Brown Stripes</a></div>
                      <div class="product_category">In <a href="category.html">Category</a></div>
                    </div>
                  </div>
                  <div class="ml-auto text-right">
                    <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class="product_price text-right">$3<span>.99</span></div>
                  </div>
                </div>
                <div class="product_buttons">
                  <div class="text-right d-flex flex-row align-items-start justify-content-start">
                    <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                      <div><div><img src="vendor/images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
                    </div>
                    <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                      <div><div><img src="vendor/images/cart.svg" class="svg" alt=""><div>+</div></div></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- EndProduk 3 -->
        </div>
      </div><!-- endContainerProduk -->
    </div><!-- endProduk -->
    <!-- Footer -->

    
  </div>
  <!-- super_container_inner -->
    
</div>
<!-- super_container -->

