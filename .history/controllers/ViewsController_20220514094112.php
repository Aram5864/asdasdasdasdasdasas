<?php
include_once '../vendor/database.php';
include_once '../vendor/Controller.php';
App::loadModels();

class ViewsController extends Controller{

    public function index()
    {
        // $this->render('')
      
    }

    public function register()
    {
       $this->render('registration');
    }


   

}