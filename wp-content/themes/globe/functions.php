<?php

add_action( 'wp_ajax_sendMail', 'sendMail' );
add_action( 'wp_ajax_nopriv_sendMail', 'sendMail' );
function sendMail(){
	//print_r($_POST);
	$mes = 'name: ' . $_POST['form_name'] . ' Company: ' . $_POST['form_company'] . ' Email: ' . $_POST['form_email'] . ' Phone: ' . $_POST['form_phone'] . ' Location: '  . $_POST['form_location'] . ' Message: ' . $_POST['form_NEEDS'] . ' Date: ' . $_POST['form_date'] . ' Time: ' . $_POST['form_event'];
	
	echo wp_mail( 'sg.sergey123@gmail.com', 'from site', $mes );
	wp_die();
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method(){
	wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'desktop', get_template_directory_uri() . '/static/css/desktop.css');
    wp_enqueue_style( 'mobile', get_template_directory_uri() . '/static/css/mobile.css');
  //  wp_enqueue_style( 'globekit', get_template_directory_uri() . '/static/minified/globekit-styles.min.css');
	
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', "//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js");
    wp_enqueue_script( 'site', get_template_directory_uri() . '/static/js/Site.js');
    wp_enqueue_script( 'formmanager', get_template_directory_uri() . '/static/js/FormManager.js');
    wp_enqueue_script( 'datamanager', get_template_directory_uri() . '/static/js/DataManager.js');
    wp_enqueue_script( 'modelmanager', get_template_directory_uri() . '/static/js/ModelManager.js');
    wp_enqueue_script( 'scrollmanager', get_template_directory_uri() . '/static/js/ScrollManager.js');
    wp_enqueue_script( 'canvasmanager', get_template_directory_uri() . '/static/js/CanvasManager.js');
    wp_enqueue_script( 'matrix', get_template_directory_uri() . '/static/js/globekit/third-party/gl-matrix.js');
    wp_enqueue_script( 'camera', get_template_directory_uri() . '/static/js/globekit/rendering/Camera.js');
    wp_enqueue_script( 'program', get_template_directory_uri() . '/static/js/globekit/rendering/Program.js');
    wp_enqueue_script( 'programmanager', get_template_directory_uri() . '/static/js/globekit/rendering/ProgramManager.js');
    wp_enqueue_script( 'texturemanager', get_template_directory_uri() . '/static/js/globekit/rendering/TextureManager.js');
    wp_enqueue_script( 'pointglobedrawable', get_template_directory_uri() . '/static/js/globekit/drawables/PointGlobeDrawable.js');
    wp_enqueue_script( 'nebuladrawable', get_template_directory_uri() . '/static/js/globekit/drawables/NebulaDrawable.js');
    wp_enqueue_script( 'bokehdrawable', get_template_directory_uri() . '/static/js/globekit/drawables/BokehDrawable.js');
    wp_enqueue_script( 'backgrounddrawable', get_template_directory_uri() . '/static/js/globekit/drawables/BackgroundDrawable.js');
    wp_enqueue_script( 'ringdrawable', get_template_directory_uri() . '/static/js/globekit/drawables/RingDrawable.js');
    wp_enqueue_script( 'earthquakedrawable', get_template_directory_uri() . '/static/js/globekit/drawables/EarthquakeDrawable.js');
    wp_enqueue_script( 'bigQuakedrawable', get_template_directory_uri() . '/static/js/globekit/drawables/BigQuakeDrawable.js');
    wp_enqueue_script( 'model', get_template_directory_uri() . '/static/js/globekit/geometry/Model.js');
    wp_enqueue_script( 'latlng', get_template_directory_uri() . '/static/js/globekit/utils/LatLng.js');
    wp_enqueue_script( 'projectionutil', get_template_directory_uri() . '/static/js/globekit/utils/ProjectionUtil.js');
    wp_enqueue_script( 'animation', get_template_directory_uri() . '/static/js/third-party/brandkit/Animation.js');
    wp_enqueue_script( 'ease', get_template_directory_uri() . '/static/js/third-party/brandkit/Ease.js');
    wp_enqueue_script( 'ajax', get_template_directory_uri() . '/static/js/third-party/brandkit/Ajax.js');
    wp_enqueue_script( 'signal', get_template_directory_uri() . '/static/js/third-party/brandkit/Signal.js');
    wp_enqueue_script( 'splittext', get_template_directory_uri() . '/static/js/third-party/greensock/SplitText.js');
    wp_enqueue_script( 'tweenmax', get_template_directory_uri() . '/static/js/third-party/greensock/TweenMax.js');
    wp_enqueue_script( 'webfontloader', get_template_directory_uri() . '/static/js/third-party/google/WebFontLoader.js', '', '', true);
		wp_enqueue_script('booking', get_template_directory_uri() . '/booking.js', array('jquery'));
		wp_enqueue_script('sendmail', get_template_directory_uri() . '/mails.js', array('jquery'));
		wp_enqueue_script('scrollify', 'https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.19/jquery.scrollify.min.js', array('jquery'));
        wp_localize_script('sendmail', 'send_mail', array(
            'ajax_url' => admin_url('admin-ajax.php')
        ));
}

	add_theme_support('custom-logo');
	
add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){
	register_sidebar( array(
		'name'          => "copyright",
		'id'            => "copyright",
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
		register_sidebar( array(
		'name'          => "calendar",
		'id'            => "calendar",
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
?>