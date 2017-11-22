<?php

require __DIR__ . '/autoload.php';

$news = \App\Models\News::findLast(2);

/*
include __DIR__ . '/templates/header.php';
include __DIR__ . '/templates/content.php';
include __DIR__ . '/templates/footer.php';
*/



$user = new \App\Models\User();
$user->name = 'Джон';
$user->email = 'dozor_foreva@gmail.com';
$user->profession = 'Главнокомандующий';
$user->id = 2;
$user->delete();
