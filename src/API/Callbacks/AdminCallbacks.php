<?php
/**
 * @package MRLRockSymbol
 * 
 * Ici on a tous les callbacks appelé dans les fichiers contrôleur du dossier Base, représentant des pages et/ou sous pages affiché dans le tableau de bord.
 * Chaque fonction reprèsente un template correspondant aux pages/sous-pages lié au tableau de bord.
 */

namespace RockSymbol\API\Callbacks;

use \RockSymbol\Base\BaseController;

class AdminCallbacks extends BaseController
{
    public function adminDashboard(){
        return require_once( "$this->plugin_path/templates/admin/admin.php");
    }
    
    public function adminEntete(){
        return require_once( "$this->plugin_path/templates/admin/entete.php");
    }

    public function adminHistorique(){
        return require_once( "$this->plugin_path/templates/admin/historique.php");
    }

    public function adminDiaporama(){
        return require_once( "$this->plugin_path/templates/admin/diaporama.php");
    }

    public function adminBienfaiteurs(){
        return require_once( "$this->plugin_path/templates/admin/bienfaiteurs.php");
    }

    public function adminYoutube(){
        return require_once( "$this->plugin_path/templates/admin/youtube.php");
    }

}
