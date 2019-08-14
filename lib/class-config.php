<?php 

/**
 * Config Class.
 *
 * @package Appi
 * @since 0.1.0
 */
namespace Appi;

class Config {

	public function __construct(){
		add_action( 'after_setup_theme', [$this, 'theme_functions'] );
	}

	/**
     * Class Config.
     *
     * @package Config
     * @since 0.1.0
     * @method theme_functions
     * @return null - Do not return anything.
     */
	public function theme_functions() {

		add_theme_support( 'title-tag' );

	}
}