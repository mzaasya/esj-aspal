<?php $this->extend('Layout/template_admin'); ?>

<?php $this->section('main') ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 text-center">Tambah Data Paket</h1>

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
    <form action="/admin/editpaket/<?= $pk['id'] ?>" method="post" class="needs-validation" novalidate>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="namaPaket">Nama Paket</label>
                <input type="text" class="form-control" id="namaPaket" name="nama" value="<?= $pk['nama'] ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="hargaPaket">Harga Paket</label>
                <input type="text" class="form-control" id="hargaPaket" name="harga" value="<?= $pk['harga'] ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="desPaket">Deskripsi Paket</label>
            <input type="text" class="form-control" id="desPaket" name="deskripsi" value="<?= $pk['deskripsi'] ?>" required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="fit1">Fitur 1</label>
                <input type="text" class="form-control" id="fit1" name="fitur1" value="<?= $pk['fitur1'] ?>" required>
            </div>
            <div class="form-group col-md-6">
                <label for="fit2">Fitur 2</label>
                <input type="text" class="form-control" id="fit2" name="fitur2" value="<?= $pk['fitur2'] ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="fit3">Fitur 3</label>
                <input type="text" class="form-control" id="fit3" name="fitur3" value="<?= $pk['fitur3'] ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="fit4">Fitur 4</label>
                <input type="text" class="form-control" id="fit4" name="fitur4" value="<?= $pk['fitur4'] ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="fit5">Fitur 5</label>
                <input type="text" class="form-control" id="fit5" name="fitur5" value="<?= $pk['fitur5'] ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="fit6">Fitur 6</label>
                <input type="text" class="form-control" id="fit6" name="fitur6" value="<?= $pk['fitur6'] ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="fit7">Fitur 7</label>
                <input type="text" class="form-control" id="fit7" name="fitur7" value="<?= $pk['fitur7'] ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="fit8">Fitur 8</label>
                <input type="text" class="form-control" id="fit8" name="fitur8" value="<?= $pk['fitur8'] ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="fit9">Fitur 9</label>
                <input type="text" class="form-control" id="fit9" name="fitur9" value="<?= $pk['fitur9'] ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="fit10">Fitur 10</label>
                <input type="text" class="form-control" id="fit10" name="fitur10" value="<?= $pk['fitur10'] ?>">
            </div>
        </div>
        <button type="submit" class="btn btn-block btn-primary">Ubah Data</button>
    </form>
</div>

<?php $this->endSection() ?>