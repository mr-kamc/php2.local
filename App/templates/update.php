<?php
include __DIR__ . '/header.php';

?>
    <body>
<div id="container">
    <header><h1>Главные новости из Малых Васюков</h1></header>
    <nav>
        <p><a href="/">На главную</a></p>
    </nav>
    <article>
        <?php
        require __DIR__ . '/../../autoload.php';
        $article = \App\Models\News::findById($_GET['id']);
        ?>
        <form method="post" action="/update.php">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <input type="text" name="caption" value="<?php echo $article->caption; ?>">
            <br>
            <textarea name="text"><?php echo $article->text; ?></textarea>
            <br>
            <input type="text" name="author" value="<?php echo $article->author; ?>">
            <input type="submit" value="отправить">
        </form>
    </article>

<?php
include __DIR__ . '/footer.php';
?>

    //to-do доделать
