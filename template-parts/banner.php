<div class="container-fluid bg-light rounded-3">
  <div class="container col-11 col-md-6 banner d-flex align-items-center justify-content-center">
    <div class="d-block text-center">
      <h1 class="display-4 fw-bold text-primary"><?= $title ?? 'My Articles'; ?></h1>
      <?php if ($subtitle) : ?>
      <p class="fw-normal text-decoration-none"><?= $subtitle ?? 'All articles are original and written by me.'; ?></p>
      <?php endif; ?>
    </div>
  </div>
</div>