<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php mobilizacja_biznesu_post_thumbnail(); ?>
	<h3><?php the_title(); ?></h3>
	<div class="date-container">
		<div class="date"><?php the_date('d M Y') ?></div>
		<a href="<?php get_permalink() ?>" class="link"><?php echo $GLOBALS['cgv']['read'] ?><img src="<?php echo get_template_directory_uri() ?>/template/img/arrow.svg" alt="Strzałka" /></a>
	</div>	
</article><!-- #post-<?php the_ID(); ?> -->