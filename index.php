<?php
/**
 * Default template file.
 */

?>

<?php get_header(); ?>

<main class="site-main">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?>>
				<div class="entry__content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	<?php endif; ?>
</main>

<?php get_footer(); ?>
