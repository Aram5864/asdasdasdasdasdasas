<?php
include_once '../vendor/database.php';
include_once '../model/Mesage.php';

class AuthController{

    public function index()
    {
        $obj = new Message('message');
        $sel = $obj->select('*')->all();
        var_dump($sel);

    }

    public function product()
    {

         $obj = new Product('message');
        $sel = $obj->select('*')->all();
        var_dump($sel);
    }
  
}