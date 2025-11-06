<?php
$config = require base_path('config.php');
$db = new Database($config['database']);


    $heading = "Notes";
    $notes = $db->query("select * from notes")->fetchAll();


    require base_path("Views/notes/index.view.php");