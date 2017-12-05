<?php

require __DIR__ . '/autoload.php';

if (isset($_GET['id']) && (false != \App\Models\News::findById($_GET['id']))){
    $id = $_GET['id'];
    $article = \App\Models\News::findById($id);
    $article->delete();
    header('Location: /index.php');
} else {
    echo 'error';
}
