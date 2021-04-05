<?php 

get_header(); 

$title = get_the_archive_title();
$subtitle = get_the_archive_description();
include 'template-parts/banner.php'; 

?>

<div class="container-fluid my-5 py-5">
  <div class="container">
    <?php if ( have_posts() ) : ?>
    <div id="postSections" class="row">
      <?php 
      // Start the Loop.
			while ( have_posts() ) : the_post();

        get_template_part ( 'template-parts/content/content-single', get_post_format() );

      endwhile; umar_the_posts_navigation(); 
      ?>
    </div>

    <?php	else : get_template_part ( 'template-parts/content/content-empty', get_post_format() ); endif; ?>
  </div>
</div>

<?php get_footer(); ?>