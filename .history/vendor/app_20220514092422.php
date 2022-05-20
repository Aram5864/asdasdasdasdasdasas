<?php
    class App {

        public $URI = null;

        public static function run()
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

           $controller = ucfirst($c)  . "Controller"; 
           $cfull = ucfirst($c)  . "Controller"  . '.php';
     

           var_dump()
           $controllerPath = _CONTROLLERS . $cfull;
           
           if (file_exists($controllerPath)) {
               include_once $controllerPath;
              if (class_exists($controller)) {
                $obj = new $controller();
                if (method_exists($obj,$m)) {
                    
                    $obj->$m();
                }else{
                    throw new Error("Method $m Not Found", 404);

                }
              }else{
                throw new Error("Class $controller Not Found ", 404);

              }
           }else{
            throw new Error("Controller $controller Not Found ", 404);
             }

        }
        
        public static function loadModels()
        {
            foreach (glob(_MODELS . "*.php") as $filename) {
                include_once $filename;
            }
        }
    }