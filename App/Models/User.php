<?php

namespace App\Models;


use App\Db;

class User
{
    const TABLE = 'test';
    public $name;
    public $email;
    public $profession;

    public static function findAll()
    {
        $db = new Db();
        $res = $db->query('SELECT * FROM ' . self::TABLE, self::class);
        return $res;
    }

}