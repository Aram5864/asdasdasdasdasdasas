<?php

    class App {

        public $URI = null;

        public function run()
        {
           $URI = $_SERVER['REQUEST_URI'];
            $exp = explode('/',$URI)
           var_dump($URI . 'asd');
        }
    }