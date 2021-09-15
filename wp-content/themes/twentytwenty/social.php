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