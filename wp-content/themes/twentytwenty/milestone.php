<?php 
 /* Template Name: Milestone */

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
				  <li class="breadcrumb-item"><a href="<?php echo home_url('/') ?>">"><i class="home-icon"></i>Home</a></li>
				  <li class="breadcrumb-item"><a href="#">Who We are</a></li>
				  <li class="breadcrumb-item active"><a href="#"><?php echo get_the_title(); ?></a></li>
				</ol>
			</div>
		</div>
	<?php include('howWeAre_pagesLink.php'); ?>
	<div class="tab-content tab-content-custom">
			  <div class="tab-pane fade show active" id="pills-leaership">
			  	<div class="container">
	  		  	<h1 class="about-title text-center tab-content-custom-title"><?php echo get_the_title(); ?></h1>

	  		  	<ul class="timeline">
	  		  		<!-- Item 1 -->
	  		  		<li class="pt-0">
	  		  			<div class="direction-l">
	  		  				<div class="flag-wrapper">
	  		  					<span class="flag">1997</span>
	  		  				</div>
	  		  				<div class="flag-hr"></div>
	  		  				<div class="card rounded-0 border-0 card-direction">
	  		  					<img src="images/img-1997.jpg" alt="" title="" class="img-fluid">
	  		  					<div class="card-body">
	  		  						<p class="card-direction-text mb-0">Commencement of First Sugar unit at Ajbapur</p>
	  		  					</div>
	  		  				</div>
	  		  			</div>
	  		  		</li>
	  		  	  
	  		  		<!-- Item 2 -->
	  		  		<li class="pt-0 direction-r-negative">
	  		  			<div class="direction-r">
	  		  				<div class="flag-wrapper">
	  		  					<span class="flag">2002</span>
	  		  				</div>
	  		  				<div class="flag-hr"></div>
	  		  				<div class="card rounded-0 border-0 card-direction">
	  		  					<img src="images/img-2002.jpg" alt="" title="" class="img-fluid">
	  		  					<div class="card-body">
	  		  						<p class="card-direction-text mb-0">Acquisition of Rupapur Sugar unit</p>
	  		  					</div>
	  		  				</div>
	  		  			</div>
	  		  		</li>

	  		  		<!-- Item 3 -->
	  		  		<li class="pt-0 direction-l-negative">
	  		  			<div class="direction-l">
	  		  				<div class="flag-wrapper">
	  		  					<span class="flag">2005</span>
	  		  				</div>
	  		  				<div class="flag-hr"></div>
	  		  				<div class="card rounded-0 border-0 card-direction">
	  		  					<img src="images/img-2005-1.jpg" alt="" title="" class="img-fluid">
	  		  					<div class="card-body">
	  		  						<p class="card-direction-text mb-0">Commission of Sugar plants at Loni</p>
	  		  					</div>
	  		  				</div>
	  		  			</div>
	  		  		</li>
	  		  		<!-- Item 4 -->
	  		  		<li class="pt-0 direction-r-negative">
	  		  			<div class="direction-r">
<!-- 	  		  				<div class="flag-wrapper">
	  		  					<span class="flag">2002</span>
	  		  				</div> -->
	  		  				<div class="flag-hr"></div>
	  		  				<div class="card rounded-0 border-0 card-direction">
	  		  					<img src="images/img-2005-2.jpg" alt="" title="" class="img-fluid">
	  		  					<div class="card-body">
	  		  						<p class="card-direction-text mb-0">Commission of Sugar plants at Hariawan, Expansion at Ajbapur</p>
	  		  					</div>
	  		  				</div>
	  		  			</div>
	  		  		</li>
	  		  	  <!-- Item 5 -->
	  		  	  <li class="pt-0 direction-l-negative">
	  		  	  	<div class="direction-l">
	  		  	  		<div class="flag-wrapper">
	  		  	  			<span class="flag">2014</span>
	  		  	  		</div>
	  		  	  		<div class="flag-hr"></div>
	  		  	  		<div class="card rounded-0 border-0 card-direction">
	  		  	  			<img src="images/img-2014.jpg" alt="" title="" class="img-fluid">
	  		  	  			<div class="card-body">
	  		  	  				<p class="card-direction-text mb-0">Food Safety System Certification for Ajbapur & Loni unit</p>
	  		  	  			</div>
	  		  	  		</div>
	  		  	  	</div>
	  		  	  </li>
	  		  	  <!-- Item 6 -->
	  		  	  <li class="pt-0">
	  		  	  	<div class="direction-l mt150">
	  		  	  		<div class="flag-hr"></div>
	  		  	  		<div class="card rounded-0 border-0 card-direction">
	  		  	  			<img src="images/img-2017-2.jpg" alt="" title="" class="img-fluid">
	  		  	  			<div class="card-body">
	  		  	  				<p class="card-direction-text mb-0">Global Agriculture Leadership Award for CSR Leadership by Indian Council of Food and Agriculture</p>
	  		  	  			</div>
	  		  	  		</div>
	  		  	  	</div>
	  		  	  	<div class="direction-r direction-r-negative">
	  		  	  		<div class="flag-wrapper">
	  		  	  			<span class="flag">2017</span>
	  		  	  		</div>
	  		  	  		<div class="flag-hr"></div>
	  		  	  		<div class="card rounded-0 border-0 card-direction">
	  		  	  			<img src="images/img-2017-1.jpg" alt="" title="" class="img-fluid">
	  		  	  			<div class="card-body">
	  		  	  				<p class="card-direction-text mb-0">Commissioning of Distillery at Hariawan</p>
	  		  	  			</div>
	  		  	  		</div>
	  		  	  	</div>
	  		  	  </li>
	  		  	  <!-- Item 7 -->
	  		  	  <li class="pt-0">
	  		  	  	<div class="direction-l">
	  		  	  		<div class="flag-wrapper">
	  		  	  			<span class="flag">2018</span>
	  		  	  		</div>
	  		  	  		<div class="flag-hr"></div>
	  		  	  		<div class="card rounded-0 border-0 card-direction">
	  		  	  			<img src="images/img-2018.jpg" alt="" title="" class="img-fluid">
	  		  	  			<div class="card-body">
	  		  	  				<p class="card-direction-text mb-0">CII National Award for Excellence in Water Management in “Beyond the Fence”. Presented during CII - Water Innovation Summit held in Delhi</p>
	  		  	  			</div>
	  		  	  		</div>
	  		  	  	</div>
	  		  	  	<div class="direction-r mt230">
	  		  	  		<div class="flag-hr"></div>
	  		  	  		<div class="card rounded-0 border-0 card-direction">
	  		  	  			<img src="images/img-2018-1.jpg" alt="" title="" class="img-fluid">
	  		  	  			<div class="card-body">
	  		  	  				<p class="card-direction-text mb-0">Expansion of cane crushing 5000 TCD & Co gen power 30 MW at Hariawan</p>
	  		  	  			</div>
	  		  	  		</div>
	  		  	  	</div>
	  		  	  	<div class="direction-l mt85">
	  		  	  		<div class="flag-hr"></div>
	  		  	  		<div class="card rounded-0 border-0 card-direction">
	  		  	  			<img src="images/img-2018-2.jpg" alt="" title="" class="img-fluid">
	  		  	  			<div class="card-body">
	  		  	  				<p class="card-direction-text mb-0">Sugar Technologist Association of India (STAI) - – Industry Excellence Award</p>
	  		  	  			</div>
	  		  	  		</div>
	  		  	  	</div>
	  		  	  	<div class="direction-r mt85">
	  		  	  		<div class="flag-hr"></div>
	  		  	  		<div class="card rounded-0 border-0 card-direction">
	  		  	  			<img src="images/img-2018-3.jpg" alt="" title="" class="img-fluid">
	  		  	  			<div class="card-body">
	  		  	  				<p class="card-direction-text mb-0">Best Partnership Award - by Solidaridad, a Netherlands based organization and also a partner in DCM Shriram Ltd’s Meetha Sona Project</p>
	  		  	  			</div>
	  		  	  		</div>
	  		  	  	</div>
	  		  	  	<div class="direction-l mt85">
	  		  	  		<div class="flag-hr"></div>
	  		  	  		<div class="card rounded-0 border-0 card-direction">
	  		  	  			<img src="images/img-2018-4.jpg" alt="" title="" class="img-fluid">
	  		  	  			<div class="card-body">
	  		  	  				<p class="card-direction-text mb-0">Halal Certificate</p>
	  		  	  			</div>
	  		  	  		</div>
	  		  	  	</div>
	  		  	  </li>
	  		  	  <!-- Item 8 -->
	  		  	  <li class="pt-0 order-change1">
	  		  	  	<div class="direction-l mt230">
	  		  	  		<div class="flag-hr"></div>
	  		  	  		<div class="card rounded-0 border-0 card-direction">
	  		  	  			<img src="images/img-2019.jpg" alt="" title="" class="img-fluid">
	  		  	  			<div class="card-body">
	  		  	  				<p class="card-direction-text mb-0">Bonsucro Inspire Awards 2019 for Inspiring Sustainability Partnerships at Bonsucro Global Week</p>
	  		  	  			</div>
	  		  	  		</div>
	  		  	  	</div>
	  		  	  	<div class="direction-r">
	  		  	  		<div class="flag-wrapper">
	  		  	  			<span class="flag">2019</span>
	  		  	  		</div>
	  		  	  		<div class="flag-hr"></div>
	  		  	  		<div class="card rounded-0 border-0 card-direction">
	  		  	  			<img src="images/img-2019-1.jpg" alt="" title="" class="img-fluid">
	  		  	  			<div class="card-body">
	  		  	  				<p class="card-direction-text mb-0">Bonsucro Inspire Awards 2019 for Inspiring Sustainability Partnerships at Bonsucro Global Week</p>
	  		  	  			</div>
	  		  	  		</div>
	  		  	  	</div>
	  		  	  </li>
  	  		  	  <!-- Item 9 -->
  	  		  	  <li class="pt-0 mt-3">
  	  		  	  	<div class="direction-l">
  	  		  	  		<div class="flag-wrapper">
  	  		  	  			<span class="flag">2020</span>
  	  		  	  		</div>
  	  		  	  		<div class="flag-hr"></div>
  	  		  	  		<div class="card rounded-0 border-0 card-direction">
  	  		  	  			<img src="images/img-2020.jpg" alt="" title="" class="img-fluid">
  	  		  	  			<div class="card-body">
  	  		  	  				<p class="card-direction-text mb-0">CII National Award for Excellence in Water Management for its project implementation at Sugar catchment areas of Lakhimpur and Hardoi district, Uttar Pradesh</p>
  	  		  	  			</div>
  	  		  	  		</div>
  	  		  	  	</div>
  	  		  	  	<div class="direction-r mt230">
  	  		  	  		<div class="flag-hr"></div>
  	  		  	  		<div class="card rounded-0 border-0 card-direction">
  	  		  	  			<img src="images/img-2020-1.jpg" alt="" title="" class="img-fluid">
  	  		  	  			<div class="card-body">
  	  		  	  				<p class="card-direction-text mb-0">Special Recognition Award at the CII National Competition and Summit in LEAN</p>
  	  		  	  			</div>
  	  		  	  		</div>
  	  		  	  	</div>
  	  		  	  	<div class="direction-l mt85">
  	  		  	  		<div class="flag-hr"></div>
  	  		  	  		<div class="card rounded-0 border-0 card-direction">
  	  		  	  			<img src="images/img-2020-2.jpg" alt="" title="" class="img-fluid">
  	  		  	  			<div class="card-body">
  	  		  	  				<p class="card-direction-text mb-0">Kosher certificate to Hariawan & Loni units</p>
  	  		  	  			</div>
  	  		  	  		</div>
  	  		  	  	</div>
  	  		  	  	<div class="direction-r mt110">
  	  		  	  		<div class="flag-hr"></div>
  	  		  	  		<div class="card rounded-0 border-0 card-direction">
  	  		  	  			<img src="images/img-2020-3.jpg" alt="" title="" class="img-fluid">
  	  		  	  			<div class="card-body">
  	  		  	  				<p class="card-direction-text mb-0">ISO - 9001:2015, 14001:2015, 45001:2018</p>
  	  		  	  			</div>
  	  		  	  		</div>
  	  		  	  	</div>
  	  		  	  </li>
  	  		  	  <!-- Item 9 -->
  	  		  	  <li class="pt-0 mt-3 order-change1">
  	  		  	  	<div class="direction-l mt230">
  	  		  	  		<div class="flag-hr"></div>
  	  		  	  		<div class="card rounded-0 border-0 card-direction">
  	  		  	  			<img src="images/img-2021.jpg" alt="" title="" class="img-fluid">
  	  		  	  			<div class="card-body">
  	  		  	  				<p class="card-direction-text mb-0">BonSucro certification to Ajbapur, Hariawan & Loni</p>
  	  		  	  			</div>
  	  		  	  		</div>
  	  		  	  	</div>
  	  		  	  	<div class="direction-r">
  	  		  	  		<div class="flag-wrapper">
  	  		  	  			<span class="flag">2021</span>
  	  		  	  		</div>
  	  		  	  		<div class="flag-hr"></div>
  	  		  	  		<div class="card rounded-0 border-0 card-direction">
  	  		  	  			<img src="images/img-2021-1.jpg" alt="" title="" class="img-fluid">
  	  		  	  			<div class="card-body">
  	  		  	  				<p class="card-direction-text mb-0">Food Safety System Certification to Hariawan</p>
  	  		  	  			</div>
  	  		  	  		</div>
  	  		  	  	</div>
  	  		  	  </li>

	  		  	</ul>
			  	</div>
			  </div>
			</div>
<?php 
get_footer('new');
?>