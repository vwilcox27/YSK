<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package fortunato
 */
?>
	<?php
		$showSocialFooter = get_theme_mod('fortunato_theme_options_socialfooter', '');
		if ($showSocialFooter == 1) {
			$facebookURL = get_theme_mod('fortunato_theme_options_facebookurl', '#');
			$twitterURL = get_theme_mod('fortunato_theme_options_twitterurl', '#');
			$googleplusURL = get_theme_mod('fortunato_theme_options_googleplusurl', '#');
			$linkedinURL = get_theme_mod('fortunato_theme_options_linkedinurl', '#');
			$instagramURL = get_theme_mod('fortunato_theme_options_instagramurl', '#');
			$youtubeURL = get_theme_mod('fortunato_theme_options_youtubeurl', '#');
			$pinterestURL = get_theme_mod('fortunato_theme_options_pinteresturl', '#');
			$tumblrURL = get_theme_mod('fortunato_theme_options_tumblrurl', '#');
			$flickrURL = get_theme_mod('fortunato_theme_options_flickrurl', '#');
			$vkURL = get_theme_mod('fortunato_theme_options_vkurl', '#');
			$xingURL = get_theme_mod('fortunato_theme_options_xingurl', '');
			$redditURL = get_theme_mod('fortunato_theme_options_redditurl', '');
			$skypeNAME = get_theme_mod('fortunato_theme_options_skypename', '');
		}
	?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info smallPart">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'fortunato' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'fortunato' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'fortunato' ), 'Fortunato', '<a target="_blank" href="http://crestaproject.com/downloads/fortunato/" rel="nofollow">CrestaProject</a>' ); ?>
		</div><!-- .site-info -->
		<?php if($showSocialFooter) : ?>
		<div class="site-social-footer smallPart">
			<div class="socialLine">
				<?php if (!empty($facebookURL)) : ?>
					<a href="<?php echo esc_url($facebookURL); ?>" title="<?php esc_attr_e( 'Facebook', 'fortunato' ); ?>"><i class="fa fa-facebook spaceLeftRight"><span class="screen-reader-text"><?php esc_attr_e( 'Facebook', 'fortunato' ); ?></span></i></a>
				<?php endif; ?>
				<?php if (!empty($twitterURL)) : ?>
					<a href="<?php echo esc_url($twitterURL); ?>" title="<?php esc_attr_e( 'Twitter', 'fortunato' ); ?>"><i class="fa fa-twitter spaceLeftRight"><span class="screen-reader-text"><?php esc_attr_e( 'Twitter', 'fortunato' ); ?></span></i></a>
				<?php endif; ?>
				<?php if (!empty($googleplusURL)) : ?>
					<a href="<?php echo esc_url($googleplusURL); ?>" title="<?php esc_attr_e( 'Google Plus', 'fortunato' ); ?>"><i class="fa fa-google-plus spaceLeftRight"><span class="screen-reader-text"><?php esc_attr_e( 'Google Plus', 'fortunato' ); ?></span></i></a>
				<?php endif; ?>
				<?php if (!empty($linkedinURL)) : ?>
					<a href="<?php echo esc_url($linkedinURL); ?>" title="<?php esc_attr_e( 'Linkedin', 'fortunato' ); ?>"><i class="fa fa-linkedin spaceLeftRight"><span class="screen-reader-text"><?php esc_attr_e( 'Linkedin', 'fortunato' ); ?></span></i></a>
				<?php endif; ?>
				<?php if (!empty($instagramURL)) : ?>
					<a href="<?php echo esc_url($instagramURL); ?>" title="<?php esc_attr_e( 'Instagram', 'fortunato' ); ?>"><i class="fa fa-instagram spaceLeftRight"><span class="screen-reader-text"><?php esc_attr_e( 'Instagram', 'fortunato' ); ?></span></i></a>
				<?php endif; ?>
				<?php if (!empty($youtubeURL)) : ?>
					<a href="<?php echo esc_url($youtubeURL); ?>" title="<?php esc_attr_e( 'YouTube', 'fortunato' ); ?>"><i class="fa fa-youtube spaceLeftRight"><span class="screen-reader-text"><?php esc_attr_e( 'YouTube', 'fortunato' ); ?></span></i></a>
				<?php endif; ?>
				<?php if (!empty($pinterestURL)) : ?>
					<a href="<?php echo esc_url($pinterestURL); ?>" title="<?php esc_attr_e( 'Pinterest', 'fortunato' ); ?>"><i class="fa fa-pinterest spaceLeftRight"><span class="screen-reader-text"><?php esc_attr_e( 'Pinterest', 'fortunato' ); ?></span></i></a>
				<?php endif; ?>
				<?php if (!empty($tumblrURL)) : ?>
					<a href="<?php echo esc_url($tumblrURL); ?>" title="<?php esc_attr_e( 'Tumblr', 'fortunato' ); ?>"><i class="fa fa-tumblr spaceLeftRight"><span class="screen-reader-text"><?php esc_attr_e( 'Tumblr', 'fortunato' ); ?></span></i></a>
				<?php endif; ?>
				<?php if (!empty($flickrURL)) : ?>
					<a href="<?php echo esc_url($flickrURL); ?>" title="<?php esc_attr_e( 'Flickr', 'fortunato' ); ?>"><i class="fa fa-flickr spaceLeftRight"><span class="screen-reader-text"><?php esc_attr_e( 'Flickr', 'fortunato' ); ?></span></i></a>
				<?php endif; ?>
				<?php if (!empty($vkURL)) : ?>
					<a href="<?php echo esc_url($vkURL); ?>" title="<?php esc_attr_e( 'VK', 'fortunato' ); ?>"><i class="fa fa-vk spaceLeftRight"><span class="screen-reader-text"><?php esc_attr_e( 'VK', 'fortunato' ); ?></span></i></a>
				<?php endif; ?>
				<?php if (!empty($xingURL)) : ?>
					<a href="<?php echo esc_url($xingURL); ?>" title="<?php esc_attr_e( 'Xing', 'fortunato' ); ?>"><i class="fa fa-xing spaceLeftRight"><span class="screen-reader-text"><?php esc_attr_e( 'Xing', 'fortunato' ); ?></span></i></a>
				<?php endif; ?>
				<?php if (!empty($redditURL)) : ?>
					<a href="<?php echo esc_url($redditURL); ?>" title="<?php esc_attr_e( 'Reddit', 'fortunato' ); ?>"><i class="fa fa-reddit-alien spaceLeftRight"><span class="screen-reader-text"><?php esc_attr_e( 'Reddit', 'fortunato' ); ?></span></i></a>
				<?php endif; ?>
				<?php if (!empty($skypeNAME)) : ?>
					<a href="skype:<?php echo esc_attr($skypeNAME); ?>?call" title="<?php esc_attr_e( 'Skype', 'fortunato' ); ?>"><i class="fa fa-skype spaceLeftRight"><span class="screen-reader-text"><?php esc_attr_e( 'Skype', 'fortunato' ); ?></span></i></a>
				<?php endif; ?>
			</div>
		</div>
		<?php endif; ?>
	</footer><!-- #colophon -->
</div><!-- #page -->
<a href="#top" id="toTop"><i class="fa fa-angle-up fa-lg"></i></a>
<?php if (is_active_sidebar( 'sidebar-1' ) ) : ?>	
	<div class="openSidebar">
	  <div id="hamburger">
		<span></span>
		<span></span>
		<span></span>
	  </div>
	  <div id="cross">
		<span></span>
		<span></span>
	  </div>
	</div>
<?php endif; ?>
<?php wp_footer(); ?>

</body>
</html>
