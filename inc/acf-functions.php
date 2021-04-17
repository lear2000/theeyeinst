<?php
// ACF JSON

add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point( $path ) {

    // update path
    $path = get_stylesheet_directory() . '/acf-json';


    // return
    return $path;

}

// ACF OPTIONS

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
    'page_title'  => 'Theme Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));


}



// REMOVE EDITOR
// add_action( 'init', function() {
//   remove_post_type_support( 'page', 'editor' );
// }, 99);

//register blocks
add_action('acf/init', 'fs_acf_init_block_types');
function fs_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a page header block.
        acf_register_block_type(array(
            'name'              => 'pageheader',
            'title'             => __('Page Header - ACF'),
            'description'       => __('Header For Page'),
            'render_template'   => 'tmpl/layout-1-2.php',
            'category'          => 'formatting',
            'icon'              => 'images-alt2',
            'keywords'          => array( 'page', 'header','acf' ),
						'mode'							=> 'edit',
        ));

        // register a reverse page header block.
        acf_register_block_type(array(
            'name'              => 'reverseheader',
            'title'             => __('Reverse Page Header - ACF'),
            'description'       => __('Revrse For Page'),
            'render_template'   => 'tmpl/layout-1-2-reverse.php',
            'category'          => 'formatting',
            'icon'              => 'format-image',
            'keywords'          => array( 'page', 'header','acf','reverse' ),
						'mode'							=> 'edit',
        ));

        // register a copy block block.
        acf_register_block_type(array(
            'name'              => 'copylrblock',
            'title'             => __('Copy Left / Right - ACF'),
            'description'       => __('Lead On Left Copy On Right'),
            'render_template'   => 'tmpl/layout-1-2-copy.php',
            'category'          => 'formatting',
            'icon'              => 'editor-justify',
            'keywords'          => array( 'page', 'copy','acf','layout' ),
						'mode'							=> 'edit',
        ));

        // register a physicans block.
        acf_register_block_type(array(
            'name'              => 'physgrid',
            'title'             => __('Doctor Grid - ACF'),
            'description'       => __('Grid of Doc Photos'),
            'render_template'   => 'tmpl/layout-physicians.php',
            'category'          => 'formatting',
            'icon'              => 'grid-view',
            'keywords'          => array( 'Doctor', 'copy','acf','layout','physicians' ),
						'mode'							=> 'edit',
        ));

        ///layout-new-heights.php
        acf_register_block_type(array(
            'name'              => 'newheights',
            'title'             => __('New Heights - ACF'),
            'description'       => __('New Heights Icon Section'),
            'render_template'   => 'tmpl/layout-new-heights.php',
            'category'          => 'formatting',
            'icon'              => 'airplane',
            'keywords'          => array( 'new heights', 'copy','acf','layout','icons' ),
						'mode'							=> 'edit',
        ));

                ///layout-rating-quote.php
        acf_register_block_type(array(
            'name'              => 'rating',
            'title'             => __('Rating Block - ACF'),
            'description'       => __('Rating Section'),
            'render_template'   => 'tmpl/layout-rating-quote.php',
            'category'          => 'formatting',
            'icon'              => 'admin-plugins',
            'keywords'          => array( 'rating', 'copy','acf','layout' ),
        ));

                ///layout-1-2-alternate.php
        acf_register_block_type(array(
            'name'              => 'imgleft',
            'title'             => __('IMG Left/Text Right Block - ACF'),
            'description'       => __('Image On Left Text Right NO Box'),
            'category'          => 'formatting',
            'icon'              => 'table-col-before',
            'keywords'          => array( 'img', 'left','acf','layout' ),
            'render_template'   => 'tmpl/layout-1-2-alternate.php',
						'mode'							=> 'edit',
        ));

        //just content
        acf_register_block_type(array(
            'name'              => 'justcontent',
            'title'             => __('Just Content - ACF'),
            'description'       => __('Just Content'),
            'category'          => 'formatting',
            'keywords'          => array( 'content', 'just content','acf','layout' ),
            'render_template'   => 'tmpl/just-content.php',
						'mode'							=> 'edit',
        ));

        //candidate
        acf_register_block_type(array(
            'name'              => 'candidate',
            'title'             => __('Candidate - ACF'),
            'description'       => __('Candidate'),
            'category'          => 'formatting',
            'keywords'          => array( 'Candidate', 'acf','layout' ),
            'render_template'   => 'tmpl/layout-andidate.php',
						'mode'							=> 'edit',
        ));

    }// Check function exists.
}


?>
