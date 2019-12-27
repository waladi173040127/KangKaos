<br><br><br><br><br>
<div class="container">
	<div class="container ">


  <!--Section: Content-->
  <section class="text-center">

    <!-- Section heading -->
    <h3 class="h2-responsive text-center  product-name font-weight-bold dark-grey-text mb-5">Product Details</h3>


    <div class="row">

      <div class="col-lg-6">

        <!--Carousel Wrapper-->
        <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">

          <!--Slides-->
          <div class="carousel-inner text-center text-md-left" role="listbox">
            <div class="carousel-item active">
              <img src="<?= base_url('assets/') ?>images/produk/<?= $produk2['image']; ?>"
                alt="First slide" class="img-fluid">
            </div>
            
          </div>
          <!--/.Slides-->

          <!--Thumbnails-->
          <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Thumbnails-->

        </div>
        <!--/.Carousel Wrapper-->

      </div>

      <div class="col-lg-5 text-center text-md-left">

        <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
          <strong><?= $produk2['name']; ?></strong>
        </h2>
        <span class="badge badge-danger product mb-4 ml-xl-0 ml-4"><?= $produk2['category']; ?></span>
      
       
        <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
          <span class="red-text font-weight-bold">
            <strong>Rp. <?= number_format($produk2['price'],0,",",".") ?></strong>
          </span>
          <span class="grey-text">
            <small>
              <s>Rp. 200.000</s>
            </small>
          </span>
        </h3>

        <!--Accordion wrapper-->
        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

          <!-- Accordion card -->
          <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingOne1">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                aria-controls="collapseOne1">
                <h5 class="mb-0">
                  Description
                  <i class="fas fa-angle-down rotate-icon"></i>
                </h5>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
              data-parent="#accordionEx">
              <div class="card-body">
              	 
               <?= $produk2['detail']; ?>
              </div>
            </div>
          </div>
          <!-- Accordion card -->

          <!-- Accordion card -->
          <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingTwo2">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                aria-expanded="false" aria-controls="collapseTwo2">
                <h5 class="mb-0">
                  Details
                  <i class="fas fa-angle-down rotate-icon"></i>
                </h5>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
              data-parent="#accordionEx">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                3 wolf moon officia aute,
                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                moon
                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
              </div>
            </div>
          </div>
          <!-- Accordion card -->

          <!-- Accordion card -->
          <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingThree3">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                aria-expanded="false" aria-controls="collapseThree3">
                <h5 class="mb-0">
                  Shipping
                  <i class="fas fa-angle-down rotate-icon"></i>
                </h5>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
              data-parent="#accordionEx">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                3 wolf moon officia aute,
                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
                moon
                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
              </div>
            </div>
          </div>
          <!-- Accordion card -->

        </div>
        <!--/.Accordion wrapper-->
        <form method="post" action="<?= base_url('cart') ?>/keranjang/<?= $produk2['id_brg'];?>">
          <!-- Add to Cart -->
          <section class="color">
            <input type="number" name="qty" class="">
            <div class="mt-3">
              <div align="right">
               <div align="center">
                <a class="btn btn-primary btn-rounded" href="<?= base_url('category') ?>" ><i class="fas fa-arrow-circle-left mr-2" aria-hidden="true"></i> Back</a>
                <button class="btn btn-default btn-rounded" type="submit" ><i class="fas fa-cart-plus mr-2" aria-hidden="true"></i> Add to cart</button>

              </div>
            </div>

          </div>
        </section>
        </form>
        <!-- /.Add to Cart -->

      </div>

    </div>

  </section>
  <!--Section: Content-->


</div>
</div>
<br>