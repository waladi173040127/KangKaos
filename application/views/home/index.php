      
      <!-- Home -->

      <div >
      <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?= base_url('assets/images/baner/3.jpg') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>First slide label</h1>
                  <h3>Nulla vitae elit libero, a pharetra augue mollis interdum.</h3>
                </div>
              </div>
              <div class="carousel-item">
                <img src="<?= base_url('assets/images/baner/3.jpg') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>First slide label</h1>
                  <h3>Nulla vitae elit libero, a pharetra augue mollis interdum.</h3>
                </div>
              </div>
              <div class="carousel-item">
                <img src="<?= base_url('assets/images/baner/3.jpg') ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h1>First slide label</h1>
                  <h3>Nulla vitae elit libero, a pharetra augue mollis interdum.</h3>

                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <!--Crousel-->
  
      </div>
      <!-- edHome -->
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
          <div class="col-xl-4 col-md-6 ">
            <div class="product shadow">
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
                      <a class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center material-tooltip-main"  data-toggle="tooltip" data-placement="top" title="View Detail" href="<?= base_url('produk') ?>/detailProduk/<?= $m['id_brg'];?>">
                        <div><div><img src="<?= base_url('assets/'); ?>/images/heart_2.svg" class="svg" alt="" ><div>+</div></div></div>
                      </a>
                    </div>
                    <div >
                      <a class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to Cart" href="<?= base_url('cart') ?>/keranjang/<?= $m['id_brg'];?>">
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

    <!-- tEAM -->
    <div class="container">


      <!--Section: Content-->
      <section class="team-section text-center dark-grey-text">

        <!-- Section heading -->
        <h3 class="font-weight-bold pb-2 mb-4">Our amazing team</h3>
        <!-- Section description -->
        <p class="text-muted w-responsive mx-auto mb-5">"Didalam tubuh yang sehat terdapat jiwa yang santui"</p>

        <!-- Grid row -->
        <div class="row text-center">

          <!-- Grid column -->
          <div class="col-md-4 mb-4">
            <div class="avatar mx-auto">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded z-depth-1-half" alt="Sample avatar">
            </div>
            <h4 class="font-weight-bold dark-grey-text my-4">Maria Kate</h4>
            <h6 class="text-uppercase grey-text mb-3"><strong>Photographer</strong></h6>
            <!-- Facebook-->
            <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-fb">
              <i class="fab fa-facebook-f"></i>
            </a>
            <!--Dribbble -->
            <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-dribbble">
              <i class="fab fa-dribbble"></i>
            </a>
            <!-- Twitter -->
            <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-tw">
              <i class="fab fa-twitter"></i>
            </a>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-4">
            <div class="avatar mx-auto">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg" class="rounded z-depth-1-half" alt="Sample avatar">
            </div>
            <h4 class="font-weight-bold dark-grey-text my-4">John Doe</h4>
            <h6 class="text-uppercase grey-text mb-3"><strong>Front-end Developer</strong></h6>
            <!--Email-->
            <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-email">
              <i class="fas fa-envelope"></i>
            </a>
            <!-- Facebook-->
            <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-fb">
              <i class="fab fa-facebook-f"></i>
            </a>
            <!-- GitHub-->
            <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-git">
              <i class="fab fa-github"></i>
            </a>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-4">
            <div class="avatar mx-auto">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg" class="rounded z-depth-1-half" alt="Sample avatar">
            </div>
            <h4 class="font-weight-bold dark-grey-text my-4">Sarah Melyah</h4>
            <h6 class="text-uppercase grey-text mb-3"><strong>Web Developer</strong></h6>
            <!--Linkedin -->
            <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-li">
              <i class="fab fa-linkedin-in "></i>
            </a>
            <!-- Twitter -->
            <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-tw">
              <i class="fab fa-twitter "></i>
            </a>
            <!--Pinterest -->
            <a type="button" class="btn-floating btn-sm mx-1 mb-0 btn-pin">
              <i class="fab fa-pinterest "></i>
            </a>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!--Section: Content-->


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
<!-- Modal: modalCart --

  
