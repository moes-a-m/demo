<?php
/**
 * Created by PhpStorm.
 * User: javadev
 * Date: 3/12/16
 * Time: 11:45 PM
 */
include "DBop.php";

class Invoice{

    protected  $bot;

    public function fetchJson()
    {
        $bot = $this->getBot();
        $state = $bot->fetchJson();
        $input = array_values($state);
        //print_r($input);
       echo json_encode($input);
    }

    public function getBot()
    {
        if (!$this->bot) {
            $this->bot = new DBop();
        }
        return $this->bot;

    }
}

$handler = new Invoice();
$handler->fetchJson();


