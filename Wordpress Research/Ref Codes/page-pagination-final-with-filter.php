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
			
			<button><a href="<?php echo get_site_url(); ?>/test-product-list-view/">
					
					List

			</a></button>

			<button><a href="<?php echo get_site_url(); ?>/test-product-grid-view/">
					
					Grid

			</a></button>



			<form action="<?php the_permalink(); ?>" method="get">
				<div class="form-group">
	            <label>Type:</label>
	            <select name="type">
	            	<option value="title" <?php if($_GET['type'] === 'title'){ echo "selected= 'selected'";} ?>>Title</option>
	                <option value="botanical_name" <?php if($_GET['type'] === 'botanical_name'){ echo "selected= 'selected'";} ?>>Botanical Name</option>
	                <option value="common_name" <?php if($_GET['type'] === 'common_name'){ echo "selected= 'selected'";} ?>>Common Name</option>
	                
	            </select>
	            </div>

				<div class="form-group">
				<label>Category:</label>
	            <select name="category">
	            	<option value="">Any</option>
	                <option value="68" <?php if($_GET['category'] === '68'){ echo "selected= 'selected'";} ?>>Essential Oils</option>
	                <option value="66" <?php if($_GET['category'] === '66'){ echo "selected= 'selected'";} ?>>Oleoresins</option> 
	                <option value="67" <?php if($_GET['category'] === '67'){ echo "selected= 'selected'";} ?>>Phytochemicals</option>
	                <option value="69" <?php if($_GET['category'] === '69'){ echo "selected= 'selected'";} ?>>Top Selling</option>
	                <option value="5" <?php if($_GET['category'] === '5'){ echo "selected= 'selected'";} ?>>Herbal Extracts </option>
	                             
	            </select>
				</div>	

				<div class="form-group">
				<label>Application:</label>
	            <select name="application">
	            	<option value="">Any</option>
	                <option value="39" <?php if($_GET['application'] === '39'){ echo "selected= 'selected'";} ?>>GIT Protective Agents</option>
	                <option value="8" <?php if($_GET['application'] === '8'){ echo "selected= 'selected'";} ?>>Hair Protective Agents</option>
	                <option value="40" <?php if($_GET['application'] === '40'){ echo "selected= 'selected'";} ?>>Heart Protective Agents</option>
	                                    
	            </select>
				</div>


				<div class="form-group">
	            <label>A to Z:</label>
				    <select name="atoz">
				    	<option value="">Any</option>
				    	<?php foreach(range('A','Z') as $letter): ?>
				    	<option value="<?php echo $letter; ?>" <?php if($_GET['atoz'] === $letter){ echo "selected= 'selected'";} ?>><?php echo $letter; ?></option>  

				    	<?php endforeach; ?>             
				    </select>
				</div>

				<div class="clear"></div>
	

	            <button type="submit" name="submit">Filter</button>
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

		        if($_GET['atoz'] && !empty($_GET['atoz']))
		        {
		            $atoz = $_GET['atoz'];
		        }

		        if($_GET['order'] && !empty($_GET['order']))
		        {
		            $order = $_GET['order'];
		        }else
		        {
		        	$order = 'ASC';
		        }


		        if($_GET['category'] && !empty($_GET['category']) && $_GET['application'] && !empty($_GET['application']))
		        {
		        	$relation = "AND";
		        }else
		        {
		        	$relation = "OR";
		        }
		    ?>


			<?php 

			// query

			if($_GET['type'] && !empty($_GET['type']) && empty($_GET['category']) && empty($_GET['application']) && empty($_GET['atoz']) )
				{

		        	if($type==='title')
		        	{


		        		if (!empty($_GET['atoz']))
		        		{

		        			$the_query = new WP_Query(array(
							'post_type'			=> 'post',
							'posts_per_page'	=> -1,
							'orderby'			=> 'title',
							'order'				=> 'ASC',

						));
		        			
		        		}else{

				        	$currentPage = get_query_var('paged');		

			        		$the_query = new WP_Query(array(
							'post_type'			=> 'post',
							'posts_per_page'	=> 12,
							'orderby'			=> 'title',
							'order'				=> 'ASC',
							'paged'				=> $currentPage

							));

			        		$max = $the_query->max_num_pages;

	        				
							}

	        		}else{

				        	if (!empty($_GET['atoz'])) 
				        	{		
			            
					            $the_query = new WP_Query(array(
								'post_type'			=> 'post',
								'posts_per_page'	=> -1,
								'meta_key'			=> $type,
								'orderby'			=> 'meta_value',
								'order'				=> $order

								));
							}else{

								$currentPage = get_query_var('paged');

								$the_query = new WP_Query(array(
								'post_type'			=> 'post',
								'posts_per_page'	=> 12,
								'meta_key'			=> $type,
								'orderby'			=> 'meta_value',
								'order'				=> $order,
								'paged'				=> $currentPage

								));

								$max = $the_query->max_num_pages;

								}	

	            			
	            		}
		      	}elseif(!isset($_GET['submit']))
		      	{
		      		$currentPage = get_query_var('paged');

		      		$the_query = new WP_Query(array(
					'post_type'			=> 'post',
					'posts_per_page'	=> 12,
					'paged'				=> $currentPage,
					'orderby'			=> 'title',
					'order'				=> 'ASC'

					));

					$max = $the_query->max_num_pages;

		      		

		      	}
		      	elseif($type === 'title' && isset($_GET['category']) && isset($_GET['application'])) 
		      	{
		      		if (!empty($_GET['atoz'])) 
		      		{
		      			$the_query = new WP_Query(array(
						'post_type'			=> 'post',
						'posts_per_page'	=> -1,
						'orderby'			=> 'title',
						'order' 			=> 'ASC',
						'tax_query'			=> array(

						'relation' => $relation,

						array(

							'taxonomy' => 'category',
							'field' => 'id',
							'terms' => $category,
						),

						array(

							'taxonomy' => 'category',
							'field' => 'id',
							'terms' => $application,
						),
						)));	

		      		}else
		      		{
	      				$currentPage = get_query_var('paged');

		      			$the_query = new WP_Query(array(
						'post_type'			=> 'post',
						'posts_per_page'	=> 12,
						'paged'				=> $currentPage,
						'orderby'			=> 'title',
						'order' 			=> 'ASC',
						'tax_query'			=> array(

						'relation' => $relation,

						array(

							'taxonomy' => 'category',
							'field' => 'id',
							'terms' => $category,
						),

						array(

							'taxonomy' => 'category',
							'field' => 'id',
							'terms' => $application,
						),
						)));

						$max = $the_query->max_num_pages;

		      		}

					

		      	}
		      	else
		      	{
		      		if (!empty($_GET['atoz'])) 
		      		{
		      			
						$the_query = new WP_Query(array(
						'post_type'			=> 'post',
						'posts_per_page'	=> -1,
						'tax_query'			=> array(

							'relation' => $relation,

							array(

								'taxonomy' => 'category',
								'field' => 'id',
								'terms' => $category,
							),

							array(

								'taxonomy' => 'category',
								'field' => 'id',
								'terms' => $application,
							),

						),
						'meta_query' => array(

							array(
								'key' => $type,
							),

						),
						'orderby' => 'meta_value',
						'order'	=> $order,

						));
					}else
					{
						$currentPage = get_query_var('paged');

						$the_query = new WP_Query(array(
						'post_type'			=> 'post',
						'posts_per_page'	=> 12,
						'paged'				=> $currentPage,
						'tax_query'			=> array(

							'relation' => $relation,

							array(

								'taxonomy' => 'category',
								'field' => 'id',
								'terms' => $category,
							),

							array(

								'taxonomy' => 'category',
								'field' => 'id',
								'terms' => $application,
							),

						),
						'meta_query' => array(

							array(
								'key' => $type,
							),

						),
						'orderby' => 'meta_value',
						'order'	=> $order,

						));

						$max = $the_query->max_num_pages;
					}

					
				}



			if($_GET['type'] && !empty($_GET['type']) && empty($_GET['category']) && empty($_GET['application']) && !empty($_GET['atoz']))
		        {

		        	if($type==='title')
		        	{


		        		if (!empty($_GET['atoz']))
		        		{

		        			$the_query = new WP_Query(array(
							'post_type'			=> 'post',
							'posts_per_page'	=> -1,
							'orderby'			=> 'title',
							'order'				=> 'ASC',

						));
		        			
		        		}else{

				        	$currentPage = get_query_var('paged');		

			        		$the_query = new WP_Query(array(
							'post_type'			=> 'post',
							'posts_per_page'	=> 12,
							'orderby'			=> 'title',
							'order'				=> 'ASC',
							'paged'				=> $currentPage

							));

			        		$max = $the_query->max_num_pages;

	        				
							}

	        		}else{

				        	if (!empty($_GET['atoz'])) 
				        	{		
			            
					            $the_query = new WP_Query(array(
								'post_type'			=> 'post',
								'posts_per_page'	=> -1,
								'meta_key'			=> $type,
								'orderby'			=> 'meta_value',
								'order'				=> $order

								));
							}else{

								$currentPage = get_query_var('paged');

								$the_query = new WP_Query(array(
								'post_type'			=> 'post',
								'posts_per_page'	=> 12,
								'meta_key'			=> $type,
								'orderby'			=> 'meta_value',
								'order'				=> $order,
								'paged'				=> $currentPage

								));

								$max = $the_query->max_num_pages;

								}	

	            				
	            		}
		        }	



			?>


			<?php if( $the_query->have_posts() ): ?>
	

				<?php while( $the_query->have_posts() ) : $the_query->the_post();?>
 

					<?php
					$type1 = $type;

					switch ($type1) {
					    case "botanical_name":?>

					    <?php if(!empty($_GET['atoz'])): ?>
					       
							<?php 

								$atoz = $_GET['atoz'];  

				    			$test = get_field('botanical_name');

				    			$permanlink = get_the_permalink();

						 		$first_letter = SUBSTR($test,0,1);

						 		if ($first_letter == $atoz){

						 			echo "<div class='grid'>";
				 					the_post_thumbnail('thumbnail');
						 			echo "<p>".'1'."</p>";
						 			echo "<h3>"."<a href='".$permanlink."'>".$test."</a>"."</h3>";
						 			echo "</div>";
						 		}

							 ?>
						 	
							<?php else: ?>

							<div class="grid">
									
								<?php the_post_thumbnail('thumbnail'); ?>	

								<p>1</p>
								<h3><a href="<?php the_permalink(); ?>"><?php the_field('botanical_name') ?></a></h3>
							</div>

						<?php endif; ?>

	
					        <?php break; ?>

					        <?php case "common_name": ?>

					        <?php if(!empty($_GET['atoz'])): ?>
					       
							<?php 

								$atoz = $_GET['atoz'];  

				    			$test = get_field('common_name');

				    			$permanlink = get_the_permalink();

						 		$first_letter = SUBSTR($test,0,1);

						 		if ($first_letter == $atoz){
						 			echo "<div class='grid'>";
				 					the_post_thumbnail('thumbnail');
						 			echo "<p>".'1'."</p>";
						 			echo "<h3>"."<a href='".$permanlink."'>".$test."</a>"."</h3>";
						 			echo "</div>";
						 		}

							 ?>

							 <?php else: ?>
					    			

			 				<div class="grid">
									
								<?php the_post_thumbnail('thumbnail'); ?>	

								<p>1</p>
								<h3><a href="<?php the_permalink(); ?>"><?php the_field('common_name') ?></a></h3>
							</div>
							
							<?php endif; ?>

					        <?php break; ?>

					        <?php case "title": ?>

					        <?php if(!empty($_GET['atoz'])): ?>
					       
							<?php 

								$atoz = $_GET['atoz'];  

				    			$test = get_the_title();
				    			$permanlink = get_the_permalink();

						 		$first_letter = SUBSTR($test,0,1);

						 		if ($first_letter == $atoz){
						 			echo "<div class='grid'>";
				 					the_post_thumbnail('thumbnail');
						 			echo "<p>".'1'."</p>";
						 			echo "<h3>"."<a href='".$permanlink."'>".$test."</a>"."</h3>";
						 			echo "</div>";
						 		}

							 ?>
					    		
					    	 <?php else: ?>	

							<div class="grid">
									
								<?php the_post_thumbnail('thumbnail'); ?>	

								<p>1</p>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
							</div>
		
							<?php endif; ?>
					        
					        <?php break; ?>

					   <?php default:?>

				   			<div class="grid">
									
								<?php the_post_thumbnail('thumbnail'); ?>	

								<p>1</p>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
							</div>

							<?php } ?>

				<?php endwhile; ?>

				<?php 

					echo paginate_links(array(

					'total' => $max,

						)); ?>

				
				<?php else: ?>

					<h1>No Post Found</h1>

			<?php endif; ?>

			<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
			
			<div class="clear"></div>


		</main><!-- #main -->
		</div><!-- #primary -->
<?php get_footer(); ?>



