<?php


 function home_partner( $atts ) {
	// attributes for shortcode
	if ( isset( $atts['title'] ) ) {$title = $atts['title'];} else {$title = '';}
   if ( isset( $atts['posts_per_page'] ) ) {$posts_per_page = $atts['posts_per_page'];} else {$posts_per_page = -1;}
   $args = array(
	 'numberposts' => $posts_per_page,
	 'post_type'   => 'anhnongdan_partner'
   );
   $posts = get_posts( $args );
   // create the list output
   if ( count( $posts ) > 0 ) {
    $output = 
	'<section class="home-6 lmp-section">
		<div class="container">
			<h2 class="lmp-title center mb-2 mb-lg-4">'.$title.'</h2>
			<div class="partner-slider">
				<div class="swiper-container">
					<div class="swiper-wrapper">';
					foreach ( $posts as $post ) {
						$link = get_the_permalink( $post->ID );
						$title = $post->post_title;
						$excerpt = $post->post_excerpt;
						$image = get_the_post_thumbnail_url( $post->ID,'full' );
						$output .= '
						<div class="swiper-slide">
							<div class="logo"><img src="'.$image.'" alt="'.$title.'"></div>
						</div>';
					};
	
		
				$output.='</div>
				</div>
			</div>
		</div>
	</section>';
    return $output;
 }
}
add_shortcode( 'home_partner', 'home_partner' );
