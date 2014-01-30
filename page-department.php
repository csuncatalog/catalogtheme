<?php 

/* Template Name: Department Page */ 

get_header(); ?>



<div class="container" id="wrap">

	<?php if(have_posts()): while (have_posts()) : the_post(); ?>
	

	<div class="row">

		<div class="mainbanner">
			<img src="<?php bloginfo('template_directory'); ?>/img/shatter_small.jpg">
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h1 class="breadcrumb">Department Name <span> > Department Page Template</span></h1>
		</div>
	</div>

<div class="row">
	<div id="catalog-subnav"class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		<ul>
			<li><a href="#">Department</a></li>
			<li><a href="#">Programs</a>
				<ul>
					<li><a href="#">Program One</a>
					<li><a href="#">Program Two</a>
					<li><a href="#">Program Three</a>
				</ul>

			</li>
			<li><a href="#">Faculty</a></li>
			<li><a href="#">Courses</a></li>
		</ul>
	</div>

	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
		<div class="section-content">
			<span class="section-title"><span><h3>Mission Statement</h3></span></span> 
			<span><?php the_field('mission_statement'); ?></span>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<div class="section-content">
			<span class="section-title"><span><h3>Careers</h3></span></span> 
			<span><?php the_field('careers'); ?></span>
		</div>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<div class="section-content">
			<span class="section-title"><span><h3>Clubs and Societies</h3></span></span> 
			<span><?php the_field('clubs_&_societies'); ?></span>
		</div>		
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
		<div class="section-content">
			<span class="section-title"><span><h3>Overview</h3></span></span> 
			<span><?php the_field('overview'); ?></span>
		</div>
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		<div class="section-content">
			<span class="section-title"><span><h3>Contact</h3></span></span> 
			<span><?php the_field('contact'); ?></span>
		</div>
	</div>
</div>







<!-- 		<h1><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p> -->

		<?php endwhile; else: ?>
  		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>


</div>



<?php get_footer(); ?>
