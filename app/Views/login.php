<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
  <title>PublicDev - Login</title>
</head>

<body class="bg-secondary">

  <div class="d-flex vh-100 justify-content-center align-items-center">
    <div class="form p-4 bg-light rounded w-25">
      <?= helper('form') ?>
      <?= form_open(site_url('/login/submit')) ?>
      <p class="display-4 text-center">Login</p>
      <div class="form-group">
        <label for="email">Email:</label>
        <input class="form-control" type="email" name="email" id="email">
      </div>
      <div class="form-group">
        <label for="senha">Senha:</label>
        <input class="form-control" type="password" name="senha" id="senha">
      </div>

      <?php if (isset($erro)) : ?>
        <p class="small text-center text-danger"><?= $erro ?></p>
      <?php endif ?>
      <div class="form-group text-center">
        <button class="btn btn-primary btn-lg" type="submit">Entrar</button>
      </div>
      <p class="small">Esqueceu sua senha ? <a href="">Clique Aqui</a> </p>

      <?= form_close() ?>
    </div>
  </div>

</body>

</html>