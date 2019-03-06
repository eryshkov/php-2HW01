<?php

namespace App\Models;
use App\Db;

abstract class Model
{
    protected static $table = '';

    public $id;

    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::$table;
        var_dump($sql);

        return $db->query($sql, [], static::class);
    }

}