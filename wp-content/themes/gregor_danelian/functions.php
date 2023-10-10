<?php
	include_once "inc/clear.php";

	define('TEMPLATE_URL', get_template_directory_uri());
// remove autoinsert tags p
//remove_filter('the_content', 'wpautop');
//remove_filter('the_excerpt', 'wpautop');
//    acf fields
function register_acf_options_pages() {
    // Check function exists.
    if( !function_exists('acf_add_options_page') )
        return;

    // add parent
    $parent = acf_add_options_page(array(
        'page_title' 	=> 'Настройки RU',
        'menu_title' 	=> 'Настройки RU',
        'menu_slug'		=> 'gener-options',
        'redirect' 		=> false
    ));

    // add sub page
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Главная страница RU',
        'menu_title' 	=> 'Главная страница RU',
        'menu_slug'		=> 'main-options',
        'parent_slug' 	=> $parent['menu_slug']
    ));

    $parent_en = acf_add_options_page(array(
        'page_title' 	=> 'Настройки EN',
        'menu_title' 	=> 'Настройки EN',
        'menu_slug'		=> 'gener-options-en',
        'redirect' 		=> false,
        'post_id'		=> 'option_en'
    ));

    // add sub page
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Главная страница EN',
        'menu_title' 	=> 'Главная страница EN',
        'menu_slug'		=> 'main-options-en',
        'parent_slug' 	=> $parent_en['menu_slug'],
        'post_id'		=> 'option_en'
    ));
}
// Hook into acf initialization.
add_action('acf/init', 'register_acf_options_pages');


    

	add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method(){
    wp_dequeue_style( 'wp-block-library' );
    wp_enqueue_style( 'app', TEMPLATE_URL.'/css/styles.min.css', array(), '1.0', 'all');
    wp_enqueue_style( 'app', TEMPLATE_URL.'/bootstrap/css/bootstrap.css', array(), '1.0', 'all');

    wp_enqueue_style( 'gregor_danelian', get_stylesheet_uri(), array(), '1.0', 'all');

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', array(), '1.0', true);

    wp_enqueue_script( 'app', TEMPLATE_URL.'/js/scripts.min.js', array(), '1.0', true);
    wp_enqueue_script( 'app', TEMPLATE_URL.'/bootstrap/js/bootstrap.js', array(), '1.0', true);
    wp_localize_script( 'app', 'app_params', array(
        'template_url'		=> TEMPLATE_URL
    ));
}

    add_theme_support( 'post-thumbnails', array ('post', 'page' ) ); // вывод миниатюр для всех типов постов
    
	add_action( 'after_setup_theme', function(){
		load_theme_textdomain( 'gregor_danelian', get_template_directory() . '/languages' );
	});

	add_action('wp_footer', 'ajax_form', 99);

	function ajax_form(){ ?>
	<script type="text/javascript">
		$('form').submit(function(){

			var form = $(this);
			var data = new FormData(this);

			$.ajax({
				type: 'POST',
				url: app_params.template_url + '/inc/mailer.php',    //url: app_params.template_url + '/inc/mailer.php',
				data: data,
				processData: false,
                contentType: false,
				cache: false,
				success: function(data){
					form.trigger('reset');
					//form.after('<p class="status">' + data + '</p>');
                    <?php
//                        $lang = pll_current_language();
//                        switch ($lang) {
//                            case 'en': {
//                                $page = get_permalink(103);
//                                break;
//                            }
//                            default: {
//                                $page = get_permalink(52);
//                                break;
//                            }
//                        }
                    $page = get_permalink(52);
                    ?>
                    window.location.href = '<?php echo $page ?>';
				},
				error: function(error){
					console.log(error);
				}
			});

			return false;
		})
	</script>

<?php }

//Определение шаблона для страниц
//$template - путь до файла шаблона.
add_filter('template_include', 'my_template');
function my_template( $template ) {

    if( is_single()){
        if ( $new_template = locate_template( array( 'catalog.php' ) ) )
            return $new_template ;
    }
//	if( is_page('page-test')) {
//		if ( $new_template = locate_template( array( 'page-test.php' ) ) )
//			return $new_template ;
//
//	}
    if( is_page()) {
        if ( $new_template = locate_template( array( 'page.php' ) ) )
            return $new_template ;

    }
    return $template ;
}




//Скрываем страницу thanks-page из админки
//function true_hide_posts_from_admin( $query ) {
//    global $pagenow;
//    if( is_admin() && 'edit.php' == $pagenow ){
//        $query->set( 'post__not_in', array(99) );
//    }
//    return $query;
//}
//add_action( 'pre_get_posts' ,'true_hide_posts_from_admin' );



// OFF AUTO UPDATE PLUGINS
function filter_plugin_updates( $update ) {
    global $DISABLE_UPDATE; // см. wp-config.php
    if( !is_array($DISABLE_UPDATE) || count($DISABLE_UPDATE) == 0 ) {
        return $update;
    }
    foreach( $update->response as $name => $val ){
        foreach( $DISABLE_UPDATE as $plugin ){
            if( stripos($name,$plugin) !== false ){
                unset( $update->response[ $name ] );
            }
        }
    }
    return $update;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );
// OFF AUTO UPDATE CORE WORDPRESS
add_filter( 'allow_dev_auto_core_updates', '__return_false' );
?>