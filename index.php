<?php

require 'functions.php';
// require 'router.php';


// Connect to our MySQL database.
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

$db = new Database();
// Using `fetch` instead, will return a single post perfectly fine
$post = $db->query("SELECT * FROM `posts` WHERE `id` = 1;")->fetch(PDO::FETCH_ASSOC);


dd($post['title']);