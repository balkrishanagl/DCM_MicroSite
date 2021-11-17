<?php 
 /* Template Name: Milestone */

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
				  <li class="breadcrumb-item"><a href="#"><?php echo get_the_title($post->post_parent); ?></a></li>
				  <li class="breadcrumb-item active"><a href="#"><?php echo get_the_title(); ?></a></li>
				</ol>
			</div>
		</div>
	<?php include('howWeAre_pagesLink.php'); ?>
	<div class="tab-content tab-content-custom">
			  <div class="tab-pane fade show active" id="pills-leaership">
			  	<div class="container">
	  		  	<h1 class="about-title text-center tab-content-custom-title"><?php echo get_the_title(); ?></h1>

	  		  	<ul class="timeline">
	  		  		<?php 
	  		  		$term_year = get_terms([
							    'taxonomy' => 'milestone_year',
							    'hide_empty' => false,
							]);
	  		  		//print_r($term_year);
	  		  		$i = 0;
	  		  		$innerdiv = 1;
	  		  		foreach ($term_year as $Termyr) {
	  		  		
	  		  			
			  		  	$count = 1;
			  		  	$args = array('post_type' => 'milestones','posts_per_page' => -1, 'order' => 'DESC',
							        'tax_query' => array(
							            array(
							                'taxonomy' => 'milestone_year',
							                'field' => 'slug',
							                'terms' => $Termyr->slug,
							            ),
							        ),
							     );

		    				 $loop = new WP_Query($args);
		    				 
		    				 if($loop->have_posts()) { 
		    				 	$count = 1;
		    				 	?>
		    				 	
		    				 <?php 	while($loop->have_posts()) : $loop->the_post();
		    				 	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' ); ?> 
	  		  		
	  		  			<li class="pt-0 <?php if($i == 0){ }else { if($i%2 != 0){ ?>direction-r-negative<?php } if($i%2 == 0){ ?>direction-l-negative<?php } } ?>">
	  		  			<div class="direction-<?php if($innerdiv%2 != 0){ ?>l<?php }else{ ?>r<?php } ?>">
	  		  				<?php if($count ==1 ){ ?>
		  		  				<div class="flag-wrapper">
		  		  					<span class="flag"><?php echo $Termyr->slug; ?></span>
		  		  				</div>
	  		  				<?php } ?>
	  		  				<div class="flag-hr"></div>
	  		  				<div class="card rounded-0 border-0 card-direction">
	  		  					<img src="<?php echo $image[0]; ?>" alt="" title="" class="img-fluid">
	  		  					<div class="card-body">
	  		  						<p class="card-direction-text mb-0"><?php the_content(); ?></p>
	  		  					</div>
	  		  				</div>
	  		  			</div>
	  		  		</li>
	  		  	  <?php  
		  		  	  $innerdiv = $innerdiv+1;
		  		  	  $count = $count+1;
		  		  	   endwhile; 
		  		  	    wp_reset_postdata();
		  		  	 	} 
		  		  	 	$i = $i+1; 
		  		  	 }
		    				 ?>
	  		  		
	  		  	</ul>
			  	</div>
			  </div>
			</div>
<?php 
get_footer('new');
?>