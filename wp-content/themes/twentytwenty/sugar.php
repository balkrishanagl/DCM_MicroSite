<?php 
 /* Template Name: Sugar */

 get_header('new');
 global $post;
?>
<section class="banner">
			<div class="position-relative bannerInn">
				<img src="<?php echo get_field('desktop_banner', $post->ID) ?>" alt="" title="" class="img-fluid d-none d-md-block">
				<img src="<?php echo get_field('mobile_banner', $post->ID) ?>" alt="" title="" class="img-fluid d-block d-md-none">
			</div>
			<?php include('social.php'); ?>
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
		<?php include('ourBusiness_pagelink.php'); ?>
			<div class="tab-content tab-content-custom">
			  <div class="tab-pane fade show active">
			  	<div class="farmer-training">
			  		<div class="container">
			  			<div class="row justify-content-between align-items-center">
			  				<div class="col-md-6 ft-start">
			  					<h4 class="ft-start-sub-title about-title"><?php echo get_field('first_title', $post->ID) ?>	</h4>
			  					<h1 class="ft-start-title full-block-title">
			  						<?php echo get_field('subtitle', $post->ID) ?>
			  					</h1>
			  						<?php the_content(); ?>
			  					
			  				</div>
			  				<div class="col-md-5 mb-4 mb-md-0">
			  					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
			  							 if(!empty($image)){ ?>
						  		  	    	<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" class="img-fluid">
						  		  		<?php } ?>
			  								  			
			  				</div>
			  			</div>
			  			<div class="row sec-product sec-product1">
			  				<div class="col-md-5">		
			  				<img src="<?php echo get_field('first_content_image', $post->ID) ?>" class="img-fluid">	  					
			  								
			  				</div>
			  				<div class="col-md-6 supplier-block align-self-center">
			  					<h2 class="ft-start-title full-block-title full-block-title-small">
			  						<?php echo get_field('first_title', $post->ID) ?>
			  					</h2>
			  					<?php echo get_field('first_section_para', $post->ID) ?>
			  					
			  				</div>
			  			</div>
			  		</div>
			  	</div>
			  	<section class="sec-light">
			  		<div class="container">
			  			<div class="row">
			  				<div class="col-md-6 mb-5 mb-md-0">
			  					<h5 class="sec-light-title"><?php echo get_field('above_footer_left_menu', $post->ID) ?></h5>
			  					<p class="sec-light-text"><?php echo get_field('above_footer_left_menu_certified', $post->ID) ?></p>
			  					<ul class="row align-items-end list-inline-custom list-unstyled mb-0">
			  						<li class="col">
			  							<img src="<?php echo get_field('above_footer_left_img1', $post->ID) ?>" alt="" title="" class="img-fluid">
			  						</li>
			  						<li class="col">
			  							<img src="<?php echo get_field('above_footer_left_img2', $post->ID) ?>" alt="" title="" class="img-fluid">
			  						</li>
			  						<li class="col">
			  							<img src="<?php echo get_field('above_footer_left_img3', $post->ID) ?>" alt="" title="" class="img-fluid" style="margin-bottom:7px;">
			  							
			  						</li>
			  						<li class="col">
			  							<img src="<?php echo get_field('above_footer_left_img4', $post->ID) ?>" alt="" title="" class="img-fluid" style="margin-bottom:10px;">
			  							
			  						</li>
			  						<li class="col">
			  							<img src="<?php echo get_field('above_footer_left_img5', $post->ID) ?>" alt="" title="" class="img-fluid" style="margin-bottom:8px;">
			  						</li>
			  					</ul>
			  				</div>
			  				<div class="col-md-4 ms-md-5 ps-md-5">
			  					<h5 class="sec-light-title"><?php echo get_field('above_footer_right_menu', $post->ID) ?></h5>
			  					<p class="sec-light-text"><?php echo get_field('above_footer_right_menu_certified', $post->ID) ?></p>
			  					<ul class="row align-items-end list-inline-custom list-unstyled mb-0 row-cols-6 row-cols-md-3">
			  						<li class="col">
			  							<img src="<?php echo get_field('above_footer_right_img1', $post->ID) ?>" alt="" title="" class="img-fluid">
			  						</li>
			  						<li class="col">
			  							<img src="<?php echo get_field('above_footer_right_img2', $post->ID) ?>" alt="" title="" class="img-fluid">
			  						</li>
			  						<li class="col">
			  							<img src="<?php echo get_field('above_footer_right_img3', $post->ID) ?>" alt="" title="" class="img-fluid" style="margin-bottom:7px;">
			  						</li>
			  					</ul>
			  				</div>
			  			</div>
			  		</div>
			  	</section>
			  </div>
			  <div class="tab-pane fade" id="pills-digitization">...</div>
			  <div class="tab-pane fade" id="pills-mechanization">...</div>
			  <div class="tab-pane fade" id="pills-rd">
			  </div>
			</div>
			<?php 
get_footer('new');
?>