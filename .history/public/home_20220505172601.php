<?php
include_once _VENDOR . '';
       
        $URI = $_SERVER['REQUEST_URI'];
        $exp = explode('/',$URI);
        var_dump($exp[2]);
    


?>