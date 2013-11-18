<?php

/**
 * Template Name: Programs Single View
 */

get_header(); ?>

<div class="container">

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php if (function_exists("builder_breadcrumb_lists")) { ?>
							<?php builder_breadcrumb_lists(); ?>
							<?php } ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); 
												echo ', ';
												the_field('degree_type');
									?></h1>
									<?php pdf_all_button(); ?>
									<?php pdf_fouryear_button(); ?>
									<?php pdf_star_button(); ?>
								</header> <!-- end article header -->

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content();?>
									<h2>Requirements</h2>
									<?php the_field('program_requirements');?>
									<h2>SLOs</h2>
									<?php the_field('slos');?>
									<div class="four-year">
										<h2>Four Year Plan</h2>
										<?php the_field('degree_plan');?>
									</div>
									<div class="star">
										<h2>STAR Act</h2>
										<?php the_field('star_act');?>
									</div>
								</section> <!-- end article section -->

								<footer class="article-footer">
									<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ' ', '</p>' ); ?>

								</footer> <!-- end article footer -->

								<?php comments_template(); ?>

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

					<?php get_sidebar(); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

		</div> <!-- end .container -->

<?php get_footer(); ?>

