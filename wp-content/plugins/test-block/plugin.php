<?php
/**
 * Plugin Name: Test Plugin
 * Author: John Doe
 * Version: 1.0.0
 */

// from https://getflywheel.com/layout/wordpress-gutenberg-blocks-custom/
// Will Morris — March 27, 2019

function loadMyBlock() {
  wp_enqueue_script(
    'my-new-block',
    plugin_dir_url(__FILE__) . 'test-block.js',
    array('wp-blocks','wp-editor'),
    true
  );
}
   
add_action('enqueue_block_editor_assets', 'loadMyBlock');
