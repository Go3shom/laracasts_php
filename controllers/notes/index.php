<?php

$config = require base_path('config.php');
$db = new Database($config['database']);


$heading = 'My Notes';


$notes = $db->query("SELECT * FROM `notes` WHERE `user_id` = 1")->get();


require view('notes/index.view.php');
