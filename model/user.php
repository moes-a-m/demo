<?php
/**
 * Created by PhpStorm.
 * User: Mohammed
 * Date: 3/9/2016
 * Time: 3:04 AM
 */

class User{
    public $userName = "";
    public $passWord = "";

    public function saveData(){

    }
    public function checkData(){

    }

    public function printData($data) {
        printf("The email is %s  the password is %s", $data['email'], $data['password']);
    }
}

$data[] = array();

$data['email'] = $_POST["email"];
$data['password'] = $_POST["password"];
$handler = new formop;

$handler->printData($data);

