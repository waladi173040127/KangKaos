<div class="products">
    <div class="container">
      <br>
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section_title text-center"><?= $title2 ?></div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-lg-3">
          <ul class="list-group list-group-flush">
            <h4 class="text-center">Category</h4>
            <li class="list-group-item"><i class="fas fa-home"></i> / <a href="<?= base_url('category') ?>">All</a></li>
            <li class="list-group-item "><i class="fas fa-female"></i> / <a href="<?= base_url('category/woman') ?>">Woman</a></li>
            <li class="list-group-item"><i class="fas fa-male"></i> / <a href="<?= base_url('category/man') ?>">Man</a></li>
            <li class="list-group-item mr-2 text-gray-400"><a href="<?= base_url('home') ?>"><i class="fas fa-arrow-circle-left"></i> Back</a> </li>
          </ul>

        </div>
        <div class="row products_row col-lg-9">
          <?php foreach ($woman as $m) : ?>            
          <!-- Product 1-->
          <div class="col-xl-4 col-md-6 ">
            <div class="product shadow">
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
                      <a class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center material-tooltip-main"  data-toggle="tooltip" data-placement="top" title="View Detail" href="<?= base_url('produk') ?>/detailProduk/<?= $m->id_brg?>">
                        <div><div><img src="<?= base_url('assets/'); ?>/images/heart_2.svg" class="svg" alt="" ><div>+</div></div></div>
                      </a>
                    </div>
                    <div >
                      <a class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to Cart" href="<?= base_url('cart') ?>/keranjang/<?= $m->id_brg?>">
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
    </div>
</div>
</div>