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
			<div class="dich-vu-ct-1 lmp-section">
				<h1 class="lmp-title mb-3 center"><?php the_title() ?></h1>
				<div class="content-wrapper">
					<div class="container">
						<div class="row" style="justify-content: center">
							<div class="col-lg-10">
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
			</div>

			<?php 
			$posts_per_page = 4;
			$args = array(
				'numberposts' => $posts_per_page,
				'post_type'   => 'anhnongdan_project',
				'post__not_in' => array(get_the_ID())
			);
			$posts = get_posts( $args );
			if(count($posts) > 0):
			?>

			<div class="du-an-ct-2 lmp-section">
				<h2 class="lmp-title center">Dịch vụ khác</h2>
				<div class="main-wrapper mt-2 mt-lg-5">
					<div class="row no-gutters">
						<?php 
							foreach ( $posts as $post ) {
								$link = get_the_permalink( $post->ID );
								$title = $post->post_title;
								$excerpt = $post->post_excerpt;
								$image = get_the_post_thumbnail_url( $post->ID,'full' );
								$background =  $post->background;
								$background_url = wp_get_attachment_url( $background, 'full' );
								echo '<div class="col-lg-6 dich-vu-item">
										<figure>
											<div class="image"><img src="'.$image.'" alt=""></div>
											<figcaption>
												<h3 class="mb-2">'.$title.'</h3>
												<div class="hidden-wrap">
													<p>'.$excerpt.'</p><a class="lmp-button mt-2" href="'.$link.'">Xem thêm</a>
												</div>
											</figcaption>
										</figure>
									</div>';
							}
						?>
					</div>
				</div>
			</div>

		</main>
		<?php endif; ?>
    <?php endif; ?>

    <?php get_footer(); ?>


	
