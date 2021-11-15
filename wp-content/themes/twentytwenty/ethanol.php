<?php 
 /* Template Name: Ethanol */

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
				  <li class="breadcrumb-item"><a href="<?php echo home_url('/') ?>">"><i class="home-icon"></i>Home</a></li>
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
			  			<div class="row justify-content-between align-items-lg-center">
			  				<div class="col-md-6 ft-start">
			  					<h4 class="ft-start-sub-title about-title"><?php echo get_field('title', $post->ID) ?></h4>
			  					<h1 class="ft-start-title full-block-title">
			  						<?php echo get_field('subtitle', $post->ID) ?>
			  					</h1>
			  					<p class="about-text">
			  						<?php the_content(); ?>	
			  					</p>
			  					<p class="about-text">
			  						<?php echo get_field('second_para', $post->ID) ?>
			  					</p>
			  					<p class="about-lg-text">
			  						<?php echo get_field('third_para', $post->ID) ?>
			  					</p>
			  					
			  				</div>
			  				<div class="col-md-5">
			  					<img src="<?php echo get_field('left_image', $post->ID) ?>"  class="img-fluid">
			  					
			  				</div>
			  			</div>

			  		</div>
			  	</div>
			  </div>
			  
			</div>
			
		

		
<?php 
get_footer('new');
?>