<?php
include_once '../vendor/database.php';

class AuthController{

    public function index()
    {
        $obj = new Database('message');
        $sel = $obj->select('*');
        var_dump($$sel);

            
    }
  
}