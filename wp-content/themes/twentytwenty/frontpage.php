<?php 
/* Template Name: Home */

get_header('new');
?>
<section class="banner">
			<div class="position-relative bannerInn">
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
			<?php include('social.php'); ?>
		</section>
		<section class="sec-1">
			<div class="container">
				<div class="text-center">
					<p class="main-desc">
						<?php the_field('after_banner_section'); ?>
					</p>
					<a href="<?php the_field('after_banner_section_butten_link'); ?>" class="btn btn-primary rounded-0"><?php the_field('after_banner_section_butten_text'); ?></a>
				</div>
			</div>
		</section>
		<section class="sec-2">
			<div class="container-left">
				<div class="d-flex align-items-start flex-column flex-md-row">
					<div class="nav flex-md-column nav-pills tab-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<h1 class="tab-left-title"><?php the_field('businesses_section_heading'); ?></h1>
						<a href="javascript:void(0)" class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" aria-controls="v-pills-home" aria-selected="true">
							<i class="sugar-tab-icon"></i> <?php echo get_the_title(80); ?>
						</a>
						<a href="javascript:void(0)" class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" aria-controls="v-pills-profile" aria-selected="false">
						<i class="power-tab-icon"></i> <?php echo get_the_title(84); ?>
						</a>
						<a href="javascript:void(0)" class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" aria-controls="v-pills-messages" aria-selected="false">
						<i class="fuel-tab-icon"></i> <?php echo get_the_title(86); ?> <!-- Fuels -->
					</a>
					</div>
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="tab-right d-flex">
								<div class="tab-right-first">
									<h1 class="tab-right-first-title">
										<?php echo get_field('subtitle', 80); ?>
									</h1>
									<p class="tab-right-first-desc">
										<?php echo substr( get_post_field('post_content', 80), 0, 250); ?> ...
									</p>
									<a href="<?php echo get_permalink(80); ?>" class="btn btn-primary rounded-0">Read More</a>
								</div>
								<div class="tab-right-second">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sugar-img.jpg" alt="" title="" class="img-fluid d-none d-md-block">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sugar-img-mob.jpg" alt="" title="" class="img-fluid d-block d-md-none">
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="tab-right d-flex">
								<div class="tab-right-first">
									<h1 class="tab-right-first-title">
										<?php echo get_field('subtitle', 84); ?>
									</h1>
									<p class="tab-right-first-desc">
										<?php echo substr( get_post_field('post_content', 84), 0, 250); ?>.
									</p>
									<a href="<?php echo get_permalink(84); ?>" class="btn btn-primary rounded-0">Read More</a>
								</div>
								<div class="tab-right-second">
									<img src="<?php echo get_field('thumbnail_image_homepage', 84); ?>" alt="" title="" class="img-fluid d-none d-md-block">
									<img src="<?php echo get_field('thumbnail_mobile_homepage', 84); ?>" alt="" title="" class="img-fluid d-block d-md-none">
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="tab-right d-flex">
								<div class="tab-right-first">
									<h1 class="tab-right-first-title">
										<?php echo get_field('subtitle', 86); ?>
									</h1>
									<p class="tab-right-first-desc">
										<?php echo substr( get_post_field('post_content', 86), 0, 250); ?>.
									</p>
									<a href="<?php echo get_permalink(86); ?>" class="btn btn-primary rounded-0">Read More</a>
								</div>
								<div class="tab-right-second">
									<img src="<?php echo get_field('thumbnail_image_homepage', 86); ?>" alt="" title="" class="img-fluid d-none d-md-block">
									<img src="<?php echo get_field('thumbnail_mobile_homepage', 86); ?>" alt="" title="" class="img-fluid d-block d-md-none">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="sec-carousel">
			<div class="container-fluid">
				<div class="carousel-inn">
					<div class="row g-0">
						<div class="col-lg-4 col-xxl-4 col-xxl-custom d-flex justify-content-md-end">
							<div class="item-first">
								<?php the_field('learn_more_about_section_heading'); ?>
							</div>
						</div>
						<div class="col-lg-8 col-xxl-8">
							<div class="owl-carousel" id="carousel-learn">
								<?php
									$args = array( 'post_type' => 'page' , 'orderby' => 'menu_order' , 'order' => 'ASC' , 'posts_per_page' => 10,'tag_id'=> 3);
										$query = new WP_Query( $args );
										while ( $query->have_posts() ) : $query->the_post();
								?>
									<div class="item">
										<div class="item-img position-relative">
											<img src="<?php echo get_field('thumbnail_image_homepage', $query->post->ID); ?>" alt="" title="" class="img-fluid">
											<div class="item-img-caption">
												<div class="item-img-caption-title">
													<?php echo get_field('subtitle', $query->post->ID); ?> <a href="<?php echo get_permalink($query->post->ID); ?>" class="next-arr"></a>
												</div>
												<p class="item-img-caption-desc">
													<?php echo substr( get_post_field('post_content', $query->post->ID), 0, 150); ?> ...
												</p>
											</div>
										</div>
									</div>
								<?php endwhile; ?>
									<!-- <div class="item">
										<div class="item-img position-relative">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cr-2.jpg" alt="" title="" class="img-fluid">
											<div class="item-img-caption">
												<div class="item-img-caption-title">
													Sustainability <br>in Business <a href="javascript:void(0)" class="next-arr"></a>
												</div>
												<p class="item-img-caption-desc">
													Working in harmony to promote wellbeing and prosperity. With a tradition of service to the community put in place by our Founder, DCM Shriram has been at the forefront ...
												</p>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="item-img position-relative">
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cr-1.jpg" alt="" title="" class="img-fluid">
											<div class="item-img-caption">
												<div class="item-img-caption-title">
													Comitment to<br> Society <a href="javascript:void(0)" class="next-arr"></a>
												</div>
												<p class="item-img-caption-desc">
													Working in harmony to promote wellbeing and prosperity. With a tradition of service to the community put in place by our Founder, DCM Shriram has been at the forefront ...
												</p>
											</div>
										</div>
									</div> -->
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<section class="sec-news">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md col-left">
						<div class="card border-0 rounded-0">
							
							<img src="<?php echo get_field('thumbnail_image_homepage', 55); ?>" alt="" title="" class="d-none d-md-block">
							<img src="<?php echo get_field('thumbnail_mobile_homepage', 55); ?>" alt="" title="" class="d-block d-md-none img-fluid">
							<div class="card-body card-body-bg card-body-news">
								<h5 class="card-title d-flex"><?php echo get_the_title('55'); ?> 
									<a href="<?php echo get_permalink(55); ?>" class="ms-auto">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/crd-arrow.png" alt="" title="">
									</a>
								</h5>
								<p class="card-text">
									<?php echo substr( get_post_field('post_content', 55), 0, 116); ?> ...
								</p>
							</div>
						</div>
					</div>
					<div class="col-md col-news-list">
						<div class="list-group list-group-flush list-group-custom">
							<h3 class="d-flex list-group-title">
								<?php $field = get_field('latest_new_section'); echo esc_html( $field['latest_new_heading']); ?>
								<a href="<?php echo esc_html( $field['latest_new_page_url']); ?>" class="ms-auto mt-auto"><span><?php echo esc_html( $field['latest_new_url_text']); ?></span></a>
							</h3>
							<?php  
							    $args = array('post_type' => 'latest_news', 'posts_per_page' => 3, 'order' => 'DESC');
							   $loop = new WP_Query( $args );  
							   while ( $loop->have_posts() ) : $loop->the_post(); 
							?>
							<a href="<?php echo get_field('file'); ?>" class="list-group-item d-flex justify-content-between align-items-center">
								<div>
									<h5 class="list-group-custom-title"><?php echo get_the_title($loop->post->ID); ?></h5>
									<p class="list-group-custom-desc"><?php echo get_field('person_name', $loop->post->ID); ?>, <span><?php echo get_field('date', $loop->post->ID); ?></span></p>
								</div>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pdf-icon.png" alt="" title="">
							</a>
						<?php endwhile; ?>
							<!-- <a href="#" class="list-group-item d-flex justify-content-between align-items-center">
								<div>
									<h5 class="list-group-custom-title">DCM Shriram extends 100 Oxygen Concentrators to administration</h5>
									<p class="list-group-custom-desc">Kota Bureau, <span>05/10/2021</span></p>
								</div>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pdf-icon.png" alt="" title="">
							</a>
							<a href="#" class="list-group-item d-flex justify-content-between align-items-center">
								<div>
									<h5 class="list-group-custom-title">DCM Shriram gives 100 Oxygen concentrators</h5>
									<p class="list-group-custom-desc">Dainik Bhaskar, <span>05/10/2021</span></p>
								</div>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pdf-icon.png" alt="" title="">
							</a> -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="sec-video">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md col-left d-flex flex-column">
						<div class="video-title">Videos</div>
						<div class="mt-auto ms-auto d-arrow">
							<button class="slick-prev slick-arrow arrow-left"></button>
							<button class="slick-next slick-arrow arrow-right"></button>
						</div>
					</div>
					<div class="col-md">
						<?php  
							    $args = array('post_type' => 'videos', 'posts_per_page' => -1, 'order' => 'DESC');
							   $loop = new WP_Query( $args );  $i=1;  $j=1; 
							?>
						<div class="slider-container">
							<div class="slider" id="slider">
								<?php while ( $loop->have_posts() ) : $loop->the_post();
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );
								 ?>
								<div class="slide <?php if($i == 1){ ?>active<?php }else{ ?>next-<?php echo $j; $j++; ?><?php } ?>">
									<img src="<?php echo $image[0]; ?>" alt="" title="" class="img-fluid">
									<a href="javascript:void(0)" class="play-icon" data-bs-toggle="modal" data-bs-target="#myModal<?php echo $i; ?>">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video-icon.png" alt="" title="" class="img-fluid">
									</a>
								</div>
								<?php $i++; endwhile; ?>
								<!-- <div class="slide next-1">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sl-2.jpg" alt="" title="" class="img-fluid">
									<a href="javascript:void(0)" class="play-icon" data-bs-toggle="modal" data-bs-target="#myModal2">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video-icon.png" alt="" title="" class="img-fluid">
									</a>
								</div>
								<div class="slide next-2">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sl-3.jpg" alt="" title="" class="img-fluid">
									<a href="javascript:void(0)" class="play-icon" data-bs-toggle="modal" data-bs-target="#myModal3">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video-icon.png" alt="" title="" class="img-fluid">
									</a>
								</div>
								<div class="slide">
									 <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sl-1.jpg" alt="" title="" class="img-fluid">
									 <a href="javascript:void(0)" class="play-icon" data-bs-toggle="modal" data-bs-target="#myModal1">
									 	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video-icon.png" alt="" title="" class="img-fluid">
									 </a>
								</div> -->
<!--                 <div class="slide">
									7
								</div>
								<div class="slide">
									8
								</div> -->
							</div>
<!--               <div class="dots">
								<span></span>
								<span></span>
								<span class="active"></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div> -->
						</div>

						<div class="carousel-mobile d-block d-md-none">
							<div class="owl-carousel" id="carousel-vid">
							<?php while ( $loop->have_posts() ) : $loop->the_post();
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );
							 ?>
							    <div class="item">
							    	<img src="<?php echo $image[0]; ?>" alt="" title="" class="img-fluid">
							    	<a href="javascript:void(0)" class="play-icon" data-bs-toggle="modal" data-bs-target="#myModal<?php echo $i; ?>">
							    		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video-icon.png" alt="" title="" class="img-fluid">
							    	</a>
							    </div>
							  <?php $i++; endwhile; ?>
				    <!-- <div class="item">
				    	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sl-2.jpg" alt="" title="" class="img-fluid">
				    	<a href="javascript:void(0)" class="play-icon" data-bs-toggle="modal" data-bs-target="#myModal2">
				    		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video-icon.png" alt="" title="" class="img-fluid">
				    	</a>
				    </div>
				    <div class="item">
				    	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sl-3.jpg" alt="" title="" class="img-fluid">
				    	<a href="javascript:void(0)" class="play-icon" data-bs-toggle="modal" data-bs-target="#myModal3">
				    		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video-icon.png" alt="" title="" class="img-fluid">
				    	</a>
				    </div> -->
							</div>
						</div>
						<?php while ( $loop->have_posts() ) : $loop->the_post();
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );
							 ?>
						<div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabe<?php echo $i; ?>">
							<div class="modal-dialog modal-lg modal-dialog-centered">
									<div class="modal-content">
											 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
											<div class="modal-body p-0" id="yt-player">
												<div class="ratio ratio-16x9">
												  <iframe src="<?php the_excerpt(); ?>" title="YouTube video" frameborder="0" allowfullscreen></iframe>
												</div>
											</div>
									</div>
							</div>
						</div>
						<?php $i++; endwhile; ?>
		<!-- <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog modal-lg modal-dialog-centered">
						<div class="modal-content">
								 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
								<div class="modal-body p-0" id="yt-player">
									<div class="ratio ratio-16x9">
									  <iframe src="https://www.youtube.com/embed/hn1Uq3-YCiQ" title="YouTube video" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>
						</div>
				</div>
		</div>
		<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog modal-lg modal-dialog-centered">
						<div class="modal-content">
								 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
								<div class="modal-body p-0" id="yt-player">
									<div class="ratio ratio-16x9">
									  <iframe src="https://www.youtube.com/embed/X7vveogOLE8" title="YouTube video" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>
						</div>
				</div>
		</div> -->
						</div>
					</div>
				</div>
			</div>
		</section>
<?php get_footer('new'); ?>