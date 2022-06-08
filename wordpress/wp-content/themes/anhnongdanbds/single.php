<?php get_header(); ?>
  <?php if(have_posts()): ?>
		<main>
			<div class="banner-section"> 
				<div class="banner-image"> <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>" alt="<?php the_title(); ?>"></div>
				<div class="breadcrumb-section">
					<div class="container"> 
						<ol class="breadcrumb">
							<li class="breadcrumb-item"> <a href="/">
										<em class="fas fa-home"></em></a></li>
							<li class="breadcrumb-item"> <a href="<?php get_permalink() ?>"><?php the_title() ?> </a></li>
						</ol>
					</div>
				</div>
			</div>
			<section class="cam-nang-ct lmp-section">
				<div class="container">
					<div class="row" style="justify-content: center">
						<div class="col-lg-10">
							<div class="heading-wrapper">
								<h1 class="mb-1 mb-lg-2"><?php the_title() ?></h1>
								<div class="social-share"></div>
								<p class="time">
									<time><em class="lnr lnr-clock"></em><?php the_time( 'H:i' ); ?></time>
									<date><?php echo get_the_date( 'd-m-Y' ); ?></date>
								</p>
							</div>
							<div class="content-wrapper">
								<?php 
									while (have_posts()) {
										the_post();
										the_content();
									}
								?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php 
			$posts_per_page = 5;
			$args = array(
				'numberposts' => $posts_per_page,
				'post_type'   => 'post',
				'post__not_in' => array(get_the_ID())
			);
			$posts = get_posts( $args );
			if(count($posts) > 0):
			?>

			<section class="san-pham-ct-2 lmp-section">
				<div class="container">
					<h2 class="lmp-title center mb-2">Tin tức khác</h2>
					<div class="product-related-slider">
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<?php
								foreach ( $posts as $post ) {
									$link = get_the_permalink( $post->ID );
									$title = $post->post_title;
									$excerpt = $post->post_excerpt;
									$image = get_the_post_thumbnail_url( $post->ID,'full' );
									$background =  $post->background;
									$background_url = wp_get_attachment_url( $background, 'full' );
									echo '<div class="swiper-slide">
											<div class="hankbook-item">
												<figure><a href="'.$link.'">
														<div class="image"><img src="'.$image.'" alt="'.$title.'"></div></a>
													<figcaption>
														<h5><a href="'.$link.'">'.$title.'</a></h5>
														<p><a class="gradient-text" href="'.$link.'">Xem thêm</a></p>
													</figcaption>
												</figure>
											</div>
										</div>';
								}
								?>
							</div>
						</div>
						<div class="swiper-navigation">
							<div class="swiper-prev"><em class="mdi mdi-arrow-left"></em></div>
							<div class="swiper-next"><em class="mdi mdi-arrow-right"></em></div>
						</div>
					</div>
				</div>
			</section>

			<?php endif; ?>
		</main>
    <?php endif; ?>

    <?php get_footer(); ?>


	
