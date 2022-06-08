<?php


 function introduce_member( $atts ) {
     // attributes for shortcode
     if ( isset( $atts['title'] ) ) {$title = $atts['title'];} else {$title = '';}
     if ( isset( $atts['posts_per_page'] ) ) {$posts_per_page = $atts['posts_per_page'];} else {$posts_per_page = -1;}
	 $args = array(
	   'numberposts' => $posts_per_page,
	   'post_type'   => 'anhnongdan_member'
	 );
	 $posts = get_posts( $args );
	 // create the list output
	 if ( count( $posts ) > 0 ) {
    // create the list output
    $output = 
	'<div class="gioi-thieu-4">
		<div class="container">
			<h2 class="lmp-title center">'.$title.'</h2>
			<div class="swiper-container slider">
				<div class="swiper-wrapper">';
					foreach ( $posts as $post ) {
						$link = get_the_permalink( $post->ID );
						$title = $post->post_title;
						$excerpt = $post->post_excerpt;
						$image = get_the_post_thumbnail_url( $post->ID,'full' );
						$output .= '
						<div class="swiper-slide">
							<div class="image"><img src="'.$image.'" alt="'.$title.'"></div>
							<div class="caption">
								<p>'.$title.'</p>
							</div>
						</div>';
					}
				$output .= '</div>
				<div class="swiper-navigation">
					<div class="swiper-next"><em class="lnr lnr-chevron-right"></em></div>
					<div class="swiper-prev"><em class="lnr lnr-chevron-left"></em></div>
				</div>
			</div>
		</div>
	</div>';
    return $output;
	}
 }

add_shortcode( 'introduce_member', 'introduce_member' );

