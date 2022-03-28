<?php

spl_autoload_register( 'myAutoLoader' );

function myAutoLoader( $className ){
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if (strpos($url, 'includes') != false) {
        $path = "../classes/";
    } 
    else 
    {
        $path = "classes/";
    }
    $extension = ".class.php";
    $fileName = $path . $className . $extension;
    
    if (!file_exists($fileName)) {
        return false;
    }
    require_once $fileName;

}