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
		<h4>Keranjang</h4>
		<table class="table table-bordered table-striped table-hover">
			<tr>
				<th>NO</th>
				<th>Name_Produk</th>
				<th>Jumlah</th>
				<th>Harga</th>
				<th>SUb- Total</th>
			</tr>
			<?php $no=1; ?>
			<?php foreach($this->cart->contents() as $i) : ?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $i['name'] ?></td>
					<td><?= $i['qty'] ?></td>
					<td align="right">Rp. <?= number_format($i['price'],0,",",".") ?></td>
					<td align="right">Rp. <?=  number_format($i['subtotal'] ,0,",",".") ?></td>
				</tr>
				
			<?php endforeach; ?>
			<tr>
				<td colspan="4"></td>
					<td align="right">RP.<?=  number_format($this->cart->total() ,0,",",".") ?> </td>
				</tr>
		</table>

	</div>
</div>