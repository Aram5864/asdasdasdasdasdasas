<?php

    class App {

        public $URI = null;

        public function run()
        {
            
           $URI = $_SERVER['REQUEST_URI'];
           $exp = explode('/',$URI);

           $url1 = $exp[1];
           $url2 = $exp[2];

           var_dump($url1
           $url2);
           $c = _DEFAULTCONTROLLER;
           $m = _DEFAULTMETHOD;

           if (isset($url1) && !empty($url1)) {
            $c = $url1;
           }
           if (isset($url2) && !empty($url2)) {
            $m = $url2;
           }

           var_dump($url1,$url2 );
        }
    }