<?php
use Core\Validator;
use Core\App;   
use Core\Database;
$db=App::resolve(Database::class);



$currentUserId = 1; 

    $notes=$db->query('SELECT * FROM notes WHERE id=:id', ['id' => $_POST['id']])->findOrFail();

        authorize((int)$notes['user_id'] === (int)$currentUserId);
        $errors = [];

   if(! Validator::string($_POST['body'], 1, 1000)) {
       $errors['body'] = 'Note: body must be less than 1000 characters';
   }
if(count($errors)) {

   return view('notes/edit.view.php', [
       'heading' => 'Edit Note',
       'notes' => $notes,
       'errors' => $errors
   ]);
}
$db->query('UPDATE notes SET body = :body WHERE id = :id', [
    'body' => $_POST['body'],
    'id' => $_POST['id']
]);

      header('Location: /notes');
    exit;