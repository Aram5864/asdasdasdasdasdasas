<?php
include_once '../vendor/database.php';
include_once '../vendor/Controller.php';
App::loadModels();
class AuthController extends Controller{

    public function index()
    {
        $obj = new Message('message');
        $data = $obj->select('*')->all();

        $this->render('home',['d'=>$data]);
       
        
    }


}