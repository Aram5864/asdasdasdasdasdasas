<?php
include_once '../vendor/database.php';
include_once '../vendor/Controller.php';
App::loadModels();
class AuthController extends Controller{

    public function index()
    {
        $obj = new Message('message');
        $sel = $obj->select('*')->all();

        $this->render('home',['data'=>$sel]);
       
        
    }


}