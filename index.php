<?php
/**
 * Default template file.
 */

?>

<?php get_header(); ?>

<main class="site-main">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content' ); ?>
		<?php endwhile; ?>

		<?php JMW2018\pagination( $wp_query ); ?>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
