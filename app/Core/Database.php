<?php

namespace App\Core;

use PDO;
use PDOException;

class Database
{
    private $dbHost = DB_HOST;
    private $dbUser = DB_USERNAME;
    private $dbPass = DB_PASSWORD;
    private $dbName = DB_NAME;

    private $statement;
    private $dbHandler;
    private $error;

    public function __construct()
    {
        $conn = "mysql:host={$this->dbHost};dbname={$this->dbName}";
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        try {
            $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass, $options);
            // dump("success connected to {$this->dbName}");
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            // dump($this->error);
        }
    }

    /**
     * @param string $sql
     * @return void
     */
    public function query(string $sql): void
    {
        $this->statement = $this->dbHandler->prepare($sql);
    }

    /**
     * @param $parameter
     * @param $value
     * @param $type
     * @return void
     */
    public function bind($parameter, $value, $type = null): void
    {
        switch (is_null($type)) {
            case is_int($value):
                $type = PDO::PARAM_INT;
                break;
            case is_bool($value):
                $type = PDO::PARAM_BOOL;
                break;
            case is_null($value):
                $type = PDO::PARAM_NULL;
                break;
            default:
                $type = PDO::PARAM_STR;
        }
        $this->statement->bindValue($parameter, $value, $type);
    }

    public function execute()
    {
        return $this->statement->execute();
    }

    /**
     * @return array
     */
    public function resultSet(): array
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function single()
    {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }

    public function rowCount()
    {
        return $this->statement->rowCount();
    }
}
