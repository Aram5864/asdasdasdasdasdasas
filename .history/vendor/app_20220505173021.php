<?php

    class App {

        public $URI = null;

        public function run()
        {
           $URI = $_SERVER['REQUEST_URI'];
           $exp = explode('/',$URI);
           $url1 = $this->URI[1];
           $url2 = $this->URI[2];

           
           $this->URI = $exp;
           var_dump($this->URI);
        }
    }