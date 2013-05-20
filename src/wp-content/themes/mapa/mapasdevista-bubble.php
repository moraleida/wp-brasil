<section id="entry-default" class="clearfix">
<?php $my_meta = get_post_meta($post->ID,'_my_meta',TRUE); ?>
    <?php the_excerpt(); ?>
	<h4 class="loud">
	<a href="<?php echo $my_meta['ag_site']; ?>" target="_blank">SITE</a>
	|
	<a href="<?php echo $my_meta['ag_face']; ?>" target="_blank">FACEBOOK</a>
	|
	<a href="<?php echo $my_meta['ag_twitter']; ?>" target="_blank">TWITTER</a>
	|
	<a href="<?php echo $my_meta['ag_wprofile']; ?>" target="_blank">WP.ORG</a>
	</h4>
	<h4 class="loud">EMAIL: <span class="loud"><?php echo $my_meta['ag_email']; ?></span>
	</h4>
</section>