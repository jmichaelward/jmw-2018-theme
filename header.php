<?php
/**
 * Header template.
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="wrapper">
			<header class="site-header">
				<div class="site-header__inner">
					<div class="site-header__branding">
						<a class="site-header__home-link" href="<?php echo esc_url( home_url() ); ?>">
							<p class="site-header__logo"><?php bloginfo( 'name' ); ?></p>
						</a>
					</div>

					<?php wp_nav_menu(); ?>
				</div>
			</header>

			<div class="site-body">
