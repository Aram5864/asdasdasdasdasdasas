<?php
include_once _VENDOR . 'app.php';
       

$data = new App();
$data-> run()


        $URI = $_SERVER['REQUEST_URI'];
        $exp = explode('/',$URI);
        var_dump($exp[2]);
    


?>