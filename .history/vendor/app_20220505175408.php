<?php

    class App {

        public $URI = null;

        public function run()
        {
            
           $URI = $_SERVER['REQUEST_URI'];
           $URIARR = explode('/',$URI);

           $c = _DEFAULTCONTROLLER;
           $m = _DEFAULTMETHOD;

           if (isset($URIARR[1]) && !empty($URIARR[1])) {
            $c = $URIARR[1]
           }
           if (isset($url2) && !empty($url2)) {
            $m = $url2;
           }

           var_dump($url1,$url2 );
        }
    }