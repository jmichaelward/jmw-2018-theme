<?php
/**
 * Main theme functions file. Loads the site theme assets.
 *
 * @package jmw-2016
 */

use JMW2018\Theme;

require_once get_template_directory() . '/src/JMW2018/Theme.php';

$theme = new Theme();
$theme->setup();
