<?php 
 /* Template Name: History */

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
		<!-- <div class="container"> -->
			<?php include('howWeAre_pagesLink.php');
			//print_r(get_child_pages_by_parent_title(250)); ?>
			<div class="tab-content tab-content-custom">
			  <div class="tab-pane fade show active" id="pills-leaership">
			  	<div class="container">
	  		  	<h1 class="about-title text-center tab-content-custom-title"><?php echo get_the_title(); ?></h1>
	  		  	<div class="row g-0 justify-content-center">
	  		  		<div class="col-md-10">
		  		  		<?php the_content(); ?>	
	  		  		</div>
	  		  	</div>
			  	</div>
			  </div>
			</div>
<?php 
get_footer('new');
?>