<?php

include "../core/func.php";
/**
 * Created by PhpStorm.
 * User: Mohammed
 * Date: 3/9/2016
 * Time: 3:04 AM
 */
class User
{
    public $userName = "";
    public $passWord = "";

    public function checkData($data)
    {
        include "DBop.php";
        $bot = new DBop();
        $sql = "SELECT * FROM `users` WHERE `username` = :username AND `password` = :password";
        if ($bot->query($sql, $data) == 1) {
            redirect("../view/blank.php");
        }
    }

    public function printData($data)
    {
        printf("<br>The email is %s  the password is %s", $data['username'], $data['password']);
    }
}


$handler = new User();

$data = array('username' => $_POST["email"],
    'password' => $_POST["password"]);
$handler->printData($data);

$handler->checkData($data);

