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
            $c = $URIARR[1];
           }
           if (isset($URIARR[2]) && !empty($URIARR[2])) {
            $m = $URIARR[2];
           }

           $cfull = uc $c . "Controller";
          
           var_dump($cfull);
        }
    }