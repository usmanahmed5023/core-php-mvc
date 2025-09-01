<?php
use Core\App;
use Core\Database;

$db=App::resolve(Database::class);



$currentUserId = 1; 

    $notes=$db->query('SELECT * FROM notes WHERE id=:id', ['id' => $_GET['id']])->findOrFail();
    $note = $db->query('SELECT * FROM notes WHERE id=:id', ['id' => $_GET['id']])->find();


    authorize((int)$notes['user_id'] === (int)$currentUserId);

 view('notes/edit.view.php',[
    'heading' => 'Edit-Notes',
    'errors' => [],
    'notes' => $notes
 ]);