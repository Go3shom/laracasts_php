<?php

require 'functions.php';
// require 'router.php';
require 'Database.php';


$config = require('config.php');

$db = new Database($config);

$post = $db->query("SELECT * FROM `posts` WHERE `id` = 1;")->fetch();


dd($post['title']);