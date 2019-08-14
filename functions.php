<?php 


/**
 * Appi Class Autoloader.
 *
 * @package Appi
 * @since 0.1.0
 */
class appi_Autoloader {
    /**
     * Singleton.
     *
     * @since 0.1.0
     * @var appi_Autoloader - Single instance.
     */
    private static $_instance = null;

    /**
     * Private Construct.
     *
     * @package Appi
     * @since 0.1.0
     */
    private function __construct() {
        spl_autoload_register( array( $this, 'load' ) );
    }

    /**
     * Singleton method.
     *
     * @package Appi
     * @since 0.1.0
     */
    public static function _instance() {
        if ( ! self::$_instance ) {
            self::$_instance = new appi_Autoloader();
        }
        return self::$_instance;
    }

    /**
     * Class Loader.
     *
     * @package Appi
     * @since 0.1.0
     *
     * @param string $class_name - Class name to load.
     * @return null - Do not return anything.
     */
    public function load( $class_name ) {
    	
        $file = str_replace( '_', '-', strtolower( $class_name ) );
        $file = 'class-' . $file;


        if ( is_readable(trailingslashit( get_template_directory() . '/lib' ) . str_replace('\\', '-', $file)  . '.php') ) {
            include_once trailingslashit( get_template_directory() . '/lib' ) . str_replace('\\', '-', $file)  . '.php';
        }
        return;
    }
}

appi_Autoloader::_instance();

/**
 * Class autoloader.
 */
$post = new Appi\Post();
echo $post->Content();