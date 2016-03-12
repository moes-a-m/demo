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
    protected  $bot;

    public function __construct()
    {
        $bot = new DBop();
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
            redirect("../model/invoice.php");
        else
            redirect("../view/login.php?error");

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
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $handler = new User();

    $username = (isset($_POST['email'])) ? strip_tags($_POST['email']) : "none";
    $password = (isset($_POST['password'])) ? strip_tags($_POST['password']) : "none";

// prevent sql injections
    $username = filter_var($username, FILTER_SANITIZE_EMAIL);
    $password = filter_var($password, FILTER_SANITIZE_STRING);

//// prevent xss attack
//    $pattern = "/[^@\s]*@[^@\s]*\.[^@\s]*/";
//    $replacement = "[removed]";
//    $username = preg_replace($pattern, $replacement, $username);
//
//    $pattern = '/[^a-zA-Z0-9,. ]/';
//    $username = preg_replace($pattern, $replacement, $password);

    $data = array('username' => $username,
        'password' => $password);


    $handler->checkLogin($data);
}