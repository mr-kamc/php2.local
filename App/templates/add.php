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
        <form method="post" action="/index.php">
            <input type="text" name="caption" placeholder="Введите название статьи">
            <br>
            <textarea name="text" placeholder="Текст новости"></textarea>
            <br>
            <input type="text" name="author" placeholder="автор">
            <input type="submit" value="отправить">
        </form>
    </article>

<?php
include __DIR__ . '/footer.php';
?>