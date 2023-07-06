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

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

$db = new Database();
// Using `fetchAll` will return an array, which isn't suitable in case of fetching single post
$post = $db->query("SELECT * FROM `posts` WHERE `id` = 1;");


dd($post[0]['title']);