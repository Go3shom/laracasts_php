<?php

$config = require('config.php');
$db = new Database($config['database']);


$heading = 'Notes';


$notes = $db->query("SELECT * FROM `notes`")->findOrFail();


require 'views/notes.view.php';
