<?php 

/**
 * Template Name: Department Single View
 */

get_header(); ?>

<div class="container" id="wrap">
	<div class="mainbanner">
		<img src="<?php bloginfo('template_directory'); ?>/img/shatter_r2.jpg">
	</div>

					<div id="main" class="content" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php if (function_exists("builder_breadcrumb_lists")) { ?>
							<?php builder_breadcrumb_lists(); ?>
							<?php } ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">
									<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
									<?php pdf_all_button(); ?>
								</header> <!-- end article header -->

								<section class="entry-content clearfix" itemprop="articleBody">
									<h2>Mission</h2>
									<?php the_field('mission_statement');?>
									<h2>Academic Advisement</h2>
									<?php the_field('academic_advisement');?>
									<h2>Careers</h2>
									<?php the_field('careers');?>
									<h2>Student Organizations</h2>
									<?php the_field('student_orgs');?>
									<?php the_content(); ?>
								</section> <!-- end article section -->

								<footer class="article-footer">
									<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ' ', '</p>' ); ?>

								</footer> <!-- end article footer -->

							</article> <!-- end article -->

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</div> <!-- end #main -->


		</div> <!-- end .container -->

<?php get_footer(); ?>
