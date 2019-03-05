<?php

namespace App;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $dsn = 'mysql:host=php-2hw01.mac;port=8889;dbname=php2hw01';
        $this->dbh = new \PDO($dsn, 'eug', '123');
        $this->dbh->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_NAMED);
    }

    public function query(string $sql, array $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll();
    }
}