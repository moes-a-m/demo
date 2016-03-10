<?php
/**
 * Created by PhpStorm.
 * User: Mohammed
 * Date: 3/9/2016
 * Time: 4:31 PM
 */

function redirect($url, $statusCode = 303)
{
    header('Location: ' . $url, true, $statusCode);
    die();
}