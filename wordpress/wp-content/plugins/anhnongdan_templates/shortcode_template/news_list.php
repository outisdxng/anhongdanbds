<?php


 function news_list( $atts ) {
     // attributes for shortcode
     if ( isset( $atts['title'] ) ) {$title = $atts['title'];} else {$title = '';}
	 $args = array(
	   'post_type'   => 'post'
	 );
	 $posts = get_posts( $args );
	 // create the list output
	 if ( count( $posts ) > 0 ) {
    $output = 
	'
	<section class="cam-nang-1 lmp-section">
		<div class="container">
			<h1 class="lmp-title center mb-2">'.$title.'</h1>
			<div class="lmp-navigation"> 
			<div class="hankbook-list mt-3">
				<div class="row">';

					foreach ( $posts as $post ) {
						$link = get_the_permalink( $post->ID );
						$title = $post->post_title;
						$excerpt = $post->post_excerpt;
						$image = get_the_post_thumbnail_url( $post->ID,'full' );
						$background =  $post->background;
						$background_url = wp_get_attachment_url( $background, 'full' );
						$output .= '
						<div class="col-sm-6 col-lg-4 hankbook-item">
							<figure><a href="'.$link.'">
									<div class="image"><img src="'.$image.'" alt="'.$title.'"></div></a>
								<figcaption>
									<h5><a href="'.$link.'">'.$title.'</a></h5>
									<p><a class="gradient-text" href="'.$link.'">Xem thêm</a></p>
								</figcaption>
							</figure>
						</div>';
					}
	$output .= '</div>
			</div>
		</div>
	</section>';
    return $output;
	}
 }

add_shortcode( 'news_list', 'news_list' );

