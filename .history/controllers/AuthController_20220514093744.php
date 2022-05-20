<?php
include_once '../vendor/database.php';
include_once '../vendor/Controller.php';
App::loadModels();
class AuthController extends Controller{

    public function index()
    {
        // $this->render('')
    }

    public function register()
    {
        $name = $_POST['name'];

        var_dump($name)


       $this->render('registration');

    }


   

}