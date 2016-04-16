<?php
if ( function_exists('register_sidebar') )
    register_sidebar();

//添加导航
    register_nav_menus(array(
      //'left-menu' => '左边栏菜单',
      'top-menu' => '顶部菜单',
    ));


//分页函数
function wpdx_paging_nav(){
	global $wp_query;
 
	$big = 999999999; // 需要一个不太可能的整数
 
	$pagination_links = paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages
	) );
 
echo $pagination_links;
}


//load js file
/** Google jQuery Library, Custom jQuery and CSS Files */  
function myScripts() {  
        wp_register_script( 'jquery', get_template_directory_uri() . '/jquery-1.11.1.js' );  
        wp_register_script( 'default', get_template_directory_uri() . '/default.js' );  
       // wp_register_style( 'default', get_template_directory_uri() . '/font.css' );  
    if ( !is_admin() ) { /** Load Scripts and Style on Website Only */  
        wp_deregister_script( 'jquery' );  
        //wp_enqueue_script( 'google' );  
        wp_enqueue_script( 'default' );  
      //  wp_enqueue_style( 'default' );  
    }  
}  
add_action( 'init', 'myScripts' );

?>
