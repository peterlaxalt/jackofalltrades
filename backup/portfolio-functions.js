// ****************************************************
// ****************************************************
// l&m portfolio 0,1 by pete
// ****************************************************
// ****************************************************

// ****************************************************
// add portfolio post type
// ****************************************************

add_action('init', 'create_lm_portfolio');
function create_lm_portfolio()
{
  $labels = array(
    'name' => _x('Portfolio', 'portfolio'),
    'singular_name' => _x('Portfolio', 'portfolio'),
    'add_new' => _x('Add New', 'portfolio'),
    'add_new_item' => __('Add New Portfolio Item'),
    'edit_item' => __('Edit Item'),
    'new_item' => __('New Item'),
    'view_item' => __('View Item'),
    'search_items' => __('Search Items'),
    'not_found' =>  __('No items found'),
    'not_found_in_trash' => __('No items found in Trash'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','thumbnail')
  );
  register_post_type('portfolio',$args);
}

// ****************************************************
// add categories for filtering
// ****************************************************

register_taxonomy( "portfolio-categories",
	array( 	"portfolio" ),
	array( 	"hierarchical" => true,
			"labels" => array('name'=>"Creative Fields",'add_new_item'=>"Add New Field"),
			"singular_label" => __( "Field" ),
			"rewrite" => array( 'slug' => 'fields', // This controls the base slug that will display before each term
							'with_front' => false)
		 )
);
