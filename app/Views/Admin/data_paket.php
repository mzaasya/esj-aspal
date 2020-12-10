<?php $this->extend('Layout/template_admin'); ?>

<?php $this->section('main') ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 text-center">Tabel Data Paket</h1>
<!--Success delete message-->
<?php if(session()->getFlashData('pesan')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('pesan'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="/tambahpaket" class="btn btn-success px-2">Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Fitur 1</th>
                        <th>Fitur 2</th>
                        <th>Fitur 3</th>
                        <th>Fitur 4</th>
                        <th>Fitur 5</th>
                        <th>Fitur 6</th>
                        <th>Fitur 7</th>
                        <th>Fitur 8</th>
                        <th>Fitur 9</th>
                        <th>Fitur 10</th>
                        <th>Menu</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Fitur 1</th>
                        <th>Fitur 2</th>
                        <th>Fitur 3</th>
                        <th>Fitur 4</th>
                        <th>Fitur 5</th>
                        <th>Fitur 6</th>
                        <th>Fitur 7</th>
                        <th>Fitur 8</th>
                        <th>Fitur 9</th>
                        <th>Fitur 10</th>
                        <th>Menu</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach($data_paket as $dp): ?>
                    <tr>
                        <td><?= $dp['nama'] ?></td>
                        <td><?= $dp['deskripsi'] ?></td>
                        <td><?= $dp['harga'] ?></td>
                        <td><?= $dp['fitur1'] ?></td>
                        <td><?= $dp['fitur2'] ?></td>
                        <td><?= $dp['fitur3'] ?></td>
                        <td><?= $dp['fitur4'] ?></td>
                        <td><?= $dp['fitur5'] ?></td>
                        <td><?= $dp['fitur6'] ?></td>
                        <td><?= $dp['fitur7'] ?></td>
                        <td><?= $dp['fitur8'] ?></td>
                        <td><?= $dp['fitur9'] ?></td>
                        <td><?= $dp['fitur10'] ?></td>
                        <td>
                            <a href="/ubahpaket/<?= $dp['id']; ?>" class="btn btn-primary btn-sm w-100 my-1">Edit</a>
                            <a href="/datapaket/hapus/<?= $dp['id']; ?>" class="btn btn-danger btn-sm w-100">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->endSection() ?>