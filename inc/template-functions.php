<?php

if (! function_exists('load_posts_ajax')) {
  function load_posts_ajax() {
    $json_response = [];
    $paged = $_POST['page'];
    $argc = [
      'posts_per_page' => 10,
      'paged' => $paged
    ];
    $query = new WP_Query($argc);
    if ($query->have_posts()) :
      while($query->have_posts()) :
        $query->the_post();
        $excerpt = get_the_content();
        // get the first 80 words from the content and added to the $abstract variable
        preg_match('/^([^.!?\s]*[\.!?\s]+){0,'. 35 .'}/', strip_tags($excerpt), $abstract);
        // pregmatch will return an array and the first 80 chars will be in the first element 
        $the_excerpt = $abstract[0] . '...';
        $json_response[] = [
          'title' => get_the_title(),
          'post_link' => esc_url(get_the_permalink()),
          'date' => get_the_date(),
          'excerpt' => $the_excerpt
        ];
      endwhile;
    endif;
    wp_reset_query();
    echo json_encode($json_response);
    wp_die();
  }
}

add_action('wp_ajax_load_posts_by_ajax', 'load_posts_ajax');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_ajax');