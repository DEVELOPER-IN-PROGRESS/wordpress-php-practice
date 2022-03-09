<?php

require_once 'elemento.php';

function naunce_theme_styles() {
    wp_enqueue_style('bootstrap' , get_template_directory_uri().'/bootstrap.css');
    wp_enqueue_style('style' ,get_stylesheet_directory_uri().'/style.css');
}

add_action('wp_enqueue_scripts' , 'naunce_theme_styles');

function nuance_theme_scripts(){
    wp_enqueue_script( 'application', get_template_directory_uri().'/assets/js/application.js', array(), '' , true);
}

add_action( 'after_body' ,'nuance_theme_scripts');

function naunce_widgets_init(){
    register_sidebar( array(
        'name' => esc_html__( 'Primary Widget Area' , 'wphierarchy'),
'id' => 'main-sidebar',
'description' => esc_html__( 'add some widgets here', 'wphierarchyy' ),
'before_widget' => '<div  class="widget-container">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>' ,

      )
    );
}
add_action('widgets_init' ,'naunce_widgets_init');

class nuance_primary_menu extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
        $submenu = ($depth> 0 )? 'sub-menu' : '';


    $classes   = empty( $menu_item->classes ) ? array() : (array) $menu_item->classes;
    $classes[] = 'menu-item-' . $menu_item->ID;

    // var_dump($classes);

 //    $args = apply_filters( 'ni-navmenu__nav-li', $args, $menu_item, $depth );


		 $output .= "<li class='" .  implode(" ", $item->classes) . " ni-navmenu__nav-li'>";

		if ($item->url && $item->url != '#') {
			$output .= '<a class="d-none d-md-block ni-atom-a ni-navmenu__nav-a " href="' . $item->url . '">'.
            '<p>'.$item->title.'</p>'.
            '</a>
            <button class="ni-header__accordion d-md-none">'
            .$item->title.
            '</button>';
		} else {
			$output .= '<span>';
		}


		// if ($item->url && $item->url != '#') {
		// 	$output .= ;

		// } else {
		// 	$output .= '</span>';
		// }
    }

   function end_el(&$output, $item, $depth=0, $args=null){
       $src= get_template_directory_uri().'/assets/thin.png' ;
       $output .=  '</li>'
        .'<li> <img src="'.$src.'" width="2" alt="narrow" class="d-none d-md-block"/></li>' ;
   }

    // function start_lvl(&$output, $depth=0 ,$args=array())
    // {
    //     $indent = str_repeat("\t", $depth);
    //     $output .= "\n$indent
    //     <div class=\"ni-header__accordion-panel text-left\">
    //      <ul class=\"ni-header__accordion-list\">\n";
    // }

    // function end_lvl(&$output, $depth=0 ,$args=array())
    // {
    //        $src= get_template_directory_uri().'/assets/thin.png' ;
    //   //  $output .=  '</li>';
    //     //.'<li> <img src="'.$src.'" width="2" alt="narrow" class="d-none d-md-block"/></li>' ;

    //     $indent = str_repeat("\t", $depth);
    //     $output .= "\n$indent'</li><li> <img src=\"$src\"width=\"2\" alt=\"narrow\" class=\"d-none d-md-block\"/></li>";
    // }

}
// require get_template_directory(). '/inc/walker.php' ;
    class wpb_widget extends WP_Widget {

        function __construct() {
        parent::__construct(

          'wpb_widget',

         __('WPBeginner Widget', 'wpb_widget_domain'),

         array( 'description' => __( 'Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), )
        );
        }

        // widget front-end

        public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );

        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) )
        echo $args['before_title'] . $title . $args['after_title'];

        // This is where you run the code and display the output
        echo __( 'Hello, World!', 'wpb_widget_domain' );
        echo $args['after_widget'];
        }

        // Widget Backend
        public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
        $title = $instance[ 'title' ];
        }
        else {
        $title = __( 'New title', 'wpb_widget_domain' );
        }
        // Widget admin form
        ?>
        <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <?php
        }

        // Updating widget replacing old instances with new
        public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
        }

        // Class wpb_widget ends here
        }


        // Register and load the widget
        function wpb_load_widget() {
            register_widget( 'wpb_widget' );
        }
        add_action( 'widgets_init', 'wpb_load_widget' );








?>

