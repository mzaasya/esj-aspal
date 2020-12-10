<?php $this->extend('/Layout/template') ?>

<?php $this->section('content') ?>

<div class="jumbotron bg-white">
    <h2 class="text-center mb-5">PAKET PENGASPALAN</h2>
    <div class="row row-cols-1 row-cols-md-3">
    <?php foreach($paket_all as $pall): ?>
        <div class="col mb-4">
            <div class="card h-100 shadow rounded">
                <div class="card-header text-center bg-warning">
                    <div><b><?= $pall['nama'] ?></b></div>
                    <small><?= $pall['deskripsi'] ?></small>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">Rp <?= number_format($pall['harga'],0,'.','.') ?> / m<sup>2</sup></h5>
                    <ul class="list-group list-group-flush">
                        <?php for($i = 1; $i < 11; $i++): ?>
                            <?php if($pall['fitur'.$i] !== NULL && $pall['fitur'.$i] !== ''){ ?>
                                <li class="list-group-item"><?= $pall['fitur'.$i] ?></li>
                            <?php } ?>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>

<?php $this->endSection() ?>