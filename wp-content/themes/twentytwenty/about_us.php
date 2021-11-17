<?php 
 /* Template Name: About */

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
				  <li class="breadcrumb-item"><a href="#"><?php echo get_the_title(); ?></a></li>
				  
				</ol>
			</div>
		</div>
		<div class="tab-content tab-content-custom">
			  <div class="tab-pane fade show active" id="pills-leaership">
			  	<div class="container">
	  		  	<h1 class="about-title text-center tab-content-custom-title"><?php echo get_field('title', $post->ID) ?></h1>
	  		  	<div class="row g-0 justify-content-center">
	  		  		<div class="col-md-10">
		  		  		<?php the_content(); ?>	
	  		  		</div>
	  		  	</div>
			  	</div>
			  </div>
			</div>
			<div class="sec-process">
				<h1 class="text-center process-main-title"><?php echo get_field('subtitle', $post->ID) ?></h1>	
				<ul class="list-unstyled d-flex list-process justify-content-center mb-0">
					<li>
						<span class="pro-circle d-flex align-items-center justify-content-center">
							<img src="<?php echo get_field('first_content_image', $post->ID) ?>" alt="" title="" class="img-fluid">
						</span>
						<span class="process-title">Sugar</span>
						<i class="hr-arr"></i>
					</li>
					<li>
						<span class="pro-circle pro-circle2 d-flex align-items-center justify-content-center">
							<img src="<?php echo get_field('above_footer_left_img4', $post->ID) ?>" alt="" title="" class="img-fluid">
						</span>
						<span class="process-title">Ethanol</span>
						<i class="hr-arr"></i>
					</li>
					<li>
						<span class="pro-circle pro-circle6 d-flex align-items-center justify-content-center">
							<img src="<?php echo get_field('above_footer_left_img5', $post->ID) ?>" alt="" title="" class="img-fluid">
						</span>
						<span class="process-title">Power</span>
						<i class="hr-arr"></i>
					</li>
					<li>
						<span class="pro-circle pro-circle3 d-flex align-items-center justify-content-center">
							<img src="<?php echo get_field('above_footer_right_img1', $post->ID) ?>" alt="" title="" class="img-fluid">
						</span>
						<span class="process-title">Molasses</span>
						<i class="hr-arr"></i>
					</li>
					<li>
						<span class="pro-circle d-flex align-items-center justify-content-center">
							<img src="<?php echo get_field('above_footer_right_img2', $post->ID) ?>" alt="" title="" class="img-fluid">
						</span>
						<span class="process-title">Bagasse</span>
						<i class="hr-arr"></i>
					</li>
					<li>
						<span class="pro-circle d-flex align-items-center justify-content-center">
							<img src="<?php echo get_field('above_footer_right_img3', $post->ID) ?>" alt="" title="" class="img-fluid">
						</span>
						<span class="process-title">Press Mud</span>
						<i class="hr-arr"></i>
					</li>
				</ul>
			</div>
		</section>
<section class="about-2">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 align-self-center">
						<h1 class="about-title"><?php echo get_field('first_title', $post->ID) ?></h1>
						<?php echo get_field('third_para', $post->ID) ?>
					</div>
					<div class="col-md-4">
						<img src="<?php echo get_field('left_image', $post->ID) ?>" alt="" title="" class="img-fluid">
					</div>
				</div>

			</div>
		</section>
		<section class="sec-info">
			<div class="container">
				<div class="d-flex flex-column flex-md-row">
				<?php echo get_field('first_section_para', $post->ID) ?>
					<div class="info-circle">
						<div class="position-relative">
							<img src="<?php echo get_field('above_footer_left_img1', $post->ID) ?>" alt="" title="" class="img-fluid d-none d-md-block">
							<img src="<?php echo get_field('above_footer_left_img2', $post->ID) ?>" alt="" title="" class="img-fluid d-block d-md-none mx-width">
							
							<div class="info-content">
								<div class="info-content-img">
									<img src="<?php echo get_field('above_footer_left_img3', $post->ID) ?>" alt="" title="" class="img-fluid mx-auto d-block">
								</div>
								<?php echo get_field('second_title', $post->ID) ?>
								
							</div>
						</div>
					</div>
					<?php echo get_field('second_content', $post->ID) ?>
					
				</div>
				<div class="text-md-center">
					<span class="negative-center">
						<?php echo get_field('second_content_2', $post->ID) ?>
					</span>
				</div>
			</div>
		</section>
<?php 
get_footer('new');
?>