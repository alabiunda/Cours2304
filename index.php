<?php
spl_autoload_register(function($class){
    if($class == "Router"){
        include "routeur2/routeur.php";
    }
    else if (strpos($class,"Controller")){
        include"controllers/{$class}.php";
    }
    else if (strpos($class,"DAO")){
        include"models/dao/{$class}.php";
    }
    else {
        include"models/entities/{$class}.php";
    }
});
include 'routeur2/routeur.php';

$router = new routeur ($_GET,$_POST, $_SERVER['PHP_SELF'],$_SERVER['REQUEST_URI']);

?>