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

        <h2><?php echo $article->caption; ?></h2>
        <p><?php echo $article->text; ?></p>
        <p><?php echo $article->author; ?></p>
        <a href="/App/templates/create.php?id=<?php echo $article->id; ?>" class="btn btn-primary">редактировать</a>
        <a href="/delete.php?id=<?php echo $article->id; ?>&op=del" class="btn btn-primary">удалить</a>
    </article>

<?php
include __DIR__ . '/footer.php';
?>