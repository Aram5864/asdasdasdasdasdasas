<?php
include_once '';
       
        $URI = $_SERVER['REQUEST_URI'];
        $exp = explode('/',$URI);
        var_dump($exp[2]);
    


?>