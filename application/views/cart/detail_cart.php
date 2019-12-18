<div class="products">
    <div class="container">
      <br>
      <div class="row hm">
        <div class="col-lg-6 offset-lg-3">
          <div class="section_title text-center"><?= $title2 ?></div>

        </div>
      </div>
      <br> <hr>	
      <div class="row">
      	<div class="container">
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
		<div align="right">
			<div align="right">
				<a class="example_aa" href="<?= base_url('cart') ?>/delete_cart">Clear</a>
				<a class="example_primary" href="<?= base_url('home') ?>">shopping</a>
				<a class="example_a" href="<?= base_url('cart') ?>/pay_produk">Buy</a>
			</div>
		</div>
</div>  
      </div>
</div>
</div>
