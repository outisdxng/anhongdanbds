<?php


 function introduce_reason( $atts ) {
     // attributes for shortcode
     if ( isset( $atts['title'] ) ) {$title = $atts['title'];} else {$title = '';}
     if ( isset( $atts['posts_per_page'] ) ) {$posts_per_page = $atts['posts_per_page'];} else {$posts_per_page = -1;}
	 $args = array(
	   'numberposts' => $posts_per_page,
	   'post_type'   => 'anhnongdan_reason'
	 );
	 $posts = get_posts( $args );
	 // create the list output
	 if ( count( $posts ) > 0 ) {
    $output = 
	'<div class="gioi-thieu-3 lmp-section">
		<h2 class="lmp-title center">'.$title.'</h2>
		<div class="main-wrapper mt-2 mt-lg-5">
			<div class="row no-gutters">';
				foreach ( $posts as $post ) {
					$link = get_the_permalink( $post->ID );
					$title = $post->post_title;
					$excerpt = $post->post_excerpt;
					$image = get_the_post_thumbnail_url( $post->ID,'full' );
					$icon =  $post->icon;
					$icon_url = wp_get_attachment_url( $icon, 'full' );
					$output .= '
					<div class="col-lg-4 item">
						<figure>
							<div class="image"><img src="'.$image.'" alt="'.$title.'"></div>
							<figcaption>
								<div class="ic"><img src="'.$icon_url.'" alt="'.$title.'"></div>
								<p>'.$title.'</p>
							</figcaption>
						</figure>
					</div>';
				}
			$output .='</div>
		</div>
	</div>';
    return $output;
	}
 }

add_shortcode( 'introduce_reason', 'introduce_reason' );

