<div class="col-12 col-md-10 col-lg-7 mx-auto my-2 article-lists">
  <div class="d-block py-3">
    <a href="<?= esc_url(get_the_permalink()); ?>" class="text-decoration-none">
      <h2 class="lead fw-bold"><?= get_the_title(); ?></h2>
    </a>
    <p class="small mb-0">Published on: <?= get_the_date(); ?></p>
  </div>
</div>