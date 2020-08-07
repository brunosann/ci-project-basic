<?= $this->extend('home'); ?>

<?= $this->section('home-content'); ?>

<div class="container">
  <div class="row">
    <p class="lead my-3">Veja sobre oque estão falando...</p>
    <div class="w-100"></div>
    <a class="btn btn-primary btn-lg" href="">Criar nova Postagem</a>
  </div>

  <article class="row bg-gray shadow-sm my-4 p-3 rounded">
    <div class="user-img">
    </div>
    <div class="user-info mx-3">
      <h6 class="lead">Nome</h6>
      <small class="lead small text-muted">data</small>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, nihil veniam excepturi vero ratione blanditiis in minus, velit perspiciatis nam eius expedita adipisci necessitatibus nemo mollitia ipsam illum officia, exercitationem minima ut commodi! Hic quos asperiores nesciunt libero iste voluptate ipsa molestias odio earum esse veniam velit dolorum error, aperiam voluptas ratione dicta autem id natus! Aspernatur, accusantium quia.
    </p>
  </article>
</div>

<?= $this->endSection(); ?>