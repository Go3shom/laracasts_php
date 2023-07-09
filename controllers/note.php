<?php

$config = require('config.php');
$db = new Database($config['database']);


$heading = 'Note';
$currentUserID = 1;


$note = $db->query(
    "SELECT * FROM `notes` WHERE `id` = :id",
    [':id' => $_GET['id']]
)->find();


if (!$note) {
    abort();
}

if ($note['user_id'] !== $currentUserID) {
    abort(Response::FORBIDDEN);
}


require 'views/note.view.php';
