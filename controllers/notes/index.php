<?php

$config=require ('config.php');

$db = new Database($config['database']);

$heading = 'Notes - My Web Page';
$notes=$db->query('SELECT * FROM notes')->get();
require 'views/notes/index.view.php';