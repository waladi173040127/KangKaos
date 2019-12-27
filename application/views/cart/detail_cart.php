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
        <?= $this->session->flashdata('message'); ?>
        <div class="container">
          <!--Section: Content-->
          <section class="dark-grey-text">

            <!-- Shopping Cart table -->
            <div class="table-responsive">

              <table class="table product-table mb-0">

                <!-- Table head -->
                <thead class="mdb-color lighten-5">
                  <tr>
                    <th>#</th>
                    <th></th>
                    <th class="font-weight-bold">
                      <strong>Product</strong>
                    </th>
                    <th class="font-weight-bold text-center">
                      <strong>Detail</strong>
                    </th>
                    <th></th>
                    <th class="font-weight-bold">
                      <strong>Price</strong>
                    </th>
                    <th class="font-weight-bold">
                      <strong>QTY</strong>
                    </th>
                    <th class="font-weight-bold">
                      <strong>Amount</strong>
                    </th>
                    <th></th>
                  </tr>
                </thead>
                <!-- /.Table head -->

                <!-- Table body -->
                <tbody>

                

              <!-- Third row -->
              <?php $no=1; ?>
              <?php foreach($this->cart->contents() as $i) : ?>
              <tr>
                <td><?= $no++; ?></td>
                <th scope="row">
                  <img src="<?= base_url('assets/') ?>images/produk/<?= $i['image']; ?>" width=100 >
                </th>
                <td>
                  <h5 class="mt-3">
                    <strong><?= $i['category'] ?> </strong>
                  </h5>
                  <p class="text-muted"><?= $i['name'] ?> </p>
                </td>
                <td align="center"><a href="<?= base_url('produk') ?>/detailProduk/<?= $i['id'] ?>" class="btn btn-primary btn-sm material-tooltip-main" data-toggle="tooltip" data-placement="top" title="view detail"><i class="far fa-eye"></i></a></td>
                <td></td>
                <td>Rp. <?= number_format($i['price'],0,",",".") ?></td>
                <td>
                  <input type="number" value="<?= $i['qty'] ?>" aria-label="Search" class="form-control" style="width: 100px">
                </td>
                <td >
                  Rp. <?=  number_format($i['subtotal'] ,0,",",".") ?>
                </td>
                <td>
                  <a href="<?= base_url('cart'); ?>/delete_invoice/<?= $i['rowid'] ?>"  class="btn btn-sm btn-danger material-tooltip-main" onclick="return confirm('apakah anda yakin ingin menghapus data ini ?')"class="btn btn-danger btn-sm material-tooltip-main" data-placement="top" title="delete">X
                </a>
              </td>
            </tr>
            <?php endforeach; ?>
            <!-- /.Third row -->

            <!-- Fourth row -->
            <tr>
              <td colspan="4"></td>
              <td>
                <h4 class="mt-2">
                  <strong>Total</strong>
                </h4>
              </td>
              <td class="text-right">
                <h4 class="mt-2">
                  <strong>RP. <?=  number_format($this->cart->total() ,0,",",".") ?> </strong>
                </h4>
              </td>
              <td colspan="6" class="text-right">
                <div align="right">
                 <div align="right">
                  <a class="example_aa"  data-toggle="modal" data-target="#myModal">Clear</a>
                  <a class="example_primary" href="<?= base_url('home') ?>">shopping</a>
                  <?php if($this->session->userdata('role_id')  == 2) { ?>
                    <a class="example_a" href="<?= base_url('cart') ?>/pay_produk/">Buy</a>
                  <?php }else { ?>
                    <a class="example_a" href="<?= base_url('cart') ?>/pay_produk" >Buy</a>
                  <?php } ?>
                </div>
              </div>
              </td>
            </tr>
            <!-- Fourth row -->

          </tbody>
          <!-- /.Table body -->

        </table>

      </div>
      <!-- /.Shopping Cart table -->

    </section>
    <!--Section: Content-->


  </div>
      	 
</div>
</div>
</div>

    <!-- Modal -->
    <div class="modal fade" id="pay_produk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-header">
          	<h4 class="modal-title text-center" style="font-weight:bold;" >
          		<?php $grand_total =0; ?>
          		<?php if ($cart = $this->cart->contents()) {
          			foreach ($cart as $i){
          				$grand_total = $grand_total + $i['subtotal'];
          			}
          			echo "Tolal belanjaan anda : Rp." .number_format($grand_total,0,",",".");
          			?>
          		</h4>
          </div>
          <div class="modal-body">
            <form method="post" action="<?= base_url('cart/pay_produk') ?>">
            	<div class="form-group">
            		<label>Full Name</label>
            		<input type="text"  name="nama" placeholder="Full name" class="form-control" value="<?= set_value('nama'); ?>">
            		<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
            	</div>
            	<div class="form-group">
                <label>Full Name</label>
                <input type="text" name="alamat" placeholder="Full name" class="form-control" value="<?= set_value('alamat'); ?>">
                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
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
          
            <div class="modal-footer" >
            	<button type="button" class="example_aa" data-dismiss="modal">Back</button>
            	<button type="submit" class="example_a" data-toggle="modal" data-target="#send_produk">Send</button>
            </div>
             </form>
        <?php  }else{
        	echo "Keranjang belanja anda masih kosong";
        }?>
            </div>
          </div>
          
          
        </div>
      </div>
      <!-- Modal Penilai -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-md">
          <!-- Modal content-->
          <div class="modal-content">
            <form method="post" action="<?= base_url('cart') ?>/delete_cart">

              <div class="modal-header">
                <h5 class="modal-title">Delete Produk</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
              </div>
              <div class="modal-body">
                Anda yakin mau mengosongkan Shopping Cart?
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Tidak</button>
                <button type="submit" class="btn btn-sm btn-default">Ya</button>
              </div>
              
            </form>
          </div>
          
        </div>
      </div>
      <!--End Modal-->
      <!-- Modal Penilai -->
      <div class="modal fade" id="delete" role="dialog">
        <div class="modal-dialog modal-md">
          <!-- Modal content-->
          <div class="modal-content">
            <form method="post" >

              <div class="modal-header">
                <h5 class="modal-title">Delete Produk</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
              </div>
              <div class="modal-body">
                Anda yakin mau mengosongkan Shopping Cart?
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Tidak</button>
                <button type="submit" class="btn btn-sm btn-default">Ya</button>
              </div>
              
            </form>
          </div>
          
        </div>
      </div>
      <!--End Modal-->









