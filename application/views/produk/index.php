<div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#dataProduk"><i class="fas fa-plus fa-sm"></i>Add New Produk</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Image</th>
                <th scope="col">Name_Clotes</th>
                <th scope="col">Category</th>
                <th scope="col">Zize</th>
                <th scope="col">Price</th>
                <th scope="col">Stock</th>
                <!-- <th scope="col">detail</th> -->
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($produk as $p) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><img src="<?= base_url('assets/') ?>images/produk/<?= $p->image;?>" width=50></td>
                    <td ><?= $p->name;?></td>
                    <td><?= $p->category; ?></td>
                    <td><?= $p->size; ?></td>
                    <td><?= $p->price; ?></td>
                    <td><?= $p->stock; ?></td>
                    <!-- <td><?= $p->detail; ?></td> -->
                    <td>
                        <a href="<?= base_url('produk') ?>/edit/<?= $p->id_brg ?>" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                        <a href="<?= base_url('produk') ?>/detailProdukAdmin/<?= $p->id_brg ?>" class="btn btn-primary btn-sm" ><i class=" fas fa-search-plus"></i></a>
                        <a href="<?= base_url(); ?>produk/hapus/<?= $p->id_brg ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin ingin menghapus data ini ?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="dataProduk" tabindex="-1" role="dialog" aria-labelledby="dataProduk" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">Add New Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('produk/index');?>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name produk">
                    </div>
                    <div class="form-group">
                        <select name="category" id="menu_id" class="form-control">
                            <option value="">Category</option>
                            <option value="Man">Man</option>
                            <option value="Woman">Woman</option>
                            <option value="Child">Child</option>
                        </select>
                    </div>
                    <div class="form-group">
                         <select name="size" id="menu_id" class="form-control">
                            <option value="">Size</option>
                            <option value="M">M</option>
                            <option value="ML">ML</option>
                            <option value="L">L</option>
                            <option value="L">XL</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="price" name="price" placeholder="Harga">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="stock" placeholder="stok kaos">
                    </div>
                    <div class="form-group">
                         <textarea class="form-control" aria-label="With textarea" name="detail" placeholder="Detail your produk"></textarea>
                    </div>
                    <div class="form-group row">
                        <!-- <div class="col-sm-2">Picture</div> -->
                        <div class="col-sm-10">
                            <div class="row">
                                <!-- <div class="col-sm-3">
                                    <img src="<?= base_url('assets/images/profile/') . $produk['gambar']; ?>" class="img-thumbnail">
                                </div> -->
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div> 

<!-- Modal delete-->
<!-- Logout Delete Confirmation-->
<div class="modal fade" id="deleteProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="<?= base_url(); ?>produk/hapus/<?= $p->id_brg; ?>">Delete</a>
      </div>
    </div>
  </div>
</div>