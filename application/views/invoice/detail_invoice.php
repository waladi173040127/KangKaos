<div class="container-fluid">
	<h4>Detail Pesanan <div class="btn btn-sm btn-success">No. Invoice: <?= $invoice->id ?></div></h4>
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>ID Produk</th>
			<th>Nama Produk</th>
			<th>JUmlah Pesanan</th>
			<th>Harga Satuan</th>
			<th>SUB-TOTAL</th>
		</tr>
		<?php 
			$total =0;
			foreach($pesanan as $psn) :
				$subTotal = $psn->jumlah * $psn->harga;
				$total += $subTotal;
		 ?>
		 <tr>
		 	<td><?= $psn->id ?></td>
		 	<td><?= $psn->name ?></td>
		 	<td><?= $psn->jumlah ?></td>
		 	<td><?= number_format($psn->harga,0,',','.' ) ?></td>
		 	<td><?= number_format($subTotal,0,',','.') ?></td>
		 </tr>
		<?php endforeach; ?>
		<tr>
			<td colspan="4" align="right">Grand Total</td>
			<td align="right">Rp. <?= number_format($total,0,',','.' ) ?></td>
		</tr>
	</table>
	<a class="btn btn-primary" href="<?= base_url('invoice/') ?>">Kembali</a>
</div>