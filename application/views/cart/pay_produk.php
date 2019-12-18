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
						 ?>
					</div><br><br>
					<h3>Enter Your Address</h3>
					<form method="post" action="<?= base_url('cart') ?>/send_produk">
						<div class="form-group">
							<label>Full Name</label>
							<input type="text" name="nama" placeholder="Full name" class="form-control">
						</div>
						<div class="form-group">
							<label>Address</label>
							<input type="text" name="address" placeholder="Addresss" class="form-control">
						</div>
						<div class="form-group">
							<label>No Handphone</label>
							<input type="text" name="noHP" placeholder="your Phone" class="form-control">
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

					<?php  }else{
						echo "Keranjang belanja anda masih kosong";
					}?>
				</div>

				<div class="col-md-2"></div>
			</div>
		</div>