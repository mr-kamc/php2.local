<?php

namespace App\Models;

use App\Model;

class User extends Model
{
    const TABLE = 'test';
    public $name;
    public $email;
    public $profession;

}