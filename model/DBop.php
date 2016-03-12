<?php

require "init.php";
/**
 * Created by PhpStorm.
 * User: Mohammed
 * Date: 3/11/2016
 * Time: 8:14 PM
 */
class DBop
{
    protected $pdo = NULL;
    /**
     * @param $statment
     * @param $data
     * @return mixed
     */
    public function query($statment, $data)
    {
        $pdo = $this->getPdo();
        $sqlParent = $statment;
        $stmtParent = $pdo->prepare($sqlParent);
        $resultParent = $stmtParent->execute($data);
        printf("\n%d", $resultParent);
        return $resultParent;
    }

    /**
     * @param $userData
     * @return mixed
     */
    public function checkLogin($userData)
    {
        $pdo = $this->getPdo();
        $sqlParent = "SELECt * from users where username = :username and password = :password";
        $stmtParent = $pdo->prepare($sqlParent);
        $stmtParent->execute($userData);
        if($stmtParent->rowCount() > 0)
        {
//            if(password_verify($upass, $userRow['user_pass']))
//            {
//                $_SESSION['user_session'] = $userRow['user_id'];
//                return true;
//            }
//            else
//            {
//                return false;
//            }
            return true;
        }
        else
            return false;
    }

    /**
     * @return null|PDO
     */
    public function getPdo()
    {
        if (!$this->pdo) {
            // *** display of warnings should be suppressed in production
            try {
                $this->pdo = new PDO(DB_DSN, DB_USER, DB_PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                return $this->pdo;
            } catch (PDOException $e) {
                error_log($e->getMessage(), 0);
                $_SESSION['error'] = 'Database error';
                echo $e->getMessage();
                exit;
            }
        }
        return $this->pdo;
    }

}