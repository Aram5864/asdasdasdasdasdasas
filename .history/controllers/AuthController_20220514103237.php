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

        return $data->redirect('/auth/login');
       
    }

    public function login()
    {
        $this->render('login');
    }

    public function loginProc()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);
        $data = new Login('users');
        $sel =  $data->select('*')->where(['email'=>$email,'password'=>$password],'AND')->one();
        if ($sel) {
            return $data->redirect('/userPage');
        }else{
             throw new Error ('Sxal es grel ' , 999);
        }
        
        
    
    }


    fun
   

}