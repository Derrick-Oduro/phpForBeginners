<?php
require base_path('Validator.php');
$config = require base_path('config.php');
$db = new Database($config['database']);

$heading = "Create a New Note";
if ($_SERVER['REQUEST_METHOD']=='POST') {



    $errors = [];


    if (!Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = "a body must be between 1 and 1000 characters";
    }
    
    
    if (empty($errors)) {
       $db->query('insert into notes (body,user_id) values (:body,:user_id)',[
        'body' => $_POST['body'],
        'user_id' => 1
    ]);


    }
}
require base_path("views/notes/create.view.php");