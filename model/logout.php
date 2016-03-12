<?php
/**
 * Created by PhpStorm.
 * User: javadev
 * Date: 3/12/16
 * Time: 7:27 PM
 */

// unset all $_SESSION data
$_SESSION = array();
// expire the session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(	session_name(), '',
        time() - 3600,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}
// destroy session
session_destroy();
unset($_SESSION['user_session']);
// go home
header('Location: ../view/login.php');
exit;
