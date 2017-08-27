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
            require __DIR__ . '/../autoload.php';
            $article = \App\Models\News::findById($_GET['id'])[0];
        ?>

        <h2><?php echo $article->caption; ?></h2>
        <p><?php echo $article->text; ?></p>
        <p><?php echo $article->author; ?></p>
    </article>

<?php
include __DIR__ . '/footer.php';
?>