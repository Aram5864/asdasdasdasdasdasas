<?php

class Controller
{
    protected $layout = _DEFAULT_LAYOUT;

    

    public static function layout($layout)
    {
        if (file_exists(_LAYOUTS . $layout . '.php')) {
            $this->layout = $layout;
            return $this;
        } else {
            throw new Error("$layout Layout not found", 404);
        }
    }

   
    public function render($views, $params = [])
    {
        extract($params);

        if (file_exists(_VIEWS . $views . '.php')) {
            ob_start();
                include_once _VIEWS . $views . ".php";
            $content = ob_get_clean();

            if (file_exists(_LAYOUTS . $this->layout . '.php')) {
                include_once _LAYOUTS . $this->layout . '.php';
            } else {
                throw new Error("$layout Layout not found", 404);
            }
        } else {
            throw new Error("$views Page Not Found", 404);
        }
    }



    public static function view($views)
    {
        if (file_exists(_VIEWS . $views . '.php')) {
            include_once _VIEWS . $views . ".php";
        } else {
            throw new Error("$views page not found", 404);
        }
    }
}
