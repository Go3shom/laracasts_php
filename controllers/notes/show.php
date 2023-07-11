<?php

$config = require base_path('config.php');
$db = new Database($config['database']);


$heading = 'Note';
$currentUserID = 1;


$note = $db->query(
    "SELECT * FROM `notes` WHERE `id` = :id",
    [':id' => $_GET['id']]
)->findOrFail();


authorize($note['user_id'] === $currentUserID);


require base_path('views/notes/show.view.php');
