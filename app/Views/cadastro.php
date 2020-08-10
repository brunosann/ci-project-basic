<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
  <title>PublicDev - Cadastro</title>
</head>

<body class="bg-secondary">
  <div class="d-flex vh-100 justify-content-center align-items-center">
    <div class="form p-4 bg-light rounded w-25">
      <?= helper('form') ?>
      <?= form_open(site_url('/cadastro/submit')) ?>
      <p class="display-4 text-center">Cadastro</p>
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input required class="form-control" type="text" value="<?= old('nome') ?>" name="nome" id="nome">
        <?php if (isset($erro)) : ?>
          <span class="small text-muted"><?= isset($erro->getErrors()['nome']) ? $erro->getErrors()['nome'] : '' ?></span>
        <?php endif ?>
      </div>
      <div class="form-group">
        <label for="sobrenome">Sobrenome:</label>
        <input required class="form-control" type="text" value="<?= old('sobrenome') ?>" name="sobrenome" id="sobrenome">
        <?php if (isset($erro)) : ?>
          <span class="small text-muted"><?= isset($erro->getErrors()['sobrenome']) ? $erro->getErrors()['sobrenome'] : '' ?></span>
        <?php endif ?>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input required class="form-control" type="email" value="<?= old('email') ?>" name="email" id="email">
        <?php if (isset($erro)) : ?>
          <span class="small text-muted"><?= isset($erro->getErrors()['email']) ? $erro->getErrors()['email'] : '' ?></span>
        <?php endif ?>
      </div>
      <div class="form-group">
        <label for="senha">Senha:</label>
        <input required class="form-control" type="password" name="senha" id="senha">
        <?php if (isset($erro)) : ?>
          <span class="small text-muted"><?= isset($erro->getErrors()['senha']) ? $erro->getErrors()['senha'] : '' ?></span>
        <?php endif ?>
      </div>
      <div class="form-group text-center">
        <button class="btn btn-primary btn-lg" type="submit">Cadastrar</button>
      </div>

      <?= form_close() ?>
    </div>
  </div>

</body>

</html>