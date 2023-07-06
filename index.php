<?php

require 'functions.php';
require 'Database.php';
// require 'router.php';


$config = [
    'host' => 'localhost',
    'dbname' => 'laracasts_php',
    'port' => '3306',
    'charset' => 'utf8mb4',
];

$db = new Database($config);

$post = $db->query("SELECT * FROM `posts` WHERE `id` = 1;")->fetch();


dd($post['title']);