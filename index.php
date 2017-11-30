<?php

require __DIR__ . '/autoload.php';

if ((isset($_POST))&&(!empty($_POST))){
    $news = new \App\Models\News();
    $news->id = $_POST['id'];
    $news->caption = $_POST['caption'];
    $news->text = $_POST['text'];
    $news->author = $_POST['author'];
    $news->save();
}

if ((isset($_GET))&&($_GET['op']=='del')){
    $news = new \App\Models\News();
    $news->id = $_GET['id'];
    $news->delete();
}

$news = \App\Models\News::findLast(3);

include __DIR__ . '/App/templates/index.php';

/*


if ((isset($_POST))&&(!empty($_POST))){
    $news = new \App\Models\News();
    $news->id = $_POST['id'];
    $news->caption = $_POST['caption'];
    $news->text = $_POST['text'];
    $news->author = $_POST['author'];
    $news->save();
}

if ((isset($_GET))&&($_GET['op']=='del')){
    $news = new \App\Models\News();
    $news->id = $_GET['id'];
    $news->delete();
}

$news = \App\Models\News::findLast(3);

include __DIR__ . '/templates/header.php';
include __DIR__ . '/templates/content.php';
include __DIR__ . '/templates/footer.php';
*/
