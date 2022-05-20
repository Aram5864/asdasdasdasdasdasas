<?php

    class App {

        public $URI = null;

        public function run()
        {
            $this->URI = $exp;
           $URI = $_SERVER['REQUEST_URI'];
           $exp = explode('/',$URI);
           $url1 = $this->URI[1];
           $url2 = $this->URI[2];


           
           var_dump($this->URI);
        }
    }