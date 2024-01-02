<?php
/**
 * Plugin Name:       WXY...Z Blocks
 * Plugin URI:        https://sarahjobs.com/wordpress/plugins/wxyz-blocks
 * Description:       Structure to work with multiple blocks in a single plugin.
 * Version:           1.0.0-beta
 * Requires at least: 5.6
 * Requires PHP:      7.4
 * Author:            Sarah Siqueira
 * Author URI:        https://sarahjobs.com/about
 * License:           GPLv2 or later
 * License URI:       https://www.gnu.org/licenses/gpl.html
 * Text Domain:       wxyz-blocks
 * Domain Path:       /languages
 * Update URI:        https://sarahjobs.com/wordpress/plugins/wxyz-blocks/update
 *
 * @package wxyzblocks
 */

defined( 'ABSPATH' ) || exit;

/**
 * Block X
 */
require_once __DIR__ . '/inc/class-block-x.php';
use WXYZBlocks\Inc\BlockX;
new BlockX();

/**
 * Block Y
 */
require_once __DIR__ . '/inc/class-block-y.php';
use WXYZBlocks\Inc\BlockY;
new BlockY();

/**
 * Block W
 */
require_once __DIR__ . '/inc/class-block-w.php';
use WXYZBlocks\Inc\BlockW;
new BlockW();
