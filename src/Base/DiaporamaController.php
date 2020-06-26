<?php
/**
 * @package MRLRockSymbol
 */

namespace RockSymbol\Base;

use \RockSymbol\API\SettingsApi;
use \RockSymbol\Base\BaseController;
use \RockSymbol\API\Callbacks\AdminCallbacks;

class DiaporamaController extends BaseController
{
    public $settings;
    public $callbacks;
    public $subpages = array();

    public $custom_post_types = [];

    public function register()
    {
        
        if ( ! $this->activated( 'rock_symbol_diaporama' ) ) return;

        $this->callbacks = new AdminCallbacks;
        $this->settings = new SettingsApi;
        $this->setSubpages();
        $this->settings->addSubPages($this->subpages)->register();
    }

    public function setSubpages(){
        $this->subpages = [
            [
                'parent_slug' => 'mrl_rock_symbol_plugin',
                'page_title' => 'Diaporama',
                'menu_title' => 'Diaporama',
                'capability' => 'manage_options',
                'menu_slug' => 'rock_symbol_diaporama',
                'callback' => [$this->callbacks, 'adminDiaporama']
            ]
        ];
    }
}