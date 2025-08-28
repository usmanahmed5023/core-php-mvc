<?php
use Core\Database;
$config=require base_path('config.php');

$db = new Database($config['database']);


$notes=$db->query('SELECT * FROM notes WHERE id=:id', ['id' => $_GET['id']])->findOrFail();


$currentUserId = 1; 


if(!$notes){
    http_response_code(404);
    require 'views/404.php';
    exit;
}
authorize((int)$notes['user_id'] === (int)$currentUserId);

 view('notes/show.view.php',[
    'heading' => 'Notes - My Web Page',
    'notes' => $notes
 ]);