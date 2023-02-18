<?php
echo "User Controller Class";
class userController{
    public function index(){
        echo "User Controller Index function";
    }
    public function userMethod($firstNumber,$secondNumber){
        echo "User Method Exists.";
        echo "First Number" . $firstNumber;
        echo "Second Number" . $secondNumber;
        
    }
}
?>