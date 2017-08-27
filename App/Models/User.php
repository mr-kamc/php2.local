<?php

namespace App\Models;


use App\Db;

class User extends Model
{
    const TABLE = 'test';
    public $name;
    public $email;
    public $profession;

}