<?php get_header(); ?>

<?php 
$title = 'My Articles';
$subtitle = 'All articles are published by Umar.';
include 'template-parts/banner.php'; 
?>

<div class="container-fluid my-5 py-5">
  <div class="container">
    <div id="postSections" class="row">
      <!-- posts loaded using ajax call -->
      <?php
        if ( have_posts () ) : while( have_posts() ) : the_post();
          get_template_part ( 'template-parts/content/content-single', get_post_format() );
        endwhile; umar_the_posts_navigation(); 
        
        else : 
          get_template_part ( 'template-parts/content/content-empty', get_post_format() ); 
        endif;
        // Function to reset post data.
        wp_reset_postdata();
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>