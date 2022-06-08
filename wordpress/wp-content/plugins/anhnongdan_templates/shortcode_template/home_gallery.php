<?php


 function home_gallery( $atts ) {
	// attributes for shortcode
   if ( isset( $atts['title'] ) ) {$title = $atts['title'];} else {$title = '';}
   if ( isset( $atts['posts_per_page'] ) ) {$posts_per_page = $atts['posts_per_page'];} else {$posts_per_page = -1;}
   $args = array(
	 'numberposts' => $posts_per_page,
	 'post_type'   => 'anhnongdan_gallery'
   );
   $posts = get_posts( $args );
   // create the list output
   if ( count( $posts ) > 0 ) {
    $output = 
	'<section class="home-5 lmp-section">
		<div class="container">
			<h2 class="lmp-title center">'.$title.'</h2>
			<div class="list-item">';
			foreach ( $posts as $post ) {
				$link = get_the_permalink( $post->ID );
				$title = $post->post_title;
				$excerpt = $post->post_excerpt;
				$gallery =  $post->gallery;
				$thumb .= wp_get_attachment_url( $gallery[0], 'full' );
				$output .= '<div class="col-item">
					<div class="top-item">
						<div class="item">
							<figure>
								<div class="image">
									<a href="'.$thumb.'" data-fancybox="'.$link.'"><img src="'.$thumb.'" alt=""></a>';
									foreach( $gallery as $key=>$gallery_image ){
										if($key != 0){
											$output .= '<a href="'.wp_get_attachment_url( $gallery_image, 'full' ).'" data-fancybox="'.$link.'" style="display: none"><img src="'.wp_get_attachment_url( $gallery_image, 'full' ).'" alt=""></a>';
										}
									}
								};
		
							$output.='</div>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>';
    return $output;
 }
}
add_shortcode( 'home_gallery', 'home_gallery' );
