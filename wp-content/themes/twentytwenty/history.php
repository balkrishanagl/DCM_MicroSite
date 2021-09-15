<?php 
 /* Template Name: History */

global $post;
 get_header('new');
?>
	<div class="sec-breadcrumb">
			<div class="container">
				<ol class="breadcrumb mb-0">
				  <li class="breadcrumb-item"><a href="#"><i class="home-icon"></i>Home</a></li>
				  <li class="breadcrumb-item"><a href="#">Who We are</a></li>
				  <li class="breadcrumb-item active"><a href="#">History</a></li>
				</ol>
			</div>
		</div>
		<!-- <div class="container"> -->
			<div class="nav-fill-custom">
				<div class="container">
					<ul class="nav nav-pills nav-fill">
					  <li class="nav-item">
					    <a href="javascript:void(0)" class="nav-link">Purpose</a>
					  </li>
					  <li class="nav-item">
					    <a href="history.html" class="nav-link active">History</a>
					  </li>
					  <li class="nav-item">
					    <a href="javascript:void(0)" class="nav-link">Values</a>
					  </li>
					  <li class="nav-item">
					    <a href="javascript:void(0)" class="nav-link">Milestones</a>
					  </li>
					  <li class="nav-item">
					    <a href="leadership-team.html" class="nav-link">Leadership Team</a>
					  </li>
					</ul>
				</div>
			</div>
			<div class="tab-content tab-content-custom">
			  <div class="tab-pane fade show active" id="pills-leaership">
			  	<div class="container">
	  		  	<h1 class="about-title text-center tab-content-custom-title">History</h1>
	  		  	<div class="row g-0 justify-content-center">
	  		  		<div class="col-md-10">
		  		  		<?php echo $post->post_content(); ?>	
	  		  		</div>
	  		  	</div>
			  	</div>
			  </div>
			</div>
<?php 
get_footer('new');
?>