<?php
///error_reporting(E_ALL);
//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(E_ERROR | E_WARNING | E_PARSE );

///definition of files and folders
define('DS', DIRECTORY_SEPARATOR);
//define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('ROOT', __DIR__);
define('ROOT_CORE', ROOT.DS.".elena".DS);
define('ROOT_CORE_SETTINGS', ROOT_CORE."settings".DS);
define('ROOT_MODULES', ROOT.DS."modules".DS);
define('ROOT_THEMES', ROOT.DS."themes".DS);
///Include part
include_once( ROOT_CORE."controller.php");
//instantiate an object of WebPage class is inside controller
$page = new WebPage();

// added a comment on git web
//die ();
/*Include part*/


    $out = "<pre>";
    foreach($_SERVER as $key => $value )
    {
       $out .= "$key => $value"."\r\n|----------------------------------------> <-----------------------------------\r\n";
    }
    $out .= "</pre>";
    echo $out;

?>
