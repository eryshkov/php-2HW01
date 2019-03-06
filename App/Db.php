<?php

namespace App;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $dsn = 'mysql:host=php-2hw01.mac;port=8889;dbname=php2hw01';
        $this->dbh = new \PDO($dsn, 'eug', '123');
        $this->dbh->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
    }

    public function query(string $sql, array $params = [], $class = null): array
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        $data = $sth->fetchAll(\PDO::FETCH_CLASS, $class);

        return $data;
    }
}