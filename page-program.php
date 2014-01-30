<?php 

/* Template Name: Program Page */ 

get_header(); ?>

<div class="container" id="wrap">

<div class="row">
	<div class="mainbanner">
		<img src="<?php bloginfo('template_directory'); ?>/img/shatter_small.jpg">
	</div>
</div>

	<div class="container">

		<?php if(have_posts()): while (have_posts()) : the_post(); ?>

		<h1 class="breadcrumb">Department Name <span> > Department Name > <?php the_title(); ?> </span></h1>
		<p><?php the_content(); ?></p>

		<?php endwhile; else: ?>
  		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div>

</div>


<?php get_footer(); ?>
