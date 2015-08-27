<?php

/**
 * @author David Mezquíriz Osés
 */

namespace WebPage;
use classes\WebPageConsolidator;

class MyAutoloader
{
    public static function load($className)
    {
    	// Change the backslashes to forward slashes
    	$className = str_replace('\\', '/', $className);
        require $className . '.inc.php';
    }
}

spl_autoload_register(__NAMESPACE__ . "\\MyAutoloader::load");

class Consolidator extends WebpageConsolidator
{
    public function __construct()
    {
        echo "PHP 5.3 constructor.\n";

        parent::__construct();
    }
}

$result = new Consolidator();
