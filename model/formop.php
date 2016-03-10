<?php

/**
 * Created by PhpStorm.
 * User: Mohammed
 * Date: 3/9/2016
 * Time: 3:16 AM
 */
class formop
{
    public $name;
    public $procuctCode;
    public $price;
    public $qty;

    public function saveData($data)
    {

    }

    public function checkData($data)
    {

    }

    public function printData($data) {
        printf("The name is %s  the price is %s", $data['name'], $data['price']);
    }
}

$data[] = array();

$data['name'] = $_POST["name"];
$data['productcode'] = $_POST["productcode"];
$data['price'] = $_POST["price"];
$data['quantity'] = $_POST["quantity"];


$handler = new formop;

$handler->printData($data);



