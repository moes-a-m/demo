<?php

include "../core/func.php";
include "DBop.php";

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
    private $bot;

    public function __construct()
    {
        $bot = new DBop();
    }

    /**
     * @return DBop
     */
    public function getBot()
    {
        if (!$this->bot) {
            $this->bot = new DBop();
        }
        return $this->bot;

    }

    public function printData($data)
    {
        printf("<br>The email is %s  the password is %s", $data['username'], $data['password']);
    }

    /**
     * @param $userData
     */
    public function checkLogin($userData)
    {
        $bot = $this->getBot();
        $state = $bot->checkLogin($userData);
        if ($state == 1)
            redirect("../view/blank.php");
        else
            redirect("../view/login.php?error");

    }
}


$handler = new User();

$data = array('username' => $_POST["email"],
    'password' => $_POST["password"]);

//foreach($data as $key=>$d){
//    printf("<br>".$d);
//}

$handler->checkLogin($data);
