<?php

include "../core/func.php";
include "DBop.php";

/**
 * Created by PhpStorm.
 * User: javadev
 * Date: 3/12/16
 * Time: 11:54 PM
 */

class abstractDB {
    protected  $bot;
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