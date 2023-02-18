<?php
echo "User Controller Class";
class userController extends framework{
    public function index(){
        echo "User Controller Index function";
    }
    public function userMethod(){
     // $this->view("userView");
     $myModel = $this->model('userModel');
     print_r($myModel->myData());
    }
}
?>