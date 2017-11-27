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

		<?php if ( get_next_posts_link() || get_previous_posts_link() ) : ?>
			<?php JMW2018\pagination( $wp_query ); ?>
		<?php endif; ?>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
