<?php $this->extend('/Layout/template') ?>

<?php $this->section('content') ?>
<!--Jumbotron Intro-->
<div class="jumbotron text-center my-5 bg-white">
    <h1 class="text-warning">ESJA</h1>
    <h3>Egi Saputra Jaya Aspal</h3>
    <h3>Solusi Jasa Pengaspalan Handal, Murah, Berkualitas</h3>
</div>
<!--Jumbotron Proyek-->
<div class="jumbotron bg-white">
    <h2 class="text-center mb-5">PROYEK KAMI</h2>
    <div class="row row-cols-2 row-cols-md-4">
    <?php foreach($data_proyek as $dp): ?>
        <div class="col mb-4">
            <div class="card h-100 shadow rounded">
                <div class="card-header bg-warning text-center"><?= $dp['paket'] ?></div>
                <img class="card-img-top" src="/images/<?= $dp['gambar'] ?>" alt="">
                <div class="card-body">
                    <h5 class="card-title text-center"><?= $dp['kota'] ?></h5>
                    <p class="card-text"><?= $dp['alamat'] ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
    <a href="/proyek" id="linkLainnya" class="text-dark d-block text-center">Lihat Proyek Lainnya >></a>
</div>
<!--Jumbotron Paket-->
<div class="jumbotron bg-white">
    <h2 class="text-center mb-5">PAKET PENGASPALAN</h2>
    <div class="row row-cols-1 row-cols-md-3">
    <?php foreach($data_paket as $dpk): ?>
        <div class="col mb-4">
            <div class="card h-100 shadow rounded">
                <div class="card-header text-center bg-warning">
                    <div><b><?= $dpk['nama'] ?></b></div>
                    <small><?= $dpk['deskripsi'] ?></small>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Rp <?= number_format($dpk['harga'],0,'.','.') ?> / m<sup>2</sup></h5>
                    <ul class="list-group list-group-flush">
                        <?php for($i = 1; $i < 11; $i++): ?>
                            <?php if($dpk['fitur'.$i] !== NULL && $dpk['fitur'.$i] !== ''){ ?>
                                <li class="list-group-item"><?= $dpk['fitur'.$i] ?></li>
                            <?php } ?>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
    <a href="/paket" id="linkLainnya" class="text-dark d-block text-center">Lihat Paket Lainnya >></a>
</div>

<div class="container text-center">
    <p>pengunjung hari ini: <?= count($v_today) ?></p>
</div>

<?php $this->endSection() ?>