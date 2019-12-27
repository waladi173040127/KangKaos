<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> 	
    <div class="row">
    	<div class="col-lg-3">
    		<div class="list-group">

                <a href="#" class="list-group-item list-group-item-action active">Category</a>
                <a href="<?= base_url('admin') ?>" class="list-group-item list-group-item-action">
                    All
                </a>
    			<a href="<?= base_url('category/') ?>manAdmin" class="list-group-item list-group-item-action">
    				Man
    			</a>
    			<a href="<?= base_url('category/') ?>womanAdmin" class="list-group-item list-group-item-action">Woman</a>
    			

    			
    			
    		</div>
    	</div>
    	 <div class="col-lg-9">
    	 	<div class="row">
    	 		<?php foreach($produk as $p) :?>
    	 			<div class="col-lg-4 col-md-6 mb-4">
    	 				<div class="card h-80">
    	 					<a href="#"><img class="card-img-top" src="<?= base_url('assets/') ?>images/produk/<?= $p->image; ?>" alt=""></a>
    	 					<div class="card-body">
    	 						<h5 class="card-title"><?= $p->name; ?></h5>
    	 						<h6>Rp. <?= number_format($p->price,0,",",".");?></h6>
    	 						<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
    	 						<p class="card-text">
    	 							<a href="<?= base_url('produk') ?>/detailProdukAdmin/<?= $p->id_brg ?>" class="btn btn-primary btn-sm" ><i class="fas fa-edit">Detail</i></a>
    	 						</p>
    	 					</div>

    	 				</div>
    	 			</div>
    	 		  <?php endforeach; ?>
    	 	</div>
    	 </div>
    </div>
</div>

 


