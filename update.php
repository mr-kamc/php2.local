<?php

require __DIR__ . '/autoload.php';

if (isset($_POST['id']) && isset($_POST['caption']) && isset($_POST['text']) && isset($_POST['author'])){
    $article = \App\Models\News::findById($_POST['id']);
    $article->caption = $_POST['caption'];
    $article->text = $_POST['text'];
    $article->author = $_POST['author'];
    $article->save();
    header('Location: /admin.php');
} else {
    echo 'error';
}
