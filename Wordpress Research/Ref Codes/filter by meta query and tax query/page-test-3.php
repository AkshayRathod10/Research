<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * 
 * @package 8Store Lite
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
					
<!--
					<php
		//load slider
		do_action('eightstore_lite_homepage_slider'); ?>-->
	
		
		
		<div class="store-wrapper">		
		<main id="main" class="site-main clearfix <?php echo esc_attr($single_page_layout); ?>" role="main">

			<button class="btn-list">List</button>

			<button class="btn-grid" onclick="grid()">Grid</button>


			<form action="<?php the_permalink(); ?>" method="get">
	            <label>Type:</label>
	            <select name="type">
	            	<option value="">Any</option>
	                <option value="botanical_name">Botanical Name</option>
	                <option value="common_name">Common Name</option>               
	            </select>

				<label>Category:</label>
	            <select name="category">
	            	<option value="">Any</option>
	                <option value="68">Essential Oils</option>
	                <option value="5">Herbal Extracts</option>                    
	            </select>
					
				<label>Application:</label>
	            <select name="application">
	            	<option value="">Any</option>
	                <option value="39">GIT Protective Agents</option>
	                <option value="8">Hair Protective Agents</option>                    
	            </select>

	            <label>Order:</label>
	            <select name="order">
	            	<option value="">Any</option>
	                <option value="ASC">ASC</option>
	                <option value="DESC">DESC</option>                    
	            </select>
	            <button type="submit" name="">Filter</button>
        	</form>

        	<?php 
        
		        if($_GET['type'] && !empty($_GET['type']))
		        {
		            $type = $_GET['type'];
		      	}

		      	if($_GET['category'] && !empty($_GET['category']))
		        {
		            $category = $_GET['category'];
		        }


	        	if($_GET['application'] && !empty($_GET['application']))
		        {
		            $application = $_GET['application'];
		        }

		        if($_GET['order'] && !empty($_GET['order']))
		        {
		            $order = $_GET['order'];
		        }
		    ?>


			<?php 

			// query
			$the_query = new WP_Query(array(
				'post_type'			=> 'post',
				'posts_per_page'	=> -1,
				'meta_key'			=> $type,
				'cat'		=> $category,$application,
				'orderby'			=> 'meta_value',
				'order'				=> $order

			));

			?>
			<?php if( $the_query->have_posts() ): ?>
				<?php while( $the_query->have_posts() ) : $the_query->the_post();?>
					
					<div class="list">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<h3>Botanical Name:<?php the_field('botanical_name') ?></h3>
					<h3>Comman Name: <?php the_field('common_name') ?></h3>
					</div>
					
	

				<?php endwhile; ?>
			<?php endif; ?>

			<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>


		</main><!-- #main -->
		</div><!-- #primary -->
<?php get_footer(); ?>
