<?php

use Core\Validator;

use Core\App;   
use Core\Database;
$db=App::resolve(Database::class);
$errors = [];

   if(! Validator::string($_POST['body'], 1, 1000)) {
       $errors['body'] = 'Note: body must be less than 1000 characters';
   }

   if(!empty($errors)) {
       return view('notes/create.view.php', [
           'heading' => 'Notes - My Web Page',
           'errors' => $errors
       ]);
       
   }

    $db->query("INSERT INTO notes (body, user_id) VALUES (:body, :user_id)", 
        [
            'body' => $_POST['body'],
            'user_id' => 1
        ]
    );
    

    header('Location: /notes');
    die();