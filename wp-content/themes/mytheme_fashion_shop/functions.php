<?php
// part 1
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
/**
 * Enqueue scripts and styles.
 */
   /**/
    /**/
function theme_scripts (){

  wp_enqueue_style('fashion_shop-bootstrap-css',get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css', array(), _S_VERSION);
	
  wp_enqueue_style('fashion_shop-owl.carousel-css',get_template_directory_uri() .'/assets/vendor/owl.carousel/assets/owl.carousel.css', array(), _S_VERSION);

  wp_enqueue_style('fashion_shop-animate-css',get_template_directory_uri() .'/assets/vendor/wow/animate.css', array(), _S_VERSION);
	
  wp_enqueue_style('fashion_shop-slideWiz-css',get_template_directory_uri() .'/assets/vendor/slider-js/slideWiz.css', array(), _S_VERSION);

	
  wp_enqueue_style( 'fashion_shop-theme', get_stylesheet_uri(), array(), _S_VERSION );

  wp_enqueue_style('fashion_shop-responsive-css',get_template_directory_uri() .'/assets/css/responsive.css', array(), _S_VERSION);
  


 /*== Bootstrap Js ==*/
  	wp_enqueue_script('fashion_shop-jquery-js', get_template_directory_uri() .'/assets/vendor/jquery/jquery.min.js', array('jquery'), _S_VERSION, true);

  	wp_enqueue_script('fashion_shop-owl.carousel-js', get_template_directory_uri() .'/assets/vendor/owl.carousel/owl.carousel.min.js', array('jquery'), _S_VERSION, true);

  	wp_enqueue_script('fashion_shop-wow-js', get_template_directory_uri() .'/assets/vendor/wow/wow.min.js', array('jquery'), _S_VERSION, true);

  	wp_enqueue_script('fashion_shop-slideWiz-js', get_template_directory_uri() .'/assets/vendor/slider-js/slideWiz.js', array('jquery'), _S_VERSION, true );

		wp_enqueue_script('fashion_shop-bootstrap-js', get_template_directory_uri() .'/assets/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), _S_VERSION, true);

  /* Template Main JS File */
   wp_enqueue_script('fashion_shop-custom-js', get_template_directory_uri().'/assets/js/custom.js',array('jquery'), _S_VERSION, true);

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' ); //wp_enqueue_scripts is a hook /*theme_scripts function name

//part 2 

register_nav_menu("topmenu",__("Top Menu"));
register_nav_menu("footer-1",__("Footer Menu 1"));
register_nav_menu("footer-2",__("Footer Menu 2"));


// part 3
 //for submenu 
require_once get_template_directory() . '/inc/tgm.php';
if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    // file does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // file exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

// part 3.1
 //for submenu 





// part 4
 // add widget
add_action( 'widgets_init', 'wpdocs_register_widgets' );

function wpdocs_register_widgets() {
	register_sidebar( array(
		'name' => __( 'Footer Address', 'wpmu' ),
		'id' => 'footer_address',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	));

		register_sidebar( array(
		'name' => __( 'Product Searchar', 'wpmu' ),
		'id' => 'search_bar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	));
	register_sidebar( array(
		'name' => __( 'Footer Contact', 'wpmu' ),
		'id' => 'footer_contact',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
	));
}

// part 5

	//add menu in admin
	function setup_theme_admin_menus() {
		add_menu_page('Theme settings', 'My Theme fashion_shop', 'manage_options', 
			'tut_theme_settings', 'theme_settings_page');
			 
		add_submenu_page('tut_theme_settings', 
			'Front Page Elements', 'Page setting', 'manage_options', 
			'front-page-elements', 'theme_page_settings'); 
	}
	 
	// We also need to add the handler function for the top level menu
	function theme_settings_page() {
		echo "Settings page <input type='text'>";
	}

	function theme_page_settings() {
		if (isset($_POST["update_settings"])) {

			/* save image */
			if(!empty($_FILES["header_image"]["tmp_name"])){           
				require_once( ABSPATH . 'wp-admin/includes/file.php' );
				$urls = wp_handle_upload($_FILES["header_image"], array('test_form' => false));
				$_POST['header_image']=$urls['url'];
			}
			/* /save image */

			unset($_POST["update_settings"]);
			update_option("theme_settings", $_POST); /* save data to database */
			
		}

	?>

	 <div class="wrap">
        <h2>Page setting</h2>
        <form method="POST" action="" enctype="multipart/form-data">
            <table>
                <tr>
                    <th>
                        <label for="address">Address</label> 
                    </th>
                    <td>
                        <input type="text" name="address" value="<?= isset(get_option("theme_settings")['address'])?get_option("theme_settings")['address']:"" ?>" size="25" />
                    </td>
                </tr>
				<tr>
                    <th>
                        <label for="contact_number">Contact Number</label> 
                    </th>
                    <td>
                        <input type="text" name="contact_number" value="<?= isset(get_option("theme_settings")['contact_number'])?get_option("theme_settings")['contact_number']:"" ?>" size="25" />
                    </td>
                </tr>

				<tr>
                    <th>
                        <label for="email_address">Email Address</label> 
                    </th>
                    <td>
                        <input type="email" name="email_address" value="<?= isset(get_option("theme_settings")['email_address'])?get_option("theme_settings")['email_address']:"" ?>" size="25" />
                    </td>
                </tr>
				<tr>
                    <th>
                        <label for="fb_link">Facebook Link</label> 
                    </th>
                    <td>
                        <input type="text" name="fb_link" value="<?= isset(get_option("theme_settings")['fb_link'])?get_option("theme_settings")['fb_link']:"" ?>" size="25" />
                    </td>
                </tr>
				<tr>
                    <th>
                        <label for="fb_link">Header Image</label> 
                    </th>
                    <td>
					<input type="file" name="header_image" />

						<?php 
							if(isset(get_option("theme_settings")['header_image'])){ ?>
								<img width="80px" src="<?= get_option("theme_settings")['header_image'] ?>" alt="">
						<?php } ?>
                    </td>
                </tr>
            </table>
			<p>
				<input type="submit" value="Save settings" name="update_settings" class="button-primary"/>
			</p>
        </form>
    </div>
<?php }

	add_action("admin_menu", "setup_theme_admin_menus");


	
// part 6
	// custom logo

function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 100,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);

	add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

//part 7
	// add feature image
	add_theme_support( 'post-thumbnails' );

	// part 8
	// custome post type
	function create_posttype() {
	
		register_post_type( 'sliders',
			array(
				'labels' => array(
					'name' => __( 'Home Page Slider' )
				),
				'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'sliders'),
				'show_in_rest' => true,
			)
		);
	}
	// Hooking up our function to theme setup
	add_action( 'init', 'create_posttype' );