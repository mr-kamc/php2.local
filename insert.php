<?php

require __DIR__ . '/autoload.php';

if (isset($_POST['caption']) && isset($_POST['author']) && isset($_POST['text'])){
    $article = new \App\Models\News();
    $article->caption = $_POST['caption'];
    $article->text = $_POST['text'];
    $article->author = $_POST['author'];
    $article->save();
    header('Location: /index.php');
} else {
    echo 'error';
}
