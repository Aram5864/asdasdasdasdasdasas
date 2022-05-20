<?php 
include_once '../vendor/database.php';
include_once '../vendor/Controller.php';
App::loadModels();
class HomeController extends Controller{

    public function index()
    {
        $this->render('home');

    }
}