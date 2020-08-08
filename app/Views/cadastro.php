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
      <?= form_open() ?>
      <p class="display-4 text-center">Cadastro</p>
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input class="form-control" type="text" name="nome" id="nome">
      </div>
      <div class="form-group">
        <label for="sobrenome">Sobrenome:</label>
        <input class="form-control" type="text" name="sobrenome" id="sobrenome">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input class="form-control" type="email" name="email" id="email">
      </div>
      <div class="form-group">
        <label for="senha">Senha:</label>
        <input class="form-control" type="password" name="senha" id="senha">
      </div>
      <div class="form-group">
        <label for="re-senha">Repita a senha:</label>
        <input class="form-control" type="password" name="re-senha" id="re-senha">
      </div>
      <div class="form-group text-center">
        <button class="btn btn-primary btn-lg" type="submit">Cadastrar</button>
      </div>

      <?= form_close() ?>
    </div>
  </div>

</body>

</html>