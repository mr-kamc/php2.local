<?php

require __DIR__ . '/autoload.php';

$news = \App\Models\News::findLast(2);


include __DIR__ . '/templates/header.php';
include __DIR__ . '/templates/content.php';
include __DIR__ . '/templates/footer.php';
