<div id="social-icons" class="col-md-5 col-xs-12">
<?php if ( of_get_option('facebook', true) != "") { ?>
				 <a target="_blank" href="<?php echo esc_url(of_get_option('facebook', true)); ?>" title="Facebook" ><img src="<?php echo get_template_directory_uri()."/images/social/default/facebook.png"; ?>"></a>
	             <?php } ?>
	            <?php if ( of_get_option('twitter', true) != "") { ?>
				 <a target="_blank" href="<?php echo esc_url("http://twitter.com/".of_get_option('twitter', true)); ?>" title="Twitter" ><img src="<?php echo get_template_directory_uri()."/images/social/default/twitter.png"; ?>"></a>
	             <?php } ?>
	             <?php if ( of_get_option('google', true) != "") { ?>
				 <a target="_blank" href="<?php echo esc_url(of_get_option('google', true)); ?>" title="Google Plus" ><img src="<?php echo get_template_directory_uri()."/images/social/default/google.png"; ?>"></a>
	             <?php } ?>
	             <?php if ( of_get_option('feedburner', true) != "") { ?>
				 <a target="_blank" href="<?php echo esc_url(of_get_option('feedburner', true)); ?>" title="RSS Feeds" ><img src="<?php echo get_template_directory_uri()."/images/social/default/rss.png"; ?>"></a>
	             <?php } ?>
	             <?php if ( of_get_option('instagram', true) != "") { ?>
				 <a target="_blank" href="<?php echo esc_url(of_get_option('instagram', true)); ?>" title="Instagram" ><img src="<?php echo get_template_directory_uri()."/images/social/default/instagram.png"; ?>"></a>
	             <?php } ?>
	             <?php if ( of_get_option('flickr', true) != "") { ?>
				 <a target="_blank" href="<?php echo esc_url(of_get_option('flickr', true)); ?>" title="Flickr" ><img src="<?php echo get_template_directory_uri()."/images/social/default/flickr.png"; ?>"></a>
	             <?php } ?>
	             <?php if ( of_get_option('linkedin', true) != "") { ?>
				 <a target="_blank" href="<?php echo esc_url(of_get_option('linkedin', true)); ?>" title="Linked In" ><img src="<?php echo get_template_directory_uri()."/images/social/default/linkedin.png"; ?>"></a>
	             <?php } ?>
	             <?php if ( of_get_option('pinterest', true) != "") { ?>
				 <a target="_blank" href="<?php echo esc_url(of_get_option('pinterest', true)); ?>" title="Pinterest" ><img src="<?php echo get_template_directory_uri()."/images/social/default/pinterest.png"; ?>"></a>
	             <?php } ?>
	             <?php if ( of_get_option('youtube', true) != "") { ?>
				 <a target="_blank" href="<?php echo esc_url(of_get_option('youtube', true)); ?>" title="YouTube" ><img src="<?php echo get_template_directory_uri()."/images/social/default/youtube.png"; ?>"></a>
	             <?php } ?>
</div> 