<?php
/**
 * @package MRLRockSymbol
 */

namespace RockSymbol\Base;

class BaseController
{

    public $plugin_path;
    public $plugin_url;
    public $plugin;
    public $managers_admin = array();

    public function __construct(){
        $this->plugin_path = plugin_dir_path( dirname( __FILE__, 2 ) );
        $this->plugin_url = plugin_dir_url( dirname( __FILE__, 2 ) );
        $this->plugin = plugin_basename( realpath(__DIR__ . '/../..') );// link settings marche pas la con de ses mort

        /*Représente les différentes sous-pages qui vont servir à créer les checkbox
        La clés représente l'id et la valeur le titre de la sous-page*/
        $this->managers_admin = [
            'rock_symbol_entete' => 'Entête',
            'rock_symbol_historique' => 'Historique',
            'rock_symbol_diaporama' => 'Diaporama',
            'rock_symbol_youtube' => 'Youtube',
            'rock_symbol_bienfaiteurs' => 'Bienfaiteurs',
        ];
    }

    //Vérification dans la base de donné si la sous page a été checké
    public function activated(  string $key )
    {
        $option = get_option('mrl_rock_symbol_plugin');
        return isset($option[$key]) ? $option[$key] : false;

    }
}
;