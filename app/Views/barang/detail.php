<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="/img/<?= $barang['Gambar'] ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $barang['device_name']; ?></h5>
                    <p class="card-text"><?= $barang['device_brand']; ?></p>
                    <p class="card-text"><?= $barang['device_quantity']; ?></p>
                    <a href="/barang" class="btn btn-primary">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>