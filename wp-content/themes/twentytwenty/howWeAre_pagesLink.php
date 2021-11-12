<?php 
$args = array( 'post_type' => 'page' , 'orderby' => 'menu_order' , 'order' => 'ASC' , 'posts_per_page' => 10,'tag_id'=> 4);
$query = new WP_Query( $args );
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$lastUriSegment = array_pop($uriSegments);

?>

<div class="nav-fill-custom">
	<div class="container">
		<ul class="nav nav-pills nav-fill">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
		  <li class="nav-item">
		    <a href="<?php echo get_permalink($query->post->ID); ?>" class="nav-link <?php if (array_pop($uriSegments) == 'history'){ ?>active <?php }else if(array_pop($uriSegments) == 'leadership-team'){ ?>active <?php }else if(array_pop($uriSegments) == 'milestone'){ ?>active <?php }else if(array_pop($uriSegments) == 'values') { ?>active <?php }else{} ?>"><?php echo get_the_title($query->post->ID); ?></a>
		  </li>
		  <?php endwhile; wp_reset_postdata(); ?>
		  <li class="nav-item">
					    <a href="javascript:void(0)" class="nav-link">Values</a>
			</li>

		  <!-- <li class="nav-item">
		    <a href="history.html" class="nav-link">History</a>
		  </li>
		  <li class="nav-item">
		    <a href="javascript:void(0)" class="nav-link">Values</a>
		  </li>
		  <li class="nav-item">
		    <a href="javascript:void(0)" class="nav-link">Milestones</a>
		  </li>
		  <li class="nav-item">
		    <a href="leadership-team.html" class="nav-link">Leadership Team</a>
		  </li> -->
		</ul>
	</div>
</div>