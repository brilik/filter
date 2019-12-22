<?php


namespace engine;


use Exception;

class Theme
{
    protected $ver;
    
    function __construct($theme_ver = 1.0)
    {
        $this->ver = (float)$theme_ver;
    }
    
    public function the_view($view_name, $args = [])
    {
        try {
            if ($view_name === '') {
                throw new Exception("View name empty.");
            }
            $view_name = str_replace("__", "/", $view_name);
            
            $file_name = VIEWS_DIR . $view_name;
            if ( ! file_exists($file_name . ".php")) {
                throw new Exception("The file {$file_name}.php not exists");
            }
            global $theme;
            include "{$file_name}.php";
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
