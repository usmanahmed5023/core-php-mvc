<?php

$config=require ('config.php');

$db = new Database($config['database']);

$heading = 'Note - My Web Page';

$notes=$db->query('SELECT * FROM notes WHERE id=:id', ['id' => $_GET['id']])->findOrFail();


$currentUserId = 1; 


if(!$notes){
    http_response_code(404);
    require 'views/404.php';
    exit;
}
authorize((int)$notes['user_id'] === (int)$currentUserId);

require 'views/notes/show.view.php';