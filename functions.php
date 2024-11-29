<?php



/**

 * Day Six theme functions and definitions

 * 

 * @package Day Six theme

 */


/*
|--------------------------------------------------------------------------
| Front-end styles en scripts
|--------------------------------------------------------------------------
|
| 
| 
|
*/


  function add_theme_scripts() {
    // Lees de versie uit het bestand
    $version = file_exists(get_template_directory() . '/version.txt') ? file_get_contents(get_template_directory() . '/version.txt') : '1.0';

    wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', array(), $version, 'all');
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script/index.js', array(), $version, true);
    
    // Voeg CSS-bestanden toe aan de queue met een versienummer
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.css', array(), $version);
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/tailwindcss-styles/style.css', array(), $version);
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), $version);
    
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
/*
/*
|--------------------------------------------------------------------------
| Back-end styles en scripts
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function load_custom_wp_admin_style(){
    wp_enqueue_style( 'gutenberg',  'https://hostdashboard.nl/devdocs/css/gutenberg.css');
    // wp_enqueue_style( 'swiper',  'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', array(), '1.2', 'all');
    // wp_enqueue_script( 'swiper', get_template_directory_uri() . '/script/swiper.js', array(), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script/index.js', array(), '1.2', true);
 
}
add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');



/*
|--------------------------------------------------------------------------
| ACF blocks
|--------------------------------------------------------------------------
|
| 
| 
|
*/

/*
|--------------------------------------------------------------------------
| Categorie
|--------------------------------------------------------------------------
*/
add_filter('block_categories_all', function ($categories) {

    array_unshift($categories,   
      [
        'slug'  => 'pages',
        'title' => 'Pages',
        'icon'  => null
    ],        
    [
        'slug'  => 'bibliotheek',
        'title' => 'Modular blocks',
        'icon'  => null
    ],  
    [
        'slug'  => 'elementen',
        'title' => 'Losse elementen',
        'icon'  => null
    ],

  
);

return $categories;
}, 10, 1);


/*
|--------------------------------------------------------------------------
| All allowed blocks
|--------------------------------------------------------------------------
*/
add_filter('allowed_block_types_all', function($allowed_blocks, $editor_context) {
    $blocks = get_blocks();
    $acf_blocks = []; 
    foreach ($blocks as $block) { 
        $acf_blocks[] = 'acf/' . $block;
    }

    $core_blocks = [
        // 'core/paragraph',
        // 'core/heading',
    ];

    return array_merge($acf_blocks, $core_blocks);
}, 10, 2);


/*
|--------------------------------------------------------------------------
| Register blocks
|--------------------------------------------------------------------------
*/
add_action( 'init', 'register_acf_blocks', 5 );
function register_acf_blocks() {

    $blocks = get_blocks();
    foreach ($blocks as $block) {
            register_block_type( __DIR__ . '/blocks/'.$block );
    }
}

/*
|--------------------------------------------------------------------------
| Get all blocks name from the folder name
|--------------------------------------------------------------------------
*/
function get_blocks() {
	$theme   = wp_get_theme();
	$blocks  = get_option( 'cwp_blocks' );
	$version = get_option( 'cwp_blocks_version' );
	if ( empty( $blocks ) || version_compare( $theme->get( 'Version' ), $version ) || ( function_exists( 'wp_get_environment_type' )  ) ) {
		$blocks = scandir( get_template_directory() . '/blocks/' );
		$blocks = array_values( array_diff( $blocks, array( '..', '.', '.DS_Store', '_base-block' ) ) );

		update_option( 'cwp_blocks', $blocks );
		update_option( 'cwp_blocks_version', $theme->get( 'Version' ) );
	}
	return $blocks;
}



/*
|--------------------------------------------------------------------------
| Script for one block
|--------------------------------------------------------------------------
*/
function cwp_register_block_script() {
    $blocks = get_blocks();
    foreach ($blocks as $block) {
        wp_register_script( $block, get_template_directory_uri() . '/blocks/'.$block.'/script.js' );
    }

}
add_action( 'init', 'cwp_register_block_script' );
/*
|--------------------------------------------------------------------------
| ACF json files
|--------------------------------------------------------------------------
|
| 
| 
|
*/

/**
 * Save the ACF fields as JSON in the specified folder.
 * 
 * @param string $path
 * @returns string
 */
add_filter('acf/settings/save_json', function ($path) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
});
/**
 * Load the ACF fields as JSON in the specified folder.
 *
 * @param array $paths
 * @returns array
 */
add_filter('acf/settings/load_json', function ($paths) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
});



/*
|--------------------------------------------------------------------------
| ACF icon picker
|--------------------------------------------------------------------------
|
| 
| 
|
*/

// modify the path to the icons directory
add_filter( 'acf_icon_path_suffix', 'acf_icon_path_suffix' );

function acf_icon_path_suffix( $path_suffix ) {
    return 'img/icons-acf/';
}

// modify the path to the above prefix
add_filter( 'acf_icon_path', 'acf_icon_path' );

function acf_icon_path( $path_suffix ) {
    return plugin_dir_path( __FILE__ );
}

// modify the URL to the icons directory to display on the page
add_filter( 'acf_icon_url', 'acf_icon_url' );

function acf_icon_url( $path_suffix ) {
    return plugin_dir_url( __FILE__ );
}





/*
|--------------------------------------------------------------------------
| SVG
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');




/*
|--------------------------------------------------------------------------
| REMOVE GUTENBERG CSS
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function remove_gutenberg_container_img_css() {
    // Voeg hier de naam van het CSS-bestand van Gutenberg toe waarin de class .block-editor__container img wordt gedefinieerd.
    $gutenberg_css_handle = 'wp-block-library';

    // Verwijder het Gutenberg CSS-bestand.
    wp_dequeue_style( $gutenberg_css_handle );
    wp_deregister_style( $gutenberg_css_handle );
}
add_action( 'wp_enqueue_scripts', 'remove_gutenberg_container_img_css', 100 );
add_action( 'admin_enqueue_scripts', 'remove_gutenberg_container_img_css', 100 );
add_action( 'enqueue_block_editor_assets', 'remove_gutenberg_container_img_css', 100 );



/*
|--------------------------------------------------------------------------
| WOOCOMMERCE
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );




/*
|--------------------------------------------------------------------------
| VERTALINGEN
|--------------------------------------------------------------------------
|
| 
| 
|
*/

function custom_frontend_translations($translated_text, $text, $domain) {
    switch ($text) {
            case 'Re-Order':
            $translated_text = 'Sort cases';
            break;
             case 'Reset all':
            $translated_text = 'Reset alle filters';
            break;
       
    }
    return $translated_text;
}

add_filter('gettext', 'custom_frontend_translations', 20, 3);

