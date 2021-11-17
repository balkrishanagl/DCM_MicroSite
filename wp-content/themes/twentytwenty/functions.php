<?php 
/**
 * Register navigation menus uses wp_nav_menu in five places.
 *
 * @since Twenty Twenty 1.0
 */
function twentytwenty_menus() {

    $locations = array(
        'primary'  => __( 'Desktop Horizontal Menu', 'twentytwenty' ),
        'expanded' => __( 'Desktop Expanded Menu', 'twentytwenty' ),
        'mobile'   => __( 'Mobile Menu', 'twentytwenty' ),
        'footer'   => __( 'Footer Menu', 'twentytwenty' ),
        'social'   => __( 'Social Menu', 'twentytwenty' ),
    );

    register_nav_menus( $locations );
}

add_action( 'init', 'twentytwenty_menus' );

class WPDocs_Walker_Nav_Menu extends Walker_Nav_Menu {
  
    /**
     * Starts the list before the elements are added.
     *
     * Adds classes to the unordered list sub-menus.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        // Depth-dependent classes.
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent

        $display_depth = ( $depth + 1); // because it counts the first submenu as 0 

        $classes = array(
            '',
            ( $display_depth == 0  ? 'dropdown_normal' : '' ),
			( $display_depth == 1 ? 'dropdown-menu mega-dropdown-menu' : '' ),
            ( $display_depth >=2 ?'list-unstyled w-100 mega-dropdown-menu-inner' : '' ),
            
        );
        $class_names = implode( '', $classes );
      

        // Build HTML for output.
        if($display_depth==2){
			
        $output .= "\n" . $indent .'<ul class="'.$class_names.'" >' . "\n"; 		
        } else {
        $output .= "\n" . $indent .'<ul class="'.$class_names.'" aria-labelledby="navbarDropdown">' . "\n";
		
		}
    }
 
    /**
     * Start the element output.
     *
     * Adds main/sub-classes to the list items and links.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Menu item data object.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     * @param int    $id     Current item ID.
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent 
 
       // echo "<pre>"; print_r($item->classes);
 		
        // Depth-dependent classes.
        $depth_classes = array(
            ( $depth == 0 ? 'nav-item dropdown mega-dropdown' : 'nav-item container px-0' ),
           	( $depth >=2 ? 'right-dropdown' : '' ),
            ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
  	
        // Passed classes.
       $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
         if(array_search('current-menu-item', $item->classes) != 0)
        {
            $classes.= 'active';
        }
		if(in_array('current-post-ancestor', $item->classes) || in_array('current-page-ancestor', $item->classes)){
			$classes.= 'active';
		}
		
        // Build HTML.
        if($depth==2){
        $output .= $indent . '<li class="'.$class_names.'" >';
        } 
	 //    elseif($item->post_name=='committees'){
		// $output .= $indent . '<li class="large_dropdown" id="committees_'.$depth.'">';
		// }	
		// else {
		// 	if($item->post_name=='committees-international'){
		// 		$output .= $indent . '<li class="'.$depth.'" id="committees-international_'.$depth.'">';
		// 	}elseif($item->ID=='762' || $item->post_name=='monthly-periodicals')
		// 	{ 
		// 		$output .= $indent . '<li class="'.$classes.'" id="monthly-periodicals_'.$depth.'">';
		// 	 }
			 else{
				 $output .= $indent . '<li class="'.$depth_class_names.'">';
			//}
 		}
        // Link attributes.
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
       
       // Depth-dependent classes.
        $depth_classes_link = array(
            ( $depth == 0 ? 'nav-link' : 'dropdown-item' ),
           	( $depth >=2 ? '' : '' ),
            ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
            'menu-item-depth-' . $depth
        );
        $depth_class_names_link = esc_attr( implode( ' ', $depth_classes_link ) );
 
// 		echo "<pre>"; 
// 		print_r($attributes);
// echo "</pre>";		
//die;
		//echo $item->post_name; 
		
		
		$match_str = strtolower($item->title);
		
				
        // Build HTML output and pass through the proper filter.
        $item_output = sprintf( '%1$s<a class="'.$depth_class_names_link.'" %2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

class WPDocs_Walker_Nav_Menu_Child extends Walker_Nav_Menu {
 

    /**
     * Starts the list before the elements are added.
     *
     * Adds classes to the unordered list sub-menus.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        // Depth-dependent classes.

        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'sub-menu',
            ( $display_depth ==0  ? 'test' : 'menu-even' ),
            ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
            'menu-depth-' . $display_depth
        );
        $class_names = implode( ' ', $classes );
 
        // Build HTML for output.
        //$output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
		$output .= "\n" . $indent . '<div class="animAll eLm"><ul>' . "\n";
    }
 
    /**
     * Start the element output.
     *
     * Adds main/sub-classes to the list items and links.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Menu item data object.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     * @param int    $id     Current item ID.
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
 
        // Depth-dependent classes.
        $depth_classes = array(
            ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
            ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
            ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
 
        // Passed classes.
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
 
        // Build HTML.
        //$output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
		$output .= $indent . '<li>';
 
        // Link attributes.
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        //$attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
		//print_r($item); die;
		
		$match_str = strtolower($item->title);
	
	
		
        // Build HTML output and pass through the proper filter.
        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

add_theme_support( 'post-thumbnails' );

//parent child page list
function get_child_pages_by_parent_ID($pageId,$limit = -1)
{
    // needed to use $post
    global $post;
    // used to store the result
    // $pages = array();

    // What to select
    $args = array(
        'post_type' => 'page',
        'post_parent' => $pageId,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'posts_per_page' => $limit
    );
    $the_query = new WP_Query( $args );

    // while ( $the_query->have_posts() ) {
    //     $the_query->the_post();
    //     $pages[] = $post;
    // }
    // wp_reset_postdata();
    return $the_query;
}


//  Custom pagination function 
    
    function cq_pagination($pages = '', $range = 4)
    {
        $showitems = ($range * 2)+1;
        global $paged;
        if(empty($paged)) $paged = 1;
        if($pages == '')
        {
            global $wp_query;
            $pages = $wp_query->max_num_pages;
            if(!$pages)
            {
                $pages = 1;
            }
        }
        if(1 != $pages)
        {
            echo "<ul class='pagination justify-content-center pagination-custom'>"; 
            if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li class='page-item'><a href='".get_pagenum_link(1)."' class='page-link'>&laquo; First</a></li>"; 
            // if($paged > 1 && $showitems < $pages){ 
            if($paged > 1){ 
                echo "<li class='page-item'><a href='".get_pagenum_link($paged - 1)."' class='page-link'><img src=".get_stylesheet_directory_uri()."'/images/vid-prev-arrow-hover.png'></a></li><li class='page-item'><a href='".get_pagenum_link($paged - 1)."' class='page-link page-link-prev'>Previous</a></li>"; 
            }
            for ($i=1; $i <= $pages; $i++)
            {
                if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
                {
                    echo ($paged == $i)? "<li class=\"page-item active\"><a class='page-link'>".$i."</a></li>":"<li class='page-item'> <a href='".get_pagenum_link($i)."' class=\"page-link\">".$i."</a></li>";
                }
            }
            // if ($paged < $pages && $showitems < $pages) 
            if ($paged < $pages) {
                echo "<li class='page-item'><a class='page-link page-link-next' href=\"".get_pagenum_link($paged + 1)."\">Next</a></li><li class='page-item'><a class='page-link' href=\"".get_pagenum_link($paged + 1)."\"><img src=".get_stylesheet_directory_uri()."'/images/vid-next-arrow-hover.png'></a></li>";
            }
            if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo " <li class='page-item'><a class='page-link' href='".get_pagenum_link($pages)."'><i class='flaticon flaticon-arrow'></i></a></li>";
            echo "</ul>";
        }
  }
