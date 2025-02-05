<?php

namespace Core;

use PDO;
class Database{
    public $stmt;
    public $connection;
    public function __construct($config)
    {

        $dsn="mysql:host={$config['host']};dbname={$config['dbname']};port={$config['port']};charset={$config['charset']}";

        $this->connection = new PDO(
            $dsn,
            $config['username'],
            $config['password'],
            [
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC

        ]);
    }
    public function query($query,$params=[])
    {


        $this->stmt=$this->connection->prepare($query);
        $this->stmt->execute($params);

        return $this;

    }
    public function fetch() {
        return $this->stmt->fetch();
    }

    public function fetchAll() {
        return $this->stmt->fetchAll();
    }
}
