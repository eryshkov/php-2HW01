<?php
require __DIR__ . '/../autoload.php';
use App\Models\Article;
use App\Db;

$db = new Db();

$query = 'UPDATE undefTable SET title=:newTitle WHERE id=:id';
$params = [
    ':id' => 1,
    ':newTitle' => 'test',
];
$result = $db->execute($query, $params);
assert(false === $result);

$query = 'UPDATE news SET title=:newTitle WHERE id=:id';
$params = [
    ':id' => 3,
    ':newTitle' => 'nil',
];
$result = $db->execute($query, $params);
assert(true === $result);