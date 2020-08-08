<?= $this->extend('home'); ?>
<?= $this->section('home-content'); ?>

<div class="container">
  <div class="row">
    <h1 class="my-3">Àrea de Edição</h1>
    <div class="w-100"></div>
    <p>Para alterar suas informações basta alteralas e salvar</p>
  </div>
  <div class="row ">
    <?= helper('form') ?>
    <?= form_open('') ?>
    <div class="form-row my-3">
      <div class="col">
        <label for="nome">Nome:</label>
        <input class="form-control" type="text" name="nome" id="nome">
      </div>
      <div class="col">
        <label for="sobrenome">Sobrenome:</label>
        <input class="form-control" type="text" name="sobrenome" id="sobrenome">
      </div>
    </div>
    <div class="form-row my-3">
      <div class="col">
        <label for="senha">Nova senha:</label>
        <input class="form-control" type="password" name="senha" id="senha">
      </div>
      <div class="col">
        <label for="re-senha">Repita nova senha:</label>
        <input class="form-control" type="password" name="re-senha" id="re-senha">
      </div>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
    <?= form_close() ?>
  </div>

  <div class="row my-3">
    <h4>Suas Postagens</h4>
  </div>

  <div class="row bg-light my-3 p-2">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum perspiciatis error dolores! Sequi nobis non, nisi aut quo soluta exercitationem iste rem perspiciatis corrupti incidunt atque animi numquam eum eaque similique quis perferendis necessitatibus ipsam, ullam fugit nesciunt? Iure obcaecati nesciunt corrupti voluptate quae beatae architecto nulla veniam ea illo!</p>
    <button class="btn btn-secondary btn-sm mr-2">Editar</button>
    <button class="btn btn-secondary btn-sm">Deletar</button>
  </div>
  <div class="row bg-light my-3 p-2">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum perspiciatis error dolores! Sequi nobis non, nisi aut quo soluta exercitationem iste rem perspiciatis corrupti incidunt atque animi numquam eum eaque similique quis perferendis necessitatibus ipsam, ullam fugit nesciunt? Iure obcaecati nesciunt corrupti voluptate quae beatae architecto nulla veniam ea illo!</p>
    <button class="btn btn-secondary btn-sm mr-2">Editar</button>
    <button class="btn btn-secondary btn-sm">Deletar</button>
  </div>

</div>

<?= $this->endSection(); ?>