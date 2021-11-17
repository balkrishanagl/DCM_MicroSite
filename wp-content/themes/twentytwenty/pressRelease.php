<?php 
 /* Template Name: Press Release */

 get_header('new');
 global $post;
?>
<section class="banner">
			<div class="position-relative bannerInn">
				<img src="<?php echo get_field('desktop_banner', $post->ID) ?>" alt="" title="" class="img-fluid d-none d-md-block">
				<img src="<?php echo get_field('mobile_banner', $post->ID) ?>" alt="" title="" class="img-fluid d-block d-md-none">
			</div>
			<?php include('social.php'); ?>
			<!-- <ul class="list-unstyled mb-0 list-social list-social-inn">
				<li>
					<a href=""><i class="fb-con"></i></a>
				</li>
				<li>
					<a href=""><i class="twitter-con"></i></a>
				</li>
				<li>
					<a href=""><i class="utube-con"></i></a>
				</li>
			</ul> -->
	</section>
		<div class="sec-breadcrumb">
			<div class="container">
				<ol class="breadcrumb mb-0">
				  <li class="breadcrumb-item"><a href="<?php echo home_url('/') ?>"><i class="home-icon"></i>Home</a></li>
				  <li class="breadcrumb-item"><a href="#">Media and Contact</a></li>
				  <li class="breadcrumb-item active"><a href="#">Press Release</a></li>
				</ol>
			</div>
		</div>
		<div class="nav-fill-custom">
			<div class="container">
				<ul class="nav nav-pills nav-fill">
				  <li class="nav-item">
				    <a href="<?php echo get_permalink($post->ID); ?>" class="nav-link active">Press Release</a>
				  </li>
				  <li class="nav-item">
				    <a href="javascript:void(0)" class="nav-link">In the News</a>
				  </li>
				  <li class="nav-item">
				    <a href="javascript:void(0)" class="nav-link">Social Media Updates</a>
				  </li>
				  <li class="nav-item">
				    <a href="javascript:void(0)" class="nav-link">Contact Us</a>
				  </li>
				</ul>
			</div>
		</div>
		<div class="tab-content tab-content-custom">
		  <div class="tab-pane fade show active">
		  	<div class="container">
		  			  		<h1 class="about-title text-center press-title"><?php echo get_the_title(); ?></h1>
		  		<ul class="list-group list-press rounded-0">
		  			<?php 
		  						global $post;								
								$display_count = 2;
								$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
								$offset = ( $paged - 1 ) * $display_count;
		  				$args = array('post_type' => 'press_release', 'posts_per_page' => $display_count, 'paged' => $paged, 'offset' => $offset, 'orderby' => 'id','order' => 'DESC');
						   $loop = new WP_Query( $args );
					    	if($loop->have_posts()) { 
						   		while ( $loop->have_posts() ) : $loop->the_post();
		  					?>
						  		  <li class="list-group-item d-flex align-items-center">
						  		  	<div class="flex-grow-1">
						  		  	  <p class="list-press-text">
						  		  	  	<?php echo get_the_title(); ?>
						  		  	  </p>
						  		  	  <p class="list-press-sub-text"><?php echo get_field('person_name', $loop->post->ID); ?><span class="font-italic"><?php echo get_field('date', $loop->post->ID); ?></span></p>
						  		  	</div>
						  		  	<div class="flex-shrink-0">
						  		  	  <a href="<?php echo get_field('file', $loop->post->ID); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pdf-icon1.png" alt="" title=""></a>
						  		  	</div>
						  		  </li>
						  		<?php endwhile; 
						  				wp_reset_postdata();
			  		  	 	} 
			  		  	 	?>

					  		</ul>
					  		<!-- pagination -->
					  		<?php 
					  		if (function_exists("cq_pagination")) {
							
							  cq_pagination($loop->max_num_pages); 
						}

					?>
		  		<!-- <ul class="pagination justify-content-center pagination-custom">
		  			
		  		  <li class="page-item">
		  		    <a class="page-link" href="#">
		  		      <img src="images/vid-prev-arrow-hover.png" alt="" title="">
		  		    </a>
		  		  </li>
		  		  <li class="page-item"><a class="page-link page-link-prev" href="#">Previous</a></li>
		  		  <li class="page-item"><a class="page-link" href="#">1</a></li>
		  		  <li class="page-item active"><a class="page-link" href="#">2</a></li>
		  		  <li class="page-item"><a class="page-link" href="#">3</a></li>
		  		  <li class="page-item"><a class="page-link" href="#">4</a></li>
		  		  <li class="page-item"><a class="page-link" href="#">5</a></li>
		  		  <li class="page-item"><a class="page-link" href="#">.......10</a></li>
		  		  <li class="page-item"><a class="page-link page-link-next" href="#">Next</a></li>
		  		  <li class="page-item">
		  		    <a class="page-link" href="#" aria-label="Next">
		  		      <img src="images/vid-next-arrow-hover.png" alt="" title="">
		  		    </a>
		  		  </li>
		  		</ul> -->
		  	</div>
		  </div>
		</div>
<?php 
get_footer('new');
?>