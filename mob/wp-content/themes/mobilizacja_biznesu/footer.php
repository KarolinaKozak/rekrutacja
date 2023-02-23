<footer class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="row">
				<div class="col-12 col-md-6">
					<img src="<?php echo get_template_directory_uri() ?>/template/img/logo.svg" alt="Mobilizacja biznesu" />
					<div class="footer-text">
						<?php dynamic_sidebar('Tekst w stopce')?>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<?php
					wp_nav_menu([
						'menu'            => 'menu-2',
						'theme_location'  => 'menu-2',
						'fallback_cb'     => 'bs4navwalker::fallback',
						'walker'          => new bs4navwalker()
					]);
					?>
				</div>
			</div>
		</div>
		<hr class="hr">
		<div class="footer-bottom">
			<div class="container">
				<?php dynamic_sidebar('Dół stopki')?>
			</div>
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
