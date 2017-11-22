<?php
include __DIR__ . '/header.php';
$news = new \App\Models\News();

?>
    <body>
<div id="container">
    <header><h1>Главные новости из Малых Васюков</h1></header>
    <nav>
        <p><a href="/">На главную</a></p>
    </nav>
    <article>
        <?php
        require __DIR__ . '/../autoload.php';
        $article = \App\Models\News::findById($_GET['id'])[0];
        ?>
        <input type="text" value="<?php echo $article->caption; ?>">
        <br>
        <textarea><?php echo $article->text; ?>"</textarea>
        <br>
        <input type="text" value="<?php echo $article->author; ?><">
    </article>

<?php
include __DIR__ . '/footer.php';
?>