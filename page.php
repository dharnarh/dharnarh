<?php get_header(); ?>

<?php 
$title = get_the_title();
include 'template-parts/banner.php'; 
?>


<div class="container-fluid my-5 py-5">
  <div class="container p-0">
    <div id="postSections" class="row">
      <?php
      if (have_posts()) :
        while(have_posts()) :
          the_post();
          get_template_part('template-parts/content/content-page', get_post_format());
        endwhile;
      else :
        get_template_part('template-parts/content/content-none');
      endif;
    ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>