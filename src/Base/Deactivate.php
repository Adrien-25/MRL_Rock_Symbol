<?php
/**
 * @package MRLRockSymbol
 */

namespace RockSymbol\Base;

class Deactivate
{
    public static function deactivate(){
        flush_rewrite_rules();
    }
}
