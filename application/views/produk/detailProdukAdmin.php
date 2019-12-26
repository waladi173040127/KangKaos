<div class="container-fluid">
    <div class="card">
      <div class="card-header">
       <h5>Detail Produk </h5>
      </div>
    <div class="card-body">
        <?php foreach($produk2 as $p) : ?>
        <div class="row">
            <div class="col-md-4">
                <img src="<?= base_url('assets/images/produk/') . $p->image ?>" class="card-img-top">
            </div>
            <div class="col-md-8">
                <table class="table">
                    <tr>
                        <td><strong><a href="<?= base_url('admin') ?>" class="btn btn-primary">Back</a><strong></td>
                    </tr>
                    <tr>
                        <td> Name Produk</td>
                        <td><strong><?= $p->name ?></strong></td>
                    </tr>
                    <tr>
                        <td> Category</td>
                        <td><strong><?= $p->category ?></strong></td>
                    </tr>
                    <tr>
                        <td> Size</td>
                        <td><strong><?= $p->size ?></strong></td>
                    </tr>
                    <tr>
                        <td> Stock</td>
                        <td><strong><?= $p->stock ?></strong></td>
                    </tr>
                    <tr>
                        <td> Price</td>
                        <td><strong><a href="" class="btn btn-success">Rp. <?= number_format($p->price,0,",",".");?></a></strong></td>
                    </tr>
                    <tr>
                        <td> Detail </td>
                        <td><strong><?= $p->detail ?></strong></td>
                    </tr>
                </table>
            </div>    
        </div>
        <?php endforeach; ?>
    </div>
</div>
</div>