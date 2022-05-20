<?php
include_once _'';
       
        $URI = $_SERVER['REQUEST_URI'];
        $exp = explode('/',$URI);
        var_dump($exp[2]);
    


?>