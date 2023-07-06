<?php

class Database
{
    public $connection;


    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=laracasts_php;port=3306;user=root;password=password@1234;charset=utf8mb4";

        $this->connection = new PDO($dsn);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}
