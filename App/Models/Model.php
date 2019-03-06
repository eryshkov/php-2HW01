<?php

namespace App\Models;
use App\Db;

class Model
{
    protected static $table;

    public $id;

    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . self::$table;

        return $db->query($sql, [], self::class);
    }

}