<?php
spl_autoload_register(function($class){
    if($class == "Router"){
        include "routeur2/routeur.php";
    }
    else if (strpos($class,"Controller")){
        include"controllers/{$class}.php";
    }
});
include 'routeur2/routeur.php';

var_dump($_SERVER);

$router = new routeur ($_GET,$_POST, $_SERVER['PHP_SELF'],$_SERVER['REQUEST_URI']);

var_dump ($router);

?>