<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>Edit Produk</h3>

	<?php foreach($produk as $p) : ?>

		<form method="post" action="<?= base_url(). 'Produk/update'; ?>">
			<div class="form-group">
				<label>Nama Produk</label>
				<input type="text" name="name" class="form-control" value="<?= $p->$name ?>">
			</div>

			<div class="form-group">
				<label>Price</label>
				<input type="text" name="price" class="form-control" value="<?= $p->$price ?>">
			</div>

			<div class="form-group">
				<label>Category</label>
				<!-- <input type="hidee" name="id" class="form-control" value="<?= $p->$category ?>"> -->
				<input type="text" name="category" class="form-control" value="<?= $p->$category ?>">
			</div>

			<div class="form-group">
				<label>Size</label>
				<input type="text" name="size" class="form-control" value="<?= $p->$size ?>">
			</div>

			<div class="form-group">
				<label>Detail</label>
				<input type="text" name="detail" class="form-control" value="<?= $p->$detail ?>">
			</div>

			<div class="form-group">
				<label>Stock</label>
				<input type="text" name="stock" class="form-control" value="<?= $p->$stock ?>">
			</div>

			<div class="form-group">
				<label>Image</label>
				<input type="text" name="image" class="form-control" value="<?= $p->$image ?>">
			</div>

			<button type="submit" class="btn btn-promary btn-sm">Simpan</button>

			
			
		</form>

	<?php endforeach; ?>
</div>