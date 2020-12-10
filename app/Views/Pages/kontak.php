<?php $this->extend('Layout/template') ?>

<?php $this->section('content') ?>

<div class="jumbotron bg-white">
    <h2 class="text-center mb-5">KONTAK KAMI</h2>
    <div class="row row-cols-1 row-cols-md-2">
        <div class="col mb-4">
            <a href="https://wa.me/<?= $kontak['nomor'] ?>">
                <div class="card h-100 shadow">
                    <div class="card-body text-center">
                        <img src="/images/whatsapp.png" width="50" alt="">
                        <p class="mt-2 text-dark">+<?= $kontak['nomor'] ?></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col mb-4">
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=egiegisaputraa@gmail.com&su=Jasa_Pengaspalan&body=Type_Your_Request">
                <div class="card h-100 shadow">
                    <div class="card-body text-center">
                        <img src="/images/gmail.png" class="" width="50" alt="GMAIL">
                        <p class="mt-2 text-dark"><?= $kontak['email'] ?></p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<?php $this->endSection() ?>