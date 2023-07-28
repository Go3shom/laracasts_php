<?php

use Core\App;


$db = App::container()->resolve('Core\Database');


$currentUserID = 1;


$note = $db->query(
    "SELECT * FROM `notes` WHERE `id` = :id",
    [':id' => $_POST['id']]
)->findOrFail();


authorize($note['user_id'] === $currentUserID);


$db->query(
    "DELETE FROM `notes` WHERE `id` = :id",
    [':id' => $_POST['id']]
);

header('location: /notes');
die();
