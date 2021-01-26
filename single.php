<?php get_header(); ?>

<div class="container-fluid bg-light p-0">
  <div class="container banner d-flex align-items-center justify-content-center">
    <div class="row w-100">
      <div class="col-10 col-md-10 mx-auto">
        <div class="d-block text-center">
          <h1 class="display-4 fw-bold"><span class="text-primary"><?php the_title(); ?></span></h1>
          <h4 class="h4 fw-normal"><?php the_category(' '); ?></h4>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="my-5 py-3"></div>

<div class="container p-0">
  <div id="postSections" class="row">
    <?php
      if (have_posts()) :
        while(have_posts()) :
          the_post();
          get_template_part('template-parts/content/content-full', get_post_format());
        endwhile;
      else :
        get_template_part('template-parts/content/content-none');
      endif;
    ?>
  </div>
</div>

<div class="my-5 py-3"></div>

<?php get_footer(); ?>