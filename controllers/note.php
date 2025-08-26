<?php

$config=require ('config.php');

$db = new Database($config['database']);

$heading = 'Note - My Web Page';

$notes=$db->query('SELECT * FROM notes WHERE id=:id', ['id' => $_GET['id']])->fetch();


$currentUserId = 1; 


if(!$notes){
    http_response_code(404);
    require 'views/404.php';
    exit;
}
if((int)$notes['user_id'] !== (int)$currentUserId) {
    http_response_code(403);
    require 'views/403.php';
    exit;
}

require 'views/note.view.php';