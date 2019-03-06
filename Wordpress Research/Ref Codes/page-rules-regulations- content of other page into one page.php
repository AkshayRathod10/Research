<?php
/**
 * The template for displaying all pages.
 *
 * @package Theme Freesia
 * @subpackage Excellent
 * @since Excellent 1.0
 */

get_header();?>
<div class="paneltype1">
	<div class="container content-area">
		<main id="main" class="site-main">
			<header class="page-header">
				<h1 class="page-title"><?php the_title();?></h1>
				<!-- .page-title -->
				<?php excellent_breadcrumb(); ?><!-- .breadcrumb -->
			</header><!-- .page-header -->
			<?php
			if( have_posts() ) {
				while( have_posts() ) {
					the_post(); ?>
			<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content clearfix">
					<?php the_content(); ?>
				</div> <!-- entry-content clearfix-->
				<?php
				wp_link_pages( array( 
						'before'            => '<div style="clear: both;"></div><div class="pagination clearfix">'.esc_html__( 'Pages:', 'excellent' ),
						'after'             => '</div>',
						'link_before'       => '<span>',
						'link_after'        => '</span>',
						'pagelink'          => '%',
						'echo'              => 1
						) );
				comments_template(); ?>
				</article>
			</section>
			<?php }
			} else { ?>
			<h1 class="entry-title"> <?php esc_html_e( 'No Posts Found.', 'excellent' ); ?> </h1>
			<?php
			} ?>
		</main><!-- end #main -->
	</div> <!-- #primary -->
</div><!-- end .wrap -->
<div class="paneltype1 bg1">
	<div class="container">
			
		<?php
		    // query for the about page
		    $your_query = new WP_Query( 'pagename=Online Exam Rules' );
		    // "loop" through query (even though it's just one page) 
		    while ( $your_query->have_posts() ) : $your_query->the_post();?>
		    	<h1 class="text-center"><?php the_title(); ?></h1>
		        <?php the_content();?>
		    <?php endwhile; ?>
		    
		    <?php // reset post data (important!)
		    wp_reset_postdata(); ?>
		

	</div>
</div>
	<div class="paneltype1">
		<div class="container">
				
			<?php
			    // query for the about page
			    $your_query = new WP_Query( 'pagename=Technical Requirements Suggestions' );
			    // "loop" through query (even though it's just one page) 
			    while ( $your_query->have_posts() ) : $your_query->the_post();?>
			    	<h1 class="text-center"><?php the_title(); ?></h1>
			        <?php the_content();?>
			    <?php endwhile; ?>
			    
			    <?php // reset post data (important!)
			    wp_reset_postdata(); ?>
			

		</div>
	</div>
<?php
get_footer();