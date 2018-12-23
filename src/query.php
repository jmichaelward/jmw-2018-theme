<?php
/**
 * Query functions.
 *
 * @package JMichaelWard\Theme2018
 */

namespace JMichaelWard\Theme2018;

use \WP_Query;

/**
 * Perform a custom query for recent updates.
 *
 * @TODO Cache the query results and return them if the query has been run recently.
 *
 * @return WP_Query
 */
function updates_query() {
	return new WP_Query( [
		'post_type'      => 'post',
		'category_name'  => 'updates',
		'posts_per_page' => get_field( 'num_posts' ) ?: 4,
	] );
}
