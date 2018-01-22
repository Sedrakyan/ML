<?php
/**
 * ml functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ml
 */

if ( ! function_exists( 'ml_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ml_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ml, use a find and replace
		 * to change 'ml' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ml', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'ml' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'ml_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo');
	}
endif;
add_action( 'after_setup_theme', 'ml_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ml_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ml_content_width', 640 );
}
add_action( 'after_setup_theme', 'ml_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ml_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ml' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ml' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s single-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ml_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ml_scripts() {
    wp_enqueue_style( 'ml-animate', get_template_directory_uri() . '/css/animate.css' );
    wp_enqueue_style( 'ml-bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( 'ml-style', get_stylesheet_uri() );
    wp_enqueue_style( 'ml-font-awesome', get_template_directory_uri() . '/css/font-awesome.css' );
    wp_enqueue_style( 'ml-jquery.fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css' );
    wp_enqueue_style( 'ml-slick', get_template_directory_uri() . '/css/slick.css' );
    if( defined('FW')) {
        wp_enqueue_style('ml-style-test', get_template_directory_uri() . '/css/' . fw_get_db_settings_option('version') . '-style.css');
        wp_enqueue_style('ml-switcher', get_template_directory_uri() . '/css/template-color/' . fw_get_db_settings_option('color-scheme') . '-template.css');
    } else {
        wp_enqueue_style('ml-style-test', get_template_directory_uri() . '/css/dark-style.css');
        wp_enqueue_style('ml-switcher', get_template_directory_uri() . '/css/template-color/lite-blue-template.css');
    }
    wp_enqueue_script( 'ml-jquery', get_template_directory_uri() . '/js/jquery-1.12.4.min.js', array(), '', true );
    wp_enqueue_script( 'ml-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '', true );

    wp_enqueue_script( 'ml-slick', get_template_directory_uri() . '/js/slick.js', array(), '', true );
    wp_enqueue_script( 'ml-waypoints.min', get_template_directory_uri() . '/js/waypoints.min.js', array(), '', true );
    wp_enqueue_script( 'ml-counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), '', true );
    wp_enqueue_script( 'ml-jquery.fancybox.pack', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array(), '', true );
    wp_enqueue_script( 'ml-jquery.mixitup', get_template_directory_uri() . '/js/jquery.mixitup.js', array(), '', true );
    wp_enqueue_script( 'ml-wow', get_template_directory_uri() . '/js/wow.js', array(), '', true );
    wp_enqueue_script( 'ml-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
    wp_enqueue_script( 'ml-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    wp_enqueue_script( 'ml-custom', get_template_directory_uri() . '/js/custom.js', array(), '', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ml_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

require_once get_template_directory() . '/TGM-Plugin-Activation-2.6.1/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'site_register_required_plugins' );

function site_register_required_plugins() {
    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        // This is an example of how to include a plugin bundled with a theme.
        array(
            'name'               => 'G-Lock WPNewsman Lite', // The plugin name.
            'slug'               => 'wpnewsman-newsletters', // The plugin slug (typically the folder name).
            'source'             => get_template_directory() . '/lib/plugins/wpnewsman-newsletters.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),
        array(
            'name'               => 'Unyson', // The plugin name.
            'slug'               => 'unyson', // The plugin slug (typically the folder name).
            'source'             => get_template_directory() . '/lib/plugins/unyson.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),
    );

    /*
     * Array of configuration settings. Amend each line as needed.
     *
     * TGMPA will start providing localized text strings soon. If you already have translations of our standard
     * strings available, please help us make TGMPA even better by giving us access to these translations or by
     * sending in a pull-request with .po file(s) with the translations.
     *
     * Only uncomment the strings in the config array if you want to customize the strings.
     */
    $config = array(
        'id'           => 'site',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
    );

    tgmpa( $plugins, $config );
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

add_filter( 'get_custom_logo', 'change_logo_class' );

function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo-link', 'navbar-brand logo', $html );
    $html = str_replace( 'custom-logo', '', $html );

    return $html;
}

add_action('wp_enqueue_scripts', 'my_register_javascript', 100);

function my_register_javascript() {
    wp_register_script('mediaelement', plugins_url('wp-mediaelement.min.js', __FILE__), array('jquery'), '4.8.2', true);
    wp_enqueue_script('mediaelement');
}

function _action_theme_include_custom_option_types() {
    require_once get_template_directory() . '/inc/includes/option-types/number/class-fw-option-type-number.php';
}

add_action('fw_option_types_init', '_action_theme_include_custom_option_types', 9);

function prefix_send_email_to_admin() {
    if (isset($_POST['name']) && $_POST['name'] && isset($_POST['email']) && $_POST['email'] && isset($_POST['content']) && $_POST['content'] && isset($_POST['send_to']) && $_POST['send_to']) {
        if(wp_mail( $_POST['send_to'], 'Message', $_POST['content'], ['From:'.$_POST['email']] )) {
            wp_redirect( home_url() .'?success=1#contact' );
            exit;
        } else {
            wp_redirect( home_url() .'?success=0#contact' );
            exit;
        };
    } else {
        wp_redirect( home_url() .'?success=0#contact' );
        exit;
    }
}

add_action( 'admin_post_nopriv_contact_form', 'prefix_send_email_to_admin' );

add_action( 'admin_post_contact_form', 'prefix_send_email_to_admin' );

function wpb_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );

if ( defined('FW') ) {
    // Register and load the widget
    function pp_load_widget() {
        register_widget( 'Ml_pp_widget' );
    }
    add_action( 'widgets_init', 'pp_load_widget' );
// Register and load the widget
    function ml_instagram_feed_load_widget() {
        register_widget( 'Ml_instagram_feed_widget' );
    }
    add_action( 'widgets_init', 'ml_instagram_feed_load_widget' );

// Creating the ML Popular Posts widget
    class Ml_pp_widget extends WP_Widget
    {
        function __construct()
        {
            parent::__construct(

// Base ID of ML Popular Posts widget
                'pp_widget',

// Widget name will appear in UI
                __('Popular Posts', 'pp_widget_domain'),

// Widget description
                array('description' => __('Show popular posts', 'pp_widget_domain'),)
            );
        }

// Creating ML Popular Posts widget front-end

        public function widget($args, $instance)
        {
            $title = apply_filters('widget_title', $instance['title']);
            $empty = true;
            foreach (get_posts() as $post) :
                if (fw_get_db_post_option($post->ID, 'popular')) :
                    $empty = false;
                    break;
                endif;
            endforeach;
// before and after ML Popular Posts widget arguments are defined by themes
            if (!$empty) {
                echo $args['before_widget'];
                if (!empty($title))
                    echo $args['before_title'] . $title . $args['after_title'];

// This is where you run the code and display the output
                echo '<div class="popular-post-widget">';
                foreach (get_posts(['posts_per_page'   => -1]) as $post) :
                    if (fw_get_db_post_option($post->ID, 'popular')) :
                        ?>
                        <div class="media">
                            <div class="media-left"><a
                                        href="<?= $post->guid ?>"><?= get_the_post_thumbnail($post->ID, 'full','class=media-object') ?>
                                </a></div>
                            <div class="media-body"><h4 class="media-heading"><a
                                            href="<?= $post->guid ?>"><?= $post->post_title ?>
                                    </a></h4>
                                <p><?= $post->post_excerpt ? cut_string($post->post_excerpt) : cut_string($post->post_content) ?></p></div>
                        </div>
                    <?php
                    endif;
                endforeach;
                echo '</div>';
                echo $args['after_widget'];
            }
        }

// ML Popular Posts widget Backend
        public function form($instance)
        {
            if (isset($instance['title'])) {
                $title = $instance['title'];
            } else {
                $title = __('Popular', 'pp_widget_domain');
            }
// ML Popular Posts widget admin form
            ?>
            <p>
                <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                       name="<?php echo $this->get_field_name('title'); ?>" type="text"
                       value="<?php echo esc_attr($title); ?>"/>
            </p>
            <?php
        }

// Updating ML Popular Posts widget replacing old instances with new
        public function update($new_instance, $old_instance)
        {
            $instance = array();
            $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
            return $instance;
        }
    } // Class Ml_pp_widget ends here

// Creating Instagram feed widget
    class Ml_instagram_feed_widget extends WP_Widget
    {

        function __construct()
        {
            parent::__construct(

// Base ID of Instagram feed
                'ml_instagram_feed_widget',

// Instagram feed name will appear in UI
                __('Instagram Feeds', 'ml_instagram_feed_widget_domain'),

// Instagram feed description
                array('description' => __('Show instagram feeds', 'ml_instagram_feed_widget_domain'),)
            );
        }

// Creating Instagram feed front-end

        public function widget($args, $instance)
        {
            $title = apply_filters('widget_title', $instance['title']);
            if (fw_get_db_settings_option('instagram_feed')):
                echo $args['before_widget'];
                if (!empty($title)) {
                    echo $args['before_title'] . $title . $args['after_title'];
                }

// before and after Instagram feed arguments are defined by themes\
                echo '    <div class="instagram-feed">';

                foreach (fw_get_db_settings_option('instagram_feed') as $item):
                    echo '<div class="single-instagram-feed">
                         <img src="' . $item['image']['url'] . '" alt="img">
                     </div>';
                endforeach;

                echo '</div>';
                echo $args['after_widget'];
            endif;
        }

// Instagram feed Backend
        public function form($instance)
        {
            if (isset($instance['title'])) {
                $title = $instance['title'];
            } else {
                $title = __('Instagram Feed', 'ml_instagram_feed_widget_domain');
            }
// Instagram feed admin form
            ?>
            <p>
                <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                       name="<?php echo $this->get_field_name('title'); ?>" type="text"
                       value="<?php echo esc_attr($title); ?>"/>
            </p>
            <?php
        }

// Updating Instagram feed replacing old instances with new
        public function update($new_instance, $old_instance)
        {
            $instance = array();
            $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
            return $instance;
        }
    } // Class Ml_instagram_feed_widget ends here
}

function wpbeginner_numeric_posts_nav() {

    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation"><ul>' . "\n";

    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );

    echo '</ul></div>' . "\n";

}

function like() {
    $post_id = (int) $_REQUEST['post_id'];
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    global $wpdb;
    $sql = "SELECT * FROM ".$wpdb->prefix."postmeta WHERE post_id=".$post_id." AND meta_key='likes' AND meta_value='".$ip."'";

    $results = $wpdb->get_results( $sql, OBJECT );
//    var_dump($sql); die;
    if ($results) {
        $wpdb->delete($wpdb->prefix.'postmeta', array(
            'post_id' => $post_id,
            'meta_key' => 'likes',
            'meta_value' => $ip
        ));
        echo json_encode(array('count' => get_likes_count($post_id), 'like' => 0));
        exit();
    } else {
        $wpdb->insert(
            $wpdb->prefix.'postmeta',
            array(
                'post_id' => $post_id,
                'meta_key' => 'likes',
                'meta_value' => $ip
            )
        );
        echo json_encode(array('count' => get_likes_count($post_id), 'like' => 1));
        exit();
    }
}
add_action('wp_ajax_nopriv_like', 'like');
add_action('wp_ajax_like', 'like');

function get_likes_count($post_id) {
    global $wpdb;
    $results = $wpdb->get_results("SELECT COUNT(post_id)  FROM {$wpdb->prefix}postmeta WHERE post_id={$post_id} AND meta_key='likes'", ARRAY_N );
    return $results[0][0];
}
add_action('wp_ajax_nopriv_get_likes_count', 'get_likes_count');
add_action('wp_ajax_get_likes_count', 'get_likes_count');

function liked($post_id) {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    global $wpdb;
    $results = $wpdb->get_results("SELECT COUNT(post_id)  FROM {$wpdb->prefix}postmeta WHERE post_id={$post_id} AND meta_key='likes' AND meta_value='".$ip."'", ARRAY_N );
    return (bool) $results[0][0];
}
function cut_string($string) {
    $ending = '';
    if (strlen($string) > 55){
        $ending = ' ...';
    }
    $string = substr($string, 0, 55);
    $pos = strrpos($string, ' ', -1);
    $string = substr($string, 0, $pos).$ending;
    return $string;
}

/************* COMMENTS HOOK *************/

function ml_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment; ?>

<li class="comment-item" id="li-comment-<?php comment_ID() ?>">
    <div class="comment-box" id="comment-<?php comment_ID(); ?>">
        <div class="flex-center">
            <?php echo get_avatar($comment, 80); ?>
                <div class="comment-content">
                    <div class="flex-baseline">
                        <h3><?php echo get_comment_author()?></h3>
                        <span class="time"><?php printf(__('%1$s at %2$s', 'unik'), get_comment_date(),get_comment_time()) ?></span>
                    </div>
                    <?php edit_comment_link(__('(Edit)', 'unik'),'  ','') ?>
                    <?php comment_text() ?>
                    <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'style'=>'<ul class="depth"', 'max_depth' => $args['max_depth']))) ?>
                </div>
            <?php if ($comment->comment_approved == '0') : ?><p><em><?php _e('Your comment is awaiting moderation.', 'unik') ?></em></p><?php endif; ?>
        </div>
    </div>
<?php }

/*****************************************/

?>