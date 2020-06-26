<?php
/**
 * @package MRLRockSymbol
 */

namespace RockSymbol\Base;

use \RockSymbol\Base\BaseController;

class Enqueue extends BaseController
{

    public function register(){
        add_action( 'admin_enqueue_scripts', [ $this, 'enqueue' ] );//Envoi le JS et CSS
        add_action( 'wp_ajax_myprefix_get_image', 'myprefix_get_image'   );
    }

    function enqueue(){
        wp_enqueue_style('caa-style', $this->plugin_url . 'assets/CSS/caa-style.css', __FILE__ );
        wp_enqueue_script('caa-script', $this->plugin_url . 'assets/JS/caa-script.js', __FILE__ );
    }
}