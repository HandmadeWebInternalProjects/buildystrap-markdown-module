<?php
/**
 * Plugin Name: Buildystrap Markdown Module
 * Version: 1.0.0
 * Author URI: https://www.handmadeweb.com.au/.
 */

use Buildystrap\Builder;
use BuildystrapAddons\Markdown\MarkdownField;
use BuildystrapAddons\Markdown\MarkdownModule;

defined('ABSPATH') || exit;

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our plugin. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (!file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.'));
}

require $composer;

add_action('buildystrap::builder::boot', function () {
    Builder::registerField('markdown', MarkdownField::class);
    Builder::registerModule('markdown', MarkdownModule::class);
    Builder::registerPath(__DIR__.'/resources/views');

    // Builder::registerBackendScript('markdown', /* url to script */);
    // Builder::registerBackendStyle('markdown', /* url to style */);
});
