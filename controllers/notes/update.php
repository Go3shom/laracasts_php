<?php

use Core\App;
use Core\Database;
use Core\Validator;


$db = App::resolve(Database::class);

$currentUserID = 1;


$note = $db->query(
    "SELECT * FROM `notes` WHERE `id` = :id",
    [':id' => $_POST['id']]
)->findOrFail();


authorize($note['user_id'] === $currentUserID);


$errors = [];


if (!Validator::string($_POST['body'], 1, 1_000)) {
    $errors['body'] = 'A body of no more than 1,000 characters is required.';
}

if (count($errors)) {
    return view('notes/edit.view.php', [
        'heading' => 'Edit Note',
        'note' => $note,
        'errors' => $errors,
    ]);
}

$db->query(
    "UPDATE `notes` SET `body`= :body WHERE `id`= :id",
    [
        ':id' => $_POST['id'],
        ':body' => $_POST['body'],
    ]
);

header('location: /notes');
die();
