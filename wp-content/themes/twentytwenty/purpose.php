<?php 
 /* Template Name: Purpose */

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
				  <li class="breadcrumb-item"><a href="#">Who We are</a></li>
				  <li class="breadcrumb-item active"><a href="#"><?php echo get_the_title(); ?></a></li>
				</ol>
			</div>
		</div>
		<!-- <div class="container"> -->
			<?php include('howWeAre_pagesLink.php'); ?>
			<div class="tab-content tab-content-custom">
			  <div class="tab-pane fade show active" id="pills-leaership">
			  	<div class="container">
	  		  	<h1 class="about-title text-center tab-content-custom-title"><?php echo get_the_title(); ?></h1>
	  		  	<div class="row g-0 justify-content-center">
	  		  		<div class="col-md-10">
		  		  		<p class="tab-content-custom-text mb40 history-text history-text1 purpose-text">
		  		  			<?php the_content(); ?>
		  		  		</p>
	  		  		</div>
	  		  	</div>
			  	</div>
			  	<div class="sec-green">
			  		<div class="container gimg-space">
			  			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
			  			if(!empty($image)){ ?>
			  			<img src="<?php echo $image[0]; ?>" alt="" title="" class="img-fluid">
			  		<?php } ?>
			  		</div>
			  		<div class="green-bg"></div>
			  	</div>
			  </div>
			</div>
<?php 
get_footer('new');
?>