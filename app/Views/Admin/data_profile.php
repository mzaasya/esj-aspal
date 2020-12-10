<?php $this->extend('Layout/template_admin'); ?>

<?php $this->section('main') ?>

<div class>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Profile</h1>
</div>
<div class="jumbotron bg-white">
    <form action="admin/ubahuser/<?= $pf['id'] ?>" method="post">
        <div class="card shadow">
            <div class="card-body">
                <div class="form-group row">
                    <label for="username" class="col-md-2">Username</label>
                    <input type="text" class="form-control col-md-10" id="username" name="username" value="<?= $pf['username'] ?>" required>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-2">Email</label>
                    <input type="email" class="form-control col-md-10" id="email" name="email" value="<?= $pf['email'] ?>" required>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-md-2">Password</label>
                    <input type="password" class="form-control col-md-10" id="password" name="password" placeholder="Kosongkan jika tidak ingin ganti password">
                </div>
                <div class="form-group row">
                    <label for="passwordc" class="col-md-2">Konfirmasi Password</label>
                    <input type="password" class="form-control col-md-10" id="passwordc" name="passwordc" placeholder="Kosongkan jika tidak ingin ganti password">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-block btn-primary mt-3">Ubah Data</button>
    </form>
</div>

<?php $this->endSection() ?>