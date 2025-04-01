<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

if (! function_exists('\Roots\bootloader')) {
    wp_die(
        __('You need to install Acorn to use this site.', 'domain'),
        '',
        [
            'link_url' => 'https://roots.io/acorn/docs/installation/',
            'link_text' => __('Acorn Docs: Installation', 'domain'),
        ]
    );
}

add_action('after_setup_theme', fn () => \Roots\bootloader()->boot(), 0);

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });


/*
|--------------------------------------------------------------------------
| Register ACF
|--------------------------------------------------------------------------


    /**
     * We use WordPress's init hook to make sure
     * our blocks are registered early in the loading
     * process.
     *
     * @link https://developer.wordpress.org/reference/hooks/init/
     */
    function sage_register_acf_blocks() {
        /**
         * We register our block's with WordPress's handy
         * register_block_type();
         *
         * @link https://developer.wordpress.org/reference/functions/register_block_type/
         */
        register_block_type( __DIR__ . '/blocks/hero' );
        register_block_type( __DIR__ . '/blocks/usp-grid' );
        register_block_type( __DIR__ . '/blocks/media-text' );
        register_block_type( __DIR__ . '/blocks/text-media' );
    }

    // Here we call our tt3child_register_acf_block() function on init.
    add_action( 'init', 'sage_register_acf_blocks' );