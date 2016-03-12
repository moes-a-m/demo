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
        include "DBop.php";
        $bot = new DBop();
        $sql = "INSERT INTO `customers`( `name`, `productcode`, `quantity`, `price`)"
            . "VALUES (:name,:productcode,:price,:quantity)";
        $bot->query($sql, $data);
    }

    public function checkData($data)
    {

    }
    public function printData($data) {
        printf("The name is %s  the price is %s", $data['name'], $data['price']);
    }
}

$name = (isset($_POST["name"])) ? strip_tags($_POST["name"]) : "none";
$productcode = (isset($_POST["productcode"])) ? strip_tags($_POST["productcode"]) : "none";
$quantity = (isset($_POST["quantity"])) ? strip_tags($_POST["quantity"]) : "none";
$price = (isset($_POST["price"])) ? strip_tags($_POST["price"]) : "none";


// prevent sql injections
$name =  filter_var($name, FILTER_SANITIZE_STRING);
$productcode = filter_var($productcode, FILTER_SANITIZE_NUMBER_INT);
$quantity =  filter_var($quantity, FILTER_SANITIZE_NUMBER_INT);
$price =  filter_var($price, FILTER_SANITIZE_NUMBER_FLOAT);

$data = array('name' => $name,
    'productcode' => $productcode,
    'quantity' => $quantity,
    'price' => $price);

$handler = new formop;

$handler->saveData($data);



