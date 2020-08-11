<?= $this->extend('home'); ?>
<?= $this->section('home-content'); ?>

<div class="container">
  <div class="row">
    <h1 class="my-3">Àrea de Edição</h1>
    <div class="w-100"></div>
    <p>Para alterar suas informações basta alteralas e salvar</p>
  </div>
  <?php if (isset($erro)) : ?>
    <span class="text-danger small">Preencha o formulario corretamente!</span>
  <?php endif ?>
  <div class="row ">
    <?= helper('form') ?>
    <div class="col-sm">
      <?= form_open(site_url('/edit/update')) ?>
      <div class="form-row my-3">
        <div class="col">
          <label for="nome">Nome:</label>
          <input class="form-control" type="text" name="nome" id="nome" value="<?= session()->get('usuario') ?>">
        </div>
        <div class="col">
          <label for="sobrenome">Sobrenome:</label>
          <input class="form-control" type="text" name="sobrenome" id="sobrenome" value="<?= session()->get('sobrenome') ?>">
        </div>
      </div>
      <div class="form-row my-3">
        <div class="col">
          <label for="senha">Nova senha:</label>
          <input class="form-control" type="password" name="senha" id="senha">
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
      <?= form_close() ?>
    </div>
    <div class="col-sm mt-4 mt-sm-0">
      <?= form_open_multipart(site_url('/edit/img')) ?>
      <div class="form-group">
        <label for="img">Adicione ou altere sua foto</label>
        <input required type="file" name="img" class="form-control-file" id="img">
      </div>
      <button class="btn btn-primary" type="submit">Adicionar Foto</button>
      <?= form_close() ?>
    </div>
  </div>

  <div class="row my-3">
    <h4>Suas Postagens</h4>
  </div>

  <?php foreach ($posts as $post) : ?>
    <div class="row bg-light my-3 p-2">
      <p><?= $post->post ?></p>
      <div class="w-100"></div>
      <button class="btn btn-secondary btn-sm mr-2">Editar</button>
      <a href="<?= site_url('/edit/delete/' . $post->id_post) ?>" class="btn btn-secondary btn-sm">Deletar</a>
    </div>
  <?php endforeach ?>
</div>

<?= $this->endSection(); ?>