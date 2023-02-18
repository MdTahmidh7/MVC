<?php

class framework{
    public function view($viewName){
        if(file_exists("../Application/Views/".$viewName.".php")){
            require_once("../Application/Views/$viewName.php");
        }else{
            echo "<div style='background: #e76c6c;
                padding: 10px;
                font-size: 20px;'>
                Sorry, ".$viewName." View not found.
                <div>";
        }
    }
    public function model($modelName){
        if(file_exists("../Application/Model/".$modelName.".php")){
            require_once("../Application/Model/$modelName.php");
            return new $modelName;
        }else{
            echo "<div style='background: #e76c6c;
                padding: 10px;
                font-size: 20px;'>
                Sorry, ".$modelName." Model data not found.
                <div>";
        }
    }



}


?>