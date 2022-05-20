<?php
include_once _VENDOR . 'app.php';
       

$data = new App();
$data-> run();
var_dump();


        $URI = $_SERVER['REQUEST_URI'];
        $exp = explode('/',$URI);
        var_dump($exp[2]);
    


?>