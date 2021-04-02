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
        $json_response[] = [
          'title' => get_the_title(),
          'post_link' => esc_url(get_the_permalink()),
          'date' => get_the_date(),
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