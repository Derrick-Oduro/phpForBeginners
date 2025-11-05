<?php
$config = require ('config.php');
$db = new Database($config['database']);


    $heading = "Note";


    $note = $db->query('select * from notes where  id = :id',[

        'id' => $_GET['id']
    
    ])->find();

    if (!$note) {
        abort();
    }


    $currentUserId = 1;


    if ($note['user_id'] != $currentUserId) {
        abort(response::FORBIDDEN);
    }

 

    require "Views/note.view.php";