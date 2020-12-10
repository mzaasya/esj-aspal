<?php $this->extend('Layout/template_admin'); ?>

<?php $this->section('main') ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Tentang ESJA</h1>
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

    <form action="admin/edittentang/<?= $tk['id'] ?>" method="post">
        <textarea name="tentang" id="taTentang" class="form-control" cols="30" rows="10" required><?= $tk['data_tentangkami'] ?></textarea>
        <button type="submit" class="btn btn-primary btn-block my-3">Ubah Data</button>
    </form>
</div>

<?php $this->endSection() ?>