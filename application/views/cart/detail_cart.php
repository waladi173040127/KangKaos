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
         <?php if($this->session->userdata('role_id')  == 2) { ?>
				    <a class="example_a" href="<?= base_url('cart') ?>/pay_produk" data-toggle="modal" data-target="#pay_produk">Buy</a>
         <?php }else { ?>
            <a class="example_a" href="<?= base_url('cart') ?>/pay_produk" >Buy</a>
         <?php } ?>
			</div>
		</div>
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
            <form method="post" action="<?= base_url('cart') ?>/send_produk">
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








