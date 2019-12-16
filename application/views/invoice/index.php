<div class="container-fluid">
	<h4>Invoice Pemesanan Produk</h4>
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>ID Invoice</th>
			<th>Nama Pemesan</th>
			<th>Alamat</th>
			<th>Tanggal Pemesananan</th>
			<th>Batas Pembayaran</th>
			<th>Aksi</th>
		</tr>
		<?php foreach($invoice as $iv) : ?>
			<tr>
				<td><?= $iv->id_invoice?></td>
				<td><?= $iv->nama?></td>

				<td><?= $iv->alamat ?></td>
				<td><?= $iv->tgl_pesan?></td>
				<td><?= $iv->batas_bayar ?></td>
				<td><a class="btn btn-primary text-light" href="<?= base_url('invoice/'); ?>detail_invoice/<?= $iv->id_invoice ?>">Detail</a></td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>