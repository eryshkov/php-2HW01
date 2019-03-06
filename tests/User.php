<?php

use App\Models\User;

require __DIR__ . '/../autoload.php';

$id = '1';
$article = User::findById($id);
assert($article instanceof User);
assert($id === $article->id);
