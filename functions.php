<?php
/**
 * Main theme functions file. Loads the site theme assets.
 *
 * @package JMichaelWard\Theme2018
 */

use JMichaelWard\Theme2018;

require_once get_template_directory() . '/src/JMW2018/Theme.php';

$theme = new Theme2018\Theme();
$theme->setup();
