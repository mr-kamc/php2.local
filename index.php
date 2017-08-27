<?php

require __DIR__ . '/autoload.php';

$db = new \App\Db();


$users = \App\Models\User::findById('1');

var_dump($users);
