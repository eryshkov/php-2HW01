<?php

use App\Models\Article;
use App\Models\User;

require __DIR__ . '/autoload.php';

$articles = Article::findAll();
$user = User::findAll();

var_dump($user);
var_dump($articles);

//$db = new \App\Db();
//$data = $db->query('SELECT * FROM newsf WHERE id=:id', [':id' => 1], Article::class);
//var_dump($data);