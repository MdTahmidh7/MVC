<?php

class route
{
    //Define default Controller methods Param
    public $controller = "welcome";
    public $method = "index";
    public $parameter = [];
    // Create a constructor
    public function __construct()
    {
        $url = $this->url();
        // print_r($url);
        if(!empty($url)){
            if(file_exists("../Application/Controller/".$url[0].".php")){
                // echo "Controller Found";
                $this->controller = $url[0];
                unset($url[0]);
            }else{
                echo "<div style='background: #e76c6c;
                padding: 10px;
                font-size: 20px;'>
                Sorry, ".$url[0].".php not found.
                <div>";
            }
            require_once '../Application/Controller/'.$this->controller.'.php';
            $this->controller = new $this->controller;

            if(!empty($url[1] && $url[1])){
                if(method_exists($this->controller,$url[1])){
                    $this->method = $url[1];
                    unset($url[1]);
                }else{
                    echo "<div style='background: #e76c6c;
                padding: 10px;
                font-size: 20px;'>
                Sorry, ".$url[1]." Method not found.
                <div>";
                }
            }
            if(isset($url)){
                $this->parameter = $url;
            }else{
                $this->parameter = [];
            }
            // if(!empty($this->parameter)){
            //     call_user_func_array([$this->controller,$this->method],$this->parameter);
            // }
            // else{
            //     echo "Parameters are required";
            // }
        }

         call_user_func_array([$this->controller,$this->method],$this->parameter);
    }
    public function url(){
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
            $url = rtrim($url);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            return $url;
        }
    }
}
