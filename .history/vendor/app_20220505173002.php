<?php

    class App {

        public $URI = null;

        public function run()
        {
           $URI = $_SERVER['REQUEST_URI'];
           $exp = explode('/',$URI);
            $url1 = $this->
           $this->URI = $exp;
           var_dump($this->URI);
        }
    }