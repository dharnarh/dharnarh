<?php get_header(); ?>

<div class="container-fluid vhm-70 vh-70">
  <div class="container text-center h-100 d-flex align-items-center justify-content-center">
    <div class="d-block">
      <h1 class="display-404 fw-bold">404</h1>
      <h3 class="lead fw-normal">
        Dead end. You probably made a mistake.
      </h3>
      <div class="mt-3">
        <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ) ?>" class="btn-primary small">Read
          Articles</a>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>