<!doctype html>
<html lang="en">
	<head>
		 <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <title>DCM - Sugar</title> -->

		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/plugin/3d-carousel/main.css">
		<!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" /> -->
		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<div class="container header-top">
				<div class="d-flex justify-content-between align-items-center">
					<a href="<?php echo home_url('/') ?>" class="logo">
						<img src="<?php echo get_field('logo', 6); ?>" alt="logo" title="" class="img-fluid">
					</a>
					<ul class="list-inline mb-lg-0 header-top-right">
						<li class="list-inline-item">
							<a href="<?php echo get_field('top_header_link_1', 6); ?>">
								<i class="career-icon"></i>
								Careers
							</a>
						</li>
						<li class="list-inline-item">
							<a href="<?php echo get_field('top_header_link_2', 6); ?>">
								<i class="contact-icon"></i>
								Contact
							</a>
						</li>
						<li class="list-inline-item list-inline-item-search">
							<a href="">
								<i class="search-icon"></i>
								<span class="d-none d-md-block">Search</span>
							</a>
						</li>
						<li class="list-inline-item position-relative d-block d-md-none">
							<button class="navbar-toggler" id="test1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon">
									<!-- <img src="images/menu-bar.png" alt="" title=""> -->
								</span>
							</button>     
						</li>
					</ul>     
				</div>

			</div>
			<nav class="navbar navbar-expand-lg navbar-custom">
				<div class="container">
<!-- 					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button> -->
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<?php echo wp_nav_menu(array('menu' => 'Main Menu','theme_location' => 'locations-primary', 
	  			'menu_class' => 'navbar-nav me-md-auto mb-0 mb-lg-0', 'menu_id' => 'navbarSupportedContent', 'items_wrap' => '<ul  class="%2$s">%3$s</ul>', 'walker' => new WPDocs_Walker_Nav_Menu())); ?>
						
						<!-- social -->
<!-- 						<div class="nav-social d-flex d-md-none">
							<a class="mob-menu-fb" href=""><img src="images/mob-menu-fb.png" alt="" title="" class="img-fluid"></a>
							<a class="mob-menu-twitter" href=""><img src="images/mob-menu-twitter.png" alt="" title="" class="img-fluid"></a>
							<a class="mob-menu-utube" href=""><img src="images/mob-menu-utube.png" alt="" title="" class="img-fluid"></a>
							<a class="mob-menu-linkdin" href=""><img src="images/mob-menu-linkdin.png" alt="" title="" class="img-fluid"></a>
						</div> -->
					</div>																								 
				</div>
			</nav>
		</header>
		<section class="banner">
			<div class="position-relative bannerInn">
				<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner.jpg" alt="" title="" class="img-fluid"> -->
				<?php  
						    $args = array(
						        'post_type' => 'slider', 'posts_per_page' => -1, 'order' => 'DESC');
						   $loop = new WP_Query( $args ); ?>
				<div class="pic-wrapper">
			    <?php $i=1; while ( $loop->have_posts() ) : $loop->the_post();
			        
			        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );
				    ?>
					<figure class="pic-<?php echo $i; ?>" style="background:url(<?php echo $image[0]; ?>);">
					</figure>
					<?php $i++; endwhile;
				    ?>
				</div>
				<?php $j=1;while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="banner-caption banner-caption<?php echo $j; ?>">
					<h1 class="banner-caption-title"><?php echo $loop->post->post_title; ?></h1>
					<p class="banner-caption-text mb-0"><?php echo $loop->post->post_content; ?></p>
				</div>

				<?php $j++;
				endwhile;
				 wp_reset_query();
				 ?>
			</div>
			<ul class="list-unstyled mb-0 list-social">
				<?php if(get_field('facebook_link', 6) != ''){ ?>
				<li>
					<a href="<?php echo get_field('facebook_link', 6) ?>"><i class="fb-con"></i></a>
				</li>
				<?php } if(get_field('twitter_link', 6) != ''){ ?>
				<li>
					<a href="<?php echo get_field('twitter_link', 6) ?>"><i class="twitter-con"></i></a>
				</li>
				<?php } if(get_field('youtube_link', 6) != ''){ ?>
				<li>
					<a href="<?php echo get_field('youtube_link',6) ?>"><i class="utube-con"></i></a>
				</li>
				<?php } if(get_field('linkedin_link', 6) != ''){ ?>
				<li>
					<a href="<?php echo get_field('linkedin_link', 6) ?>"><i class="linkedin-con"></i></a>
				</li>
				<?php } ?>
			</ul>
		</section>