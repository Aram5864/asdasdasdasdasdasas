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
        $md5pass = md5($password);

        $data = new Register('users');
        $data->insert([
            'name' => $name,
            'email' => $email,
            'password' => $md5pass
        ])->save();

        return $data->redirect('/auth');
       
    }

    public function Login(Type $var = null)
    {
        # code...
    }


   

}