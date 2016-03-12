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


$data = array('name' => $_POST["name"],
    'productcode' => $_POST["productcode"],
    'quantity' => $_POST["quantity"],
    'price' => $_POST["price"]);

$handler = new formop;

$handler->saveData($data);



