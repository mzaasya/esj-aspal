<?php $this->extend('Layout/template_admin'); ?>

<?php $this->section('main') ?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Kontak</h1>
</div>

<div class="jumbotron bg-white">
<!--Success message-->
<?php if(session()->getFlashData('pesan')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('pesan'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

    <form action="admin/ubahkontak/<?= $kp['id'] ?>" method="post">
        <div class="card shadow">
            <div class="card-body">
                <div class="form-group row">
                    <label for="nomor" class="card-text col-sm-2">Nomor</label>
                    <input class="form-control col-sm-10" name="nomor" id="nomor" value="<?= $kp['nomor'] ?>" aria-describedby="nomorHelp" required>
                    <div class="col-sm-2"></div>
                    <small id="nomorHelp" class="form-text col-sm-10 text-muted">Awali dengan 62 lalu nomor anda tanpa angka 0</small>
                </div>
                <div class="form-group row">
                    <label for="email" class="card-text col-sm-2">Email</label>
                    <input class="form-control col-sm-10" name="email" id="email" value="<?= $kp['email'] ?>" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-block btn-primary mt-3">Ubah Data</button>
    </form>
</div>

<?php $this->endSection() ?>