<?php


 function home_introduce( $atts ) {
     // attributes for shortcode
     if ( isset( $atts['class'] ) ) {$class = $atts['class'];} else {$class = '';}
     if ( isset( $atts['sub_title'] ) ) {$sub_title = $atts['sub_title'];} else {$sub_title = '';}
     if ( isset( $atts['title'] ) ) {$title = $atts['title'];} else {$title = '';}
     if ( isset( $atts['description'] ) ) {$description = $atts['description'];} else {$description = '';}
     if ( isset( $atts['url'] ) ) {$url = $atts['url'];} else {$url = '';}
    if ( isset( $atts['image'] ) ) {$image = $atts['image'];} else {$image = '';}
    // create the list output
    $output = 
	'<div class="gioi-thieu-2 lmp-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-xl-7">
					<div class="content-wrapper">
						<h2 class="lmp-title mb-2">'.$sub_title.'</h2>
						<h3 class="mb-3">'.$title.'</h3>
						<p>'.$description.'</p><a class="lmp-button border" href="'.$url.'"><span>Tìm hiểu thêm</span></a>
					</div>
				</div>
				<div class="col-lg-6 col-xl-5">
					<div class="image-wrapper"><img src="'.get_template_directory_uri().''.$image.'" alt="'.$title.'"></div>
				</div>
			</div>
		</div>
	</div>';
    return $output;
 }

add_shortcode( 'home_introduce', 'home_introduce' );

 