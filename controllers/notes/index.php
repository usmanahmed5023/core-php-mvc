<?php
use Core\Database;
$config=require base_path('config.php');

$db = new Database($config['database']);

$notes=$db->query('SELECT * FROM notes')->get();


 view('notes/index.view.php',[
    'heading' => 'Notes - My Web Page',
    'notes' => $notes
 ]);