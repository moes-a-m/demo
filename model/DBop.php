<?php

/**
 * Created by PhpStorm.
 * User: Mohammed
 * Date: 3/11/2016
 * Time: 8:14 PM
 */
class DBop
{
    // database username
    public $user = "class";
// database password
    public $pass = 'password';
// data source = mysql driver, localhost, database = class
    public $dsn = 'mysql:host=localhost;dbname=class';

    public $pdo;

    public function __construct()
    {
        try {
            $pdo = new PDO($this->dsn, $this->user, $this->pass);
        } catch (PDOException $e) {
//            echo $e->getMessage();
//            echo $e->getTraceAsString();
        }
    }

    public function query($statment, $data)
    {
        $pdo = $this->pdo;
        $sqlParent = $statment;
        $stmtParent = $pdo->prepare($sqlParent);
        $resultParent = $stmtParent->execute($data);
        printf("the result is");
        printf($resultParent);
        return $resultParent;
    }
}