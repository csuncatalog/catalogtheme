<?php get_header(); ?>


<div class="container" id="wrap">

<div class="row">
	<div class="mainbanner">
		<img src="<?php bloginfo('template_directory'); ?>/img/shatter_small.jpg">
	</div>
</div>

<div class="row">
	<div class="landing-box container">
		<div class="landing-item col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<img class="land-bg" src="<?php bloginfo('template_directory'); ?>/img/landing-bg.png">
			<div class="landing-over">
				<img class="land-bg" src="<?php bloginfo('template_directory'); ?>/img/icon-xmarks.png">
				<h4 class="land-head">Your Catalog Guide</h4>
				<span class="land-copy">For new students, helps to get them pointed in the right direction.</span>
			</div>
		</div>
		<div class="landing-item col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<img class="land-bg" src="<?php bloginfo('template_directory'); ?>/img/landing-bg.png">
			<div class="landing-over">
				<img class="land-bg" src="<?php bloginfo('template_directory'); ?>/img/icon-book.png">
				<h4 class="land-head">Explore Your Major</h4>
				<span class="land-copy">For current students who have already established their major.</span>
			</div>
		</div>
		<div class="landing-item col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<img class="land-bg" src="<?php bloginfo('template_directory'); ?>/img/landing-bg.png">
			<div class="landing-over">
				<img class="land-bg" src="<?php bloginfo('template_directory'); ?>/img/icon-sundial.png">
				<h4 class="land-head">Catalog Resources</h4>
				<span class="land-copy">Downloads, archives and other similar information accessed here.</span>
			</div>
		</div>
	</div>
</div>

	<div class="content">
		<h1>Departments</h1>
	</div>

	<div class="dept-container content">





		<?php 
			// Query my custom post type
		$the_query = new WP_Query(array('post_type' => array('department'), 'order' => 'ASC')); ?>


		<?php // The Loop
			if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<div class="dept-item col-xs-12 col-sm-6 col-md-4 col-lg-3">
			<a href="#"><?php the_title(); ?></a>
		</div>





		<?php endwhile;  endif;
			/* Restore original Post Data */
		wp_reset_postdata(); ?>

		






	</div>

</div>

<?php get_footer(); ?>