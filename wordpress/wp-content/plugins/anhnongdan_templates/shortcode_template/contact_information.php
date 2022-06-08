<?php


 function contact_information( $atts ) {
     // attributes for shortcode
     if ( isset( $atts['title'] ) ) {$title = $atts['title'];} else {$title = '';}
     if ( isset( $atts['map'] ) ) {$map = $atts['map'];} else {$map = '';}
    // create the list output
    $output = 
	'<section class="lien-he lmp-section">
		<div class="container">
			<h1 class="lmp-title center mb-2">Liên hệ</h1>
			<div class="main-wrapper">
				<div class="row">
					<div class="col-lg-4">
						<div class="content-wrapper">
							<h3>Anh nông dân BĐS</h3>
							<p><a href="#">Zalo: '.get_option('zalo_page_field').'</a><br><a href="#">Sđt: '.get_option('phone_field').'</a><br><a href="#">Youtube: '.get_option('youtube_field').'</a></p>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="form-wrap">'.do_shortcode('[contact-form-7 id="192" title="Contact form 2"]') .'
						</div>
					</div>
				</div>
			</div>
			<div class="map-wrapper mt-3 mt-lg-5"><iframe src="'.$map.'" width="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
		</div>
	</section>';
    return $output;
 }

add_shortcode( 'contact_information', 'contact_information' );

 