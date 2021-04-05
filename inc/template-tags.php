<?php

if ( ! function_exists( 'umar_the_posts_navigation' ) ) {
	function umar_the_posts_navigation() {
		the_posts_pagination(
			array(
				'mid_size'           => 3,
				'prev_text'          => _x( 'Previous', 'previous set of posts' ),
				'next_text'          => _x( 'Next', 'next set of posts' ),
				'screen_reader_text' => __( 'Go to' ),
				'aria_label'         => __( 'Posts' ),
				'class'              => 'page_pagination',
			)
		);
	}
}