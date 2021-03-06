<?php
/*
 * Plugin Name:       Conbusi Companion
 * Plugin URI:        https://colorlib.com/wp/themes/conbusi/
 * Description:       Conbusi Companion is a companion for Conbusi theme.
 * Version:           1.0.1
 * Author:            Colorlib
 * Author URI:        https://colorlib.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       conbusi-companion
 * Domain Path:       /languages
 */


if( !defined( 'WPINC' ) ){
    die;
}

/*************************
    Define Constant
*************************/

// Define version constant
if( !defined( 'CONBUSI_COMPANION_VERSION' ) ){
    define( 'CONBUSI_COMPANION_VERSION', '1.1' );
}

// Define dir path constant
if( !defined( 'CONBUSI_COMPANION_DIR_PATH' ) ){
    define( 'CONBUSI_COMPANION_DIR_PATH', plugin_dir_path( __FILE__ ) );
}

// Define inc dir path constant
if( !defined( 'CONBUSI_COMPANION_INC_DIR_PATH' ) ){
    define( 'CONBUSI_COMPANION_INC_DIR_PATH', CONBUSI_COMPANION_DIR_PATH.'inc/' );
}

// Define sidebar widgets dir path constant
if( !defined( 'CONBUSI_COMPANION_SW_DIR_PATH' ) ){
    define( 'CONBUSI_COMPANION_SW_DIR_PATH', CONBUSI_COMPANION_INC_DIR_PATH.'sidebar-widgets/' );
}

// Define elementor widgets dir path constant
if( !defined( 'CONBUSI_COMPANION_EW_DIR_PATH' ) ){
    define( 'CONBUSI_COMPANION_EW_DIR_PATH', CONBUSI_COMPANION_INC_DIR_PATH.'elementor-widgets/' );
}

// Define demo data dir path constant
if( !defined( 'CONBUSI_COMPANION_DEMO_DIR_PATH' ) ){
    define( 'CONBUSI_COMPANION_DEMO_DIR_PATH', CONBUSI_COMPANION_INC_DIR_PATH.'demo-data/' );
}


$current_theme = wp_get_theme();

$is_parent = $current_theme->parent();



if( ( 'Conbusi' ==  $current_theme->get( 'Name' ) ) || ( $is_parent && 'Conbusi' == $is_parent->get( 'Name' ) ) ){
    require_once CONBUSI_COMPANION_DIR_PATH . 'conbusi-init.php';
}else{

    add_action( 'admin_notices', 'conbusi_companion_admin_notice', 99 );
    function conbusi_companion_admin_notice() {
        $url = 'https://demo.colorlib.com/conbusi/';
    ?>
        <div class="notice-warning notice">
            <p><?php printf( __( 'In order to use the <strong>Conbusi Companion</strong> plugin you have to also install the %1$sConbusi Theme%2$s', 'conbusi-companion' ), '<a href="'.esc_url( $url ).'" target="_blank">', '</a>' ); ?></p>
        </div>
        <?php
    }
}

?>