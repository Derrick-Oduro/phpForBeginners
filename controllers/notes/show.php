<?php
$config = require base_path('config.php');
$db = new Database($config['database']);


    $heading = "Note";


    $note = $db->query('select * from notes where  id = :id',[

        'id' => $_GET['id']

    ])->findOrFail();



    $currentUserId = 1;

    authorize($note['user_id'] === $currentUserId);


    

 

    require base_path("Views/notes/show.view.php");