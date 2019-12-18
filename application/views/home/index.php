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
                <li class="active"><a href="<?= base_url('category/') ?>woman">Women</a></li>
                <li><a href="<?= base_url('category/') ?>/man">Men</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Produk- -->
        <div class="row products_row">
          <?php foreach ($produk as $m) : ?>            
          <!-- Product 1-->
          <div class="col-xl-4 col-md-6">
            <div class="product">
              <div class="product_image"><img src="<?= base_url('assets/') ?>images/produk/<?= $m['image']; ?>" alt="" ></div>
              <div class="product_content">
                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                  <div>
                    <div>
                      <div class="product_name"><a href="product.html"><?= $m['name']; ?></a></div>
                      <div class="product_category">Catagory <a href="category.html"><?= $m['category']; ?></a></div>
                    </div>
                  </div>
                  <div class="ml-auto text-right">
                    <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class="product_price text-right"><h4>Rp. <?= number_format($m['price'],0,",",".");?></h4></div>
                  </div>
                </div>
                <div class="product_buttons">
                  
                  <div class="text-right d-flex flex-row align-items-start justify-content-start">
                    <div>
                      <a class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center" href="<?= base_url('produk') ?>/detailProduk/<?= $m['id_brg'];?>">
                        <div><div><img src="<?= base_url('assets/'); ?>/images/heart_2.svg" class="svg" alt="" ><div>+</div></div></div>
                      </a>
                    </div>
                    <div >
                      <a class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center" href="<?= base_url('cart') ?>/keranjang/<?= $m['id_brg'];?>">
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
      </div><!-- endContainerProduk -->
      
    </div>
    <!-- endProduk -->

<!-- Modal -->
<!-- data-target="#formModal" data-toggle="modal" -->
<!-- <div class="modal fade"  id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content" style="width: 100%">

      <?php foreach ($produk as $p) : ?>
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <img src="http://placehold.it/1000x1000" class="card-img-top" alt="...">
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h3 class="card-title"><?= $p['name'] ?></h3>
                <h6><span>Rp.</span><?= $p['price'] ;?></h6>
                  <small class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          
        
        </div>
        <div class="row ">
            <a href="<?= base_url('produk/'); ?>detailProduk/<?= $m['id'];?>" class="btn btn-success btn-block">1</a>
          </div>
         <?php endforeach; ?>  
      
    </div>
  </div>
</div>
</div> -->

