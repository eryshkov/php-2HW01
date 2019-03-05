<?php

require __DIR__ . '/autoload.php';

$db = new \App\Db();
$sql = 'SELECT * FROM news';
$data = $db->query($sql, [], 'App\Models\Article');
var_dump($data);