<?php

namespace App;

use App\Db;

abstract class Model
{
    const TABLE = '';

    public static function findAll()
    {
        $db = Db::instance();
        $res = $db->query('SELECT * FROM ' . static::TABLE, static::class);
        return $res;
    }

    public static function findById($id)
    {
        $db = Db::instance();
        $res = $db->query('SELECT * FROM ' . static::TABLE . ' WHERE id = :id', static::class, [':id' => $id]);
        if ($res){
            return $res;
        } else {
            return false;
        }
    }

    public static function findLast($lim)
    {
        $db = Db::instance();
        $res = $db->query('SELECT *FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $lim, static::class);
        if ($res){
            return $res;
        } else {
            return false;
        }
    }
}