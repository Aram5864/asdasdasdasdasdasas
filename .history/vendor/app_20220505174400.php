<?php

    class App {

        public $URI = null;

        public function run()
        {
            
           $URI = $_SERVER['REQUEST_URI'];
           $exp = explode('/',$URI);

           $this->URI = $exp;
           $url1 = $this->URI[1];
           $url2 = $this->URI[2];
           $c = null;

           if (isset($url1) && !empty($url1)) {
            $c =
           }

           var_dump($url1,$url2 );
        }
    }