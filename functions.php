<?php

// WP-SCSS：ページをロードするたびにscssファイルを強制的にコンパイル
define( 'WP_SCSS_ALWAYS_RECOMPILE', true );

function load_js() {
	//管理画面を除外
	if ( !is_admin() ){

		wp_enqueue_style( 'reset', get_template_directory_uri() . '/stylesheets/css/reset.css', "", '' );
		wp_enqueue_style( 'index', get_template_directory_uri() . '/stylesheets/css/index.css', "", '' );
		wp_enqueue_style( 'header', get_template_directory_uri() . '/stylesheets/css/header.css', "", '' );
		wp_enqueue_style( 'footer', get_template_directory_uri() . '/stylesheets/css/footer.css', "", '' );
		wp_enqueue_style( 'service', get_template_directory_uri() . '/stylesheets/css/service.css', "", '' );
		wp_enqueue_style( 'plan', get_template_directory_uri() . '/stylesheets/css/plan.css', "", '' );
		wp_enqueue_style( 'performance', get_template_directory_uri() . '/stylesheets/css/performance.css', "", '' );
		wp_enqueue_style( 'info', get_template_directory_uri() . '/stylesheets/css/info.css', "", '' );
		wp_enqueue_style( 'breadcrumb', get_template_directory_uri() . '/stylesheets/css/breadcrumb.css', "", '' );
		wp_enqueue_style( 'company', get_template_directory_uri() . '/stylesheets/css/company.css', "", '' );

		//自作スクリプトや、jQueryのライブラリも同様に読み込みます。
		wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), NULL, true );
		wp_enqueue_script( 'tenju', get_template_directory_uri() . '/javascript/tenju.js');
	}
}

add_action( 'init', 'load_js' );

?>