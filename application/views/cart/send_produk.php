<div class="super_container_inner">
	<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Shopping Cart</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="<?=base_url() ?>home">Home</a></li>
							<li>Your Cart</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- ENDHome -->
		<div class="container">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="btn btn-sm btn-success">
						<?php $grand_total =0; ?>
						<?php if ($cart = $this->cart->contents()) {
							foreach ($cart as $i){
								$grand_total = $grand_total + $i['subtotal'];
							}
							echo "Tolal belanjaan anda : Rp." .number_format($grand_total,0,",",".");
						} ?>
					</div><br><br>
					<h3>Enter Your Address</h3>
					<form method="post" action="<?= base_url('cart') ?>/send_produk">
						<div class="form-group">
							<label>Full Name</label>
							<input type="text" name="nama" placeholder="Full name" class="form-control">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="alamat" placeholder="alamat" class="form-control">
						</div>
						<div class="form-group">
							<label>No Handphone</label>
							<input type="text" name="noHp" placeholder="your Phone" class="form-control">
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
						<button type="submit" class="btn btn-sm btn-primary">Pesan</button>
					</form>
				</div>

				<div class="col-md-2"></div>
				<div class="alert alert-success">
					<p class="text-center">ok good</p>
				</div>
			</div>
		</div>
	</div>
</div>