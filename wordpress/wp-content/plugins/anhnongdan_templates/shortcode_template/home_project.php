<?php


 function home_project( $atts ) {
	// attributes for shortcode
   if ( isset( $atts['posts_per_page'] ) ) {$posts_per_page = $atts['posts_per_page'];} else {$posts_per_page = -1;}
   $args = array(
	 'numberposts' => $posts_per_page,
	 'post_type'   => 'anhnongdan_project'
   );
   $posts = get_posts( $args );
   // create the list output
   if ( count( $posts ) > 0 ) {
    $output = 
	'<div class="home-1">';
	foreach ( $posts as $post ) {
		$link = get_the_permalink( $post->ID );
		$title = $post->post_title;
		$excerpt = $post->post_excerpt;
		$image = get_the_post_thumbnail_url( $post->ID,'full' );
		$output .= '
		<div class="wrapper parallax-window" data-parallax="scroll" data-image-src="'.$image.'">
			<div class="box-wrapper">
				<div class="container">
					<div class="content-wrapper">
						<h3>'.$title.'</h3>
						<p>'.$excerpt.'</p><a href="'.$link.'">Xem dự án</a>
					</div>
				</div>
			</div>
		</div>';
	};
		
	$output.='</div>';
    return $output;
 }
}
add_shortcode( 'home_project', 'home_project' );
