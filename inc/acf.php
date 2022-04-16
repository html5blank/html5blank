<?php
/**
 * ACF Header, Footer & Contact Data Options:
*/

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {
    if(function_exists('acf_add_options_page')) {
        $dati_di_contatto = acf_add_options_page(array(
            'page_title' 	=> 'Dati di Contatto',
            'menu_title'	=> 'Dati di Contatto',
            'menu_slug' 	=> 'dati_di_contatto',
            'capability'	=> 'edit_posts',
            'icon_url'      => 'dashicons-images-alt2',
            'redirect'		=> false
        ));
        $header_e_footer_opzioni = acf_add_options_page(array(
            'page_title' 	=> 'Header & Footer',
            'menu_title'	=> 'Header & Footer',
            'menu_slug' 	=> 'header_&_footer',
            'capability'	=> 'edit_posts',
            'icon_url'      => 'dashicons-editor-code'
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Impostazioni Header',
            'menu_title'	=> 'Header',
            'capability'	=> 'edit_posts',
            'parent_slug'	=> 'header_&_footer'
        ));
        acf_add_options_sub_page(array(
            'page_title' 	=> 'Impostazioni Footer',
            'menu_title'	=> 'Footer',
            'capability'	=> 'edit_posts',
            'parent_slug'	=> 'header_&_footer'
        ));
    }
}
