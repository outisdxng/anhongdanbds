<?php
	$category = get_queried_object();
	$page_id = get_queried_object_id();
	$all_categories = get_terms([
		'taxonomy' => 'project_category',
		'hide_empty' => false,
	]);
	$posts = get_posts(
		array(
			'post_type' => 'anhnongdan_project',
			'tax_query' => array(
				array(
				'taxonomy' => 'project_category',
				'field' => 'term_id',
				'terms' => $page_id
				 )
			  )
			
		)
	);
	$category_id = $category->term_id;
	get_header();
?>

<main>
	<div class="banner-section"> 
		<div class="banner-image"> <img src="<?php 
			$thumbnail = get_field( 'background', $category->taxonomy . '_' . $category->term_id );
			echo $thumbnail['url'];
		?>" alt="<?php echo $category->name; ?>"></div>
		<div class="breadcrumb-section">
			<div class="container"> 
				<ol class="breadcrumb">
					<li class="breadcrumb-item"> <a href="/">
								<em class="fas fa-home"></em></a></li>
					<li class="breadcrumb-item"><a href='javascript:void(0)'>Dự án</a></li>
					<li class="breadcrumb-item"> <a href="<?php echo get_term_link($category_id) ?>"><?php echo $category->name; ?> </a></li>
				</ol>
			</div>
		</div>
	</div>

	<section class="du-an-1 lmp-section">
		<div class="container">
			<h1 class="lmp-title center mb-2">Dự án thực hiện</h1>
			<div class="lmp-navigation"> 
				<div class="mobile-toggle">Danh mục</div>
				<ul>
					<?php
						foreach( $all_categories as $taxonomy ){
							$isCurrent = $taxonomy->term_id == $page_id;
							$class = '';
							if($isCurrent)
								$class = 'active';
							echo '<li class="'.$class.'" ><a href="'.get_term_link($taxonomy->term_id).'">'.$taxonomy->name.'</a></li>';
						}
					?>
				</ul>
			</div>
		</div>
		<div class="project-list mt-3">
			<div class="row no-gutters">
				<?php
				foreach( $posts as $post ){
					$link = get_the_permalink( $post->ID );
					$title = $post->post_title;
					$excerpt = $post->post_excerpt;
					$image = get_the_post_thumbnail_url( $post->ID,'full' );
					echo '
						<div class="col-sm-6 project-item">
							<a href="'.$link.'">
								<figure>
									<div class="image"><img src="'.$image.'" alt="'.$title.'"></div>
									<div class="title">'.$title.'</div>
									<figcaption>
										<h3>'.$title.'</h3><em class="mdi mdi-eye"></em>
									</figcaption>
								</figure>
							</a>
						</div>
					';
				}

				?>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
