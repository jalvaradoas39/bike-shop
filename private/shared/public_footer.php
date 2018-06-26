

	<?php if ( isset($super_hero_image) ) { ?>

		<div class="expanding-wrapper">
			<img id="super-hero-image" src="<?php echo url_for('/images/' . $super_hero_image); ?>" />
			<footer>
				<?php include(SHARED_PATH . '/public_copyright_disclaimer.php'); ?>
			</footer>
		</div>

	<?php } else { ?>

		<footer>
			<?php include(SHARED_PATH . '/public_copyright_disclaimer.php'); ?>
		</footer>

	<?php } ?>


</body>
</html>