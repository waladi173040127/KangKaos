<div class="container">
    <style type="text/css">
        .card{
            margin: 5px auto;
            width: 400px;
            padding: 10px;
            border: 1px solid#ccc;
        }
    </style>
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card" >
                <div class="card-header">
                    Detail Data Produk
                </div>
                <div class="card-body">
                    <td><img src="<?= base_url('assets/') ?>images/produk/<?= $produk['image']; ?>" width=250></td>
                    <br><br>
                    <h5 class="card-title"><?= $produk['name']; ?></h5>
                    <h6 class="card-text">Harga : Rp<?= $produk['price']; ?></h6>
                    <p class="card-text">Kategory : <?= $produk['category']; ?></p>
                    <p class="card-text">Ukuran : <?= $produk['size']; ?></p>
                    <p class="card-text">Detail : <?= $produk['detail']; ?></p>
                    <p class="card-text">Stock : <?= $produk['stock']; ?></p>
                    
                    <a href="<?= base_url(); ?>produk" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>