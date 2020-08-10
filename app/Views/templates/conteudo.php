<?= $this->extend('home'); ?>

<?= $this->section('home-content'); ?>

<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal-add" aria-hidden="true">
  <?= helper('form') ?>
  <?= form_open(site_url('/post/add')) ?>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="form-group">
          <label for="post">Compratilhe sempre...</label>
          <textarea required class="form-control" name="post" id="post" rows="10"></textarea>
        </div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Postar</button>
      </div>
    </div>
  </div>
  <?= form_close() ?>
</div>

<div class="container">
  <div class="row">
    <p class="lead my-3">Veja sobre oque estão falando...</p>
    <div class="w-100"></div>
    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal">Criar nova Postagem</button>
  </div>

  <?php foreach ($posts as $post) : ?>
    <article class="row bg-gray shadow-sm my-4 p-3 rounded">
      <div class="user-img">
      </div>
      <div class="user-info mx-3">
        <h6 class="lead"><?= ucfirst($post->usuario) ?></h6>
        <small class="lead small text-muted"><?= date('d/m/y', strtotime($post->date_created)) ?></small>
      </div>
      <p><?= $post->post ?></p>
    </article>
  <?php endforeach ?>
</div>

<script src="<?= site_url('assets/js/jquery-3.5.1.slim.min.js') ?>"></script>
<script src="<?= site_url('assets/js/popper.min.js') ?>"></script>
<script src="<?= site_url('assets/js/bootstrap.min.js') ?>"></script>
<?= $this->endSection(); ?>