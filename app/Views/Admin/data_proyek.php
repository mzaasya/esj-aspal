<?php $this->extend('Layout/template_admin'); ?>

<?php $this->section('main') ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 text-center">Tabel Data Proyek</h1>
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
        <a href="/tambahproyek" class="btn btn-success px-2">Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kota</th>
                        <th>Alamat</th>
                        <th>Paket</th>
                        <th>Menu</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Kota</th>
                        <th>Alamat</th>
                        <th>Paket</th>
                        <th>Menu</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach($data_proyek as $dp): ?>
                    <tr>
                        <td><?= $dp['kota'] ?></td>
                        <td><?= $dp['alamat'] ?></td>
                        <td><?= $dp['paket'] ?></td>
                        <td class="text-center">
                            <a href="/ubahproyek/<?= $dp['id']; ?>" class="btn btn-primary btn-sm my-1">Edit</a>
                            <a href="/dataproyek/hapus/<?= $dp['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->endSection() ?>