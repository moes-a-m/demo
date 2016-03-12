<?php
/**
 * Created by PhpStorm.
 * User: javadev
 * Date: 3/12/16
 * Time: 7:33 PM
 */

// *** Make sure you adjust these params for your own system!
define('DB_USER', 	'root');
define('DB_PWD', 	'test');
define('DB_NAME', 	'demo');
define('DB_HOST', 	'localhost');
define('DB_DSN', 	'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME);
define('HOME_URL',	'http://' . $_SERVER['HTTP_HOST'] . '/');
