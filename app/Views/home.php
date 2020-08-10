<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <title>PublicDev</title>
</head>

<body>
  <header class="bg-dark">
    <div class="container">
      <nav class=" row justify-content-between  text-white py-2">
        <a class="text-decoration-none text-white" href="<?= site_url('/') ?>">
          <h1>PublicDev</h1>
        </a>
        <div class="user d-flex align-items-center">
          <a class="h5 mx-4 text-decoration-none text-white" href="<?= site_url('/edit') ?>"><?= ucfirst(session()->get('usuario')) ?></a>
          <img style="width: 50px; height: 50px" class="img-fluid rounded-circle" src="<?= site_url('/uploads/' . $img) ?>" alt="">
        </div>
      </nav>
    </div>

  </header>

  <?= $this->renderSection('home-content'); ?>

</body>

</html>