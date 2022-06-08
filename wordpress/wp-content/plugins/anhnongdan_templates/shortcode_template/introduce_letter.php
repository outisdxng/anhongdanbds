<?php


 function introduce_letter( $atts ) {
     // attributes for shortcode
     if ( isset( $atts['class'] ) ) {$class = $atts['class'];} else {$class = '';}
     if ( isset( $atts['sub_title'] ) ) {$sub_title = $atts['sub_title'];} else {$sub_title = '';}
     if ( isset( $atts['title'] ) ) {$title = $atts['title'];} else {$title = '';}
     if ( isset( $atts['description'] ) ) {$description = $atts['description'];} else {$description = '';}
     if ( isset( $atts['sub_description'] ) ) {$sub_description = $atts['sub_description'];} else {$sub_description = '';}
     if ( isset( $atts['url'] ) ) {$url = $atts['url'];} else {$url = '';}
    if ( isset( $atts['image'] ) ) {$image = $atts['image'];} else {$image = '';}
    // create the list output
    $output = 
	'<section class="gioi-thieu-1 lmp-section">
		<div class="container">
			<h1 class="lmp-title center mb-1">'.$title.'</h1>
			<p class="lmp-description">'.$description.'</p>
			<div class="main-wrapper mt-3 mt-lg-5">
				<div class="row">
					<div class="col-lg-6 col-xl-7">
						<div class="content-wrapper">
							<h3 class="mb-2">'.$sub_title.'</h3>
							<p>'.$sub_description.'</p>
						</div>
					</div>
					<div class="col-lg-6 col-xl-5">
						<div class="image-wrapper"><img src="'.get_template_directory_uri().''.$image.'" alt="'.$title.'"></div>
					</div>
				</div>
			</div>
		</div>
	</section>';
    return $output;
 }

add_shortcode( 'introduce_letter', 'introduce_letter' );

 