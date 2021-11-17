<?php 
 /* Template Name: Leadership Team */

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
	<?php include('howWeAre_pagesLink.php'); ?>
	<div class="tab-content tab-content-custom">
			  <div class="tab-pane fade show active" id="pills-leaership">
			  	<div class="container">
	  		  	<h1 class="about-title text-center tab-content-custom-title"><?php echo get_the_title(); ?></h1>
	  		  	<?php the_content(); ?>
	  		  	<?php 
	  		  	$count = 1;
	  		  	$args = array('post_type' => 'leadership-team', 'posts_per_page' => -1, 'order' => 'ASC');

    				 $loop = new WP_Query($args);
    				 if($loop->have_posts()) {
    				 	while($loop->have_posts()) : $loop->the_post();
    				 	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );
    				 	if($count%2 != 0){
    				 ?>
	  		  	<div class="d-flex align-items-center flex-column flex-md-row tab-content-custom-list">
	  		  	  <div class="flex-shrink-0">
	  		  	  	<?php if(!empty($image)){ ?>
	  		  	    	<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" class="img-fluid">
	  		  		<?php } ?>
	  		  	  </div>
	  		  	  <div class="flex-grow-1 team-content">
	  		  	  	<h2 class="about-title">
	  		  	  		<?php echo get_the_title(); ?>
	  		  	  		<span class="d-block sub-title"><?php the_excerpt(); ?></span>
	  		  	  	</h2>
	  		  	    <?php the_content(); ?>
	  		  	  </div>
	  		  	</div>
	  		  <?php }else{ ?>
	  		  	<div class="d-flex align-items-center flex-column flex-md-row tab-content-custom-list">
	  		  	  <div class="flex-grow-1 team-content ms-0 order-2 order-md-1">
	  		  	  	<h2 class="about-title">
	  		  	  		<?php echo get_the_title(); ?>
	  		  	  		<span class="d-block sub-title"><?php the_excerpt(); ?></span>
	  		  	  	</h2>
	  		  	    <?php the_content(); ?>
	  		  	  </div>
	  		  	  <div class="flex-shrink-0 team-img order-1 order-md-2">
	  		  	    <?php if(!empty($image)){ ?>
	  		  	    	<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" class="img-fluid">
	  		  		<?php } ?>
	  		  	  </div>
	  		  	</div>
	  		  <?php } $count++; endwhile; } ?>
	  		  	
	  		  	<!-- <div class="d-flex align-items-center flex-column flex-md-row tab-content-custom-list">
	  					<div class="flex-shrink-0">
	  					  <img src="images/ajeet-singh.jpg" alt="Ajeet Singh" title="Ajeet Singh" class="img-fluid">
	  					</div>
	  					<div class="flex-grow-1 team-content">
	  						<h2 class="about-title">
	  							Mr. Ajit. S. Shriram
	  							<span class="d-block sub-title">Joint Managing Director - DCM Shriram Ltd.</span>
	  						</h2>
	  					<p class="about-text">
	  						Mr Ajit S. Shriram did his primary education from Modern School, Delhi. After obtaining his Bachelor’s Degree in Commerce from Osmania University, Hyderabad, he did his MBA from the <strong>International Institute of Management Development</strong>, Lausanne, Switzerland.
	  					</p>
	  					<p class="about-text">
	  						A past President of the Indian <strong>Sugar Mills Association</strong> (ISMA) he is an active member of the CII National Council on Agriculture. Conscientious and meticulous, Ajit Shriram is driven by family values and believes in close ties and teamwork. Youngest amongst the brothers, he makes a great team along with Ajay and Vikram Shriram with a complementary skill set and excellent business sense. He enjoys travelling, photography, and theatre.
	  					</p>
	  					</div>
	  		  	</div>
	  		  	<div class="d-flex align-items-center flex-column flex-md-row tab-content-custom-list">
	  		  	  <div class="flex-grow-1 team-content ms-0 order-2 order-md-1">
	  		  	  	<h2 class="about-title">
	  		  	  		Mr. Roshan Lal Tamak
	  		  	  		<span class="d-block sub-title">Executive Director  & CEO – DCM Shriram Ltd (Sugar Business)</span>
	  		  	  	</h2>
	  		  	    <p class="about-text">
	  		  	    	As Executive Director & CEO, Mr. Roshan Tamak heads the Sugar and Ethanol verticals at DCM Shriram Sugar. He brings with him more than three decades of distinguished professional experience.
	  		  	    </p>
	  		  	    <p class="about-text">
	  		  	    	He has made a mark in the industry in a wide range of assignments. From setting up both green and brown field expansion projects, to managing strategic acquisitions and turning around companies and giving them new impetus.
	  		  	    </p>
	  		  	    <p class="about-text">
	  		  	    	A true champion of income growth for small and marginal farmers, he has led the charge for significant growth in agricultural productivity through adoption of better crop management practices. <strong>His vast experience in running multi-stakeholder partnerships with multilateral agencies, global FMCG majors, civil society organizations, and development banks, gives extra impetus to our sustainability initiatives.</strong>
	  		  	    </p>
	  		  	    <p class="about-text">
	  		  	    	Recognized nationally and globally with many accolades, he is actively engaged in various industry forums and is a widely sought-after speaker and advisor.
	  		  	    </p>
	  		  	  </div>
	  		  	  <div class="flex-shrink-0 team-img order-1 order-md-2">
	  		  	    <img src="images/img-placeholder.jpg" alt="Roshan Lal Tamak" title="Roshan Lal Tamak" class="img-fluid">
	  		  	  </div>
	  		  	</div> -->
			  	</div>
			  </div>
			</div>
<?php 
get_footer('new');
?>