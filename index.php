<?php

require __DIR__ . '/autoload.php';



$news = \App\Models\News::findLast(3);

include __DIR__ . '/App/templates/index.php';

