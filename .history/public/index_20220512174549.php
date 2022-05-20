<?php  
include_once '../configs/PathDirectory.php';
include_once _VENDOR . 'app.php';


try {
   App::run();
} 
catch (Error $e) {
    include_once _VENDOR . 'Errors.php';
}