<?php 

/* Template Name: Department Page */ 

get_header(); ?>



<div class="container" id="wrap">

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
		<h3>Mission Statement</h3>
		<span>Mission Statement Here</span>
	</div>
</div>

	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<h3>Careers</h3>
		<span>Careers Here</span>
	</div>

	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<h3>Clubs and Societies</h3>
		<span>Clubs and Societies Here</span>
	</div>

	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
		<h3>Overview</h3>
		<span>Overview Here</span>
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
		<h3>Contact</h3>
		<span>Contact Here</span>
	</div>



	<!-- <div class="content">

		<?php if(have_posts()): while (have_posts()) : the_post(); ?>

		<h1><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p>

		<?php endwhile; else: ?>
  		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div> -->

</div>


<?php get_footer(); ?>
