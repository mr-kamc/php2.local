<?php

require __DIR__ . '/autoload.php';

$news = \App\Models\News::findLast(2);

/*
include __DIR__ . '/templates/header.php';
include __DIR__ . '/templates/content.php';
include __DIR__ . '/templates/footer.php';
*/


/*
$user = new \App\Models\User();
$user->name = 'Семюэль';
$user->email = 'dozor_foreva@gmail.com';
$user->profession = 'Стюарт';
$user->insert();

$db = \App\Db::instance();

$id = $db->lastInsertId();
var_dump($id);
*/

$config = \App\Config::instance();
var_dump($config->data);