<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/skin.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Title -->
    <title><?= $title; ?></title>

  </head>
  <body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow bg-white">
      <a class="navbar-brand" href="/">
        <img src="/images/esja.png" width="100" alt="ESJA" loading="lazy">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navTog" aria-controls="navTog" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navTog">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="/">Beranda</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/proyek">Proyek</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/paket">Paket</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/kontak">Kontak</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/tentang">Tentang Kami</a>
          </li>
          <?php if(logged_in()): ?>
          <li class="nav-item mr-md-2 mb-sm-2">
            <a class="nav-link text-light btn btn-success" href="/admin">Admin</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link btn btn-warning" href="/logout">Logout</a>
          </li>
          <?php else: ?>
          <li class="nav-item active">
            <a class="nav-link btn btn-warning" href="/login">Login</a>
          </li>
          <?php endif; ?> 
        </ul>
      </div>
    </nav>
    
    <?php $this->renderSection('content'); ?>

    <div class="jumbotron bg-white text-center">
      <?php $creator = "mzaasya@gmail.com" ?>
      <small>Copyright &copy; 2020 ESJA, All rights reserved by 
        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?= $creator ?>&su=Website_Request&body=Type_Your_Request" class="text-dark">mzaasya</a>.
      </small>
    </div>

    <div class="fixed-bottom d-block text-center">
      <a href="https://wa.me/<?= $kontak['nomor'] ?>" class="text-white">
        <button type="button" class="btn btn-success btn-sm rounded-pill px-4 mb-2">
          <div class="d-inline-block">
            <img src="/images/whatsapp.png" width="30">
            <span class="align-middle">Hubungi Kami</span>
          </div>
        </button>
      </a>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="/brain.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  
  </body>
</html>