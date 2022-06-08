<?php


 function home_service( $atts ) {
	// attributes for shortcode
   if ( isset( $atts['posts_per_page'] ) ) {$posts_per_page = $atts['posts_per_page'];} else {$posts_per_page = -1;}
   if ( isset( $atts['sub_title'] ) ) {$sub_title = $atts['sub_title'];} else {$sub_title = '';}
   if ( isset( $atts['title'] ) ) {$title = $atts['title'];} else {$title = '';}
   if ( isset( $atts['description'] ) ) {$description = $atts['description'];} else {$description = '';}
   if ( isset( $atts['popular_title'] ) ) {$popular_title = $atts['popular_title'];} else {$popular_title = '';}
   if ( isset( $atts['popular_description'] ) ) {$popular_description = $atts['popular_description'];} else {$popular_description = '';}
   if ( isset( $atts['popular_image'] ) ) {$popular_image = $atts['popular_image'];} else {$popular_image = '';}
   $args = array(
	 'numberposts' => $posts_per_page,
	 'post_type'   => 'anhnongdan_service'
   );
   $posts = get_posts( $args );
   // create the list output
   if ( count( $posts ) > 0 ) {
    $output = 
	'<div class="home-2 lmp-section">
		<div class="container">
			<div class="heading-wrapper">
				<div class="row">
					<div class="col-lg-6">
						<h1 class="lmp-title">'.$title.'</h1>
						<h3>'.$sub_title.'</h3>
					</div>
					<div class="col-lg-6">
						<p class="description">'.$description.'</p>
					</div>
				</div>
			</div>
			<div class="content-wrapper"> 
				<div class="row"> ';

					foreach ( $posts as $post ) {
						$link = get_the_permalink( $post->ID );
						$title = $post->post_title;
						$excerpt = $post->post_excerpt;
						$image = get_the_post_thumbnail_url( $post->ID,'full' );
						$output .= '
						<div class="col-6 col-lg-3"> 
							<div class="service-item"> 
								<div class="ic"> <img src="'.$image.'" alt=""></div>
								<h5>'.$title.'</h5>
								<p>'.$excerpt.'</p>
								<a href="'.$link.'">Xem thêm</a>
							</div>
						</div>';
					};
	$output.='	</div>
			</div>
		</div>
	</div>
	<div class="home-3 lmp-section">
		<div class="container">
			<figure>
				<div class="image"><img src="'.get_template_directory_uri().''.$popular_image.'" alt=""></div>
				<figcaption>
					<p>'.$popular_title.'</p>
					<h3>'.$popular_description.'</h3>
				</figcaption>
			</figure>
		</div>
	</div>';
    return $output;
 }
}
add_shortcode( 'home_service', 'home_service' );
