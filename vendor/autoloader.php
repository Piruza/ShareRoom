<?php

// CONSTANTS
DEFINE('WWW', dirname(__DIR__));
DEFINE('APP', dirname(__DIR__).'/app/');
DEFINE('VIEWS', dirname(__DIR__).'/public/views/');
DEFINE('PAGES', dirname(__DIR__).'/public/views/pages');
DEFINE('ASSETS', dirname(__DIR__).'/public/assets');


//Autoload core
spl_autoload_register(function($class){
    try{
        include_once WWW . "/".$class.".php";
    }catch (Exception $e){
        echo $e->getMessage();
        include_once WWW . "/config/".$class.".php";
    }
});

//Helpers
include_once APP."/helper/helper.php";
