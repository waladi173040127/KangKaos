<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>Edit Produk</h3>
	<?php foreach($produk as $p) : ?>
		<form method="post" action="<?= base_url('produk/') ?>update" enctype="multipart/form-data">
			<div class="for-group">
				<div class="form-group">
					<input type="hidden" class="form-control" id="id_brg" name="id_brg" value="<?= $p->id_brg ?>">
				</div>
				<div class="form-group">
					<label for="name_produk">Name Produk</label>
					<input type="text" class="form-control" id="name" name="name" value="<?= $p->name ?>">
				</div>

				<div class="form-group">
					<label for="category">Category</label>
					<select class="form-control" id="category" name="category">
						<?php foreach( $category as $j ) : ?>
							<?php if( $j == $produk2['category'] ) : ?>
								<option value="<?= $j; ?>" selected><?= $j; ?></option>
								<?php else : ?>
									<option value="<?= $j; ?>"><?= $j; ?></option>
								<?php endif; ?>
							<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label for="category">Category</label>
					<select class="form-control" id="size" name="size">
						<?php foreach( $size as $j ) : ?>
							<?php if( $j == $produk2['size'] ) : ?>
								<option value="<?= $j; ?>" selected><?= $j; ?></option>
								<?php else : ?>
									<option value="<?= $j; ?>"><?= $j; ?></option>
								<?php endif; ?>
							<?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label for="price">Price</label>
					<input type="text" class="form-control" id="price" name="price" placeholder="Harga" value="<?= $p->price ?>">
				</div>
				<div class="form-group">
					<label for="stok">Stock</label>
					<input type="text" class="form-control" id="icon" name="stock" placeholder="stok kaos" value="<?= $p->stock ?>">
				</div>
				<div class="form-group">
					<label for="Detail">Detail</label>
					<input type="text" class="form-control" id="detail" name="detail" placeholder="stok kaos" value="<?= $p->detail ?>"></input>
				</div>
				<div class="form-group row">
					<div class="col-sm-2">Picture</div>
					<div class="col-sm-10">
						<div class="row">
							<div class="col-sm-3">
								<img src="<?= base_url('assets/images/produk/') . $p->image ?>" class="img-thumbnail">
							</div>
							<div class="col-sm-9">
								<div class="custom-file">
								  <input type="file" class="custom-file-input" id="image" name="image">
								  <label class="custom-file-label" for="image">Choose file</label>
								</div>
							</div>
						</div>
					</div>
				</div>
                <div class="form-group">
                	<a href="<?= base_url('produk') ?>" class="btn btn-secondary" >Close</a>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
		</form>
	<?php endforeach;  ?>
</div>