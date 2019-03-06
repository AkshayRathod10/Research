<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package wimpie lite
 */

get_header(); ?>
<div id="clear"></div>
	<div id="mainhead1">
	<header class="entry-header">
	<div id="center">
	<div id="center-head">
		<img src="http://www.bixabotanical.com/wp-content/themes/wimpie-lite-child/images/heading.png" id="img1">
			<?php the_title( '<h1 class="entry-title"><b>', '</b></h1><div class="title-border"></div>'); ?>
		<img src="http://www.bixabotanical.com/wp-content/themes/wimpie-lite-child/images/heading1.png" id="img2">
	</div>
	</div>
	</header><!-- .entry-header -->
	<div id="clear"></div>
	</div>
<div id="clear"></div>
<div class="ed-container">

<?php 
global $post;
$wimpie_lite_both_sidebar = get_post_meta($post->ID, 'wimpie_lite_sidebar_layout', true);
if($wimpie_lite_both_sidebar=='both-sidebar'){
    ?>
        <div class="left-sidbar-right">
    <?php
}
 ?>
	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

				<?php
				    // Get the ID of a given category
				    $category_id = get_cat_ID( 'Herbs' );
				 
				    // Get the URL of this category
				    $category_link = get_category_link( $category_id );
				?>
				 
				<!-- Print a link to this category -->
				<a href="<?php echo esc_url( $category_link ); ?>" title="Category Name"><?php echo get_cat_name( $category_id = 43 );?></h3></a>


			<div class="container">
				<div class="row no-gutters">
				<div class="col-md-6 col-sm-6 col-xs-12 m-b15">
					<a href="gallery.html">
						<div class="hovercontent">
						  <div class="hovercontent-overlay"></div>
						  <img class="hovercontent-image" src="http://localhost/herbaltrade-new/wp-content/uploads/product-1.jpg">
						  <div class="hovercontent-details fadeIn-bottom">
							<h3 class="hovercontent-title"><?php echo get_cat_name( $category_id = 43 );?></h3>
							<!-- <p class="hovercontent-text"><i class="fa fa-eye"></i> View Gallery!!</p> -->
						  </div>
					  </div>
					</a>
				</div>

				<div class="col-md-6 col-sm-6 col-xs-12 m-b15">
					<a href="gallery.html">
						<div class="hovercontent">
						  <div class="hovercontent-overlay"></div>
						  <img class="hovercontent-image" src="http://localhost/herbaltrade-new/wp-content/uploads/product-2.jpg">
						  <div class="hovercontent-details fadeIn-bottom">
							<h3 class="hovercontent-title">BOTANICAL POWDERS</h3>
							<!-- <p class="hovercontent-text"><i class="fa fa-eye"></i> View Gallery!!</p> -->
						  </div>
					  </div>
					</a>
				</div>

				<div class="col-md-6 col-sm-6 col-xs-12 m-b15">
					<a href="gallery.html">
						<div class="hovercontent">
						  <div class="hovercontent-overlay"></div>
						  <img class="hovercontent-image" src="http://localhost/herbaltrade-new/wp-content/uploads/product-3.jpg">
						  <div class="hovercontent-details fadeIn-bottom">
							<h3 class="hovercontent-title">SPICES</h3>
							<!-- <p class="hovercontent-text"><i class="fa fa-eye"></i> View Gallery!!</p> -->
						  </div>
					  </div>
					</a>
				</div>

				<div class="col-md-6 col-sm-6 col-xs-12 m-b15">
					<a href="gallery.html">
						<div class="hovercontent">
						  <div class="hovercontent-overlay"></div>
						  <img class="hovercontent-image" src="http://localhost/herbaltrade-new/wp-content/uploads/product-4.jpg">
						  <div class="hovercontent-details fadeIn-bottom">
							<h3 class="hovercontent-title">HERBAL TEAS</h3>
							<!-- <p class="hovercontent-text"><i class="fa fa-eye"></i> View Gallery!!</p> -->
						  </div>
					  </div>
					</a>
				</div>

				<div class="col-md-6 col-sm-6 col-xs-12 m-b15">
					<a href="gallery.html">
						<div class="hovercontent">
						  <div class="hovercontent-overlay"></div>
						  <img class="hovercontent-image" src="http://localhost/herbaltrade-new/wp-content/uploads/product-5.jpg">
						  <div class="hovercontent-details fadeIn-bottom">
							<h3 class="hovercontent-title">ORGANIC INGREDIENTS</h3>
							<!-- <p class="hovercontent-text"><i class="fa fa-eye"></i> View Gallery!!</p> -->
						  </div>
					  </div>
					</a>
				</div>

				<div class="col-md-6 col-sm-6 col-xs-12 m-b15">
					<a href="gallery.html">
						<div class="hovercontent">
						  <div class="hovercontent-overlay"></div>
						  <img class="hovercontent-image" src="http://localhost/herbaltrade-new/wp-content/uploads/product-6.jpg">
						  <div class="hovercontent-details fadeIn-bottom">
							<h3 class="hovercontent-title">HERBAL EXTRACTS</h3>
							<!-- <p class="hovercontent-text"><i class="fa fa-eye"></i> View Gallery!!</p> -->
						  </div>
					  </div>
					</a>
				</div>
				
				</div>

			</div>

		</main><!-- #main -->

	</div><!-- #primary -->

<?php 
get_sidebar('left');
if($wimpie_lite_both_sidebar=='both-sidebar'){
    ?>
        </div>
    <?php
} 
 get_sidebar('right');
?>
</div>
<?php get_footer(); ?>
