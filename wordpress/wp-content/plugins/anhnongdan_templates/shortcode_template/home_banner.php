<?php

add_shortcode( 'homepage_block_slider', 'block_slider' );

 function block_slider( $atts ) {
     // attributes for shortcode
     if ( isset( $atts['class'] ) ) {$class = $atts['class'];} else {$class = '';}
     if ( isset( $atts['title'] ) ) {$title = $atts['title'];} else {$title = '';}
     if ( isset( $atts['description'] ) ) {$description = $atts['description'];} else {$description = '';}
     if ( isset( $atts['caption'] ) ) {$caption = '<p class="gtd__sub">'.$caption.'</p>';} else {$caption = '';}
     if ( isset( $atts['url_video'] ) ) {$url_video = $atts['url_video'];} else {$url_video = '';}
     if ( isset( $atts['solution'] ) ) {$solution = $atts['solution'];} else {$solution = '';}
     if ( isset( $atts['solution_ex'] ) ) {$solution_ex = $atts['solution_ex'];} else {$solution_ex = '';}
    if ( isset( $atts['image'] ) ) {$image = $atts['image'];} else {$image = '';}
    if ( isset( $atts['solution'] ) ) {$solution = '<h2 class="text-center">'.$solution.'<span>'.$solution_ex.'</span></h2>';} else {$solution = '';}
    // create the list output
    $output = 
	'<section class="home-banner '.$class.'">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="'.$image.'" alt="'.$title.'"></div>
			</div>
		</div>
		<div class="swiper-navigation">
			<div class="swiper-next"><em class="lnr lnr-chevron-right"></em></div>
			<div class="swiper-prev"><em class="lnr lnr-chevron-left"></em></div>
		</div>
	</section>';
    return $output;
 }
