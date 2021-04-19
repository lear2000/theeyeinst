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
            'mode'              => 'edit',
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
            'mode'              => 'edit',
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
            'mode'              => 'edit',
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
            'mode'              => 'edit',
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
            'mode'              => 'edit',
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
            'mode'              => 'edit',
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
            'mode'              => 'edit',
        ));

        //just content
        acf_register_block_type(array(
            'name'              => 'justcontent',
            'title'             => __('Just Content - ACF'),
            'description'       => __('Just Content'),
            'category'          => 'formatting',
            'icon'              => 'edit-page',
            'keywords'          => array( 'content', 'just content','acf','layout' ),
            'render_template'   => 'tmpl/just-content.php',
            'mode'              => 'edit',
        ));

        //candidate
        acf_register_block_type(array(
            'name'              => 'candidate',
            'title'             => __('Candidate - ACF'),
            'description'       => __('Candidate'),
            'category'          => 'formatting',
            'icon'              => 'businesswoman',
            'keywords'          => array( 'Candidate', 'acf','layout' ),
            'render_template'   => 'tmpl/layout-candidate.php',
            'mode'              => 'edit',
        ));

        //video Left
        acf_register_block_type(array(
            'name'              => 'videoright',
            'title'             => __('Video Left - ACF'),
            'description'       => __('Video Left'),
            'category'          => 'formatting',
            'icon'              => 'video-alt',
            'keywords'          => array( 'video left','video' ,'left','acf','layout' ),
            'render_template'   => 'tmpl/layout-videoleft.php',
            'mode'              => 'edit',
        ));


        //video right
        acf_register_block_type(array(
            'name'              => 'video_r',
            'title'             => __('Video Right - ACF'),
            'description'       => __('Video Right'),
            'category'          => 'formatting',
            'icon'              => 'video-alt',
            'keywords'          => array( 'video right','video' ,'right','acf','layout' ),
            'render_template'   => 'tmpl/layout-videoright.php',
            'mode'              => 'edit',
        ));


        //lead paragraph
        acf_register_block_type(array(
            'name'              => 'leadpara',
            'title'             => __('Lead Section - ACF'),
            'description'       => __('Lead Section - Has Spacing Below H Tag'),
            'category'          => 'formatting',
            'icon'              => 'edit',
            'keywords'          => array( 'lead','content' ,'spacing','acf','layout' ),
            'render_template'   => 'tmpl/layout-leadpara.php',
            'mode'              => 'edit',
        ));


        //full background center copy
        acf_register_block_type(array(
            'name'              => 'fullbgcenter',
            'title'             => __('Center Copy w/ Background - ACF'),
            'description'       => __('Center copy with full image background'),
            'category'          => 'formatting',
            'icon'              => 'edit',
            'keywords'          => array( 'full','content' ,'background','acf','layout' ),
            'render_template'   => 'tmpl/layout-fullbgcenter.php',
            'mode'              => 'edit',
        ));


        //symptoms block
        acf_register_block_type(array(
            'name'              => 'symptoms',
            'title'             => __('Symptoms Grid Icons - ACF'),
            'description'       => __('Symptoms block - grid icons'),
            'category'          => 'formatting',
            'icon'              => 'groups',
            'keywords'          => array( 'grid','symptoms' ,'icons','acf','layout' ),
            'render_template'   => 'tmpl/layout-gridheading.php',
            'mode'              => 'edit',
        ));

        //fullwidth with video at bottom
        acf_register_block_type(array(
            'name'              => 'fullbgvid',
            'title'             => __('Full Width BG add Video - ACF'),
            'description'       => __('full width background image with video option'),
            'category'          => 'formatting',
            'icon'              => 'groups',
            'keywords'          => array( 'full width','video' ,'background','acf','layout' ),
            'render_template'   => 'tmpl/layout-fullwidthvideobtm.php',
            'mode'              => 'edit',
        ));

        //img right text left
        acf_register_block_type(array(
            'name'              => 'imgrtxtl',
            'title'             => __('Image Right Text Left - ACF'),
            'description'       => __('image right text left'),
            'category'          => 'formatting',
            'icon'              => 'groups',
            'keywords'          => array( 'text left','image right' ,'reverse','acf','layout' ),
            'render_template'   => 'tmpl/layout-img-right-text-left.php',
            'mode'              => 'edit',
        ));
        //highlights
        // Register Highlights block
                acf_register_block_type( array(
                    'name'                  => 'highlights',
                    'title'                 => __( 'Highlights' ),
                    'description'           => __( 'Highlights with icons' ),
                    'category'              => 'formatting',
                    'icon'                  => 'layout',
                    'keywords'              => array( 'highlights','icons','achive' ),
                    'post_types'            => array( 'post', 'page' ),
                    'mode'                  => 'edit',
                    // 'align'              => 'wide',
                    'render_template'       => 'tmpl/layout-highlights.php',
                    // 'render_callback'    => 'highlights_block_render_callback',
                    // 'enqueue_style'      => get_template_directory_uri() . '/template-parts/blocks/highlights/highlights.css',
                    // 'enqueue_script'     => get_template_directory_uri() . '/template-parts/blocks/highlights/highlights.js',
                    // 'enqueue_assets'     => 'highlights_block_enqueue_assets',
                ));


                // Register icons + text
                        acf_register_block_type( array(
                            'name'                  => 'iconsandtext',
                            'title'                 => __( 'Icons With Text Below' ),
                            'description'           => __( 'icon block with text below' ),
                            'category'              => 'formatting',
                            'icon'                  => 'layout',
                            'keywords'              => array( 'icons','text','text bottom' ),
                            'post_types'            => array( 'post', 'page' ),
                            'mode'                  => 'edit',
                            'render_template'       => 'tmpl/layout-iconsingle.php',
                            ));


                        //button primary
                        acf_register_block_type(array(
                            'name'              => 'btnprimary',
                            'title'             => __('Primary Button - ACF'),
                            'description'       => __('Primary Buttont'),
                            'category'          => 'formatting',
                            'icon'              => 'button',
                            'keywords'          => array( 'primary button','button' ,'line','acf','layout' ),
                            'render_template'   => 'tmpl/snippet-button.php',
                            'mode'              => 'edit',
                        ));


                        // Register Cite block
                                acf_register_block_type( array(
                                    'name'                  => 'acfcite',
                                    'title'                 => __( 'Cite - ACF' ),
                                    'description'           => __( 'Cite block for pages.' ),
                                    'category'              => 'formatting',
                                    'icon'                  => 'layout',
                                    'keywords'              => array( 'cite','bottom', 'small' ),
                                    'post_types'            => array( 'post', 'page' ),
                                    'mode'                  => 'edit',
                                    'render_template'       => 'tmpl/snippet-cite.php',
                                    // 'render_callback'    => 'cite_block_render_callback',
                                    // 'enqueue_style'      => get_template_directory_uri() . '/template-parts/blocks/cite/cite.css',
                                    // 'enqueue_script'     => get_template_directory_uri() . '/template-parts/blocks/cite/cite.js',
                                    // 'enqueue_assets'     => 'cite_block_enqueue_assets',
                                ));


                                // Register Full Background With Text - ACF block
                                        acf_register_block_type( array(
                                            'name'                  => 'full-background-with-text---acf',
                                            'title'                 => __( 'Full Background With Text - ACF' ),
                                            'description'           => __( 'A custom Full Background With Text - ACF block.' ),
                                            'category'              => 'formatting',
                                            'icon'                  => 'layout',
                                            'keywords'              => array( 'full', 'background', 'with', 'text', 'acf' ),
                                            'post_types'            => array( 'post', 'page' ),
                                            'mode'                  => 'auto',
                                            // 'align'              => 'wide',
                                            'render_template'       => 'tmpl/layout-fullbg.php',
                                            // 'render_callback'    => 'full_background_with_text___acf_block_render_callback',
                                            // 'enqueue_style'      => get_template_directory_uri() . '/template-parts/blocks/full-background-with-text---acf/full-background-with-text---acf.css',
                                            // 'enqueue_script'     => get_template_directory_uri() . '/template-parts/blocks/full-background-with-text---acf/full-background-with-text---acf.js',
                                            // 'enqueue_assets'     => 'full_background_with_text___acf_block_enqueue_assets',
                                        ));



    }// Check function exists.
}


?>