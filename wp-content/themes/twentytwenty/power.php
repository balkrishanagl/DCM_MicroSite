<?php 
 /* Template Name: Power */

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
				  <li class="breadcrumb-item"><a href="#"><i class="home-icon"></i>Home</a></li>
				  <li class="breadcrumb-item"><a href="#">Our Businesses</a></li>
				  <li class="breadcrumb-item active"><a href="#">Power</a></li>
				  
				</ol>
			</div>
		</div>
		<div class="nav-fill-custom">
				<div class="container">
					<ul class="nav nav-pills nav-fill">
					  <li class="nav-item">
					    <a href="javascript:void(0)" class="nav-link">Sugar</a>
					  </li>
					  <li class="nav-item">
					    <a href="ethanol.html" class="nav-link ">Ethanol</a>
					  </li>
					  <li class="nav-item">
					    <a href="power.html" class="nav-link active">Power</a>
					  </li>
					</ul>
				</div>
			</div>
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
			  					<?php the_content(); ?>	
			  				</div>
			  				<div class="col-md-5">
			  					<img src="<?php echo get_field('left_image', $post->ID) ?>" class="img-fluid">
			  				</div>
			  			</div>

			  		</div>
			  	</div>
			  </div>

			  <div class="sec-power">
			  			<div class="container">
			  				<div class="row justify-content-center">
			  					<div class="col-md-10 text-center">
			  						
			  						<?php echo get_field('second_para', $post->ID) ?>			  							
			  						<!-- </div>	 -->
			  					</div>
			  				</div>
			  			</div>
			  		</div>
			</div>
<?php 
get_footer('new');
?>