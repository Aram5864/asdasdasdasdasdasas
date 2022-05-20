<?php
include_once '../vendor/database.php';

class AuthController{

    public function index()
    {
        $obj = new Database('message');
        $obj->select('*');
      var_dump($obj);

            
    }
  
}