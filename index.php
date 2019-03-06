<?php

use App\Models\Article;
use App\Models\User;

require __DIR__ . '/autoload.php';

$data = Article::findAll();
$user = User::findAll();

var_dump($user);