<?php  
include_once '../configs/PathDirectory.php';
include_once _VENDOR . 'app.php';


try {
    App::run();
} 
catch (Exception $e) {
    include_once _VENDOR . 'Errors.php';
}



?>

