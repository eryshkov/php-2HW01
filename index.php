<?php

require __DIR__ . '/autoload.php';

$articles = \App\Models\Article::getAllLast(3);
var_dump($articles);

