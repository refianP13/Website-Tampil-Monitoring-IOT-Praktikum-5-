<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Barang</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Device_name</th>
                        <th scope="col">Merk</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($barang as $m) : ?>
                        <tr>
                            <th scope="row">1</th>
                            <td><img src="/img/<?= $m['Gambar']; ?>" alt="" class="gambar""></td>
                        <td><?= $m['device_name']; ?></td>
                        <td><?= $m['device_brand']; ?></td>
                        <td><?= $m['device_quantity']; ?></td>
                        <td><?= $m['device_status']; ?></td>
                        <td>
                            <a href=" /barang/<?= $m['id']; ?>" class=" btn btn-success">Details</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>