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
        <h1>PublicDev</h1>
        <div class="user d-flex align-items-center">
          <h6 class="mx-4">Nome</h6>
          <div class="user-img">

          </div>
        </div>
      </nav>
    </div>

  </header>

  <?= $this->renderSection('home-content'); ?>

</body>

</html>