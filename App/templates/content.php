<body>
<div id="container">
    <header><h1>Главные новости из Малых Васюков</h1></header>
    <nav>
        <p><a href="/">На главную</a></p>
    </nav>
    <article>
        <?php foreach ($news as $article): ?>
            <ul>
                <li><a href="/App/templates/article.php?id=<?php echo $article->id; ?>"><h2><?php echo $article->caption; ?></h2></a></li>
                <li><?php echo $article->text ?></li>
            </ul>
            <ul>
                <li><a href="/App/templates/create.php?id=<?php echo $article->id; ?>">редактировать</a></li>
                <li><a href="/index.php?id=<?php echo $article->id; ?>&op=del">удалить</a></li>
                <li><a href="/App/templates/add.php">добавить</a></li>
            </ul>

        <?php endforeach; ?>
    </article>
