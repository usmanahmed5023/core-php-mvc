<?php
use Core\App;   
use Core\Database;
$db=App::resolve(Database::class);
$currentUserId = 1;



    $notes=$db->query('SELECT * FROM notes WHERE id=:id', ['id' => $_POST['id']])->findOrFail();

    authorize((int)$notes['user_id'] === (int)$currentUserId);

    $db->query('DELETE FROM notes WHERE id=:id',
     ['id' => $_POST['id']]);

    header('Location: /notes');
    exit;
