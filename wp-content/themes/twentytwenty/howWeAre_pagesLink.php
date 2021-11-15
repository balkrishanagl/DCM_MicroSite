<?php 
$query = get_child_pages_by_parent_ID(236);
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
// $lastUriSegment = array_pop($uriSegments);

?>

<div class="nav-fill-custom">
	<div class="container">
		<ul class="nav nav-pills nav-fill">
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
		  <li class="nav-item">
		    <a href="<?php echo get_permalink($query->post->ID); ?>" class="nav-link <?php if ($query->post->post_name === $uriSegments[3]){ ?>active <?php } ?>"><?php echo get_the_title($query->post->ID); ?></a>
		  </li>
		  <?php endwhile; wp_reset_postdata(); ?>
		</ul>
	</div>
</div>