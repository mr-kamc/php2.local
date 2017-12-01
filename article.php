<?php

require __DIR__ . '/autoload.php';

if(isset($_GET['id']) && (false != \App\Models\News::findById($_GET['id']))){
    $id = $_GET['id'];
    $article = \App\Models\News::findById($id);
    include __DIR__ . '/App/templates/article.php';
} else {
    http_response_code(404);
}