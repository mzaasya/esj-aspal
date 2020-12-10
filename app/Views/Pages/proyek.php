<?php $this->extend('/Layout/template') ?>

<?php $this->section('content') ?>

<div class="jumbotron bg-white">
    <h2 class="text-center mb-5">Proyek Kami</h2>
    <div class="row row-cols-2 row-cols-md-4">
    <?php foreach($proyek_all as $pa): ?>
        <div class="col mb-4">
            <div class="card h-100 shadow rounded">
            <div class="card-header bg-warning text-center"><b><?= $pa['paket'] ?></b></div>
                <img class="card-img-top" src="/images/<?= $pa['gambar'] ?>" alt="">
                <div class="card-body">
                    <h5 class="card-title text-center"><?= $pa['kota'] ?></h5>
                    <p class="card-text"><?= $pa['alamat'] ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>

<?php $this->endSection() ?>