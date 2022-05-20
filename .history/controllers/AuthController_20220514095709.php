<?php
include_once '../vendor/database.php';
include_once '../vendor/Controller.php';
App::loadModels();
class AuthController extends Controller{

    public function index()
    {
        $this->render('registration');
    }

    public function register()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $md5pass

        $data = new Register('users');
        $data->insert([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ])->save();

        return $data->redirect('/auth');
       
    }


   

}