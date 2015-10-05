<?php

/*加入選單功能*/
    register_nav_menus( array(
        'wpnote' => __( 'Primary Navigation'),
    ) );

/*sidebar*/
   if ( function_exists('register_sidebar') )
          register_sidebar(array(
          'name' => 'SideBar',
          'before_widget' => '<div class="sidebar">',
          'after_widget' => '</div>',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
          ));

/*read more*/
function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}

add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

/*超多文章的分頁*/
function wp_pagenavi() {
	global $wp_query;
	$max = $wp_query -> max_num_pages;
	if (!$current = get_query_var('paged')) $current=1;
	
	$args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
	$args['total'] = $max;
	$args['current'] = $current;
	$args['prev_text'] = '<';
	$args['next_text'] = '>';
	
	if ( $max > 1 ){ $pages = '<div 
	class="wp-pagenavi"><span class="pages">共 ' . $max . ' 頁</span>';
	echo $pages . paginate_links($args) . '</div>';
	}	
}

?>
