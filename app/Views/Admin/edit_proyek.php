<?php $this->extend('Layout/template_admin'); ?>

<?php $this->section('main') ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 text-center">Edit Data Proyek</h1>

<!--Success save message-->
<?php if(session()->getFlashData('pesan')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('pesan'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<div class="container mt-5">
    <form action="/admin/editproyek/<?= $epro['id'] ?>" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
        <div class="form-group">
            <label for="kota">Kota</label>
            <input type="text" class="form-control" id="kota" name="kota" value="<?= $epro['kota'] ?>" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $epro['alamat'] ?>" required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <p>Gambar proyek</p>
                <img src="<?= base_url() ?>/images/<?= $epro['gambar'] ?>" width="250" class="rounded">
                <input type="file" class="form-control-file mt-3" name="gambar">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPaket">Pilih Paket</label>
                <select id="inputPaket" class="form-control" name="paket" required>
                <?php foreach($dpaket as $dp): ?>
                    <option 
                    <?php if($dp['nama'] == $epro['paket']): ?>
                    selected
                    <?php endif; ?>>
                    <?= $dp['nama']; ?></option>
                <?php endforeach; ?>
                </select>
                <p></p>
            </div>
        </div>
        <button type="submit" class="btn btn-block btn-primary">Ubah Data</button>
    </form>
</div>

<?php $this->endSection() ?>