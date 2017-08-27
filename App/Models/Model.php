<?php

namespace App\Models;

use App\Db;

abstract class Model
{
    const TABLE = '';

    public static function findAll()
    {
        $db = new Db();
        $res = $db->query('SELECT * FROM ' . static::TABLE, static::class);
        return $res;
    }
}