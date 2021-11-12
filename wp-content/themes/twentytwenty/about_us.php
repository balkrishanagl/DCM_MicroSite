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
				  <li class="breadcrumb-item"><a href="#"><i class="home-icon"></i>Home</a></li>
				  <li class="breadcrumb-item"><a href="#">About us</a></li>
				  
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
				<?php echo get_field('second_para', $post->ID) ?>
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
							<img src="images/info-circle.png" alt="" title="" class="img-fluid d-none d-md-block">
							<img src="images/info-circle-mob.png" alt="" title="" class="img-fluid d-block d-md-none mx-width">
							
							<div class="info-content">
								<div class="info-content-img">
									<img src="images/kisan-img.png" alt="" title="" class="img-fluid mx-auto d-block">
								</div>
								<span class="info-title d-block text-center">Growers</span>
								<span class="info-title d-block text-center">2.25 lac</span>
							</div>
						</div>
					</div>
					<ul class="list-unstyled list-info text-start list-info-end">
						<li>
							<span class="d-block list-info-title">Ethanol Production</span>
							<span class="list-info-text">Units 2 (Ajbapur & <br> Hariawani- Uttar Pradesh)</span>
						</li>
						<li class="list-info-end2">
							<span class="d-block list-info-title">Crush capacity</span>
							<span class="list-info-text">38000 TCD</span>
						</li>
						<li class="list-info-end3">
							<span class="d-block list-info-title">DISTILLERY CAPACITY</span> 
							<span class="list-info-text">350 KLD</span>
						</li>
						<li class="list-info-end4">
							<span class="d-block list-info-title">ETHANOL PRODUCTION</span>  
							<span class="list-info-text">Annual 140 Million Liters</span>
						</li>
					</ul>
				</div>
				<div class="text-md-center">
					<span class="negative-center">
						<span class="d-block list-info-title">SUGAR PRODUCTION</span>  
						<span class="list-info-text">Annual 650 Million Kilograms</span>
					</span>
				</div>
			</div>
		</section>
<?php 
get_footer('new');
?>