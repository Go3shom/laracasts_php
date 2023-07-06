<?php

class Database
{
    public $connection;


    public function __construct()
    {
        $config = [
            'host' => 'localhost',
            'dbname' => 'laracasts_php',
            'port' => '3306',
            'charset' => 'utf8mb4',
        ];

        $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};port={$config['port']};charset={$config['charset']}";

        $this->connection = new PDO($dsn, 'root', 'password@1234', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}
