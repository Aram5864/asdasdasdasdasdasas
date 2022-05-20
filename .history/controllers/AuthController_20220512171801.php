<?php
include_once '../vendor/database.php';

class AuthController{

    public function index()
    {
        $obj = new Database('message002');
        $obj->select('*');
      

            
    }
  
}