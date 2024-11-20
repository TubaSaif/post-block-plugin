<?php
/**
 * Plugin Name:       Post Block Plugin
 * Description:       Post Block Plugin that shows post based on popularity(Likes,views and comments).
 * Requires at least: 6.6
 * Requires PHP:      7.2
 * Version:           0.1.0
 * Author:            Tuba Saif
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       post-block-plugin
 *
 * @package CreateBlock
 */
 
 if ( ! defined( 'ABSPATH' ) ) {
	 exit; // Exit if accessed directly.
 }
 
 // Include render callback file.
 require_once plugin_dir_path( __FILE__ ) . 'build/render-callback.php';
 
 function popular_post_block_register() {
    // Enqueue the dynamic block scripts, including view.js.
    $asset_file = include plugin_dir_path( __FILE__ ) . 'build/index.asset.php';

    wp_register_script(
        'popular-post-block-editor-script',
        plugins_url( 'build/index.js', __FILE__ ),
        $asset_file['dependencies'],
        $asset_file['version']
    );

    wp_register_style(
        'popular-post-block-editor-style',
        plugins_url( 'build/style-index.css', __FILE__ ),
        array(),
        filemtime( plugin_dir_path( __FILE__ ) . 'build/style-index.css' )
    );

    wp_register_script(
        'popular-post-block-view-script',
        plugins_url( 'build/view.js', __FILE__ ),
        array(),
        filemtime( plugin_dir_path( __FILE__ ) . 'build/view.js' ),
        true
    );

    register_block_type( plugin_dir_path( __FILE__ ) . 'build/block.json', array(
        'render_callback' => 'render_popular_posts_block',
    ));
}
add_action( 'init', 'popular_post_block_register' );

 