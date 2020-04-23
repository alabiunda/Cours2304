<?php

class routeur {

    private $get;
    private $post;
    private $route;
    private $root;
    private $controller_list;
    private $controller;
    private $controller_name;

    function __construct($get, $post, $self, $url)
    {
        $this->get = $get;
        $this->post = $post;
        $this->controller_list = ['index'];
        $this->controller_name = false;
        $this->controller = false;
        $this->root = $this->parseRoot($self);
        $this->route = $this->parseURL($url);
    }

    function parseRoot($self)
    {
        return str_replace('index.php', '', $self);

    }

    function parseURL($url)
    {
        $path = str_replace($this->root, '', $url);
        $path = explode('/', $path);
        $controller = false;
        if ($path && count($path) && strlen($path[0])) {
            $controller = $path[0];
        } else if(count($path) && !strlen($path[0])){
            $controller = 'index';
        }

        if($controller && in_array($controller,$this->controller_list))
        {
            $this->controller_name = $controller;
        }

    }

}

?>