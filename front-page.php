<?php get_header(); ?>

<div class="container-fluid bg-light vh-70 rounded-3">
  <div class="container h-100 d-flex align-items-center">
    <div class="d-block">
      <h1 class="display-4 fw-bold">I'm <span class="text-primary">Umar F.</span> Mohammed.</h1>
      <h3 class="lead fw-normal">
        Software Developer, User Interface Designer, & Instructor.
      </h3>
    </div>
  </div>
</div>

<div class="container-fluid my-5 py-5">
  <div class="container">
    <div id="postSections" class="row">
      <div class="col-12 col-md-10 col-lg-7 mx-auto">
        <h3 class=" h1 fw-bold">Recent articles.</h3>
      </div>
      <?php
        // Argument that defines how many posts is outputted.
        $args = array('posts_per_page' => 5, 'paged' => 1 );
        // Variable to call WP_Query.
        $query = new WP_Query ( $args );

          if ( $query->have_posts () ) : while( $query->have_posts() ) : $query->the_post();

            get_template_part ( 'template-parts/content/content-single', get_post_format() );

          endwhile;
          else: get_template_part ( 'template-parts/content/content-empty', get_post_format() ); endif;
          // Function to reset post data.
        wp_reset_postdata();
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>