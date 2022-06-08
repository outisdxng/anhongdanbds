<?php


 function home_news( $atts ) {
	// attributes for shortcode
   if ( isset( $atts['title'] ) ) {$title = $atts['title'];} else {$title = '';}
   if ( isset( $atts['posts_per_page'] ) ) {$posts_per_page = $atts['posts_per_page'];} else {$posts_per_page = -1;}
   $args = array(
	 'numberposts' => $posts_per_page,
	 'post_type'   => 'post'
   );
   $posts = get_posts( $args );
   // create the list output
   if ( count( $posts ) > 0 ) {
    $output = 
	'<div class="home-4 lmp-section">
		<div class="container">
			<h2 class="lmp-title center mb-2 mb-lg-4">'.$title.'</h2>
			<div class="row">';
			foreach ( $posts as $post ) {
				$link = get_the_permalink( $post->ID );
				$title = $post->post_title;
				$excerpt = $post->post_excerpt;
				$image = get_the_post_thumbnail_url( $post->ID,'full' );
				$output .= '
				<div class="col-lg-4 hankbook-item">
					<figure><a href="'.$link.'">
							<div class="image"><img src="'.$image.'" alt="'.$title.'"></div></a>
						<figcaption>
							<h5><a href="'.$link.'">'.$title.'</a></h5>
							<p><a href="'.$link.'">Xem thêm</a></p>
						</figcaption>
					</figure>
				</div>';};
		
	$output.='</div></div></div>';
    return $output;
 }
}
add_shortcode( 'home_news', 'home_news' );
