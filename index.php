<?php

require __DIR__ . '/autoload.php';
/*
$db = new \App\Db();


$news = \App\Models\News::findLast(2);

include __DIR__ . '/templates/header.php';
include __DIR__ . '/templates/content.php';
include __DIR__ . '/templates/footer.php';
*/

$users = \App\Models\User::findAll();

function sendEmail(User $user, string $message)
{
    echo 'Send message for ' . $user->email;
}

sendEmail($users[0], 'Hello');