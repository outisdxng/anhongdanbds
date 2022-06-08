<?php


 function service_list( $atts ) {
     // attributes for shortcode
     if ( isset( $atts['title'] ) ) {$title = $atts['title'];} else {$title = '';}
     if ( isset( $atts['posts_per_page'] ) ) {$posts_per_page = $atts['posts_per_page'];} else {$posts_per_page = -1;}
	 $args = array(
	   'numberposts' => $posts_per_page,
	   'post_type'   => 'anhnongdan_service'
	 );
	 $posts = get_posts( $args );
	 // create the list output
	 if ( count( $posts ) > 0 ) {
    $output = 
	'<section class="dich-vu-1 lmp-section">
		<h1 class="lmp-title center">'.$title.'</h1>
		<div class="main-wrapper mt-2 mt-lg-5">
			<div class="row no-gutters">';
				foreach ( $posts as $post ) {
					$link = get_the_permalink( $post->ID );
					$title = $post->post_title;
					$excerpt = $post->post_excerpt;
					$image = get_the_post_thumbnail_url( $post->ID,'full' );
					$background =  $post->background;
					$background_url = wp_get_attachment_url( $background, 'full' );
					$output .= '
					<div class="col-lg dich-vu-item">
						<figure>
							<div class="image"><img src="'.$background_url.'" alt=""></div>
							<figcaption>
								<h3 class="mb-2">'.$title.'</h3>
								<div class="hidden-wrap">
									<p>'.$excerpt.'</p><a class="lmp-button mt-2" href="'.$link.'">Xem thêm</a>
								</div>
							</figcaption>
						</figure>
					</div>';
				}
	$output .= '</div>
		</div>
	</section>';
    return $output;
	}
 }

add_shortcode( 'service_list', 'service_list' );

