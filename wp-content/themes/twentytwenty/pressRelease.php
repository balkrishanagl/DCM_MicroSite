<?php 
 /* Template Name: Press Release */

 get_header('new');
?>
		<div class="sec-breadcrumb">
			<div class="container">
				<ol class="breadcrumb mb-0">
				  <li class="breadcrumb-item"><a href="#"><i class="home-icon"></i>Home</a></li>
				  <li class="breadcrumb-item"><a href="#">Media and Contact</a></li>
				  <li class="breadcrumb-item active"><a href="#">Press Release</a></li>
				</ol>
			</div>
		</div>
		<div class="nav-fill-custom">
			<div class="container">
				<ul class="nav nav-pills nav-fill">
				  <li class="nav-item">
				    <a href="javascript:void(0)" class="nav-link active">Press Release</a>
				  </li>
				  <li class="nav-item">
				    <a href="javascript:void(0)" class="nav-link">In the News</a>
				  </li>
				  <li class="nav-item">
				    <a href="javascript:void(0)" class="nav-link">Social Media Updates</a>
				  </li>
				  <li class="nav-item">
				    <a href="javascript:void(0)" class="nav-link">Contact Us</a>
				  </li>
				</ul>
			</div>
		</div>
		<div class="tab-content tab-content-custom">
		  <div class="tab-pane fade show active">
		  	<div class="container">(
		  			  		<h1 class="about-title text-center press-title"><?php get_the_title(); ?></h1>
		  		<ul class="list-group list-press rounded-0">
		  			<?php 
		  				$args = array(
						        'post_type' => 'press-release', 'posts_per_page' => -1, 'order' => 'DESC');
						   $loop = new WP_Query( $args );
						   // while ( $loop->have_posts() ) : $loop->the_post();
		  			?>
		  		  <li class="list-group-item d-flex align-items-center">
		  		  	<div class="flex-grow-1">
		  		  	  <p class="list-press-text">
		  		  	  	DCM Shriram Ltd extends 100 Oxygen Concentrators to district 
		  		  	  	administration
		  		  	  </p>
		  		  	  <p class="list-press-sub-text">Nafa Nuksan, <span class="font-italic">05/10/2021</span></p>
		  		  	</div>
		  		  	<div class="flex-shrink-0">
		  		  	  <img src="images/pdf-icon1.png" alt="" title="">
		  		  	</div>
		  		  </li>
		  		  <li class="list-group-item d-flex align-items-center">
		  		  	<div class="flex-grow-1">
		  		  	  <p class="list-press-text">
		  		  	  	DCM Shriram Ltd extends 100 Oxygen Concentrators to district 
		  		  	  	administration
		  		  	  </p>
		  		  	  <p class="list-press-sub-text">Kota Bureau, <span class="font-italic">05/10/2021</span></p>
		  		  	</div>
		  		  	<div class="flex-shrink-0">
		  		  	  <img src="images/pdf-icon1.png" alt="" title="">
		  		  	</div>
		  		  </li>
		  		  <li class="list-group-item d-flex align-items-center">
		  		  	<div class="flex-grow-1">
		  		  	  <p class="list-press-text">
		  		  	  	DCM Shriram Ltd extends 100 Oxygen Concentrators to district 
		  		  	  	administration
		  		  	  </p>
		  		  	  <p class="list-press-sub-text">Nafa Nuksan, <span class="font-italic">05/10/2021</span></p>
		  		  	</div>
		  		  	<div class="flex-shrink-0">
		  		  	  <img src="images/pdf-icon1.png" alt="" title="">
		  		  	</div>
		  		  </li>
		  		  <li class="list-group-item d-flex align-items-center">
		  		  	<div class="flex-grow-1">
		  		  	  <p class="list-press-text">
		  		  	  	Fenesta expands retail presence in Jhansi
		  		  	  </p>
		  		  	  <p class="list-press-sub-text">Dainik Bhaskar,<span class="font-italic">07/05/2021</span></p>
		  		  	</div>
		  		  	<div class="flex-shrink-0">
		  		  	  <img src="images/pdf-icon1.png" alt="" title="">
		  		  	</div>
		  		  </li>
		  		  <li class="list-group-item d-flex align-items-center">
		  		  	<div class="flex-grow-1">
		  		  	  <p class="list-press-text">
		  		  	  	DCM Shriram Q4 net up 15% to Rs232 cr
		  		  	  </p>
		  		  	  <p class="list-press-sub-text">The Hans India,<span class="font-italic">05/15/2021</span></p>
		  		  	</div>
		  		  	<div class="flex-shrink-0">
		  		  	  <img src="images/pdf-icon1.png" alt="" title="">
		  		  	</div>
		  		  </li>
		  		  <li class="list-group-item d-flex align-items-center">
		  		  	<div class="flex-grow-1">
		  		  	  <p class="list-press-text">
		  		  	  	DCM Shriram to invest Rs 1,000 crore in Chemicals Biz
		  		  	  </p>
		  		  	  <p class="list-press-sub-text">The Economic Times,<span class="font-italic">2/03/2021</span></p>
		  		  	</div>
		  		  	<div class="flex-shrink-0">
		  		  	  <img src="images/pdf-icon1.png" alt="" title="">
		  		  	</div>
		  		  </li>
		  		</ul>
		  		<!-- pagination -->
		  		<ul class="pagination justify-content-center pagination-custom">
		  		  <li class="page-item">
		  		    <a class="page-link" href="#">
		  		      <img src="images/vid-prev-arrow-hover.png" alt="" title="">
		  		    </a>
		  		  </li>
		  		  <li class="page-item"><a class="page-link page-link-prev" href="#">Previous</a></li>
		  		  <li class="page-item"><a class="page-link" href="#">1</a></li>
		  		  <li class="page-item active"><a class="page-link" href="#">2</a></li>
		  		  <li class="page-item"><a class="page-link" href="#">3</a></li>
		  		  <li class="page-item"><a class="page-link" href="#">4</a></li>
		  		  <li class="page-item"><a class="page-link" href="#">5</a></li>
		  		  <li class="page-item"><a class="page-link" href="#">.......10</a></li>
		  		  <li class="page-item"><a class="page-link page-link-next" href="#">Next</a></li>
		  		  <li class="page-item">
		  		    <a class="page-link" href="#" aria-label="Next">
		  		      <img src="images/vid-next-arrow-hover.png" alt="" title="">
		  		    </a>
		  		  </li>
		  		</ul>
		  	</div>
		  </div>
		</div>
<?php 
get_footer('new');
?>