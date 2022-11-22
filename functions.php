<?php
/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) )
    $content_width = 822; /* pixels */

if ( ! function_exists( 'ifpr_setup' ) ) :
	/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */

// Start_ifpr_setup
function ifpr_setup() {

/**
 * Load languages
 */
function ifpr_load_theme_textdomain() {
    load_theme_textdomain( 'ifpr_theme', get_template_directory() . '/languages' );
}

/**
 * Add default posts and comments RSS feed links to <head>.
 */
add_theme_support( 'automatic-feed-links' );

/**
 * Register the sidebars
 */
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars(){
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'esquerda',
            'name'          => __( 'Coluna Esquerda', 'ifpr_theme' ),
            'description'   => __( 'Itens exibidos na coluna esquerda.', 'ifpr_theme' ),
            'before_widget' => '<div class="menu-esq">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="menu-esq-title">',
            'after_title'   => '</h4>',
        )
    );

	register_sidebar(
        array(
            'id'            => 'direita',
            'name'          => __( 'Coluna Direita', 'ifpr_theme' ),
            'description'   => __( 'Itens exibidos na coluna direita.', 'ifpr_theme' ),
            'before_widget' => '<div class="menu-esq">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="menu-dir-title">',
            'after_title'   => '</h4>',
        )
    );

	register_sidebar(
        array(
            'id'            => 'centro',
            'name'          => __( 'Coluna Central', 'ifpr_theme' ),
            'description'   => __( 'Itens exibidos na coluna central.', 'ifpr_theme' ),
            'before_widget' => '<div class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-centro-title">',
            'after_title'   => '</h3>',
        )
    );

	register_sidebar(
        array(
            'id'            => 'footer',
            'name'          => __( 'Rodapé', 'ifpr_theme' ),
            'description'   => __( 'Itens exibidos no rodap&eacute;.', 'ifpr_theme' ),
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer-ifpr',
            'name'          => __( 'Rodapé Institucional', 'ifpr_theme' ),
            'description'   => __( 'Itens exibidos no rodap&eacute;.', 'ifpr_theme' ),
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        )
    );

	register_sidebar(
        array(
            'id'            => 'address',
            'name'          => __( 'Endereço', 'ifpr_theme' ),
            'description'   => __( 'Endereço do campus.', 'ifpr_theme' ),
            'before_widget' => '<address>',
            'after_widget'  => '</address>',
        )
    );

	register_sidebar(
        array(
            'id'            => 'video01',
            'name'          => __( 'Video01', 'ifpr_theme' ),
            'description'   => __( 'Video do YouTube na esquerda.', 'ifpr_theme' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s col-md-6">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="widget-title">',
            'after_title'   => '</h6>',
        )
    );

	register_sidebar(
        array(
            'id'            => 'video02',
            'name'          => __( 'Video02', 'ifpr_theme' ),
            'description'   => __( 'Video do YouTube na direita.', 'ifpr_theme' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s col-md-6">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="widget-title">',
            'after_title'   => '</h6>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'nonmodal-rodape',
            'name'          => __( 'Nonmodal', 'ifpr_theme' ),
            'description'   => __( 'Nonmodal do rodap&eacute;.', 'ifpr_theme' ),
            'before_widget' => '<div class="nonmodal-rodape">',
            'after_widget'  => '<button type="button" class="close ml-3 align-self-start align-self-md-center" data-dismiss="nonmodal-rodape" aria-label="Close"><span aria-hidden="true">&times;</span></button></div></div>',
            'before_title'  => '',
            'after_title'   => '',
        )
    );
    
    register_sidebar(
        array(
            'id'            => 'widget-servidor',
            'name'          => __( 'Widgets da página do servidor', 'ifpr_theme' ),
            'description'   => __( 'Widgets da página do servidor', 'ifpr_theme' ),
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '',
            'after_title'   => '',
        )
    );
}

	add_theme_support( 'post-thumbnails' );
}

// Register menu positions
	function register_my_menu() {
    register_nav_menu('nav-superior',__( 'Nav Superior', 'ifpr_theme' ));
    register_nav_menu('nav-servidor',__( 'Nav Servidor', 'ifpr_theme' ));
    register_nav_menu('nav-portal',__( 'Nav Portal', 'ifpr_theme' ));
    register_nav_menu('nav-manual-servidor',__( 'Nav Manual do Servidor', 'ifpr_theme' ));
    register_nav_menu('nav-cat-lab',__( 'Nav Catalogo Laboratorios', 'ifpr_theme' ));
	}
	add_action( 'init', 'register_my_menu' );

	function custom_setup() {
		add_theme_support( 'title-tag' );
	}
	add_action( 'after_setup_theme', 'custom_setup' );

	function add_style_select_buttons( $buttons ) {
		array_unshift( $buttons, 'styleselect' );
		return $buttons;
	}
	// Register our callback to the appropriate filter
	add_filter( 'mce_buttons_2', 'add_style_select_buttons' );

	/**
	* Registers an editor stylesheet for the theme.
	*/
	function wpdocs_theme_add_editor_styles() {
		add_theme_support('editor-styles');
		add_editor_style( 'editor-style.css' );
	}
    add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );

    /**
     *
     *
     * Fix paragrafos vazios
     *
     */
    add_filter('the_content', 'remove_empty_p', 11);
    function remove_empty_p($content)
    {
        $content = force_balance_tags($content);
        //return preg_replace('#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content);
        return preg_replace('#<p></p>#i', '', $content);
    }

  /**
   *
   * Assets
   * Fontes, CSS e JS
   *
   */

/**
 * Register and Enqueue Styles.
 */
function ifpr_register_styles() {
	$template_url = get_template_directory_uri();
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'ifpr-style', get_stylesheet_uri(), array(), $theme_version );
    wp_enqueue_style( 'portal-das-artes', $template_url . '/assets/css/portal-das-artes.css', array(), $theme_version, 'all' );
    wp_enqueue_style( 'pagina-mapa', $template_url . '/assets/css/leaflet.css', array(), $theme_version, 'all' );

        // Style Covid
    if ( is_page_template( 'page-covid.php' ) ) {
      wp_enqueue_style( 'covid', $template_url . '/assets/css/covid.css', array(), $theme_version, 'all' );
    }

    // Style Catalogo de Laboratorios
    if ( is_page_template( array( 'page-laboratorio-principal.php', 'page-laboratorio-campus.php') ) || is_singular('laboratory') || is_tax("area") ) {
        wp_enqueue_style( 'cat-lab-ifpr', $template_url . '/assets/css/cat-lab-styles.css', array(), $theme_version, 'all' );
    }

    // Style Mapa Leaflet
    if ( is_page_template( 'page-map.php' ) ) {
      wp_enqueue_style( 'pagina-mapa', $template_url . '/assets/css/leaflet.css', array(), '1.6.0', 'all' );
    }
	wp_style_add_data( 'ifpr-style', 'rtl', 'replace' );

}
add_action( 'wp_enqueue_scripts', 'ifpr_register_styles' );

  function ifpr_style_scripts() {
	  $template_url = get_template_directory_uri();

    // Script Mapas
    if ( is_page_template( 'page-portal-das-artes.php' ) ) {
      wp_enqueue_script( 'pagina-mapa', $template_url . '/assets/js/leaflet.js', array(), '1.6', false);
    }

    // Style Mapa Leaflet
    if ( is_page_template( 'page-map.php' ) ) {
      wp_enqueue_script( 'pagina-mapa', $template_url . '/assets/js/leaflet.js', array(), '1.6', false);
    }

    // My JS
    wp_enqueue_script('myjs', $template_url . '/assets/js/scripts.js', array(), '0.1', true );

    //Consentimento Cookies
    wp_enqueue_script('agree', $template_url . '/assets/js/agree.js', array(), '0.1', true);

    // Gallery Style and JS
    if ( is_single() || is_page() ) {
      //all
      wp_enqueue_style( 'frescocss', $template_url . '/assets/gallery/fresco.css', array(), '2.3.0', 'all');
      //para wordpress 5.1.1
      wp_enqueue_script( 'setdata', $template_url . '/assets/gallery/gallery-old.js', array(), '2.3.0', true );
      //para wordpress mais recente
      //wp_enqueue_script( 'setdata', $template_url . '/assets/gallery/gallery.js', array(), '2.3.0', true );
      //all
      wp_enqueue_script( 'frescojs', $template_url . '/assets/gallery/fresco.js', array(), '2.3.0', true );
    }
    // Defer for myjs and setdata
    function add_defer_to_script( $tag, $handle, $src ) {
      if ( 'myjs' === $handle ) {
          $tag = str_replace( ' src', ' defer=\'defer\' src', $tag );
      }
      return $tag;
    }
    add_filter( 'script_loader_tag', 'add_defer_to_script', 10, 5 );
  }
  add_action( 'wp_enqueue_scripts', 'ifpr_style_scripts' );

    // Open Graph in the Language Attributes
    function add_opengraph_doctype( $output ) {
            return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
        }
    add_filter('language_attributes', 'add_opengraph_doctype');

endif;
add_action( 'after_setup_theme', 'ifpr_setup' );
// End_ifpr_setup

/**
 * only category "noticias" will be show on the home page
 */
function my_home_category( $query ) {
  if ( $query->is_home() && $query->is_main_query() ) {
    $query->set( 'category_name', 'noticias');
  }
}
add_action( 'pre_get_posts', 'my_home_category' );

/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 21;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function add_menu_parent_class( $items ) {
			$parents = array();
			foreach ( $items as $item ) {
				if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
					$parents[] = $item->menu_item_parent;
				}
			}
			foreach ( $items as $item ) {
				if ( in_array( $item->ID, $parents ) ) {
					$item->classes[] = 'menu-parent-item';
				}
			}
			return $items;
		}

// Add this to the functions.php file of your WordPress theme
// It filters the mime types using the upload_mimes filter hook
// Add as many keys/values to the $mimes Array as needed

function my_custom_upload_mimes($mimes = array()) {

	// Add a key and value for the CSV file type
	$mimes['doc'] = "Application / msword";

	return $mimes;
}

add_filter( 'get_post_metadata', 'add_dynamic_post_meta', 10, 4 );

add_action('upload_mimes', 'my_custom_upload_mimes');

/**
 * Add dynamically-generated "post meta" to `\WP_Post` objects
 *
 * This makes it possible to access dynamic data related to a post object by simply referencing `$post->foo`.
 * That keeps the calling code much cleaner than if it were to have to do something like
 * `$foo = some_custom_logic( get_post_meta( $post->ID, 'bar', true ) ); echo esc_html( $foo )`.
 *
 * @param mixed  $value
 * @param int    $post_id
 * @param string $meta_key
 * @param int    $single   @todo handle the case where this is false
 *
 * @return mixed
 *      `null` to instruct `get_metadata()` to pull the value from the database
 *      Any non-null value will be returned as if it were pulled from the database
 */
function add_dynamic_post_meta( $value, $post_id, $meta_key, $single ) {
    $post = get_post( $post_id );

    if ( 'page' != $post->post_type ) {
        return $value;
    }

    switch ( $meta_key ) {
        case 'verbose_page_template':
            $value = __('O modelo da p&aacute;gina &eacute; ', 'ifpr_theme') . ( $post->_wp_page_template ?: 'not assigned' );
            break;
    }

    return $value;
}

/**
 * Suporte Custom Header, Background, Excerpt
 */

add_theme_support( 'custom-header' );

add_theme_support( 'custom-background' );

add_post_type_support( 'page', 'excerpt' );

/**
 * Classe para table
 */
function ifpr_table_class( $content ) {
    return str_replace( '<table class="wp-block-table">', '<table class="table table-striped table-bordered table-hover">', $content );
}
add_filter( 'the_content', 'ifpr_table_class' );

/**
 * Remove WP Emoji
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/**
 * Funcionalidades extras
 */

// Paginacao
require_once get_template_directory() . '/helpers/pagination.php';

// Seguranca
require_once get_template_directory() . '/helpers/security.php';

// Galeria
require_once get_template_directory() . '/helpers/gallery.php';

// Crunchify Social
require_once get_template_directory() . '/helpers/social-share.php';

// Breadcrumb
require_once get_template_directory() . '/helpers/breadcrumb.php';

/**
 * Register a custom post type called "laboratory".
 *
 * @see get_post_type_labels() for label keys.
 */
function ifpr_laboratory_cpt() {
    $labels = array(
        'name'                  => _x( 'Laboratories', 'Post type general name', 'ifpr_theme' ),
        'singular_name'         => _x( 'Laboratory', 'Post type singular name', 'ifpr_theme' ),
        'menu_name'             => _x( 'Laboratories', 'Admin Menu text', 'ifpr_theme' ),
        'name_admin_bar'        => _x( 'Laboratory', 'Add New on Toolbar', 'ifpr_theme' ),
        'add_new'               => __( 'Add New', 'ifpr_theme' ),
        'add_new_item'          => __( 'Add New Laboratory', 'ifpr_theme' ),
        'new_item'              => __( 'New Laboratory', 'ifpr_theme' ),
        'edit_item'             => __( 'Edit Laboratory', 'ifpr_theme' ),
        'view_item'             => __( 'View Laboratory', 'ifpr_theme' ),
        'all_items'             => __( 'All Laboratories', 'ifpr_theme' ),
        'search_items'          => __( 'Search Laboratories', 'ifpr_theme' ),
        'parent_item_colon'     => __( 'Parent Laboratories:', 'ifpr_theme' ),
        'not_found'             => __( 'No laboratories found.', 'ifpr_theme' ),
        'not_found_in_trash'    => __( 'No laboratories found in Trash.', 'ifpr_theme' ),
        'featured_image'        => _x( 'Laboratory Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'ifpr_theme' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'ifpr_theme' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'ifpr_theme' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'ifpr_theme' ),
        'archives'              => _x( 'Laboratory archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'ifpr_theme' ),
        'insert_into_item'      => _x( 'Insert into laboratory', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'ifpr_theme' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this laboratory', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'ifpr_theme' ),
        'filter_items_list'     => _x( 'Filter laboratories list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'ifpr_theme' ),
        'items_list_navigation' => _x( 'Laboratories list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'ifpr_theme' ),
        'items_list'            => _x( 'Laboratories list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'ifpr_theme' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'laboratory' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions' ),
    );

    register_post_type( 'laboratory', $args );
}

add_action( 'init', 'ifpr_laboratory_cpt' );

/**
 * Create a custom taxonomy called "area" for the post type "laboratory".
 *
 * @see register_post_type() for registering custom post types.
 */
function ifpr_laboratory_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Areas', 'taxonomy general name', 'ifpr_theme' ),
        'singular_name'     => _x( 'Area', 'taxonomy singular name', 'ifpr_theme' ),
        'search_items'      => __( 'Search Areas', 'ifpr_theme' ),
        'all_items'         => __( 'All Areas', 'ifpr_theme' ),
        'parent_item'       => __( 'Parent Area', 'ifpr_theme' ),
        'parent_item_colon' => __( 'Parent Area:', 'ifpr_theme' ),
        'edit_item'         => __( 'Edit Area', 'ifpr_theme' ),
        'update_item'       => __( 'Update Area', 'ifpr_theme' ),
        'add_new_item'      => __( 'Add New Area', 'ifpr_theme' ),
        'new_item_name'     => __( 'New Area Name', 'ifpr_theme' ),
        'menu_name'         => __( 'Area', 'ifpr_theme' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'area' ),
    );

    register_taxonomy( 'area', array( 'laboratory' ), $args );

    unset( $args );
    unset( $labels );

    // Add new taxonomy, NOT hierarchical (like tags)
    $labels = array(
        'name'                       => _x( 'Campus', 'taxonomy general name', 'ifpr_theme' ),
        'singular_name'              => _x( 'Campus', 'taxonomy singular name', 'ifpr_theme' ),
        'search_items'               => __( 'Search Campus', 'ifpr_theme' ),
        'popular_items'              => __( 'Popular Campus', 'ifpr_theme' ),
        'all_items'                  => __( 'All Campus', 'ifpr_theme' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Campus', 'ifpr_theme' ),
        'update_item'                => __( 'Update Campus', 'ifpr_theme' ),
        'add_new_item'               => __( 'Add New Campus', 'ifpr_theme' ),
        'new_item_name'              => __( 'New Campus Name', 'ifpr_theme' ),
        'separate_items_with_commas' => __( 'Separate campus with commas', 'ifpr_theme' ),
        'add_or_remove_items'        => __( 'Add or remove campus', 'ifpr_theme' ),
        'choose_from_most_used'      => __( 'Choose from the most used campus', 'ifpr_theme' ),
        'not_found'                  => __( 'No campus found.', 'ifpr_theme' ),
        'menu_name'                  => __( 'Campus', 'ifpr_theme' ),
    );

    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_in_rest'          => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'campus' ),
    );

    register_taxonomy( 'campus', 'laboratory', $args );
}
// hook into the init action and call ifpr_laboratory_taxonomies when it fires
add_action( 'init', 'ifpr_laboratory_taxonomies', 0 );
