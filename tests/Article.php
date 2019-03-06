<?php

use App\Models\Article;

require __DIR__ . '/../autoload.php';

$id = '1';
$article = Article::findById($id);
assert($article instanceof Article);
assert($id === $article->id);
