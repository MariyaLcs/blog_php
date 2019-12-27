<?php

function __autoload($class){
    
    $class = strtolower($class);
    
    $the_path = INCLUDES_PATH . DS . "{$class}.php";

    if(is_file($the_path) && !class_exists($class)){
        include $the_path;
    }

    function redirect($location){


        header("Location: {$location}");
        
        
        }
}
    
?>