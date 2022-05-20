<?php 

class HomeController {

    public function index()
    {
        $arrdata = ['name'=>'Aram','age'=>'27'];
        $arr = ['data'=> $arrdata];
        extract($params);

    }
}