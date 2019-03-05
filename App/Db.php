<?php

namespace App;

class Db
{
    public function query(string $sql, array $params = [])
    {
        $dsn = 'mysql:host=php-2hw01.mac;port=8889;dbname=php2hw01';
        $dbh = new \PDO($dsn, 'eug', '123');
    }
}