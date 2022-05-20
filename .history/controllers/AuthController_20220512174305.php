<?php
include_once '../vendor/database.php';
App::loadModels();
class AuthController{

    public function index()
    {
        $obj = new Message('message');
        $sel = $obj->select('*')->all();
        var_dump($sel);

    }

    public function product()
    {

         $obj = new Product('product');
        $sel = $obj->select('*')->all();
        var_dump($sel);
    }
    public function reg()
    {

         $obj = new Registartion('product');
         $sel = $obj->select('*')->all();
        var_dump($sel);
    }
}