<?php
/**
 * Header template.
 *
 * @package JMW/Theme2018
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
	<div class="site-header__inner">
		<div class="site-header__branding">
			<a class="site-header__home-link" href="<?php echo esc_url( home_url() ); ?>"
			   title="<?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?>">
				<span class="site-header__logo"><?php bloginfo( 'name' ); ?></span>
			</a>
		</div>

		<?php wp_nav_menu(); ?>
	</div>
</header>

<div class="site-wrapper">
	<div class="site-body">
