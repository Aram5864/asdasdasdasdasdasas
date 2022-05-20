<?php
include_once '../vendor/database.php';
include_once '../';

class AuthController{

    public function index()
    {
        $obj = new Message('message');
        $sel = $obj->select('*')->all();
        var_dump($sel);

    }
  
}