<?php
/**
 *
 *
 * @package OnePress
 */

get_header(); ?>

	<div id="content" class="site-content">

		<div class="page-header">
			<div class="container">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
		</div>

        <?php echo onepress_breadcrumb(); ?>


		<div id="content-inside" class="container no-sidebar">
			<div id="primary" class="content-area">
				<div class="container">	


					<main id="main" class="site-main" role="main">

					<div class="row">
					<?php
		                $args = array(
		                    'post_type' => 'post',
		                    'posts_per_page' => -1,
		                    'cat' => 4
		                );
            			$query = new WP_Query($args);
                		while($query -> have_posts()) : $query -> the_post();
        			?>

        			<div class="col-md-4 text-center">

					<?php the_post_thumbnail('full'); ?>

					<h3><?php the_title(); ?></h3>
					<a class="button1" href="#">Contact Now</a>

					</div>

                		

        			<?php endwhile; wp_reset_query(); ?>

					</div>

					</main><!-- #main -->
				</div>
			</div><!-- #primary -->
		</div><!--#content-inside -->
	</div><!-- #content -->


<?php get_footer(); ?>

