<?php

require 'functions.php';
// require 'router.php';


// Connect to our MySQL database.
class Database
{
    public function query()
    {
        $dns = "mysql:host=localhost;dbname=laracasts_php;port=3306;user=root;password=password@1234;charset=utf8mb4";
        $pdo = new PDO($dns);

        $statement = $pdo->prepare("SELECT * FROM `posts`;");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

$db = new Database();
$posts = $db->query();


foreach ($posts as $post) {
    echo '<li>' . $post['title'] . '</li>';
}
