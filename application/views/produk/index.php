<!-- Begin Page Content -->
<div class="container">
<!-- Page Heading -->
    <div class="row">
        <div class="col-sm">
            <?= $this->session->flashdata('message'); ?>
             <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#dataProduk">Add New Produk</a>
             <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Nama_kaos</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Ukuran</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Detail</th>
                        <th scope="" width="">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($produk as $p) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><img src="<?= base_url('assets/') ?>images/produk/<?= $p['image']; ?>" width=50></td>
                        <td><?= $p['name']; ?></td>
                        <td><?= $p['category']; ?></td>
                        <td><?= $p['size']; ?></td>
                        <td><?= $p['price']; ?></td>
                        <td><?= $p['stock']; ?></td>
                        <td><?= $p['detail']; ?></td>
                        <td class="">
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-info">detail</a>
                            <a href="<?= base_url(); ?>produk/hapus/<?= $p['id_brg']; ?>" class="badge badge-danger " data-toggle="modal" data-target="#deleteProduk">delete</a>
                           
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    
   

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 
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
        <a id="btn-delete" class="btn btn-danger" href="<?= base_url(); ?>produk/hapus/<?= $p['id_brg']; ?>">Delete</a>
      </div>
    </div>
  </div>
</div>