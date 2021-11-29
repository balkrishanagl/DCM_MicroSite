<?php 
 /* Template Name: Meetha Sona */

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
				  <li class="breadcrumb-item"><a href="#">Sustainability</a></li>
				  <li class="breadcrumb-item active"><a href="#"><?php echo get_the_title(); ?></a></li>
				</ol>
			</div>
		</div>
		<div class="nav-fill-custom">
			<div class="container">
				<ul class="nav nav-pills nav-fill">
				  <li class="nav-item">
				    <a href="the-circular-path-forward.html" class="nav-link">The Circular Path Forward</a>
				  </li>
				  <li class="nav-item">
				    <a href="<?php echo get_permalink($post->ID); ?>" class="nav-link active">Meetha Sona</a>
				  </li>
				  <li class="nav-item">
				    <a href="javascript:void(0)" class="nav-link">Key Metrics</a>
				  </li>
				  <li class="nav-item">
				    <a href="javascript:void(0)" class="nav-link">Testimonials</a>
				  </li>
				  <li class="nav-item">
				    <a href="javascript:void(0)" class="nav-link">Safety</a>
				  </li>
				</ul>
			</div>
		</div>
		<div class="tab-content tab-content-custom">
		  <div class="tab-pane fade show active">
		  	<div class="container">
		  		<div class="row">
		  			<div class="col-md-7">
		  				<div class="pe-md-5 mt-md-3">
		  					<h1 class="about-title"><?php echo get_the_title(); ?> Program</h1>
		  					<div class="about-title-sm"><?php echo get_field('sub_heading', $post->ID); ?></div>
		  					<?php the_content(); ?>
		  					
		  				</div>
		  			</div>
		  			<div class="col-md-5">
		  				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
			  			if(!empty($image)){ ?>
			  			<img src="<?php echo $image[0]; ?>" alt="" title="" class="img-fluid">
			  		<?php } ?>
		  			</div>
		  		</div>
		  	</div>
		  	<section class="sec-middle">
		  		<div class="container">
		  			<div class="green-bg py-4">
		  				<?php echo get_field('extra_para', $post->ID); ?>
		  			</div>
		  		</div>
		  	</section>
		  	<section class="sec-information">
		  		<div class="container">
		  			<div class="row justify-content-between">
		  				<div class="col-md col-width">
		  					<div class="left-sidebar">
		  						<ul class="list-unstyled mb-0">
		  							<?php $field = get_field('left_side_section'); ?>
		  							<li>
		  								<span class="left-sidebar-title d-block"><?php echo esc_html( $field['1st_field_title']); ?></span>
		  								<span class="left-sidebar-digit d-block"><?php echo esc_html( $field['1st_field_digit']); ?></span>
		  							</li>
		  							<li>
		  								<span class="left-sidebar-title d-block"><?php echo esc_html( $field['2nd_field_title']); ?></span>
		  								<span class="left-sidebar-digit d-block"><?php echo esc_html( $field['2nd_field_digit']); ?></span>
		  							</li>
		  							<li>
		  								<span class="left-sidebar-title d-block"><?php echo esc_html( $field['3rd_field_title']); ?></span>
		  								<span class="left-sidebar-digit d-block"><?php echo esc_html( $field['3rd_field_digit']); ?></span>
		  							</li>
		  							<li>
		  								<span class="left-sidebar-title d-block"><?php echo esc_html( $field['4th_field_title']); ?></span>
		  								<span class="left-sidebar-digit d-block"><?php echo esc_html( $field['4th_field_digit']); ?></span>
		  							</li>
		  							<li>
		  								<span class="left-sidebar-title d-block"><?php echo esc_html( $field['5th_field_title']); ?></span>
		  								<span class="left-sidebar-digit d-block"><?php echo esc_html( $field['5th_field_digit']); ?></span>
		  							</li>
		  							<li>
		  								<span class="left-sidebar-title d-block"><?php echo esc_html( $field['6th_field_title']); ?></span>
		  								<span class="left-sidebar-digit d-block"><?php echo esc_html( $field['6th_field_digit']); ?></span>
		  							</li>
		  							<li>
		  								<span class="left-sidebar-title d-block"><?php echo esc_html( $field['7th_field_title']); ?></span>
		  								<span class="left-sidebar-digit d-block"><?php echo esc_html( $field['7th_field_digit']); ?>2</span>
		  							</li>
		  							<li>
		  								<span class="left-sidebar-title d-block"><?php echo esc_html( $field['8th_field_title']); ?></span>
		  								<span class="left-sidebar-digit d-block"><?php echo esc_html( $field['8th_field_digit']); ?></span>
		  							</li>
		  						</ul>
		  					</div>
		  				</div>
		  				<div class="col-md-auto mx-auto">
		  					<?php $field = get_field('right_side_section'); ?>
		  					<div class="text-md-center d-none d-md-block mt-negative">
		  						<span class="negative-center negative-center_2 position-relative">
		  							<span class="d-block"><img src="<?php echo esc_html( $field['1st_field_image_left_side']); ?>" alt="" title=""></span>
		  							<span class="list-info-text1"><?php echo $field['1st_field_title_left_side']; ?></span>
		  						</span>
		  					</div>
		  					<div class="d-flex flex-column flex-md-row">
		  						<ul class="list-unstyled list-info-1 list-info-left">
		  							<li class="list-info-left_1">
		  								<span class="d-md-block"><img src="<?php echo esc_html( $field['2nd_field_image_left_side']); ?>" alt="" title=""></span>
		  								<span class="list-info-text1"><?php echo $field['2nd_field_title_left_side']; ?></span>
		  							</li>
		  							<li class="list-info-left_2 position-relative">
		  								<span class="d-md-block"><img src="<?php echo esc_html( $field['3rd_field_image_left_side']); ?>" alt="" title=""></span>
		  								<span class="list-info-text1"><?php echo $field['3rd_field_title_left_side']; ?></span>
		  							</li>
		  							<li class="list-info-left_3 position-relative">
		  								<span class="d-md-block"><img src="<?php echo esc_html( $field['4th_field_image_left_side']); ?>" alt="" title=""></span>
		  								<span class="list-info-text1"><?php echo $field['4th_field_title_left_side']; ?></span>
		  							</li>
		  							<li class="list-info-left_4 position-relative">
		  								<span class="d-md-block">
		  									<img src="<?php echo esc_html( $field['5th_field_image_left_side']); ?>" alt="" title="" class="d-none d-md-block">
		  									<img src="<?php echo esc_html( $field['5th_field_image_mob_left_side']); ?>" alt="" title="" class="d-block d-md-none">
		  								</span> 
		  								<span class="list-info-text1"><?php echo $field['5th_field_title_left_side']; ?></span>
		  							</li>
		  						</ul>
		  						<div class="info-circle info-circle1">
		  							<div class="position-relative">
		  								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/info-circle1.jpg" alt="" title="" class="img-fluid d-none d-md-block">
		  								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/info-circle1.jpg" alt="" title="" class="img-fluid d-block d-md-none mx-width">
		  								
		  								<div class="info-content info-content1">
		  									<div class="info-content-img info-content-img1 mb-2">
		  										<img src="<?php echo esc_html( $field['middle_field_image']); ?>" alt="" title="" class="img-fluid mx-auto d-block">
		  									</div>
		  									<span class="meetha-title text-center"><?php echo get_the_title(); ?></span>
		  									<span class="info-title info-title1 d-block text-center"><?php echo $field['middle_field_line_1']; ?></span>
		  									<span class="info-title info-title1 d-block text-center"><?php echo $field['middle_field_line_2']; ?></span>
		  									<span class="info-title info-title1 d-block text-center"><?php echo $field['middle_field_line_3']; ?></span>
		  								</div>
		  							</div>
		  						</div>
		  						<ul class="list-unstyled list-info-1 list-info-end">
		  							<li class="list-info-end_1 position-relative">
		  								<span class="d-block"><img src="<?php echo esc_html( $field['1st_field_image_right_side']); ?>" alt="" title=""></span>
		  								<span class="list-info-text1"><?php echo $field['1st_field_title_right_side']; ?></span>
		  							</li>
		  							<li class="list-info-end_2 position-relative">
		  								<span class="d-block"><img src="<?php echo esc_html( $field['2nd_field_image_right_side']); ?>" alt="" title=""></span>
		  								<span class="list-info-text1"><?php echo $field['2nd_field_title_right_side']; ?></span>
		  							</li>
		  							<li class="list-info-end_3 position-relative">
		  								<span class="d-block"><img src="<?php echo esc_html( $field['3rd_field_image_right_side']); ?>" alt="" title=""></span>
		  								<span class="list-info-text1"><?php echo $field['3rd_field_title_right_side']; ?></span>
		  							</li>
		  							<li class="list-info-end_4 position-relative">
		  								<span class="d-block">
		  									<img src="<?php echo esc_html( $field['4th_field_image_right_side']); ?>" alt="" title="" class="d-none d-md-block">
		  									<img src="<?php echo esc_html( $field['4th_field_image_mob_right_side']); ?>" alt="" title="" class="d-block d-md-none">
		  								</span>
		  								<span class="list-info-text1"><?php echo $field['4th_field_title_right_side']; ?></span>
		  							</li>
		  						</ul>
		  					</div>
		  					<div class="text-md-center">
		  						<span class="negative-center negative-center_1 position-relative">
		  							<span class="d-block"><img src="<?php echo esc_html( $field['5th_field_image_right_side']); ?>" alt="" title=""></span>
		  							<span class="list-info-text1"><?php echo $field['5th_field_title_right_side']; ?></span>
		  						</span>
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