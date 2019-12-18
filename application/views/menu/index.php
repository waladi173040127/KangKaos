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
                <li class="active"><a href="<?= base_url('category') ?>">All</a></li>
                <li><a href="<?= base_url('category') ?>/woman">Women</a></li>
                <li><a href="<?= base_url('category') ?>/men">Men</a></li>
              </ul>
            </div>
          </div>
      </div>
      <div class="row">
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
    </div>
</div>

 
            
          
<!-- Modal -->
<div class="modal fade"  id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content" style="width: 100%">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Nama Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <img src="http://placehold.it/800x600" class="card-img-top" alt="...">
      <div class="modal-body form">
        
        <div class="card-body">
            <h5 class="card-title">Kaos Gaul cuk</h5>
                <h6>RP.20.000</h6>
                  <small class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
          <div class="modal-footer" >
            <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
            <a href="#" class="btn btn-danger">AddToCart</a>

          </div>
    </div>
  </div>
</div>