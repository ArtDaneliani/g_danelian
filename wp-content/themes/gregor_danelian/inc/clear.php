<?php
	//theme editor
	function disable_mytheme_action() {
      define('DISALLOW_FILE_EDIT', TRUE);
    }
    add_action('init','disable_mytheme_action');

    //emojis
    function disable_emojis() {
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' );	
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
		add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
		remove_action('wp_head', 'wp_generator'); 
		remove_action ('wp_head', 'rsd_link');
		remove_action( 'wp_head', 'wlwmanifest_link');
	}
	add_action( 'init', 'disable_emojis' );

	function disable_emojis_tinymce( $plugins ) {
		if ( is_array( $plugins ) ) {
			return array_diff( $plugins, array( 'wpemoji' ) );
		} else {
			return array();
		}
	}

	function disable_embeds_code_init() {
		 // Remove the REST API endpoint.
		remove_action( 'rest_api_init', 'wp_oembed_register_route' );
		 // Turn off oEmbed auto discovery.
		add_filter( 'embed_oembed_discover', '__return_false' );
		 // Don't filter oEmbed results.
		remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
		 // Remove oEmbed discovery links.
		remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
		 // Remove oEmbed-specific JavaScript from the front-end and back-end.
		remove_action( 'wp_head', 'wp_oembed_add_host_js' );
		add_filter( 'tiny_mce_plugins', 'disable_embeds_tiny_mce_plugin' );
		 // Remove all embeds rewrite rules.
		add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
		 // Remove filter of the oEmbed result before any HTTP requests are made.
		remove_filter( 'pre_oembed_result', 'wp_filter_pre_oembed_result', 10 );
	}
	add_action( 'init', 'disable_embeds_code_init', 9999 );

	function disable_embeds_tiny_mce_plugin($plugins) {
	    return array_diff($plugins, array('wpembed'));
	}

	function disable_embeds_rewrites($rules) {
	    foreach($rules as $rule => $rewrite) {
	        if(false !== strpos($rewrite, 'embed=true')) {
	            unset($rules[$rule]);
	        }
	    }
	    return $rules;
	}


	//comments
	function df_disable_comments_post_types_support() {
		$post_types = get_post_types();
		foreach ($post_types as $post_type) {
			if(post_type_supports($post_type, 'comments')) {
				remove_post_type_support($post_type, 'comments');
				remove_post_type_support($post_type, 'trackbacks');
			}
		}
	}
	add_action('admin_init', 'df_disable_comments_post_types_support');

	// Close comments on the front-end
	function df_disable_comments_status() {
		return false;
	}
	add_filter('comments_open', 'df_disable_comments_status', 20, 2);
	add_filter('pings_open', 'df_disable_comments_status', 20, 2);

	// Hide existing comments
	function df_disable_comments_hide_existing_comments($comments) {
		$comments = array();
		return $comments;
	}
	add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);

	// Remove comments page in menu
	function df_disable_comments_admin_menu() {
		remove_menu_page('edit-comments.php');
		//remove_menu_page('edit.php');
		//remove_menu_page('edit.php?post_type=page');
	}
	add_action('admin_menu', 'df_disable_comments_admin_menu');

	// Redirect any user trying to access comments page
	function df_disable_comments_admin_menu_redirect() {
		global $pagenow;
		if ($pagenow === 'edit-comments.php') {
			wp_redirect(admin_url()); exit;
		}
	}
	add_action('admin_init', 'df_disable_comments_admin_menu_redirect');

	// Remove comments metabox from dashboard
	function df_disable_comments_dashboard() {
		remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
	}
	add_action('admin_init', 'df_disable_comments_dashboard');

	// Remove comments links from admin bar
	function df_disable_comments_admin_bar() {
		if (is_admin_bar_showing()) {
			remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
		}
	}
	add_action('init', 'df_disable_comments_admin_bar');

	function remove_comments(){
        global $wp_admin_bar;
        $wp_admin_bar->remove_menu('comments');
	}
	add_action( 'wp_before_admin_bar_render', 'remove_comments' );

	//categories, tags
	function ryanbenhase_unregister_tags() {
	    unregister_taxonomy_for_object_type( 'post_tag', 'post' );
	    //unregister_taxonomy_for_object_type( 'category', 'post' );
	}
	add_action( 'init', 'ryanbenhase_unregister_tags' );

	//basic redirects
	function dnshulga_redirect() {
		if (is_author() || is_attachment() ) {
			wp_redirect(get_home_url(), 301);
			exit;
		}
	}
	add_action('template_redirect', 'dnshulga_redirect');

	/*add_filter('acf/settings/show_admin', '__return_false');
	function pands_admin_colors() {
	   echo '<style type="text/css">
	           h2.hndle.ui-sortable-handle a.acf-hndle-cog { display: none; visibility: hidden }
	         </style>';
	}
	add_action('acf/input/admin_head', 'pands_admin_colors');
	function disallowed_acf_page() {
	    global $pagenow;
	    if ($pagenow == 'edit.php' && isset($_GET['post_type']) && $_GET['post_type'] == 'acf-field-group') {
	        wp_redirect(admin_url(), 301);
	        exit;
	    }
	    $type = get_post_type($_GET['post']);
	    if ($type == 'acf-field-group') {
	        wp_redirect(admin_url(), 301);
	        exit;
	    }
	}
	add_action( 'admin_init', 'disallowed_acf_page' );*/


	//headers html for all wp_mail()
	function wpse27856_set_content_type(){
	    return "text/html";
	}
	add_filter( 'wp_mail_content_type','wpse27856_set_content_type' );
	
	
	// DISCONNECT THE COMPRESSION OF MEDIAFILES
add_filter('jpeg_quality', 'filter_function_jpeg');
function filter_function_jpeg($quality)
{
	return 100;
}
	

	function getTplPageURL($TEMPLATE_NAME){
	    $url = null;
	    $pages = get_pages(array(
	        'meta_key' => '_wp_page_template',
	        'meta_value' => $TEMPLATE_NAME
	    ));
	    if(isset($pages[0])) {
	        $url = get_page_link($pages[0]->ID);
	    }
	    return $url;
	 }

	 function getTplPageID($TEMPLATE_NAME) {
	 	$id = null;
	    $pages = get_pages(array(
	        'meta_key' => '_wp_page_template',
	        'meta_value' => $TEMPLATE_NAME
	    ));
	    if(isset($pages[0])) {
	        $id = $pages[0]->ID;
	    }
	    return $id;
	 }