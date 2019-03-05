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

    public function query(string $sql, array $params = [], $class = null)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        $data = $sth->fetchAll();
        if (null === $class) {
            return $data;
        }

        $ret = [];
        foreach ($data as $row) {
            $obj = new $class();
            foreach ($row as $name => $value) {
                $obj->$name = $value;
            }
            $ret[] = $obj;
        }
        return $ret;
    }
}