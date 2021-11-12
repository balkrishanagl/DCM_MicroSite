<?php 
 /* Template Name: Partners In Progress */

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
				  <li class="breadcrumb-item"><a href="#">Growing with Growers</a></li>
				  <li class="breadcrumb-item active"><a href="#"><?php echo get_the_title(); ?></a></li>
				</ol>
			</div>
		</div>
		<!-- <div class="container"> -->
			<div class="nav-fill-custom">
				<div class="container">
					<ul class="nav nav-pills nav-fill">
					  <li class="nav-item">
					    <a href="javascript:void(0)" class="nav-link active">Partners in Progress</a>
					  </li>
					  <li class="nav-item">
					    <a href="farmer-training.html" class="nav-link">Farmer Training</a>
					  </li>
					  <li class="nav-item">
					    <a href="javascript:void(0)" class="nav-link">Digitization</a>
					  </li>
					  <li class="nav-item">
					    <a href="javascript:void(0)" class="nav-link">Mechanization</a>
					  </li>
					  <li class="nav-item">
					    <a href="javascript:void(0)" class="nav-link">Research and Development</a>
					  </li>
					</ul>
				</div>
			</div>
			<div class="tab-content tab-content-custom">
			  <div class="tab-pane fade show active">
			  	<div class="container">
			  		<div class="row justify-content-center">
			  			<div class="col-md-10">
			  				<h1 class="about-title tab-content-custom-title title-partners"><?php echo get_the_title(); ?></h1>
			  			</div>	
			  		</div>
			  	</div>
			  	<section class="full-block">
			  		<div class="container">
			  			<div class="row justify-content-center">
			  				<div class="col-md-10">
			  					<div class="full-block-title"><?php echo get_field('sub_heading', $post->ID); ?></div>
			  				</div>
			  			</div>
			  		</div>
			  	</section>
			  	<section class="sec-bottom">
			  		<div class="container">
			  			<div class="row justify-content-center">
			  				<div class="col-md-10">
			  					<div class="row">
			  						<div class="col-md-7 pe-md-5">
			  							<?php the_content(); ?>
			  						</div>
			  						<div class="col-md-5 negative-space">
			  							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
			  							 if(!empty($image)){ ?>
						  		  	    	<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" class="img-fluid">
						  		  		<?php } ?>
			  						</div>
			  					</div>
			  				</div>
			  			</div>
			  		</div>
			  	</section>
			  </div>
			</div>
<?php 
get_footer('new');
?>