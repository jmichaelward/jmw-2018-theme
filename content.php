<?php
/**
 * Standard post content markup.
 *
 */
?>

<article <?php post_class(); ?>>
	<header class="entry__hdr">
		<h1 class="entry__hd">
			<?php if ( is_single() || is_page() ) : ?>
				<?php the_title(); ?>
			<?php else : ?>
				<a class="entry__link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			<?php endif; ?>
		</h1>

		<?php if ( in_category( 'updates' ) ) : ?>
			<div class="entry__meta"><?php the_time( 'F j, Y' ); ?></div>
		<?php endif; ?>
	</header><!-- .entry__hdr -->

	<div class="entry__content-container">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="entry__image">
				<?php the_post_thumbnail( 'medium' ); ?>
			</div>
		<?php endif; ?>

		<div class="entry__content">
			<?php the_content(); ?>
		</div>
	</div><!-- .entry__content-container -->
</article>

