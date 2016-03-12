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
    public $user;
// database password
    public $pass;
// data source = mysql driver, localhost, database = class
    public $dsn;
    private $pdo;

    public function __construct($user = "root", $pass = '', $dsn = 'mysql:host=localhost;dbname=demo')
    {
        try {
            $pdo = new PDO($dsn, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (PDOException $e) {
            echo $e->getMessage();
            echo $e->getTraceAsString();
        }
    }

    /**
     * @param $statment
     * @param $data
     * @return mixed
     */
    public function query($statment, $data)
    {
        try {
            $dbload = $this->getPdo();
            if (!isset($dbload)) {
                $dbload = new PDO('mysql:host=localhost;dbname=demo', "root", '');
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            echo $e->getTraceAsString();
        }
        $sqlParent = $statment;
        $stmtParent = $dbload->prepare($sqlParent);
        $resultParent = $stmtParent->execute($data);
        printf("\n%d", $resultParent);
        return $resultParent;
    }

    /**
     * @return mixed
     */
    private function getPdo()
    {
        return $this->pdo;
    }
}