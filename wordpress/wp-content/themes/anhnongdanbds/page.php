<?php get_header(); ?>
  <main>
	<div class="banner-section"> 
		<div class="banner-image"> <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></div>
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
  <?php
    if(have_posts()) {
      while (have_posts()) {
        the_post();
        the_content();
      }
    }
  ?>
</main>
<?php get_footer(); ?>
