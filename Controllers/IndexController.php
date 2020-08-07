<?php
class IndexController{
    function __construct($get, $post, $route)
    {
        if(!$get && !$post){
            $dao = new ProductDAO();
            $dao->fetchAll();
            var_dump($dao);
            var_dump($dao);
    }
    }
}

//1 Venir inclure les vues nécessaires
//2 Gérer les requêtes nécessaires au niveau du controlleur
?>