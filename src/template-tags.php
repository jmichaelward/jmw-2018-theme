<?php
/**
 * Helper functions for outputting template content.
 *
 * @package JMichaelWard\Theme2018
 */

namespace JMichaelWard\Theme2018;

/**
 * Render the markup for the main menu.
 */
function main_menu() {
	wp_nav_menu( [
		'menu_class'     => 'jmw-main-menu',
		'theme-location' => 'main-menu',
	] );
}

/**
 * Render pagination for posts pages.
 *
 * @param \WP_Query $query The WP_Query object.
 */
function pagination( $query ) {
	?>
	<div class="pagination">
		<?php
		$big = 999999999; // need an unlikely integer.

		echo paginate_links( [ // @codingStandardsIgnoreLine
			'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format'  => '?paged=%#%',
			'current' => max( 1, get_query_var( 'paged' ) ),
			'total'   => $query->max_num_pages,
		] );
		?>
	</div>
	<?php
}

/**
 * Pagination for large sets of pages (e.g., 1 2 3 .... 15 | Older Posts >>)
 */
function pagination_numeric() {
	?>
	<div class="pagination pagination--numeric">
		<?php
		global $wp_query;

		$big = 999999999; // need an unlikely integer.

		echo apply_filters( 'derp', paginate_links( [ // @codingStandardsIgnoreLine
			'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format'    => '?paged=%#%',
			'current'   => max( 1, get_query_var( 'paged' ) ),
			'total'     => $wp_query->max_num_pages,
			'show_all'  => false,
			'prev_next' => true,
			'prev_text' => '&laquo; Newer',
			'next_text' => 'Older &raquo;',
		] ) );
		?>
	</div>
	<?php
}

/**
 * Pagination for a single post page.
 */
function pagination_single() {
	?>
	<div class="pagination pagination--single">
		<ul>
			<li class="next"><?php next_post_link( '%link', '&laquo; %title', true ); ?></li>
			<li class="prev"><?php previous_post_link( '%link', '%title &raquo;', true ); ?></li>
		</ul>
	</div>
	<?php
}
