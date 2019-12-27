<br><br><br><br><br><br>
<div class="container radius">
<h3 class="h2-responsive text-center  product-name font-weight-bold dark-grey-text mb-5">Pay Your Produk</h3>

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">
			<?= $this->session->flashdata('message'); ?>
				<h3>Enter Your Address</h3>
				<form method="post" action="<?= base_url('cart/pay_produk') ?>">

					<!-- Material input -->
					<div class="md-form ">
						<i class="fas fa-user prefix"></i>
						<input type="text" id="inputIconEx2" class="form-control" name="nama" value="<?= set_value('nama'); ?>" >
						 <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
						<label for="inputIconEx2">Full Name</label>
						
					</div>
					<div class="md-form mt-1">
						<i class="fas fa-home prefix"> </i>
						<input type="text" id="inputIconEx2" class="form-control" name="addres" value="<?= set_value('addres'); ?>" >
						<?= form_error('addres', '<small class="text-danger pl-3">', '</small>'); ?>
						<label for="inputIconEx2">Address...</label>
					</div>
					<div class="md-form mt-1">
						<i class="fas fa-book prefix"> </i>
						<input type="text" id="inputIconEx2" class="form-control" name="noHp" value="<?= set_value('noHp'); ?>">
						<?= form_error('noHp', '<small class="text-danger pl-3">', '</small>'); ?>
						<label for="inputIconEx2">No Hanphone</label>
					</div>
					<div class="form-group">
						<label>Jasa Pengiriman</label>
						<select class="form-control">
							<option>JNE</option>
							<option>TIKI</option>
							<option>POS INDONESIA</option>
							<option>GOJEK</option>
							<option>GRAB</option>
						</select>
					</div>
					<div class="form-group">
						<label>PILIH BANK</label>
						<select class="form-control">
							<option>BCA - XXXX</option>
							<option>BNI -XXXXXX</option>
							<option>BRI- XXXXXXXXXX</option>
						</select>
					</div>
					<?php if ($cart = $this->cart->contents()) {?>
					<a href="<?= base_url('cart/detail_cart'); ?>" class="example_aa">Cancel</a>
					<button class="example_a" type="submit">Send</button>
					<?php }else{ ?>
						<a href="<?= base_url('cart/detail_cart'); ?>" class="example_aa">Cancel</a>
					<?php } ?>
				</form>

			
		</div>

		<div class="col-md-4">
			<div class="btn btn-sm btn-success">
				<?php $grand_total =0; ?>
				<?php if ($cart = $this->cart->contents()) {
					foreach ($cart as $i){
						$grand_total = $grand_total + $i['subtotal'];
					}
					echo "Total purchases : Rp. " .number_format($grand_total,0,",",".");
					?>
					<?php  }else{
				echo "Sorry, your cart still empty.";
			}?>
				</div>
		</div>
	</div>
	<br><br>
	<div class="container-fluid mt-8 mb-5">

  <!-- Section: Block Content -->
  <section class="mb-4">

    <style>
      .map-container {
        overflow: hidden;
        position: relative;
        height: 0;
      }

      .map-container iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
      }
    </style>

    <div class="card">

      <div class="row">
        <div class="col-md-6">

          <!-- Google Maps -->
          <div id="map-within-card-2" class="map-container rounded-left" style="height: 400px">
            <iframe src="https://maps.google.com/maps?q=Seattle&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
              style="border:0" allowfullscreen></iframe>
          </div>
          <!-- Google Maps -->

        </div>

        <div class="col-10 col-md-4 mx-auto align-self-center py-4">

          <h6 class="font-weight-bold grey-text text-uppercase small">Head Office</h6>
          <h5 class="font-weight-normal mb-4">Seattle, WA</h5>
          <p class="text-muted font-weight-light">2651 Main Street, Suit 124<br>Seattle, WA, 98101</p>
          <p class="text-muted font-weight-light mb-0">Phone: +1 987 123 6548<br>Email: hello@thetheme.io</p>

        </div>
      </div>

    </div>

  </section>
  <!-- Section: Block Content -->

</div>
</div>
<br><br><br><br>