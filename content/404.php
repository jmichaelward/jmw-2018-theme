<?php
/**
 * Standard post content markup.
 *
 */
?>

<article <?php post_class(); ?>>
	<header class="entry__hdr">
		<h1 class="entry__hd">
			<?php esc_html_e( 'Seems to be nothing here...', 'jmw-2018' ); ?>
		</h1>
	</header><!-- .entry__hdr -->

	<div class="entry__content-container">
		<div class="entry__content">
			<p><?php esc_html_e( 'Perhaps you should give the ', 'jmw-2018' ); ?>
				<a class="entry__link" href="<?php echo esc_url( home_url() ); ?>"
					title="<?php the_title_attribute(); ?>"><?php esc_html_e( 'home page', 'jmw-2018' ); ?></a>
				<?php esc_html_e( ' another look?', 'jmw-2018' ); ?>
			</p>
		</div>
	</div><!-- .entry__content-container -->
</article>
